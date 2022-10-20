<?php

namespace SwissFreeCommerce\PaymentMerchant\Actions;

use Exception;
use SwissFreeCommerce\PaymentMerchant\Data\TrackingCode as DataTrackingCode;
use SwissFreeCommerce\PaymentMerchant\Helpers\Connect;

class Status
{
    /**
     * get status merchant order.
     *
     * @param DataTrackingCode $data
     *
     * @return string
     */
    public function execute(DataTrackingCode $data)
    {
        return Connect::send('merchant/status', $data->toArray());
    }
}
