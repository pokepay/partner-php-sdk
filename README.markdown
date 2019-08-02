# Pokepay Partner API SDK for PHP

## Prerequisites

- PHP 5.6 or above
- curl, json and openssl extensions

## Installation with Composer

Install [Composer](https://getcomposer.org/) if not already installed.

### composer.json settings

While pokepay/partner-php-sdk is not yet ready at Packagist, "repositories" settings have to be written in `composer.json`.

```json
# composer.json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/pokepay/partner-php-sdk"
        }
    ],
    "require": {
        "pokepay/partner-php-sdk": "dev-master"
    }
}
```

To install dependencies into `vendor/`, run `composer install`:

```
$ composer install
```

## Configuration

Client credentials have to be set before attempting API requests. `Pokepay\PartnerAPI` takes the location of a configuration INI file as an argument.

```php
$client = new Pokepay\PartnerAPI('./config.ini');
```

If it's not given, the file location is set from an environment variable `POKEPAY_PARTNER_CONFIG_FILE`.

## Running tests

```
$ ./vendor/phpunit/phpunit/phpunit
```

## Documentation

See [docs/](docs/index.md).

## Copyright

Copyright (c) 2019 Pocket Change, Inc.
