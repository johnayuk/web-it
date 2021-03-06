<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if(! auth()->user()->role == 'admin'){
            if(Auth::check() && Auth::user()->role == 'admin'){ 
                return $next($request);
        }else{
            return redirect('login');
          
        }
    }
}
