<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Support\Facades\Auth;
use Firebase\JWT\JWT;

class VerifyJwtToken
{
    public function handle($request, Closure $next)
    {
        try {
            if (!$request->hasHeader('Authorization')) {
                throw new Exception('Missing Authorization header');
            }

            $jwt = str_replace('Bearer ', '', $request->header('Authorization'));

            $key = env('JWT_SECRET');
            if ($key !== null) {
                $decoded = JWT::decode($jwt, $key, array('HS256'));
                 Auth::loginUsingId($decoded->sub);
            }
        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 401);
        }
        return $next($request);
    }
}