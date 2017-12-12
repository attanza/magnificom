<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        if (Auth::check()) {
            $role = Auth::user()->getRole();
            if ($role === 'administrator') {
                return $next($request);
            } else {
                return response('/login')->withError('Request not allowed');
            }
        } else {
            return response('/login')->withError('Request not allowed');
        }
        
    }
}
