<?php

namespace App\Http\Middleware;

use Closure;
use Auth; //add authentication to admin

class admin
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
        //for admin middleware implementation
        if(!(Auth::user()->level=='admin')){
            return redirect()->back();
        }
        //for admin middleware implementation
        return $next($request);
    }
}
