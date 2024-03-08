<?php
/**
 * CanvasAppDownloadSpecType
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
 * CanvasAppDownloadSpecType Class Doc Comment
 *
 * @category Class
 * @description 应用下载组件元素
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CanvasAppDownloadSpecType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'canvas_app_download_spec_type';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'fontColor' => 'string',
        'bgColor' => 'string',
        'paddingTop' => 'int',
        'paddingBottom' => 'int',
        'appIosSpec' => '\TencentAds\Model\CanvasAppIosSpecType',
        'appAndroidSpec' => '\TencentAds\Model\CanvasAppAndroidSpecType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
        'fontColor' => null,
        'bgColor' => null,
        'paddingTop' => 'int64',
        'paddingBottom' => 'int64',
        'appIosSpec' => null,
        'appAndroidSpec' => null
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
        'title' => 'title',
        'fontColor' => 'font_color',
        'bgColor' => 'bg_color',
        'paddingTop' => 'padding_top',
        'paddingBottom' => 'padding_bottom',
        'appIosSpec' => 'app_ios_spec',
        'appAndroidSpec' => 'app_android_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'fontColor' => 'setFontColor',
        'bgColor' => 'setBgColor',
        'paddingTop' => 'setPaddingTop',
        'paddingBottom' => 'setPaddingBottom',
        'appIosSpec' => 'setAppIosSpec',
        'appAndroidSpec' => 'setAppAndroidSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'fontColor' => 'getFontColor',
        'bgColor' => 'getBgColor',
        'paddingTop' => 'getPaddingTop',
        'paddingBottom' => 'getPaddingBottom',
        'appIosSpec' => 'getAppIosSpec',
        'appAndroidSpec' => 'getAppAndroidSpec'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['fontColor'] = isset($data['fontColor']) ? $data['fontColor'] : null;
        $this->container['bgColor'] = isset($data['bgColor']) ? $data['bgColor'] : null;
        $this->container['paddingTop'] = isset($data['paddingTop']) ? $data['paddingTop'] : null;
        $this->container['paddingBottom'] = isset($data['paddingBottom']) ? $data['paddingBottom'] : null;
        $this->container['appIosSpec'] = isset($data['appIosSpec']) ? $data['appIosSpec'] : null;
        $this->container['appAndroidSpec'] = isset($data['appAndroidSpec']) ? $data['appAndroidSpec'] : null;
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
     * Gets title
     *
     * @return string|mixed
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|mixed $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets fontColor
     *
     * @return string|mixed
     */
    public function getFontColor()
    {
        return $this->container['fontColor'];
    }

    /**
     * Sets fontColor
     *
     * @param string|mixed $fontColor fontColor
     *
     * @return $this
     */
    public function setFontColor($fontColor)
    {
        $this->container['fontColor'] = $fontColor;

        return $this;
    }

    /**
     * Gets bgColor
     *
     * @return string|mixed
     */
    public function getBgColor()
    {
        return $this->container['bgColor'];
    }

    /**
     * Sets bgColor
     *
     * @param string|mixed $bgColor bgColor
     *
     * @return $this
     */
    public function setBgColor($bgColor)
    {
        $this->container['bgColor'] = $bgColor;

        return $this;
    }

    /**
     * Gets paddingTop
     *
     * @return int|mixed
     */
    public function getPaddingTop()
    {
        return $this->container['paddingTop'];
    }

    /**
     * Sets paddingTop
     *
     * @param int|mixed $paddingTop paddingTop
     *
     * @return $this
     */
    public function setPaddingTop($paddingTop)
    {
        $this->container['paddingTop'] = $paddingTop;

        return $this;
    }

    /**
     * Gets paddingBottom
     *
     * @return int|mixed
     */
    public function getPaddingBottom()
    {
        return $this->container['paddingBottom'];
    }

    /**
     * Sets paddingBottom
     *
     * @param int|mixed $paddingBottom paddingBottom
     *
     * @return $this
     */
    public function setPaddingBottom($paddingBottom)
    {
        $this->container['paddingBottom'] = $paddingBottom;

        return $this;
    }

    /**
     * Gets appIosSpec
     *
     * @return \TencentAds\Model\CanvasAppIosSpecType|mixed
     */
    public function getAppIosSpec()
    {
        return $this->container['appIosSpec'];
    }

    /**
     * Sets appIosSpec
     *
     * @param \TencentAds\Model\CanvasAppIosSpecType|mixed $appIosSpec appIosSpec
     *
     * @return $this
     */
    public function setAppIosSpec($appIosSpec)
    {
        $this->container['appIosSpec'] = $appIosSpec;

        return $this;
    }

    /**
     * Gets appAndroidSpec
     *
     * @return \TencentAds\Model\CanvasAppAndroidSpecType|mixed
     */
    public function getAppAndroidSpec()
    {
        return $this->container['appAndroidSpec'];
    }

    /**
     * Sets appAndroidSpec
     *
     * @param \TencentAds\Model\CanvasAppAndroidSpecType|mixed $appAndroidSpec appAndroidSpec
     *
     * @return $this
     */
    public function setAppAndroidSpec($appAndroidSpec)
    {
        $this->container['appAndroidSpec'] = $appAndroidSpec;

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


