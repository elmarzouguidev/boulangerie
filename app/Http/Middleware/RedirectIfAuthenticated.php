<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            //dd($guard);

            if ($guard === 'admin') {
              // dd('Yes admin');
                return redirect()->route('admin.dash');

            } else if ($guard === 'web') {

                return redirect()->route('user.account');
            }

            return redirect()->route('home');
        }

        return $next($request);
    }
}
