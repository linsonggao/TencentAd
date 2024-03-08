<?php
/**
 * PackageLevel
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
 * PackageLevel Class Doc Comment
 *
 * @category Class
 * @description 套餐等级, 设置总预算和广告结束时间后该字段可不填
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackageLevel
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'PACKAGE_LEVEL_UNKNOWN';
    const _2000 = 'PACKAGE_LEVEL_2000';
    const _5000 = 'PACKAGE_LEVEL_5000';
    const _9000 = 'PACKAGE_LEVEL_9000';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::_2000,
            self::_5000,
            self::_9000,
        ];
    }
}

