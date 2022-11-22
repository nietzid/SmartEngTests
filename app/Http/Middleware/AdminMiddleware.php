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
        if (!Auth::user()->role_as == '1') {
            return redirect()->route('/home')->with('status', 'You are not admin');
        }
        // else if (!Auth::user()->role_as == '1' && !Auth::user()->role_as == '2') {
        //     return redirect()->route('/home')->with('status', 'You are not admin');
        // }
        return $next($request);
    }
}