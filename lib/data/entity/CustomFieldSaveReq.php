<?php
/**
 * CustomFieldSaveReq
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
 * CustomFieldSaveReq Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomFieldSaveReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomFieldSaveReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'field_name' => 'string',
        'field_type' => 'string',
        'data_position' => 'string',
        'suit_bills' => 'string[]',
        'enabled' => 'bool',
        'required' => 'bool',
        'changeable' => 'bool',
        'field_length' => 'int',
        'decimal_digit' => 'int',
        'is_sum' => 'bool',
        'default_system_time' => 'bool',
        'data_source' => 'string',
        'basedata_source' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'field_name' => null,
        'field_type' => null,
        'data_position' => null,
        'suit_bills' => null,
        'enabled' => null,
        'required' => null,
        'changeable' => null,
        'field_length' => 'int32',
        'decimal_digit' => 'int32',
        'is_sum' => null,
        'default_system_time' => null,
        'data_source' => null,
        'basedata_source' => null
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
        'field_name' => 'field_name',
        'field_type' => 'field_type',
        'data_position' => 'data_position',
        'suit_bills' => 'suit_bills',
        'enabled' => 'enabled',
        'required' => 'required',
        'changeable' => 'changeable',
        'field_length' => 'field_length',
        'decimal_digit' => 'decimal_Digit',
        'is_sum' => 'is_sum',
        'default_system_time' => 'default_system_time',
        'data_source' => 'data_source',
        'basedata_source' => 'basedata_source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'field_name' => 'setFieldName',
        'field_type' => 'setFieldType',
        'data_position' => 'setDataPosition',
        'suit_bills' => 'setSuitBills',
        'enabled' => 'setEnabled',
        'required' => 'setRequired',
        'changeable' => 'setChangeable',
        'field_length' => 'setFieldLength',
        'decimal_digit' => 'setDecimalDigit',
        'is_sum' => 'setIsSum',
        'default_system_time' => 'setDefaultSystemTime',
        'data_source' => 'setDataSource',
        'basedata_source' => 'setBasedataSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'field_name' => 'getFieldName',
        'field_type' => 'getFieldType',
        'data_position' => 'getDataPosition',
        'suit_bills' => 'getSuitBills',
        'enabled' => 'getEnabled',
        'required' => 'getRequired',
        'changeable' => 'getChangeable',
        'field_length' => 'getFieldLength',
        'decimal_digit' => 'getDecimalDigit',
        'is_sum' => 'getIsSum',
        'default_system_time' => 'getDefaultSystemTime',
        'data_source' => 'getDataSource',
        'basedata_source' => 'getBasedataSource'
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
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['field_type'] = isset($data['field_type']) ? $data['field_type'] : null;
        $this->container['data_position'] = isset($data['data_position']) ? $data['data_position'] : null;
        $this->container['suit_bills'] = isset($data['suit_bills']) ? $data['suit_bills'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['changeable'] = isset($data['changeable']) ? $data['changeable'] : null;
        $this->container['field_length'] = isset($data['field_length']) ? $data['field_length'] : null;
        $this->container['decimal_digit'] = isset($data['decimal_digit']) ? $data['decimal_digit'] : null;
        $this->container['is_sum'] = isset($data['is_sum']) ? $data['is_sum'] : null;
        $this->container['default_system_time'] = isset($data['default_system_time']) ? $data['default_system_time'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['basedata_source'] = isset($data['basedata_source']) ? $data['basedata_source'] : null;
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
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string $field_name field_name
     *
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param string $field_type field_type
     *
     * @return $this
     */
    public function setFieldType($field_type)
    {
        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets data_position
     *
     * @return string
     */
    public function getDataPosition()
    {
        return $this->container['data_position'];
    }

    /**
     * Sets data_position
     *
     * @param string $data_position data_position
     *
     * @return $this
     */
    public function setDataPosition($data_position)
    {
        $this->container['data_position'] = $data_position;

        return $this;
    }

    /**
     * Gets suit_bills
     *
     * @return string[]
     */
    public function getSuitBills()
    {
        return $this->container['suit_bills'];
    }

    /**
     * Sets suit_bills
     *
     * @param string[] $suit_bills suit_bills
     *
     * @return $this
     */
    public function setSuitBills($suit_bills)
    {
        $this->container['suit_bills'] = $suit_bills;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets changeable
     *
     * @return bool
     */
    public function getChangeable()
    {
        return $this->container['changeable'];
    }

    /**
     * Sets changeable
     *
     * @param bool $changeable changeable
     *
     * @return $this
     */
    public function setChangeable($changeable)
    {
        $this->container['changeable'] = $changeable;

        return $this;
    }

    /**
     * Gets field_length
     *
     * @return int
     */
    public function getFieldLength()
    {
        return $this->container['field_length'];
    }

    /**
     * Sets field_length
     *
     * @param int $field_length field_length
     *
     * @return $this
     */
    public function setFieldLength($field_length)
    {
        $this->container['field_length'] = $field_length;

        return $this;
    }

    /**
     * Gets decimal_digit
     *
     * @return int
     */
    public function getDecimalDigit()
    {
        return $this->container['decimal_digit'];
    }

    /**
     * Sets decimal_digit
     *
     * @param int $decimal_digit decimal_digit
     *
     * @return $this
     */
    public function setDecimalDigit($decimal_digit)
    {
        $this->container['decimal_digit'] = $decimal_digit;

        return $this;
    }

    /**
     * Gets is_sum
     *
     * @return bool
     */
    public function getIsSum()
    {
        return $this->container['is_sum'];
    }

    /**
     * Sets is_sum
     *
     * @param bool $is_sum is_sum
     *
     * @return $this
     */
    public function setIsSum($is_sum)
    {
        $this->container['is_sum'] = $is_sum;

        return $this;
    }

    /**
     * Gets default_system_time
     *
     * @return bool
     */
    public function getDefaultSystemTime()
    {
        return $this->container['default_system_time'];
    }

    /**
     * Sets default_system_time
     *
     * @param bool $default_system_time default_system_time
     *
     * @return $this
     */
    public function setDefaultSystemTime($default_system_time)
    {
        $this->container['default_system_time'] = $default_system_time;

        return $this;
    }

    /**
     * Gets data_source
     *
     * @return string
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source
     *
     * @param string $data_source data_source
     *
     * @return $this
     */
    public function setDataSource($data_source)
    {
        $this->container['data_source'] = $data_source;

        return $this;
    }

    /**
     * Gets basedata_source
     *
     * @return string
     */
    public function getBasedataSource()
    {
        return $this->container['basedata_source'];
    }

    /**
     * Sets basedata_source
     *
     * @param string $basedata_source basedata_source
     *
     * @return $this
     */
    public function setBasedataSource($basedata_source)
    {
        $this->container['basedata_source'] = $basedata_source;

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


