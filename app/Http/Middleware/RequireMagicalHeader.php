<?php

namespace App\Http\Middleware;

use Closure;

class RequireMagicalHeader
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
        if(!$request->headers->has('magical-header')) {
            abort(418, 'Unauthorized');
        }
        return $next($request);
    }
}
