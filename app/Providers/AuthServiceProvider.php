<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        /*  because of policiy lesson #37 this code is deactivatet


    // is_admin gate => this topic is related to  Roles
        Gate::define('isAdmin', function (User $user) : bool
        {
            return $user->is_admin;
        });

    // Permission => for edit, update, destroy
        Gate::define('delete_idea', function (User $user, Idea $idea) : bool {
            return ($user->is_admin) || ($idea->user_id == $user->id);
        });
        Gate::define('edit_idea', function (User $user, Idea $idea) : bool {
            return ($user->is_admin) || ($idea->user_id == $user->id);
        });
        */
        
    }
}
