<?php

namespace SynergiTech\Multiconfig\Migrator\Pipes;

use Closure;
use SynergiTech\Multiconfig\Eloquent\Metadata;
use SynergiTech\Multiconfig\Migrator\Data;

/**
 * @internal
 */
class LoadMetadata
{
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
        $data->metadata = Metadata::all()->keyBy(static fn(Metadata $metadata): string => $metadata->name);

        return $next($data);
    }
}
