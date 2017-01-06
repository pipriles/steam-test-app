<?php

namespace App\Http\Middleware;

use Closure;

use Tymon\JWTAuth\Middleware\BaseMiddleware;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class CustomAuth extends BaseMiddleware {

    /**
     * This function is identical to jwt.auth
     * middleware just that it just verifies 
     * if the user exists in the database
     */

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        $this->auth->setRequest($request);
        try {
            $this->auth->parseToken();
        } catch (TokenExpiredException $e) {
            return $this->respond('tymon.jwt.expired', 'token_expired', $e->getStatusCode(), [$e]);
        } catch (JWTException $e) {
            return $this->respond('tymon.jwt.invalid', 'token_invalid', $e->getStatusCode(), [$e]);
        } catch (Exception $e) {
            return $this->respond('tymon.jwt.invalid', 'token_invalid', $e->getStatusCode(), [$e]);
        }

        $this->events->fire('tymon.jwt.valid');

        return $next($request);
    }
}
