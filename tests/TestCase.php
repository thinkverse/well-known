<?php

declare(strict_types=1);

namespace Thinkverse\WellKnown\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Thinkverse\WellKnown\WellKnownServiceProvider;

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
