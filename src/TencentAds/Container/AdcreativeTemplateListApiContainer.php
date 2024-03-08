<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\AdcreativeTemplateListApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class AdcreativeTemplateListApiContainer extends ApiContainer
{
    /** @var AdcreativeTemplateListApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return AdcreativeTemplateListApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new AdcreativeTemplateListApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle AdcreativeTemplateListApi adcreativeTemplateListGet function
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
            $campaignType = isset($params['campaign_type']) ? $params['campaign_type'] : null;
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $dynamicAbilityType = isset($params['dynamic_ability_type']) ? $params['dynamic_ability_type'] : null;
            $isDynamicCreative = isset($params['is_dynamic_creative']) ? $params['is_dynamic_creative'] : null;
            $wechatSceneSpecPosition = isset($params['wechat_scene_spec_position']) ? $params['wechat_scene_spec_position'] : null;
            $adcreativeTemplateId = isset($params['adcreative_template_id']) ? $params['adcreative_template_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adcreativeTemplateListGet($accountId, $siteSet, $campaignType, $promotedObjectType, $dynamicAbilityType, $isDynamicCreative, $wechatSceneSpecPosition, $adcreativeTemplateId, $page, $pageSize, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle AdcreativeTemplateListApi adcreativeTemplateListGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $siteSet = isset($params['site_set']) ? $params['site_set'] : null;
            $campaignType = isset($params['campaign_type']) ? $params['campaign_type'] : null;
            $promotedObjectType = isset($params['promoted_object_type']) ? $params['promoted_object_type'] : null;
            $dynamicAbilityType = isset($params['dynamic_ability_type']) ? $params['dynamic_ability_type'] : null;
            $isDynamicCreative = isset($params['is_dynamic_creative']) ? $params['is_dynamic_creative'] : null;
            $wechatSceneSpecPosition = isset($params['wechat_scene_spec_position']) ? $params['wechat_scene_spec_position'] : null;
            $adcreativeTemplateId = isset($params['adcreative_template_id']) ? $params['adcreative_template_id'] : null;
            $page = isset($params['page']) ? $params['page'] : null;
            $pageSize = isset($params['page_size']) ? $params['page_size'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->adcreativeTemplateListGetAsync($accountId, $siteSet, $campaignType, $promotedObjectType, $dynamicAbilityType, $isDynamicCreative, $wechatSceneSpecPosition, $adcreativeTemplateId, $page, $pageSize, $fields);
            return $response;
        });
    }
}
