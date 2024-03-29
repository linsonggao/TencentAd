<?php
/**
 * WechatSpecificationAccountType
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
 * WechatSpecificationAccountType Class Doc Comment
 *
 * @category Class
 * @description 微信广告账户类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatSpecificationAccountType
{
    /**
     * Possible values of this enum
     */
    const OFFICIAL_ACCOUNTS = 'WECHAT_ACCOUNT_TYPE_OFFICIAL_ACCOUNTS';
    const MINI_PROGRAM = 'WECHAT_ACCOUNT_TYPE_MINI_PROGRAM';
    const MINI_GAME = 'WECHAT_ACCOUNT_TYPE_MINI_GAME';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OFFICIAL_ACCOUNTS,
            self::MINI_PROGRAM,
            self::MINI_GAME,
        ];
    }
}


