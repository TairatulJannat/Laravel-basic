<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function  sendEmail()
    {
        $details =[
            'title'=>'Mail from Surfside Media',
            'body'=>'This is for tesing mail using gmail'
        ];
        Mail::to("tairatuljannat008@gmail.com")->send(new TestMail($details)); 
        return "Email Sent";
    }
}
