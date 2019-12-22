<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('centras', function($user) {
            return $user->user_level == '3';
        });
        Gate::define('studentas', function($user) {
            return $user->user_level == '1';
        });
        Gate::define('destytojas', function($user) {
            return $user->user_level == '2';
        });
        Gate::define('studdest', function($user) {
            return $user->user_level == '2' || $user->user_level == '1';
        });
        Gate::define('all', function($user) {
           return $user->user_level != '4';
        });
    }
}
