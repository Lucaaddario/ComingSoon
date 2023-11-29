<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica se l'utente è autenticato
        if (Auth::user()) {
            // Verifica se l'utente è un amministratore
            if (Auth::user()->isAdmin == 1) {
                // L'utente è un amministratore, consente l'accesso
                return $next($request);
            }
        }
       // L'utente non è un amministratore, reindirizza o gestisci in altro modo
        return redirect(route('welcome'))->with('error', 'Accesso non consentito. Solo gli amministratori possono accedere a questa pagina.');

    }
}
