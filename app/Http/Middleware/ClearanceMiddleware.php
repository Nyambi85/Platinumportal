<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class ClearanceMiddleware
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
        if(Auth::user()->hasPermissionTo('add Job')){

            //abort('401');
            //return redirect()->route('admin');
            return view('home');

        }else{

            return $next($request);
        }

    }
}