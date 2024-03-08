<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\WechatAdLabelsApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class WechatAdLabelsApiContainer extends ApiContainer
{
    /** @var WechatAdLabelsApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatAdLabelsApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatAdLabelsApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatAdLabelsApi wechatAdLabelsGet function
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
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatAdLabelsGet($accountId, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatAdLabelsApi wechatAdLabelsGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatAdLabelsGetAsync($accountId, $fields);
            return $response;
        });
    }
}
