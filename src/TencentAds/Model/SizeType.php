<?php
/**
 * SizeType
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
 * SizeType Class Doc Comment
 *
 * @category Class
 * @description 目标尺寸：朋友圈竖版视频、微信激励视频、闪屏、9:16、4:3、16:9
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SizeType
{
    /**
     * Possible values of this enum
     */
    const VERTICALVERSION_750_1536 = 'VERTICALVERSION_750_1536';
    const VERTICALVERSION_750_1334 = 'VERTICALVERSION_750_1334';
    const VERTICALVERSION_1080_1920 = 'VERTICALVERSION_1080_1920';
    const VERTICALVERSION = 'VERTICALVERSION';
    const HORIZONTALVERSION_4_3 = 'HORIZONTALVERSION_4_3';
    const HORIZONTALVERSION = 'HORIZONTALVERSION';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VERTICALVERSION_750_1536,
            self::VERTICALVERSION_750_1334,
            self::VERTICALVERSION_1080_1920,
            self::VERTICALVERSION,
            self::HORIZONTALVERSION_4_3,
            self::HORIZONTALVERSION,
        ];
    }
}


