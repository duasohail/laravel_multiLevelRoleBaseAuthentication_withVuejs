<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class manager
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
        if(!Auth::check()){
            return redirect()->route('login');
        }

        if(Aut::user()->role==1){

            return redirect()->route('admin');            
        }
        if(Aut::user()->role==2){

            return $next($request);
            
        }
        if(Aut::user()->role==3){

            return redirect()->route('user');
        }
    }
}
