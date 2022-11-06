<?php
namespace Nokanoki\HelloWorldLaravelPackage;

use Illuminate\Support\ServiceProvider;
use Nokanoki\HelloWorldLaravelPackage\TestApp;

class TestServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('TestApp', function($app){
            return new TestApp;
        });
    }
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}