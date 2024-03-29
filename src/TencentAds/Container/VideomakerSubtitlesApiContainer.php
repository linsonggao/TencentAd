<?php
namespace ZzyLsg\TencentAds\Container;

use GuzzleHttp\Client;
use ZzyLsg\TencentAds\Api\VideomakerSubtitlesApi;
use ZzyLsg\TencentAds\Kernel\ApiContainer;
use ZzyLsg\TencentAds\Kernel\HeaderHandler;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\TencentAds;

class VideomakerSubtitlesApiContainer extends ApiContainer
{
    /** @var VideomakerSubtitlesApi */
    public $apiInstance;


    /**
     * @param TencentAds $app
     * @param Client $client
     * @return VideomakerSubtitlesApiContainer
     */
    public function init(TencentAds $app, Client $client)
    {
        parent::init($app, $client);
        $this->apiInstance = new VideomakerSubtitlesApi($client, $app->getConfig(), new HeaderHandler());
        return $this;
    }


    /**
     * Handle VideomakerSubtitlesApi videomakerSubtitlesAdd function
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
            $onlySubtitleFile = isset($params['only_subtitle_file']) ? $params['only_subtitle_file'] : null;
            $response = $this->apiInstance->videomakerSubtitlesAdd($accountId, $videoId, $videoFile, $signature, $onlySubtitleFile);
            return $this->handleResponse($response);
        });
    }


    /**
     * Handle VideomakerSubtitlesApi videomakerSubtitlesAddAsync function
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
            $onlySubtitleFile = isset($params['only_subtitle_file']) ? $params['only_subtitle_file'] : null;
            $response = $this->apiInstance->videomakerSubtitlesAddAsync($accountId, $videoId, $videoFile, $signature, $onlySubtitleFile);
            return $response;
        });
    }
}
