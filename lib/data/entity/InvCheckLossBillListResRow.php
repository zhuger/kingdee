<?php
/**
 * InvCheckLossBillListResRow
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
 * InvCheckLossBillListResRow Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvCheckLossBillListResRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvCheckLossBillListRes.Row';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create_time' => 'string',
        'audit_time' => 'string',
        'bill_date' => 'string',
        'id' => 'string',
        'bill_no' => 'string',
        'bill_status' => 'string',
        'remark' => 'string',
        'creator_id' => 'string',
        'creator_name' => 'string',
        'creator_number' => 'string',
        'auditor_id' => 'string',
        'auditor_name' => 'string',
        'auditor_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'create_time' => null,
        'audit_time' => null,
        'bill_date' => null,
        'id' => null,
        'bill_no' => null,
        'bill_status' => null,
        'remark' => null,
        'creator_id' => null,
        'creator_name' => null,
        'creator_number' => null,
        'auditor_id' => null,
        'auditor_name' => null,
        'auditor_number' => null
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
        'create_time' => 'create_time',
        'audit_time' => 'audit_time',
        'bill_date' => 'bill_date',
        'id' => 'id',
        'bill_no' => 'bill_no',
        'bill_status' => 'bill_status',
        'remark' => 'remark',
        'creator_id' => 'creator_id',
        'creator_name' => 'creator_name',
        'creator_number' => 'creator_number',
        'auditor_id' => 'auditor_id',
        'auditor_name' => 'auditor_name',
        'auditor_number' => 'auditor_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_time' => 'setCreateTime',
        'audit_time' => 'setAuditTime',
        'bill_date' => 'setBillDate',
        'id' => 'setId',
        'bill_no' => 'setBillNo',
        'bill_status' => 'setBillStatus',
        'remark' => 'setRemark',
        'creator_id' => 'setCreatorId',
        'creator_name' => 'setCreatorName',
        'creator_number' => 'setCreatorNumber',
        'auditor_id' => 'setAuditorId',
        'auditor_name' => 'setAuditorName',
        'auditor_number' => 'setAuditorNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_time' => 'getCreateTime',
        'audit_time' => 'getAuditTime',
        'bill_date' => 'getBillDate',
        'id' => 'getId',
        'bill_no' => 'getBillNo',
        'bill_status' => 'getBillStatus',
        'remark' => 'getRemark',
        'creator_id' => 'getCreatorId',
        'creator_name' => 'getCreatorName',
        'creator_number' => 'getCreatorNumber',
        'auditor_id' => 'getAuditorId',
        'auditor_name' => 'getAuditorName',
        'auditor_number' => 'getAuditorNumber'
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
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['audit_time'] = isset($data['audit_time']) ? $data['audit_time'] : null;
        $this->container['bill_date'] = isset($data['bill_date']) ? $data['bill_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['bill_no'] = isset($data['bill_no']) ? $data['bill_no'] : null;
        $this->container['bill_status'] = isset($data['bill_status']) ? $data['bill_status'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['creator_name'] = isset($data['creator_name']) ? $data['creator_name'] : null;
        $this->container['creator_number'] = isset($data['creator_number']) ? $data['creator_number'] : null;
        $this->container['auditor_id'] = isset($data['auditor_id']) ? $data['auditor_id'] : null;
        $this->container['auditor_name'] = isset($data['auditor_name']) ? $data['auditor_name'] : null;
        $this->container['auditor_number'] = isset($data['auditor_number']) ? $data['auditor_number'] : null;
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
     * Gets auditor_id
     *
     * @return string
     */
    public function getAuditorId()
    {
        return $this->container['auditor_id'];
    }

    /**
     * Sets auditor_id
     *
     * @param string $auditor_id auditor_id
     *
     * @return $this
     */
    public function setAuditorId($auditor_id)
    {
        $this->container['auditor_id'] = $auditor_id;

        return $this;
    }

    /**
     * Gets auditor_name
     *
     * @return string
     */
    public function getAuditorName()
    {
        return $this->container['auditor_name'];
    }

    /**
     * Sets auditor_name
     *
     * @param string $auditor_name auditor_name
     *
     * @return $this
     */
    public function setAuditorName($auditor_name)
    {
        $this->container['auditor_name'] = $auditor_name;

        return $this;
    }

    /**
     * Gets auditor_number
     *
     * @return string
     */
    public function getAuditorNumber()
    {
        return $this->container['auditor_number'];
    }

    /**
     * Sets auditor_number
     *
     * @param string $auditor_number auditor_number
     *
     * @return $this
     */
    public function setAuditorNumber($auditor_number)
    {
        $this->container['auditor_number'] = $auditor_number;

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


