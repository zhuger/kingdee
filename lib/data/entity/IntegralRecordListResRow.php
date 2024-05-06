<?php
/**
 * IntegralRecordListResRow
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
 * IntegralRecordListResRow Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntegralRecordListResRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntegralRecordListRes.Row';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'member_id' => 'string',
        'member_name' => 'string',
        'create_time' => 'string',
        'modify_time' => 'string',
        'last_integral' => 'string',
        'occur' => 'string',
        'integral' => 'string',
        'type_number' => 'string',
        'type_id' => 'string',
        'type_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'member_id' => null,
        'member_name' => null,
        'create_time' => null,
        'modify_time' => null,
        'last_integral' => null,
        'occur' => null,
        'integral' => null,
        'type_number' => null,
        'type_id' => null,
        'type_name' => null
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
        'member_id' => 'member_id',
        'member_name' => 'member_name',
        'create_time' => 'create_time',
        'modify_time' => 'modify_time',
        'last_integral' => 'last_integral',
        'occur' => 'occur',
        'integral' => 'integral',
        'type_number' => 'type_number',
        'type_id' => 'type_id',
        'type_name' => 'type_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'member_id' => 'setMemberId',
        'member_name' => 'setMemberName',
        'create_time' => 'setCreateTime',
        'modify_time' => 'setModifyTime',
        'last_integral' => 'setLastIntegral',
        'occur' => 'setOccur',
        'integral' => 'setIntegral',
        'type_number' => 'setTypeNumber',
        'type_id' => 'setTypeId',
        'type_name' => 'setTypeName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'member_id' => 'getMemberId',
        'member_name' => 'getMemberName',
        'create_time' => 'getCreateTime',
        'modify_time' => 'getModifyTime',
        'last_integral' => 'getLastIntegral',
        'occur' => 'getOccur',
        'integral' => 'getIntegral',
        'type_number' => 'getTypeNumber',
        'type_id' => 'getTypeId',
        'type_name' => 'getTypeName'
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
        $this->container['member_id'] = isset($data['member_id']) ? $data['member_id'] : null;
        $this->container['member_name'] = isset($data['member_name']) ? $data['member_name'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['modify_time'] = isset($data['modify_time']) ? $data['modify_time'] : null;
        $this->container['last_integral'] = isset($data['last_integral']) ? $data['last_integral'] : null;
        $this->container['occur'] = isset($data['occur']) ? $data['occur'] : null;
        $this->container['integral'] = isset($data['integral']) ? $data['integral'] : null;
        $this->container['type_number'] = isset($data['type_number']) ? $data['type_number'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['type_name'] = isset($data['type_name']) ? $data['type_name'] : null;
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
     * Gets member_id
     *
     * @return string
     */
    public function getMemberId()
    {
        return $this->container['member_id'];
    }

    /**
     * Sets member_id
     *
     * @param string $member_id member_id
     *
     * @return $this
     */
    public function setMemberId($member_id)
    {
        $this->container['member_id'] = $member_id;

        return $this;
    }

    /**
     * Gets member_name
     *
     * @return string
     */
    public function getMemberName()
    {
        return $this->container['member_name'];
    }

    /**
     * Sets member_name
     *
     * @param string $member_name member_name
     *
     * @return $this
     */
    public function setMemberName($member_name)
    {
        $this->container['member_name'] = $member_name;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param string $create_time create_time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets modify_time
     *
     * @return string
     */
    public function getModifyTime()
    {
        return $this->container['modify_time'];
    }

    /**
     * Sets modify_time
     *
     * @param string $modify_time modify_time
     *
     * @return $this
     */
    public function setModifyTime($modify_time)
    {
        $this->container['modify_time'] = $modify_time;

        return $this;
    }

    /**
     * Gets last_integral
     *
     * @return string
     */
    public function getLastIntegral()
    {
        return $this->container['last_integral'];
    }

    /**
     * Sets last_integral
     *
     * @param string $last_integral last_integral
     *
     * @return $this
     */
    public function setLastIntegral($last_integral)
    {
        $this->container['last_integral'] = $last_integral;

        return $this;
    }

    /**
     * Gets occur
     *
     * @return string
     */
    public function getOccur()
    {
        return $this->container['occur'];
    }

    /**
     * Sets occur
     *
     * @param string $occur occur
     *
     * @return $this
     */
    public function setOccur($occur)
    {
        $this->container['occur'] = $occur;

        return $this;
    }

    /**
     * Gets integral
     *
     * @return string
     */
    public function getIntegral()
    {
        return $this->container['integral'];
    }

    /**
     * Sets integral
     *
     * @param string $integral integral
     *
     * @return $this
     */
    public function setIntegral($integral)
    {
        $this->container['integral'] = $integral;

        return $this;
    }

    /**
     * Gets type_number
     *
     * @return string
     */
    public function getTypeNumber()
    {
        return $this->container['type_number'];
    }

    /**
     * Sets type_number
     *
     * @param string $type_number type_number
     *
     * @return $this
     */
    public function setTypeNumber($type_number)
    {
        $this->container['type_number'] = $type_number;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return string
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param string $type_id type_id
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets type_name
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->container['type_name'];
    }

    /**
     * Sets type_name
     *
     * @param string $type_name type_name
     *
     * @return $this
     */
    public function setTypeName($type_name)
    {
        $this->container['type_name'] = $type_name;

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

