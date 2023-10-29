<?php

namespace LaraUtil\Foundation;

use LaraUtil\Foundation\Commands\FoundationCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FoundationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('foundation')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_foundation_table')
            ->hasCommand(FoundationCommand::class);
    }
}
