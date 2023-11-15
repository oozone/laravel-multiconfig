<?php

use Oozone\Multiconfig\Eloquent\Setting as Model;
use Oozone\Multiconfig\Facades\Setting;
use Illuminate\Support\Arr;

Setting::name('foo')->default('new_default');

Setting::name('quz')->boolean()->default(true)->bag('bar_bag')->from('foo');

Setting::name('cougar')->string()
    ->from('baz')
    ->using(static function (Model $setting): string {
        return Arr::first($setting->value ?? $setting->default);
    });
