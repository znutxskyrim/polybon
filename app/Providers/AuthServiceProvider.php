<?php

namespace App\Providers;

use App\Policies\ProductPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
use App\Role;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Product::class => ProductPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    /*
     *
     *
     */
    public function before(User $user){

    }

    public function boot()
    {
        $this->registerPolicies();
        //
    }
}
