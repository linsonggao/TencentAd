<?php
/**
 * ViewerIdType
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
 * ViewerIdType Class Doc Comment
 *
 * @category Class
 * @description 受众id类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ViewerIdType
{
    /**
     * Possible values of this enum
     */
    const QQ = 'USER_ID_TYPE_QQ';
    const WECHAT_ID = 'USER_ID_TYPE_WECHAT_ID';
    const QQ_ID = 'USER_ID_TYPE_QQ_ID';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::QQ,
            self::WECHAT_ID,
            self::QQ_ID,
        ];
    }
}


