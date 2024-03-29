<?php
/**
 * SmartBidType
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ZzyLsg\TencentAds\Model;
use \ZzyLsg\TencentAds\ObjectSerializer;

/**
 * SmartBidType Class Doc Comment
 *
 * @category Class
 * @description 出价类型， 当出价类型为SMART_BID_TYPE_SYSTEMATIC时，不可传入bid_amount，暂不支持微信流量，功能灰度开放中。smart_bid_type出价类型仅支持oCPX广告使用
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartBidType
{
    /**
     * Possible values of this enum
     */
    const CUSTOM = 'SMART_BID_TYPE_CUSTOM';
    const SYSTEMATIC = 'SMART_BID_TYPE_SYSTEMATIC';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CUSTOM,
            self::SYSTEMATIC,
        ];
    }
}


