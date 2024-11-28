<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Periksa apakah pengguna memiliki role yang sesuai
        if (!$request->user() || $request->user()->Role !== $role) {
            return redirect()->route('unauthorized'); // Arahkan ke halaman tidak diizinkan
        }

        return $next($request);
    }
}
