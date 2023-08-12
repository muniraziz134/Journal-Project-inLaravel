<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()) {
            $role = Auth::user()->role;
            if ($role === 'admin') {
                return $next($request);
            }
            abort(403, 'NOT AUTHORIZES');
        }
    }
}
