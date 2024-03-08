<?php
/**
 * WechatAccountTradeStatus
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
 * WechatAccountTradeStatus Class Doc Comment
 *
 * @category Class
 * @description 账户交易状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatAccountTradeStatus
{
    /**
     * Possible values of this enum
     */
    const PROCESSING = 'TRADE_STATUS_PROCESSING';
    const TRANSFERRED = 'TRADE_STATUS_TRANSFERRED';
    const DISAPPROVED = 'TRADE_STATUS_DISAPPROVED';
    const UNSUPPORTED = 'TRADE_STATUS_UNSUPPORTED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROCESSING,
            self::TRANSFERRED,
            self::DISAPPROVED,
            self::UNSUPPORTED,
        ];
    }
}


