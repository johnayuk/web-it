<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;



class EmailController extends Controller
{
public function sendmail(Request $request){


    $data = request()->validate([
        'name' =>  'required',
        'message' => 'required',
        'email' => 'required|email'
     ]);
        
 Mail::to('john1234ayuk@gmail.com')->send(new ContactMail($data));


 return redirect('/')->with('success', 'Thank you for contacting us');
}

  
}
