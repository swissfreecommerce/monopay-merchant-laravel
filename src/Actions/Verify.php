<?php

namespace SwissFreeCommerce\PaymentMerchant\Actions;

use Exception;
use SwissFreeCommerce\PaymentMerchant\Data\TrackingCode as DataTrackingCode;
use SwissFreeCommerce\PaymentMerchant\Helpers\Connect;

class Verify
{
    /**
     * Verify merchant order.
     *
     * @param DataTrackingCode $data
     *
     * @return array
     * @throws Exception
     */
    public function execute(DataTrackingCode $data): array
    {
        return Connect::send('merchant/verify', $data->toArray());
    }
}
