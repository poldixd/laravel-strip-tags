> [!WARNING]
> Package is abandoned. Please use the Laravel native method: https://laravel.com/docs/10.x/strings#method-fluent-str-strip-tags

# Use strip_tags() in fluent strings

With this package you can use strip_tags() in laravel fluent strings.

```php
str('<p>This is a sentence</p>')->stripTags(); // Output: This is a sentence
```

## Installation

First, install the package via composer:

```bash
composer require poldixd/laravel-strip-tags
```

The package will automatically register itself.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.