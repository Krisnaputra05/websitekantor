<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureAdmin
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
        // Periksa apakah pengguna terautentikasi
        if (!$request->user() || $request->user()->role !== 'admin') {
            abort(404); // Kembalikan error 404
        }

        return $next($request);
    }
}
