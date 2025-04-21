<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    protected function broker()
    {
        return Password::broker('admin');
    }

    function redirectPath()
    {
        return route('admin.dashboard');
    }

    public function showLoginForm()
    {
        return view("admin.auth.login");
    }


    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!$this->guard()->attempt($this->credentials($request), $request->filled('remember'))) {
            return redirect()->intended('admin.dashboard');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */


    function logout(Request $request)
    {
        Auth::logout();
        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect()->route('admin.login');
    }

}
