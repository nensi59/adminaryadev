<?php

namespace App\Http\Controllers;
use  Mail;
use Illuminate\Http\Request;

class contact_mail extends Controller
{
    public function contact()
    {
        return view('customer.contact_us');
    }
    public function contactus(Request $request)
    {
        $request->validate([
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_subject' => 'required',
            'massage' => 'required'
            ]);
        Mail::send('emails.contactmail',[
            'contact_name'=>$request->contact_name,
            'contact_email'=>$request->contact_email,
            'contact_subject'=>$request->contact_subject,
            'massage'=>$request->massage   
        ],function($mail)use($request){
            $mail->from("aryadevchamical@gmail.com",$request->contact_name);
            $mail->to("aryadevchamical@gmail.com")->subject("Contact-us Mail");
        });
       return view('customer.contact_us');
    }
}
