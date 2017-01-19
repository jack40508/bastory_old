<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class BastoryMiddleware
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
        dd(Auth::user());

        return $next($request);
    }
}
