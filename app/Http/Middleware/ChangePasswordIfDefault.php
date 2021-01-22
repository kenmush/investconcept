<?php

namespace App\Http\Middleware;

use App\Services\Investor;
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
        $userFromAPI = (new Investor())->checkFirstTimeLogin($request->user()->api_id);
        if ($userFromAPI['status'] ) {
            return redirect()->route('changepassword');
        }
//        if (!$userFromAPI['verified']) {
//            return redirect()->route('questionarre');
//        }
        return $next($request);
    }
}