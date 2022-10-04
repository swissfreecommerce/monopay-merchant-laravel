<?php

namespace SwissFreeCommerce\PaymentMerchant\Actions;

use SwissFreeCommerce\PaymentMerchant\Data\TrackingCode as DataTrackingCode;
use Exception;

class Status
{
    /**
     * get status merchant order.
     *
     * @param DataTrackingCode $data
     *
     * @return array
     * @throws Exception
     */
    public function execute(DataTrackingCode $data): array
    {
        return [];
    }
}