<?php

namespace Oozone\Multiconfig\Migrator\Pipes;

use Closure;
use Oozone\Multiconfig\Eloquent\Metadata;
use Oozone\Multiconfig\Migrator\Data;

/**
 * @internal
 */
class LoadMetadata
{
    /**
     * Handles the Settings migration.
     *
     * @param  \Oozone\Multiconfig\Migrator\Data  $data
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
