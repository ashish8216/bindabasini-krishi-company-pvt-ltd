<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    public function handle(Request $request, Closure $next, string $role = null): Response
    {
        if ($role && $request->auth()->user()?->role !== $role) {
            abort(403);
        }

        return $next($request);
    }
}
