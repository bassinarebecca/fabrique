<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Test;
use App\Mail\MailNotify;



class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title' => 'Mail de validation',
            'body' => 'Merci de bien vouloir valider le mail'
        ];
        Mail::to("ismaelouiya999@gmail.com")->send(new \App\Mail\Test($details));
        return "Email envoyer";
    }
}
