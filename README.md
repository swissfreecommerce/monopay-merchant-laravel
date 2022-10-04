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

    SwissFreeCommerce\PaymentMerchant\Providers\MonopayPackageServiceProvider::class,
]
```

### Publish the config
Copy the `config` file from `vendor/swissfreecommerce/monopay-merchant-laravel/config/config.php` to `config` folder of your Laravel application and rename it to `monopay.php`

Run the following command to publish the package config file:

```bash
php artisan vendor:publish --provider="SwissFreeCommerce\PaymentMerchant\Providers\MonopayPackageServiceProvider"
```

You should now have a `config/monopay.php` file that allows you to configure the basics of this package.

## Documentation
