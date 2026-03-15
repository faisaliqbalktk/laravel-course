<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if ($request->age < 18) {
            die('You are under 18 and can not access this website');
        }

        // if ($request->age < 18) {
        //     die("you can not visit this site");
        // } else {
        //     echo 'you are available';
        // }

        return $next($request);
    }
}
