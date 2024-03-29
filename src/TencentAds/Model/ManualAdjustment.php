<?php
/**
 * ManualAdjustment
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
 * ManualAdjustment Class Doc Comment
 *
 * @category Class
 * @description 手工调整视频
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ManualAdjustment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'manual_adjustment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sizeAdjustment' => '\TencentAds\Model\SizeAdjustment',
        'lengthAdjustment' => '\TencentAds\Model\LengthAdjustment',
        'musicAdjustment' => '\TencentAds\Model\MusicAdjustment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sizeAdjustment' => null,
        'lengthAdjustment' => null,
        'musicAdjustment' => null
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
        'sizeAdjustment' => 'size_adjustment',
        'lengthAdjustment' => 'length_adjustment',
        'musicAdjustment' => 'music_adjustment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sizeAdjustment' => 'setSizeAdjustment',
        'lengthAdjustment' => 'setLengthAdjustment',
        'musicAdjustment' => 'setMusicAdjustment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sizeAdjustment' => 'getSizeAdjustment',
        'lengthAdjustment' => 'getLengthAdjustment',
        'musicAdjustment' => 'getMusicAdjustment'
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
        $this->container['sizeAdjustment'] = isset($data['sizeAdjustment']) ? $data['sizeAdjustment'] : null;
        $this->container['lengthAdjustment'] = isset($data['lengthAdjustment']) ? $data['lengthAdjustment'] : null;
        $this->container['musicAdjustment'] = isset($data['musicAdjustment']) ? $data['musicAdjustment'] : null;
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
     * Gets sizeAdjustment
     *
     * @return \TencentAds\Model\SizeAdjustment|mixed
     */
    public function getSizeAdjustment()
    {
        return $this->container['sizeAdjustment'];
    }

    /**
     * Sets sizeAdjustment
     *
     * @param \TencentAds\Model\SizeAdjustment|mixed $sizeAdjustment sizeAdjustment
     *
     * @return $this
     */
    public function setSizeAdjustment($sizeAdjustment)
    {
        $this->container['sizeAdjustment'] = $sizeAdjustment;

        return $this;
    }

    /**
     * Gets lengthAdjustment
     *
     * @return \TencentAds\Model\LengthAdjustment|mixed
     */
    public function getLengthAdjustment()
    {
        return $this->container['lengthAdjustment'];
    }

    /**
     * Sets lengthAdjustment
     *
     * @param \TencentAds\Model\LengthAdjustment|mixed $lengthAdjustment lengthAdjustment
     *
     * @return $this
     */
    public function setLengthAdjustment($lengthAdjustment)
    {
        $this->container['lengthAdjustment'] = $lengthAdjustment;

        return $this;
    }

    /**
     * Gets musicAdjustment
     *
     * @return \TencentAds\Model\MusicAdjustment|mixed
     */
    public function getMusicAdjustment()
    {
        return $this->container['musicAdjustment'];
    }

    /**
     * Sets musicAdjustment
     *
     * @param \TencentAds\Model\MusicAdjustment|mixed $musicAdjustment musicAdjustment
     *
     * @return $this
     */
    public function setMusicAdjustment($musicAdjustment)
    {
        $this->container['musicAdjustment'] = $musicAdjustment;

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


