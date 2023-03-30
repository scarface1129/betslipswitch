<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use App\Models\plans;
use App\Models\Bookies;
use App\Models\conversion;
use Illuminate\Http\Request;
use App\Models\ConversionHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Laravel\Passport\TokenRepository;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Comparator\Exception;
use Laravel\Passport\RefreshTokenRepository;


class PassportController extends Controller
{
    /**
     * Register user.
     *
     * @return json
     */
    public function register(Request $request)
    {
        $input = $request->only(['name', 'email', 'phone', 'password']);

        $validate_data = [
            'name' => 'required|string|min:4',
            'email' => 'required|email',
            'phone' => 'nullable|numeric|min:10',
            'password' => 'required|min:8',
        ];

        $validator = Validator::make($input, $validate_data);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid input',
                'errors' => $validator->errors()
            ]);
        }
        $email = $input['email'];
        $phone = $input['phone'];
        $user  = User::where('email', $email)->first() ?? false;
        $user_phone  = User::where('phone', $phone)->first() ?? false;
        //in_active user
        if ($user) {
            return response()->json([
                'success' => false,
                'message' => 'Email already exists, please login',
            ]);
        }
        if ($user_phone && $user_phone['phone'] != null) {
            return response()->json([
                'success' => false,
                'message' => 'Phone number already exists, please login',
            ]);
        }
        $code = random_int(1000, 9999);
        if ($input['email'] == 'betslipswitch@gmail.com') {
            $is_admin = true;
        } else {
            $is_admin = false;
        }
        $user = User::create([
            'user_id' => md5($input['email']),
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'activation_code' => $code,
            'is_admin' => $is_admin,
            'password' => Hash::make($input['password'])
        ]);

        $this->sendEmail($input['email'], $code);

        return response()->json([
            'success' => true,
            'message' => 'User registered succesfully, Confirm email, then Use Login method to receive token.'
        ], 200);
    }
    public function sendEmail($email, $code)
    {
        $data = array(
            'body' => $code,
        );
        $view = 'email.index';
        try {
            // Mail::to('agboemmanuel002@gmail.com')->send(new MailNotify($data));
            Mail::send($view, $data, function ($message) use ($email) {
                $message->to($email, 'BetSlipSwitch')->subject('BetslipSwich Account Email Confirmation');
                $message->from('betslipswitch@betslipswitch.com', 'BetSlipSwitch');
            });


            // return redirect('login')->with('message', 'Successful');
            // return true;
        } catch (Exception $th) {
            // return redirect('/');
            return false;
        }
    }


    public function sendCode($email, $code)
    {
        $data = array(
            'body' => $code,
        );
        $view = 'email.forget_password';
        try {
            Mail::send($view, $data, function ($message) use ($email) {
                $message->to($email, 'BetSlipSwitch')->subject('BetslipSwich Account Email Confirmation');
                $message->from('betslipswitch@betslipswitch.com', 'BetSlipSwitch');
            });
        } catch (Exception $th) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong, try again',
            ]);
        }
    }
    /**
     * Forget Password.
     *
     * @return json
     */
    public function forgot_password(Request $request)
    {
        $input = $request->only(['email']);
        $email = $input['email'];
        $user  = User::where('email', $email)->first() ?? false;
        if ($user) {
            $code = $user->activation_code;
            $this->sendCode($email, $code);
            return response()->json([
                'success' => true,
                'message' => 'Password reset code sent',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Email doesnt exist',
            ]);
        }
    }

    /**
     * verify code.
     *
     * @return json
     */
    public function verify_code(Request $request)
    {
        $input = $request->only(['email', 'code']);
        $user  = User::where('activation_code', $input['code'])->first() ?? false;
        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'User Exists',
                'email' => $input['email'],
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User does not exist',

            ]);
        }
    }

    public function resend_code(Request $request)
    {
        $input = $request->only(['email']);
        $user  = User::where('email', $input['email'])->first() ?? false;
        if ($user) {
            $this->sendEmail($input['email'], $user->activation_code);
            // $user->update([
            //     'activation_code'=> random_int(1000, 9999),
            // ]);
            return response()->json([
                'success' => true,
                'message' => 'Please check your mail and verify your account',
                'email' => $input['email'],
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User does not exist',

            ]);
        }
    }
    public function update(Request $request)
    {
        $input = $request->only(['email', 'name', 'phone']);
        $user  = User::where('email', $input['email'])->first() ?? false;
        if ($user) {
            $user->update([
                'name' => $input['name'],
                'phone' => $input['phone'],
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Profile Updated',
                'email' => $input['email'],
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User does not exist',

            ]);
        }
    }


    public function delete(Request $request)
    {
        $input = $request->only(['email']);
        $email = $input['email'];
        $user = User::where('email', $email)->first() ?? false;
        if ($user) {
            $user->delete();
            return response()->json([
                'success' => true,
                'message' => 'User deleted successfully',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User does not exist',
            ]);
        }
    }
    public function change_password(Request $request)
    {
        $input = $request->only(['password', 'confirm_password', 'email']);
        $user  = User::where('email', $input['email'])->first() ?? false;
        if ($input['password'] != $input['confirm_password']) {
            return response()->json([
                'success' => false,
                'message' => 'Passwords does not match',
            ]);
        }
        if ($user) {
            $user->update([
                'password' => Hash::make($input['password']),
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Password Updated',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User does not exist',

            ]);
        }
    }
    public function email_verification(Request $request)
    {
        $input = $request->only(['email', 'code']);
        $user  = User::where('email', $input['email'])->first() ?? false;
        if ($user) {
            if ($user->is_active) {
                return response()->json([
                    'success' => true,
                    'message' => 'Email has been verified',
                    'email' => $input['email'],
                ]);
            }
            if ($user->activation_code == $input['code']) {
                $user->update([
                    'is_active' => true,
                    'activation_code' => random_int(1000, 9999),
                ]);
                return response()->json([
                    'success' => true,
                    'message' => 'Email verified',
                    'email' => $input['email'],
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Code is Invalid',
                    // 'email'=>$input['email'],
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User does not exist',
            ]);
        }
    }
    /**
     * reset password.
     *
     * @return json
     */
    public function reset_password(Request $request)
    {
        $input = $request->only(['email', 'password']);
        $email = $input['email'];
        $password = $input['password'];
        $user  = User::where('email', $email)->first() ?? false;
        if ($user) {
            $user->update([
                'password' => Hash::make($password),
            ]);
            return response()->json([
                'success' => true,
                'user' => $user->password,
                'message' => 'Password changed successfully',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User does not exist',
            ]);
        }
    }

    /**
     * Login user.
     *
     * @return json
     */
    public function login(Request $request)
    {

        if (is_numeric($request->get('phone'))) {
            $validate_data = [
                'phone' => 'required|numeric',
                'password' => 'required|min:8',
            ];
            $input = $request->only(['phone', 'password']);
            $phone = $input['phone'];
            $user  = User::where('phone', $phone)->first() ?? false;
        } else if (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {

            $validate_data = [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ];
            $input = $request->only(['email', 'password']);
            $email = $input['email'];
            $user  = User::where('email', $email)->first() ?? false;
        }
        if ($user) {
            if (!Hash::check($input['password'], $user->password)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Incorrect Password',

                ]);
            }
            if ($user->is_active == 0) {
                return response()->json([
                    'success' => false,
                    'message' => 'Account not verified',
                    'is_active' => $user->is_active,
                ]);
            }
        }

        $validator = Validator::make($input, $validate_data);
        //validation error
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please see errors parameter for all errors.',
                'errors' => $validator->errors()
            ]);
        }


        // authentication attempt
        //successful login
        if (auth()->attempt($input)) {
            $token = auth()->user()->createToken('passport_token')->accessToken;

            return response()->json([
                'success' => true,
                'message' => 'User login succesfully, Use token to authenticate.',
                'token' => $token,
                'data' => auth()->user()
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User does not exist.'
            ], 401);
        }
    }

    /**
     * Access method to authenticate.
     *
     * @return json
     */
    public function userDetail()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data fetched successfully.',
            'data' => auth()->user()
        ], 200);
    }
    public function bookies()
    {
        $data = Bookies::all();
        $mainData = json_decode($data[0]['plateform'], true);
        foreach ($mainData['data']['bookies'] as $object) {
            $arrays[] =  (array) $object;
        }

        return response()->json([
            'success' => true,
            'message' => 'Data fetched successfully.',
            'data' => $arrays
        ], 200);
    }
    //   public function conversion()
    // {
    //     $data = conversion::all();
    //     $mainData = json_decode($data[0]->conversion,true);
    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Data fetched successfully.',
    //         'data' => $mainData,
    //     ], 200);
    // }

    public function conversions()
    {
        $data = ConversionHistory::where('user_id', auth()->user()->user_id)->get();
        $mainData = json_decode($data, true);
        return response()->json([
            'success' => true,
            'message' => 'Data fetched successfully.',
            'data' => $mainData,
        ], 200);
    }

    public function plans()
    {
        $plans = plans::all();
        return response()->json([
            'success' => true,
            'message' => 'Data fetched successfully.',
            'data' => $plans,
        ], 200);
    }
    public function create_conversion(Request $request)
    {
        $input = $request->only(['from_code', 'destination_code', 'booking_code', 'status']);
        $conversion = new ConversionHistory();
        $conversion->user_id = auth()->user()->user_id;
        $conversion->converted_from = $input['from_code'];
        $conversion->converted_to = $input['destination_code'];
        $conversion->code = $input['booking_code'];
        $conversion->created_at = date('Y-m-d H:i:s');
        $conversion->updated_at = date('Y-m-d H:i:s');
        $conversion->status = $input['status'];
        if ($conversion->user_id) {
            // $conversion->save();
            return response()->json([
                'success' => true,
                'message' => auth()->user()->user_id,
            ], 200);
        } else {
            return response()->json([
                'success' => true,
                'message' => 'Data Not saved.',
            ], 200);
        }
    }
    /**
     * Logout user.
     *
     * @return json
     */
    public function logout()
    {
        $access_token = auth()->user()->token();

        // logout from only current device
        $tokenRepository = app(TokenRepository::class);
        $tokenRepository->revokeAccessToken($access_token->id);

        // use this method to logout from all devices
        // $refreshTokenRepository = app(RefreshTokenRepository::class);
        // $refreshTokenRepository->revokeRefreshTokensByAccessTokenId($$access_token->id);

        return response()->json([
            'success' => true,
            'message' => 'User logout successfully.'
        ], 200);
    }
    public function convert(Request $request)
    {
        $input = $request->only(['from', 'to', 'betting_token']);
        $from = $input['from'];
        $to  = $input['to'];
        $booking_code = $input['betting_token'];
        $api_key = 'ZVZLd1JoUnA5d0czdEhGaDUxcUE2T0N1dmlMN2Rza1JrUkNLZXJWN0YwQ0JOKzFvVUkwWkpFT0VsV0JNRitXbg==';
        $response = Http::timeout(300)->get("http://convertbetcodes.com/api/conversion_v2?from=$from&to=$to&booking_code=$booking_code&api_key=$api_key");
        $data = $response;
        $data = (json_decode($data));
        if ($data == null) {
            return response()->json([
                'success' => false,
                'message' => 'Your booking code cound not be converted'
            ], 200);
        } else {

            return response()->json([
                'success' => true,
                'data' => $data,
            ], 200);
        }
    }
}
