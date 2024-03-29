<?php
/**
 * ChildrenPrivacyProtection
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
 * ChildrenPrivacyProtection Class Doc Comment
 *
 * @category Class
 * @description 青少年在线隐私保护
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChildrenPrivacyProtection
{
    /**
     * Possible values of this enum
     */
    const UNKOWN_POLICY = 'UNKOWN_POLICY';
    const CHILDREN_ALLOWED = 'CHILDREN_ALLOWED';
    const CHILDREN_PROHIBITED = 'CHILDREN_PROHIBITED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKOWN_POLICY,
            self::CHILDREN_ALLOWED,
            self::CHILDREN_PROHIBITED,
        ];
    }
}


