<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use App\Mail\MailNotify;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Comparator\Exception;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['nullable', 'numeric', 'min:10','unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $code = random_int(1000, 9999);
        $email = $data['email'];
        if($data['email'] == 'betslipswitch@gmail.com'){
            
            $is_admin = true;
        }else{
            $is_admin = false;
        }
        $user =  User::create([
            'user_id'=> md5($data['email']),
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'activation_code' => $code,
            'is_admin' => $is_admin,
            'password' => Hash::make($data['password']),
        ]);
         $this->sendEmail($email,$code);

        return $user;
    }
    
    protected function resendEmail(Request $request){
        $code = $request->only(['code']);
        $email = $request->only(['email']);
        // dd($email['email'], $code['code']);
        $this->sendEmail($email['email'],$code['code']);
        return redirect('/confirm_email')->with(['message'=>'A code was sent to your email']);
    }

    function sendEmail($email,$code){
        $data = array(
            // 'message'=>"BetSlipSwitch confirmation code",
            'body'=>$code,
            );
        $view = 'email.index';
        try {
            // Mail::to('agboemmanuel002@gmail.com')->send(new MailNotify($data));
            Mail::send($view, $data, function($message) use ($email) {
         $message->to($email, 'BetSlipSwitch')->subject
            ('BetslipSwich Account Email Confirmation');
         $message->from('noreply@purplepandaworld.ng','BetSlipSwitch');
      });
            
            
            // return redirect('login')->with('message', 'Successful');
            // return true;
        } catch (Exception $th) {
            // return redirect('/');
            return false;
        }
    }
    
    protected function EmailVerfication(Request $request){
        $code = $request->only(['code']);
        $account = User::where('activation_code',$code)->first();
        if($account){
        $account->update([
            'is_active' => true,
            'activation_code'=> random_int(1000, 9999),
        ]);
        $this->guard()->login($account);
        return redirect('/converter');}
        else{
            return redirect('/confirm_email')->with('message','Code is in_valid');
        }
    }
    protected function guard()
    {
        return Auth::guard();
    }
}
