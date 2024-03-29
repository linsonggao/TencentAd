<?php
/**
 * CompititionAnalysisDetailSpec
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
 * CompititionAnalysisDetailSpec Class Doc Comment
 *
 * @category Class
 * @description 竞争表现评估类型
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompititionAnalysisDetailSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'compitition_analysis_detail_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => 'string',
        'hour' => 'int',
        'adUserAcceptance' => 'int',
        'adBidAmount' => 'int',
        'sameIndustryBidAmount' => 'int',
        'winOverAdBidAmount' => 'int',
        'adClick' => 'int',
        'sameIndustryClick' => 'int',
        'winOverAdClick' => 'int',
        'adConversion' => 'int',
        'sameIndustryConversion' => 'int',
        'winOverAdConversion' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => null,
        'hour' => 'int64',
        'adUserAcceptance' => 'int64',
        'adBidAmount' => 'int64',
        'sameIndustryBidAmount' => 'int64',
        'winOverAdBidAmount' => 'int64',
        'adClick' => 'int64',
        'sameIndustryClick' => 'int64',
        'winOverAdClick' => 'int64',
        'adConversion' => 'int64',
        'sameIndustryConversion' => 'int64',
        'winOverAdConversion' => 'int64'
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
        'date' => 'date',
        'hour' => 'hour',
        'adUserAcceptance' => 'ad_user_acceptance',
        'adBidAmount' => 'ad_bid_amount',
        'sameIndustryBidAmount' => 'same_industry_bid_amount',
        'winOverAdBidAmount' => 'win_over_ad_bid_amount',
        'adClick' => 'ad_click',
        'sameIndustryClick' => 'same_industry_click',
        'winOverAdClick' => 'win_over_ad_click',
        'adConversion' => 'ad_conversion',
        'sameIndustryConversion' => 'same_industry_conversion',
        'winOverAdConversion' => 'win_over_ad_conversion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'hour' => 'setHour',
        'adUserAcceptance' => 'setAdUserAcceptance',
        'adBidAmount' => 'setAdBidAmount',
        'sameIndustryBidAmount' => 'setSameIndustryBidAmount',
        'winOverAdBidAmount' => 'setWinOverAdBidAmount',
        'adClick' => 'setAdClick',
        'sameIndustryClick' => 'setSameIndustryClick',
        'winOverAdClick' => 'setWinOverAdClick',
        'adConversion' => 'setAdConversion',
        'sameIndustryConversion' => 'setSameIndustryConversion',
        'winOverAdConversion' => 'setWinOverAdConversion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'hour' => 'getHour',
        'adUserAcceptance' => 'getAdUserAcceptance',
        'adBidAmount' => 'getAdBidAmount',
        'sameIndustryBidAmount' => 'getSameIndustryBidAmount',
        'winOverAdBidAmount' => 'getWinOverAdBidAmount',
        'adClick' => 'getAdClick',
        'sameIndustryClick' => 'getSameIndustryClick',
        'winOverAdClick' => 'getWinOverAdClick',
        'adConversion' => 'getAdConversion',
        'sameIndustryConversion' => 'getSameIndustryConversion',
        'winOverAdConversion' => 'getWinOverAdConversion'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['hour'] = isset($data['hour']) ? $data['hour'] : null;
        $this->container['adUserAcceptance'] = isset($data['adUserAcceptance']) ? $data['adUserAcceptance'] : null;
        $this->container['adBidAmount'] = isset($data['adBidAmount']) ? $data['adBidAmount'] : null;
        $this->container['sameIndustryBidAmount'] = isset($data['sameIndustryBidAmount']) ? $data['sameIndustryBidAmount'] : null;
        $this->container['winOverAdBidAmount'] = isset($data['winOverAdBidAmount']) ? $data['winOverAdBidAmount'] : null;
        $this->container['adClick'] = isset($data['adClick']) ? $data['adClick'] : null;
        $this->container['sameIndustryClick'] = isset($data['sameIndustryClick']) ? $data['sameIndustryClick'] : null;
        $this->container['winOverAdClick'] = isset($data['winOverAdClick']) ? $data['winOverAdClick'] : null;
        $this->container['adConversion'] = isset($data['adConversion']) ? $data['adConversion'] : null;
        $this->container['sameIndustryConversion'] = isset($data['sameIndustryConversion']) ? $data['sameIndustryConversion'] : null;
        $this->container['winOverAdConversion'] = isset($data['winOverAdConversion']) ? $data['winOverAdConversion'] : null;
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
     * Gets date
     *
     * @return string|mixed
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string|mixed $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets hour
     *
     * @return int|mixed
     */
    public function getHour()
    {
        return $this->container['hour'];
    }

    /**
     * Sets hour
     *
     * @param int|mixed $hour hour
     *
     * @return $this
     */
    public function setHour($hour)
    {
        $this->container['hour'] = $hour;

        return $this;
    }

    /**
     * Gets adUserAcceptance
     *
     * @return int|mixed
     */
    public function getAdUserAcceptance()
    {
        return $this->container['adUserAcceptance'];
    }

    /**
     * Sets adUserAcceptance
     *
     * @param int|mixed $adUserAcceptance adUserAcceptance
     *
     * @return $this
     */
    public function setAdUserAcceptance($adUserAcceptance)
    {
        $this->container['adUserAcceptance'] = $adUserAcceptance;

        return $this;
    }

    /**
     * Gets adBidAmount
     *
     * @return int|mixed
     */
    public function getAdBidAmount()
    {
        return $this->container['adBidAmount'];
    }

    /**
     * Sets adBidAmount
     *
     * @param int|mixed $adBidAmount adBidAmount
     *
     * @return $this
     */
    public function setAdBidAmount($adBidAmount)
    {
        $this->container['adBidAmount'] = $adBidAmount;

        return $this;
    }

    /**
     * Gets sameIndustryBidAmount
     *
     * @return int|mixed
     */
    public function getSameIndustryBidAmount()
    {
        return $this->container['sameIndustryBidAmount'];
    }

    /**
     * Sets sameIndustryBidAmount
     *
     * @param int|mixed $sameIndustryBidAmount sameIndustryBidAmount
     *
     * @return $this
     */
    public function setSameIndustryBidAmount($sameIndustryBidAmount)
    {
        $this->container['sameIndustryBidAmount'] = $sameIndustryBidAmount;

        return $this;
    }

    /**
     * Gets winOverAdBidAmount
     *
     * @return int|mixed
     */
    public function getWinOverAdBidAmount()
    {
        return $this->container['winOverAdBidAmount'];
    }

    /**
     * Sets winOverAdBidAmount
     *
     * @param int|mixed $winOverAdBidAmount winOverAdBidAmount
     *
     * @return $this
     */
    public function setWinOverAdBidAmount($winOverAdBidAmount)
    {
        $this->container['winOverAdBidAmount'] = $winOverAdBidAmount;

        return $this;
    }

    /**
     * Gets adClick
     *
     * @return int|mixed
     */
    public function getAdClick()
    {
        return $this->container['adClick'];
    }

    /**
     * Sets adClick
     *
     * @param int|mixed $adClick adClick
     *
     * @return $this
     */
    public function setAdClick($adClick)
    {
        $this->container['adClick'] = $adClick;

        return $this;
    }

    /**
     * Gets sameIndustryClick
     *
     * @return int|mixed
     */
    public function getSameIndustryClick()
    {
        return $this->container['sameIndustryClick'];
    }

    /**
     * Sets sameIndustryClick
     *
     * @param int|mixed $sameIndustryClick sameIndustryClick
     *
     * @return $this
     */
    public function setSameIndustryClick($sameIndustryClick)
    {
        $this->container['sameIndustryClick'] = $sameIndustryClick;

        return $this;
    }

    /**
     * Gets winOverAdClick
     *
     * @return int|mixed
     */
    public function getWinOverAdClick()
    {
        return $this->container['winOverAdClick'];
    }

    /**
     * Sets winOverAdClick
     *
     * @param int|mixed $winOverAdClick winOverAdClick
     *
     * @return $this
     */
    public function setWinOverAdClick($winOverAdClick)
    {
        $this->container['winOverAdClick'] = $winOverAdClick;

        return $this;
    }

    /**
     * Gets adConversion
     *
     * @return int|mixed
     */
    public function getAdConversion()
    {
        return $this->container['adConversion'];
    }

    /**
     * Sets adConversion
     *
     * @param int|mixed $adConversion adConversion
     *
     * @return $this
     */
    public function setAdConversion($adConversion)
    {
        $this->container['adConversion'] = $adConversion;

        return $this;
    }

    /**
     * Gets sameIndustryConversion
     *
     * @return int|mixed
     */
    public function getSameIndustryConversion()
    {
        return $this->container['sameIndustryConversion'];
    }

    /**
     * Sets sameIndustryConversion
     *
     * @param int|mixed $sameIndustryConversion sameIndustryConversion
     *
     * @return $this
     */
    public function setSameIndustryConversion($sameIndustryConversion)
    {
        $this->container['sameIndustryConversion'] = $sameIndustryConversion;

        return $this;
    }

    /**
     * Gets winOverAdConversion
     *
     * @return int|mixed
     */
    public function getWinOverAdConversion()
    {
        return $this->container['winOverAdConversion'];
    }

    /**
     * Sets winOverAdConversion
     *
     * @param int|mixed $winOverAdConversion winOverAdConversion
     *
     * @return $this
     */
    public function setWinOverAdConversion($winOverAdConversion)
    {
        $this->container['winOverAdConversion'] = $winOverAdConversion;

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


