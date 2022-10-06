<?php

namespace App\Http\Middleware;
use App\Http\Controllers\AuthController;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        $jwt = AuthController::getJWT();
        if($jwt->role == 'Admin') {
            return $next($request);
        } 
        else {
            abort(404);
        }
        return $next($request);
    }
}
