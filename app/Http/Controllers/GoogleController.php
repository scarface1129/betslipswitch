<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
  
class GoogleController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            // dd($user);
            $finduser = User::where('email', $user->email)->first();
            
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('converter');
       
            }else{
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
      
        } catch (Exception $e) {
            // dd($e);
            // dd($e->getMessage());
            return redirect()->intended('/')->with('message','Something went wrong. Try using the form provided');
        }
    }
}