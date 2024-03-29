<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        if (auth()->check() && auth()->user()->is_admin)
        {
        return $next($request);
        }
        return redirect()->route("actividades")->with("mensaje","Lo sentimos ".Auth::user()->name.",  debes ser admin para acceder a esta zona");

    }
}
