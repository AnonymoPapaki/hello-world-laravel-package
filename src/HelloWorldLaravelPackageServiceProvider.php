<?php

namespace Eugene\HelloWorldLaravelPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Eugene\HelloWorldLaravelPackage\Commands\HelloWorldLaravelPackageCommand;

class HelloWorldLaravelPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('hello-world-laravel-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_hello-world-laravel-package_table')
            ->hasCommand(HelloWorldLaravelPackageCommand::class);
    }
}
