<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use Faker\Factory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    // with eager loading
        // $ideas = Idea::with('user', 'comments.user')->orderByDesc('created_at')->paginate(3);

    // with count eager loading
        $ideas = Idea::withCount('likes')->orderByDesc('created_at')->paginate(3);

        return view('dashboard', [
            'ideas' => $ideas,
        ]);
    }
}
