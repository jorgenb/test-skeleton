<?php

namespace Jorgenb\TestSkeleton;

use Jorgenb\TestSkeleton\Commands\TestSkeletonCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
