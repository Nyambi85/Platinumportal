<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use App\User;

class AdminMiddleware
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
        $user = User::all()->count();
       // $user = Auth::user();
       // if (!($user == null)) {
            if (Auth::user()->hasPermissionTo('viewBackend')) //If user does //not have this permission
            {
                abort('404');

            }
       // }

        return $next($request);
    }
}