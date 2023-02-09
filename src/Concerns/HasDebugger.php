<?php

namespace Bakgul\LaravelDumpServer\Concerns;

trait HasDebugger
{
    protected function clearDebugger()
    {
        if (class_exists(\Spatie\LaravelRay\Ray::class)) {
            ray()->clearAll();
        }

        if (config('debug-server.clear_all')) {
            copy(
                __DIR__ . '/../../stubs/dump.stub',
                resource_path('views/dump.html')
            );
        }
    }
}
