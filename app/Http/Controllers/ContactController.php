<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class ContactController extends Controller
{
    //
    public function index(){
        return view('contact');
    }
    public function send(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);
        Mail::send('emails.contact',[
            'name'=>$request->name,
            'email'=>$request->email,
            'msg'=> $request->meesage
        ],function($mail) use ($request){
            $mail->to('jyotikg285@gmail.com');
            $mail->subject('New contact message');
        });
        
         return back()->with('success','message sent successfully!');
         
    }
}
