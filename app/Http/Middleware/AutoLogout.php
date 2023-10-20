<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AutoLogout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $lastActivity = $user->last_activity;

            // Set the idle timeout (in minutes)
            $timeout = 15;

            if (now()->diffInMinutes($lastActivity) > $timeout) {
                Auth::logout();
                return redirect()->route('login-page')->with('auto_logout', 'Anda telah logout karena inaktivitas.');
            }
        }

        return $next($request);
    }
}
