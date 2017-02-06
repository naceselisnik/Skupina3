<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class LoginController extends Controller
{
	public function loggedIn(Request $request)
	{
		$email = $request->input('email');
		$pw = $request->input('password');
		$pw1 = strip_tags(substr($pw, 0, 32));
		$username1 = strip_tags(substr($email, 0, 32));
		$cleanpw = crypt($pw1, '$!PorkaMadOnaPantn3r!!!!Kaaa_delaaas;393');
		if(User::where('email',$username1)->where('password',$cleanpw)->count() == 1)
		{
			$User = User::where('email',$username1)->where('password',$cleanpw)->first();
			$name = $User->name;
			$surname = $User->surname;
			$user_id = $User->id;
			$email = $User->email;
			$admin = $User->administrator;
			Session::put('name',$name);
			Session::put('surname',$surname);
			Session::put('user_id',$user_id);
			Session::put('email',$email);
			Session::put('admin',$admin);
			return redirect('/');
		}
		else
		{
			return view('/login');
		}
	}
}
