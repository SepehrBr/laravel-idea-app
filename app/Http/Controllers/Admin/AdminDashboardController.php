<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        $ideas = Idea::latest()->get();
        $comments = Comment::latest()->get();

        return view('admin.dashboard', compact('users', 'ideas', 'comments'));
    }
}
