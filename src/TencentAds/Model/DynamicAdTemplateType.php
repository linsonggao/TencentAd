<?php
/**
 * DynamicAdTemplateType
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
 * DynamicAdTemplateType Class Doc Comment
 *
 * @category Class
 * @description 动态商品模板类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicAdTemplateType
{
    /**
     * Possible values of this enum
     */
    const IMAGE_TEMPLATE = 'DYNAMIC_AD_IMAGE_TEMPLATE';
    const VIDEO_TEMPLATE = 'DYNAMIC_AD_VIDEO_TEMPLATE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IMAGE_TEMPLATE,
            self::VIDEO_TEMPLATE,
        ];
    }
}


