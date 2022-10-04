<?php

namespace SwissFreeCommerce\PaymentMerchant\Actions;

use SwissFreeCommerce\PaymentMerchant\Data\Request as DataRequest;
use Exception;

class Request
{
    /**
     * Add merchant request order.
     *
     * @param DataRequest $data
     *
     * @return array
     * @throws Exception
     */
    public function execute(DataRequest $data): array
    {
        return [];
    }
}