<?php
/**
 * WechatCostDiagnosisResultSpec
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
 * WechatCostDiagnosisResultSpec Class Doc Comment
 *
 * @category Class
 * @description 微信广告的成本诊断结论&lt;br&gt;仅微信的oCPA广告会返回此字段
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WechatCostDiagnosisResultSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'wechat_cost_diagnosis_result_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'diagnosisConclusion' => 'string',
        'overallCpc' => 'int',
        'historyCpcSpecList' => '\TencentAds\Model\HistoryCpcSpec[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'diagnosisConclusion' => null,
        'overallCpc' => 'int64',
        'historyCpcSpecList' => null
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
        'diagnosisConclusion' => 'diagnosis_conclusion',
        'overallCpc' => 'overall_cpc',
        'historyCpcSpecList' => 'history_cpc_spec_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'diagnosisConclusion' => 'setDiagnosisConclusion',
        'overallCpc' => 'setOverallCpc',
        'historyCpcSpecList' => 'setHistoryCpcSpecList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'diagnosisConclusion' => 'getDiagnosisConclusion',
        'overallCpc' => 'getOverallCpc',
        'historyCpcSpecList' => 'getHistoryCpcSpecList'
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
        $this->container['diagnosisConclusion'] = isset($data['diagnosisConclusion']) ? $data['diagnosisConclusion'] : null;
        $this->container['overallCpc'] = isset($data['overallCpc']) ? $data['overallCpc'] : null;
        $this->container['historyCpcSpecList'] = isset($data['historyCpcSpecList']) ? $data['historyCpcSpecList'] : null;
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
     * Gets diagnosisConclusion
     *
     * @return string|mixed
     */
    public function getDiagnosisConclusion()
    {
        return $this->container['diagnosisConclusion'];
    }

    /**
     * Sets diagnosisConclusion
     *
     * @param string|mixed $diagnosisConclusion diagnosisConclusion
     *
     * @return $this
     */
    public function setDiagnosisConclusion($diagnosisConclusion)
    {
        $this->container['diagnosisConclusion'] = $diagnosisConclusion;

        return $this;
    }

    /**
     * Gets overallCpc
     *
     * @return int|mixed
     */
    public function getOverallCpc()
    {
        return $this->container['overallCpc'];
    }

    /**
     * Sets overallCpc
     *
     * @param int|mixed $overallCpc overallCpc
     *
     * @return $this
     */
    public function setOverallCpc($overallCpc)
    {
        $this->container['overallCpc'] = $overallCpc;

        return $this;
    }

    /**
     * Gets historyCpcSpecList
     *
     * @return \TencentAds\Model\HistoryCpcSpec[]|mixed
     */
    public function getHistoryCpcSpecList()
    {
        return $this->container['historyCpcSpecList'];
    }

    /**
     * Sets historyCpcSpecList
     *
     * @param \TencentAds\Model\HistoryCpcSpec[]|mixed $historyCpcSpecList historyCpcSpecList
     *
     * @return $this
     */
    public function setHistoryCpcSpecList($historyCpcSpecList)
    {
        $this->container['historyCpcSpecList'] = $historyCpcSpecList;

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


