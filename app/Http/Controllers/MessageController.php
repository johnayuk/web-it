<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Auth\Events\Validated;
use App\Http\Requests\MessageRequest;
use App\User;


class MessageController extends Controller
{

    public function tables()
    {

        $messages = Message::all();

     

        
        return view('tables',compact('messages'));
    }

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


    public function deleteMessage($id)
    {
        $appointment = Message::where('id',$id)->delete();

        return redirect('tables')->with('success', 'file deleted');
    }
}
