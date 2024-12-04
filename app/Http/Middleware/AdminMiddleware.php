<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::where('email', '=', $request->header('email'))->first();

        if($user->isAdmin()){
            return $next($request);
        }
        else{
            abort(403,  "You do not have permission to access this page, only admins.");
        }
    }
}
