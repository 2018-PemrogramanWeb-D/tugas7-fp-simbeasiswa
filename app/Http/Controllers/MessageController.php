<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    //
    public function postmessage(Request $r)
    {
    	$msg=new Message();
    	$msg->name=$r->name;
    	$msg->phone=$r->phone;
    	$msg->email=$r->email;
    	$msg->message=$r->message;
    	$msg->save();
    	return redirect('/');
    }

    public function viewmessage()
    {
    	$msg=Message::get();
    	return view('viewmessage',compact('msg'));
    }
}
