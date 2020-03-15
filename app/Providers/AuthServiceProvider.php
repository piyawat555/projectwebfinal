<?php

namespace App\Providers;

use App\Http\Middleware\admin;
use App\Policies\adminpolicy;
use App\Policies\profilepolicy;
use App\User;
use App\user_profiles;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        User::class => profilepolicy::class,
        user_profiles::class=>profilepolicy::class,
        User::class => adminpolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
