<?php
/**
 * BatchAsyncRequestsGetTaskListStruct
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
 * BatchAsyncRequestsGetTaskListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BatchAsyncRequestsGetTaskListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BatchAsyncRequestsGetTaskListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'taskId' => 'int',
        'taskName' => 'string',
        'taskType' => '\TencentAds\Model\TaskType',
        'taskScope' => '\TencentAds\Model\TaskScope',
        'status' => '\TencentAds\Model\TaskStatus',
        'resultStatus' => '\TencentAds\Model\TaskResultStatus',
        'createdTime' => 'int',
        'endTime' => 'int',
        'scopeObjectIdList' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'taskId' => 'int64',
        'taskName' => null,
        'taskType' => null,
        'taskScope' => null,
        'status' => null,
        'resultStatus' => null,
        'createdTime' => 'int64',
        'endTime' => 'int64',
        'scopeObjectIdList' => 'int64'
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
        'taskId' => 'task_id',
        'taskName' => 'task_name',
        'taskType' => 'task_type',
        'taskScope' => 'task_scope',
        'status' => 'status',
        'resultStatus' => 'result_status',
        'createdTime' => 'created_time',
        'endTime' => 'end_time',
        'scopeObjectIdList' => 'scope_object_id_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'taskId' => 'setTaskId',
        'taskName' => 'setTaskName',
        'taskType' => 'setTaskType',
        'taskScope' => 'setTaskScope',
        'status' => 'setStatus',
        'resultStatus' => 'setResultStatus',
        'createdTime' => 'setCreatedTime',
        'endTime' => 'setEndTime',
        'scopeObjectIdList' => 'setScopeObjectIdList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'taskId' => 'getTaskId',
        'taskName' => 'getTaskName',
        'taskType' => 'getTaskType',
        'taskScope' => 'getTaskScope',
        'status' => 'getStatus',
        'resultStatus' => 'getResultStatus',
        'createdTime' => 'getCreatedTime',
        'endTime' => 'getEndTime',
        'scopeObjectIdList' => 'getScopeObjectIdList'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['taskScope'] = isset($data['taskScope']) ? $data['taskScope'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['resultStatus'] = isset($data['resultStatus']) ? $data['resultStatus'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['scopeObjectIdList'] = isset($data['scopeObjectIdList']) ? $data['scopeObjectIdList'] : null;
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
     * Gets taskId
     *
     * @return int|mixed
     */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
     * Sets taskId
     *
     * @param int|mixed $taskId taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;

        return $this;
    }

    /**
     * Gets taskName
     *
     * @return string|mixed
     */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
     * Sets taskName
     *
     * @param string|mixed $taskName taskName
     *
     * @return $this
     */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;

        return $this;
    }

    /**
     * Gets taskType
     *
     * @return \TencentAds\Model\TaskType|mixed
     */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
     * Sets taskType
     *
     * @param \TencentAds\Model\TaskType|mixed $taskType taskType
     *
     * @return $this
     */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;

        return $this;
    }

    /**
     * Gets taskScope
     *
     * @return \TencentAds\Model\TaskScope|mixed
     */
    public function getTaskScope()
    {
        return $this->container['taskScope'];
    }

    /**
     * Sets taskScope
     *
     * @param \TencentAds\Model\TaskScope|mixed $taskScope taskScope
     *
     * @return $this
     */
    public function setTaskScope($taskScope)
    {
        $this->container['taskScope'] = $taskScope;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \TencentAds\Model\TaskStatus|mixed
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \TencentAds\Model\TaskStatus|mixed $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets resultStatus
     *
     * @return \TencentAds\Model\TaskResultStatus|mixed
     */
    public function getResultStatus()
    {
        return $this->container['resultStatus'];
    }

    /**
     * Sets resultStatus
     *
     * @param \TencentAds\Model\TaskResultStatus|mixed $resultStatus resultStatus
     *
     * @return $this
     */
    public function setResultStatus($resultStatus)
    {
        $this->container['resultStatus'] = $resultStatus;

        return $this;
    }

    /**
     * Gets createdTime
     *
     * @return int|mixed
     */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
     * Sets createdTime
     *
     * @param int|mixed $createdTime createdTime
     *
     * @return $this
     */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return int|mixed
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param int|mixed $endTime endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets scopeObjectIdList
     *
     * @return int[]|mixed
     */
    public function getScopeObjectIdList()
    {
        return $this->container['scopeObjectIdList'];
    }

    /**
     * Sets scopeObjectIdList
     *
     * @param int[]|mixed $scopeObjectIdList scopeObjectIdList
     *
     * @return $this
     */
    public function setScopeObjectIdList($scopeObjectIdList)
    {
        $this->container['scopeObjectIdList'] = $scopeObjectIdList;

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


