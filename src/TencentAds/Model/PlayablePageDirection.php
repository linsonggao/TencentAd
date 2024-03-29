<?php
/**
 * PlayablePageDirection
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
 * PlayablePageDirection Class Doc Comment
 *
 * @category Class
 * @description 互动推广页展示方向
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlayablePageDirection
{
    /**
     * Possible values of this enum
     */
    const HORIZONTAL_VERTICAL = 'PLAYABLE_PAGE_DIRECTION_HORIZONTAL_VERTICAL';
    const VERTICAL = 'PLAYABLE_PAGE_DIRECTION_VERTICAL';
    const HORIZONTAL = 'PLAYABLE_PAGE_DIRECTION_HORIZONTAL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HORIZONTAL_VERTICAL,
            self::VERTICAL,
            self::HORIZONTAL,
        ];
    }
}


