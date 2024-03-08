<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\OptimizationGoalPermissionsApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class OptimizationGoalPermissionsApiContainer extends ApiContainer
{
    /** @var OptimizationGoalPermissionsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return OptimizationGoalPermissionsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new OptimizationGoalPermissionsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle OptimizationGoalPermissionsApi optimizationGoalPermissionsGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $bidMode = isset($params['bid_mode']) ? $params['bid_mode'] : null;
            $promotedObjectId = isset($params['promoted_object_id']) ? $params['promoted_object_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->optimizationGoalPermissionsGet($accountId, $siteSet, $promotedObjectType, $bidMode, $promotedObjectId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle OptimizationGoalPermissionsApi optimizationGoalPermissionsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $bidMode = isset($params['bid_mode']) ? $params['bid_mode'] : null;
            $promotedObjectId = isset($params['promoted_object_id']) ? $params['promoted_object_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->optimizationGoalPermissionsGetAsync($accountId, $siteSet, $promotedObjectType, $bidMode, $promotedObjectId, $fields);
            return $response;
        });
    }
}
