<?php
/**
 * BillingEvent
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
 * BillingEvent Class Doc Comment
 *
 * @category Class
 * @description 计费类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillingEvent
{
    /**
     * Possible values of this enum
     */
    const NONE = 'BILLINGEVENT_NONE';
    const CLICK = 'BILLINGEVENT_CLICK';
    const APP_DOWNLOAD = 'BILLINGEVENT_APP_DOWNLOAD';
    const IMPRESSION = 'BILLINGEVENT_IMPRESSION';
    const APP_INSTALL = 'BILLINGEVENT_APP_INSTALL';
    const DURATION = 'BILLINGEVENT_DURATION';
    const DAY = 'BILLINGEVENT_DAY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::CLICK,
            self::APP_DOWNLOAD,
            self::IMPRESSION,
            self::APP_INSTALL,
            self::DURATION,
            self::DAY,
        ];
    }
}


