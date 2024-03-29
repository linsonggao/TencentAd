<?php
/**
 * AdvertiserInfoSpecStruct
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
 * AdvertiserInfoSpecStruct Class Doc Comment
 *
 * @category Class
 * @description 关联的子客信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdvertiserInfoSpecStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'advertiser_info_spec_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'statusPreAuthorizationNumber' => 'int',
        'statusConfirmAuthorizationNumber' => 'int',
        'statusRequestCancelationNumber' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'statusPreAuthorizationNumber' => 'int64',
        'statusConfirmAuthorizationNumber' => 'int64',
        'statusRequestCancelationNumber' => 'int64'
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
        'statusPreAuthorizationNumber' => 'status_pre_authorization_number',
        'statusConfirmAuthorizationNumber' => 'status_confirm_authorization_number',
        'statusRequestCancelationNumber' => 'status_request_cancelation_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'statusPreAuthorizationNumber' => 'setStatusPreAuthorizationNumber',
        'statusConfirmAuthorizationNumber' => 'setStatusConfirmAuthorizationNumber',
        'statusRequestCancelationNumber' => 'setStatusRequestCancelationNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'statusPreAuthorizationNumber' => 'getStatusPreAuthorizationNumber',
        'statusConfirmAuthorizationNumber' => 'getStatusConfirmAuthorizationNumber',
        'statusRequestCancelationNumber' => 'getStatusRequestCancelationNumber'
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
        $this->container['statusPreAuthorizationNumber'] = isset($data['statusPreAuthorizationNumber']) ? $data['statusPreAuthorizationNumber'] : null;
        $this->container['statusConfirmAuthorizationNumber'] = isset($data['statusConfirmAuthorizationNumber']) ? $data['statusConfirmAuthorizationNumber'] : null;
        $this->container['statusRequestCancelationNumber'] = isset($data['statusRequestCancelationNumber']) ? $data['statusRequestCancelationNumber'] : null;
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
     * Gets statusPreAuthorizationNumber
     *
     * @return int|mixed
     */
    public function getStatusPreAuthorizationNumber()
    {
        return $this->container['statusPreAuthorizationNumber'];
    }

    /**
     * Sets statusPreAuthorizationNumber
     *
     * @param int|mixed $statusPreAuthorizationNumber statusPreAuthorizationNumber
     *
     * @return $this
     */
    public function setStatusPreAuthorizationNumber($statusPreAuthorizationNumber)
    {
        $this->container['statusPreAuthorizationNumber'] = $statusPreAuthorizationNumber;

        return $this;
    }

    /**
     * Gets statusConfirmAuthorizationNumber
     *
     * @return int|mixed
     */
    public function getStatusConfirmAuthorizationNumber()
    {
        return $this->container['statusConfirmAuthorizationNumber'];
    }

    /**
     * Sets statusConfirmAuthorizationNumber
     *
     * @param int|mixed $statusConfirmAuthorizationNumber statusConfirmAuthorizationNumber
     *
     * @return $this
     */
    public function setStatusConfirmAuthorizationNumber($statusConfirmAuthorizationNumber)
    {
        $this->container['statusConfirmAuthorizationNumber'] = $statusConfirmAuthorizationNumber;

        return $this;
    }

    /**
     * Gets statusRequestCancelationNumber
     *
     * @return int|mixed
     */
    public function getStatusRequestCancelationNumber()
    {
        return $this->container['statusRequestCancelationNumber'];
    }

    /**
     * Sets statusRequestCancelationNumber
     *
     * @param int|mixed $statusRequestCancelationNumber statusRequestCancelationNumber
     *
     * @return $this
     */
    public function setStatusRequestCancelationNumber($statusRequestCancelationNumber)
    {
        $this->container['statusRequestCancelationNumber'] = $statusRequestCancelationNumber;

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


