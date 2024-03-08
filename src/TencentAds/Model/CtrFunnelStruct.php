<?php
/**
 * CtrFunnelStruct
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
 * CtrFunnelStruct Class Doc Comment
 *
 * @category Class
 * @description 点击率分析
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CtrFunnelStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ctr_funnel_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'value' => 'double',
        'score' => 'int',
        'scoreDesc' => 'string',
        'rankCategory' => 'int',
        'rankSecondCategory' => 'int',
        'rankOverall' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'value' => 'double',
        'score' => 'int64',
        'scoreDesc' => null,
        'rankCategory' => 'int64',
        'rankSecondCategory' => 'int64',
        'rankOverall' => 'int64'
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
        'value' => 'value',
        'score' => 'score',
        'scoreDesc' => 'score_desc',
        'rankCategory' => 'rank_category',
        'rankSecondCategory' => 'rank_second_category',
        'rankOverall' => 'rank_overall'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'value' => 'setValue',
        'score' => 'setScore',
        'scoreDesc' => 'setScoreDesc',
        'rankCategory' => 'setRankCategory',
        'rankSecondCategory' => 'setRankSecondCategory',
        'rankOverall' => 'setRankOverall'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'value' => 'getValue',
        'score' => 'getScore',
        'scoreDesc' => 'getScoreDesc',
        'rankCategory' => 'getRankCategory',
        'rankSecondCategory' => 'getRankSecondCategory',
        'rankOverall' => 'getRankOverall'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['scoreDesc'] = isset($data['scoreDesc']) ? $data['scoreDesc'] : null;
        $this->container['rankCategory'] = isset($data['rankCategory']) ? $data['rankCategory'] : null;
        $this->container['rankSecondCategory'] = isset($data['rankSecondCategory']) ? $data['rankSecondCategory'] : null;
        $this->container['rankOverall'] = isset($data['rankOverall']) ? $data['rankOverall'] : null;
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
     * Gets value
     *
     * @return double|mixed
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param double|mixed $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets score
     *
     * @return int|mixed
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param int|mixed $score score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets scoreDesc
     *
     * @return string|mixed
     */
    public function getScoreDesc()
    {
        return $this->container['scoreDesc'];
    }

    /**
     * Sets scoreDesc
     *
     * @param string|mixed $scoreDesc scoreDesc
     *
     * @return $this
     */
    public function setScoreDesc($scoreDesc)
    {
        $this->container['scoreDesc'] = $scoreDesc;

        return $this;
    }

    /**
     * Gets rankCategory
     *
     * @return int|mixed
     */
    public function getRankCategory()
    {
        return $this->container['rankCategory'];
    }

    /**
     * Sets rankCategory
     *
     * @param int|mixed $rankCategory rankCategory
     *
     * @return $this
     */
    public function setRankCategory($rankCategory)
    {
        $this->container['rankCategory'] = $rankCategory;

        return $this;
    }

    /**
     * Gets rankSecondCategory
     *
     * @return int|mixed
     */
    public function getRankSecondCategory()
    {
        return $this->container['rankSecondCategory'];
    }

    /**
     * Sets rankSecondCategory
     *
     * @param int|mixed $rankSecondCategory rankSecondCategory
     *
     * @return $this
     */
    public function setRankSecondCategory($rankSecondCategory)
    {
        $this->container['rankSecondCategory'] = $rankSecondCategory;

        return $this;
    }

    /**
     * Gets rankOverall
     *
     * @return int|mixed
     */
    public function getRankOverall()
    {
        return $this->container['rankOverall'];
    }

    /**
     * Sets rankOverall
     *
     * @param int|mixed $rankOverall rankOverall
     *
     * @return $this
     */
    public function setRankOverall($rankOverall)
    {
        $this->container['rankOverall'] = $rankOverall;

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


