<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Auth\Events\Validated;
use App\Http\Requests\MessageRequest;


class MessageController extends Controller
{
    public function createMessage(MessageRequest $message)
    {
        $validated = $message->validated();

        $data = new Message();
        
        $data->name = $message['name'];
        $data->email = $message['email'];
        $data->phone = $message['phone'];
        $data->interest = $message['interest'];
        

        
        if ($data->save()) {
            
              return redirect('/')->with('success', 'we will definately call you');
        }

    }
}
