<?php

namespace Framework\Http\Middleware;

use Closure;
use Auth;

class Admin
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
        if((int) Auth::user()->is_admin !== 1 ){
            return back();
        }
          return $next($request);
        
    }
}
