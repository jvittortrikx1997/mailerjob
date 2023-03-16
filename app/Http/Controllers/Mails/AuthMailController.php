<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    public function sendRegisterMail(){
        $mail = new RegisterEmail();
        Mail::to('vitorjoaocomp1997@gmail.com')->send($mail);
    }
}
