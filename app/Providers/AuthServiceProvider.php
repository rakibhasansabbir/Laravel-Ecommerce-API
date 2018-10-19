<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Routing\UrlGenerator;
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
    // public function boot()
    // {
    //     $this->registerPolicies();

    //     Passport::routes();
    // }

    public function boot(UrlGenerator $url)
    {
        if(env('REDIRECT_HTTPS')){
            $url->formatScheme('https');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if(env('REDIRECT_HTTPS')){
        $this->app['request']->server->set('HTTPS',true);
        }
    }
}
