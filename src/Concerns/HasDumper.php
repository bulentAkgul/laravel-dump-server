<?php

namespace Bakgul\LaravelDumpServer\Concerns;

trait HasDumper
{
    protected function clearDebugger()
    {
        if (config('debug-server.reset_on_each_test')) {
            copy(
                __DIR__ . '/../../stubs/dump.stub',
                __DIR__ . '/../../resources/dump.html'
            );
        }
    }
}
