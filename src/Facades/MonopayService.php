<?php

namespace SwissFreeCommerce\PaymentMerchant\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string getPath(string $path)
 * @method static \Illuminate\Http\JsonResponse getCurrency()
 * @method static \Illuminate\Http\JsonResponse request(\SwissFreeCommerce\PaymentMerchant\Data\Request $data)
 * @method static \Illuminate\Http\JsonResponse verify(\SwissFreeCommerce\PaymentMerchant\Data\TrackingCode $data)
 * @method static \Illuminate\Http\JsonResponse status(\SwissFreeCommerce\PaymentMerchant\Data\TrackingCode $data)
 *
 * @see \SwissFreeCommerce\PaymentMerchant\MonopayService
 */
class MonopayService extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor()
    {
        return 'MonopayService';
    }
}
