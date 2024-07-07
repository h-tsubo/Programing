<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ControllerLogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $logFile = base_path('data/controller_access.log');

        file_put_contents($logFile, '/ctrl/...のルートにアクセス：'.date('Y-m-d H:i:s')."\n", FILE_APPEND);

        return $next($request);
    }
}
