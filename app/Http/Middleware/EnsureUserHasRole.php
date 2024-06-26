<?php

namespace App\Http\Middleware;
use App\Models\Produit;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if ($request->user() && $request->user()->role != $role) {

            $displayProducts = Produit::all();
            return response()->view('user', ['produits' => $displayProducts]);
        }

        return $next($request);
         
    }  

   
  
    
}

