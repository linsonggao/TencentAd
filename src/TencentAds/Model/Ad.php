<?php
/**
 * Ad
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
 * Ad Class Doc Comment
 *
 * @category Class
 * @description 广告信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Ad implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ad';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adName' => 'string',
        'adcreative' => '\TencentAds\Model\PreviewAdcreative',
        'feedsInteractionEnabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adName' => null,
        'adcreative' => null,
        'feedsInteractionEnabled' => null
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
        'adName' => 'ad_name',
        'adcreative' => 'adcreative',
        'feedsInteractionEnabled' => 'feeds_interaction_enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adName' => 'setAdName',
        'adcreative' => 'setAdcreative',
        'feedsInteractionEnabled' => 'setFeedsInteractionEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adName' => 'getAdName',
        'adcreative' => 'getAdcreative',
        'feedsInteractionEnabled' => 'getFeedsInteractionEnabled'
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
        $this->container['adName'] = isset($data['adName']) ? $data['adName'] : null;
        $this->container['adcreative'] = isset($data['adcreative']) ? $data['adcreative'] : null;
        $this->container['feedsInteractionEnabled'] = isset($data['feedsInteractionEnabled']) ? $data['feedsInteractionEnabled'] : null;
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
     * Gets adName
     *
     * @return string|mixed
     */
    public function getAdName()
    {
        return $this->container['adName'];
    }

    /**
     * Sets adName
     *
     * @param string|mixed $adName adName
     *
     * @return $this
     */
    public function setAdName($adName)
    {
        $this->container['adName'] = $adName;

        return $this;
    }

    /**
     * Gets adcreative
     *
     * @return \TencentAds\Model\PreviewAdcreative|mixed
     */
    public function getAdcreative()
    {
        return $this->container['adcreative'];
    }

    /**
     * Sets adcreative
     *
     * @param \TencentAds\Model\PreviewAdcreative|mixed $adcreative adcreative
     *
     * @return $this
     */
    public function setAdcreative($adcreative)
    {
        $this->container['adcreative'] = $adcreative;

        return $this;
    }

    /**
     * Gets feedsInteractionEnabled
     *
     * @return bool|mixed
     */
    public function getFeedsInteractionEnabled()
    {
        return $this->container['feedsInteractionEnabled'];
    }

    /**
     * Sets feedsInteractionEnabled
     *
     * @param bool|mixed $feedsInteractionEnabled feedsInteractionEnabled
     *
     * @return $this
     */
    public function setFeedsInteractionEnabled($feedsInteractionEnabled)
    {
        $this->container['feedsInteractionEnabled'] = $feedsInteractionEnabled;

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


