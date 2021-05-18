<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if (\Auth::user() && \Auth::user()->admin == 1) 
        //     { 
        //         return $next($request) 
        //     };
        if(!Auth::check()){
            return redirect()->route('login');
        }

        if(\Auth::user() && \Auth::user()->role==1){

            return $next($request);
        }
        if(\Auth::user() && \Auth::user()->role==2){

            return redirect()->route('manager');
        }
        if(\Auth::user() && \Auth::user()->role==3){

            return redirect()->route('user');
        }

    }
}
