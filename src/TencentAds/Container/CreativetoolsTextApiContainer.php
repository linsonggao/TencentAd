<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\CreativetoolsTextApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class CreativetoolsTextApiContainer extends ApiContainer
{
    /** @var CreativetoolsTextApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return CreativetoolsTextApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new CreativetoolsTextApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle CreativetoolsTextApi creativetoolsTextGet function
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
            $maxTextLength = isset($params['max_text_length']) ? $params['max_text_length'] : null;
            $categoryFirstLevel = isset($params['category_first_level']) ? $params['category_first_level'] : null;
            $categorySecondLevel = isset($params['category_second_level']) ? $params['category_second_level'] : null;
            $keyword = isset($params['keyword']) ? $params['keyword'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $number = isset($params['number']) ? $params['number'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->creativetoolsTextGet($accountId, $maxTextLength, $categoryFirstLevel, $categorySecondLevel, $keyword, $filtering, $number, $fields);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle CreativetoolsTextApi creativetoolsTextGetAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync(array $params = [])
    {
        return $this->handleMiddleware('get', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $maxTextLength = isset($params['max_text_length']) ? $params['max_text_length'] : null;
            $categoryFirstLevel = isset($params['category_first_level']) ? $params['category_first_level'] : null;
            $categorySecondLevel = isset($params['category_second_level']) ? $params['category_second_level'] : null;
            $keyword = isset($params['keyword']) ? $params['keyword'] : null;
            $filtering = isset($params['filtering']) ? $params['filtering'] : null;
            $number = isset($params['number']) ? $params['number'] : null;
            $fields = isset($params['fields']) ? $params['fields'] : null;
            $response = $this->apiInstance->creativetoolsTextGetAsync($accountId, $maxTextLength, $categoryFirstLevel, $categorySecondLevel, $keyword, $filtering, $number, $fields);
            return $response;
        });
    }
}
