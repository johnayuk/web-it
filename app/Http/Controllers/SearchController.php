<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\User as AppUser;

class SearchController extends Controller
{
 
    public function search_user(Request $request)
    {
        $search = $request->get('search');

        $users = DB::table('users')->where('id', $request->search)->paginate(5);

        return view('user_table',compact('users'));
    }

}
