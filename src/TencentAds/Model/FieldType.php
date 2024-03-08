<?php
/**
 * FieldType
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
 * FieldType Class Doc Comment
 *
 * @category Class
 * @description 创意元素传参类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FieldType
{
    /**
     * Possible values of this enum
     */
    const STRING = 'FIELD_TYPE_STRING';
    const ENUM = 'FIELD_TYPE_ENUM';
    const INTEGER = 'FIELD_TYPE_INTEGER';
    const STRUCT = 'FIELD_TYPE_STRUCT';
    const INTEGER_ARRAY = 'FIELD_TYPE_INTEGER_ARRAY';
    const ENUM_ARRAY = 'FIELD_TYPE_ENUM_ARRAY';
    const STRING_ARRAY = 'FIELD_TYPE_STRING_ARRAY';
    const STRUCT_ARRAY = 'FIELD_TYPE_STRUCT_ARRAY';
    const BOOLEAN = 'FIELD_TYPE_BOOLEAN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STRING,
            self::ENUM,
            self::INTEGER,
            self::STRUCT,
            self::INTEGER_ARRAY,
            self::ENUM_ARRAY,
            self::STRING_ARRAY,
            self::STRUCT_ARRAY,
            self::BOOLEAN,
        ];
    }
}


