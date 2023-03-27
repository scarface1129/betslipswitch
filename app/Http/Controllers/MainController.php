<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\User;
use App\Models\plans;
// use App\Models\conversion;
use App\Models\Bookies;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\ConversionHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Conversion as GlobalConversion;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Comparator\Exception;
use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;

class MainController extends Controller
{
    
   public function index(Request $request) {
    // $clientIP = request()->ip();   
        return view('index');
    }
    public function conversions() {
        if(!Auth::check()){
            return redirect('/login');
        }
        $conversions = ConversionHistory::where('user_id', Auth::user()->user_id)->get();
        
            return view('conversions',['conversions'=>$conversions]);
        }
    public function fixtures() {
        if(!Auth::check()){
            return redirect('/login');
        }
         $api_key=env('FOOTBALL_API');
        
            return view('fixtures',['api_key'=>$api_key]);
        }
       public function UpdateProfile(Request $request, $id)
    
    {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'phone' => $request->Phone_number
        ]);

       return redirect('/converter');
    }
     public function ChangePassword(Request $request, $id)
    
    {
        $user = User::findOrFail($id);
        if($request->new_password == $request->confirm_password){
            $user->update([
                'password' => Hash::make($request->new_password),
            ]);
        }
       

       return redirect('/converter');
    }
    public function contact(Request $request) {
        $name = $request['name'];
        $email  = $request['email'];
        $message = $request['message'];
        $data = array(
            // 'subject'=>"BetSlipSwitch confirmation code",
            'body'=>$message,
            );
        $view = 'email.contact';
        try {
            // Mail::to('agboemmanuel002@gmail.com')->send(new MailNotify($data));
        Mail::send($view, $data, function($message) use ($email, $name) {
         $message->to('Betslipswitch@gmail.com', 'BetSlipSwitch')->subject
            ('BetslipSwich Account Email Confirmation');
         $message->from('noreply@purplepandaworld.ng', $email);
      });
            return redirect('converter')->with('contact', 'Successful');
        } catch (Exception $th) {
            return redirect('converter')->with('contact', 'Unsuccessful');
        }


        return redirect('/converter');
    }
    
    public function contact_us(Request $request) {
        $name = $request['name'];
        $email  = $request['email'];
        $message = $request['message'];
        $data = array(
            // 'subject'=>"BetSlipSwitch confirmation code",
            'body'=>$message,
            'email'=>$email,
            );
        $view = 'email.contact';
        try {
            // Mail::to('agboemmanuel002@gmail.com')->send(new MailNotify($data));
        Mail::send($view, $data, function($message) use ($email, $name) {
         $message->to('Betslipswitch@gmail.com', 'BetSlipSwitch')->subject
            ('BetslipSwich Account Email Confirmation');
         $message->from('noreply@purplepandaworld.ng', $email);
      });
            return redirect('contact-us')->with('contact', 'Successful');
        } catch (Exception $th) {
            return redirect('contact-us')->with('contact', 'Unsuccessful');
        }


        return redirect('/converter');
    }
    
    
    public function converter(Request $request) {
        $data = Bookies::all();
        $api_key=env('FOOTBALL_API');
        // $clientIP = request()->ip();
        // $Ip = $_COOKIE['Ip'] ?? '';
        // $times = $_COOKIE['times'] ?? '0';
        
        if(!Auth::check()){
            return redirect('/login');
        }
        // else{
        //     if($times >= 1){
        //         setcookie('Ip', $clientIP, time() + (86400 * 365), "/");
        //     }else{
        //         $times = $times + 1;
        //         setcookie('times', $times, time() + (86400 * 365), "/");
        //     }  
        // }
        if(Auth::user()->plan == null){
            $user = User::where('id', Auth::user()->id)->first();
            $user->plan = 'Free';
            $user->save();
            
        }
        $plans = plans::all();
        if(count($data) > 0){
            $mainData = json_decode($data[0]['plateform'],true);
            $bookies = $mainData['data']['bookies'];
            return view('converter',['bookie'=>$bookies,'api_key'=>$api_key,'plans'=>$plans] );
        }else{
            return view('converter', ['bookie'=>'','api_key'=>$api_key,'plans'=>$plans] );
        } 
    }
   public function store(Request $request){
        // runs a check for the remaining free conversion for a user
        if(Auth::user()->free_conversion < 1){
            return redirect('converter')->with('no_message','Request not coming from a trusted source');
        }
        // goggle recaptcha to prevent attacks on the form
        $score = RecaptchaV3::verify($request['g-recaptcha-response'],'converter');
        if($score < 0.5){
            return redirect('converter')->with('no_message','Request not coming from a trusted source');
        }
        //form parameters
        $from = $request['from'];
        $to  = $request['to'];
        $booking_code = $request['betting_token'];
        $api_key = env('API_KEY');
        $response = Http::get("http://convertbetcodes.com/api/conversion_v2?from=$from&to=$to&booking_code=$booking_code&api_key=$api_key");
        $data = $response; 
        $data = (json_decode($data));
        //checks if the api response is null
        if($data == null){
            $this->create_conversion('false',$from,$to,date('Y-m-d H:i:s'),$booking_code);
            return redirect('converter')->with('no_message','Your booking code cound not be converted');
        }
        else{
            try {
        $conversion = $data->data->conversion;
        //the booking code to be converted
        $booking_code = $conversion->booking_code;
        //converted booking code
        $destination_code = $conversion->destination_code ?? 'No destination Code';
        //games plateforms
        $list = $conversion->dump;
        //from
        $home = $list->home;
        //to
        $destination = $list->destination;
        //List of games 
        $games = $list->lists;
        $number_of_games = 0;
        $number_of_games_converted = 0;
        foreach($games as $game){
            $number_of_games++;
            if($game->is_converted){
                $number_of_games_converted++;                
            }
        }
        $info = [
            'message'=>'converted',
            'no_home'=>$number_of_games,
            'no_destination'=>$number_of_games_converted,
            'odds_home'=>$home->odds,
            'odds_destination'=>$destination->odds,
            'code_home'=>$booking_code,
            'code_destination'=>$destination_code,
            'bookie_home'=>$home->bookie,
            'bookie_destination'=>$destination->bookie,
            'games'=>$games,
            
        
        ];
        if($conversion->destination_code){
            $this->create_conversion('true',$from,$to,date('Y-m-d H:i:s'),$booking_code);
            $user = User::where('id', Auth::user()->id)->first();
            $user->free_conversion = $user->free_conversion - 1;
            $user->save();
            
        }else{
            $this->create_conversion('false',$from,$to,date('Y-m-d H:i:s'),$booking_code);
        }
        return redirect('converter')->with($info);
        }catch (Throwable $e) {
            report($e);
            $this->create_conversion('false',$from,$to,date('Y-m-d H:i:s'),$booking_code);
            return redirect('converter')->with('no_message','Your booking code cound not be converted');
        }
        }
    }
    public function create_conversion($status,$from,$to,$date,$booking_code)
    {
        $conversion = new ConversionHistory();
        $conversion->user_id = Auth::user()->user_id;
        $conversion->converted_from = $from;
        $conversion->converted_to = $to;
        $conversion->code = $booking_code;
        $conversion->created_at = $date;
        $conversion->updated_at = $date;
        $conversion->status = $status;
        if($conversion->user_id){
            $conversion->save();
        }
       
    }

    public function store_bookies(Request $request)
    {
        $api_key = env('API_KEY');
        $response = Http::get("http://convertbetcodes.com/api/supported_bookies?api_key=$api_key");
        $data = $response;
        //CREATE BOOKIE
        // $bookies = Bookies::create([
        //     'plateform'=> $data
        // ]);
        $Bookie = Bookies::findOrFail(1);
        $Bookie->update([
            'plateform'=> $data,
        ]);
        return redirect('/converter');}

}
