<?php

namespace poldixd\StripTags;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class StripTagsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Str::macro('stripTags', fn (string $value): string => strip_tags($value));
    }
}
