<?php declare(strict_types=1);

namespace Thinkverse\WellKnown;

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

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
