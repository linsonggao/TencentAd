<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\DynamicAdImageTemplatesApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class DynamicAdImageTemplatesApiContainer extends ApiContainer
{
    /** @var DynamicAdImageTemplatesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return DynamicAdImageTemplatesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new DynamicAdImageTemplatesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle DynamicAdImageTemplatesApi dynamicAdImageTemplatesGet function
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
            $productMode = isset($params['product_mode']) ? $params['product_mode'] : null;
            $dynamicAdTemplateWidth = isset($params['dynamic_ad_template_width']) ? $params['dynamic_ad_template_width'] : null;
            $dynamicAdTemplateHeight = isset($params['dynamic_ad_template_height']) ? $params['dynamic_ad_template_height'] : null;
            $dynamicAdTemplateOwnershipType = isset($params['dynamic_ad_template_ownership_type']) ? $params['dynamic_ad_template_ownership_type'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dynamicAdImageTemplatesGet($accountId, $productCatalogId, $productMode, $dynamicAdTemplateWidth, $dynamicAdTemplateHeight, $dynamicAdTemplateOwnershipType, $filtering, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle DynamicAdImageTemplatesApi dynamicAdImageTemplatesGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $productCatalogId = isset($params['product_catalog_id']) ? $params['product_catalog_id'] : null;
            $productMode = isset($params['product_mode']) ? $params['product_mode'] : null;
            $dynamicAdTemplateWidth = isset($params['dynamic_ad_template_width']) ? $params['dynamic_ad_template_width'] : null;
            $dynamicAdTemplateHeight = isset($params['dynamic_ad_template_height']) ? $params['dynamic_ad_template_height'] : null;
            $dynamicAdTemplateOwnershipType = isset($params['dynamic_ad_template_ownership_type']) ? $params['dynamic_ad_template_ownership_type'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->dynamicAdImageTemplatesGetAsync($accountId, $productCatalogId, $productMode, $dynamicAdTemplateWidth, $dynamicAdTemplateHeight, $dynamicAdTemplateOwnershipType, $filtering, $page, $pageSize, $fields);
            return $response;
        });
    }
}
