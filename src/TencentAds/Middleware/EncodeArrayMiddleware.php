<?php
/**
 * User: tencent_ad_developer <tencent_ad_developer@tencent.com>
 * Date: 2020-02-02
 * Time: 16:01
 */

namespace ZzyLsg\TencentAds\Middleware;

use Closure;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareRequest;
use ZzyLsg\TencentAds\Middleware\Model\MiddlewareResponse;

class EncodeArrayMiddleware implements MiddlewareInterface
{
    /**
     * Handle middleware
     * @param MiddlewareRequest $request
     * @param Closure $next
     * @return MiddlewareResponse
     */
    public function handle($request, Closure $next)
    {
        $arguments = $request->getApiMethodArguments();
        foreach ($arguments as $key => $item) {
            if (is_array($item)) {
                $arguments[$key] = json_encode($item);
            }
        }
        $request->setApiMethodArguments($arguments);
        return $next($request);
    }
}
