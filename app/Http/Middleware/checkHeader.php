<?php

namespace App\Http\Middleware;

use Closure;
use Response;
use Request;

class checkHeader
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
        if(!Request::header('magical-header')){  
            return Response::json(['error'=>'Please set custom header "magical-header"'],418);  
        }  
 
        return $next($request);
    }
}
