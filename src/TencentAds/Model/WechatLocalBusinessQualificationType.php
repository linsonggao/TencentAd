<?php
/**
 * WechatLocalBusinessQualificationType
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
 * WechatLocalBusinessQualificationType Class Doc Comment
 *
 * @category Class
 * @description 资质类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatLocalBusinessQualificationType
{
    /**
     * Possible values of this enum
     */
    const BUSINESS_LICENSE = 'STUFF_BUSINESS_LICENSE';
    const ID_CARD_FRONT = 'STUFF_ID_CARD_FRONT';
    const ID_CARD_REVERSE = 'STUFF_ID_CARD_REVERSE';
    const INDUSTRY_QUALIFICATION = 'STUFF_INDUSTRY_QUALIFICATION';
    const ADDIITIONAL_QUALIFICATION = 'STUFF_ADDIITIONAL_QUALIFICATION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUSINESS_LICENSE,
            self::ID_CARD_FRONT,
            self::ID_CARD_REVERSE,
            self::INDUSTRY_QUALIFICATION,
            self::ADDIITIONAL_QUALIFICATION,
        ];
    }
}


