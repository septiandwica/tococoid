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
        $allowedDomain = 'community.tococoindonesia.com';

        // Cek apakah Origin sesuai dengan domain yang diizinkan
        if ($request->headers->get('Origin') !== $allowedDomain) {
            // Mengembalikan respons 404 jika domain tidak diizinkan
            return response()->json(['error' => '404'], 404);
        }

        return $next($request);
    }
}
