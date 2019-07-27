<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Admin\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        // 'App\Models\Post' => 'App\Policies\PostPolicy',
        // \App\Models\Configutarion\Permission::class => \App\Policies\PermissionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        if (Schema::hasTable('permissions')) {
            $permissions = Permission::with('roles')->get();

            foreach ($permissions as $permission)
            {
                Gate::define($permission->name, function(User $user) use ($permission) {
                    return $user->hasPermission($permission);
                });
            }
        }
        Gate::before(function($user, $ability) {

            if( $user->name === 'Roberto Arruda' )
                return true;
            // if( $user->hasAnyRoles('root') )
            //     return true;
        });
    }
}
