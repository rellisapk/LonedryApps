<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;


class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // $user = User::select('id', 'is_Admin')->where('id', 2)->get();
        if(Auth::check() && $request->user()->isAdmin()){
            return $next($request);
        }

        return response()->json(
            [
                'message' => 'Masuk Disini'
            ],
            200
        );
    }
}
