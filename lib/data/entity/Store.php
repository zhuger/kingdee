<?php
/**
 * Store
 *
 * PHP version 5
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 星辰
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: version not set
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com_kingdee_service\data\entity;

use \ArrayAccess;
use \com_kingdee_service\ObjectSerializer;

/**
 * Store Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Store implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Store';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'store_id' => 'string',
        'space_id' => 'string',
        'sku_id' => 'string',
        'min_qty' => 'string',
        'max_qty' => 'string',
        'sec_qty' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'store_id' => null,
        'space_id' => null,
        'sku_id' => null,
        'min_qty' => null,
        'max_qty' => null,
        'sec_qty' => null
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
        'id' => 'id',
        'store_id' => 'store_id',
        'space_id' => 'space_id',
        'sku_id' => 'sku_id',
        'min_qty' => 'min_qty',
        'max_qty' => 'max_qty',
        'sec_qty' => 'sec_qty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'store_id' => 'setStoreId',
        'space_id' => 'setSpaceId',
        'sku_id' => 'setSkuId',
        'min_qty' => 'setMinQty',
        'max_qty' => 'setMaxQty',
        'sec_qty' => 'setSecQty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'store_id' => 'getStoreId',
        'space_id' => 'getSpaceId',
        'sku_id' => 'getSkuId',
        'min_qty' => 'getMinQty',
        'max_qty' => 'getMaxQty',
        'sec_qty' => 'getSecQty'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['space_id'] = isset($data['space_id']) ? $data['space_id'] : null;
        $this->container['sku_id'] = isset($data['sku_id']) ? $data['sku_id'] : null;
        $this->container['min_qty'] = isset($data['min_qty']) ? $data['min_qty'] : null;
        $this->container['max_qty'] = isset($data['max_qty']) ? $data['max_qty'] : null;
        $this->container['sec_qty'] = isset($data['sec_qty']) ? $data['sec_qty'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets store_id
     *
     * @return string
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param string $store_id store_id
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets space_id
     *
     * @return string
     */
    public function getSpaceId()
    {
        return $this->container['space_id'];
    }

    /**
     * Sets space_id
     *
     * @param string $space_id space_id
     *
     * @return $this
     */
    public function setSpaceId($space_id)
    {
        $this->container['space_id'] = $space_id;

        return $this;
    }

    /**
     * Gets sku_id
     *
     * @return string
     */
    public function getSkuId()
    {
        return $this->container['sku_id'];
    }

    /**
     * Sets sku_id
     *
     * @param string $sku_id sku_id
     *
     * @return $this
     */
    public function setSkuId($sku_id)
    {
        $this->container['sku_id'] = $sku_id;

        return $this;
    }

    /**
     * Gets min_qty
     *
     * @return string
     */
    public function getMinQty()
    {
        return $this->container['min_qty'];
    }

    /**
     * Sets min_qty
     *
     * @param string $min_qty min_qty
     *
     * @return $this
     */
    public function setMinQty($min_qty)
    {
        $this->container['min_qty'] = $min_qty;

        return $this;
    }

    /**
     * Gets max_qty
     *
     * @return string
     */
    public function getMaxQty()
    {
        return $this->container['max_qty'];
    }

    /**
     * Sets max_qty
     *
     * @param string $max_qty max_qty
     *
     * @return $this
     */
    public function setMaxQty($max_qty)
    {
        $this->container['max_qty'] = $max_qty;

        return $this;
    }

    /**
     * Gets sec_qty
     *
     * @return string
     */
    public function getSecQty()
    {
        return $this->container['sec_qty'];
    }

    /**
     * Sets sec_qty
     *
     * @param string $sec_qty sec_qty
     *
     * @return $this
     */
    public function setSecQty($sec_qty)
    {
        $this->container['sec_qty'] = $sec_qty;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

