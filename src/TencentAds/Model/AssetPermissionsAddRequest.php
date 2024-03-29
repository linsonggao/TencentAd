<?php
/**
 * AssetPermissionsAddRequest
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
 * AssetPermissionsAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssetPermissionsAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AssetPermissionsAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountId' => 'int',
        'assetType' => '\TencentAds\Model\AssetType',
        'assetPermissionSpec' => '\TencentAds\Model\AssetPermissionSpecStruct[]',
        'licensingAccountIdList' => 'int[]',
        'licensingIdType' => '\TencentAds\Model\AssetAccountType',
        'pathId' => 'int',
        'permissionList' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountId' => 'int64',
        'assetType' => null,
        'assetPermissionSpec' => null,
        'licensingAccountIdList' => 'int64',
        'licensingIdType' => null,
        'pathId' => 'int64',
        'permissionList' => null
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
        'assetType' => 'asset_type',
        'assetPermissionSpec' => 'asset_permission_spec',
        'licensingAccountIdList' => 'licensing_account_id_list',
        'licensingIdType' => 'licensing_id_type',
        'pathId' => 'path_id',
        'permissionList' => 'permission_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'assetType' => 'setAssetType',
        'assetPermissionSpec' => 'setAssetPermissionSpec',
        'licensingAccountIdList' => 'setLicensingAccountIdList',
        'licensingIdType' => 'setLicensingIdType',
        'pathId' => 'setPathId',
        'permissionList' => 'setPermissionList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'assetType' => 'getAssetType',
        'assetPermissionSpec' => 'getAssetPermissionSpec',
        'licensingAccountIdList' => 'getLicensingAccountIdList',
        'licensingIdType' => 'getLicensingIdType',
        'pathId' => 'getPathId',
        'permissionList' => 'getPermissionList'
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
        $this->container['assetType'] = isset($data['assetType']) ? $data['assetType'] : null;
        $this->container['assetPermissionSpec'] = isset($data['assetPermissionSpec']) ? $data['assetPermissionSpec'] : null;
        $this->container['licensingAccountIdList'] = isset($data['licensingAccountIdList']) ? $data['licensingAccountIdList'] : null;
        $this->container['licensingIdType'] = isset($data['licensingIdType']) ? $data['licensingIdType'] : null;
        $this->container['pathId'] = isset($data['pathId']) ? $data['pathId'] : null;
        $this->container['permissionList'] = isset($data['permissionList']) ? $data['permissionList'] : null;
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
     * Gets assetType
     *
     * @return \TencentAds\Model\AssetType|mixed
     */
    public function getAssetType()
    {
        return $this->container['assetType'];
    }

    /**
     * Sets assetType
     *
     * @param \TencentAds\Model\AssetType|mixed $assetType assetType
     *
     * @return $this
     */
    public function setAssetType($assetType)
    {
        $this->container['assetType'] = $assetType;

        return $this;
    }

    /**
     * Gets assetPermissionSpec
     *
     * @return \TencentAds\Model\AssetPermissionSpecStruct[]|mixed
     */
    public function getAssetPermissionSpec()
    {
        return $this->container['assetPermissionSpec'];
    }

    /**
     * Sets assetPermissionSpec
     *
     * @param \TencentAds\Model\AssetPermissionSpecStruct[]|mixed $assetPermissionSpec assetPermissionSpec
     *
     * @return $this
     */
    public function setAssetPermissionSpec($assetPermissionSpec)
    {
        $this->container['assetPermissionSpec'] = $assetPermissionSpec;

        return $this;
    }

    /**
     * Gets licensingAccountIdList
     *
     * @return int[]|mixed
     */
    public function getLicensingAccountIdList()
    {
        return $this->container['licensingAccountIdList'];
    }

    /**
     * Sets licensingAccountIdList
     *
     * @param int[]|mixed $licensingAccountIdList licensingAccountIdList
     *
     * @return $this
     */
    public function setLicensingAccountIdList($licensingAccountIdList)
    {
        $this->container['licensingAccountIdList'] = $licensingAccountIdList;

        return $this;
    }

    /**
     * Gets licensingIdType
     *
     * @return \TencentAds\Model\AssetAccountType|mixed
     */
    public function getLicensingIdType()
    {
        return $this->container['licensingIdType'];
    }

    /**
     * Sets licensingIdType
     *
     * @param \TencentAds\Model\AssetAccountType|mixed $licensingIdType licensingIdType
     *
     * @return $this
     */
    public function setLicensingIdType($licensingIdType)
    {
        $this->container['licensingIdType'] = $licensingIdType;

        return $this;
    }

    /**
     * Gets pathId
     *
     * @return int|mixed
     */
    public function getPathId()
    {
        return $this->container['pathId'];
    }

    /**
     * Sets pathId
     *
     * @param int|mixed $pathId pathId
     *
     * @return $this
     */
    public function setPathId($pathId)
    {
        $this->container['pathId'] = $pathId;

        return $this;
    }

    /**
     * Gets permissionList
     *
     * @return string[]|mixed
     */
    public function getPermissionList()
    {
        return $this->container['permissionList'];
    }

    /**
     * Sets permissionList
     *
     * @param string[]|mixed $permissionList permissionList
     *
     * @return $this
     */
    public function setPermissionList($permissionList)
    {
        $this->container['permissionList'] = $permissionList;

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


