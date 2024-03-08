<?php
/**
 * AdsGetListStruct
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
 * AdsGetListStruct Class Doc Comment
 *
 * @category Class
 * @description 返回结构
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdsGetListStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdsGetListStruct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'campaignId' => 'int',
        'adgroupId' => 'int',
        'adId' => 'int',
        'adName' => 'string',
        'adcreativeId' => 'int',
        'adcreative' => '\TencentAds\Model\Adcreative',
        'configuredStatus' => '\TencentAds\Model\AdStatus',
        'systemStatus' => '\TencentAds\Model\AdStatus',
        'auditSpec' => '\TencentAds\Model\AuditSpecStruct[]',
        'impressionTrackingUrl' => 'string',
        'clickTrackingUrl' => 'string',
        'feedsInteractionEnabled' => 'bool',
        'isDeleted' => 'bool',
        'isDynamicCreative' => 'bool',
        'createdTime' => 'int',
        'lastModifiedTime' => 'int',
        'rejectMessage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'campaignId' => 'int64',
        'adgroupId' => 'int64',
        'adId' => 'int64',
        'adName' => null,
        'adcreativeId' => 'int64',
        'adcreative' => null,
        'configuredStatus' => null,
        'systemStatus' => null,
        'auditSpec' => null,
        'impressionTrackingUrl' => null,
        'clickTrackingUrl' => null,
        'feedsInteractionEnabled' => null,
        'isDeleted' => null,
        'isDynamicCreative' => null,
        'createdTime' => 'int64',
        'lastModifiedTime' => 'int64',
        'rejectMessage' => null
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
        'campaignId' => 'campaign_id',
        'adgroupId' => 'adgroup_id',
        'adId' => 'ad_id',
        'adName' => 'ad_name',
        'adcreativeId' => 'adcreative_id',
        'adcreative' => 'adcreative',
        'configuredStatus' => 'configured_status',
        'systemStatus' => 'system_status',
        'auditSpec' => 'audit_spec',
        'impressionTrackingUrl' => 'impression_tracking_url',
        'clickTrackingUrl' => 'click_tracking_url',
        'feedsInteractionEnabled' => 'feeds_interaction_enabled',
        'isDeleted' => 'is_deleted',
        'isDynamicCreative' => 'is_dynamic_creative',
        'createdTime' => 'created_time',
        'lastModifiedTime' => 'last_modified_time',
        'rejectMessage' => 'reject_message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaignId' => 'setCampaignId',
        'adgroupId' => 'setAdgroupId',
        'adId' => 'setAdId',
        'adName' => 'setAdName',
        'adcreativeId' => 'setAdcreativeId',
        'adcreative' => 'setAdcreative',
        'configuredStatus' => 'setConfiguredStatus',
        'systemStatus' => 'setSystemStatus',
        'auditSpec' => 'setAuditSpec',
        'impressionTrackingUrl' => 'setImpressionTrackingUrl',
        'clickTrackingUrl' => 'setClickTrackingUrl',
        'feedsInteractionEnabled' => 'setFeedsInteractionEnabled',
        'isDeleted' => 'setIsDeleted',
        'isDynamicCreative' => 'setIsDynamicCreative',
        'createdTime' => 'setCreatedTime',
        'lastModifiedTime' => 'setLastModifiedTime',
        'rejectMessage' => 'setRejectMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaignId' => 'getCampaignId',
        'adgroupId' => 'getAdgroupId',
        'adId' => 'getAdId',
        'adName' => 'getAdName',
        'adcreativeId' => 'getAdcreativeId',
        'adcreative' => 'getAdcreative',
        'configuredStatus' => 'getConfiguredStatus',
        'systemStatus' => 'getSystemStatus',
        'auditSpec' => 'getAuditSpec',
        'impressionTrackingUrl' => 'getImpressionTrackingUrl',
        'clickTrackingUrl' => 'getClickTrackingUrl',
        'feedsInteractionEnabled' => 'getFeedsInteractionEnabled',
        'isDeleted' => 'getIsDeleted',
        'isDynamicCreative' => 'getIsDynamicCreative',
        'createdTime' => 'getCreatedTime',
        'lastModifiedTime' => 'getLastModifiedTime',
        'rejectMessage' => 'getRejectMessage'
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
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['adgroupId'] = isset($data['adgroupId']) ? $data['adgroupId'] : null;
        $this->container['adId'] = isset($data['adId']) ? $data['adId'] : null;
        $this->container['adName'] = isset($data['adName']) ? $data['adName'] : null;
        $this->container['adcreativeId'] = isset($data['adcreativeId']) ? $data['adcreativeId'] : null;
        $this->container['adcreative'] = isset($data['adcreative']) ? $data['adcreative'] : null;
        $this->container['configuredStatus'] = isset($data['configuredStatus']) ? $data['configuredStatus'] : null;
        $this->container['systemStatus'] = isset($data['systemStatus']) ? $data['systemStatus'] : null;
        $this->container['auditSpec'] = isset($data['auditSpec']) ? $data['auditSpec'] : null;
        $this->container['impressionTrackingUrl'] = isset($data['impressionTrackingUrl']) ? $data['impressionTrackingUrl'] : null;
        $this->container['clickTrackingUrl'] = isset($data['clickTrackingUrl']) ? $data['clickTrackingUrl'] : null;
        $this->container['feedsInteractionEnabled'] = isset($data['feedsInteractionEnabled']) ? $data['feedsInteractionEnabled'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['isDynamicCreative'] = isset($data['isDynamicCreative']) ? $data['isDynamicCreative'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['rejectMessage'] = isset($data['rejectMessage']) ? $data['rejectMessage'] : null;
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
     * Gets campaignId
     *
     * @return int|mixed
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param int|mixed $campaignId campaignId
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets adgroupId
     *
     * @return int|mixed
     */
    public function getAdgroupId()
    {
        return $this->container['adgroupId'];
    }

    /**
     * Sets adgroupId
     *
     * @param int|mixed $adgroupId adgroupId
     *
     * @return $this
     */
    public function setAdgroupId($adgroupId)
    {
        $this->container['adgroupId'] = $adgroupId;

        return $this;
    }

    /**
     * Gets adId
     *
     * @return int|mixed
     */
    public function getAdId()
    {
        return $this->container['adId'];
    }

    /**
     * Sets adId
     *
     * @param int|mixed $adId adId
     *
     * @return $this
     */
    public function setAdId($adId)
    {
        $this->container['adId'] = $adId;

        return $this;
    }

    /**
     * Gets adName
     *
     * @return string|mixed
     */
    public function getAdName()
    {
        return $this->container['adName'];
    }

    /**
     * Sets adName
     *
     * @param string|mixed $adName adName
     *
     * @return $this
     */
    public function setAdName($adName)
    {
        $this->container['adName'] = $adName;

        return $this;
    }

    /**
     * Gets adcreativeId
     *
     * @return int|mixed
     */
    public function getAdcreativeId()
    {
        return $this->container['adcreativeId'];
    }

    /**
     * Sets adcreativeId
     *
     * @param int|mixed $adcreativeId adcreativeId
     *
     * @return $this
     */
    public function setAdcreativeId($adcreativeId)
    {
        $this->container['adcreativeId'] = $adcreativeId;

        return $this;
    }

    /**
     * Gets adcreative
     *
     * @return \TencentAds\Model\Adcreative|mixed
     */
    public function getAdcreative()
    {
        return $this->container['adcreative'];
    }

    /**
     * Sets adcreative
     *
     * @param \TencentAds\Model\Adcreative|mixed $adcreative adcreative
     *
     * @return $this
     */
    public function setAdcreative($adcreative)
    {
        $this->container['adcreative'] = $adcreative;

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
     * Gets systemStatus
     *
     * @return \TencentAds\Model\AdStatus|mixed
     */
    public function getSystemStatus()
    {
        return $this->container['systemStatus'];
    }

    /**
     * Sets systemStatus
     *
     * @param \TencentAds\Model\AdStatus|mixed $systemStatus systemStatus
     *
     * @return $this
     */
    public function setSystemStatus($systemStatus)
    {
        $this->container['systemStatus'] = $systemStatus;

        return $this;
    }

    /**
     * Gets auditSpec
     *
     * @return \TencentAds\Model\AuditSpecStruct[]|mixed
     */
    public function getAuditSpec()
    {
        return $this->container['auditSpec'];
    }

    /**
     * Sets auditSpec
     *
     * @param \TencentAds\Model\AuditSpecStruct[]|mixed $auditSpec auditSpec
     *
     * @return $this
     */
    public function setAuditSpec($auditSpec)
    {
        $this->container['auditSpec'] = $auditSpec;

        return $this;
    }

    /**
     * Gets impressionTrackingUrl
     *
     * @return string|mixed
     */
    public function getImpressionTrackingUrl()
    {
        return $this->container['impressionTrackingUrl'];
    }

    /**
     * Sets impressionTrackingUrl
     *
     * @param string|mixed $impressionTrackingUrl impressionTrackingUrl
     *
     * @return $this
     */
    public function setImpressionTrackingUrl($impressionTrackingUrl)
    {
        $this->container['impressionTrackingUrl'] = $impressionTrackingUrl;

        return $this;
    }

    /**
     * Gets clickTrackingUrl
     *
     * @return string|mixed
     */
    public function getClickTrackingUrl()
    {
        return $this->container['clickTrackingUrl'];
    }

    /**
     * Sets clickTrackingUrl
     *
     * @param string|mixed $clickTrackingUrl clickTrackingUrl
     *
     * @return $this
     */
    public function setClickTrackingUrl($clickTrackingUrl)
    {
        $this->container['clickTrackingUrl'] = $clickTrackingUrl;

        return $this;
    }

    /**
     * Gets feedsInteractionEnabled
     *
     * @return bool|mixed
     */
    public function getFeedsInteractionEnabled()
    {
        return $this->container['feedsInteractionEnabled'];
    }

    /**
     * Sets feedsInteractionEnabled
     *
     * @param bool|mixed $feedsInteractionEnabled feedsInteractionEnabled
     *
     * @return $this
     */
    public function setFeedsInteractionEnabled($feedsInteractionEnabled)
    {
        $this->container['feedsInteractionEnabled'] = $feedsInteractionEnabled;

        return $this;
    }

    /**
     * Gets isDeleted
     *
     * @return bool|mixed
     */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
     * Sets isDeleted
     *
     * @param bool|mixed $isDeleted isDeleted
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;

        return $this;
    }

    /**
     * Gets isDynamicCreative
     *
     * @return bool|mixed
     */
    public function getIsDynamicCreative()
    {
        return $this->container['isDynamicCreative'];
    }

    /**
     * Sets isDynamicCreative
     *
     * @param bool|mixed $isDynamicCreative isDynamicCreative
     *
     * @return $this
     */
    public function setIsDynamicCreative($isDynamicCreative)
    {
        $this->container['isDynamicCreative'] = $isDynamicCreative;

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


