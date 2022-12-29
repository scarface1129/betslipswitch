<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FaceBookController extends Controller
{
/**
 * Login Using Facebook
 */
 public function loginUsingFacebook()
 {
    return Socialite::driver('facebook')->redirect();
 }

 public function callbackFromFacebook()
 {
  try {
       $user = Socialite::driver('facebook')->user();
       $finduser = User::where('email', $user->email)->first();
       dd($user);
       if($finduser){
       
        Auth::login($finduser);

        return redirect()->intended('converter');

    }{
        $newUser = User::create([
            'user_id'=> md5($user->email),
            'name' => $user->name,
            'email' => $user->email,
            'phone' => null,
            'password' => Hash::make($user->id)
        ]);

        Auth::login($newUser);

        return redirect()->intended('converter');
    }
       } catch (\Throwable $th) {
          throw $th;
       }
   }
}
