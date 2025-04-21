<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = "admin/login";

    public function broker()
    {
        return Password::broker('admins');
    }

    public function guard()
    {
        return Auth::guard('admin');
    }

    public function showResetForm(Request $request)
    {
        $token = $request->route()->parameter('token');
        return view('admin.auth.reset-password')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

//    public function updatePassword(Request $request, $id)
//    {
//        $request->validate([
//            'current_password' => ['required', 'string'],
//            'password' => ['required', 'string', 'min:6', 'confirmed'],
//        ]);
//
//        if (!(Hash::check($request->get('current_password'), $this->guard()->user()->password))) {
//            return response()->json([
//                'isSuccess' => false,
//                'Message' => "Your Current password does not matches with the password you provided. Please try again."
//            ], 200); // Status code
//        } else {
//            $user = Admin::find($id);
//            $user->password = Hash::make($request->get('password'));
//            $user->update();
//            if ($user) {
//                Session::flash('message', 'Password updated successfully!');
//                Session::flash('alert-class', 'alert-success');
//                return response()->json([
//                    'isSuccess' => true,
//                    'Message' => "Password updated successfully!"
//                ], 200); // Status code here
//            } else {
//                Session::flash('message', 'Something went wrong!');
//                Session::flash('alert-class', 'alert-danger');
//                return response()->json([
//                    'isSuccess' => true,
//                    'Message' => "Something went wrong!"
//                ], 200); // Status code here
//            }
//        }
//    }
}
