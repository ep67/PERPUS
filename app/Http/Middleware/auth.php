<?php

namespace App\Http\Middleware;

use Closure;
use \Firebase\JWT\JWT;

class auth
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
        try {
            $key = "example_key";
            $payload = array(
                "iss" => "http://example.org",
                "aud" => "http://example.com",
                "iat" => 1356999524,
                "nbf" => 1357000000
            );
            $jwt = $request->header('authorization');
            JWT::decode($jwt, $key, array('HS256'));
        } catch (Exception $e) {
            return e;
        }
        return $next($request);
    }
}
