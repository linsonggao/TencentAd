<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\LeadsInvalidPayApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class LeadsInvalidPayApiContainer extends ApiContainer
{
    /** @var LeadsInvalidPayApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LeadsInvalidPayApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LeadsInvalidPayApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LeadsInvalidPayApi leadsInvalidPayGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->leadsInvalidPayGet($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LeadsInvalidPayApi leadsInvalidPayGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->leadsInvalidPayGetAsync($data);
            return $response;
        });
    }
}
