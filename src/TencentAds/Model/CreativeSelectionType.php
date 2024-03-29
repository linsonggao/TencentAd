<?php
/**
 * CreativeSelectionType
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
 * CreativeSelectionType Class Doc Comment
 *
 * @category Class
 * @description 创意选择模式
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreativeSelectionType
{
    /**
     * Possible values of this enum
     */
    const BY_TURNS = 'CREATIVE_SELECTION_TYPE_BY_TURNS';
    const AUTO_OPTIMIZED = 'CREATIVE_SELECTION_TYPE_AUTO_OPTIMIZED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BY_TURNS,
            self::AUTO_OPTIMIZED,
        ];
    }
}


