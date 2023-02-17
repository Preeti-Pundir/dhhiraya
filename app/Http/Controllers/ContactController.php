<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $req){

        $req->validate([
            "name" => 'required',
            "email" => 'required|email',
            "msg" => 'required'
        ]);

        $data = [
            "name"=>$req->name,
            "email"=>$req->email,
            "msg"=>$req->msg
        ];
        //  dd($data);

        Contact::create($data);
        Mail::send('frontend.pages.email',$data,function($message) use ($data){

            // $message->to($data['email']);
            $message->to('skyweb1905@gmail.com');
            $message->subject('Mail from Website');

        });

        return back()->with(['message' => 'Email sent successfully, We will get in touch with you as soon as posible.']);

    }
}