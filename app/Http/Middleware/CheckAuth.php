<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAuth
{
    public function handle($request, Closure $next)
    {
        // Verifica si el usuario está autenticado
        if (Auth::check()) {
            return $next($request);
        }

        // Si el usuario no está autenticado, puedes redirigirlo a la página de inicio de sesión o mostrar un error
        return redirect('/login')->with('error', 'Acceso no autorizado');
    }
}
