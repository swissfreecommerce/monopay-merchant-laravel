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
    public function getPath(string $path = ''): string
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
        $response = (new ActionGetCurrency)->execute();

        return response()->json($response);
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
        $response = (new ActionRequest)->execute($data);

        return response()->json($response);
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
        $response = (new ActionVerify)->execute($data);

        return response()->json($response);
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
        $response = (new ActionStatus)->execute($data);

        return response()->json($response);
    }
}
