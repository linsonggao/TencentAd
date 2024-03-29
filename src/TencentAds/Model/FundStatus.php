<?php
/**
 * FundStatus
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
 * FundStatus Class Doc Comment
 *
 * @category Class
 * @description 资金状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FundStatus
{
    /**
     * Possible values of this enum
     */
    const NORMAL = 'FUND_STATUS_NORMAL';
    const NOT_ENOUGH = 'FUND_STATUS_NOT_ENOUGH';
    const CLOSED = 'FUND_STATUS_CLOSED';
    const FROZEN = 'FUND_STATUS_FROZEN';
    const UNKNOWN = 'FUND_STATUS_UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NORMAL,
            self::NOT_ENOUGH,
            self::CLOSED,
            self::FROZEN,
            self::UNKNOWN,
        ];
    }
}


