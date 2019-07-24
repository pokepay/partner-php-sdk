# Pokepay Partner API SDK for PHP

## Usage

```php
$client = new Pokepay\PartnerAPI("clientId_xxxxxxx...", "clientSecret_xxxxxxx...");
$request = new Pokepay\Request\SendEcho(array('message' => 'hello'));
$client->send($request);
```

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

Client credentials have to be set before attempting API requests. The easiest way is just passing client ID and secret via the constructor of `Pokepay\PartnerAPI`.

```php
$client = new Pokepay\PartnerAPI("clientId_xxxxxxx...", "clientSecret_xxxxxxx...");
```

If those two are not set, it tries to retrieve from the following environment variables:

- `POKEPAY_PARTNER_CLIENT_ID`: client ID
- `POKEPAY_PARTNER_CLIENT_SECRET`: client secret

## Copyright

Copyright (c) 2019 Pocket Change, Inc.
