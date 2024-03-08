<?php
/**
 * RejectInfoLocation
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
 * RejectInfoLocation Class Doc Comment
 *
 * @category Class
 * @description 标注位置信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RejectInfoLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'reject_info_location';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'x' => 'int',
        'y' => 'int',
        'width' => 'int',
        'height' => 'int',
        'timeSecond' => 'double',
        'locationImgUrl' => 'string',
        'imgUrl' => 'string',
        'relatedImgUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'x' => 'int64',
        'y' => 'int64',
        'width' => 'int64',
        'height' => 'int64',
        'timeSecond' => 'double',
        'locationImgUrl' => null,
        'imgUrl' => null,
        'relatedImgUrl' => null
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
        'x' => 'x',
        'y' => 'y',
        'width' => 'width',
        'height' => 'height',
        'timeSecond' => 'time_second',
        'locationImgUrl' => 'location_img_url',
        'imgUrl' => 'img_url',
        'relatedImgUrl' => 'related_img_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'x' => 'setX',
        'y' => 'setY',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'timeSecond' => 'setTimeSecond',
        'locationImgUrl' => 'setLocationImgUrl',
        'imgUrl' => 'setImgUrl',
        'relatedImgUrl' => 'setRelatedImgUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'x' => 'getX',
        'y' => 'getY',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'timeSecond' => 'getTimeSecond',
        'locationImgUrl' => 'getLocationImgUrl',
        'imgUrl' => 'getImgUrl',
        'relatedImgUrl' => 'getRelatedImgUrl'
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
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['timeSecond'] = isset($data['timeSecond']) ? $data['timeSecond'] : null;
        $this->container['locationImgUrl'] = isset($data['locationImgUrl']) ? $data['locationImgUrl'] : null;
        $this->container['imgUrl'] = isset($data['imgUrl']) ? $data['imgUrl'] : null;
        $this->container['relatedImgUrl'] = isset($data['relatedImgUrl']) ? $data['relatedImgUrl'] : null;
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
     * Gets x
     *
     * @return int|mixed
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param int|mixed $x x
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets y
     *
     * @return int|mixed
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param int|mixed $y y
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|mixed
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|mixed $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|mixed
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|mixed $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets timeSecond
     *
     * @return double|mixed
     */
    public function getTimeSecond()
    {
        return $this->container['timeSecond'];
    }

    /**
     * Sets timeSecond
     *
     * @param double|mixed $timeSecond timeSecond
     *
     * @return $this
     */
    public function setTimeSecond($timeSecond)
    {
        $this->container['timeSecond'] = $timeSecond;

        return $this;
    }

    /**
     * Gets locationImgUrl
     *
     * @return string|mixed
     */
    public function getLocationImgUrl()
    {
        return $this->container['locationImgUrl'];
    }

    /**
     * Sets locationImgUrl
     *
     * @param string|mixed $locationImgUrl locationImgUrl
     *
     * @return $this
     */
    public function setLocationImgUrl($locationImgUrl)
    {
        $this->container['locationImgUrl'] = $locationImgUrl;

        return $this;
    }

    /**
     * Gets imgUrl
     *
     * @return string|mixed
     */
    public function getImgUrl()
    {
        return $this->container['imgUrl'];
    }

    /**
     * Sets imgUrl
     *
     * @param string|mixed $imgUrl imgUrl
     *
     * @return $this
     */
    public function setImgUrl($imgUrl)
    {
        $this->container['imgUrl'] = $imgUrl;

        return $this;
    }

    /**
     * Gets relatedImgUrl
     *
     * @return string|mixed
     */
    public function getRelatedImgUrl()
    {
        return $this->container['relatedImgUrl'];
    }

    /**
     * Sets relatedImgUrl
     *
     * @param string|mixed $relatedImgUrl relatedImgUrl
     *
     * @return $this
     */
    public function setRelatedImgUrl($relatedImgUrl)
    {
        $this->container['relatedImgUrl'] = $relatedImgUrl;

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


