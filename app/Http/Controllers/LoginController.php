<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class LoginController extends Controller
{
    public function postregister(Request $r)
    {
    	$rgs=new User();
    	$rgs->name=$r->username;
    	$rgs->email=$r->email;
    	$rgs->password=bcrypt($r->password);
    	$rgs->save();
    	return redirect('/register');
    }

    public function postuser(Request $r)
    {
    	//return $r;
    	$usr=User::where('name',$r->username)->first();
    	if($usr==null)
    	{
    		return redirect('/login');
    	}
    	elseif(Hash::check($r->password, $usr->password))
    	{
    		Auth::login($usr);
    		return redirect('/');
    	}
    	return redirect('/login');
    }
}
