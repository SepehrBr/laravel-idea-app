<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;
use Str;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback()
    {
        $google_user = Socialite::driver('google')->user();

        $user = User::whereEmail($google_user->email)->first();
        if ($user) {
            Auth::loginUsingId($user->id);
            return redirect()->route('home')->with('message', 'Welcome '. $user->name);
        }

        $user = User::create( [
            'name' => $google_user->name,
            'email' => $google_user->email,
            'password' => bcrypt($google_user->token),
            'profile' => $google_user->avatar
        ]);

        Auth::login($user);

        return redirect()->route('home')->with('message', 'Welcome '. $user->name);
    }
}
