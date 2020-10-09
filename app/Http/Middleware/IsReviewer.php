<?php

namespace App\Http\Middleware;

use Closure;

class IsReviewer
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
        if (empty(auth()->user())) {
            return redirect('/')->with('error', "Tidak ada user");
        } else {
            if (auth()->user()->is_reviewer == 1) {
                return $next($request);
            } else {
                return redirect('/user')->with('error', "Anda tidak punya akses.");
            }
        }
    }
}
