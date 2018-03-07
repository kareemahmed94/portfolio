<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	
	public function create()
	{
		return view('contact.create');
	}

	public function store(Request $request)
	{
		$this->validate($request,[
				'name' => 'required',
				'subject' => 'required',
				'email' => 'required|email',
				'message' => 'required'
		]);

	\Mail::send('contact.message',['msg'=>$request->message,'email' =>$request->email],function($mail) use($request){
		$mail->from($request->email,$request->name);

		$mail->to('kareemahmed73@gmail.com')->subject($request->subject);
	});

	return redirect()->back()->with('flash_message' , 'Thank You For Your Message');
	}

}
