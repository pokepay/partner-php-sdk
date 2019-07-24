# Pokepay Partner API SDK for PHP

## Usage

```php
$client = new Pokepay\PartnerAPI("clientId_xxxxxxx...", "clientSecret_xxxxxxx...");
$request = new Pokepay\Request\SendEcho(array('message' => 'hello'));
$client->send($request);
```

## Copyright

Copyright (c) 2019 Pocket Change, Inc.
