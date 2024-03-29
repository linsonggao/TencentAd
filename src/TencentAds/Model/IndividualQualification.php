<?php
/**
 * IndividualQualification
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
 * IndividualQualification Class Doc Comment
 *
 * @category Class
 * @description 个人身份证明
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IndividualQualification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'individual_qualification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identificationUrl' => 'string',
        'identificationUrl2' => 'string',
        'photoUrl' => 'string',
        'identificationFrontImageId' => 'string',
        'identificationBackImageId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identificationUrl' => null,
        'identificationUrl2' => null,
        'photoUrl' => null,
        'identificationFrontImageId' => null,
        'identificationBackImageId' => null
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
        'identificationUrl' => 'identification_url',
        'identificationUrl2' => 'identification_url2',
        'photoUrl' => 'photo_url',
        'identificationFrontImageId' => 'identification_front_image_id',
        'identificationBackImageId' => 'identification_back_image_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identificationUrl' => 'setIdentificationUrl',
        'identificationUrl2' => 'setIdentificationUrl2',
        'photoUrl' => 'setPhotoUrl',
        'identificationFrontImageId' => 'setIdentificationFrontImageId',
        'identificationBackImageId' => 'setIdentificationBackImageId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identificationUrl' => 'getIdentificationUrl',
        'identificationUrl2' => 'getIdentificationUrl2',
        'photoUrl' => 'getPhotoUrl',
        'identificationFrontImageId' => 'getIdentificationFrontImageId',
        'identificationBackImageId' => 'getIdentificationBackImageId'
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
        $this->container['identificationUrl'] = isset($data['identificationUrl']) ? $data['identificationUrl'] : null;
        $this->container['identificationUrl2'] = isset($data['identificationUrl2']) ? $data['identificationUrl2'] : null;
        $this->container['photoUrl'] = isset($data['photoUrl']) ? $data['photoUrl'] : null;
        $this->container['identificationFrontImageId'] = isset($data['identificationFrontImageId']) ? $data['identificationFrontImageId'] : null;
        $this->container['identificationBackImageId'] = isset($data['identificationBackImageId']) ? $data['identificationBackImageId'] : null;
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
     * Gets identificationUrl
     *
     * @return string|mixed
     */
    public function getIdentificationUrl()
    {
        return $this->container['identificationUrl'];
    }

    /**
     * Sets identificationUrl
     *
     * @param string|mixed $identificationUrl identificationUrl
     *
     * @return $this
     */
    public function setIdentificationUrl($identificationUrl)
    {
        $this->container['identificationUrl'] = $identificationUrl;

        return $this;
    }

    /**
     * Gets identificationUrl2
     *
     * @return string|mixed
     */
    public function getIdentificationUrl2()
    {
        return $this->container['identificationUrl2'];
    }

    /**
     * Sets identificationUrl2
     *
     * @param string|mixed $identificationUrl2 identificationUrl2
     *
     * @return $this
     */
    public function setIdentificationUrl2($identificationUrl2)
    {
        $this->container['identificationUrl2'] = $identificationUrl2;

        return $this;
    }

    /**
     * Gets photoUrl
     *
     * @return string|mixed
     */
    public function getPhotoUrl()
    {
        return $this->container['photoUrl'];
    }

    /**
     * Sets photoUrl
     *
     * @param string|mixed $photoUrl photoUrl
     *
     * @return $this
     */
    public function setPhotoUrl($photoUrl)
    {
        $this->container['photoUrl'] = $photoUrl;

        return $this;
    }

    /**
     * Gets identificationFrontImageId
     *
     * @return string|mixed
     */
    public function getIdentificationFrontImageId()
    {
        return $this->container['identificationFrontImageId'];
    }

    /**
     * Sets identificationFrontImageId
     *
     * @param string|mixed $identificationFrontImageId identificationFrontImageId
     *
     * @return $this
     */
    public function setIdentificationFrontImageId($identificationFrontImageId)
    {
        $this->container['identificationFrontImageId'] = $identificationFrontImageId;

        return $this;
    }

    /**
     * Gets identificationBackImageId
     *
     * @return string|mixed
     */
    public function getIdentificationBackImageId()
    {
        return $this->container['identificationBackImageId'];
    }

    /**
     * Sets identificationBackImageId
     *
     * @param string|mixed $identificationBackImageId identificationBackImageId
     *
     * @return $this
     */
    public function setIdentificationBackImageId($identificationBackImageId)
    {
        $this->container['identificationBackImageId'] = $identificationBackImageId;

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


