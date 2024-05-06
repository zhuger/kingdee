<?php
/**
 * GroupSaveRequest
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
 * GroupSaveRequest Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GroupSaveRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GroupSaveRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'number' => 'string',
        'note' => 'string',
        'parent_id' => 'string',
        'depr_method_id' => 'string',
        'number_rule' => 'string',
        'years' => 'string',
        'periods' => 'string',
        'residue_rate' => 'string',
        'depr_policy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'number' => null,
        'note' => null,
        'parent_id' => null,
        'depr_method_id' => null,
        'number_rule' => null,
        'years' => null,
        'periods' => null,
        'residue_rate' => null,
        'depr_policy' => null
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
        'name' => 'name',
        'number' => 'number',
        'note' => 'note',
        'parent_id' => 'parent_id',
        'depr_method_id' => 'depr_method_id',
        'number_rule' => 'number_rule',
        'years' => 'years',
        'periods' => 'periods',
        'residue_rate' => 'residue_rate',
        'depr_policy' => 'depr_policy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'number' => 'setNumber',
        'note' => 'setNote',
        'parent_id' => 'setParentId',
        'depr_method_id' => 'setDeprMethodId',
        'number_rule' => 'setNumberRule',
        'years' => 'setYears',
        'periods' => 'setPeriods',
        'residue_rate' => 'setResidueRate',
        'depr_policy' => 'setDeprPolicy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'number' => 'getNumber',
        'note' => 'getNote',
        'parent_id' => 'getParentId',
        'depr_method_id' => 'getDeprMethodId',
        'number_rule' => 'getNumberRule',
        'years' => 'getYears',
        'periods' => 'getPeriods',
        'residue_rate' => 'getResidueRate',
        'depr_policy' => 'getDeprPolicy'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['depr_method_id'] = isset($data['depr_method_id']) ? $data['depr_method_id'] : null;
        $this->container['number_rule'] = isset($data['number_rule']) ? $data['number_rule'] : null;
        $this->container['years'] = isset($data['years']) ? $data['years'] : null;
        $this->container['periods'] = isset($data['periods']) ? $data['periods'] : null;
        $this->container['residue_rate'] = isset($data['residue_rate']) ? $data['residue_rate'] : null;
        $this->container['depr_policy'] = isset($data['depr_policy']) ? $data['depr_policy'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id parent_id
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets depr_method_id
     *
     * @return string
     */
    public function getDeprMethodId()
    {
        return $this->container['depr_method_id'];
    }

    /**
     * Sets depr_method_id
     *
     * @param string $depr_method_id depr_method_id
     *
     * @return $this
     */
    public function setDeprMethodId($depr_method_id)
    {
        $this->container['depr_method_id'] = $depr_method_id;

        return $this;
    }

    /**
     * Gets number_rule
     *
     * @return string
     */
    public function getNumberRule()
    {
        return $this->container['number_rule'];
    }

    /**
     * Sets number_rule
     *
     * @param string $number_rule number_rule
     *
     * @return $this
     */
    public function setNumberRule($number_rule)
    {
        $this->container['number_rule'] = $number_rule;

        return $this;
    }

    /**
     * Gets years
     *
     * @return string
     */
    public function getYears()
    {
        return $this->container['years'];
    }

    /**
     * Sets years
     *
     * @param string $years years
     *
     * @return $this
     */
    public function setYears($years)
    {
        $this->container['years'] = $years;

        return $this;
    }

    /**
     * Gets periods
     *
     * @return string
     */
    public function getPeriods()
    {
        return $this->container['periods'];
    }

    /**
     * Sets periods
     *
     * @param string $periods periods
     *
     * @return $this
     */
    public function setPeriods($periods)
    {
        $this->container['periods'] = $periods;

        return $this;
    }

    /**
     * Gets residue_rate
     *
     * @return string
     */
    public function getResidueRate()
    {
        return $this->container['residue_rate'];
    }

    /**
     * Sets residue_rate
     *
     * @param string $residue_rate residue_rate
     *
     * @return $this
     */
    public function setResidueRate($residue_rate)
    {
        $this->container['residue_rate'] = $residue_rate;

        return $this;
    }

    /**
     * Gets depr_policy
     *
     * @return string
     */
    public function getDeprPolicy()
    {
        return $this->container['depr_policy'];
    }

    /**
     * Sets depr_policy
     *
     * @param string $depr_policy depr_policy
     *
     * @return $this
     */
    public function setDeprPolicy($depr_policy)
    {
        $this->container['depr_policy'] = $depr_policy;

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


