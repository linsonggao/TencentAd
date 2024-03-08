<?php
/**
 * ReportAdUnionRequest
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
 * ReportAdUnionRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportAdUnionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReportAdUnionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filtering' => '\TencentAds\Model\FilteringStruct[]',
        'dateRange' => '\TencentAds\Model\DateRange',
        'groupBy' => 'string[]',
        'orderBy' => '\TencentAds\Model\OrderByStruct[]',
        'page' => 'int',
        'pageSize' => 'int',
        'fields' => 'string[]',
        'async' => 'int',
        'accountId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'filtering' => null,
        'dateRange' => null,
        'groupBy' => null,
        'orderBy' => null,
        'page' => 'int64',
        'pageSize' => 'int64',
        'fields' => null,
        'async' => 'int64',
        'accountId' => 'int64'
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
        'filtering' => 'filtering',
        'dateRange' => 'date_range',
        'groupBy' => 'group_by',
        'orderBy' => 'order_by',
        'page' => 'page',
        'pageSize' => 'page_size',
        'fields' => 'fields',
        'async' => 'async',
        'accountId' => 'account_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filtering' => 'setFiltering',
        'dateRange' => 'setDateRange',
        'groupBy' => 'setGroupBy',
        'orderBy' => 'setOrderBy',
        'page' => 'setPage',
        'pageSize' => 'setPageSize',
        'fields' => 'setFields',
        'async' => 'setAsync',
        'accountId' => 'setAccountId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filtering' => 'getFiltering',
        'dateRange' => 'getDateRange',
        'groupBy' => 'getGroupBy',
        'orderBy' => 'getOrderBy',
        'page' => 'getPage',
        'pageSize' => 'getPageSize',
        'fields' => 'getFields',
        'async' => 'getAsync',
        'accountId' => 'getAccountId'
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
        $this->container['filtering'] = isset($data['filtering']) ? $data['filtering'] : null;
        $this->container['dateRange'] = isset($data['dateRange']) ? $data['dateRange'] : null;
        $this->container['groupBy'] = isset($data['groupBy']) ? $data['groupBy'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['async'] = isset($data['async']) ? $data['async'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
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
     * Gets dateRange
     *
     * @return \TencentAds\Model\DateRange|mixed
     */
    public function getDateRange()
    {
        return $this->container['dateRange'];
    }

    /**
     * Sets dateRange
     *
     * @param \TencentAds\Model\DateRange|mixed $dateRange dateRange
     *
     * @return $this
     */
    public function setDateRange($dateRange)
    {
        $this->container['dateRange'] = $dateRange;

        return $this;
    }

    /**
     * Gets groupBy
     *
     * @return string[]|mixed
     */
    public function getGroupBy()
    {
        return $this->container['groupBy'];
    }

    /**
     * Sets groupBy
     *
     * @param string[]|mixed $groupBy groupBy
     *
     * @return $this
     */
    public function setGroupBy($groupBy)
    {
        $this->container['groupBy'] = $groupBy;

        return $this;
    }

    /**
     * Gets orderBy
     *
     * @return \TencentAds\Model\OrderByStruct[]|mixed
     */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
     * Sets orderBy
     *
     * @param \TencentAds\Model\OrderByStruct[]|mixed $orderBy orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;

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
     * Gets fields
     *
     * @return string[]|mixed
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string[]|mixed $fields fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets async
     *
     * @return int|mixed
     */
    public function getAsync()
    {
        return $this->container['async'];
    }

    /**
     * Sets async
     *
     * @param int|mixed $async async
     *
     * @return $this
     */
    public function setAsync($async)
    {
        $this->container['async'] = $async;

        return $this;
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


