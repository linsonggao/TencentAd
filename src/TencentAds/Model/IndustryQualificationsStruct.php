<?php
/**
 * IndustryQualificationsStruct
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
 * IndustryQualificationsStruct Class Doc Comment
 *
 * @category Class
 * @description 行业资质信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IndustryQualificationsStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'industry_qualifications_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'qualificationId' => 'int',
        'systemIndustryId' => 'int',
        'businessScopeId' => 'int',
        'qualificationCode' => 'string',
        'imageIdList' => 'string[]',
        'qualificationStatus' => '\TencentAds\Model\QualificationStatus',
        'expiredDate' => 'string',
        'rejectMessage' => 'string',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'qualificationId' => 'int64',
        'systemIndustryId' => 'int64',
        'businessScopeId' => 'int64',
        'qualificationCode' => null,
        'imageIdList' => null,
        'qualificationStatus' => null,
        'expiredDate' => null,
        'rejectMessage' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64'
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
        'qualificationId' => 'qualification_id',
        'systemIndustryId' => 'system_industry_id',
        'businessScopeId' => 'business_scope_id',
        'qualificationCode' => 'qualification_code',
        'imageIdList' => 'image_id_list',
        'qualificationStatus' => 'qualification_status',
        'expiredDate' => 'expired_date',
        'rejectMessage' => 'reject_message',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'qualificationId' => 'setQualificationId',
        'systemIndustryId' => 'setSystemIndustryId',
        'businessScopeId' => 'setBusinessScopeId',
        'qualificationCode' => 'setQualificationCode',
        'imageIdList' => 'setImageIdList',
        'qualificationStatus' => 'setQualificationStatus',
        'expiredDate' => 'setExpiredDate',
        'rejectMessage' => 'setRejectMessage',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'qualificationId' => 'getQualificationId',
        'systemIndustryId' => 'getSystemIndustryId',
        'businessScopeId' => 'getBusinessScopeId',
        'qualificationCode' => 'getQualificationCode',
        'imageIdList' => 'getImageIdList',
        'qualificationStatus' => 'getQualificationStatus',
        'expiredDate' => 'getExpiredDate',
        'rejectMessage' => 'getRejectMessage',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime'
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
        $this->container['qualificationId'] = isset($data['qualificationId']) ? $data['qualificationId'] : null;
        $this->container['systemIndustryId'] = isset($data['systemIndustryId']) ? $data['systemIndustryId'] : null;
        $this->container['businessScopeId'] = isset($data['businessScopeId']) ? $data['businessScopeId'] : null;
        $this->container['qualificationCode'] = isset($data['qualificationCode']) ? $data['qualificationCode'] : null;
        $this->container['imageIdList'] = isset($data['imageIdList']) ? $data['imageIdList'] : null;
        $this->container['qualificationStatus'] = isset($data['qualificationStatus']) ? $data['qualificationStatus'] : null;
        $this->container['expiredDate'] = isset($data['expiredDate']) ? $data['expiredDate'] : null;
        $this->container['rejectMessage'] = isset($data['rejectMessage']) ? $data['rejectMessage'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
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
     * Gets qualificationId
     *
     * @return int|mixed
     */
    public function getQualificationId()
    {
        return $this->container['qualificationId'];
    }

    /**
     * Sets qualificationId
     *
     * @param int|mixed $qualificationId qualificationId
     *
     * @return $this
     */
    public function setQualificationId($qualificationId)
    {
        $this->container['qualificationId'] = $qualificationId;

        return $this;
    }

    /**
     * Gets systemIndustryId
     *
     * @return int|mixed
     */
    public function getSystemIndustryId()
    {
        return $this->container['systemIndustryId'];
    }

    /**
     * Sets systemIndustryId
     *
     * @param int|mixed $systemIndustryId systemIndustryId
     *
     * @return $this
     */
    public function setSystemIndustryId($systemIndustryId)
    {
        $this->container['systemIndustryId'] = $systemIndustryId;

        return $this;
    }

    /**
     * Gets businessScopeId
     *
     * @return int|mixed
     */
    public function getBusinessScopeId()
    {
        return $this->container['businessScopeId'];
    }

    /**
     * Sets businessScopeId
     *
     * @param int|mixed $businessScopeId businessScopeId
     *
     * @return $this
     */
    public function setBusinessScopeId($businessScopeId)
    {
        $this->container['businessScopeId'] = $businessScopeId;

        return $this;
    }

    /**
     * Gets qualificationCode
     *
     * @return string|mixed
     */
    public function getQualificationCode()
    {
        return $this->container['qualificationCode'];
    }

    /**
     * Sets qualificationCode
     *
     * @param string|mixed $qualificationCode qualificationCode
     *
     * @return $this
     */
    public function setQualificationCode($qualificationCode)
    {
        $this->container['qualificationCode'] = $qualificationCode;

        return $this;
    }

    /**
     * Gets imageIdList
     *
     * @return string[]|mixed
     */
    public function getImageIdList()
    {
        return $this->container['imageIdList'];
    }

    /**
     * Sets imageIdList
     *
     * @param string[]|mixed $imageIdList imageIdList
     *
     * @return $this
     */
    public function setImageIdList($imageIdList)
    {
        $this->container['imageIdList'] = $imageIdList;

        return $this;
    }

    /**
     * Gets qualificationStatus
     *
     * @return \TencentAds\Model\QualificationStatus|mixed
     */
    public function getQualificationStatus()
    {
        return $this->container['qualificationStatus'];
    }

    /**
     * Sets qualificationStatus
     *
     * @param \TencentAds\Model\QualificationStatus|mixed $qualificationStatus qualificationStatus
     *
     * @return $this
     */
    public function setQualificationStatus($qualificationStatus)
    {
        $this->container['qualificationStatus'] = $qualificationStatus;

        return $this;
    }

    /**
     * Gets expiredDate
     *
     * @return string|mixed
     */
    public function getExpiredDate()
    {
        return $this->container['expiredDate'];
    }

    /**
     * Sets expiredDate
     *
     * @param string|mixed $expiredDate expiredDate
     *
     * @return $this
     */
    public function setExpiredDate($expiredDate)
    {
        $this->container['expiredDate'] = $expiredDate;

        return $this;
    }

    /**
     * Gets rejectMessage
     *
     * @return string|mixed
     */
    public function getRejectMessage()
    {
        return $this->container['rejectMessage'];
    }

    /**
     * Sets rejectMessage
     *
     * @param string|mixed $rejectMessage rejectMessage
     *
     * @return $this
     */
    public function setRejectMessage($rejectMessage)
    {
        $this->container['rejectMessage'] = $rejectMessage;

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
     * Gets lastModifiedTime
     *
     * @return int|mixed
     */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
     * Sets lastModifiedTime
     *
     * @param int|mixed $lastModifiedTime lastModifiedTime
     *
     * @return $this
     */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;

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


