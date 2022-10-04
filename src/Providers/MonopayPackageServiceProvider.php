<?php

namespace SwissFreeCommerce\PaymentMerchant\Providers;

use Illuminate\Support\ServiceProvider;

class MonopayPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->publishes([realpath(__DIR__.'/../../config/config.php') => config_path('monopay.php')], 'config');
    }
}
