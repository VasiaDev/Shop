<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminOnly
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if (!$user || $user->role != 1) {
            abort(403, 'Доступ запрещён');
        }

        return $next($request);
    }
}
