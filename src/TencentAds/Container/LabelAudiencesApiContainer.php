<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\LabelAudiencesApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class LabelAudiencesApiContainer extends ApiContainer
{
    /** @var LabelAudiencesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return LabelAudiencesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new LabelAudiencesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle LabelAudiencesApi labelAudiencesAdd function
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
            $response = $this->apiInstance->labelAudiencesAdd($data);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle LabelAudiencesApi labelAudiencesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $data = $params;
            $response = $this->apiInstance->labelAudiencesAddAsync($data);
            return $response;
        });
    }
}
