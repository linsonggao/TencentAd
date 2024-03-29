<?php
/**
 * CreativeTemplateVersionType
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
 * CreativeTemplateVersionType Class Doc Comment
 *
 * @category Class
 * @description 数据版本类型 0:历史数据 1:旧版本 2:新版本
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreativeTemplateVersionType
{
    /**
     * Possible values of this enum
     */
    const UNKOWN = 'CREATIVE_TEMPLATE_VERSION_TYPE_UNKOWN';
    const OLD = 'CREATIVE_TEMPLATE_VERSION_TYPE_OLD';
    const _NEW = 'CREATIVE_TEMPLATE_VERSION_TYPE_NEW';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKOWN,
            self::OLD,
            self::_NEW,
        ];
    }
}


