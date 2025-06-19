<?php

namespace Jorgenb\TestSkeleton;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Jorgenb\TestSkeleton\Commands\TestSkeletonCommand;

class TestSkeletonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('test-skeleton')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_test_skeleton_table')
            ->hasCommand(TestSkeletonCommand::class);
    }
}
