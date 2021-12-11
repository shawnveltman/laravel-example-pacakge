<?php

namespace Shawnveltman\Example;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Shawnveltman\Example\Commands\ExampleCommand;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-package_table')
            ->hasCommand(ExampleCommand::class);
    }
}
