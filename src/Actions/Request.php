<?php

namespace SwissFreeCommerce\PaymentMerchant\Actions;

use Exception;
use SwissFreeCommerce\PaymentMerchant\Data\Request as DataRequest;
use SwissFreeCommerce\PaymentMerchant\Helpers\Connect;

class Request
{
    /**
     * Add merchant request order.
     *
     * @param DataRequest $data
     *
     * @return string
     */
    public function execute(DataRequest $data)
    {
        return Connect::send('merchant/request', $data->toArray());
    }
}
