<?php
/**
 * DynamicAdTemplatesGetListStruct
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
 * DynamicAdTemplatesGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicAdTemplatesGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DynamicAdTemplatesGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dynamicAdTemplateId' => 'int',
        'dynamicAdTemplateName' => 'string',
        'dynamicAdTemplateType' => '\TencentAds\Model\DynamicAdTemplateType',
        'productItemDisplayQuantity' => '\TencentAds\Model\AdNum',
        'dynamicAdTemplateWidth' => 'int',
        'dynamicAdTemplateHeight' => 'int',
        'imageUrl' => 'string',
        'videoUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dynamicAdTemplateId' => 'int64',
        'dynamicAdTemplateName' => null,
        'dynamicAdTemplateType' => null,
        'productItemDisplayQuantity' => null,
        'dynamicAdTemplateWidth' => 'int64',
        'dynamicAdTemplateHeight' => 'int64',
        'imageUrl' => null,
        'videoUrl' => null
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
        'dynamicAdTemplateId' => 'dynamic_ad_template_id',
        'dynamicAdTemplateName' => 'dynamic_ad_template_name',
        'dynamicAdTemplateType' => 'dynamic_ad_template_type',
        'productItemDisplayQuantity' => 'product_item_display_quantity',
        'dynamicAdTemplateWidth' => 'dynamic_ad_template_width',
        'dynamicAdTemplateHeight' => 'dynamic_ad_template_height',
        'imageUrl' => 'image_url',
        'videoUrl' => 'video_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dynamicAdTemplateId' => 'setDynamicAdTemplateId',
        'dynamicAdTemplateName' => 'setDynamicAdTemplateName',
        'dynamicAdTemplateType' => 'setDynamicAdTemplateType',
        'productItemDisplayQuantity' => 'setProductItemDisplayQuantity',
        'dynamicAdTemplateWidth' => 'setDynamicAdTemplateWidth',
        'dynamicAdTemplateHeight' => 'setDynamicAdTemplateHeight',
        'imageUrl' => 'setImageUrl',
        'videoUrl' => 'setVideoUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dynamicAdTemplateId' => 'getDynamicAdTemplateId',
        'dynamicAdTemplateName' => 'getDynamicAdTemplateName',
        'dynamicAdTemplateType' => 'getDynamicAdTemplateType',
        'productItemDisplayQuantity' => 'getProductItemDisplayQuantity',
        'dynamicAdTemplateWidth' => 'getDynamicAdTemplateWidth',
        'dynamicAdTemplateHeight' => 'getDynamicAdTemplateHeight',
        'imageUrl' => 'getImageUrl',
        'videoUrl' => 'getVideoUrl'
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
        $this->container['dynamicAdTemplateId'] = isset($data['dynamicAdTemplateId']) ? $data['dynamicAdTemplateId'] : null;
        $this->container['dynamicAdTemplateName'] = isset($data['dynamicAdTemplateName']) ? $data['dynamicAdTemplateName'] : null;
        $this->container['dynamicAdTemplateType'] = isset($data['dynamicAdTemplateType']) ? $data['dynamicAdTemplateType'] : null;
        $this->container['productItemDisplayQuantity'] = isset($data['productItemDisplayQuantity']) ? $data['productItemDisplayQuantity'] : null;
        $this->container['dynamicAdTemplateWidth'] = isset($data['dynamicAdTemplateWidth']) ? $data['dynamicAdTemplateWidth'] : null;
        $this->container['dynamicAdTemplateHeight'] = isset($data['dynamicAdTemplateHeight']) ? $data['dynamicAdTemplateHeight'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['videoUrl'] = isset($data['videoUrl']) ? $data['videoUrl'] : null;
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
     * Gets dynamicAdTemplateId
     *
     * @return int|mixed
     */
    public function getDynamicAdTemplateId()
    {
        return $this->container['dynamicAdTemplateId'];
    }

    /**
     * Sets dynamicAdTemplateId
     *
     * @param int|mixed $dynamicAdTemplateId dynamicAdTemplateId
     *
     * @return $this
     */
    public function setDynamicAdTemplateId($dynamicAdTemplateId)
    {
        $this->container['dynamicAdTemplateId'] = $dynamicAdTemplateId;

        return $this;
    }

    /**
     * Gets dynamicAdTemplateName
     *
     * @return string|mixed
     */
    public function getDynamicAdTemplateName()
    {
        return $this->container['dynamicAdTemplateName'];
    }

    /**
     * Sets dynamicAdTemplateName
     *
     * @param string|mixed $dynamicAdTemplateName dynamicAdTemplateName
     *
     * @return $this
     */
    public function setDynamicAdTemplateName($dynamicAdTemplateName)
    {
        $this->container['dynamicAdTemplateName'] = $dynamicAdTemplateName;

        return $this;
    }

    /**
     * Gets dynamicAdTemplateType
     *
     * @return \TencentAds\Model\DynamicAdTemplateType|mixed
     */
    public function getDynamicAdTemplateType()
    {
        return $this->container['dynamicAdTemplateType'];
    }

    /**
     * Sets dynamicAdTemplateType
     *
     * @param \TencentAds\Model\DynamicAdTemplateType|mixed $dynamicAdTemplateType dynamicAdTemplateType
     *
     * @return $this
     */
    public function setDynamicAdTemplateType($dynamicAdTemplateType)
    {
        $this->container['dynamicAdTemplateType'] = $dynamicAdTemplateType;

        return $this;
    }

    /**
     * Gets productItemDisplayQuantity
     *
     * @return \TencentAds\Model\AdNum|mixed
     */
    public function getProductItemDisplayQuantity()
    {
        return $this->container['productItemDisplayQuantity'];
    }

    /**
     * Sets productItemDisplayQuantity
     *
     * @param \TencentAds\Model\AdNum|mixed $productItemDisplayQuantity productItemDisplayQuantity
     *
     * @return $this
     */
    public function setProductItemDisplayQuantity($productItemDisplayQuantity)
    {
        $this->container['productItemDisplayQuantity'] = $productItemDisplayQuantity;

        return $this;
    }

    /**
     * Gets dynamicAdTemplateWidth
     *
     * @return int|mixed
     */
    public function getDynamicAdTemplateWidth()
    {
        return $this->container['dynamicAdTemplateWidth'];
    }

    /**
     * Sets dynamicAdTemplateWidth
     *
     * @param int|mixed $dynamicAdTemplateWidth dynamicAdTemplateWidth
     *
     * @return $this
     */
    public function setDynamicAdTemplateWidth($dynamicAdTemplateWidth)
    {
        $this->container['dynamicAdTemplateWidth'] = $dynamicAdTemplateWidth;

        return $this;
    }

    /**
     * Gets dynamicAdTemplateHeight
     *
     * @return int|mixed
     */
    public function getDynamicAdTemplateHeight()
    {
        return $this->container['dynamicAdTemplateHeight'];
    }

    /**
     * Sets dynamicAdTemplateHeight
     *
     * @param int|mixed $dynamicAdTemplateHeight dynamicAdTemplateHeight
     *
     * @return $this
     */
    public function setDynamicAdTemplateHeight($dynamicAdTemplateHeight)
    {
        $this->container['dynamicAdTemplateHeight'] = $dynamicAdTemplateHeight;

        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string|mixed
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string|mixed $imageUrl imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;

        return $this;
    }

    /**
     * Gets videoUrl
     *
     * @return string|mixed
     */
    public function getVideoUrl()
    {
        return $this->container['videoUrl'];
    }

    /**
     * Sets videoUrl
     *
     * @param string|mixed $videoUrl videoUrl
     *
     * @return $this
     */
    public function setVideoUrl($videoUrl)
    {
        $this->container['videoUrl'] = $videoUrl;

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

