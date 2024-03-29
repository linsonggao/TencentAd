<?php
/**
 * FeatureSpec
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
 * FeatureSpec Class Doc Comment
 *
 * @category Class
 * @description 特征规则
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FeatureSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'feature_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dataSourceType' => '\TencentAds\Model\FeatureDataSourceType',
        'propertyDataFeatureSpec' => '\TencentAds\Model\PropertyDataFeatureSpec',
        'customFileFeatureSpec' => '\TencentAds\Model\CustomFileFeatureSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dataSourceType' => null,
        'propertyDataFeatureSpec' => null,
        'customFileFeatureSpec' => null
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
        'dataSourceType' => 'data_source_type',
        'propertyDataFeatureSpec' => 'property_data_feature_spec',
        'customFileFeatureSpec' => 'custom_file_feature_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dataSourceType' => 'setDataSourceType',
        'propertyDataFeatureSpec' => 'setPropertyDataFeatureSpec',
        'customFileFeatureSpec' => 'setCustomFileFeatureSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dataSourceType' => 'getDataSourceType',
        'propertyDataFeatureSpec' => 'getPropertyDataFeatureSpec',
        'customFileFeatureSpec' => 'getCustomFileFeatureSpec'
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
        $this->container['dataSourceType'] = isset($data['dataSourceType']) ? $data['dataSourceType'] : null;
        $this->container['propertyDataFeatureSpec'] = isset($data['propertyDataFeatureSpec']) ? $data['propertyDataFeatureSpec'] : null;
        $this->container['customFileFeatureSpec'] = isset($data['customFileFeatureSpec']) ? $data['customFileFeatureSpec'] : null;
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
     * Gets dataSourceType
     *
     * @return \TencentAds\Model\FeatureDataSourceType|mixed
     */
    public function getDataSourceType()
    {
        return $this->container['dataSourceType'];
    }

    /**
     * Sets dataSourceType
     *
     * @param \TencentAds\Model\FeatureDataSourceType|mixed $dataSourceType dataSourceType
     *
     * @return $this
     */
    public function setDataSourceType($dataSourceType)
    {
        $this->container['dataSourceType'] = $dataSourceType;

        return $this;
    }

    /**
     * Gets propertyDataFeatureSpec
     *
     * @return \TencentAds\Model\PropertyDataFeatureSpec|mixed
     */
    public function getPropertyDataFeatureSpec()
    {
        return $this->container['propertyDataFeatureSpec'];
    }

    /**
     * Sets propertyDataFeatureSpec
     *
     * @param \TencentAds\Model\PropertyDataFeatureSpec|mixed $propertyDataFeatureSpec propertyDataFeatureSpec
     *
     * @return $this
     */
    public function setPropertyDataFeatureSpec($propertyDataFeatureSpec)
    {
        $this->container['propertyDataFeatureSpec'] = $propertyDataFeatureSpec;

        return $this;
    }

    /**
     * Gets customFileFeatureSpec
     *
     * @return \TencentAds\Model\CustomFileFeatureSpec|mixed
     */
    public function getCustomFileFeatureSpec()
    {
        return $this->container['customFileFeatureSpec'];
    }

    /**
     * Sets customFileFeatureSpec
     *
     * @param \TencentAds\Model\CustomFileFeatureSpec|mixed $customFileFeatureSpec customFileFeatureSpec
     *
     * @return $this
     */
    public function setCustomFileFeatureSpec($customFileFeatureSpec)
    {
        $this->container['customFileFeatureSpec'] = $customFileFeatureSpec;

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


