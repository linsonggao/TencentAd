<?php
/**
 * BusinessPrice
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
 * BusinessPrice Class Doc Comment
 *
 * @category Class
 * @description 商务服务价格
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessPrice
{
    /**
     * Possible values of this enum
     */
    const FREE = 'BUSINESS_PRICE_FREE';
    const _1_TO_50 = 'BUSINESS_PRICE_1_TO_50';
    const _51_TO_100 = 'BUSINESS_PRICE_51_TO_100';
    const _101_TO_200 = 'BUSINESS_PRICE_101_TO_200';
    const _201_TO_1000 = 'BUSINESS_PRICE_201_TO_1000';
    const _1001_TO_3000 = 'BUSINESS_PRICE_1001_TO_3000';
    const _3001_TO_5000 = 'BUSINESS_PRICE_3001_TO_5000';
    const _5001_TO_8000 = 'BUSINESS_PRICE_5001_TO_8000';
    const _8001_TO_12000 = 'BUSINESS_PRICE_8001_TO_12000';
    const OUT_12000 = 'BUSINESS_PRICE_OUT_12000';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FREE,
            self::_1_TO_50,
            self::_51_TO_100,
            self::_101_TO_200,
            self::_201_TO_1000,
            self::_1001_TO_3000,
            self::_3001_TO_5000,
            self::_5001_TO_8000,
            self::_8001_TO_12000,
            self::OUT_12000,
        ];
    }
}


