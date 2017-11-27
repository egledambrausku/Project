<?php

namespace App\Providers;

use App\Role;
use App\User;
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

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Companies
        Gate::define('company_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('company_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('company_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('company_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('company_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Employees
        Gate::define('employee_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('employee_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('employee_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('employee_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('employee_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

    }
}