<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $ideas = $user->ideas()->latest()->paginate(2);

        return view('users.show-user', [
            'user' => $user,
            'ideas' => $ideas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
    // permission to edit
        // $this->authorize('update', $user);           (deactivated due Form Request)

        $ideas = $user->ideas()->latest()->paginate(2);

        return view('users.edit-user', [
            'user' => $user,
            'ideas' => $ideas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
    // permission to update
        // $this->authorize('update', $user);       (deactivated due Form Request)

    // validation using Form Request
        $validated = $request->validated();

    // if req has password
        if (! is_null($request->password)) {
            $validated['password'] =$request->validate([
                'password' => ['required', 'string', 'min:4', 'confirmed'],
            ]);
        }

    // if req has profile img
        if ($request->has('profile')) {
            $imgPath = $request->file('profile')->store('profile','public');
            $validated['profile'] = $imgPath;

        // delete previous image which saved in DB
            Storage::disk('public')->delete($user->profile ?? '');
        }

        $user->update($validated);

        return redirect()->route('users.show', $user->id)->with('message', "User $user->name Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, User $user)
    {
    // permission to delete user only via admin
        $this->authorize('delete', $user);

        if (Auth::user()->id == $user->id) {
            $user->delete();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')->with('message', 'User Deleted!');
        }

        return redirect()->route('users.show')->with('message', 'Sth Went Wrong. Try Again Later ...');
    }
}
