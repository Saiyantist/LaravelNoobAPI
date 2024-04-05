<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();

        if(!$token){
            return response()->json(["error" => "Unauthorized"], 401);
        }

        if($token !== env('BEARER_TOKEN')){
            return response()->json(["error" => "Forbidden"], 403);
        }

        return $next($request);
        // return response()->json($token);
    }
}
