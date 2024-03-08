<?php
/**
 * ProductTypeDianpingShop
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
 * ProductTypeDianpingShop Class Doc Comment
 *
 * @category Class
 * @description 只有product_type为PRODUCT_TYPE_DIANPING_SHOP时才能使用
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductTypeDianpingShop implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'product_type_dianping_shop';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shopName' => 'string',
        'address' => 'string',
        'city' => 'string',
        'district' => 'string',
        'businessArea' => 'string',
        'streetNumber' => 'string',
        'longitude' => 'double',
        'latitude' => 'double',
        'shopDetailUrl' => 'string',
        'ratings' => 'int',
        'averagePrice' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shopName' => null,
        'address' => null,
        'city' => null,
        'district' => null,
        'businessArea' => null,
        'streetNumber' => null,
        'longitude' => 'double',
        'latitude' => 'double',
        'shopDetailUrl' => null,
        'ratings' => 'int64',
        'averagePrice' => 'int64'
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
        'shopName' => 'shop_name',
        'address' => 'address',
        'city' => 'city',
        'district' => 'district',
        'businessArea' => 'business_area',
        'streetNumber' => 'street_number',
        'longitude' => 'longitude',
        'latitude' => 'latitude',
        'shopDetailUrl' => 'shop_detail_url',
        'ratings' => 'ratings',
        'averagePrice' => 'average_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shopName' => 'setShopName',
        'address' => 'setAddress',
        'city' => 'setCity',
        'district' => 'setDistrict',
        'businessArea' => 'setBusinessArea',
        'streetNumber' => 'setStreetNumber',
        'longitude' => 'setLongitude',
        'latitude' => 'setLatitude',
        'shopDetailUrl' => 'setShopDetailUrl',
        'ratings' => 'setRatings',
        'averagePrice' => 'setAveragePrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shopName' => 'getShopName',
        'address' => 'getAddress',
        'city' => 'getCity',
        'district' => 'getDistrict',
        'businessArea' => 'getBusinessArea',
        'streetNumber' => 'getStreetNumber',
        'longitude' => 'getLongitude',
        'latitude' => 'getLatitude',
        'shopDetailUrl' => 'getShopDetailUrl',
        'ratings' => 'getRatings',
        'averagePrice' => 'getAveragePrice'
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
        $this->container['shopName'] = isset($data['shopName']) ? $data['shopName'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['businessArea'] = isset($data['businessArea']) ? $data['businessArea'] : null;
        $this->container['streetNumber'] = isset($data['streetNumber']) ? $data['streetNumber'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['shopDetailUrl'] = isset($data['shopDetailUrl']) ? $data['shopDetailUrl'] : null;
        $this->container['ratings'] = isset($data['ratings']) ? $data['ratings'] : null;
        $this->container['averagePrice'] = isset($data['averagePrice']) ? $data['averagePrice'] : null;
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
     * Gets shopName
     *
     * @return string|mixed
     */
    public function getShopName()
    {
        return $this->container['shopName'];
    }

    /**
     * Sets shopName
     *
     * @param string|mixed $shopName shopName
     *
     * @return $this
     */
    public function setShopName($shopName)
    {
        $this->container['shopName'] = $shopName;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|mixed
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|mixed $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|mixed
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|mixed $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string|mixed
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string|mixed $district district
     *
     * @return $this
     */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets businessArea
     *
     * @return string|mixed
     */
    public function getBusinessArea()
    {
        return $this->container['businessArea'];
    }

    /**
     * Sets businessArea
     *
     * @param string|mixed $businessArea businessArea
     *
     * @return $this
     */
    public function setBusinessArea($businessArea)
    {
        $this->container['businessArea'] = $businessArea;

        return $this;
    }

    /**
     * Gets streetNumber
     *
     * @return string|mixed
     */
    public function getStreetNumber()
    {
        return $this->container['streetNumber'];
    }

    /**
     * Sets streetNumber
     *
     * @param string|mixed $streetNumber streetNumber
     *
     * @return $this
     */
    public function setStreetNumber($streetNumber)
    {
        $this->container['streetNumber'] = $streetNumber;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return double|mixed
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param double|mixed $longitude longitude
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return double|mixed
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param double|mixed $latitude latitude
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets shopDetailUrl
     *
     * @return string|mixed
     */
    public function getShopDetailUrl()
    {
        return $this->container['shopDetailUrl'];
    }

    /**
     * Sets shopDetailUrl
     *
     * @param string|mixed $shopDetailUrl shopDetailUrl
     *
     * @return $this
     */
    public function setShopDetailUrl($shopDetailUrl)
    {
        $this->container['shopDetailUrl'] = $shopDetailUrl;

        return $this;
    }

    /**
     * Gets ratings
     *
     * @return int|mixed
     */
    public function getRatings()
    {
        return $this->container['ratings'];
    }

    /**
     * Sets ratings
     *
     * @param int|mixed $ratings ratings
     *
     * @return $this
     */
    public function setRatings($ratings)
    {
        $this->container['ratings'] = $ratings;

        return $this;
    }

    /**
     * Gets averagePrice
     *
     * @return int|mixed
     */
    public function getAveragePrice()
    {
        return $this->container['averagePrice'];
    }

    /**
     * Sets averagePrice
     *
     * @param int|mixed $averagePrice averagePrice
     *
     * @return $this
     */
    public function setAveragePrice($averagePrice)
    {
        $this->container['averagePrice'] = $averagePrice;

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


