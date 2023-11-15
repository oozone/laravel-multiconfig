<?php

namespace Oozone\Multiconfig\Facades;

use Oozone\Multiconfig\Registrar\SettingRegistrar;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Support\Collection|\Oozone\Multiconfig\Eloquent\Setting[] getSettings()
 * @method static \Oozone\Multiconfig\Registrar\Declaration name(string $name)
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
