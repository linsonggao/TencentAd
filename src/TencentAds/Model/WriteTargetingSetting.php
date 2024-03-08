<?php
/**
 * WriteTargetingSetting
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
 * WriteTargetingSetting Class Doc Comment
 *
 * @category Class
 * @description 定向详细设置
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WriteTargetingSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'write_targeting_setting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'age' => '\TencentAds\Model\AgeStruct[]',
        'gender' => 'string[]',
        'education' => 'string[]',
        'maritalStatus' => 'string[]',
        'geoLocation' => '\TencentAds\Model\GeoLocations',
        'userOs' => 'string[]',
        'devicePrice' => 'string[]',
        'deviceBrandModel' => '\TencentAds\Model\DeviceBrandModel',
        'networkType' => 'string[]',
        'networkOperator' => 'string[]',
        'appInstallStatus' => 'string[]',
        'consumptionStatus' => 'string[]',
        'gameConsumptionLevel' => 'string[]',
        'financialSituation' => 'string[]',
        'wechatAdBehavior' => '\TencentAds\Model\WechatAdBehavior',
        'customAudience' => 'int[]',
        'excludedCustomAudience' => 'int[]',
        'behaviorOrInterest' => '\TencentAds\Model\BehaviorOrInterest',
        'excludedConvertedAudience' => '\TencentAds\Model\ExcludedConvertedAudience'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'age' => null,
        'gender' => null,
        'education' => null,
        'maritalStatus' => null,
        'geoLocation' => null,
        'userOs' => null,
        'devicePrice' => null,
        'deviceBrandModel' => null,
        'networkType' => null,
        'networkOperator' => null,
        'appInstallStatus' => null,
        'consumptionStatus' => null,
        'gameConsumptionLevel' => null,
        'financialSituation' => null,
        'wechatAdBehavior' => null,
        'customAudience' => 'int64',
        'excludedCustomAudience' => 'int64',
        'behaviorOrInterest' => null,
        'excludedConvertedAudience' => null
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
        'age' => 'age',
        'gender' => 'gender',
        'education' => 'education',
        'maritalStatus' => 'marital_status',
        'geoLocation' => 'geo_location',
        'userOs' => 'user_os',
        'devicePrice' => 'device_price',
        'deviceBrandModel' => 'device_brand_model',
        'networkType' => 'network_type',
        'networkOperator' => 'network_operator',
        'appInstallStatus' => 'app_install_status',
        'consumptionStatus' => 'consumption_status',
        'gameConsumptionLevel' => 'game_consumption_level',
        'financialSituation' => 'financial_situation',
        'wechatAdBehavior' => 'wechat_ad_behavior',
        'customAudience' => 'custom_audience',
        'excludedCustomAudience' => 'excluded_custom_audience',
        'behaviorOrInterest' => 'behavior_or_interest',
        'excludedConvertedAudience' => 'excluded_converted_audience'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'age' => 'setAge',
        'gender' => 'setGender',
        'education' => 'setEducation',
        'maritalStatus' => 'setMaritalStatus',
        'geoLocation' => 'setGeoLocation',
        'userOs' => 'setUserOs',
        'devicePrice' => 'setDevicePrice',
        'deviceBrandModel' => 'setDeviceBrandModel',
        'networkType' => 'setNetworkType',
        'networkOperator' => 'setNetworkOperator',
        'appInstallStatus' => 'setAppInstallStatus',
        'consumptionStatus' => 'setConsumptionStatus',
        'gameConsumptionLevel' => 'setGameConsumptionLevel',
        'financialSituation' => 'setFinancialSituation',
        'wechatAdBehavior' => 'setWechatAdBehavior',
        'customAudience' => 'setCustomAudience',
        'excludedCustomAudience' => 'setExcludedCustomAudience',
        'behaviorOrInterest' => 'setBehaviorOrInterest',
        'excludedConvertedAudience' => 'setExcludedConvertedAudience'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'age' => 'getAge',
        'gender' => 'getGender',
        'education' => 'getEducation',
        'maritalStatus' => 'getMaritalStatus',
        'geoLocation' => 'getGeoLocation',
        'userOs' => 'getUserOs',
        'devicePrice' => 'getDevicePrice',
        'deviceBrandModel' => 'getDeviceBrandModel',
        'networkType' => 'getNetworkType',
        'networkOperator' => 'getNetworkOperator',
        'appInstallStatus' => 'getAppInstallStatus',
        'consumptionStatus' => 'getConsumptionStatus',
        'gameConsumptionLevel' => 'getGameConsumptionLevel',
        'financialSituation' => 'getFinancialSituation',
        'wechatAdBehavior' => 'getWechatAdBehavior',
        'customAudience' => 'getCustomAudience',
        'excludedCustomAudience' => 'getExcludedCustomAudience',
        'behaviorOrInterest' => 'getBehaviorOrInterest',
        'excludedConvertedAudience' => 'getExcludedConvertedAudience'
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
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['education'] = isset($data['education']) ? $data['education'] : null;
        $this->container['maritalStatus'] = isset($data['maritalStatus']) ? $data['maritalStatus'] : null;
        $this->container['geoLocation'] = isset($data['geoLocation']) ? $data['geoLocation'] : null;
        $this->container['userOs'] = isset($data['userOs']) ? $data['userOs'] : null;
        $this->container['devicePrice'] = isset($data['devicePrice']) ? $data['devicePrice'] : null;
        $this->container['deviceBrandModel'] = isset($data['deviceBrandModel']) ? $data['deviceBrandModel'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['networkOperator'] = isset($data['networkOperator']) ? $data['networkOperator'] : null;
        $this->container['appInstallStatus'] = isset($data['appInstallStatus']) ? $data['appInstallStatus'] : null;
        $this->container['consumptionStatus'] = isset($data['consumptionStatus']) ? $data['consumptionStatus'] : null;
        $this->container['gameConsumptionLevel'] = isset($data['gameConsumptionLevel']) ? $data['gameConsumptionLevel'] : null;
        $this->container['financialSituation'] = isset($data['financialSituation']) ? $data['financialSituation'] : null;
        $this->container['wechatAdBehavior'] = isset($data['wechatAdBehavior']) ? $data['wechatAdBehavior'] : null;
        $this->container['customAudience'] = isset($data['customAudience']) ? $data['customAudience'] : null;
        $this->container['excludedCustomAudience'] = isset($data['excludedCustomAudience']) ? $data['excludedCustomAudience'] : null;
        $this->container['behaviorOrInterest'] = isset($data['behaviorOrInterest']) ? $data['behaviorOrInterest'] : null;
        $this->container['excludedConvertedAudience'] = isset($data['excludedConvertedAudience']) ? $data['excludedConvertedAudience'] : null;
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
     * Gets age
     *
     * @return \TencentAds\Model\AgeStruct[]|mixed
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param \TencentAds\Model\AgeStruct[]|mixed $age age
     *
     * @return $this
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string[]|mixed
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string[]|mixed $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets education
     *
     * @return string[]|mixed
     */
    public function getEducation()
    {
        return $this->container['education'];
    }

    /**
     * Sets education
     *
     * @param string[]|mixed $education education
     *
     * @return $this
     */
    public function setEducation($education)
    {
        $this->container['education'] = $education;

        return $this;
    }

    /**
     * Gets maritalStatus
     *
     * @return string[]|mixed
     */
    public function getMaritalStatus()
    {
        return $this->container['maritalStatus'];
    }

    /**
     * Sets maritalStatus
     *
     * @param string[]|mixed $maritalStatus maritalStatus
     *
     * @return $this
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->container['maritalStatus'] = $maritalStatus;

        return $this;
    }

    /**
     * Gets geoLocation
     *
     * @return \TencentAds\Model\GeoLocations|mixed
     */
    public function getGeoLocation()
    {
        return $this->container['geoLocation'];
    }

    /**
     * Sets geoLocation
     *
     * @param \TencentAds\Model\GeoLocations|mixed $geoLocation geoLocation
     *
     * @return $this
     */
    public function setGeoLocation($geoLocation)
    {
        $this->container['geoLocation'] = $geoLocation;

        return $this;
    }

    /**
     * Gets userOs
     *
     * @return string[]|mixed
     */
    public function getUserOs()
    {
        return $this->container['userOs'];
    }

    /**
     * Sets userOs
     *
     * @param string[]|mixed $userOs userOs
     *
     * @return $this
     */
    public function setUserOs($userOs)
    {
        $this->container['userOs'] = $userOs;

        return $this;
    }

    /**
     * Gets devicePrice
     *
     * @return string[]|mixed
     */
    public function getDevicePrice()
    {
        return $this->container['devicePrice'];
    }

    /**
     * Sets devicePrice
     *
     * @param string[]|mixed $devicePrice devicePrice
     *
     * @return $this
     */
    public function setDevicePrice($devicePrice)
    {
        $this->container['devicePrice'] = $devicePrice;

        return $this;
    }

    /**
     * Gets deviceBrandModel
     *
     * @return \TencentAds\Model\DeviceBrandModel|mixed
     */
    public function getDeviceBrandModel()
    {
        return $this->container['deviceBrandModel'];
    }

    /**
     * Sets deviceBrandModel
     *
     * @param \TencentAds\Model\DeviceBrandModel|mixed $deviceBrandModel deviceBrandModel
     *
     * @return $this
     */
    public function setDeviceBrandModel($deviceBrandModel)
    {
        $this->container['deviceBrandModel'] = $deviceBrandModel;

        return $this;
    }

    /**
     * Gets networkType
     *
     * @return string[]|mixed
     */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
     * Sets networkType
     *
     * @param string[]|mixed $networkType networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;

        return $this;
    }

    /**
     * Gets networkOperator
     *
     * @return string[]|mixed
     */
    public function getNetworkOperator()
    {
        return $this->container['networkOperator'];
    }

    /**
     * Sets networkOperator
     *
     * @param string[]|mixed $networkOperator networkOperator
     *
     * @return $this
     */
    public function setNetworkOperator($networkOperator)
    {
        $this->container['networkOperator'] = $networkOperator;

        return $this;
    }

    /**
     * Gets appInstallStatus
     *
     * @return string[]|mixed
     */
    public function getAppInstallStatus()
    {
        return $this->container['appInstallStatus'];
    }

    /**
     * Sets appInstallStatus
     *
     * @param string[]|mixed $appInstallStatus appInstallStatus
     *
     * @return $this
     */
    public function setAppInstallStatus($appInstallStatus)
    {
        $this->container['appInstallStatus'] = $appInstallStatus;

        return $this;
    }

    /**
     * Gets consumptionStatus
     *
     * @return string[]|mixed
     */
    public function getConsumptionStatus()
    {
        return $this->container['consumptionStatus'];
    }

    /**
     * Sets consumptionStatus
     *
     * @param string[]|mixed $consumptionStatus consumptionStatus
     *
     * @return $this
     */
    public function setConsumptionStatus($consumptionStatus)
    {
        $this->container['consumptionStatus'] = $consumptionStatus;

        return $this;
    }

    /**
     * Gets gameConsumptionLevel
     *
     * @return string[]|mixed
     */
    public function getGameConsumptionLevel()
    {
        return $this->container['gameConsumptionLevel'];
    }

    /**
     * Sets gameConsumptionLevel
     *
     * @param string[]|mixed $gameConsumptionLevel gameConsumptionLevel
     *
     * @return $this
     */
    public function setGameConsumptionLevel($gameConsumptionLevel)
    {
        $this->container['gameConsumptionLevel'] = $gameConsumptionLevel;

        return $this;
    }

    /**
     * Gets financialSituation
     *
     * @return string[]|mixed
     */
    public function getFinancialSituation()
    {
        return $this->container['financialSituation'];
    }

    /**
     * Sets financialSituation
     *
     * @param string[]|mixed $financialSituation financialSituation
     *
     * @return $this
     */
    public function setFinancialSituation($financialSituation)
    {
        $this->container['financialSituation'] = $financialSituation;

        return $this;
    }

    /**
     * Gets wechatAdBehavior
     *
     * @return \TencentAds\Model\WechatAdBehavior|mixed
     */
    public function getWechatAdBehavior()
    {
        return $this->container['wechatAdBehavior'];
    }

    /**
     * Sets wechatAdBehavior
     *
     * @param \TencentAds\Model\WechatAdBehavior|mixed $wechatAdBehavior wechatAdBehavior
     *
     * @return $this
     */
    public function setWechatAdBehavior($wechatAdBehavior)
    {
        $this->container['wechatAdBehavior'] = $wechatAdBehavior;

        return $this;
    }

    /**
     * Gets customAudience
     *
     * @return int[]|mixed
     */
    public function getCustomAudience()
    {
        return $this->container['customAudience'];
    }

    /**
     * Sets customAudience
     *
     * @param int[]|mixed $customAudience customAudience
     *
     * @return $this
     */
    public function setCustomAudience($customAudience)
    {
        $this->container['customAudience'] = $customAudience;

        return $this;
    }

    /**
     * Gets excludedCustomAudience
     *
     * @return int[]|mixed
     */
    public function getExcludedCustomAudience()
    {
        return $this->container['excludedCustomAudience'];
    }

    /**
     * Sets excludedCustomAudience
     *
     * @param int[]|mixed $excludedCustomAudience excludedCustomAudience
     *
     * @return $this
     */
    public function setExcludedCustomAudience($excludedCustomAudience)
    {
        $this->container['excludedCustomAudience'] = $excludedCustomAudience;

        return $this;
    }

    /**
     * Gets behaviorOrInterest
     *
     * @return \TencentAds\Model\BehaviorOrInterest|mixed
     */
    public function getBehaviorOrInterest()
    {
        return $this->container['behaviorOrInterest'];
    }

    /**
     * Sets behaviorOrInterest
     *
     * @param \TencentAds\Model\BehaviorOrInterest|mixed $behaviorOrInterest behaviorOrInterest
     *
     * @return $this
     */
    public function setBehaviorOrInterest($behaviorOrInterest)
    {
        $this->container['behaviorOrInterest'] = $behaviorOrInterest;

        return $this;
    }

    /**
     * Gets excludedConvertedAudience
     *
     * @return \TencentAds\Model\ExcludedConvertedAudience|mixed
     */
    public function getExcludedConvertedAudience()
    {
        return $this->container['excludedConvertedAudience'];
    }

    /**
     * Sets excludedConvertedAudience
     *
     * @param \TencentAds\Model\ExcludedConvertedAudience|mixed $excludedConvertedAudience excludedConvertedAudience
     *
     * @return $this
     */
    public function setExcludedConvertedAudience($excludedConvertedAudience)
    {
        $this->container['excludedConvertedAudience'] = $excludedConvertedAudience;

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

