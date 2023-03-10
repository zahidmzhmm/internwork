<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!isset(auth()->user()->role)) {
            return redirect('/login')->with('error', 'Please login');
        }
        if (auth()->user()->role == 1) {
            return $next($request);
        }
        return redirect('/admin/login')->with('error', 'Permission Deny');
    }
}
