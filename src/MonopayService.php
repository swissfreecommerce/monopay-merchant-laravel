<?php

namespace SwissFreeCommerce\PaymentMerchant;

use Illuminate\Http\JsonResponse;
use SwissFreeCommerce\PaymentMerchant\Actions\GetCurrency as ActionGetCurrency;
use SwissFreeCommerce\PaymentMerchant\Actions\Request as ActionRequest;
use SwissFreeCommerce\PaymentMerchant\Actions\Status as ActionStatus;
use SwissFreeCommerce\PaymentMerchant\Actions\Verify as ActionVerify;
use SwissFreeCommerce\PaymentMerchant\Data\Request as DataRequest;
use SwissFreeCommerce\PaymentMerchant\Data\TrackingCode as DataTrackingCode;

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
    public function get_path(string $path = ''): string
    {
        return self::API_PATH.$path;
    }

    /**
     * get all currency
     *
     * @return JsonResponse
     */
    public function getCurrency(): JsonResponse
    {
        return (new ActionGetCurrency)->execute();
    }

    /**
     * request order
     *
     * @param DataRequest $data
     *
     * @return JsonResponse
     */
    public function request(DataRequest $data): JsonResponse
    {
        return (new ActionRequest)->execute($data);
    }

    /**
     * verify order
     *
     * @param DataTrackingCode $data
     *
     * @return JsonResponse
     */
    public function verify(DataTrackingCode $data): JsonResponse
    {
        return (new ActionVerify)->execute($data);
    }

    /**
     * check order
     *
     * @param DataTrackingCode $data
     *
     * @return JsonResponse
     */
    public function status(DataTrackingCode $data): JsonResponse
    {
        return (new ActionStatus)->execute($data);
    }
}
