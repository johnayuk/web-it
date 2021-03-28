<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Message;
use App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    // public function __construct()
    // {
    //     // $this->middleware('auth');
    //     $this->middleware('admin');
    // }



    public function admin(){
        
        return view('admin');
    }


    public function users_tables()
    {
       $users = User::all();

       return view('user_table')->with('users',$users);
    }


   

    public function createUser(UserRequest $data)
    {
        $validated = $data->validated();

        

        $users= new User();
        
        $users->first_name = request('first_name');
        $users->last_name = request('last_name');
        

        
        if ($users->save()) {
            // dd($users);
              return redirect('users_tables');
        }

    }

    
}