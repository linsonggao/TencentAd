<?php
/**
 * PropertyDetail
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
 * PropertyDetail Class Doc Comment
 *
 * @category Class
 * @description 能力项详情
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'property_detail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'stringDetail' => '\TencentAds\Model\TextRestriction',
        'integerDetail' => '\TencentAds\Model\NumberRestriction',
        'enumDetail' => '\TencentAds\Model\AdcreativeElementEnumProperty',
        'structDetail' => '\TencentAds\Model\StructDetail',
        'arrayRestriction' => '\TencentAds\Model\AdcreativeElementArrayProperty'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'stringDetail' => null,
        'integerDetail' => null,
        'enumDetail' => null,
        'structDetail' => null,
        'arrayRestriction' => null
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
        'stringDetail' => 'string_detail',
        'integerDetail' => 'integer_detail',
        'enumDetail' => 'enum_detail',
        'structDetail' => 'struct_detail',
        'arrayRestriction' => 'array_restriction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stringDetail' => 'setStringDetail',
        'integerDetail' => 'setIntegerDetail',
        'enumDetail' => 'setEnumDetail',
        'structDetail' => 'setStructDetail',
        'arrayRestriction' => 'setArrayRestriction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stringDetail' => 'getStringDetail',
        'integerDetail' => 'getIntegerDetail',
        'enumDetail' => 'getEnumDetail',
        'structDetail' => 'getStructDetail',
        'arrayRestriction' => 'getArrayRestriction'
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
        $this->container['stringDetail'] = isset($data['stringDetail']) ? $data['stringDetail'] : null;
        $this->container['integerDetail'] = isset($data['integerDetail']) ? $data['integerDetail'] : null;
        $this->container['enumDetail'] = isset($data['enumDetail']) ? $data['enumDetail'] : null;
        $this->container['structDetail'] = isset($data['structDetail']) ? $data['structDetail'] : null;
        $this->container['arrayRestriction'] = isset($data['arrayRestriction']) ? $data['arrayRestriction'] : null;
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
     * Gets stringDetail
     *
     * @return \TencentAds\Model\TextRestriction|mixed
     */
    public function getStringDetail()
    {
        return $this->container['stringDetail'];
    }

    /**
     * Sets stringDetail
     *
     * @param \TencentAds\Model\TextRestriction|mixed $stringDetail stringDetail
     *
     * @return $this
     */
    public function setStringDetail($stringDetail)
    {
        $this->container['stringDetail'] = $stringDetail;

        return $this;
    }

    /**
     * Gets integerDetail
     *
     * @return \TencentAds\Model\NumberRestriction|mixed
     */
    public function getIntegerDetail()
    {
        return $this->container['integerDetail'];
    }

    /**
     * Sets integerDetail
     *
     * @param \TencentAds\Model\NumberRestriction|mixed $integerDetail integerDetail
     *
     * @return $this
     */
    public function setIntegerDetail($integerDetail)
    {
        $this->container['integerDetail'] = $integerDetail;

        return $this;
    }

    /**
     * Gets enumDetail
     *
     * @return \TencentAds\Model\AdcreativeElementEnumProperty|mixed
     */
    public function getEnumDetail()
    {
        return $this->container['enumDetail'];
    }

    /**
     * Sets enumDetail
     *
     * @param \TencentAds\Model\AdcreativeElementEnumProperty|mixed $enumDetail enumDetail
     *
     * @return $this
     */
    public function setEnumDetail($enumDetail)
    {
        $this->container['enumDetail'] = $enumDetail;

        return $this;
    }

    /**
     * Gets structDetail
     *
     * @return \TencentAds\Model\StructDetail|mixed
     */
    public function getStructDetail()
    {
        return $this->container['structDetail'];
    }

    /**
     * Sets structDetail
     *
     * @param \TencentAds\Model\StructDetail|mixed $structDetail structDetail
     *
     * @return $this
     */
    public function setStructDetail($structDetail)
    {
        $this->container['structDetail'] = $structDetail;

        return $this;
    }

    /**
     * Gets arrayRestriction
     *
     * @return \TencentAds\Model\AdcreativeElementArrayProperty|mixed
     */
    public function getArrayRestriction()
    {
        return $this->container['arrayRestriction'];
    }

    /**
     * Sets arrayRestriction
     *
     * @param \TencentAds\Model\AdcreativeElementArrayProperty|mixed $arrayRestriction arrayRestriction
     *
     * @return $this
     */
    public function setArrayRestriction($arrayRestriction)
    {
        $this->container['arrayRestriction'] = $arrayRestriction;

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


