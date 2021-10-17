<?php declare(strict_types=1);

namespace Thinkverse\WellKnown\Tests;

use Thinkverse\WellKnown\WellKnownServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            WellKnownServiceProvider::class,
        ];
    }
}
