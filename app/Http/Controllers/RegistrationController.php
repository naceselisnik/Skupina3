<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Session;

class RegistrationController extends Controller
{
    public function registrationForm(Request $request)
    {
        $name = $request->input('name');
        $surname = $request->input('surname');
        $email = $request->input('mail');
        $password1 = $request->input('password1');
        $password2 = $request->input('password2');

    

        if($password1 == $password2)
        {
            $pw = strip_tags(substr($password1, 0, 32));
            $cleanpw = crypt($pw, '$!PorkaMadOnaPantn3r!!!!Kaaa_delaaas;393'); 
            // $zakriptiranoGeslo = sha1($password1);

            if(User::where('email', $email)->count() == 0)
            {
                // return "ni v bazi";
                User::insert(
                ['name' => $name, 'surname' => $surname,'email' => $email, 'password' => $cleanpw]);
                return view('/login');
            }
            else
            {
                // return "je v bazi";
                return view('/registration');
            }

            
        }
    }
}
