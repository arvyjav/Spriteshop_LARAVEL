<?php

namespace App\Http\Middleware;

use Closure;

class User
{
    
    public function handle($request, Closure $next)
    {
        if(auth()->user()->level==3){

            return $next($request);
        }
        return redirect('/about');
    }
}
