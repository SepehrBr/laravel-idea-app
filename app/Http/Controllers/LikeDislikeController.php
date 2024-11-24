<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeDislikeController extends Controller
{
    public function like(Idea $idea)
    {
        $liker = Auth::user();
        $liker->likes()->attach($idea);
        return back();
    }
    public function dislike(Idea $idea)
    {
        $disliker = Auth::user();
        $disliker->likes()->detach($idea);
        return back();
    }
}
