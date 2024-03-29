<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return $user->hasRole('admin');
        });

        Gate::define('isUser', function ($user) {
            return $user->hasRole('user');
        });
        
        Gate::define('isStaff', function ($user) {
            return $user->hasRole('staff');
        });
        
        Gate::define('isStaffOrUser', function ($user) {
            return $user->hasRole('staff')||$user->hasRole('user');
        });
        
        Gate::define('isStaffOrAdmin', function ($user) {
            return $user->hasRole('staff')||$user->hasRole('admin');
        });
    }
}
