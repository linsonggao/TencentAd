<?php
/**
 * ClaimType
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
 * ClaimType Class Doc Comment
 *
 * @category Class
 * @description 归因方式，SDK上报方式时归因方式只能为CLAIM_TYPE_ACTIVATION，JS上报方式时只能是CLAIM_TYPE_CLICK,微信小游戏推广仅支持CLAIM_TYPE_REGISTER，QQ小游戏推广、企业微信推广仅支持是CLAIM_TYPE_CLICK，APP类型、WEB类型、微信小程序并且配置白名单的账户支持CLAIM_TYPE_IMPRESSION
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClaimType
{
    /**
     * Possible values of this enum
     */
    const ACTIVATION = 'CLAIM_TYPE_ACTIVATION';
    const CLICK = 'CLAIM_TYPE_CLICK';
    const REGISTER = 'CLAIM_TYPE_REGISTER';
    const IMPRESSION = 'CLAIM_TYPE_IMPRESSION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVATION,
            self::CLICK,
            self::REGISTER,
            self::IMPRESSION,
        ];
    }
}


