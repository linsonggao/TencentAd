<?php
/**
 * WechatAdvertiserDetailGetListStruct
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
 * WechatAdvertiserDetailGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatAdvertiserDetailGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WechatAdvertiserDetailGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'wechatAccountName' => 'string',
        'systemIndustryId' => 'int',
        'wechatAccountId' => 'string',
        'accountType' => '\TencentAds\Model\WechatAdvertiserAccountType',
        'corporationName' => 'string',
        'authStatus' => '\TencentAds\Model\WechatAuthStatus',
        'authTime' => 'int',
        'agencyIdList' => 'int[]',
        'staffWechatIdList' => 'string[]',
        'dailyBudget' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'wechatAccountName' => null,
        'systemIndustryId' => 'int64',
        'wechatAccountId' => null,
        'accountType' => null,
        'corporationName' => null,
        'authStatus' => null,
        'authTime' => 'int64',
        'agencyIdList' => 'int64',
        'staffWechatIdList' => null,
        'dailyBudget' => 'int64'
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
        'wechatAccountName' => 'wechat_account_name',
        'systemIndustryId' => 'system_industry_id',
        'wechatAccountId' => 'wechat_account_id',
        'accountType' => 'account_type',
        'corporationName' => 'corporation_name',
        'authStatus' => 'auth_status',
        'authTime' => 'auth_time',
        'agencyIdList' => 'agency_id_list',
        'staffWechatIdList' => 'staff_wechat_id_list',
        'dailyBudget' => 'daily_budget'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'wechatAccountName' => 'setWechatAccountName',
        'systemIndustryId' => 'setSystemIndustryId',
        'wechatAccountId' => 'setWechatAccountId',
        'accountType' => 'setAccountType',
        'corporationName' => 'setCorporationName',
        'authStatus' => 'setAuthStatus',
        'authTime' => 'setAuthTime',
        'agencyIdList' => 'setAgencyIdList',
        'staffWechatIdList' => 'setStaffWechatIdList',
        'dailyBudget' => 'setDailyBudget'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'wechatAccountName' => 'getWechatAccountName',
        'systemIndustryId' => 'getSystemIndustryId',
        'wechatAccountId' => 'getWechatAccountId',
        'accountType' => 'getAccountType',
        'corporationName' => 'getCorporationName',
        'authStatus' => 'getAuthStatus',
        'authTime' => 'getAuthTime',
        'agencyIdList' => 'getAgencyIdList',
        'staffWechatIdList' => 'getStaffWechatIdList',
        'dailyBudget' => 'getDailyBudget'
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
        $this->container['wechatAccountName'] = isset($data['wechatAccountName']) ? $data['wechatAccountName'] : null;
        $this->container['systemIndustryId'] = isset($data['systemIndustryId']) ? $data['systemIndustryId'] : null;
        $this->container['wechatAccountId'] = isset($data['wechatAccountId']) ? $data['wechatAccountId'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
        $this->container['corporationName'] = isset($data['corporationName']) ? $data['corporationName'] : null;
        $this->container['authStatus'] = isset($data['authStatus']) ? $data['authStatus'] : null;
        $this->container['authTime'] = isset($data['authTime']) ? $data['authTime'] : null;
        $this->container['agencyIdList'] = isset($data['agencyIdList']) ? $data['agencyIdList'] : null;
        $this->container['staffWechatIdList'] = isset($data['staffWechatIdList']) ? $data['staffWechatIdList'] : null;
        $this->container['dailyBudget'] = isset($data['dailyBudget']) ? $data['dailyBudget'] : null;
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
     * Gets wechatAccountName
     *
     * @return string|mixed
     */
    public function getWechatAccountName()
    {
        return $this->container['wechatAccountName'];
    }

    /**
     * Sets wechatAccountName
     *
     * @param string|mixed $wechatAccountName wechatAccountName
     *
     * @return $this
     */
    public function setWechatAccountName($wechatAccountName)
    {
        $this->container['wechatAccountName'] = $wechatAccountName;

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
     * Gets wechatAccountId
     *
     * @return string|mixed
     */
    public function getWechatAccountId()
    {
        return $this->container['wechatAccountId'];
    }

    /**
     * Sets wechatAccountId
     *
     * @param string|mixed $wechatAccountId wechatAccountId
     *
     * @return $this
     */
    public function setWechatAccountId($wechatAccountId)
    {
        $this->container['wechatAccountId'] = $wechatAccountId;

        return $this;
    }

    /**
     * Gets accountType
     *
     * @return \TencentAds\Model\WechatAdvertiserAccountType|mixed
     */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
     * Sets accountType
     *
     * @param \TencentAds\Model\WechatAdvertiserAccountType|mixed $accountType accountType
     *
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;

        return $this;
    }

    /**
     * Gets corporationName
     *
     * @return string|mixed
     */
    public function getCorporationName()
    {
        return $this->container['corporationName'];
    }

    /**
     * Sets corporationName
     *
     * @param string|mixed $corporationName corporationName
     *
     * @return $this
     */
    public function setCorporationName($corporationName)
    {
        $this->container['corporationName'] = $corporationName;

        return $this;
    }

    /**
     * Gets authStatus
     *
     * @return \TencentAds\Model\WechatAuthStatus|mixed
     */
    public function getAuthStatus()
    {
        return $this->container['authStatus'];
    }

    /**
     * Sets authStatus
     *
     * @param \TencentAds\Model\WechatAuthStatus|mixed $authStatus authStatus
     *
     * @return $this
     */
    public function setAuthStatus($authStatus)
    {
        $this->container['authStatus'] = $authStatus;

        return $this;
    }

    /**
     * Gets authTime
     *
     * @return int|mixed
     */
    public function getAuthTime()
    {
        return $this->container['authTime'];
    }

    /**
     * Sets authTime
     *
     * @param int|mixed $authTime authTime
     *
     * @return $this
     */
    public function setAuthTime($authTime)
    {
        $this->container['authTime'] = $authTime;

        return $this;
    }

    /**
     * Gets agencyIdList
     *
     * @return int[]|mixed
     */
    public function getAgencyIdList()
    {
        return $this->container['agencyIdList'];
    }

    /**
     * Sets agencyIdList
     *
     * @param int[]|mixed $agencyIdList agencyIdList
     *
     * @return $this
     */
    public function setAgencyIdList($agencyIdList)
    {
        $this->container['agencyIdList'] = $agencyIdList;

        return $this;
    }

    /**
     * Gets staffWechatIdList
     *
     * @return string[]|mixed
     */
    public function getStaffWechatIdList()
    {
        return $this->container['staffWechatIdList'];
    }

    /**
     * Sets staffWechatIdList
     *
     * @param string[]|mixed $staffWechatIdList staffWechatIdList
     *
     * @return $this
     */
    public function setStaffWechatIdList($staffWechatIdList)
    {
        $this->container['staffWechatIdList'] = $staffWechatIdList;

        return $this;
    }

    /**
     * Gets dailyBudget
     *
     * @return int|mixed
     */
    public function getDailyBudget()
    {
        return $this->container['dailyBudget'];
    }

    /**
     * Sets dailyBudget
     *
     * @param int|mixed $dailyBudget dailyBudget
     *
     * @return $this
     */
    public function setDailyBudget($dailyBudget)
    {
        $this->container['dailyBudget'] = $dailyBudget;

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

