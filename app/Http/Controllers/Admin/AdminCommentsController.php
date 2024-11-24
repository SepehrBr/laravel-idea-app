<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class AdminCommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->paginate(5);
        return view('admin.comments.index', compact('comments'));
    }
    public function destroy(Request $request, Comment $comment)
    {
        $this->authorize('delete', $comment);

        $comment->delete();

        return redirect()->route('admin.comments.index')->with('message', 'Comment Deleted!');
    }
}
