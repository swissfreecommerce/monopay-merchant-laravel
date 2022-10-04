<?php

namespace SwissFreeCommerce\PaymentMerchant;

use Illuminate\Support\Facades\Facade;

class MonopayPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor()
    {
        return app(MonopayService::class);
    }
}
