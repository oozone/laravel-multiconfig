<?php

namespace Tests\Dummies;

use Oozone\Multiconfig\HasConfig;
use Illuminate\Database\Eloquent\Model;

class DummyModelWithoutSettings extends Model
{
    protected $table = 'users';
}
