<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Masyarakat
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
    if (auth()->user()->level == 3) {
            return $next($request);
        }
        return redirect('/admin');
    }
}
