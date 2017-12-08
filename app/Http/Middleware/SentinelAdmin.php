<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Redirect;

class SentinelAdmin
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
        if(!Sentinel::check())
            return Redirect::to('admin/signin')->with('info', 'You must be logged in!');

        else if(!Sentinel::inRole('admin'))
            return Redirect::to('my-account');

        return $next($request);
    }
}