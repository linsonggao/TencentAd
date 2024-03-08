<?php
/**
 * ProcessStatus
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
 * ProcessStatus Class Doc Comment
 *
 * @category Class
 * @description 处理状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProcessStatus
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'PENDING';
    const PROCESSING = 'PROCESSING';
    const SUCCESS = 'SUCCESS';
    const ERROR = 'ERROR';
    const FROZEN = 'FROZEN';
    const THAWING = 'THAWING';
    const LOCKING = 'LOCKING';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::PROCESSING,
            self::SUCCESS,
            self::ERROR,
            self::FROZEN,
            self::THAWING,
            self::LOCKING,
        ];
    }
}


