<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class user
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
            
            return redirect()->route('manager');
            
        }
        if(Aut::user()->role==3){

            return $next($request);
        }
    }
}
