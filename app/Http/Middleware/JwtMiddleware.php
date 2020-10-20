<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Auth;
use Illuminate\Http\Request;

class JwtMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   
        $user = JWTAuth::parseToken()->authenticate();
        dd($user);
        try
        {
            if (! $user = JWTAuth::parseToken()->authenticate() )
            {
                 return response()->json([
                   'response' => null
                 ], 401);
            }
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e){
            try
            {
                $refreshed = JWTAuth::refresh(JWTAuth::getToken());
                $user = JWTAuth::setToken($refreshed)->toUser();
                response()->headers->set('Authorization', 'Bearer '.$refreshed);
            } catch (\Tymon\JWTAuth\Exceptions\JWTException $e)
            {
                 return response()->json([
                   'response' => null // nothing to show 
                 ], 103);
            }
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json([
                   'response' => null // nothing to show 
            ], 101);
        }

        Auth::login($user, false);
        // try {
        //     $user = JWTAuth::parseToken()->authenticate();
        // } catch (\Exception $e) {
        //     if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
        //         return response()->json(['status' => 'Token is Invalid'], 401);
        //     }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
        //         try
        //         {
        //           $refreshed = JWTAuth::refresh(JWTAuth::getToken());
        //           $user = JWTAuth::setToken($refreshed)->toUser();
        //           $request->headers->set('Authorization','Bearer '.$refreshed);
        //         }catch (\Tymon\JWTAuth\Exceptions\JWTException $e){
        //             return response()->json([
        //                 'message' => 'Token cannot be refreshed, please Login again'
        //             ], 401);
        //         }
        //     }else{
        //         return response()->json(['status' => 'Authorization Token not found'], 401);
        //     }
        // }
        return $next($request);
    }
}
