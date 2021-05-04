<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    
    public function handle( $request, Closure $next)
    {
        if(auth()->user()->level==1){

            return $next($request);
        }
        return redirect('/vout');
    }
}
