<?php

namespace App\Http\Middleware;

use Closure;

class As_adminMiddleware
{
     public function handle($request, Closure $next)
    {
        if (session('res')) {
            return $next($request);
        }

        return view('admin.houtai.index');
    }

}
