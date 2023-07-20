<?php

namespace SynergiTech\Multiconfig\Migrator\Pipes;

use Closure;
use SynergiTech\Multiconfig\Migrator\Data;
use SynergiTech\Multiconfig\Registrar\SettingRegistrar;

/**
 * @internal
 */
class LoadDeclarations
{
    /**
     * LoadDeclarations constructor.
     *
     * @param  \SynergiTech\Multiconfig\Registrar\SettingRegistrar  $registrar
     */
    public function __construct(protected SettingRegistrar $registrar)
    {
    }

    /**
     * Handles the Settings migration.
     *
     * @param  \SynergiTech\Multiconfig\Migrator\Data  $data
     * @param  \Closure  $next
     *
     * @return mixed
     */
    public function handle(Data $data, Closure $next): mixed
    {
        $this->registrar->loadDeclarations();

        // We won't overload the declarations if the data is not empty.
        $data->declarations = $this->registrar->getDeclarations();

        return $next($data);
    }
}
