<?php

namespace SwissFreeCommerce\PaymentMerchant\Data;

use Spatie\LaravelData\Data;
use Illuminate\Contracts\Support\Arrayable;

class TrackingCode extends Data
{
    public function __construct(
        public string $merchant_id,
        public string $merchant_secret,
        public string $tracking_code)
    {
    }

    /**
     * validation data
     *
     * @param Arrayable|array $payload
     *
     * @return Arrayable|array
     */
    public static function rules(Arrayable|array $payload): Arrayable|array
    {
        return [
            'merchant_id'     => [
                'required',
                'string',
                'max:100'
            ],
            'merchant_secret' => [
                'required',
                'string',
                'max:100'
            ],
            'tracking_code'   => [
                'required',
                'string',
                'max:100'
            ]
        ];
    }
}
