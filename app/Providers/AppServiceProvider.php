<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

    // localization from the beginnig
        // app()->setLocale('fa');

        /*  Cache logics

            $top_users = Cache::remember('top_users', now()->addminutes(2), function () {
                return User::withCount('ideas')->orderByDesc('ideas_count')->limit(3)->get();
            });

            View::share('top_users', $top_users);

        */

    // globale variable
        View::share('top_users', User::withCount('ideas')->orderByDesc('ideas_count')->limit(3)->get());


    }
}
