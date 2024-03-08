<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\TargetingTagsApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class TargetingTagsApiContainer extends ApiContainer
{
    /** @var TargetingTagsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return TargetingTagsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new TargetingTagsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle TargetingTagsApi targetingTagsGet function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function get(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $type = isset($params['type']) ? $params['type'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $tagSpec = isset($params['tag_spec']) ? $params['tag_spec'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->targetingTagsGet($type, $accountId, $tagSpec, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle TargetingTagsApi targetingTagsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $type = isset($params['type']) ? $params['type'] : null;
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $tagSpec = isset($params['tag_spec']) ? $params['tag_spec'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->targetingTagsGetAsync($type, $accountId, $tagSpec, $fields);
            return $response;
        });
    }
}
