<?php
/**
 * CustomAudiencesAddRequest
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
 * CustomAudiencesAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomAudiencesAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomAudiencesAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'name' => 'string',
        'type' => '\TencentAds\Model\AudienceType',
        'description' => 'string',
        'cooperated' => 'bool',
        'audienceSpec' => '\TencentAds\Model\AudienceSpec',
        'platform' => '\TencentAds\Model\DataPlatform',
        'externalAudienceId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'name' => null,
        'type' => null,
        'description' => null,
        'cooperated' => null,
        'audienceSpec' => null,
        'platform' => null,
        'externalAudienceId' => null
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
        'name' => 'name',
        'type' => 'type',
        'description' => 'description',
        'cooperated' => 'cooperated',
        'audienceSpec' => 'audience_spec',
        'platform' => 'platform',
        'externalAudienceId' => 'external_audience_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'name' => 'setName',
        'type' => 'setType',
        'description' => 'setDescription',
        'cooperated' => 'setCooperated',
        'audienceSpec' => 'setAudienceSpec',
        'platform' => 'setPlatform',
        'externalAudienceId' => 'setExternalAudienceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'name' => 'getName',
        'type' => 'getType',
        'description' => 'getDescription',
        'cooperated' => 'getCooperated',
        'audienceSpec' => 'getAudienceSpec',
        'platform' => 'getPlatform',
        'externalAudienceId' => 'getExternalAudienceId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cooperated'] = isset($data['cooperated']) ? $data['cooperated'] : null;
        $this->container['audienceSpec'] = isset($data['audienceSpec']) ? $data['audienceSpec'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['externalAudienceId'] = isset($data['externalAudienceId']) ? $data['externalAudienceId'] : null;
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
     * Gets name
     *
     * @return string|mixed
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|mixed $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \TencentAds\Model\AudienceType|mixed
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \TencentAds\Model\AudienceType|mixed $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|mixed
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|mixed $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets cooperated
     *
     * @return bool|mixed
     */
    public function getCooperated()
    {
        return $this->container['cooperated'];
    }

    /**
     * Sets cooperated
     *
     * @param bool|mixed $cooperated cooperated
     *
     * @return $this
     */
    public function setCooperated($cooperated)
    {
        $this->container['cooperated'] = $cooperated;

        return $this;
    }

    /**
     * Gets audienceSpec
     *
     * @return \TencentAds\Model\AudienceSpec|mixed
     */
    public function getAudienceSpec()
    {
        return $this->container['audienceSpec'];
    }

    /**
     * Sets audienceSpec
     *
     * @param \TencentAds\Model\AudienceSpec|mixed $audienceSpec audienceSpec
     *
     * @return $this
     */
    public function setAudienceSpec($audienceSpec)
    {
        $this->container['audienceSpec'] = $audienceSpec;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return \TencentAds\Model\DataPlatform|mixed
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param \TencentAds\Model\DataPlatform|mixed $platform platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets externalAudienceId
     *
     * @return string|mixed
     */
    public function getExternalAudienceId()
    {
        return $this->container['externalAudienceId'];
    }

    /**
     * Sets externalAudienceId
     *
     * @param string|mixed $externalAudienceId externalAudienceId
     *
     * @return $this
     */
    public function setExternalAudienceId($externalAudienceId)
    {
        $this->container['externalAudienceId'] = $externalAudienceId;

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

