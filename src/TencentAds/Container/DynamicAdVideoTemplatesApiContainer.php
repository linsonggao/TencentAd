<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\DynamicAdVideoTemplatesApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class DynamicAdVideoTemplatesApiContainer extends ApiContainer
{
    /** @var DynamicAdVideoTemplatesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DynamicAdVideoTemplatesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DynamicAdVideoTemplatesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DynamicAdVideoTemplatesApi dynamicAdVideoTemplatesGet function
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
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $adcreativeTemplateId = isset($params['adcreative_template_id']) ? $params['adcreative_template_id'] : null;
            $productMode = isset($params['product_mode']) ? $params['product_mode'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dynamicAdVideoTemplatesGet($accountId, $productCatalogId, $adcreativeTemplateId, $productMode, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DynamicAdVideoTemplatesApi dynamicAdVideoTemplatesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $adcreativeTemplateId = isset($params['adcreative_template_id']) ? $params['adcreative_template_id'] : null;
            $productMode = isset($params['product_mode']) ? $params['product_mode'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dynamicAdVideoTemplatesGetAsync($accountId, $productCatalogId, $adcreativeTemplateId, $productMode, $page, $pageSize, $fields);
            return $response;
        });
    }
}
