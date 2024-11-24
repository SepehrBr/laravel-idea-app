<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Idea $idea)
    {
        if (Auth::hasUser()) {
            $validated = $request->validate([
                'content' => ['required', 'min:5', 'string'],
            ]);
        }

        $comment = Comment::create([
            'content' => $validated['content'],
            'user_id' => Auth::user()->id,
            'idea_id' => $idea->id
        ]);

        if (!$comment) {
            return redirect()->route('ideas.show', $idea->id)->with('message', 'Sth Went Wrong Please try Again Later ...');
        }

        return redirect()->route('ideas.show', $idea->id)->with('message', 'Comment Successfully Posted!');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
