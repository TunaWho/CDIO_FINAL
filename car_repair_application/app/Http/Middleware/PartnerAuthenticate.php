<?php

namespace App\Http\Middleware;

use Closure;

class PartnerAuthenticate
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
        if (!auth()->guard('partner')->check()) {
            return redirect('/partners/login');
        }

        return $next($request);
    }
}
