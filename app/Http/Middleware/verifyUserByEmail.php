<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
class verifyUserByEmail
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
        $user=\App\User::findOrFail(Auth::id());
        if($user)
        {
          if($user->status==0)
          {
            Auth::logout();
            return redirect('login')->with('message','first verify your account');
          }
        }
        return $next($request);
    }
}
