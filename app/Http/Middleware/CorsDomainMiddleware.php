<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CorsDomainMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Mengambil domain yang diizinkan dari konfigurasi CORS
        $allowedDomains = config('cors.allowed_origins');

        // Cek apakah Origin sesuai dengan salah satu domain yang diizinkan
        if (!in_array($request->headers->get('Origin'), $allowedDomains)) {
            // Mengembalikan respons 404 jika domain tidak diizinkan
            return response()->json(['error' => 'Unauthorized'], 404);
        }

        return $next($request);
    }
}
