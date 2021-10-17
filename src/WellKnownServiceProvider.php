<?php

declare(strict_types=1);

namespace Thinkverse\WellKnown;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WellKnownServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('well-known')
            ->hasConfigFile()
            ->hasRoute('web');
    }
}
