<?php

namespace SwissFreeCommerce\PaymentMerchant\Actions;

use Exception;
use SwissFreeCommerce\PaymentMerchant\Helpers\Connect;

class GetCurrency
{
    /**
     * Get all currency.
     *
     * @return string
     */
    public function execute()
    {
        return Connect::send('general/currency');
    }
}
