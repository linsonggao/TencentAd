<?php

namespace ZzyLsg\TencentAds\Kernel;

use ZzyLsg\TencentAds\ApiException;
use ZzyLsg\TencentAds\Exception\TencentAdsSDKException;
use ZzyLsg\TencentAds\Tools\BatchRequest;
use ZzyLsg\TencentAds\Tools\RapidAddAds;
use ZzyLsg\TencentAds\Tools\RapidAddAdsResponseData;

class Tools extends App
{
    /** @var BatchRequest */
    public $batchRequestContainer;

    /** @var RapidAddAds */
    public $rapidAddAdsContainer;

    /**
     * @param $accountId
     * @param $batchRequest
     *
     * @return BatchResponse[]
     * @throws ApiException
     * @throws TencentAdsSDKException
     */
    public function sendBatchRequest($accountId, $batchRequest)
    {
        if (empty($this->batchRequestContainer)) {
            $container = new BatchRequest();
            $container->init($this, $this->getClient());
            $this->batchRequestContainer = $container;
        }

        return $this->batchRequestContainer->sendBatchRequest($accountId, $batchRequest);
    }

    /**
     * @param $campaignRequest
     * @param $adgroupRequest
     * @param $adcreativeRequest
     * @param $adRequest
     *
     * @return mixed|RapidAddAdsResponseData|null
     * @throws TencentAdsSDKException
     */
    public function rapidAddAds($campaignRequest, $adgroupRequest, $adcreativeRequest, $adRequest)
    {
        if (empty($this->rapidAddAdsContainer)) {
            $container = new RapidAddAds();
            $container->init($this, $this->getClient());
            $this->rapidAddAdsContainer = $container;
        }

        return $this->rapidAddAdsContainer->rapidAddAds($campaignRequest, $adgroupRequest, $adcreativeRequest,
            $adRequest);
    }

}