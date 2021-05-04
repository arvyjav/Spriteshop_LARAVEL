<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Uploader
{
    
    public function handle($request, Closure $next)
    {
        if(auth()->user()->level==2){

            return $next($request);
        }
        return redirect('/vout');
       
    }
}
