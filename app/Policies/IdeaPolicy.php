<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Idea;
use App\Models\User;

class IdeaPolicy
{
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Idea $idea): bool
    {
        // return $user->is_admin || ($user->id == $idea->user_id);     OR
        return $user->is_admin || ($user->is($idea->user));
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Idea $idea): bool
    {
        return $user->is_admin || ($user->is($idea->user));
    }
}
