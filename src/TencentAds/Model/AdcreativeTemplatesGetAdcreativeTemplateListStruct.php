<?php
/**
 * AdcreativeTemplatesGetAdcreativeTemplateListStruct
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
 * AdcreativeTemplatesGetAdcreativeTemplateListStruct Class Doc Comment
 *
 * @category Class
 * @description 创意形式和投放权限数据结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdcreativeTemplatesGetAdcreativeTemplateListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdcreativeTemplatesGetAdcreativeTemplateListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adcreativeTemplateId' => 'int',
        'adcreativeTemplateName' => 'string',
        'adcreativeTemplateDescription' => 'string',
        'adcreativeTemplateSize' => 'string',
        'adcreativeTemplateStyle' => 'string',
        'adcreativeTemplateAppellation' => 'string',
        'siteSet' => '\TencentAds\Model\SiteSetDefinition',
        'promotedObjectType' => '\TencentAds\Model\PromotedObjectTypeWithoutJd',
        'adcreativeSampleImageList' => '\TencentAds\Model\AdcreativeSampleImage[]',
        'adAttributes' => '\TencentAds\Model\AdcreativeElement[]',
        'adcreativeAttributes' => '\TencentAds\Model\AdcreativeElement[]',
        'adcreativeElements' => '\TencentAds\Model\AdcreativeElement[]',
        'supportPageType' => 'string[]',
        'landingPageConfig' => '\TencentAds\Model\LandingPageConfig',
        'supportBillingSpecList' => '\TencentAds\Model\SupportBillingSpec[]',
        'supportDynamicAbilitySpecList' => '\TencentAds\Model\SupportDynamicAbilitySpecList',
        'supportBidModeList' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adcreativeTemplateId' => 'int64',
        'adcreativeTemplateName' => null,
        'adcreativeTemplateDescription' => null,
        'adcreativeTemplateSize' => null,
        'adcreativeTemplateStyle' => null,
        'adcreativeTemplateAppellation' => null,
        'siteSet' => null,
        'promotedObjectType' => null,
        'adcreativeSampleImageList' => null,
        'adAttributes' => null,
        'adcreativeAttributes' => null,
        'adcreativeElements' => null,
        'supportPageType' => null,
        'landingPageConfig' => null,
        'supportBillingSpecList' => null,
        'supportDynamicAbilitySpecList' => null,
        'supportBidModeList' => null
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
        'adcreativeTemplateId' => 'adcreative_template_id',
        'adcreativeTemplateName' => 'adcreative_template_name',
        'adcreativeTemplateDescription' => 'adcreative_template_description',
        'adcreativeTemplateSize' => 'adcreative_template_size',
        'adcreativeTemplateStyle' => 'adcreative_template_style',
        'adcreativeTemplateAppellation' => 'adcreative_template_appellation',
        'siteSet' => 'site_set',
        'promotedObjectType' => 'promoted_object_type',
        'adcreativeSampleImageList' => 'adcreative_sample_image_list',
        'adAttributes' => 'ad_attributes',
        'adcreativeAttributes' => 'adcreative_attributes',
        'adcreativeElements' => 'adcreative_elements',
        'supportPageType' => 'support_page_type',
        'landingPageConfig' => 'landing_page_config',
        'supportBillingSpecList' => 'support_billing_spec_list',
        'supportDynamicAbilitySpecList' => 'support_dynamic_ability_spec_list',
        'supportBidModeList' => 'support_bid_mode_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adcreativeTemplateId' => 'setAdcreativeTemplateId',
        'adcreativeTemplateName' => 'setAdcreativeTemplateName',
        'adcreativeTemplateDescription' => 'setAdcreativeTemplateDescription',
        'adcreativeTemplateSize' => 'setAdcreativeTemplateSize',
        'adcreativeTemplateStyle' => 'setAdcreativeTemplateStyle',
        'adcreativeTemplateAppellation' => 'setAdcreativeTemplateAppellation',
        'siteSet' => 'setSiteSet',
        'promotedObjectType' => 'setPromotedObjectType',
        'adcreativeSampleImageList' => 'setAdcreativeSampleImageList',
        'adAttributes' => 'setAdAttributes',
        'adcreativeAttributes' => 'setAdcreativeAttributes',
        'adcreativeElements' => 'setAdcreativeElements',
        'supportPageType' => 'setSupportPageType',
        'landingPageConfig' => 'setLandingPageConfig',
        'supportBillingSpecList' => 'setSupportBillingSpecList',
        'supportDynamicAbilitySpecList' => 'setSupportDynamicAbilitySpecList',
        'supportBidModeList' => 'setSupportBidModeList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adcreativeTemplateId' => 'getAdcreativeTemplateId',
        'adcreativeTemplateName' => 'getAdcreativeTemplateName',
        'adcreativeTemplateDescription' => 'getAdcreativeTemplateDescription',
        'adcreativeTemplateSize' => 'getAdcreativeTemplateSize',
        'adcreativeTemplateStyle' => 'getAdcreativeTemplateStyle',
        'adcreativeTemplateAppellation' => 'getAdcreativeTemplateAppellation',
        'siteSet' => 'getSiteSet',
        'promotedObjectType' => 'getPromotedObjectType',
        'adcreativeSampleImageList' => 'getAdcreativeSampleImageList',
        'adAttributes' => 'getAdAttributes',
        'adcreativeAttributes' => 'getAdcreativeAttributes',
        'adcreativeElements' => 'getAdcreativeElements',
        'supportPageType' => 'getSupportPageType',
        'landingPageConfig' => 'getLandingPageConfig',
        'supportBillingSpecList' => 'getSupportBillingSpecList',
        'supportDynamicAbilitySpecList' => 'getSupportDynamicAbilitySpecList',
        'supportBidModeList' => 'getSupportBidModeList'
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
        $this->container['adcreativeTemplateId'] = isset($data['adcreativeTemplateId']) ? $data['adcreativeTemplateId'] : null;
        $this->container['adcreativeTemplateName'] = isset($data['adcreativeTemplateName']) ? $data['adcreativeTemplateName'] : null;
        $this->container['adcreativeTemplateDescription'] = isset($data['adcreativeTemplateDescription']) ? $data['adcreativeTemplateDescription'] : null;
        $this->container['adcreativeTemplateSize'] = isset($data['adcreativeTemplateSize']) ? $data['adcreativeTemplateSize'] : null;
        $this->container['adcreativeTemplateStyle'] = isset($data['adcreativeTemplateStyle']) ? $data['adcreativeTemplateStyle'] : null;
        $this->container['adcreativeTemplateAppellation'] = isset($data['adcreativeTemplateAppellation']) ? $data['adcreativeTemplateAppellation'] : null;
        $this->container['siteSet'] = isset($data['siteSet']) ? $data['siteSet'] : null;
        $this->container['promotedObjectType'] = isset($data['promotedObjectType']) ? $data['promotedObjectType'] : null;
        $this->container['adcreativeSampleImageList'] = isset($data['adcreativeSampleImageList']) ? $data['adcreativeSampleImageList'] : null;
        $this->container['adAttributes'] = isset($data['adAttributes']) ? $data['adAttributes'] : null;
        $this->container['adcreativeAttributes'] = isset($data['adcreativeAttributes']) ? $data['adcreativeAttributes'] : null;
        $this->container['adcreativeElements'] = isset($data['adcreativeElements']) ? $data['adcreativeElements'] : null;
        $this->container['supportPageType'] = isset($data['supportPageType']) ? $data['supportPageType'] : null;
        $this->container['landingPageConfig'] = isset($data['landingPageConfig']) ? $data['landingPageConfig'] : null;
        $this->container['supportBillingSpecList'] = isset($data['supportBillingSpecList']) ? $data['supportBillingSpecList'] : null;
        $this->container['supportDynamicAbilitySpecList'] = isset($data['supportDynamicAbilitySpecList']) ? $data['supportDynamicAbilitySpecList'] : null;
        $this->container['supportBidModeList'] = isset($data['supportBidModeList']) ? $data['supportBidModeList'] : null;
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
     * Gets adcreativeTemplateId
     *
     * @return int|mixed
     */
    public function getAdcreativeTemplateId()
    {
        return $this->container['adcreativeTemplateId'];
    }

    /**
     * Sets adcreativeTemplateId
     *
     * @param int|mixed $adcreativeTemplateId adcreativeTemplateId
     *
     * @return $this
     */
    public function setAdcreativeTemplateId($adcreativeTemplateId)
    {
        $this->container['adcreativeTemplateId'] = $adcreativeTemplateId;

        return $this;
    }

    /**
     * Gets adcreativeTemplateName
     *
     * @return string|mixed
     */
    public function getAdcreativeTemplateName()
    {
        return $this->container['adcreativeTemplateName'];
    }

    /**
     * Sets adcreativeTemplateName
     *
     * @param string|mixed $adcreativeTemplateName adcreativeTemplateName
     *
     * @return $this
     */
    public function setAdcreativeTemplateName($adcreativeTemplateName)
    {
        $this->container['adcreativeTemplateName'] = $adcreativeTemplateName;

        return $this;
    }

    /**
     * Gets adcreativeTemplateDescription
     *
     * @return string|mixed
     */
    public function getAdcreativeTemplateDescription()
    {
        return $this->container['adcreativeTemplateDescription'];
    }

    /**
     * Sets adcreativeTemplateDescription
     *
     * @param string|mixed $adcreativeTemplateDescription adcreativeTemplateDescription
     *
     * @return $this
     */
    public function setAdcreativeTemplateDescription($adcreativeTemplateDescription)
    {
        $this->container['adcreativeTemplateDescription'] = $adcreativeTemplateDescription;

        return $this;
    }

    /**
     * Gets adcreativeTemplateSize
     *
     * @return string|mixed
     */
    public function getAdcreativeTemplateSize()
    {
        return $this->container['adcreativeTemplateSize'];
    }

    /**
     * Sets adcreativeTemplateSize
     *
     * @param string|mixed $adcreativeTemplateSize adcreativeTemplateSize
     *
     * @return $this
     */
    public function setAdcreativeTemplateSize($adcreativeTemplateSize)
    {
        $this->container['adcreativeTemplateSize'] = $adcreativeTemplateSize;

        return $this;
    }

    /**
     * Gets adcreativeTemplateStyle
     *
     * @return string|mixed
     */
    public function getAdcreativeTemplateStyle()
    {
        return $this->container['adcreativeTemplateStyle'];
    }

    /**
     * Sets adcreativeTemplateStyle
     *
     * @param string|mixed $adcreativeTemplateStyle adcreativeTemplateStyle
     *
     * @return $this
     */
    public function setAdcreativeTemplateStyle($adcreativeTemplateStyle)
    {
        $this->container['adcreativeTemplateStyle'] = $adcreativeTemplateStyle;

        return $this;
    }

    /**
     * Gets adcreativeTemplateAppellation
     *
     * @return string|mixed
     */
    public function getAdcreativeTemplateAppellation()
    {
        return $this->container['adcreativeTemplateAppellation'];
    }

    /**
     * Sets adcreativeTemplateAppellation
     *
     * @param string|mixed $adcreativeTemplateAppellation adcreativeTemplateAppellation
     *
     * @return $this
     */
    public function setAdcreativeTemplateAppellation($adcreativeTemplateAppellation)
    {
        $this->container['adcreativeTemplateAppellation'] = $adcreativeTemplateAppellation;

        return $this;
    }

    /**
     * Gets siteSet
     *
     * @return \TencentAds\Model\SiteSetDefinition|mixed
     */
    public function getSiteSet()
    {
        return $this->container['siteSet'];
    }

    /**
     * Sets siteSet
     *
     * @param \TencentAds\Model\SiteSetDefinition|mixed $siteSet siteSet
     *
     * @return $this
     */
    public function setSiteSet($siteSet)
    {
        $this->container['siteSet'] = $siteSet;

        return $this;
    }

    /**
     * Gets promotedObjectType
     *
     * @return \TencentAds\Model\PromotedObjectTypeWithoutJd|mixed
     */
    public function getPromotedObjectType()
    {
        return $this->container['promotedObjectType'];
    }

    /**
     * Sets promotedObjectType
     *
     * @param \TencentAds\Model\PromotedObjectTypeWithoutJd|mixed $promotedObjectType promotedObjectType
     *
     * @return $this
     */
    public function setPromotedObjectType($promotedObjectType)
    {
        $this->container['promotedObjectType'] = $promotedObjectType;

        return $this;
    }

    /**
     * Gets adcreativeSampleImageList
     *
     * @return \TencentAds\Model\AdcreativeSampleImage[]|mixed
     */
    public function getAdcreativeSampleImageList()
    {
        return $this->container['adcreativeSampleImageList'];
    }

    /**
     * Sets adcreativeSampleImageList
     *
     * @param \TencentAds\Model\AdcreativeSampleImage[]|mixed $adcreativeSampleImageList adcreativeSampleImageList
     *
     * @return $this
     */
    public function setAdcreativeSampleImageList($adcreativeSampleImageList)
    {
        $this->container['adcreativeSampleImageList'] = $adcreativeSampleImageList;

        return $this;
    }

    /**
     * Gets adAttributes
     *
     * @return \TencentAds\Model\AdcreativeElement[]|mixed
     */
    public function getAdAttributes()
    {
        return $this->container['adAttributes'];
    }

    /**
     * Sets adAttributes
     *
     * @param \TencentAds\Model\AdcreativeElement[]|mixed $adAttributes adAttributes
     *
     * @return $this
     */
    public function setAdAttributes($adAttributes)
    {
        $this->container['adAttributes'] = $adAttributes;

        return $this;
    }

    /**
     * Gets adcreativeAttributes
     *
     * @return \TencentAds\Model\AdcreativeElement[]|mixed
     */
    public function getAdcreativeAttributes()
    {
        return $this->container['adcreativeAttributes'];
    }

    /**
     * Sets adcreativeAttributes
     *
     * @param \TencentAds\Model\AdcreativeElement[]|mixed $adcreativeAttributes adcreativeAttributes
     *
     * @return $this
     */
    public function setAdcreativeAttributes($adcreativeAttributes)
    {
        $this->container['adcreativeAttributes'] = $adcreativeAttributes;

        return $this;
    }

    /**
     * Gets adcreativeElements
     *
     * @return \TencentAds\Model\AdcreativeElement[]|mixed
     */
    public function getAdcreativeElements()
    {
        return $this->container['adcreativeElements'];
    }

    /**
     * Sets adcreativeElements
     *
     * @param \TencentAds\Model\AdcreativeElement[]|mixed $adcreativeElements adcreativeElements
     *
     * @return $this
     */
    public function setAdcreativeElements($adcreativeElements)
    {
        $this->container['adcreativeElements'] = $adcreativeElements;

        return $this;
    }

    /**
     * Gets supportPageType
     *
     * @return string[]|mixed
     */
    public function getSupportPageType()
    {
        return $this->container['supportPageType'];
    }

    /**
     * Sets supportPageType
     *
     * @param string[]|mixed $supportPageType supportPageType
     *
     * @return $this
     */
    public function setSupportPageType($supportPageType)
    {
        $this->container['supportPageType'] = $supportPageType;

        return $this;
    }

    /**
     * Gets landingPageConfig
     *
     * @return \TencentAds\Model\LandingPageConfig|mixed
     */
    public function getLandingPageConfig()
    {
        return $this->container['landingPageConfig'];
    }

    /**
     * Sets landingPageConfig
     *
     * @param \TencentAds\Model\LandingPageConfig|mixed $landingPageConfig landingPageConfig
     *
     * @return $this
     */
    public function setLandingPageConfig($landingPageConfig)
    {
        $this->container['landingPageConfig'] = $landingPageConfig;

        return $this;
    }

    /**
     * Gets supportBillingSpecList
     *
     * @return \TencentAds\Model\SupportBillingSpec[]|mixed
     */
    public function getSupportBillingSpecList()
    {
        return $this->container['supportBillingSpecList'];
    }

    /**
     * Sets supportBillingSpecList
     *
     * @param \TencentAds\Model\SupportBillingSpec[]|mixed $supportBillingSpecList supportBillingSpecList
     *
     * @return $this
     */
    public function setSupportBillingSpecList($supportBillingSpecList)
    {
        $this->container['supportBillingSpecList'] = $supportBillingSpecList;

        return $this;
    }

    /**
     * Gets supportDynamicAbilitySpecList
     *
     * @return \TencentAds\Model\SupportDynamicAbilitySpecList|mixed
     */
    public function getSupportDynamicAbilitySpecList()
    {
        return $this->container['supportDynamicAbilitySpecList'];
    }

    /**
     * Sets supportDynamicAbilitySpecList
     *
     * @param \TencentAds\Model\SupportDynamicAbilitySpecList|mixed $supportDynamicAbilitySpecList supportDynamicAbilitySpecList
     *
     * @return $this
     */
    public function setSupportDynamicAbilitySpecList($supportDynamicAbilitySpecList)
    {
        $this->container['supportDynamicAbilitySpecList'] = $supportDynamicAbilitySpecList;

        return $this;
    }

    /**
     * Gets supportBidModeList
     *
     * @return string[]|mixed
     */
    public function getSupportBidModeList()
    {
        return $this->container['supportBidModeList'];
    }

    /**
     * Sets supportBidModeList
     *
     * @param string[]|mixed $supportBidModeList supportBidModeList
     *
     * @return $this
     */
    public function setSupportBidModeList($supportBidModeList)
    {
        $this->container['supportBidModeList'] = $supportBidModeList;

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


