<?php

namespace SwissFreeCommerce\PaymentMerchant;

class MerchantService
{
    const API_PATH = "https://payment.monopon.net/api/v1/";
    const VERSION = '1.0.0';

    /**
     * get path
     *
     * @param string $path
     *
     * @return string
     */
    private function get_path(string $path = ''): string
    {
        return self::API_PATH . $path;
    }

    /**
     * get all currency
     *
     * @return void
     */
    public function getCurrency(): void
    {

    }

    /**
     * request order
     *
     * @return void
     */
    public function request(): void
    {

    }

    /**
     * verify order
     *
     * @return void
     */
    public function verify(): void
    {

    }

    /**
     * check order
     *
     * @return void
     */
    public function check(): void
    {

    }
}
