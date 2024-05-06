<?php
/**
 * AssembleDetailRes
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
 * AssembleDetailRes Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssembleDetailRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AssembleDetailRes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'bill_no' => 'string',
        'bill_date' => 'string',
        'bill_status' => 'string',
        'create_time' => 'string',
        'modify_time' => 'string',
        'audit_time' => 'string',
        'creator_id' => 'string',
        'creator_name' => 'string',
        'creator_number' => 'string',
        'modifier_id' => 'string',
        'modifier_name' => 'string',
        'modifier_number' => 'string',
        'remark' => 'string',
        'currency_number' => 'string',
        'material_entity' => '\com_kingdee_service\data\entity\AssembleDetailResMaterialEntity[]',
        'custom_field' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'bill_no' => null,
        'bill_date' => null,
        'bill_status' => null,
        'create_time' => null,
        'modify_time' => null,
        'audit_time' => null,
        'creator_id' => null,
        'creator_name' => null,
        'creator_number' => null,
        'modifier_id' => null,
        'modifier_name' => null,
        'modifier_number' => null,
        'remark' => null,
        'currency_number' => null,
        'material_entity' => null,
        'custom_field' => null
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
        'bill_no' => 'bill_no',
        'bill_date' => 'bill_date',
        'bill_status' => 'bill_status',
        'create_time' => 'create_time',
        'modify_time' => 'modify_time',
        'audit_time' => 'audit_time',
        'creator_id' => 'creator_id',
        'creator_name' => 'creator_name',
        'creator_number' => 'creator_number',
        'modifier_id' => 'modifier_id',
        'modifier_name' => 'modifier_name',
        'modifier_number' => 'modifier_number',
        'remark' => 'remark',
        'currency_number' => 'currency_number',
        'material_entity' => 'material_entity',
        'custom_field' => 'custom_field'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'bill_no' => 'setBillNo',
        'bill_date' => 'setBillDate',
        'bill_status' => 'setBillStatus',
        'create_time' => 'setCreateTime',
        'modify_time' => 'setModifyTime',
        'audit_time' => 'setAuditTime',
        'creator_id' => 'setCreatorId',
        'creator_name' => 'setCreatorName',
        'creator_number' => 'setCreatorNumber',
        'modifier_id' => 'setModifierId',
        'modifier_name' => 'setModifierName',
        'modifier_number' => 'setModifierNumber',
        'remark' => 'setRemark',
        'currency_number' => 'setCurrencyNumber',
        'material_entity' => 'setMaterialEntity',
        'custom_field' => 'setCustomField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'bill_no' => 'getBillNo',
        'bill_date' => 'getBillDate',
        'bill_status' => 'getBillStatus',
        'create_time' => 'getCreateTime',
        'modify_time' => 'getModifyTime',
        'audit_time' => 'getAuditTime',
        'creator_id' => 'getCreatorId',
        'creator_name' => 'getCreatorName',
        'creator_number' => 'getCreatorNumber',
        'modifier_id' => 'getModifierId',
        'modifier_name' => 'getModifierName',
        'modifier_number' => 'getModifierNumber',
        'remark' => 'getRemark',
        'currency_number' => 'getCurrencyNumber',
        'material_entity' => 'getMaterialEntity',
        'custom_field' => 'getCustomField'
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
        $this->container['bill_no'] = isset($data['bill_no']) ? $data['bill_no'] : null;
        $this->container['bill_date'] = isset($data['bill_date']) ? $data['bill_date'] : null;
        $this->container['bill_status'] = isset($data['bill_status']) ? $data['bill_status'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['modify_time'] = isset($data['modify_time']) ? $data['modify_time'] : null;
        $this->container['audit_time'] = isset($data['audit_time']) ? $data['audit_time'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['creator_name'] = isset($data['creator_name']) ? $data['creator_name'] : null;
        $this->container['creator_number'] = isset($data['creator_number']) ? $data['creator_number'] : null;
        $this->container['modifier_id'] = isset($data['modifier_id']) ? $data['modifier_id'] : null;
        $this->container['modifier_name'] = isset($data['modifier_name']) ? $data['modifier_name'] : null;
        $this->container['modifier_number'] = isset($data['modifier_number']) ? $data['modifier_number'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['currency_number'] = isset($data['currency_number']) ? $data['currency_number'] : null;
        $this->container['material_entity'] = isset($data['material_entity']) ? $data['material_entity'] : null;
        $this->container['custom_field'] = isset($data['custom_field']) ? $data['custom_field'] : null;
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
     * Gets bill_no
     *
     * @return string
     */
    public function getBillNo()
    {
        return $this->container['bill_no'];
    }

    /**
     * Sets bill_no
     *
     * @param string $bill_no bill_no
     *
     * @return $this
     */
    public function setBillNo($bill_no)
    {
        $this->container['bill_no'] = $bill_no;

        return $this;
    }

    /**
     * Gets bill_date
     *
     * @return string
     */
    public function getBillDate()
    {
        return $this->container['bill_date'];
    }

    /**
     * Sets bill_date
     *
     * @param string $bill_date bill_date
     *
     * @return $this
     */
    public function setBillDate($bill_date)
    {
        $this->container['bill_date'] = $bill_date;

        return $this;
    }

    /**
     * Gets bill_status
     *
     * @return string
     */
    public function getBillStatus()
    {
        return $this->container['bill_status'];
    }

    /**
     * Sets bill_status
     *
     * @param string $bill_status bill_status
     *
     * @return $this
     */
    public function setBillStatus($bill_status)
    {
        $this->container['bill_status'] = $bill_status;

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
     * Gets audit_time
     *
     * @return string
     */
    public function getAuditTime()
    {
        return $this->container['audit_time'];
    }

    /**
     * Sets audit_time
     *
     * @param string $audit_time audit_time
     *
     * @return $this
     */
    public function setAuditTime($audit_time)
    {
        $this->container['audit_time'] = $audit_time;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return string
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param string $creator_id creator_id
     *
     * @return $this
     */
    public function setCreatorId($creator_id)
    {
        $this->container['creator_id'] = $creator_id;

        return $this;
    }

    /**
     * Gets creator_name
     *
     * @return string
     */
    public function getCreatorName()
    {
        return $this->container['creator_name'];
    }

    /**
     * Sets creator_name
     *
     * @param string $creator_name creator_name
     *
     * @return $this
     */
    public function setCreatorName($creator_name)
    {
        $this->container['creator_name'] = $creator_name;

        return $this;
    }

    /**
     * Gets creator_number
     *
     * @return string
     */
    public function getCreatorNumber()
    {
        return $this->container['creator_number'];
    }

    /**
     * Sets creator_number
     *
     * @param string $creator_number creator_number
     *
     * @return $this
     */
    public function setCreatorNumber($creator_number)
    {
        $this->container['creator_number'] = $creator_number;

        return $this;
    }

    /**
     * Gets modifier_id
     *
     * @return string
     */
    public function getModifierId()
    {
        return $this->container['modifier_id'];
    }

    /**
     * Sets modifier_id
     *
     * @param string $modifier_id modifier_id
     *
     * @return $this
     */
    public function setModifierId($modifier_id)
    {
        $this->container['modifier_id'] = $modifier_id;

        return $this;
    }

    /**
     * Gets modifier_name
     *
     * @return string
     */
    public function getModifierName()
    {
        return $this->container['modifier_name'];
    }

    /**
     * Sets modifier_name
     *
     * @param string $modifier_name modifier_name
     *
     * @return $this
     */
    public function setModifierName($modifier_name)
    {
        $this->container['modifier_name'] = $modifier_name;

        return $this;
    }

    /**
     * Gets modifier_number
     *
     * @return string
     */
    public function getModifierNumber()
    {
        return $this->container['modifier_number'];
    }

    /**
     * Sets modifier_number
     *
     * @param string $modifier_number modifier_number
     *
     * @return $this
     */
    public function setModifierNumber($modifier_number)
    {
        $this->container['modifier_number'] = $modifier_number;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string $remark remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets currency_number
     *
     * @return string
     */
    public function getCurrencyNumber()
    {
        return $this->container['currency_number'];
    }

    /**
     * Sets currency_number
     *
     * @param string $currency_number currency_number
     *
     * @return $this
     */
    public function setCurrencyNumber($currency_number)
    {
        $this->container['currency_number'] = $currency_number;

        return $this;
    }

    /**
     * Gets material_entity
     *
     * @return \com_kingdee_service\data\entity\AssembleDetailResMaterialEntity[]
     */
    public function getMaterialEntity()
    {
        return $this->container['material_entity'];
    }

    /**
     * Sets material_entity
     *
     * @param \com_kingdee_service\data\entity\AssembleDetailResMaterialEntity[] $material_entity material_entity
     *
     * @return $this
     */
    public function setMaterialEntity($material_entity)
    {
        $this->container['material_entity'] = $material_entity;

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


