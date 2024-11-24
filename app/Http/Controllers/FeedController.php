<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
    // show followings ideas in feed using pluck

        $followingIDs = auth()->user()->followings()->pluck('user_id');

    // reason using wherin is because we are giving an array and where wont work here
        $ideas = Idea::whereIn('user_id', $followingIDs)->latest();

        return view('dashboard', [
            'ideas' => $ideas->paginate(5),
        ]);
    }
}
