<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Practitioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:doctor')->except('logout');
        $this->middleware('guest:practitioner')->except('logout');
    }

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
            'doctor' => $user = new Doctor,
            'practitioner' => $user = new Practitioner,
            default => $user = null
        };

        if($user) {
            $user = $user->where('email', $email)->where('secret_key', $secretKey)->firstOrFail();

            Auth::guard($role)->login($user);

            $request->session()->regenerate();

            return redirect('/');
        }
        else {
            abort(404);
        }
    }

    public function logout(Request $request) {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('index'));
    }
}
