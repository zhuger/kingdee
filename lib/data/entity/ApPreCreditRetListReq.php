<?php
/**
 * ApPreCreditRetListReq
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
 * ApPreCreditRetListReq Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApPreCreditRetListReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApPreCreditRet_listReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'modify_end_time' => 'string',
        'create_start_time' => 'string',
        'end_bill_date' => 'string',
        'modify_start_time' => 'string',
        'supplier_group_id' => 'string',
        'create_end_time' => 'string',
        'source_bill_id' => 'string',
        'bill_status' => 'string',
        'search' => 'string',
        'page' => 'string',
        'dept_id' => 'string',
        'supplier_id' => 'string',
        'start_bill_date' => 'string',
        'page_size' => 'string',
        'emp_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'modify_end_time' => null,
        'create_start_time' => null,
        'end_bill_date' => null,
        'modify_start_time' => null,
        'supplier_group_id' => null,
        'create_end_time' => null,
        'source_bill_id' => null,
        'bill_status' => null,
        'search' => null,
        'page' => null,
        'dept_id' => null,
        'supplier_id' => null,
        'start_bill_date' => null,
        'page_size' => null,
        'emp_id' => null
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
        'modify_end_time' => 'modify_end_time',
        'create_start_time' => 'create_start_time',
        'end_bill_date' => 'end_bill_date',
        'modify_start_time' => 'modify_start_time',
        'supplier_group_id' => 'supplier_group_id',
        'create_end_time' => 'create_end_time',
        'source_bill_id' => 'source_bill_id',
        'bill_status' => 'bill_status',
        'search' => 'search',
        'page' => 'page',
        'dept_id' => 'dept_id',
        'supplier_id' => 'supplier_id',
        'start_bill_date' => 'start_bill_date',
        'page_size' => 'page_size',
        'emp_id' => 'emp_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'modify_end_time' => 'setModifyEndTime',
        'create_start_time' => 'setCreateStartTime',
        'end_bill_date' => 'setEndBillDate',
        'modify_start_time' => 'setModifyStartTime',
        'supplier_group_id' => 'setSupplierGroupId',
        'create_end_time' => 'setCreateEndTime',
        'source_bill_id' => 'setSourceBillId',
        'bill_status' => 'setBillStatus',
        'search' => 'setSearch',
        'page' => 'setPage',
        'dept_id' => 'setDeptId',
        'supplier_id' => 'setSupplierId',
        'start_bill_date' => 'setStartBillDate',
        'page_size' => 'setPageSize',
        'emp_id' => 'setEmpId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'modify_end_time' => 'getModifyEndTime',
        'create_start_time' => 'getCreateStartTime',
        'end_bill_date' => 'getEndBillDate',
        'modify_start_time' => 'getModifyStartTime',
        'supplier_group_id' => 'getSupplierGroupId',
        'create_end_time' => 'getCreateEndTime',
        'source_bill_id' => 'getSourceBillId',
        'bill_status' => 'getBillStatus',
        'search' => 'getSearch',
        'page' => 'getPage',
        'dept_id' => 'getDeptId',
        'supplier_id' => 'getSupplierId',
        'start_bill_date' => 'getStartBillDate',
        'page_size' => 'getPageSize',
        'emp_id' => 'getEmpId'
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
        $this->container['modify_end_time'] = isset($data['modify_end_time']) ? $data['modify_end_time'] : null;
        $this->container['create_start_time'] = isset($data['create_start_time']) ? $data['create_start_time'] : null;
        $this->container['end_bill_date'] = isset($data['end_bill_date']) ? $data['end_bill_date'] : null;
        $this->container['modify_start_time'] = isset($data['modify_start_time']) ? $data['modify_start_time'] : null;
        $this->container['supplier_group_id'] = isset($data['supplier_group_id']) ? $data['supplier_group_id'] : null;
        $this->container['create_end_time'] = isset($data['create_end_time']) ? $data['create_end_time'] : null;
        $this->container['source_bill_id'] = isset($data['source_bill_id']) ? $data['source_bill_id'] : null;
        $this->container['bill_status'] = isset($data['bill_status']) ? $data['bill_status'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['dept_id'] = isset($data['dept_id']) ? $data['dept_id'] : null;
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['start_bill_date'] = isset($data['start_bill_date']) ? $data['start_bill_date'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['emp_id'] = isset($data['emp_id']) ? $data['emp_id'] : null;
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
     * Gets modify_end_time
     *
     * @return string
     */
    public function getModifyEndTime()
    {
        return $this->container['modify_end_time'];
    }

    /**
     * Sets modify_end_time
     *
     * @param string $modify_end_time modify_end_time
     *
     * @return $this
     */
    public function setModifyEndTime($modify_end_time)
    {
        $this->container['modify_end_time'] = $modify_end_time;

        return $this;
    }

    /**
     * Gets create_start_time
     *
     * @return string
     */
    public function getCreateStartTime()
    {
        return $this->container['create_start_time'];
    }

    /**
     * Sets create_start_time
     *
     * @param string $create_start_time create_start_time
     *
     * @return $this
     */
    public function setCreateStartTime($create_start_time)
    {
        $this->container['create_start_time'] = $create_start_time;

        return $this;
    }

    /**
     * Gets end_bill_date
     *
     * @return string
     */
    public function getEndBillDate()
    {
        return $this->container['end_bill_date'];
    }

    /**
     * Sets end_bill_date
     *
     * @param string $end_bill_date end_bill_date
     *
     * @return $this
     */
    public function setEndBillDate($end_bill_date)
    {
        $this->container['end_bill_date'] = $end_bill_date;

        return $this;
    }

    /**
     * Gets modify_start_time
     *
     * @return string
     */
    public function getModifyStartTime()
    {
        return $this->container['modify_start_time'];
    }

    /**
     * Sets modify_start_time
     *
     * @param string $modify_start_time modify_start_time
     *
     * @return $this
     */
    public function setModifyStartTime($modify_start_time)
    {
        $this->container['modify_start_time'] = $modify_start_time;

        return $this;
    }

    /**
     * Gets supplier_group_id
     *
     * @return string
     */
    public function getSupplierGroupId()
    {
        return $this->container['supplier_group_id'];
    }

    /**
     * Sets supplier_group_id
     *
     * @param string $supplier_group_id supplier_group_id
     *
     * @return $this
     */
    public function setSupplierGroupId($supplier_group_id)
    {
        $this->container['supplier_group_id'] = $supplier_group_id;

        return $this;
    }

    /**
     * Gets create_end_time
     *
     * @return string
     */
    public function getCreateEndTime()
    {
        return $this->container['create_end_time'];
    }

    /**
     * Sets create_end_time
     *
     * @param string $create_end_time create_end_time
     *
     * @return $this
     */
    public function setCreateEndTime($create_end_time)
    {
        $this->container['create_end_time'] = $create_end_time;

        return $this;
    }

    /**
     * Gets source_bill_id
     *
     * @return string
     */
    public function getSourceBillId()
    {
        return $this->container['source_bill_id'];
    }

    /**
     * Sets source_bill_id
     *
     * @param string $source_bill_id source_bill_id
     *
     * @return $this
     */
    public function setSourceBillId($source_bill_id)
    {
        $this->container['source_bill_id'] = $source_bill_id;

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
     * Gets search
     *
     * @return string
     */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
     * Sets search
     *
     * @param string $search search
     *
     * @return $this
     */
    public function setSearch($search)
    {
        $this->container['search'] = $search;

        return $this;
    }

    /**
     * Gets page
     *
     * @return string
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param string $page page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets dept_id
     *
     * @return string
     */
    public function getDeptId()
    {
        return $this->container['dept_id'];
    }

    /**
     * Sets dept_id
     *
     * @param string $dept_id dept_id
     *
     * @return $this
     */
    public function setDeptId($dept_id)
    {
        $this->container['dept_id'] = $dept_id;

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
     * Gets start_bill_date
     *
     * @return string
     */
    public function getStartBillDate()
    {
        return $this->container['start_bill_date'];
    }

    /**
     * Sets start_bill_date
     *
     * @param string $start_bill_date start_bill_date
     *
     * @return $this
     */
    public function setStartBillDate($start_bill_date)
    {
        $this->container['start_bill_date'] = $start_bill_date;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return string
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param string $page_size page_size
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

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


