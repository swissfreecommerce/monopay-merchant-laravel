<?php

namespace SwissFreeCommerce\PaymentMerchant\Data;

use Illuminate\Contracts\Support\Arrayable;
use Spatie\LaravelData\Data;

class Request extends Data
{
    public function __construct(
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
