<?php

namespace App\Http\Middleware;

use Closure;

class Administration
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
        if(auth()->guest() || auth()->user()->id_role===\App\Role::where('role', 'Etudiant')->first()->id_role){ //Si la personne n'est pas du BDE ou du CESI
            abort(404);
        }
        return $next($request);
    }
}
