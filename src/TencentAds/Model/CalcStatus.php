<?php
/**
 * CalcStatus
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
 * CalcStatus Class Doc Comment
 *
 * @category Class
 * @description 广告状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CalcStatus
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'STATUS_UNKNOWN';
    const PENDING = 'STATUS_PENDING';
    const DENIED = 'STATUS_DENIED';
    const FROZEN = 'STATUS_FROZEN';
    const SUSPEND = 'STATUS_SUSPEND';
    const READY = 'STATUS_READY';
    const ACTIVE = 'STATUS_ACTIVE';
    const STOP = 'STATUS_STOP';
    const PREPARE = 'STATUS_PREPARE';
    const DELETED = 'STATUS_DELETED';
    const ACTIVE_ACCOUNT_FROZEN = 'STATUS_ACTIVE_ACCOUNT_FROZEN';
    const ACTIVE_ACCOUNT_EMPTY = 'STATUS_ACTIVE_ACCOUNT_EMPTY';
    const ACTIVE_ACCOUNT_LIMIT = 'STATUS_ACTIVE_ACCOUNT_LIMIT';
    const ACTIVE_CAMPAIGN_LIMIT = 'STATUS_ACTIVE_CAMPAIGN_LIMIT';
    const ACTIVE_CAMPAIGN_SUSPEND = 'STATUS_ACTIVE_CAMPAIGN_SUSPEND';
    const ACTIVE_AD_LIMIT = 'STATUS_ACTIVE_AD_LIMIT';
    const PART_READY = 'STATUS_PART_READY';
    const PART_ACTIVE = 'STATUS_PART_ACTIVE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PENDING,
            self::DENIED,
            self::FROZEN,
            self::SUSPEND,
            self::READY,
            self::ACTIVE,
            self::STOP,
            self::PREPARE,
            self::DELETED,
            self::ACTIVE_ACCOUNT_FROZEN,
            self::ACTIVE_ACCOUNT_EMPTY,
            self::ACTIVE_ACCOUNT_LIMIT,
            self::ACTIVE_CAMPAIGN_LIMIT,
            self::ACTIVE_CAMPAIGN_SUSPEND,
            self::ACTIVE_AD_LIMIT,
            self::PART_READY,
            self::PART_ACTIVE,
        ];
    }
}


