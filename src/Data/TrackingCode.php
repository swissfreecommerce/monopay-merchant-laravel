<?php

namespace SwissFreeCommerce\PaymentMerchant\Data;

use Illuminate\Contracts\Support\Arrayable;
use Spatie\LaravelData\Data;

class TrackingCode extends Data
{
    public function __construct(
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
            'tracking_code' => [
                'required',
                'string',
                'max:100'
            ]
        ];
    }
}
