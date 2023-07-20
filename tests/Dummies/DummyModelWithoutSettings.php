<?php

namespace Tests\Dummies;

use SynergiTech\Multiconfig\HasConfig;
use Illuminate\Database\Eloquent\Model;

class DummyModelWithoutSettings extends Model
{
    protected $table = 'users';
}
