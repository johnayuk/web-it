<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function admin(){
        
        return view('admin');
    }


    public function tables(){
        
        return view('tables');
    }
}


