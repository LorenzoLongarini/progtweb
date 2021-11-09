<?php

namespace App\Providers;

use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Resources\Evento;
//use App\Policies\EventoPolicies;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
   /* protected $policies = [
        'App\Models\evento' => 'App\Policies\EventoPolicies'
    ];*/

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
    
        Gate::define('isStaff', function ($user) {
            return $user->hasRole('staff');
        });

        Gate::define('isTecn', function ($user) {
            return $user->hasRole('tecnico');
        });
      
    }
}
