<?php

namespace Oozone\Multiconfig\Migrator\Pipes;

use Closure;
use Oozone\Multiconfig\Migrator\Data;
use Illuminate\Console\OutputStyle;
use RuntimeException;

class EnsureSomethingToMigrate
{
    public function __construct(protected OutputStyle $output)
    {
    }

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
        if ($data->metadata->isEmpty() && $data->declarations->isEmpty()) {
            throw new RuntimeException('No metadata exists in the database, and no declaration exists.');
        }

        return $next($data);
    }
}
