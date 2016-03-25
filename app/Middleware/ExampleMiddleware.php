<?php
/**
 * @author: Ali Kenan Yağmur
 * Date: 25.03.2016
 * Time: 19:23
 */
namespace App\Middleware;

class ExampleMiddleware
{

    public function __invoke($request, $response, $next)
    {
        $newResponse = $response->withHeader('Content-type', 'application/json');
        $newResponse = $next($request, $newResponse);

        return $newResponse;
    }
}