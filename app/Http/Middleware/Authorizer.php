<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\JWT;

class Authorizer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $requiredPermission = "permission-c";

        // 1. Check request's owner
        $decoded = json_decode($request->header('token'));
        // 2. Check permissions of the request's owner
        for ($i=0; $i<sizeof($decoded->permissions); $i++) {
            if ($decoded->permissions[$i] == $requiredPermission) {
                return $next($request);
            }
        }
        return response(["message" => "forbidden"], 400);
    }
}
