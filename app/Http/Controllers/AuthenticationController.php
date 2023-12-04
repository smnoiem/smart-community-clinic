<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $email = $request->input('email');
        $secretKey = $request->input('secret_key');
        $role = $request->input('role');

        $user = match ($role) {
            'admin' => $user = new Admin,
            'doctor' => $user = null,
            'practitioner' => $user = null,
            default => $user = null
        };

        if($user) {
            $user = $user->where('email', $email)->where('secret_key', $secretKey)->firstOrFail();

            // guard isn't created yet.
            Auth::guard('admin')->login($user);

            $loggedInAdmin = auth('admin');

            dd($loggedInAdmin);
        }
        else {
            abort(404);
        }
    }
}
