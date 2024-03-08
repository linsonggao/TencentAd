<?php
/**
 * MediaType
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
 * MediaType Class Doc Comment
 *
 * @category Class
 * @description 视频类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MediaType
{
    /**
     * Possible values of this enum
     */
    const MEDIA_TYPE_MP4 = 'MEDIA_TYPE_MP4';
    const MEDIA_TYPE_AVI = 'MEDIA_TYPE_AVI';
    const MEDIA_TYPE_MOV = 'MEDIA_TYPE_MOV';
    const MEDIA_TYPE_FLV = 'MEDIA_TYPE_FLV';
    const VIDEO_TYPE_MP4 = 'VIDEO_TYPE_MP4';
    const VIDEO_TYPE_AVI = 'VIDEO_TYPE_AVI';
    const VIDEO_TYPE_MOV = 'VIDEO_TYPE_MOV';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MEDIA_TYPE_MP4,
            self::MEDIA_TYPE_AVI,
            self::MEDIA_TYPE_MOV,
            self::MEDIA_TYPE_FLV,
            self::VIDEO_TYPE_MP4,
            self::VIDEO_TYPE_AVI,
            self::VIDEO_TYPE_MOV,
        ];
    }
}


