<?php

namespace SynergiTech\Multiconfig\Facades;

use SynergiTech\Multiconfig\Registrar\SettingRegistrar;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Support\Collection|\SynergiTech\Multiconfig\Eloquent\Setting[] getSettings()
 * @method static \SynergiTech\Multiconfig\Registrar\Declaration name(string $name)
 */
class Setting extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return SettingRegistrar::class;
    }
}
