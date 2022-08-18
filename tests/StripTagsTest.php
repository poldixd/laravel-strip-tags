<?php

use Illuminate\Support\Str;

it('can create strip tags', function () {
    expect((string) str('<p>Lorem ipsum dolor sit amet</p>')->stripTags())->toBe('Lorem ipsum dolor sit amet');
    expect((string) Str::of('<p>Lorem ipsum dolor sit amet</p>')->stripTags())->toBe('Lorem ipsum dolor sit amet');
});