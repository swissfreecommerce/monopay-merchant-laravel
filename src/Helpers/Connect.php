<?php

namespace SwissFreeCommerce\PaymentMerchant\Helpers;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Facades\Http;
use MonopayService;

class Connect
{
    /**
     * Send Data
     *
     * @param string $url
     * @param Arrayable|array $params
     *
     * @return string
     */
    public static function send(string $url, Arrayable|array $params = [])
    {
        $data = array_merge([
            'merchant_id'     => config('monopay.merchant_id'),
            'merchant_secret' => config('monopay.merchant_secret'),
        ], $params);

        return Http::acceptJson()->post(MonopayService::getPath($url), $data);
    }
}
