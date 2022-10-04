<?php

namespace SwissFreeCommerce\PaymentMerchant\Data;

use Spatie\LaravelData\Data;
use Illuminate\Contracts\Support\Arrayable;

class Request extends Data
{
    public function __construct(
        public string $merchant_id,
        public string $merchant_secret,
        public string $currency_iso_code,
        public string $order_id,
        public float  $amount)
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
            'merchant_id'       => [
                'required',
                'string',
                'max:100'
            ],
            'merchant_secret'   => [
                'required',
                'string',
                'max:100'
            ],
            'currency_iso_code' => [
                'required',
                'string',
                'max:100'
            ],
            'order_id'          => [
                'required',
                'string',
                'max:100'
            ],
            'amount'            => 'required|numeric',
        ];
    }
}
