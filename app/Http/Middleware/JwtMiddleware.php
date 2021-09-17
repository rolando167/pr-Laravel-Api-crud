<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;

class JwtMiddleware
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
			$user = JWTAuth::parseToken()->authenticate();

		} catch (\Throwable $th) {
			if($th instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
				return response()->json(['msg' => "invalid token"]);
			}

			if($th instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
				return response()->json(['msg' => "token expired"]);
			}
			return response()->json(['msg' => "token not found"]);
			//throw $th;
		}
		return $next($request);
	}
}
