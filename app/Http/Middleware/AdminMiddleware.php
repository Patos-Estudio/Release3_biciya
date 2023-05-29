<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->hasRole('Admin')) {
            return $next($request);
        }
        
        $routeName = $request->route() ? $request->route()->getName() : null;
        
        if ($routeName === 'acceso') {
            // Si ya estamos en la ruta 'acceso', evitamos la redirección para evitar el bucle
            return $next($request);
        }
        
        return redirect()->route('acceso')->with('error', 'Acceso denegado.');
        
        
    }
}
