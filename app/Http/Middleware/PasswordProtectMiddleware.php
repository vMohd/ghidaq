<?php

namespace App\Http\Middleware;

use Closure;

class PasswordProtectMiddleware
{
    public function handle($request, Closure $next)
    {
        $pass = session('password');

        if ($pass !== 'root') {
            return redirect()->route('pass')->with('error', 'Incorrect password !');
        }
        // session()->forget('password');
        return $next($request);
    }
}



