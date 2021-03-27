<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class UserController extends Controller
{
    public function admin(){
        
        return view('admin');
    }


    public function tables(){

        $messages = Message::all();
        
        return view('tables')->with('messages',$messages);
    }
}