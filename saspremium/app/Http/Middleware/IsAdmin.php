<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        $user = Auth::user();
        if ($user->type == 'admin'){
            return $next($request);
        } else {
            return redirect()->route('home')->with('error', 'Vous n\'êtes pas autorisé à visualiser cette page.');
        }
        
    }
}
