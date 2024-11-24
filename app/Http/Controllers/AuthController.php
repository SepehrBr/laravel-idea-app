<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Str;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email', 'min:11', ],
            // 'password' => ['required', 'confirmed', Password::min(5)->letters()->mixedCase()->numbers()->symbols()],
            'password' => ['required', 'confirmed', 'min:5'],
        ]);

    // hash password
        $validated['password'] = Hash::make($validated['password']);

        $validated = array_merge($validated, [ 'profile' => fake()->imageUrl ]);

        $new_user = User::create($validated);

        Auth::login($new_user);

    // send email to new user
        Mail::to($new_user)->send(new WelcomeEmail($new_user));

        return redirect()->route('home')->with('message', 'User '.$new_user->name.' Created Successfully!');
    }

    // login
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'exists:users,email', 'min:11'],
            'password' => ['required', 'min:5'],
        ]);

        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => 'Invalid Email Or Password! );',
                'password' => 'Invalid Email Or Password! );',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('home')->with('message', 'Welcome '.Auth::user()->name.'!');
    }

    // logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('message', 'Successfully Logged Out!');
    }
}
