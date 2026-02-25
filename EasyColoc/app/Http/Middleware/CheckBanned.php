<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
// use Illuminate\Support\Facades\Auth;
class CheckBanned
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $user = User::where('email', $request->email)->first();
        dd($request);
        dd(auth()->check());
        if ($user) {
            echo "yes";
            if (auth()->check()) {
                auth()->logout();
                return redirect()->route('login')->with('error', 'Votre compte est banni.');
            }
        } else {
            // echo "no";
        }
        return $next($request);
    }
}
