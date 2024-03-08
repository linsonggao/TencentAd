<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\BatchRequestsApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class BatchRequestsApiContainer extends ApiContainer
{
    /** @var BatchRequestsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return BatchRequestsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new BatchRequestsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle BatchRequestsApi batchRequestsAdd function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->batchRequestsAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle BatchRequestsApi batchRequestsAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->batchRequestsAddAsync($data);
            return $response;
        });
    }
}
