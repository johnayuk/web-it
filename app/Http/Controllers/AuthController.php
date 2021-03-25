<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(){
        
        return view('auth.login');
    }



    public function loginUser(LoginRequest $request)
    {
        $validated = $request->validated();

        $credentails = $request->only('email','password');

        if(Auth::attempt($credentails)){

            if (Auth::user()->role == 'admin') {
               return view ('.admin');

            }

        }else {
              return redirect('login')->withErrors('Please you have to register');
         }
    }
}