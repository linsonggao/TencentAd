<?php
/**
 * CreateControlListItem
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
 * CreateControlListItem Class Doc Comment
 *
 * @category Class
 * @description 表单项
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateControlListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'create_control_list_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'itemType' => '\TencentAds\Model\ItemType',
        'itemName' => 'string',
        'placeholder' => 'string',
        'selectElements' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'itemType' => null,
        'itemName' => null,
        'placeholder' => null,
        'selectElements' => null
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
        'itemType' => 'item_type',
        'itemName' => 'item_name',
        'placeholder' => 'placeholder',
        'selectElements' => 'select_elements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemType' => 'setItemType',
        'itemName' => 'setItemName',
        'placeholder' => 'setPlaceholder',
        'selectElements' => 'setSelectElements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemType' => 'getItemType',
        'itemName' => 'getItemName',
        'placeholder' => 'getPlaceholder',
        'selectElements' => 'getSelectElements'
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
        $this->container['itemType'] = isset($data['itemType']) ? $data['itemType'] : null;
        $this->container['itemName'] = isset($data['itemName']) ? $data['itemName'] : null;
        $this->container['placeholder'] = isset($data['placeholder']) ? $data['placeholder'] : null;
        $this->container['selectElements'] = isset($data['selectElements']) ? $data['selectElements'] : null;
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
     * Gets itemType
     *
     * @return \TencentAds\Model\ItemType|mixed
     */
    public function getItemType()
    {
        return $this->container['itemType'];
    }

    /**
     * Sets itemType
     *
     * @param \TencentAds\Model\ItemType|mixed $itemType itemType
     *
     * @return $this
     */
    public function setItemType($itemType)
    {
        $this->container['itemType'] = $itemType;

        return $this;
    }

    /**
     * Gets itemName
     *
     * @return string|mixed
     */
    public function getItemName()
    {
        return $this->container['itemName'];
    }

    /**
     * Sets itemName
     *
     * @param string|mixed $itemName itemName
     *
     * @return $this
     */
    public function setItemName($itemName)
    {
        $this->container['itemName'] = $itemName;

        return $this;
    }

    /**
     * Gets placeholder
     *
     * @return string|mixed
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     *
     * @param string|mixed $placeholder placeholder
     *
     * @return $this
     */
    public function setPlaceholder($placeholder)
    {
        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets selectElements
     *
     * @return string[]|mixed
     */
    public function getSelectElements()
    {
        return $this->container['selectElements'];
    }

    /**
     * Sets selectElements
     *
     * @param string[]|mixed $selectElements selectElements
     *
     * @return $this
     */
    public function setSelectElements($selectElements)
    {
        $this->container['selectElements'] = $selectElements;

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


