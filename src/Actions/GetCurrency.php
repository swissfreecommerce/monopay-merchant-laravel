<?php

namespace SwissFreeCommerce\PaymentMerchant\Actions;

use Exception;
use SwissFreeCommerce\PaymentMerchant\Helpers\Connect;

class GetCurrency
{
    /**
     * Get all currency.
     *
     * @return array
     * @throws Exception
     */
    public function execute(): array
    {
        return Connect::send('general/currency', $data->toArray());
    }
}
