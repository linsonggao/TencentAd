<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\WechatPagesGrantinfoApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class WechatPagesGrantinfoApiContainer extends ApiContainer
{
    /** @var WechatPagesGrantinfoApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return WechatPagesGrantinfoApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new WechatPagesGrantinfoApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle WechatPagesGrantinfoApi wechatPagesGrantinfoGet function
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
            $searchKey = isset($params['search_key']) ? $params['search_key'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatPagesGrantinfoGet($accountId, $searchKey, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle WechatPagesGrantinfoApi wechatPagesGrantinfoGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $searchKey = isset($params['search_key']) ? $params['search_key'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->wechatPagesGrantinfoGetAsync($accountId, $searchKey, $page, $pageSize, $fields);
            return $response;
        });
    }
}
