<?php
/**
 * WechatLocalBusinessReviewStatus
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
 * WechatLocalBusinessReviewStatus Class Doc Comment
 *
 * @category Class
 * @description 审核状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatLocalBusinessReviewStatus
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'ADVERTISER_REVIEW_STATUS_PENDING';
    const NORMAL = 'ADVERTISER_REVIEW_STATUS_NORMAL';
    const DENIED = 'ADVERTISER_REVIEW_STATUS_DENIED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::NORMAL,
            self::DENIED,
        ];
    }
}


