<?php

namespace Vishy\Testpkg;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vishy\Testpkg\Commands\TestpkgCommand;

class TestpkgServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('testpkg')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_testpkg_table')
            ->hasCommand(TestpkgCommand::class);
    }
}
