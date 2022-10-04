<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Monopay Merchant ID
    |--------------------------------------------------------------------------
    |
    | This value is the Merchant ID for the service.
    |
    */

    "merchant_id" => env("MONOPAY_MERCHANT_ID", null),

    /*
    |--------------------------------------------------------------------------
    | Monopay Merchant Secret
    |--------------------------------------------------------------------------
    |
    | This value is the Merchant Secret for the service.
    |
    */

    "merchant_secret" => env("MONOPAY_MERCHANT_SECRET", null)
];
