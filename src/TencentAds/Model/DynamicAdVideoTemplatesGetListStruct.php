<?php
/**
 * DynamicAdVideoTemplatesGetListStruct
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
 * DynamicAdVideoTemplatesGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicAdVideoTemplatesGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DynamicAdVideoTemplatesGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'templateId' => 'int',
        'templateName' => 'string',
        'templateType' => '\TencentAds\Model\VideoTemplateType',
        'productCatalogId' => 'int',
        'adcreativeTemplateId' => 'int',
        'coverImageUrl' => 'string',
        'introVideoUrl' => 'string',
        'deliveryVideoUrl' => 'string',
        'subTemplateList' => '\TencentAds\Model\SubTemplateStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'templateId' => 'int64',
        'templateName' => null,
        'templateType' => null,
        'productCatalogId' => 'int64',
        'adcreativeTemplateId' => 'int64',
        'coverImageUrl' => null,
        'introVideoUrl' => null,
        'deliveryVideoUrl' => null,
        'subTemplateList' => null
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
        'templateId' => 'template_id',
        'templateName' => 'template_name',
        'templateType' => 'template_type',
        'productCatalogId' => 'product_catalog_id',
        'adcreativeTemplateId' => 'adcreative_template_id',
        'coverImageUrl' => 'cover_image_url',
        'introVideoUrl' => 'intro_video_url',
        'deliveryVideoUrl' => 'delivery_video_url',
        'subTemplateList' => 'sub_template_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'templateId' => 'setTemplateId',
        'templateName' => 'setTemplateName',
        'templateType' => 'setTemplateType',
        'productCatalogId' => 'setProductCatalogId',
        'adcreativeTemplateId' => 'setAdcreativeTemplateId',
        'coverImageUrl' => 'setCoverImageUrl',
        'introVideoUrl' => 'setIntroVideoUrl',
        'deliveryVideoUrl' => 'setDeliveryVideoUrl',
        'subTemplateList' => 'setSubTemplateList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'templateId' => 'getTemplateId',
        'templateName' => 'getTemplateName',
        'templateType' => 'getTemplateType',
        'productCatalogId' => 'getProductCatalogId',
        'adcreativeTemplateId' => 'getAdcreativeTemplateId',
        'coverImageUrl' => 'getCoverImageUrl',
        'introVideoUrl' => 'getIntroVideoUrl',
        'deliveryVideoUrl' => 'getDeliveryVideoUrl',
        'subTemplateList' => 'getSubTemplateList'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['productCatalogId'] = isset($data['productCatalogId']) ? $data['productCatalogId'] : null;
        $this->container['adcreativeTemplateId'] = isset($data['adcreativeTemplateId']) ? $data['adcreativeTemplateId'] : null;
        $this->container['coverImageUrl'] = isset($data['coverImageUrl']) ? $data['coverImageUrl'] : null;
        $this->container['introVideoUrl'] = isset($data['introVideoUrl']) ? $data['introVideoUrl'] : null;
        $this->container['deliveryVideoUrl'] = isset($data['deliveryVideoUrl']) ? $data['deliveryVideoUrl'] : null;
        $this->container['subTemplateList'] = isset($data['subTemplateList']) ? $data['subTemplateList'] : null;
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
     * Gets templateId
     *
     * @return int|mixed
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param int|mixed $templateId templateId
     *
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets templateName
     *
     * @return string|mixed
     */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
     * Sets templateName
     *
     * @param string|mixed $templateName templateName
     *
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;

        return $this;
    }

    /**
     * Gets templateType
     *
     * @return \TencentAds\Model\VideoTemplateType|mixed
     */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
     * Sets templateType
     *
     * @param \TencentAds\Model\VideoTemplateType|mixed $templateType templateType
     *
     * @return $this
     */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;

        return $this;
    }

    /**
     * Gets productCatalogId
     *
     * @return int|mixed
     */
    public function getProductCatalogId()
    {
        return $this->container['productCatalogId'];
    }

    /**
     * Sets productCatalogId
     *
     * @param int|mixed $productCatalogId productCatalogId
     *
     * @return $this
     */
    public function setProductCatalogId($productCatalogId)
    {
        $this->container['productCatalogId'] = $productCatalogId;

        return $this;
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
     * Gets coverImageUrl
     *
     * @return string|mixed
     */
    public function getCoverImageUrl()
    {
        return $this->container['coverImageUrl'];
    }

    /**
     * Sets coverImageUrl
     *
     * @param string|mixed $coverImageUrl coverImageUrl
     *
     * @return $this
     */
    public function setCoverImageUrl($coverImageUrl)
    {
        $this->container['coverImageUrl'] = $coverImageUrl;

        return $this;
    }

    /**
     * Gets introVideoUrl
     *
     * @return string|mixed
     */
    public function getIntroVideoUrl()
    {
        return $this->container['introVideoUrl'];
    }

    /**
     * Sets introVideoUrl
     *
     * @param string|mixed $introVideoUrl introVideoUrl
     *
     * @return $this
     */
    public function setIntroVideoUrl($introVideoUrl)
    {
        $this->container['introVideoUrl'] = $introVideoUrl;

        return $this;
    }

    /**
     * Gets deliveryVideoUrl
     *
     * @return string|mixed
     */
    public function getDeliveryVideoUrl()
    {
        return $this->container['deliveryVideoUrl'];
    }

    /**
     * Sets deliveryVideoUrl
     *
     * @param string|mixed $deliveryVideoUrl deliveryVideoUrl
     *
     * @return $this
     */
    public function setDeliveryVideoUrl($deliveryVideoUrl)
    {
        $this->container['deliveryVideoUrl'] = $deliveryVideoUrl;

        return $this;
    }

    /**
     * Gets subTemplateList
     *
     * @return \TencentAds\Model\SubTemplateStruct[]|mixed
     */
    public function getSubTemplateList()
    {
        return $this->container['subTemplateList'];
    }

    /**
     * Sets subTemplateList
     *
     * @param \TencentAds\Model\SubTemplateStruct[]|mixed $subTemplateList subTemplateList
     *
     * @return $this
     */
    public function setSubTemplateList($subTemplateList)
    {
        $this->container['subTemplateList'] = $subTemplateList;

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


