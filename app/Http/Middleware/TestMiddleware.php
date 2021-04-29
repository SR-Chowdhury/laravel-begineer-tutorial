<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestMiddleware
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
        // URL : localhost:33xx/about?age=200 execute below code
        if($request -> age <= 200) {
            return redirect('home');
        }
        // URL : localhost:33xx/about?age=220 execute below code
        return $next($request);
    }
}
