<?php

namespace App\Http\Middleware;

use Closure;

class As_homeMiddleware
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
       if(session('aaa')){
        return $next($request);
       }
        return view('home.login.index');
    }
}
