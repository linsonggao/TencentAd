<?php
/**
 * ProfileType
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
 * ProfileType Class Doc Comment
 *
 * @category Class
 * @description 朋友圈头像及昵称跳转页类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProfileType
{
    /**
     * Possible values of this enum
     */
    const DEFINITION = 'PROFILE_TYPE_DEFINITION';
    const AUTO_GENERATE = 'PROFILE_TYPE_AUTO_GENERATE';
    const WEAPP = 'PROFILE_TYPE_WEAPP';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEFINITION,
            self::AUTO_GENERATE,
            self::WEAPP,
        ];
    }
}


