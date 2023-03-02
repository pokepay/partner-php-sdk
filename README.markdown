# Pokepay Partner API SDK for PHP

## Prerequisites

- PHP 5.6 or above
- curl, json and openssl extensions

## Installation with Composer

Install [Composer](https://getcomposer.org/) if not already installed.

### composer.json settings

Install this SDK by executing `composer require pokepay/partner-php-sdk` on your shell.

```
$ composer require pokepay/partner-php-sdk
```

## Configuration

Client credentials have to be set before attempting API requests. `Pokepay\PartnerAPI` takes the location of a configuration INI file as an argument.

```php
$client = new Pokepay\PartnerAPI('./config.ini');
```

If it's not given, the file location is set from an environment variable `POKEPAY_PARTNER_CONFIG_FILE`.

## Running tests

```
$ POKEPAY_PARTNER_CONFIG_FILE=/path/to/config.ini ./vendor/phpunit/phpunit/phpunit
```

## Documentation

See [docs/](docs/index.md).

## Copyright

Copyright (c) 2019 Pocket Change, Inc.
