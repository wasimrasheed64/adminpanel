<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if (! $request->expectsJson()) {
//            to check if the requested url is for the user
                if(Route::is('admin.*'))
                {
                    return route('admin.login');
                }
                return route('login');

            }
        }
    }
}
