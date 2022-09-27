<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if (auth()->user()->has('membership')) {
        //     return redirect('/home');
        // } else {
        //     return $next($request);
        // }

        if (Auth::check()) {
            if (Auth::user()->role_as == '1') //1 represents admin; 0 represents public user
            {
                return $next($request);
            } else {
                return redirect('/home')->with('status', 'Access denied. Please login as administrator.');
            }
        } else {
            return redirect('/login');
        }
    }
}
