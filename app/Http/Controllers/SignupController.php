<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function signup_form(){
        return view('signup');
    }

    public function signup_check(Request $request){
        $request->validate(
            [
                'username'=> 'required',
                'password'=> 'required|min:8|confirmed',
                'password_confirmation'=> 'required|min:8'
            ]
            );


            echo "Signed up successfully";
    }
}
