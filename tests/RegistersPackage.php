<?php

namespace Tests;

use SynergiTech\Multiconfig\MulticonfigServiceProvider;
use SynergiTech\Multiconfig\Facades\Setting;

trait RegistersPackage
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            MulticonfigServiceProvider::class,
        ];
    }

    /**
     * Override application aliases.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Setting' => Setting::class,
        ];
    }
}
