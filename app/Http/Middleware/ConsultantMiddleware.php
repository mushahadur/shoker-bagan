<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ConsultantMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }

        $uerRole = $request->user()->role;
        if($uerRole == 1){
            return redirect()->route('admin.dashboard');
        }
        elseif($uerRole == 2){
            return redirect()->route('nurseryOwner.dashboard');
        }
        elseif($uerRole == 3){
            return $next($request);
        }
        elseif($uerRole == 4){
            return redirect()->route('user.dashboard');
        }
    }
}
