<?php
/**
 * AdvertiserUpdateRequest
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
 * AdvertiserUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdvertiserUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdvertiserUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'dailyBudget' => 'int',
        'systemIndustryId' => 'int',
        'corporationName' => 'string',
        'certificationImageId' => 'string',
        'corporateImageName' => 'string',
        'individualQualification' => '\TencentAds\Model\IndividualQualification',
        'introductionUrl' => 'string',
        'contactPersonTelephone' => 'string',
        'contactPersonMobile' => 'string',
        'wechatSpec' => '\TencentAds\Model\MpInfoUpdate',
        'websites' => '\TencentAds\Model\WebsiteUpdateStruct[]',
        'areaCode' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'dailyBudget' => 'int64',
        'systemIndustryId' => 'int64',
        'corporationName' => null,
        'certificationImageId' => null,
        'corporateImageName' => null,
        'individualQualification' => null,
        'introductionUrl' => null,
        'contactPersonTelephone' => null,
        'contactPersonMobile' => null,
        'wechatSpec' => null,
        'websites' => null,
        'areaCode' => 'int64'
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
        'dailyBudget' => 'daily_budget',
        'systemIndustryId' => 'system_industry_id',
        'corporationName' => 'corporation_name',
        'certificationImageId' => 'certification_image_id',
        'corporateImageName' => 'corporate_image_name',
        'individualQualification' => 'individual_qualification',
        'introductionUrl' => 'introduction_url',
        'contactPersonTelephone' => 'contact_person_telephone',
        'contactPersonMobile' => 'contact_person_mobile',
        'wechatSpec' => 'wechat_spec',
        'websites' => 'websites',
        'areaCode' => 'area_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'dailyBudget' => 'setDailyBudget',
        'systemIndustryId' => 'setSystemIndustryId',
        'corporationName' => 'setCorporationName',
        'certificationImageId' => 'setCertificationImageId',
        'corporateImageName' => 'setCorporateImageName',
        'individualQualification' => 'setIndividualQualification',
        'introductionUrl' => 'setIntroductionUrl',
        'contactPersonTelephone' => 'setContactPersonTelephone',
        'contactPersonMobile' => 'setContactPersonMobile',
        'wechatSpec' => 'setWechatSpec',
        'websites' => 'setWebsites',
        'areaCode' => 'setAreaCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'dailyBudget' => 'getDailyBudget',
        'systemIndustryId' => 'getSystemIndustryId',
        'corporationName' => 'getCorporationName',
        'certificationImageId' => 'getCertificationImageId',
        'corporateImageName' => 'getCorporateImageName',
        'individualQualification' => 'getIndividualQualification',
        'introductionUrl' => 'getIntroductionUrl',
        'contactPersonTelephone' => 'getContactPersonTelephone',
        'contactPersonMobile' => 'getContactPersonMobile',
        'wechatSpec' => 'getWechatSpec',
        'websites' => 'getWebsites',
        'areaCode' => 'getAreaCode'
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
        $this->container['dailyBudget'] = isset($data['dailyBudget']) ? $data['dailyBudget'] : null;
        $this->container['systemIndustryId'] = isset($data['systemIndustryId']) ? $data['systemIndustryId'] : null;
        $this->container['corporationName'] = isset($data['corporationName']) ? $data['corporationName'] : null;
        $this->container['certificationImageId'] = isset($data['certificationImageId']) ? $data['certificationImageId'] : null;
        $this->container['corporateImageName'] = isset($data['corporateImageName']) ? $data['corporateImageName'] : null;
        $this->container['individualQualification'] = isset($data['individualQualification']) ? $data['individualQualification'] : null;
        $this->container['introductionUrl'] = isset($data['introductionUrl']) ? $data['introductionUrl'] : null;
        $this->container['contactPersonTelephone'] = isset($data['contactPersonTelephone']) ? $data['contactPersonTelephone'] : null;
        $this->container['contactPersonMobile'] = isset($data['contactPersonMobile']) ? $data['contactPersonMobile'] : null;
        $this->container['wechatSpec'] = isset($data['wechatSpec']) ? $data['wechatSpec'] : null;
        $this->container['websites'] = isset($data['websites']) ? $data['websites'] : null;
        $this->container['areaCode'] = isset($data['areaCode']) ? $data['areaCode'] : null;
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
     * Gets certificationImageId
     *
     * @return string|mixed
     */
    public function getCertificationImageId()
    {
        return $this->container['certificationImageId'];
    }

    /**
     * Sets certificationImageId
     *
     * @param string|mixed $certificationImageId certificationImageId
     *
     * @return $this
     */
    public function setCertificationImageId($certificationImageId)
    {
        $this->container['certificationImageId'] = $certificationImageId;

        return $this;
    }

    /**
     * Gets corporateImageName
     *
     * @return string|mixed
     */
    public function getCorporateImageName()
    {
        return $this->container['corporateImageName'];
    }

    /**
     * Sets corporateImageName
     *
     * @param string|mixed $corporateImageName corporateImageName
     *
     * @return $this
     */
    public function setCorporateImageName($corporateImageName)
    {
        $this->container['corporateImageName'] = $corporateImageName;

        return $this;
    }

    /**
     * Gets individualQualification
     *
     * @return \TencentAds\Model\IndividualQualification|mixed
     */
    public function getIndividualQualification()
    {
        return $this->container['individualQualification'];
    }

    /**
     * Sets individualQualification
     *
     * @param \TencentAds\Model\IndividualQualification|mixed $individualQualification individualQualification
     *
     * @return $this
     */
    public function setIndividualQualification($individualQualification)
    {
        $this->container['individualQualification'] = $individualQualification;

        return $this;
    }

    /**
     * Gets introductionUrl
     *
     * @return string|mixed
     */
    public function getIntroductionUrl()
    {
        return $this->container['introductionUrl'];
    }

    /**
     * Sets introductionUrl
     *
     * @param string|mixed $introductionUrl introductionUrl
     *
     * @return $this
     */
    public function setIntroductionUrl($introductionUrl)
    {
        $this->container['introductionUrl'] = $introductionUrl;

        return $this;
    }

    /**
     * Gets contactPersonTelephone
     *
     * @return string|mixed
     */
    public function getContactPersonTelephone()
    {
        return $this->container['contactPersonTelephone'];
    }

    /**
     * Sets contactPersonTelephone
     *
     * @param string|mixed $contactPersonTelephone contactPersonTelephone
     *
     * @return $this
     */
    public function setContactPersonTelephone($contactPersonTelephone)
    {
        $this->container['contactPersonTelephone'] = $contactPersonTelephone;

        return $this;
    }

    /**
     * Gets contactPersonMobile
     *
     * @return string|mixed
     */
    public function getContactPersonMobile()
    {
        return $this->container['contactPersonMobile'];
    }

    /**
     * Sets contactPersonMobile
     *
     * @param string|mixed $contactPersonMobile contactPersonMobile
     *
     * @return $this
     */
    public function setContactPersonMobile($contactPersonMobile)
    {
        $this->container['contactPersonMobile'] = $contactPersonMobile;

        return $this;
    }

    /**
     * Gets wechatSpec
     *
     * @return \TencentAds\Model\MpInfoUpdate|mixed
     */
    public function getWechatSpec()
    {
        return $this->container['wechatSpec'];
    }

    /**
     * Sets wechatSpec
     *
     * @param \TencentAds\Model\MpInfoUpdate|mixed $wechatSpec wechatSpec
     *
     * @return $this
     */
    public function setWechatSpec($wechatSpec)
    {
        $this->container['wechatSpec'] = $wechatSpec;

        return $this;
    }

    /**
     * Gets websites
     *
     * @return \TencentAds\Model\WebsiteUpdateStruct[]|mixed
     */
    public function getWebsites()
    {
        return $this->container['websites'];
    }

    /**
     * Sets websites
     *
     * @param \TencentAds\Model\WebsiteUpdateStruct[]|mixed $websites websites
     *
     * @return $this
     */
    public function setWebsites($websites)
    {
        $this->container['websites'] = $websites;

        return $this;
    }

    /**
     * Gets areaCode
     *
     * @return int|mixed
     */
    public function getAreaCode()
    {
        return $this->container['areaCode'];
    }

    /**
     * Sets areaCode
     *
     * @param int|mixed $areaCode areaCode
     *
     * @return $this
     */
    public function setAreaCode($areaCode)
    {
        $this->container['areaCode'] = $areaCode;

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


