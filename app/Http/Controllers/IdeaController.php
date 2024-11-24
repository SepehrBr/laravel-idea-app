<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::hasUser()) {
            $validated = $request->validate([
                'content' => ['required', 'min:5', 'string'],
            ]);
        }

        $idea = Idea::create([
            'content' => $validated['content'],
            'user_id' => Auth::user()->id,
        ]);

        if (!$idea) {
            return redirect(route('home'))->with('message', 'Sth Went Wrong Please try Again Later ...');
        }

        return redirect(route('home'))->with('message', 'Idea Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {

        return view('components.idea.show-idea', [
            'idea' => $idea,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        $this->authorize('update', $idea);

        return view('components.idea.edit-idea', [
            'idea' => $idea,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idea $idea)
    {
    // permission
        $this->authorize('update', $idea);

        if (Auth::hasUser()) {
            $validated = $request->validate([
                'content' => ['required', 'min:5', 'string'],
            ]);
        }

        $idea->update([
            'content' => $validated['content'],
        ]);

        if (!$idea) {
            return redirect()->route('ideas.show', $idea->id)->with('message', 'Sth Went Wrong Please try Again Later ...');
        }

        return redirect()->route('ideas.show', $idea->id)->with('message', 'Idea Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea)
    {
    // permission
        $this->authorize('delete', $idea);

        $idea->delete();
        return redirect(route('home'));
    }
}
