<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\TrackingReportsApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class TrackingReportsApiContainer extends ApiContainer
{
    /** @var TrackingReportsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return TrackingReportsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new TrackingReportsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle TrackingReportsApi trackingReportsGet function
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
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $timeGranularity = isset($params['time_granularity']) ? $params['time_granularity'] : null;
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $promotedObjectId = isset($params['promoted_object_id']) ? $params['promoted_object_id'] : null;
            $feedbackUrl = isset($params['feedback_url']) ? $params['feedback_url'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->trackingReportsGet($accountId, $dateRange, $timeGranularity, $promotedObjectType, $promotedObjectId, $feedbackUrl, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle TrackingReportsApi trackingReportsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $dateRange = isset($params['date_range']) ? $params['date_range'] : null;
            $timeGranularity = isset($params['time_granularity']) ? $params['time_granularity'] : null;
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $promotedObjectId = isset($params['promoted_object_id']) ? $params['promoted_object_id'] : null;
            $feedbackUrl = isset($params['feedback_url']) ? $params['feedback_url'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->trackingReportsGetAsync($accountId, $dateRange, $timeGranularity, $promotedObjectType, $promotedObjectId, $feedbackUrl, $page, $pageSize, $fields);
            return $response;
        });
    }
}
