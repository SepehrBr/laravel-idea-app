<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function follow(User $user)
    {
    // define follower
        $follower = Auth::user();

    // follower following relations
        $follower->followings()->attach($user);

        return back()->with('message', 'You Are Following ' . $user->name . '!');
    }
    public function unfollow(User $user)
    {
    // define follower
        $unfollower = Auth::user();

    // follower following relations
        $unfollower->followings()->detach($user);

        return back()->with('message', 'You Unfollowed ' . $user->name . '!');
    }
}
