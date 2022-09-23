<?php

namespace SwissFreeCommerce\PaymentMerchant\Exceptions;

class HttpException extends BaseRuntimeException
{
    public function getName()
    {
        return 'HttpException';
    }
}
