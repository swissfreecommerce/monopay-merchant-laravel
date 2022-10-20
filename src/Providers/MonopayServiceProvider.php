<?php

namespace SwissFreeCommerce\PaymentMerchant\Providers;

use Illuminate\Support\ServiceProvider;
use SwissFreeCommerce\PaymentMerchant\MonopayService;

class MonopayServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('MonopayService', function($app) {
            return new MonopayService;
        });
    }

    public function boot()
    {
        $this->publishes([realpath(__DIR__.'/../../config/config.php') => config_path('monopay.php')], 'config');
    }
}
