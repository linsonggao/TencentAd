<?php
/**
 * BehaviorInterestTimeWindow
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
 * BehaviorInterestTimeWindow Class Doc Comment
 *
 * @category Class
 * @description 行为兴趣意向定向的行为部分的时间窗
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BehaviorInterestTimeWindow
{
    /**
     * Possible values of this enum
     */
    const SEVEN_DAY = 'BEHAVIOR_INTEREST_TIME_WINDOW_SEVEN_DAY';
    const FIFTEEN_DAY = 'BEHAVIOR_INTEREST_TIME_WINDOW_FIFTEEN_DAY';
    const THIRTY_DAY = 'BEHAVIOR_INTEREST_TIME_WINDOW_THIRTY_DAY';
    const THREE_MONTH = 'BEHAVIOR_INTEREST_TIME_WINDOW_THREE_MONTH';
    const SIX_MONTH = 'BEHAVIOR_INTEREST_TIME_WINDOW_SIX_MONTH';
    const ONE_YEAR = 'BEHAVIOR_INTEREST_TIME_WINDOW_ONE_YEAR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SEVEN_DAY,
            self::FIFTEEN_DAY,
            self::THIRTY_DAY,
            self::THREE_MONTH,
            self::SIX_MONTH,
            self::ONE_YEAR,
        ];
    }
}


