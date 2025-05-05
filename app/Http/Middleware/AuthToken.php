<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class AuthToken
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('Authorization');

        if (!$token || !User::where('api_token', $token)->exists()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}

