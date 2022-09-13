> **Warning** Package is deprecated, it's recommended to add your `/.well-known` routes in your route files.

# A Laravel package for quickly adding .well-known URLs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/thinkverse/well-known.svg?style=flat-square)](https://packagist.org/packages/thinkverse/well-known)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/thinkverse/well-known/run-tests?label=tests)](https://github.com/thinkverse/well-known/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/thinkverse/well-known/Check%20&%20fix%20styling?label=code%20style)](https://github.com/thinkverse/well-known/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/thinkverse/well-known.svg?style=flat-square)](https://packagist.org/packages/thinkverse/well-known)

`well-known` is a Laravel package for quickly adding well-known locations ([RFC8615](https://datatracker.ietf.org/doc/html/rfc8615)) to a Laravel application, with support for redirects and static URLs.

## Installation

You can install the package via composer:

```bash
composer require thinkverse/well-known
```

You can publish the config file with:
```bash
php artisan vendor:publish --tag="well-known-config"
```

This is the contents of the published config file:

```php
return [
    'redirects' => [
        'change-password' => '/settings/security',
    ],
    'static' => [
        'security.txt' => fn () => response('Hello world.'),
    ],
];
```

## Usage

To use `well-known`, install the package and publish the configuration. Now you can update, 
add and or remove redirects and static .well-known URLs with ease.

A registrar for some well-known URIs can be found at [iana.org/assignments/well-known-uris/](https://www.iana.org/assignments/well-known-uris/well-known-uris.xhtml).

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [thinkverse](https://github.com/thinkverse)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
