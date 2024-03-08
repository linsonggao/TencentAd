<?php
/**
 * ProductionPlace
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
 * ProductionPlace Class Doc Comment
 *
 * @category Class
 * @description 内容产地，作品产地，主要用于漫画类作品
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductionPlace
{
    /**
     * Possible values of this enum
     */
    const JP = 'PRODUCTION_PLACE_JP';
    const RK = 'PRODUCTION_PLACE_RK';
    const US = 'PRODUCTION_PLACE_US';
    const CN = 'PRODUCTION_PLACE_CN';
    const OTHER = 'PRODUCTION_PLACE_OTHER';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::JP,
            self::RK,
            self::US,
            self::CN,
            self::OTHER,
        ];
    }
}


