<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        // If the user is not logged in, let them access public routes
        if (!$user) {
            return $next($request); // Allow guest access to public routes
        }

        // If the user is logged in but is not an admin, redirect them
        if (!$user->hasRole('admin')) {
            return redirect('/'); // Redirect non-admin users to a public page
        }

        // If the user is an admin, allow the request to proceed
        return $next($request);
    }
        
}