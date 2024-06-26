<?php
/**
 * OrderListReplyOrderList
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
 * OrderListReplyOrderList Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderListReplyOrderList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderListReply.OrderList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create_time' => 'string',
        'bill_date' => 'string',
        'id' => 'string',
        'bill_no' => 'string',
        'bill_status' => 'string',
        'bill_close_state' => 'string',
        'supplier_id' => 'string',
        'supplier_name' => 'string',
        'supplier_number' => 'string',
        'emp_id' => 'string',
        'emp_name' => 'string',
        'emp_number' => 'string',
        'remark' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'create_time' => null,
        'bill_date' => null,
        'id' => null,
        'bill_no' => null,
        'bill_status' => null,
        'bill_close_state' => null,
        'supplier_id' => null,
        'supplier_name' => null,
        'supplier_number' => null,
        'emp_id' => null,
        'emp_name' => null,
        'emp_number' => null,
        'remark' => null
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
        'bill_date' => 'bill_date',
        'id' => 'id',
        'bill_no' => 'bill_no',
        'bill_status' => 'bill_status',
        'bill_close_state' => 'bill_close_state',
        'supplier_id' => 'supplier_id',
        'supplier_name' => 'supplier_name',
        'supplier_number' => 'supplier_number',
        'emp_id' => 'emp_id',
        'emp_name' => 'emp_name',
        'emp_number' => 'emp_number',
        'remark' => 'remark'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_time' => 'setCreateTime',
        'bill_date' => 'setBillDate',
        'id' => 'setId',
        'bill_no' => 'setBillNo',
        'bill_status' => 'setBillStatus',
        'bill_close_state' => 'setBillCloseState',
        'supplier_id' => 'setSupplierId',
        'supplier_name' => 'setSupplierName',
        'supplier_number' => 'setSupplierNumber',
        'emp_id' => 'setEmpId',
        'emp_name' => 'setEmpName',
        'emp_number' => 'setEmpNumber',
        'remark' => 'setRemark'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_time' => 'getCreateTime',
        'bill_date' => 'getBillDate',
        'id' => 'getId',
        'bill_no' => 'getBillNo',
        'bill_status' => 'getBillStatus',
        'bill_close_state' => 'getBillCloseState',
        'supplier_id' => 'getSupplierId',
        'supplier_name' => 'getSupplierName',
        'supplier_number' => 'getSupplierNumber',
        'emp_id' => 'getEmpId',
        'emp_name' => 'getEmpName',
        'emp_number' => 'getEmpNumber',
        'remark' => 'getRemark'
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
        $this->container['bill_date'] = isset($data['bill_date']) ? $data['bill_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['bill_no'] = isset($data['bill_no']) ? $data['bill_no'] : null;
        $this->container['bill_status'] = isset($data['bill_status']) ? $data['bill_status'] : null;
        $this->container['bill_close_state'] = isset($data['bill_close_state']) ? $data['bill_close_state'] : null;
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['supplier_name'] = isset($data['supplier_name']) ? $data['supplier_name'] : null;
        $this->container['supplier_number'] = isset($data['supplier_number']) ? $data['supplier_number'] : null;
        $this->container['emp_id'] = isset($data['emp_id']) ? $data['emp_id'] : null;
        $this->container['emp_name'] = isset($data['emp_name']) ? $data['emp_name'] : null;
        $this->container['emp_number'] = isset($data['emp_number']) ? $data['emp_number'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
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
     * Gets bill_close_state
     *
     * @return string
     */
    public function getBillCloseState()
    {
        return $this->container['bill_close_state'];
    }

    /**
     * Sets bill_close_state
     *
     * @param string $bill_close_state bill_close_state
     *
     * @return $this
     */
    public function setBillCloseState($bill_close_state)
    {
        $this->container['bill_close_state'] = $bill_close_state;

        return $this;
    }

    /**
     * Gets supplier_id
     *
     * @return string
     */
    public function getSupplierId()
    {
        return $this->container['supplier_id'];
    }

    /**
     * Sets supplier_id
     *
     * @param string $supplier_id supplier_id
     *
     * @return $this
     */
    public function setSupplierId($supplier_id)
    {
        $this->container['supplier_id'] = $supplier_id;

        return $this;
    }

    /**
     * Gets supplier_name
     *
     * @return string
     */
    public function getSupplierName()
    {
        return $this->container['supplier_name'];
    }

    /**
     * Sets supplier_name
     *
     * @param string $supplier_name supplier_name
     *
     * @return $this
     */
    public function setSupplierName($supplier_name)
    {
        $this->container['supplier_name'] = $supplier_name;

        return $this;
    }

    /**
     * Gets supplier_number
     *
     * @return string
     */
    public function getSupplierNumber()
    {
        return $this->container['supplier_number'];
    }

    /**
     * Sets supplier_number
     *
     * @param string $supplier_number supplier_number
     *
     * @return $this
     */
    public function setSupplierNumber($supplier_number)
    {
        $this->container['supplier_number'] = $supplier_number;

        return $this;
    }

    /**
     * Gets emp_id
     *
     * @return string
     */
    public function getEmpId()
    {
        return $this->container['emp_id'];
    }

    /**
     * Sets emp_id
     *
     * @param string $emp_id emp_id
     *
     * @return $this
     */
    public function setEmpId($emp_id)
    {
        $this->container['emp_id'] = $emp_id;

        return $this;
    }

    /**
     * Gets emp_name
     *
     * @return string
     */
    public function getEmpName()
    {
        return $this->container['emp_name'];
    }

    /**
     * Sets emp_name
     *
     * @param string $emp_name emp_name
     *
     * @return $this
     */
    public function setEmpName($emp_name)
    {
        $this->container['emp_name'] = $emp_name;

        return $this;
    }

    /**
     * Gets emp_number
     *
     * @return string
     */
    public function getEmpNumber()
    {
        return $this->container['emp_number'];
    }

    /**
     * Sets emp_number
     *
     * @param string $emp_number emp_number
     *
     * @return $this
     */
    public function setEmpNumber($emp_number)
    {
        $this->container['emp_number'] = $emp_number;

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


