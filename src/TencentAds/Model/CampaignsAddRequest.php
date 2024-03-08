<?php
/**
 * CampaignsAddRequest
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
 * CampaignsAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignsAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CampaignsAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'campaignName' => 'string',
        'campaignType' => '\TencentAds\Model\CampaignType',
        'promotedObjectType' => '\TencentAds\Model\PromotedObjectType',
        'dailyBudget' => 'int',
        'totalBudget' => 'int',
        'configuredStatus' => '\TencentAds\Model\AdStatus',
        'speedMode' => '\TencentAds\Model\SpeedMode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'campaignName' => null,
        'campaignType' => null,
        'promotedObjectType' => null,
        'dailyBudget' => 'int64',
        'totalBudget' => 'int64',
        'configuredStatus' => null,
        'speedMode' => null
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
        'campaignName' => 'campaign_name',
        'campaignType' => 'campaign_type',
        'promotedObjectType' => 'promoted_object_type',
        'dailyBudget' => 'daily_budget',
        'totalBudget' => 'total_budget',
        'configuredStatus' => 'configured_status',
        'speedMode' => 'speed_mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'campaignName' => 'setCampaignName',
        'campaignType' => 'setCampaignType',
        'promotedObjectType' => 'setPromotedObjectType',
        'dailyBudget' => 'setDailyBudget',
        'totalBudget' => 'setTotalBudget',
        'configuredStatus' => 'setConfiguredStatus',
        'speedMode' => 'setSpeedMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'campaignName' => 'getCampaignName',
        'campaignType' => 'getCampaignType',
        'promotedObjectType' => 'getPromotedObjectType',
        'dailyBudget' => 'getDailyBudget',
        'totalBudget' => 'getTotalBudget',
        'configuredStatus' => 'getConfiguredStatus',
        'speedMode' => 'getSpeedMode'
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
        $this->container['campaignName'] = isset($data['campaignName']) ? $data['campaignName'] : null;
        $this->container['campaignType'] = isset($data['campaignType']) ? $data['campaignType'] : null;
        $this->container['promotedObjectType'] = isset($data['promotedObjectType']) ? $data['promotedObjectType'] : null;
        $this->container['dailyBudget'] = isset($data['dailyBudget']) ? $data['dailyBudget'] : null;
        $this->container['totalBudget'] = isset($data['totalBudget']) ? $data['totalBudget'] : null;
        $this->container['configuredStatus'] = isset($data['configuredStatus']) ? $data['configuredStatus'] : null;
        $this->container['speedMode'] = isset($data['speedMode']) ? $data['speedMode'] : null;
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
     * Gets campaignName
     *
     * @return string|mixed
     */
    public function getCampaignName()
    {
        return $this->container['campaignName'];
    }

    /**
     * Sets campaignName
     *
     * @param string|mixed $campaignName campaignName
     *
     * @return $this
     */
    public function setCampaignName($campaignName)
    {
        $this->container['campaignName'] = $campaignName;

        return $this;
    }

    /**
     * Gets campaignType
     *
     * @return \TencentAds\Model\CampaignType|mixed
     */
    public function getCampaignType()
    {
        return $this->container['campaignType'];
    }

    /**
     * Sets campaignType
     *
     * @param \TencentAds\Model\CampaignType|mixed $campaignType campaignType
     *
     * @return $this
     */
    public function setCampaignType($campaignType)
    {
        $this->container['campaignType'] = $campaignType;

        return $this;
    }

    /**
     * Gets promotedObjectType
     *
     * @return \TencentAds\Model\PromotedObjectType|mixed
     */
    public function getPromotedObjectType()
    {
        return $this->container['promotedObjectType'];
    }

    /**
     * Sets promotedObjectType
     *
     * @param \TencentAds\Model\PromotedObjectType|mixed $promotedObjectType promotedObjectType
     *
     * @return $this
     */
    public function setPromotedObjectType($promotedObjectType)
    {
        $this->container['promotedObjectType'] = $promotedObjectType;

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
     * Gets totalBudget
     *
     * @return int|mixed
     */
    public function getTotalBudget()
    {
        return $this->container['totalBudget'];
    }

    /**
     * Sets totalBudget
     *
     * @param int|mixed $totalBudget totalBudget
     *
     * @return $this
     */
    public function setTotalBudget($totalBudget)
    {
        $this->container['totalBudget'] = $totalBudget;

        return $this;
    }

    /**
     * Gets configuredStatus
     *
     * @return \TencentAds\Model\AdStatus|mixed
     */
    public function getConfiguredStatus()
    {
        return $this->container['configuredStatus'];
    }

    /**
     * Sets configuredStatus
     *
     * @param \TencentAds\Model\AdStatus|mixed $configuredStatus configuredStatus
     *
     * @return $this
     */
    public function setConfiguredStatus($configuredStatus)
    {
        $this->container['configuredStatus'] = $configuredStatus;

        return $this;
    }

    /**
     * Gets speedMode
     *
     * @return \TencentAds\Model\SpeedMode|mixed
     */
    public function getSpeedMode()
    {
        return $this->container['speedMode'];
    }

    /**
     * Sets speedMode
     *
     * @param \TencentAds\Model\SpeedMode|mixed $speedMode speedMode
     *
     * @return $this
     */
    public function setSpeedMode($speedMode)
    {
        $this->container['speedMode'] = $speedMode;

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


