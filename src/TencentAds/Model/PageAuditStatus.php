<?php
/**
 * PageAuditStatus
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
 * PageAuditStatus Class Doc Comment
 *
 * @category Class
 * @description 蹊径落地页状态
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PageAuditStatus
{
    /**
     * Possible values of this enum
     */
    const EDITING = 'LANDING_PAGE_STATUS_EDITING';
    const PENDING = 'LANDING_PAGE_STATUS_PENDING';
    const APPROVED = 'LANDING_PAGE_STATUS_APPROVED';
    const REJECTED = 'LANDING_PAGE_STATUS_REJECTED';
    const DELETED = 'LANDING_PAGE_STATUS_DELETED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EDITING,
            self::PENDING,
            self::APPROVED,
            self::REJECTED,
            self::DELETED,
        ];
    }
}

