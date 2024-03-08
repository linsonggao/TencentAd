<?php
/**
 * LeadCluesGetRequest
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
 * LeadCluesGetRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeadCluesGetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LeadCluesGetRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'timeType' => '\TencentAds\Model\TimeType',
        'timeRange' => '\TencentAds\Model\TimeRange',
        'filtering' => '\TencentAds\Model\FilteringStruct[]',
        'page' => 'int',
        'pageSize' => 'int',
        'lastSearchAfterValues' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'timeType' => null,
        'timeRange' => null,
        'filtering' => null,
        'page' => 'int64',
        'pageSize' => 'int64',
        'lastSearchAfterValues' => null
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
        'accountId' => 'account_id',
        'timeType' => 'time_type',
        'timeRange' => 'time_range',
        'filtering' => 'filtering',
        'page' => 'page',
        'pageSize' => 'page_size',
        'lastSearchAfterValues' => 'last_search_after_values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'timeType' => 'setTimeType',
        'timeRange' => 'setTimeRange',
        'filtering' => 'setFiltering',
        'page' => 'setPage',
        'pageSize' => 'setPageSize',
        'lastSearchAfterValues' => 'setLastSearchAfterValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'timeType' => 'getTimeType',
        'timeRange' => 'getTimeRange',
        'filtering' => 'getFiltering',
        'page' => 'getPage',
        'pageSize' => 'getPageSize',
        'lastSearchAfterValues' => 'getLastSearchAfterValues'
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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['timeType'] = isset($data['timeType']) ? $data['timeType'] : null;
        $this->container['timeRange'] = isset($data['timeRange']) ? $data['timeRange'] : null;
        $this->container['filtering'] = isset($data['filtering']) ? $data['filtering'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['lastSearchAfterValues'] = isset($data['lastSearchAfterValues']) ? $data['lastSearchAfterValues'] : null;
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
     * Gets accountId
     *
     * @return int|mixed
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int|mixed $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets timeType
     *
     * @return \TencentAds\Model\TimeType|mixed
     */
    public function getTimeType()
    {
        return $this->container['timeType'];
    }

    /**
     * Sets timeType
     *
     * @param \TencentAds\Model\TimeType|mixed $timeType timeType
     *
     * @return $this
     */
    public function setTimeType($timeType)
    {
        $this->container['timeType'] = $timeType;

        return $this;
    }

    /**
     * Gets timeRange
     *
     * @return \TencentAds\Model\TimeRange|mixed
     */
    public function getTimeRange()
    {
        return $this->container['timeRange'];
    }

    /**
     * Sets timeRange
     *
     * @param \TencentAds\Model\TimeRange|mixed $timeRange timeRange
     *
     * @return $this
     */
    public function setTimeRange($timeRange)
    {
        $this->container['timeRange'] = $timeRange;

        return $this;
    }

    /**
     * Gets filtering
     *
     * @return \TencentAds\Model\FilteringStruct[]|mixed
     */
    public function getFiltering()
    {
        return $this->container['filtering'];
    }

    /**
     * Sets filtering
     *
     * @param \TencentAds\Model\FilteringStruct[]|mixed $filtering filtering
     *
     * @return $this
     */
    public function setFiltering($filtering)
    {
        $this->container['filtering'] = $filtering;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int|mixed
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|mixed $page page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int|mixed
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int|mixed $pageSize pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets lastSearchAfterValues
     *
     * @return string[]|mixed
     */
    public function getLastSearchAfterValues()
    {
        return $this->container['lastSearchAfterValues'];
    }

    /**
     * Sets lastSearchAfterValues
     *
     * @param string[]|mixed $lastSearchAfterValues lastSearchAfterValues
     *
     * @return $this
     */
    public function setLastSearchAfterValues($lastSearchAfterValues)
    {
        $this->container['lastSearchAfterValues'] = $lastSearchAfterValues;

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


