<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Maneja la petición entrante y verifica el rol.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Verificamos si el rol del usuario coincide con el parámetro requerido
        if (Auth::user()->role !== $role) {
            // Si es una petición API, devolvemos JSON, si es Web, un aborto 403.
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Acceso denegado. No tienes permisos para esta acción.'], 403);
            }
            
            abort(403, 'Acceso no autorizado. Se requiere rol de ' . $role);
        }

        return $next($request);
    }
}