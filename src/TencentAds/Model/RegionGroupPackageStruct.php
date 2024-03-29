<?php
/**
 * RegionGroupPackageStruct
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
 * RegionGroupPackageStruct Class Doc Comment
 *
 * @category Class
 * @description 分城市出价
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RegionGroupPackageStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'region_group_package_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'regionList' => 'int[]',
        'bidCoefficient' => 'double',
        'deepBidCoefficient' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'regionList' => 'int64',
        'bidCoefficient' => 'double',
        'deepBidCoefficient' => 'double'
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
        'regionList' => 'region_list',
        'bidCoefficient' => 'bid_coefficient',
        'deepBidCoefficient' => 'deep_bid_coefficient'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'regionList' => 'setRegionList',
        'bidCoefficient' => 'setBidCoefficient',
        'deepBidCoefficient' => 'setDeepBidCoefficient'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'regionList' => 'getRegionList',
        'bidCoefficient' => 'getBidCoefficient',
        'deepBidCoefficient' => 'getDeepBidCoefficient'
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
        $this->container['regionList'] = isset($data['regionList']) ? $data['regionList'] : null;
        $this->container['bidCoefficient'] = isset($data['bidCoefficient']) ? $data['bidCoefficient'] : null;
        $this->container['deepBidCoefficient'] = isset($data['deepBidCoefficient']) ? $data['deepBidCoefficient'] : null;
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
     * Gets regionList
     *
     * @return int[]|mixed
     */
    public function getRegionList()
    {
        return $this->container['regionList'];
    }

    /**
     * Sets regionList
     *
     * @param int[]|mixed $regionList regionList
     *
     * @return $this
     */
    public function setRegionList($regionList)
    {
        $this->container['regionList'] = $regionList;

        return $this;
    }

    /**
     * Gets bidCoefficient
     *
     * @return double|mixed
     */
    public function getBidCoefficient()
    {
        return $this->container['bidCoefficient'];
    }

    /**
     * Sets bidCoefficient
     *
     * @param double|mixed $bidCoefficient bidCoefficient
     *
     * @return $this
     */
    public function setBidCoefficient($bidCoefficient)
    {
        $this->container['bidCoefficient'] = $bidCoefficient;

        return $this;
    }

    /**
     * Gets deepBidCoefficient
     *
     * @return double|mixed
     */
    public function getDeepBidCoefficient()
    {
        return $this->container['deepBidCoefficient'];
    }

    /**
     * Sets deepBidCoefficient
     *
     * @param double|mixed $deepBidCoefficient deepBidCoefficient
     *
     * @return $this
     */
    public function setDeepBidCoefficient($deepBidCoefficient)
    {
        $this->container['deepBidCoefficient'] = $deepBidCoefficient;

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


