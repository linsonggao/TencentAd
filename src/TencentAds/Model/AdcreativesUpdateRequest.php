<?php
/**
 * AdcreativesUpdateRequest
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

use \ArrayAccess;
use \ZzyLsg\TencentAds\ObjectSerializer;

/**
 * AdcreativesUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdcreativesUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdcreativesUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adcreativeId' => 'int',
        'adcreativeName' => 'string',
        'pageType' => '\TencentAds\Model\DestinationType',
        'pageSpec' => '\TencentAds\Model\PageSpec',
        'linkPageType' => '\TencentAds\Model\LinkPageType',
        'linkNameType' => '\TencentAds\Model\LinkUrlLinkNameType',
        'linkPageSpec' => '\TencentAds\Model\LinkPageSpec',
        'conversionDataType' => '\TencentAds\Model\ConversionDataType',
        'conversionTargetType' => '\TencentAds\Model\ConversionTargetType',
        'qqMiniGameTrackingQueryString' => 'string',
        'deepLinkUrl' => 'string',
        'androidDeepLinkAppId' => 'string',
        'iosDeepLinkAppId' => 'string',
        'universalLinkUrl' => 'string',
        'shareContentSpec' => '\TencentAds\Model\ShareContentSpec',
        'profileId' => 'int',
        'componentId' => 'int',
        'onlineEnabled' => 'bool',
        'revisedAdcreativeSpec' => '\TencentAds\Model\RevisedAdcreativeSpec',
        'unionMarketSwitch' => 'bool',
        'playablePageMaterialId' => 'string',
        'videoEndPage' => '\TencentAds\Model\VideoEndPageSpec',
        'feedsVideoCommentSwitch' => 'bool',
        'webviewUrl' => 'string',
        'simpleCanvasSubType' => '\TencentAds\Model\SimpleCanvasSubType',
        'floatingZone' => '\TencentAds\Model\FloatingZone',
        'marketingPendantImageId' => 'string',
        'countdownSwitch' => 'bool',
        'barrageList' => '\TencentAds\Model\BarrageListCreateStruct[]',
        'dynamicAdcreativeSpec' => '\TencentAds\Model\DynamicAdcreativeSpec',
        'appGiftPackCode' => '\TencentAds\Model\AppGiftPackCode',
        'industryLabel' => 'string',
        'unionMarketSpec' => '\TencentAds\Model\UnionMarketSpec',
        'androidQuickAppSpec' => '\TencentAds\Model\AndroidQuickAppSpec',
        'accountId' => 'int',
        'adcreativeElements' => '\TencentAds\Model\AdcreativeCreativeElementsMp'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adcreativeId' => 'int64',
        'adcreativeName' => null,
        'pageType' => null,
        'pageSpec' => null,
        'linkPageType' => null,
        'linkNameType' => null,
        'linkPageSpec' => null,
        'conversionDataType' => null,
        'conversionTargetType' => null,
        'qqMiniGameTrackingQueryString' => null,
        'deepLinkUrl' => null,
        'androidDeepLinkAppId' => null,
        'iosDeepLinkAppId' => null,
        'universalLinkUrl' => null,
        'shareContentSpec' => null,
        'profileId' => 'int64',
        'componentId' => 'int64',
        'onlineEnabled' => null,
        'revisedAdcreativeSpec' => null,
        'unionMarketSwitch' => null,
        'playablePageMaterialId' => null,
        'videoEndPage' => null,
        'feedsVideoCommentSwitch' => null,
        'webviewUrl' => null,
        'simpleCanvasSubType' => null,
        'floatingZone' => null,
        'marketingPendantImageId' => null,
        'countdownSwitch' => null,
        'barrageList' => null,
        'dynamicAdcreativeSpec' => null,
        'appGiftPackCode' => null,
        'industryLabel' => null,
        'unionMarketSpec' => null,
        'androidQuickAppSpec' => null,
        'accountId' => 'int64',
        'adcreativeElements' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'adcreativeId' => 'adcreative_id',
        'adcreativeName' => 'adcreative_name',
        'pageType' => 'page_type',
        'pageSpec' => 'page_spec',
        'linkPageType' => 'link_page_type',
        'linkNameType' => 'link_name_type',
        'linkPageSpec' => 'link_page_spec',
        'conversionDataType' => 'conversion_data_type',
        'conversionTargetType' => 'conversion_target_type',
        'qqMiniGameTrackingQueryString' => 'qq_mini_game_tracking_query_string',
        'deepLinkUrl' => 'deep_link_url',
        'androidDeepLinkAppId' => 'android_deep_link_app_id',
        'iosDeepLinkAppId' => 'ios_deep_link_app_id',
        'universalLinkUrl' => 'universal_link_url',
        'shareContentSpec' => 'share_content_spec',
        'profileId' => 'profile_id',
        'componentId' => 'component_id',
        'onlineEnabled' => 'online_enabled',
        'revisedAdcreativeSpec' => 'revised_adcreative_spec',
        'unionMarketSwitch' => 'union_market_switch',
        'playablePageMaterialId' => 'playable_page_material_id',
        'videoEndPage' => 'video_end_page',
        'feedsVideoCommentSwitch' => 'feeds_video_comment_switch',
        'webviewUrl' => 'webview_url',
        'simpleCanvasSubType' => 'simple_canvas_sub_type',
        'floatingZone' => 'floating_zone',
        'marketingPendantImageId' => 'marketing_pendant_image_id',
        'countdownSwitch' => 'countdown_switch',
        'barrageList' => 'barrage_list',
        'dynamicAdcreativeSpec' => 'dynamic_adcreative_spec',
        'appGiftPackCode' => 'app_gift_pack_code',
        'industryLabel' => 'industry_label',
        'unionMarketSpec' => 'union_market_spec',
        'androidQuickAppSpec' => 'android_quick_app_spec',
        'accountId' => 'account_id',
        'adcreativeElements' => 'adcreative_elements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adcreativeId' => 'setAdcreativeId',
        'adcreativeName' => 'setAdcreativeName',
        'pageType' => 'setPageType',
        'pageSpec' => 'setPageSpec',
        'linkPageType' => 'setLinkPageType',
        'linkNameType' => 'setLinkNameType',
        'linkPageSpec' => 'setLinkPageSpec',
        'conversionDataType' => 'setConversionDataType',
        'conversionTargetType' => 'setConversionTargetType',
        'qqMiniGameTrackingQueryString' => 'setQqMiniGameTrackingQueryString',
        'deepLinkUrl' => 'setDeepLinkUrl',
        'androidDeepLinkAppId' => 'setAndroidDeepLinkAppId',
        'iosDeepLinkAppId' => 'setIosDeepLinkAppId',
        'universalLinkUrl' => 'setUniversalLinkUrl',
        'shareContentSpec' => 'setShareContentSpec',
        'profileId' => 'setProfileId',
        'componentId' => 'setComponentId',
        'onlineEnabled' => 'setOnlineEnabled',
        'revisedAdcreativeSpec' => 'setRevisedAdcreativeSpec',
        'unionMarketSwitch' => 'setUnionMarketSwitch',
        'playablePageMaterialId' => 'setPlayablePageMaterialId',
        'videoEndPage' => 'setVideoEndPage',
        'feedsVideoCommentSwitch' => 'setFeedsVideoCommentSwitch',
        'webviewUrl' => 'setWebviewUrl',
        'simpleCanvasSubType' => 'setSimpleCanvasSubType',
        'floatingZone' => 'setFloatingZone',
        'marketingPendantImageId' => 'setMarketingPendantImageId',
        'countdownSwitch' => 'setCountdownSwitch',
        'barrageList' => 'setBarrageList',
        'dynamicAdcreativeSpec' => 'setDynamicAdcreativeSpec',
        'appGiftPackCode' => 'setAppGiftPackCode',
        'industryLabel' => 'setIndustryLabel',
        'unionMarketSpec' => 'setUnionMarketSpec',
        'androidQuickAppSpec' => 'setAndroidQuickAppSpec',
        'accountId' => 'setAccountId',
        'adcreativeElements' => 'setAdcreativeElements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adcreativeId' => 'getAdcreativeId',
        'adcreativeName' => 'getAdcreativeName',
        'pageType' => 'getPageType',
        'pageSpec' => 'getPageSpec',
        'linkPageType' => 'getLinkPageType',
        'linkNameType' => 'getLinkNameType',
        'linkPageSpec' => 'getLinkPageSpec',
        'conversionDataType' => 'getConversionDataType',
        'conversionTargetType' => 'getConversionTargetType',
        'qqMiniGameTrackingQueryString' => 'getQqMiniGameTrackingQueryString',
        'deepLinkUrl' => 'getDeepLinkUrl',
        'androidDeepLinkAppId' => 'getAndroidDeepLinkAppId',
        'iosDeepLinkAppId' => 'getIosDeepLinkAppId',
        'universalLinkUrl' => 'getUniversalLinkUrl',
        'shareContentSpec' => 'getShareContentSpec',
        'profileId' => 'getProfileId',
        'componentId' => 'getComponentId',
        'onlineEnabled' => 'getOnlineEnabled',
        'revisedAdcreativeSpec' => 'getRevisedAdcreativeSpec',
        'unionMarketSwitch' => 'getUnionMarketSwitch',
        'playablePageMaterialId' => 'getPlayablePageMaterialId',
        'videoEndPage' => 'getVideoEndPage',
        'feedsVideoCommentSwitch' => 'getFeedsVideoCommentSwitch',
        'webviewUrl' => 'getWebviewUrl',
        'simpleCanvasSubType' => 'getSimpleCanvasSubType',
        'floatingZone' => 'getFloatingZone',
        'marketingPendantImageId' => 'getMarketingPendantImageId',
        'countdownSwitch' => 'getCountdownSwitch',
        'barrageList' => 'getBarrageList',
        'dynamicAdcreativeSpec' => 'getDynamicAdcreativeSpec',
        'appGiftPackCode' => 'getAppGiftPackCode',
        'industryLabel' => 'getIndustryLabel',
        'unionMarketSpec' => 'getUnionMarketSpec',
        'androidQuickAppSpec' => 'getAndroidQuickAppSpec',
        'accountId' => 'getAccountId',
        'adcreativeElements' => 'getAdcreativeElements'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['adcreativeId'] = isset($data['adcreativeId']) ? $data['adcreativeId'] : null;
        $this->container['adcreativeName'] = isset($data['adcreativeName']) ? $data['adcreativeName'] : null;
        $this->container['pageType'] = isset($data['pageType']) ? $data['pageType'] : null;
        $this->container['pageSpec'] = isset($data['pageSpec']) ? $data['pageSpec'] : null;
        $this->container['linkPageType'] = isset($data['linkPageType']) ? $data['linkPageType'] : null;
        $this->container['linkNameType'] = isset($data['linkNameType']) ? $data['linkNameType'] : null;
        $this->container['linkPageSpec'] = isset($data['linkPageSpec']) ? $data['linkPageSpec'] : null;
        $this->container['conversionDataType'] = isset($data['conversionDataType']) ? $data['conversionDataType'] : null;
        $this->container['conversionTargetType'] = isset($data['conversionTargetType']) ? $data['conversionTargetType'] : null;
        $this->container['qqMiniGameTrackingQueryString'] = isset($data['qqMiniGameTrackingQueryString']) ? $data['qqMiniGameTrackingQueryString'] : null;
        $this->container['deepLinkUrl'] = isset($data['deepLinkUrl']) ? $data['deepLinkUrl'] : null;
        $this->container['androidDeepLinkAppId'] = isset($data['androidDeepLinkAppId']) ? $data['androidDeepLinkAppId'] : null;
        $this->container['iosDeepLinkAppId'] = isset($data['iosDeepLinkAppId']) ? $data['iosDeepLinkAppId'] : null;
        $this->container['universalLinkUrl'] = isset($data['universalLinkUrl']) ? $data['universalLinkUrl'] : null;
        $this->container['shareContentSpec'] = isset($data['shareContentSpec']) ? $data['shareContentSpec'] : null;
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['onlineEnabled'] = isset($data['onlineEnabled']) ? $data['onlineEnabled'] : null;
        $this->container['revisedAdcreativeSpec'] = isset($data['revisedAdcreativeSpec']) ? $data['revisedAdcreativeSpec'] : null;
        $this->container['unionMarketSwitch'] = isset($data['unionMarketSwitch']) ? $data['unionMarketSwitch'] : null;
        $this->container['playablePageMaterialId'] = isset($data['playablePageMaterialId']) ? $data['playablePageMaterialId'] : null;
        $this->container['videoEndPage'] = isset($data['videoEndPage']) ? $data['videoEndPage'] : null;
        $this->container['feedsVideoCommentSwitch'] = isset($data['feedsVideoCommentSwitch']) ? $data['feedsVideoCommentSwitch'] : null;
        $this->container['webviewUrl'] = isset($data['webviewUrl']) ? $data['webviewUrl'] : null;
        $this->container['simpleCanvasSubType'] = isset($data['simpleCanvasSubType']) ? $data['simpleCanvasSubType'] : null;
        $this->container['floatingZone'] = isset($data['floatingZone']) ? $data['floatingZone'] : null;
        $this->container['marketingPendantImageId'] = isset($data['marketingPendantImageId']) ? $data['marketingPendantImageId'] : null;
        $this->container['countdownSwitch'] = isset($data['countdownSwitch']) ? $data['countdownSwitch'] : null;
        $this->container['barrageList'] = isset($data['barrageList']) ? $data['barrageList'] : null;
        $this->container['dynamicAdcreativeSpec'] = isset($data['dynamicAdcreativeSpec']) ? $data['dynamicAdcreativeSpec'] : null;
        $this->container['appGiftPackCode'] = isset($data['appGiftPackCode']) ? $data['appGiftPackCode'] : null;
        $this->container['industryLabel'] = isset($data['industryLabel']) ? $data['industryLabel'] : null;
        $this->container['unionMarketSpec'] = isset($data['unionMarketSpec']) ? $data['unionMarketSpec'] : null;
        $this->container['androidQuickAppSpec'] = isset($data['androidQuickAppSpec']) ? $data['androidQuickAppSpec'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['adcreativeElements'] = isset($data['adcreativeElements']) ? $data['adcreativeElements'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets adcreativeId
     *
     * @return int|mixed
     */
    public function getAdcreativeId()
    {
        return $this->container['adcreativeId'];
    }

    /**
     * Sets adcreativeId
     *
     * @param int|mixed $adcreativeId adcreativeId
     *
     * @return $this
     */
    public function setAdcreativeId($adcreativeId)
    {
        $this->container['adcreativeId'] = $adcreativeId;

        return $this;
    }

    /**
     * Gets adcreativeName
     *
     * @return string|mixed
     */
    public function getAdcreativeName()
    {
        return $this->container['adcreativeName'];
    }

    /**
     * Sets adcreativeName
     *
     * @param string|mixed $adcreativeName adcreativeName
     *
     * @return $this
     */
    public function setAdcreativeName($adcreativeName)
    {
        $this->container['adcreativeName'] = $adcreativeName;

        return $this;
    }

    /**
     * Gets pageType
     *
     * @return \TencentAds\Model\DestinationType|mixed
     */
    public function getPageType()
    {
        return $this->container['pageType'];
    }

    /**
     * Sets pageType
     *
     * @param \TencentAds\Model\DestinationType|mixed $pageType pageType
     *
     * @return $this
     */
    public function setPageType($pageType)
    {
        $this->container['pageType'] = $pageType;

        return $this;
    }

    /**
     * Gets pageSpec
     *
     * @return \TencentAds\Model\PageSpec|mixed
     */
    public function getPageSpec()
    {
        return $this->container['pageSpec'];
    }

    /**
     * Sets pageSpec
     *
     * @param \TencentAds\Model\PageSpec|mixed $pageSpec pageSpec
     *
     * @return $this
     */
    public function setPageSpec($pageSpec)
    {
        $this->container['pageSpec'] = $pageSpec;

        return $this;
    }

    /**
     * Gets linkPageType
     *
     * @return \TencentAds\Model\LinkPageType|mixed
     */
    public function getLinkPageType()
    {
        return $this->container['linkPageType'];
    }

    /**
     * Sets linkPageType
     *
     * @param \TencentAds\Model\LinkPageType|mixed $linkPageType linkPageType
     *
     * @return $this
     */
    public function setLinkPageType($linkPageType)
    {
        $this->container['linkPageType'] = $linkPageType;

        return $this;
    }

    /**
     * Gets linkNameType
     *
     * @return \TencentAds\Model\LinkUrlLinkNameType|mixed
     */
    public function getLinkNameType()
    {
        return $this->container['linkNameType'];
    }

    /**
     * Sets linkNameType
     *
     * @param \TencentAds\Model\LinkUrlLinkNameType|mixed $linkNameType linkNameType
     *
     * @return $this
     */
    public function setLinkNameType($linkNameType)
    {
        $this->container['linkNameType'] = $linkNameType;

        return $this;
    }

    /**
     * Gets linkPageSpec
     *
     * @return \TencentAds\Model\LinkPageSpec|mixed
     */
    public function getLinkPageSpec()
    {
        return $this->container['linkPageSpec'];
    }

    /**
     * Sets linkPageSpec
     *
     * @param \TencentAds\Model\LinkPageSpec|mixed $linkPageSpec linkPageSpec
     *
     * @return $this
     */
    public function setLinkPageSpec($linkPageSpec)
    {
        $this->container['linkPageSpec'] = $linkPageSpec;

        return $this;
    }

    /**
     * Gets conversionDataType
     *
     * @return \TencentAds\Model\ConversionDataType|mixed
     */
    public function getConversionDataType()
    {
        return $this->container['conversionDataType'];
    }

    /**
     * Sets conversionDataType
     *
     * @param \TencentAds\Model\ConversionDataType|mixed $conversionDataType conversionDataType
     *
     * @return $this
     */
    public function setConversionDataType($conversionDataType)
    {
        $this->container['conversionDataType'] = $conversionDataType;

        return $this;
    }

    /**
     * Gets conversionTargetType
     *
     * @return \TencentAds\Model\ConversionTargetType|mixed
     */
    public function getConversionTargetType()
    {
        return $this->container['conversionTargetType'];
    }

    /**
     * Sets conversionTargetType
     *
     * @param \TencentAds\Model\ConversionTargetType|mixed $conversionTargetType conversionTargetType
     *
     * @return $this
     */
    public function setConversionTargetType($conversionTargetType)
    {
        $this->container['conversionTargetType'] = $conversionTargetType;

        return $this;
    }

    /**
     * Gets qqMiniGameTrackingQueryString
     *
     * @return string|mixed
     */
    public function getQqMiniGameTrackingQueryString()
    {
        return $this->container['qqMiniGameTrackingQueryString'];
    }

    /**
     * Sets qqMiniGameTrackingQueryString
     *
     * @param string|mixed $qqMiniGameTrackingQueryString qqMiniGameTrackingQueryString
     *
     * @return $this
     */
    public function setQqMiniGameTrackingQueryString($qqMiniGameTrackingQueryString)
    {
        $this->container['qqMiniGameTrackingQueryString'] = $qqMiniGameTrackingQueryString;

        return $this;
    }

    /**
     * Gets deepLinkUrl
     *
     * @return string|mixed
     */
    public function getDeepLinkUrl()
    {
        return $this->container['deepLinkUrl'];
    }

    /**
     * Sets deepLinkUrl
     *
     * @param string|mixed $deepLinkUrl deepLinkUrl
     *
     * @return $this
     */
    public function setDeepLinkUrl($deepLinkUrl)
    {
        $this->container['deepLinkUrl'] = $deepLinkUrl;

        return $this;
    }

    /**
     * Gets androidDeepLinkAppId
     *
     * @return string|mixed
     */
    public function getAndroidDeepLinkAppId()
    {
        return $this->container['androidDeepLinkAppId'];
    }

    /**
     * Sets androidDeepLinkAppId
     *
     * @param string|mixed $androidDeepLinkAppId androidDeepLinkAppId
     *
     * @return $this
     */
    public function setAndroidDeepLinkAppId($androidDeepLinkAppId)
    {
        $this->container['androidDeepLinkAppId'] = $androidDeepLinkAppId;

        return $this;
    }

    /**
     * Gets iosDeepLinkAppId
     *
     * @return string|mixed
     */
    public function getIosDeepLinkAppId()
    {
        return $this->container['iosDeepLinkAppId'];
    }

    /**
     * Sets iosDeepLinkAppId
     *
     * @param string|mixed $iosDeepLinkAppId iosDeepLinkAppId
     *
     * @return $this
     */
    public function setIosDeepLinkAppId($iosDeepLinkAppId)
    {
        $this->container['iosDeepLinkAppId'] = $iosDeepLinkAppId;

        return $this;
    }

    /**
     * Gets universalLinkUrl
     *
     * @return string|mixed
     */
    public function getUniversalLinkUrl()
    {
        return $this->container['universalLinkUrl'];
    }

    /**
     * Sets universalLinkUrl
     *
     * @param string|mixed $universalLinkUrl universalLinkUrl
     *
     * @return $this
     */
    public function setUniversalLinkUrl($universalLinkUrl)
    {
        $this->container['universalLinkUrl'] = $universalLinkUrl;

        return $this;
    }

    /**
     * Gets shareContentSpec
     *
     * @return \TencentAds\Model\ShareContentSpec|mixed
     */
    public function getShareContentSpec()
    {
        return $this->container['shareContentSpec'];
    }

    /**
     * Sets shareContentSpec
     *
     * @param \TencentAds\Model\ShareContentSpec|mixed $shareContentSpec shareContentSpec
     *
     * @return $this
     */
    public function setShareContentSpec($shareContentSpec)
    {
        $this->container['shareContentSpec'] = $shareContentSpec;

        return $this;
    }

    /**
     * Gets profileId
     *
     * @return int|mixed
     */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
     * Sets profileId
     *
     * @param int|mixed $profileId profileId
     *
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;

        return $this;
    }

    /**
     * Gets componentId
     *
     * @return int|mixed
     */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
     * Sets componentId
     *
     * @param int|mixed $componentId componentId
     *
     * @return $this
     */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;

        return $this;
    }

    /**
     * Gets onlineEnabled
     *
     * @return bool|mixed
     */
    public function getOnlineEnabled()
    {
        return $this->container['onlineEnabled'];
    }

    /**
     * Sets onlineEnabled
     *
     * @param bool|mixed $onlineEnabled onlineEnabled
     *
     * @return $this
     */
    public function setOnlineEnabled($onlineEnabled)
    {
        $this->container['onlineEnabled'] = $onlineEnabled;

        return $this;
    }

    /**
     * Gets revisedAdcreativeSpec
     *
     * @return \TencentAds\Model\RevisedAdcreativeSpec|mixed
     */
    public function getRevisedAdcreativeSpec()
    {
        return $this->container['revisedAdcreativeSpec'];
    }

    /**
     * Sets revisedAdcreativeSpec
     *
     * @param \TencentAds\Model\RevisedAdcreativeSpec|mixed $revisedAdcreativeSpec revisedAdcreativeSpec
     *
     * @return $this
     */
    public function setRevisedAdcreativeSpec($revisedAdcreativeSpec)
    {
        $this->container['revisedAdcreativeSpec'] = $revisedAdcreativeSpec;

        return $this;
    }

    /**
     * Gets unionMarketSwitch
     *
     * @return bool|mixed
     */
    public function getUnionMarketSwitch()
    {
        return $this->container['unionMarketSwitch'];
    }

    /**
     * Sets unionMarketSwitch
     *
     * @param bool|mixed $unionMarketSwitch unionMarketSwitch
     *
     * @return $this
     */
    public function setUnionMarketSwitch($unionMarketSwitch)
    {
        $this->container['unionMarketSwitch'] = $unionMarketSwitch;

        return $this;
    }

    /**
     * Gets playablePageMaterialId
     *
     * @return string|mixed
     */
    public function getPlayablePageMaterialId()
    {
        return $this->container['playablePageMaterialId'];
    }

    /**
     * Sets playablePageMaterialId
     *
     * @param string|mixed $playablePageMaterialId playablePageMaterialId
     *
     * @return $this
     */
    public function setPlayablePageMaterialId($playablePageMaterialId)
    {
        $this->container['playablePageMaterialId'] = $playablePageMaterialId;

        return $this;
    }

    /**
     * Gets videoEndPage
     *
     * @return \TencentAds\Model\VideoEndPageSpec|mixed
     */
    public function getVideoEndPage()
    {
        return $this->container['videoEndPage'];
    }

    /**
     * Sets videoEndPage
     *
     * @param \TencentAds\Model\VideoEndPageSpec|mixed $videoEndPage videoEndPage
     *
     * @return $this
     */
    public function setVideoEndPage($videoEndPage)
    {
        $this->container['videoEndPage'] = $videoEndPage;

        return $this;
    }

    /**
     * Gets feedsVideoCommentSwitch
     *
     * @return bool|mixed
     */
    public function getFeedsVideoCommentSwitch()
    {
        return $this->container['feedsVideoCommentSwitch'];
    }

    /**
     * Sets feedsVideoCommentSwitch
     *
     * @param bool|mixed $feedsVideoCommentSwitch feedsVideoCommentSwitch
     *
     * @return $this
     */
    public function setFeedsVideoCommentSwitch($feedsVideoCommentSwitch)
    {
        $this->container['feedsVideoCommentSwitch'] = $feedsVideoCommentSwitch;

        return $this;
    }

    /**
     * Gets webviewUrl
     *
     * @return string|mixed
     */
    public function getWebviewUrl()
    {
        return $this->container['webviewUrl'];
    }

    /**
     * Sets webviewUrl
     *
     * @param string|mixed $webviewUrl webviewUrl
     *
     * @return $this
     */
    public function setWebviewUrl($webviewUrl)
    {
        $this->container['webviewUrl'] = $webviewUrl;

        return $this;
    }

    /**
     * Gets simpleCanvasSubType
     *
     * @return \TencentAds\Model\SimpleCanvasSubType|mixed
     */
    public function getSimpleCanvasSubType()
    {
        return $this->container['simpleCanvasSubType'];
    }

    /**
     * Sets simpleCanvasSubType
     *
     * @param \TencentAds\Model\SimpleCanvasSubType|mixed $simpleCanvasSubType simpleCanvasSubType
     *
     * @return $this
     */
    public function setSimpleCanvasSubType($simpleCanvasSubType)
    {
        $this->container['simpleCanvasSubType'] = $simpleCanvasSubType;

        return $this;
    }

    /**
     * Gets floatingZone
     *
     * @return \TencentAds\Model\FloatingZone|mixed
     */
    public function getFloatingZone()
    {
        return $this->container['floatingZone'];
    }

    /**
     * Sets floatingZone
     *
     * @param \TencentAds\Model\FloatingZone|mixed $floatingZone floatingZone
     *
     * @return $this
     */
    public function setFloatingZone($floatingZone)
    {
        $this->container['floatingZone'] = $floatingZone;

        return $this;
    }

    /**
     * Gets marketingPendantImageId
     *
     * @return string|mixed
     */
    public function getMarketingPendantImageId()
    {
        return $this->container['marketingPendantImageId'];
    }

    /**
     * Sets marketingPendantImageId
     *
     * @param string|mixed $marketingPendantImageId marketingPendantImageId
     *
     * @return $this
     */
    public function setMarketingPendantImageId($marketingPendantImageId)
    {
        $this->container['marketingPendantImageId'] = $marketingPendantImageId;

        return $this;
    }

    /**
     * Gets countdownSwitch
     *
     * @return bool|mixed
     */
    public function getCountdownSwitch()
    {
        return $this->container['countdownSwitch'];
    }

    /**
     * Sets countdownSwitch
     *
     * @param bool|mixed $countdownSwitch countdownSwitch
     *
     * @return $this
     */
    public function setCountdownSwitch($countdownSwitch)
    {
        $this->container['countdownSwitch'] = $countdownSwitch;

        return $this;
    }

    /**
     * Gets barrageList
     *
     * @return \TencentAds\Model\BarrageListCreateStruct[]|mixed
     */
    public function getBarrageList()
    {
        return $this->container['barrageList'];
    }

    /**
     * Sets barrageList
     *
     * @param \TencentAds\Model\BarrageListCreateStruct[]|mixed $barrageList barrageList
     *
     * @return $this
     */
    public function setBarrageList($barrageList)
    {
        $this->container['barrageList'] = $barrageList;

        return $this;
    }

    /**
     * Gets dynamicAdcreativeSpec
     *
     * @return \TencentAds\Model\DynamicAdcreativeSpec|mixed
     */
    public function getDynamicAdcreativeSpec()
    {
        return $this->container['dynamicAdcreativeSpec'];
    }

    /**
     * Sets dynamicAdcreativeSpec
     *
     * @param \TencentAds\Model\DynamicAdcreativeSpec|mixed $dynamicAdcreativeSpec dynamicAdcreativeSpec
     *
     * @return $this
     */
    public function setDynamicAdcreativeSpec($dynamicAdcreativeSpec)
    {
        $this->container['dynamicAdcreativeSpec'] = $dynamicAdcreativeSpec;

        return $this;
    }

    /**
     * Gets appGiftPackCode
     *
     * @return \TencentAds\Model\AppGiftPackCode|mixed
     */
    public function getAppGiftPackCode()
    {
        return $this->container['appGiftPackCode'];
    }

    /**
     * Sets appGiftPackCode
     *
     * @param \TencentAds\Model\AppGiftPackCode|mixed $appGiftPackCode appGiftPackCode
     *
     * @return $this
     */
    public function setAppGiftPackCode($appGiftPackCode)
    {
        $this->container['appGiftPackCode'] = $appGiftPackCode;

        return $this;
    }

    /**
     * Gets industryLabel
     *
     * @return string|mixed
     */
    public function getIndustryLabel()
    {
        return $this->container['industryLabel'];
    }

    /**
     * Sets industryLabel
     *
     * @param string|mixed $industryLabel industryLabel
     *
     * @return $this
     */
    public function setIndustryLabel($industryLabel)
    {
        $this->container['industryLabel'] = $industryLabel;

        return $this;
    }

    /**
     * Gets unionMarketSpec
     *
     * @return \TencentAds\Model\UnionMarketSpec|mixed
     */
    public function getUnionMarketSpec()
    {
        return $this->container['unionMarketSpec'];
    }

    /**
     * Sets unionMarketSpec
     *
     * @param \TencentAds\Model\UnionMarketSpec|mixed $unionMarketSpec unionMarketSpec
     *
     * @return $this
     */
    public function setUnionMarketSpec($unionMarketSpec)
    {
        $this->container['unionMarketSpec'] = $unionMarketSpec;

        return $this;
    }

    /**
     * Gets androidQuickAppSpec
     *
     * @return \TencentAds\Model\AndroidQuickAppSpec|mixed
     */
    public function getAndroidQuickAppSpec()
    {
        return $this->container['androidQuickAppSpec'];
    }

    /**
     * Sets androidQuickAppSpec
     *
     * @param \TencentAds\Model\AndroidQuickAppSpec|mixed $androidQuickAppSpec androidQuickAppSpec
     *
     * @return $this
     */
    public function setAndroidQuickAppSpec($androidQuickAppSpec)
    {
        $this->container['androidQuickAppSpec'] = $androidQuickAppSpec;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return int|mixed
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int|mixed $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets adcreativeElements
     *
     * @return \TencentAds\Model\AdcreativeCreativeElementsMp|mixed
     */
    public function getAdcreativeElements()
    {
        return $this->container['adcreativeElements'];
    }

    /**
     * Sets adcreativeElements
     *
     * @param \TencentAds\Model\AdcreativeCreativeElementsMp|mixed $adcreativeElements adcreativeElements
     *
     * @return $this
     */
    public function setAdcreativeElements($adcreativeElements)
    {
        $this->container['adcreativeElements'] = $adcreativeElements;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


