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
     * @return array
     * @throws Exception
     */
    public function execute(DataRequest $data): array
    {
        return Connect::send('merchant/request', $data->toArray());
    }
}
