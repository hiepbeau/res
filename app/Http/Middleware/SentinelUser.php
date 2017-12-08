<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Redirect;

class SentinelUser
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
     /*   echo("this is handle");
        die;*/
        if(!Sentinel::check()){
            return Redirect::to('user/signin')->with('info', 'You must be logged in!');
        }else if(!Sentinel::inRole('user')){
            return Redirect::to('my-account');
        }

        return $next($request);
    }
}
