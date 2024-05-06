<?php
/**
 * Devicelist
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
 * Devicelist Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Devicelist implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Devicelist';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'seq' => 'string',
        'device_name' => 'string',
        'device_number' => 'string',
        'device_model' => 'string',
        'device_qty' => 'string',
        'device_unit_id' => 'string',
        'device_unit_number' => 'string',
        'device_unit_name' => 'string',
        'device_amount' => 'string',
        'device_date' => 'string',
        'device_note' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'seq' => null,
        'device_name' => null,
        'device_number' => null,
        'device_model' => null,
        'device_qty' => null,
        'device_unit_id' => null,
        'device_unit_number' => null,
        'device_unit_name' => null,
        'device_amount' => null,
        'device_date' => null,
        'device_note' => null,
        'id' => null
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
        'seq' => 'seq',
        'device_name' => 'device_name',
        'device_number' => 'device_number',
        'device_model' => 'device_model',
        'device_qty' => 'device_qty',
        'device_unit_id' => 'device_unit_id',
        'device_unit_number' => 'device_unit_number',
        'device_unit_name' => 'device_unit_name',
        'device_amount' => 'device_amount',
        'device_date' => 'device_date',
        'device_note' => 'device_note',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seq' => 'setSeq',
        'device_name' => 'setDeviceName',
        'device_number' => 'setDeviceNumber',
        'device_model' => 'setDeviceModel',
        'device_qty' => 'setDeviceQty',
        'device_unit_id' => 'setDeviceUnitId',
        'device_unit_number' => 'setDeviceUnitNumber',
        'device_unit_name' => 'setDeviceUnitName',
        'device_amount' => 'setDeviceAmount',
        'device_date' => 'setDeviceDate',
        'device_note' => 'setDeviceNote',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seq' => 'getSeq',
        'device_name' => 'getDeviceName',
        'device_number' => 'getDeviceNumber',
        'device_model' => 'getDeviceModel',
        'device_qty' => 'getDeviceQty',
        'device_unit_id' => 'getDeviceUnitId',
        'device_unit_number' => 'getDeviceUnitNumber',
        'device_unit_name' => 'getDeviceUnitName',
        'device_amount' => 'getDeviceAmount',
        'device_date' => 'getDeviceDate',
        'device_note' => 'getDeviceNote',
        'id' => 'getId'
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
        $this->container['seq'] = isset($data['seq']) ? $data['seq'] : null;
        $this->container['device_name'] = isset($data['device_name']) ? $data['device_name'] : null;
        $this->container['device_number'] = isset($data['device_number']) ? $data['device_number'] : null;
        $this->container['device_model'] = isset($data['device_model']) ? $data['device_model'] : null;
        $this->container['device_qty'] = isset($data['device_qty']) ? $data['device_qty'] : null;
        $this->container['device_unit_id'] = isset($data['device_unit_id']) ? $data['device_unit_id'] : null;
        $this->container['device_unit_number'] = isset($data['device_unit_number']) ? $data['device_unit_number'] : null;
        $this->container['device_unit_name'] = isset($data['device_unit_name']) ? $data['device_unit_name'] : null;
        $this->container['device_amount'] = isset($data['device_amount']) ? $data['device_amount'] : null;
        $this->container['device_date'] = isset($data['device_date']) ? $data['device_date'] : null;
        $this->container['device_note'] = isset($data['device_note']) ? $data['device_note'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
     * Gets seq
     *
     * @return string
     */
    public function getSeq()
    {
        return $this->container['seq'];
    }

    /**
     * Sets seq
     *
     * @param string $seq seq
     *
     * @return $this
     */
    public function setSeq($seq)
    {
        $this->container['seq'] = $seq;

        return $this;
    }

    /**
     * Gets device_name
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->container['device_name'];
    }

    /**
     * Sets device_name
     *
     * @param string $device_name device_name
     *
     * @return $this
     */
    public function setDeviceName($device_name)
    {
        $this->container['device_name'] = $device_name;

        return $this;
    }

    /**
     * Gets device_number
     *
     * @return string
     */
    public function getDeviceNumber()
    {
        return $this->container['device_number'];
    }

    /**
     * Sets device_number
     *
     * @param string $device_number device_number
     *
     * @return $this
     */
    public function setDeviceNumber($device_number)
    {
        $this->container['device_number'] = $device_number;

        return $this;
    }

    /**
     * Gets device_model
     *
     * @return string
     */
    public function getDeviceModel()
    {
        return $this->container['device_model'];
    }

    /**
     * Sets device_model
     *
     * @param string $device_model device_model
     *
     * @return $this
     */
    public function setDeviceModel($device_model)
    {
        $this->container['device_model'] = $device_model;

        return $this;
    }

    /**
     * Gets device_qty
     *
     * @return string
     */
    public function getDeviceQty()
    {
        return $this->container['device_qty'];
    }

    /**
     * Sets device_qty
     *
     * @param string $device_qty device_qty
     *
     * @return $this
     */
    public function setDeviceQty($device_qty)
    {
        $this->container['device_qty'] = $device_qty;

        return $this;
    }

    /**
     * Gets device_unit_id
     *
     * @return string
     */
    public function getDeviceUnitId()
    {
        return $this->container['device_unit_id'];
    }

    /**
     * Sets device_unit_id
     *
     * @param string $device_unit_id device_unit_id
     *
     * @return $this
     */
    public function setDeviceUnitId($device_unit_id)
    {
        $this->container['device_unit_id'] = $device_unit_id;

        return $this;
    }

    /**
     * Gets device_unit_number
     *
     * @return string
     */
    public function getDeviceUnitNumber()
    {
        return $this->container['device_unit_number'];
    }

    /**
     * Sets device_unit_number
     *
     * @param string $device_unit_number device_unit_number
     *
     * @return $this
     */
    public function setDeviceUnitNumber($device_unit_number)
    {
        $this->container['device_unit_number'] = $device_unit_number;

        return $this;
    }

    /**
     * Gets device_unit_name
     *
     * @return string
     */
    public function getDeviceUnitName()
    {
        return $this->container['device_unit_name'];
    }

    /**
     * Sets device_unit_name
     *
     * @param string $device_unit_name device_unit_name
     *
     * @return $this
     */
    public function setDeviceUnitName($device_unit_name)
    {
        $this->container['device_unit_name'] = $device_unit_name;

        return $this;
    }

    /**
     * Gets device_amount
     *
     * @return string
     */
    public function getDeviceAmount()
    {
        return $this->container['device_amount'];
    }

    /**
     * Sets device_amount
     *
     * @param string $device_amount device_amount
     *
     * @return $this
     */
    public function setDeviceAmount($device_amount)
    {
        $this->container['device_amount'] = $device_amount;

        return $this;
    }

    /**
     * Gets device_date
     *
     * @return string
     */
    public function getDeviceDate()
    {
        return $this->container['device_date'];
    }

    /**
     * Sets device_date
     *
     * @param string $device_date device_date
     *
     * @return $this
     */
    public function setDeviceDate($device_date)
    {
        $this->container['device_date'] = $device_date;

        return $this;
    }

    /**
     * Gets device_note
     *
     * @return string
     */
    public function getDeviceNote()
    {
        return $this->container['device_note'];
    }

    /**
     * Sets device_note
     *
     * @param string $device_note device_note
     *
     * @return $this
     */
    public function setDeviceNote($device_note)
    {
        $this->container['device_note'] = $device_note;

        return $this;
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


