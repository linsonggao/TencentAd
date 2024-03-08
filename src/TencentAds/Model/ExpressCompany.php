<?php
/**
 * ExpressCompany
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
 * ExpressCompany Class Doc Comment
 *
 * @category Class
 * @description 快递公司
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExpressCompany
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const SF_EXPRESS = 'SF_EXPRESS';
    const STO = 'STO';
    const YTO = 'YTO';
    const ZTO = 'ZTO';
    const BEST_EXPRESS = 'BEST_EXPRESS';
    const YUNDA_EXPRESS = 'YUNDA_EXPRESS';
    const TTK_EXPRESS = 'TTK_EXPRESS';
    const EMS = 'EMS';
    const CHINA_POST_EXPRESS = 'CHINA_POST_EXPRESS';
    const JUST_IN_TIME = 'JUST_IN_TIME';
    const JD_EXPRESS = 'JD_EXPRESS';
    const DEPPON_EXPRESS = 'DEPPON_EXPRESS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::SF_EXPRESS,
            self::STO,
            self::YTO,
            self::ZTO,
            self::BEST_EXPRESS,
            self::YUNDA_EXPRESS,
            self::TTK_EXPRESS,
            self::EMS,
            self::CHINA_POST_EXPRESS,
            self::JUST_IN_TIME,
            self::JD_EXPRESS,
            self::DEPPON_EXPRESS,
        ];
    }
}


