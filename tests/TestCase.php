<?php

namespace poldixd\StripTags\Tests;

use poldixd\StripTags\StripTagsServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            StripTagsServiceProvider::class,
        ];
    }
}
