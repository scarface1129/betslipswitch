<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\Comparator\Exception;

class MailController extends Controller
{
    public function index(){
        $data = [
            'subject'=>'BetSlipSwitch',
            'body'=>'This Is for Your Password delivery code reste '

        ];
        try {
            Mail::to('agboemmanuel002@gmail.com')->send(new MailNotify($data));
            return redirect('/converter')->with('message', 'Successful');;
        } catch (Exception $th) {
            return redirect('/converter');
        }
    }
}
