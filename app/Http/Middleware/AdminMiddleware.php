<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    
    {

        //if no user is logged in sends them back to the login screen
        if (!Auth::check()) {
            return redirect('login');
        }
        //authorizes the admin and lets him proceed
        if(Auth::user()->user_type=='admin'){

            return $next($request);
        }
        
        return redirect ('dashboard');
    }
}
