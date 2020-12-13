<?php

namespace App\Http\Middleware;

use Closure;

class ChangePasswordIfDefault
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
        if ($request->user()->first_login) {
            return redirect()->route('changepassword');
        }
        return $next($request);
    }
}