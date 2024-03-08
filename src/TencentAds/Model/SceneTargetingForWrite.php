<?php
/**
 * SceneTargetingForWrite
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
 * SceneTargetingForWrite Class Doc Comment
 *
 * @category Class
 * @description 场景定向
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SceneTargetingForWrite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'scene_targeting_for_write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'unionPositionPackage' => 'int[]',
        'excludeUnionPositionPackage' => 'int[]',
        'displayScene' => 'string[]',
        'tencentNews' => 'string[]',
        'wechatScene' => '\TencentAds\Model\WechatScene',
        'wechatPosition' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'unionPositionPackage' => 'int64',
        'excludeUnionPositionPackage' => 'int64',
        'displayScene' => null,
        'tencentNews' => null,
        'wechatScene' => null,
        'wechatPosition' => 'int64'
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
        'unionPositionPackage' => 'union_position_package',
        'excludeUnionPositionPackage' => 'exclude_union_position_package',
        'displayScene' => 'display_scene',
        'tencentNews' => 'tencent_news',
        'wechatScene' => 'wechat_scene',
        'wechatPosition' => 'wechat_position'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unionPositionPackage' => 'setUnionPositionPackage',
        'excludeUnionPositionPackage' => 'setExcludeUnionPositionPackage',
        'displayScene' => 'setDisplayScene',
        'tencentNews' => 'setTencentNews',
        'wechatScene' => 'setWechatScene',
        'wechatPosition' => 'setWechatPosition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unionPositionPackage' => 'getUnionPositionPackage',
        'excludeUnionPositionPackage' => 'getExcludeUnionPositionPackage',
        'displayScene' => 'getDisplayScene',
        'tencentNews' => 'getTencentNews',
        'wechatScene' => 'getWechatScene',
        'wechatPosition' => 'getWechatPosition'
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
        $this->container['unionPositionPackage'] = isset($data['unionPositionPackage']) ? $data['unionPositionPackage'] : null;
        $this->container['excludeUnionPositionPackage'] = isset($data['excludeUnionPositionPackage']) ? $data['excludeUnionPositionPackage'] : null;
        $this->container['displayScene'] = isset($data['displayScene']) ? $data['displayScene'] : null;
        $this->container['tencentNews'] = isset($data['tencentNews']) ? $data['tencentNews'] : null;
        $this->container['wechatScene'] = isset($data['wechatScene']) ? $data['wechatScene'] : null;
        $this->container['wechatPosition'] = isset($data['wechatPosition']) ? $data['wechatPosition'] : null;
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
     * Gets unionPositionPackage
     *
     * @return int[]|mixed
     */
    public function getUnionPositionPackage()
    {
        return $this->container['unionPositionPackage'];
    }

    /**
     * Sets unionPositionPackage
     *
     * @param int[]|mixed $unionPositionPackage unionPositionPackage
     *
     * @return $this
     */
    public function setUnionPositionPackage($unionPositionPackage)
    {
        $this->container['unionPositionPackage'] = $unionPositionPackage;

        return $this;
    }

    /**
     * Gets excludeUnionPositionPackage
     *
     * @return int[]|mixed
     */
    public function getExcludeUnionPositionPackage()
    {
        return $this->container['excludeUnionPositionPackage'];
    }

    /**
     * Sets excludeUnionPositionPackage
     *
     * @param int[]|mixed $excludeUnionPositionPackage excludeUnionPositionPackage
     *
     * @return $this
     */
    public function setExcludeUnionPositionPackage($excludeUnionPositionPackage)
    {
        $this->container['excludeUnionPositionPackage'] = $excludeUnionPositionPackage;

        return $this;
    }

    /**
     * Gets displayScene
     *
     * @return string[]|mixed
     */
    public function getDisplayScene()
    {
        return $this->container['displayScene'];
    }

    /**
     * Sets displayScene
     *
     * @param string[]|mixed $displayScene displayScene
     *
     * @return $this
     */
    public function setDisplayScene($displayScene)
    {
        $this->container['displayScene'] = $displayScene;

        return $this;
    }

    /**
     * Gets tencentNews
     *
     * @return string[]|mixed
     */
    public function getTencentNews()
    {
        return $this->container['tencentNews'];
    }

    /**
     * Sets tencentNews
     *
     * @param string[]|mixed $tencentNews tencentNews
     *
     * @return $this
     */
    public function setTencentNews($tencentNews)
    {
        $this->container['tencentNews'] = $tencentNews;

        return $this;
    }

    /**
     * Gets wechatScene
     *
     * @return \TencentAds\Model\WechatScene|mixed
     */
    public function getWechatScene()
    {
        return $this->container['wechatScene'];
    }

    /**
     * Sets wechatScene
     *
     * @param \TencentAds\Model\WechatScene|mixed $wechatScene wechatScene
     *
     * @return $this
     */
    public function setWechatScene($wechatScene)
    {
        $this->container['wechatScene'] = $wechatScene;

        return $this;
    }

    /**
     * Gets wechatPosition
     *
     * @return int[]|mixed
     */
    public function getWechatPosition()
    {
        return $this->container['wechatPosition'];
    }

    /**
     * Sets wechatPosition
     *
     * @param int[]|mixed $wechatPosition wechatPosition
     *
     * @return $this
     */
    public function setWechatPosition($wechatPosition)
    {
        $this->container['wechatPosition'] = $wechatPosition;

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


