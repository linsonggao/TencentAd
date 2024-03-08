<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\VideomakerVideocapturesApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class VideomakerVideocapturesApiContainer extends ApiContainer
{
    /** @var VideomakerVideocapturesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return VideomakerVideocapturesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new VideomakerVideocapturesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle VideomakerVideocapturesApi videomakerVideocapturesAdd function
     * @param array params
     * @return mixed
     * @throws \TencentAds\ApiException
     * @throws \TencentAds\Exception\TencentAdsResponseException
     */
    public function add(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $videoId = isset($params['video_id']) ? $params['video_id'] : null;
            $videoFile = isset($params['video_file']) ? $params['video_file'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $number = isset($params['number']) ? $params['number'] : null;
            $returnImageIds = isset($params['return_image_ids']) ? $params['return_image_ids'] : null;
            $response = $this->apiInstance->videomakerVideocapturesAdd($accountId, $videoId, $videoFile, $signature, $number, $returnImageIds);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle VideomakerVideocapturesApi videomakerVideocapturesAddAsync function
     * @param array params
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addAsync(array $params = [])
    {
        return $this->handleMiddleware('add', $params, function(MiddlewareRequest $request) {
            $params = $request->getApiMethodArguments();
            $accountId = isset($params['account_id']) ? $params['account_id'] : null;
            $videoId = isset($params['video_id']) ? $params['video_id'] : null;
            $videoFile = isset($params['video_file']) ? $params['video_file'] : null;
            $signature = isset($params['signature']) ? $params['signature'] : null;
            $number = isset($params['number']) ? $params['number'] : null;
            $returnImageIds = isset($params['return_image_ids']) ? $params['return_image_ids'] : null;
            $response = $this->apiInstance->videomakerVideocapturesAddAsync($accountId, $videoId, $videoFile, $signature, $number, $returnImageIds);
            return $response;
        });
    }
}
