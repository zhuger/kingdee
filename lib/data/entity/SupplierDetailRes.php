<?php
/**
 * SupplierDetailRes
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
 * SupplierDetailRes Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupplierDetailRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SupplierDetailRes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'number' => 'string',
        'name' => 'string',
        'enable' => 'string',
        'group_name' => 'string',
        'saler_name' => 'string',
        'sale_dept_name' => 'string',
        'bom_entity' => '\com_kingdee_service\data\entity\Bomentity[]',
        'custom_field' => 'map[string,string]',
        'taxpayer_no' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'number' => null,
        'name' => null,
        'enable' => null,
        'group_name' => null,
        'saler_name' => null,
        'sale_dept_name' => null,
        'bom_entity' => null,
        'custom_field' => null,
        'taxpayer_no' => null
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
        'number' => 'number',
        'name' => 'name',
        'enable' => 'enable',
        'group_name' => 'group_name',
        'saler_name' => 'saler_name',
        'sale_dept_name' => 'sale_dept_name',
        'bom_entity' => 'bom_entity',
        'custom_field' => 'custom_field',
        'taxpayer_no' => 'taxpayer_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'number' => 'setNumber',
        'name' => 'setName',
        'enable' => 'setEnable',
        'group_name' => 'setGroupName',
        'saler_name' => 'setSalerName',
        'sale_dept_name' => 'setSaleDeptName',
        'bom_entity' => 'setBomEntity',
        'custom_field' => 'setCustomField',
        'taxpayer_no' => 'setTaxpayerNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'number' => 'getNumber',
        'name' => 'getName',
        'enable' => 'getEnable',
        'group_name' => 'getGroupName',
        'saler_name' => 'getSalerName',
        'sale_dept_name' => 'getSaleDeptName',
        'bom_entity' => 'getBomEntity',
        'custom_field' => 'getCustomField',
        'taxpayer_no' => 'getTaxpayerNo'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['group_name'] = isset($data['group_name']) ? $data['group_name'] : null;
        $this->container['saler_name'] = isset($data['saler_name']) ? $data['saler_name'] : null;
        $this->container['sale_dept_name'] = isset($data['sale_dept_name']) ? $data['sale_dept_name'] : null;
        $this->container['bom_entity'] = isset($data['bom_entity']) ? $data['bom_entity'] : null;
        $this->container['custom_field'] = isset($data['custom_field']) ? $data['custom_field'] : null;
        $this->container['taxpayer_no'] = isset($data['taxpayer_no']) ? $data['taxpayer_no'] : null;
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
     * Gets enable
     *
     * @return string
     */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
     * Sets enable
     *
     * @param string $enable enable
     *
     * @return $this
     */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string $group_name group_name
     *
     * @return $this
     */
    public function setGroupName($group_name)
    {
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets saler_name
     *
     * @return string
     */
    public function getSalerName()
    {
        return $this->container['saler_name'];
    }

    /**
     * Sets saler_name
     *
     * @param string $saler_name saler_name
     *
     * @return $this
     */
    public function setSalerName($saler_name)
    {
        $this->container['saler_name'] = $saler_name;

        return $this;
    }

    /**
     * Gets sale_dept_name
     *
     * @return string
     */
    public function getSaleDeptName()
    {
        return $this->container['sale_dept_name'];
    }

    /**
     * Sets sale_dept_name
     *
     * @param string $sale_dept_name sale_dept_name
     *
     * @return $this
     */
    public function setSaleDeptName($sale_dept_name)
    {
        $this->container['sale_dept_name'] = $sale_dept_name;

        return $this;
    }

    /**
     * Gets bom_entity
     *
     * @return \com_kingdee_service\data\entity\Bomentity[]
     */
    public function getBomEntity()
    {
        return $this->container['bom_entity'];
    }

    /**
     * Sets bom_entity
     *
     * @param \com_kingdee_service\data\entity\Bomentity[] $bom_entity bom_entity
     *
     * @return $this
     */
    public function setBomEntity($bom_entity)
    {
        $this->container['bom_entity'] = $bom_entity;

        return $this;
    }

    /**
     * Gets custom_field
     *
     * @return map[string,string]
     */
    public function getCustomField()
    {
        return $this->container['custom_field'];
    }

    /**
     * Sets custom_field
     *
     * @param map[string,string] $custom_field custom_field
     *
     * @return $this
     */
    public function setCustomField($custom_field)
    {
        $this->container['custom_field'] = $custom_field;

        return $this;
    }

    /**
     * Gets taxpayer_no
     *
     * @return string
     */
    public function getTaxpayerNo()
    {
        return $this->container['taxpayer_no'];
    }

    /**
     * Sets taxpayer_no
     *
     * @param string $taxpayer_no taxpayer_no
     *
     * @return $this
     */
    public function setTaxpayerNo($taxpayer_no)
    {
        $this->container['taxpayer_no'] = $taxpayer_no;

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


