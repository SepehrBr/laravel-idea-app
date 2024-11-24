<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $ideas = Idea::query()->where('content', 'LIKE', '%'.$request->search.'%')->get();

    // above logic as Scope Methods:
        $ideas = Idea::search($request->search);

        return view('components.idea.search', [
            'ideas' => $ideas,
        ]);
    }
}
