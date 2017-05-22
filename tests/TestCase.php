<?php

namespace Famdirksen\LaravelExceptionMonitor\Tests;

use Famdirksen\LaravelExceptionMonitor\ExceptionMonitorServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app)
    {
        return [ ExceptionMonitorServiceProvider::class ];
    }


    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('exception-monitor.drivers', 'mail');
    }
}
