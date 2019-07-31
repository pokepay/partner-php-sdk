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

### Client credentials

Client credentials have to be set before attempting API requests. Those are retrieved from the following environment variables by default:

- `POKEPAY_PARTNER_CLIENT_ID`: client ID
- `POKEPAY_PARTNER_CLIENT_SECRET`: client secret

If environment variables cannot be set in some reasons, setter methods are also available:

```php
$client = new Pokepay\PartnerAPI();
$client->setClientId('clientId_xxxxxxx...');
$client->setClientSecret('clientSecret_xxxxxxx...');
```

### SSL certificates

Partner API requires SSL client certificates. It can be set via the first argument of `Pokepay\PartnerAPI` constructor.


```php
$curlOptions = array(
    CURLOPT_SSLKEY       => 'path/to/key.pem',
    CURLOPT_SSLKEYPASSWD => 's3cret',
    CURLOPT_SSLCERT      => 'path/to/client.pem',
);
$client = new Pokepay\PartnerAPI($curlOptions);
```

### Switching API environments

Use `Pokepay\PartnerAPI#setAPIBase` for switching API environments to request. The default is sandbox one.

```php
// Sandbox (default)
$client->setApiBase('https://partner-sandbox.pokepay.jp');
// Production
$client->setApiBase('https://partner.pokepay.jp');
```

## Running tests

```
$ ./vendor/phpunit/phpunit/phpunit
```

Tests assume the SSL client key file is put at './sslkey.pem' and SSL certificate file is at './sslcert.pem'.

## Documentation

See [docs/](docs/index.md).

## Copyright

Copyright (c) 2019 Pocket Change, Inc.
