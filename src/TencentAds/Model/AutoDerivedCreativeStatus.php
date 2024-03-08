<?php
/**
 * AutoDerivedCreativeStatus
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
 * AutoDerivedCreativeStatus Class Doc Comment
 *
 * @category Class
 * @description 广告自动衍生视频创意状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AutoDerivedCreativeStatus
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'AUTO_DERIVED_CREATIVE_STATUS_DEFAULT';
    const INITIATED = 'AUTO_DERIVED_CREATIVE_STATUS_INITIATED';
    const SUCCESS = 'AUTO_DERIVED_CREATIVE_STATUS_SUCCESS';
    const FAIL = 'AUTO_DERIVED_CREATIVE_STATUS_FAIL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::INITIATED,
            self::SUCCESS,
            self::FAIL,
        ];
    }
}


