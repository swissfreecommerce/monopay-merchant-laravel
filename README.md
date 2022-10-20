# Monopay Merchant for laravel

This package enables Laravel to communicate with the [Monopay payment system](https://payment.monopon.net)

## Install via composer

Run the following command to pull in the latest version:
```bash
composer require swissfreecommerce/monopay-merchant-laravel
```

### Add service provider ( Laravel 5.4 or below )

Add the service provider to the providers array in the config/app.php config file as follows:

```php
'providers' => [

    ...

    SwissFreeCommerce\PaymentMerchant\Providers\MonopayServiceProvider::class,
]
```

### Publish the config
Copy the `config` file from `vendor/swissfreecommerce/monopay-merchant-laravel/config/config.php` to `config` folder of your Laravel application and rename it to `monopay.php`

Run the following command to publish the package config file:

```bash
php artisan vendor:publish --provider="SwissFreeCommerce\PaymentMerchant\Providers\MonopayServiceProvider"
```

You should now have a `config/monopay.php` file that allows you to configure the basics of this package.

## Documentation

### Get Currency
In order to receive all the currencies, a request must be sent in the following form

```php
use MonopayService;
```

```php
$service = new MonopayService;

$result = $service->getCurrency();
```

### Merchant Request
To send a request, the request must be sent in the following form

```php
use MonopayService;
use SwissFreeCommerce\PaymentMerchant\Data\DataRequest;
```

```php
$service = new MonopayService;

$data = new DataRequest('currency iso code', 'order id in your system', 'float amount');

$result = $service->request($data);
```

### Merchant Verify
To send a verify, the request must be sent in the following form

```php
use MonopayService;
use SwissFreeCommerce\PaymentMerchant\Data\TrackingCode;
```

```php
$service = new MonopayService;

$data = new TrackingCode('tracking code');

$result = $service->verify($data);
```


### Merchant Status
To send a status, the request must be sent in the following form

```php
use MonopayService;
use SwissFreeCommerce\PaymentMerchant\Data\TrackingCode;
```

```php

$service = new MonopayService;

$data = new TrackingCode('tracking code');

$result = $service->status($data);
```
