<?php
/**
 * DynamicAdSpec
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
 * DynamicAdSpec Class Doc Comment
 *
 * @category Class
 * @description 动态商品广告属性
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DynamicAdSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'dynamic_ad_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'productCatalogId' => 'int',
        'productMode' => '\TencentAds\Model\AdNum',
        'productSource' => 'string',
        'productRecommendMethods' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'productCatalogId' => 'int64',
        'productMode' => null,
        'productSource' => null,
        'productRecommendMethods' => 'int64'
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
        'productCatalogId' => 'product_catalog_id',
        'productMode' => 'product_mode',
        'productSource' => 'product_source',
        'productRecommendMethods' => 'product_recommend_methods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productCatalogId' => 'setProductCatalogId',
        'productMode' => 'setProductMode',
        'productSource' => 'setProductSource',
        'productRecommendMethods' => 'setProductRecommendMethods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productCatalogId' => 'getProductCatalogId',
        'productMode' => 'getProductMode',
        'productSource' => 'getProductSource',
        'productRecommendMethods' => 'getProductRecommendMethods'
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
        $this->container['productCatalogId'] = isset($data['productCatalogId']) ? $data['productCatalogId'] : null;
        $this->container['productMode'] = isset($data['productMode']) ? $data['productMode'] : null;
        $this->container['productSource'] = isset($data['productSource']) ? $data['productSource'] : null;
        $this->container['productRecommendMethods'] = isset($data['productRecommendMethods']) ? $data['productRecommendMethods'] : null;
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
     * Gets productMode
     *
     * @return \TencentAds\Model\AdNum|mixed
     */
    public function getProductMode()
    {
        return $this->container['productMode'];
    }

    /**
     * Sets productMode
     *
     * @param \TencentAds\Model\AdNum|mixed $productMode productMode
     *
     * @return $this
     */
    public function setProductMode($productMode)
    {
        $this->container['productMode'] = $productMode;

        return $this;
    }

    /**
     * Gets productSource
     *
     * @return string|mixed
     */
    public function getProductSource()
    {
        return $this->container['productSource'];
    }

    /**
     * Sets productSource
     *
     * @param string|mixed $productSource productSource
     *
     * @return $this
     */
    public function setProductSource($productSource)
    {
        $this->container['productSource'] = $productSource;

        return $this;
    }

    /**
     * Gets productRecommendMethods
     *
     * @return int[]|mixed
     */
    public function getProductRecommendMethods()
    {
        return $this->container['productRecommendMethods'];
    }

    /**
     * Sets productRecommendMethods
     *
     * @param int[]|mixed $productRecommendMethods productRecommendMethods
     *
     * @return $this
     */
    public function setProductRecommendMethods($productRecommendMethods)
    {
        $this->container['productRecommendMethods'] = $productRecommendMethods;

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


