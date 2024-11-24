<?php

namespace App\Policies;

use App\Models\User;

class CommentPolicy
{
    public function delete(User $user):bool
    {
        return $user->is_admin;
    }
}
