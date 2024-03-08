<?php
/**
 * CapabilitiesGetResponseData
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
 * CapabilitiesGetResponseData Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CapabilitiesGetResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CapabilitiesGetResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'wechatEcommerceProductSpec' => '\TencentAds\Model\WechatEcommerceProductSpec',
        'wechatLinkAdSpec' => '\TencentAds\Model\WechatLinkAdSpec',
        'wechatOcpaSpec' => '\TencentAds\Model\WechatOcpaSpecStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'wechatEcommerceProductSpec' => null,
        'wechatLinkAdSpec' => null,
        'wechatOcpaSpec' => null
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
        'wechatEcommerceProductSpec' => 'wechat_ecommerce_product_spec',
        'wechatLinkAdSpec' => 'wechat_link_ad_spec',
        'wechatOcpaSpec' => 'wechat_ocpa_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wechatEcommerceProductSpec' => 'setWechatEcommerceProductSpec',
        'wechatLinkAdSpec' => 'setWechatLinkAdSpec',
        'wechatOcpaSpec' => 'setWechatOcpaSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wechatEcommerceProductSpec' => 'getWechatEcommerceProductSpec',
        'wechatLinkAdSpec' => 'getWechatLinkAdSpec',
        'wechatOcpaSpec' => 'getWechatOcpaSpec'
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
        $this->container['wechatEcommerceProductSpec'] = isset($data['wechatEcommerceProductSpec']) ? $data['wechatEcommerceProductSpec'] : null;
        $this->container['wechatLinkAdSpec'] = isset($data['wechatLinkAdSpec']) ? $data['wechatLinkAdSpec'] : null;
        $this->container['wechatOcpaSpec'] = isset($data['wechatOcpaSpec']) ? $data['wechatOcpaSpec'] : null;
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
     * Gets wechatEcommerceProductSpec
     *
     * @return \TencentAds\Model\WechatEcommerceProductSpec|mixed
     */
    public function getWechatEcommerceProductSpec()
    {
        return $this->container['wechatEcommerceProductSpec'];
    }

    /**
     * Sets wechatEcommerceProductSpec
     *
     * @param \TencentAds\Model\WechatEcommerceProductSpec|mixed $wechatEcommerceProductSpec wechatEcommerceProductSpec
     *
     * @return $this
     */
    public function setWechatEcommerceProductSpec($wechatEcommerceProductSpec)
    {
        $this->container['wechatEcommerceProductSpec'] = $wechatEcommerceProductSpec;

        return $this;
    }

    /**
     * Gets wechatLinkAdSpec
     *
     * @return \TencentAds\Model\WechatLinkAdSpec|mixed
     */
    public function getWechatLinkAdSpec()
    {
        return $this->container['wechatLinkAdSpec'];
    }

    /**
     * Sets wechatLinkAdSpec
     *
     * @param \TencentAds\Model\WechatLinkAdSpec|mixed $wechatLinkAdSpec wechatLinkAdSpec
     *
     * @return $this
     */
    public function setWechatLinkAdSpec($wechatLinkAdSpec)
    {
        $this->container['wechatLinkAdSpec'] = $wechatLinkAdSpec;

        return $this;
    }

    /**
     * Gets wechatOcpaSpec
     *
     * @return \TencentAds\Model\WechatOcpaSpecStruct[]|mixed
     */
    public function getWechatOcpaSpec()
    {
        return $this->container['wechatOcpaSpec'];
    }

    /**
     * Sets wechatOcpaSpec
     *
     * @param \TencentAds\Model\WechatOcpaSpecStruct[]|mixed $wechatOcpaSpec wechatOcpaSpec
     *
     * @return $this
     */
    public function setWechatOcpaSpec($wechatOcpaSpec)
    {
        $this->container['wechatOcpaSpec'] = $wechatOcpaSpec;

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


