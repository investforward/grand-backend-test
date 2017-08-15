<?php

namespace App\Http\Middleware;

use Closure;

class LogRequest
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
        \DB::table('request_log')->insert(
            ['route' => $request->path(), 'has_magic_header' => $request->header('magical-header')!=null?true:false]
        );
        return $next($request);
    }
}
