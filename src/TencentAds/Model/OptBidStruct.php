<?php
/**
 * OptBidStruct
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
 * OptBidStruct Class Doc Comment
 *
 * @category Class
 * @description 出价优化
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OptBidStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'opt_bid_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adjustBidStrategyFlag' => 'bool',
        'currentBidStrategy' => 'string',
        'optimizeBidStrategy' => 'string',
        'adjustBidAmountFlag' => 'bool',
        'currentBidAmount' => 'int',
        'optimizeBidAmount' => 'int',
        'adjustDeepBidAmountFlag' => 'bool',
        'currentDeepBidAmount' => 'int',
        'optimizeDeepBidAmount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adjustBidStrategyFlag' => null,
        'currentBidStrategy' => null,
        'optimizeBidStrategy' => null,
        'adjustBidAmountFlag' => null,
        'currentBidAmount' => 'int64',
        'optimizeBidAmount' => 'int64',
        'adjustDeepBidAmountFlag' => null,
        'currentDeepBidAmount' => 'int64',
        'optimizeDeepBidAmount' => 'int64'
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
        'adjustBidStrategyFlag' => 'adjust_bid_strategy_flag',
        'currentBidStrategy' => 'current_bid_strategy',
        'optimizeBidStrategy' => 'optimize_bid_strategy',
        'adjustBidAmountFlag' => 'adjust_bid_amount_flag',
        'currentBidAmount' => 'current_bid_amount',
        'optimizeBidAmount' => 'optimize_bid_amount',
        'adjustDeepBidAmountFlag' => 'adjust_deep_bid_amount_flag',
        'currentDeepBidAmount' => 'current_deep_bid_amount',
        'optimizeDeepBidAmount' => 'optimize_deep_bid_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adjustBidStrategyFlag' => 'setAdjustBidStrategyFlag',
        'currentBidStrategy' => 'setCurrentBidStrategy',
        'optimizeBidStrategy' => 'setOptimizeBidStrategy',
        'adjustBidAmountFlag' => 'setAdjustBidAmountFlag',
        'currentBidAmount' => 'setCurrentBidAmount',
        'optimizeBidAmount' => 'setOptimizeBidAmount',
        'adjustDeepBidAmountFlag' => 'setAdjustDeepBidAmountFlag',
        'currentDeepBidAmount' => 'setCurrentDeepBidAmount',
        'optimizeDeepBidAmount' => 'setOptimizeDeepBidAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adjustBidStrategyFlag' => 'getAdjustBidStrategyFlag',
        'currentBidStrategy' => 'getCurrentBidStrategy',
        'optimizeBidStrategy' => 'getOptimizeBidStrategy',
        'adjustBidAmountFlag' => 'getAdjustBidAmountFlag',
        'currentBidAmount' => 'getCurrentBidAmount',
        'optimizeBidAmount' => 'getOptimizeBidAmount',
        'adjustDeepBidAmountFlag' => 'getAdjustDeepBidAmountFlag',
        'currentDeepBidAmount' => 'getCurrentDeepBidAmount',
        'optimizeDeepBidAmount' => 'getOptimizeDeepBidAmount'
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
        $this->container['adjustBidStrategyFlag'] = isset($data['adjustBidStrategyFlag']) ? $data['adjustBidStrategyFlag'] : null;
        $this->container['currentBidStrategy'] = isset($data['currentBidStrategy']) ? $data['currentBidStrategy'] : null;
        $this->container['optimizeBidStrategy'] = isset($data['optimizeBidStrategy']) ? $data['optimizeBidStrategy'] : null;
        $this->container['adjustBidAmountFlag'] = isset($data['adjustBidAmountFlag']) ? $data['adjustBidAmountFlag'] : null;
        $this->container['currentBidAmount'] = isset($data['currentBidAmount']) ? $data['currentBidAmount'] : null;
        $this->container['optimizeBidAmount'] = isset($data['optimizeBidAmount']) ? $data['optimizeBidAmount'] : null;
        $this->container['adjustDeepBidAmountFlag'] = isset($data['adjustDeepBidAmountFlag']) ? $data['adjustDeepBidAmountFlag'] : null;
        $this->container['currentDeepBidAmount'] = isset($data['currentDeepBidAmount']) ? $data['currentDeepBidAmount'] : null;
        $this->container['optimizeDeepBidAmount'] = isset($data['optimizeDeepBidAmount']) ? $data['optimizeDeepBidAmount'] : null;
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
     * Gets adjustBidStrategyFlag
     *
     * @return bool|mixed
     */
    public function getAdjustBidStrategyFlag()
    {
        return $this->container['adjustBidStrategyFlag'];
    }

    /**
     * Sets adjustBidStrategyFlag
     *
     * @param bool|mixed $adjustBidStrategyFlag adjustBidStrategyFlag
     *
     * @return $this
     */
    public function setAdjustBidStrategyFlag($adjustBidStrategyFlag)
    {
        $this->container['adjustBidStrategyFlag'] = $adjustBidStrategyFlag;

        return $this;
    }

    /**
     * Gets currentBidStrategy
     *
     * @return string|mixed
     */
    public function getCurrentBidStrategy()
    {
        return $this->container['currentBidStrategy'];
    }

    /**
     * Sets currentBidStrategy
     *
     * @param string|mixed $currentBidStrategy currentBidStrategy
     *
     * @return $this
     */
    public function setCurrentBidStrategy($currentBidStrategy)
    {
        $this->container['currentBidStrategy'] = $currentBidStrategy;

        return $this;
    }

    /**
     * Gets optimizeBidStrategy
     *
     * @return string|mixed
     */
    public function getOptimizeBidStrategy()
    {
        return $this->container['optimizeBidStrategy'];
    }

    /**
     * Sets optimizeBidStrategy
     *
     * @param string|mixed $optimizeBidStrategy optimizeBidStrategy
     *
     * @return $this
     */
    public function setOptimizeBidStrategy($optimizeBidStrategy)
    {
        $this->container['optimizeBidStrategy'] = $optimizeBidStrategy;

        return $this;
    }

    /**
     * Gets adjustBidAmountFlag
     *
     * @return bool|mixed
     */
    public function getAdjustBidAmountFlag()
    {
        return $this->container['adjustBidAmountFlag'];
    }

    /**
     * Sets adjustBidAmountFlag
     *
     * @param bool|mixed $adjustBidAmountFlag adjustBidAmountFlag
     *
     * @return $this
     */
    public function setAdjustBidAmountFlag($adjustBidAmountFlag)
    {
        $this->container['adjustBidAmountFlag'] = $adjustBidAmountFlag;

        return $this;
    }

    /**
     * Gets currentBidAmount
     *
     * @return int|mixed
     */
    public function getCurrentBidAmount()
    {
        return $this->container['currentBidAmount'];
    }

    /**
     * Sets currentBidAmount
     *
     * @param int|mixed $currentBidAmount currentBidAmount
     *
     * @return $this
     */
    public function setCurrentBidAmount($currentBidAmount)
    {
        $this->container['currentBidAmount'] = $currentBidAmount;

        return $this;
    }

    /**
     * Gets optimizeBidAmount
     *
     * @return int|mixed
     */
    public function getOptimizeBidAmount()
    {
        return $this->container['optimizeBidAmount'];
    }

    /**
     * Sets optimizeBidAmount
     *
     * @param int|mixed $optimizeBidAmount optimizeBidAmount
     *
     * @return $this
     */
    public function setOptimizeBidAmount($optimizeBidAmount)
    {
        $this->container['optimizeBidAmount'] = $optimizeBidAmount;

        return $this;
    }

    /**
     * Gets adjustDeepBidAmountFlag
     *
     * @return bool|mixed
     */
    public function getAdjustDeepBidAmountFlag()
    {
        return $this->container['adjustDeepBidAmountFlag'];
    }

    /**
     * Sets adjustDeepBidAmountFlag
     *
     * @param bool|mixed $adjustDeepBidAmountFlag adjustDeepBidAmountFlag
     *
     * @return $this
     */
    public function setAdjustDeepBidAmountFlag($adjustDeepBidAmountFlag)
    {
        $this->container['adjustDeepBidAmountFlag'] = $adjustDeepBidAmountFlag;

        return $this;
    }

    /**
     * Gets currentDeepBidAmount
     *
     * @return int|mixed
     */
    public function getCurrentDeepBidAmount()
    {
        return $this->container['currentDeepBidAmount'];
    }

    /**
     * Sets currentDeepBidAmount
     *
     * @param int|mixed $currentDeepBidAmount currentDeepBidAmount
     *
     * @return $this
     */
    public function setCurrentDeepBidAmount($currentDeepBidAmount)
    {
        $this->container['currentDeepBidAmount'] = $currentDeepBidAmount;

        return $this;
    }

    /**
     * Gets optimizeDeepBidAmount
     *
     * @return int|mixed
     */
    public function getOptimizeDeepBidAmount()
    {
        return $this->container['optimizeDeepBidAmount'];
    }

    /**
     * Sets optimizeDeepBidAmount
     *
     * @param int|mixed $optimizeDeepBidAmount optimizeDeepBidAmount
     *
     * @return $this
     */
    public function setOptimizeDeepBidAmount($optimizeDeepBidAmount)
    {
        $this->container['optimizeDeepBidAmount'] = $optimizeDeepBidAmount;

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


