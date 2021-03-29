<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\User as AppUser;

class SearchController extends Controller
{
 
    public function search_user(Request $request)
    { $search = $request->get('search');
        $users = DB::table('users')->where('first_name', 'like', '%'.$search. '%') ->orWhere('last_name', 'LIKE', "%{$search}%")->simplePaginate();
        // $users = User::all();
        // $departments = Department::with(['doctors'])->get();
        return view('user_table',compact('users'));
    }

}
