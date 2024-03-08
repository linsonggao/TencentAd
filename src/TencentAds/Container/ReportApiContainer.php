<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\ReportApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class ReportApiContainer extends ApiContainer
{
    /** @var ReportApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return ReportApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new ReportApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle ReportApi reportAdUnion function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function adUnion(array $params = [])
    {
        return $this->handleMiddleware('adUnion', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportAdUnion($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ReportApi reportAdUnionAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adUnionAsync(array $params = [])
    {
        return $this->handleMiddleware('adUnion', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportAdUnionAsync($data);
            return $response;
        });
    }


    /**
     * Handle ReportApi reportConversionsPredict function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function conversionsPredict(array $params = [])
    {
        return $this->handleMiddleware('conversionsPredict', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportConversionsPredict($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ReportApi reportConversionsPredictAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function conversionsPredictAsync(array $params = [])
    {
        return $this->handleMiddleware('conversionsPredict', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportConversionsPredictAsync($data);
            return $response;
        });
    }


    /**
     * Handle ReportApi reportLandingPage function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function landingPage(array $params = [])
    {
        return $this->handleMiddleware('landingPage', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportLandingPage($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ReportApi reportLandingPageAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function landingPageAsync(array $params = [])
    {
        return $this->handleMiddleware('landingPage', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportLandingPageAsync($data);
            return $response;
        });
    }


    /**
     * Handle ReportApi reportVideoFrame function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function videoFrame(array $params = [])
    {
        return $this->handleMiddleware('videoFrame', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportVideoFrame($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle ReportApi reportVideoFrameAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function videoFrameAsync(array $params = [])
    {
        return $this->handleMiddleware('videoFrame', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->reportVideoFrameAsync($data);
            return $response;
        });
    }
}
