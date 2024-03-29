<?php
/**
 * AudienceProductType
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
 * AudienceProductType Class Doc Comment
 *
 * @category Class
 * @description 推广目标类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AudienceProductType
{
    /**
     * Possible values of this enum
     */
    const PAIPAI_ITEM = 'PRODUCT_TYPE_PAIPAI_ITEM';
    const PAIPAI_SHOP = 'PRODUCT_TYPE_PAIPAI_SHOP';
    const QZONE_PAGE_INDEX = 'PRODUCT_TYPE_QZONE_PAGE_INDEX';
    const APP_PC = 'PRODUCT_TYPE_APP_PC';
    const MYAPP = 'PRODUCT_TYPE_MYAPP';
    const QQ_GROUP = 'PRODUCT_TYPE_QQ_GROUP';
    const QQ_BUSINESS = 'PRODUCT_TYPE_QQ_BUSINESS';
    const B_QQ = 'PRODUCT_TYPE_B_QQ';
    const _51_BUY = 'PRODUCT_TYPE_51BUY';
    const QQ_TUAN = 'PRODUCT_TYPE_QQ_TUAN';
    const TASK = 'PRODUCT_TYPE_TASK';
    const APP_ANDROID_OPEN_PLATFORM = 'PRODUCT_TYPE_APP_ANDROID_OPEN_PLATFORM';
    const FEEDS = 'PRODUCT_TYPE_FEEDS';
    const PAIPAI_SHOP_URL = 'PRODUCT_TYPE_PAIPAI_SHOP_URL';
    const LIVE_VIDEO_ROOM = 'PRODUCT_TYPE_LIVE_VIDEO_ROOM';
    const QZONE_GIFT = 'PRODUCT_TYPE_QZONE_GIFT';
    const QZONE_SIGN = 'PRODUCT_TYPE_QZONE_SIGN';
    const APP_IOS = 'PRODUCT_TYPE_APP_IOS';
    const EXCHANGE_APP_FOR_MYAPP = 'PRODUCT_TYPE_EXCHANGE_APP_FOR_MYAPP';
    const QZONE_PAGE_ARTICLE = 'PRODUCT_TYPE_QZONE_PAGE_ARTICLE';
    const QZONE_PAGE_IFRAMED = 'PRODUCT_TYPE_QZONE_PAGE_IFRAMED';
    const WECHAT = 'PRODUCT_TYPE_WECHAT';
    const OPEN_PLATFORM_APP_MOB_TASK = 'PRODUCT_TYPE_OPEN_PLATFORM_APP_MOB_TASK';
    const LINK_JD = 'PRODUCT_TYPE_LINK_JD';
    const DIANPING_SHOP = 'PRODUCT_TYPE_DIANPING_SHOP';
    const DIANPING_COUPON = 'PRODUCT_TYPE_DIANPING_COUPON';
    const DIANPING_TUAN = 'PRODUCT_TYPE_DIANPING_TUAN';
    const WECHAT_ARTICLE = 'PRODUCT_TYPE_WECHAT_ARTICLE';
    const SHOP_WECHAT = 'PRODUCT_TYPE_SHOP_WECHAT';
    const ECOMMERCE = 'PRODUCT_TYPE_ECOMMERCE';
    const LINK_WECHAT = 'PRODUCT_TYPE_LINK_WECHAT';
    const JD_ITEM = 'PRODUCT_TYPE_JD_ITEM';
    const JD_SHOP = 'PRODUCT_TYPE_JD_SHOP';
    const TENCENT_KE = 'PRODUCT_TYPE_TENCENT_KE';
    const MYAPP_PROMOTION = 'PRODUCT_TYPE_MYAPP_PROMOTION';
    const LINK_MOBILE_QQ_MP = 'PRODUCT_TYPE_LINK_MOBILE_QQ_MP';
    const APP_ANDROID_UNION = 'PRODUCT_TYPE_APP_ANDROID_UNION';
    const LBS_WECHAT = 'PRODUCT_TYPE_LBS_WECHAT';
    const QZONE_PAGE_VIDEO = 'PRODUCT_TYPE_QZONE_PAGE_VIDEO';
    const LINK = 'PRODUCT_TYPE_LINK';
    const URL_INNER_TENCENT_DOMAIN = 'PRODUCT_TYPE_URL_INNER_TENCENT_DOMAIN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PAIPAI_ITEM,
            self::PAIPAI_SHOP,
            self::QZONE_PAGE_INDEX,
            self::APP_PC,
            self::MYAPP,
            self::QQ_GROUP,
            self::QQ_BUSINESS,
            self::B_QQ,
            self::_51_BUY,
            self::QQ_TUAN,
            self::TASK,
            self::APP_ANDROID_OPEN_PLATFORM,
            self::FEEDS,
            self::PAIPAI_SHOP_URL,
            self::LIVE_VIDEO_ROOM,
            self::QZONE_GIFT,
            self::QZONE_SIGN,
            self::APP_IOS,
            self::EXCHANGE_APP_FOR_MYAPP,
            self::QZONE_PAGE_ARTICLE,
            self::QZONE_PAGE_IFRAMED,
            self::WECHAT,
            self::OPEN_PLATFORM_APP_MOB_TASK,
            self::LINK_JD,
            self::DIANPING_SHOP,
            self::DIANPING_COUPON,
            self::DIANPING_TUAN,
            self::WECHAT_ARTICLE,
            self::SHOP_WECHAT,
            self::ECOMMERCE,
            self::LINK_WECHAT,
            self::JD_ITEM,
            self::JD_SHOP,
            self::TENCENT_KE,
            self::MYAPP_PROMOTION,
            self::LINK_MOBILE_QQ_MP,
            self::APP_ANDROID_UNION,
            self::LBS_WECHAT,
            self::QZONE_PAGE_VIDEO,
            self::LINK,
            self::URL_INNER_TENCENT_DOMAIN,
        ];
    }
}


