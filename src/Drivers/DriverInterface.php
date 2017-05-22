<?php

namespace Famdirksen\LaravelExceptionMonitor\Drivers;

interface DriverInterface
{
    public function send(\Exception $exception);
}
