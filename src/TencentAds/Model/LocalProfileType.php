<?php
/**
 * LocalProfileType
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
 * LocalProfileType Class Doc Comment
 *
 * @category Class
 * @description 头像类型,使用自定义类型需要传profile id，通过该字段实现类型的切换
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocalProfileType
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'LOCAL_PROFILE_TYPE_DEFAULT';
    const CUSTOMIZED = 'LOCAL_PROFILE_TYPE_CUSTOMIZED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::CUSTOMIZED,
        ];
    }
}


