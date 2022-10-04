<?php

namespace SwissFreeCommerce\PaymentMerchant;

use SwissFreeCommerce\PaymentMerchant\Data\Request as DataRequest;
use SwissFreeCommerce\PaymentMerchant\Data\TrackingCode as DataTrackingCode;
use SwissFreeCommerce\PaymentMerchant\Actions\Request as ActionsRequest;
use SwissFreeCommerce\PaymentMerchant\Actions\Verify as ActionsVerify;
use SwissFreeCommerce\PaymentMerchant\Actions\Status as ActionsStatus;
use Illuminate\Support\Facades\Http;

class MonopayService
{
    const API_PATH = "https://payment.monopon.net/api/v1/";

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
     * @param DataRequest $data
     *
     * @return void
     */
    public function request(DataRequest $data): void
    {

    }

    /**
     * verify order
     *
     * @param DataTrackingCode $data
     *
     * @return void
     */
    public function verify(DataTrackingCode $data): void
    {

    }

    /**
     * check order
     *
     * @param DataTrackingCode $data
     *
     * @return void
     */
    public function status(DataTrackingCode $data): void
    {

    }
}
