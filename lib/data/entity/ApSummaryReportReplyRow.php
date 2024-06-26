<?php
/**
 * ApSummaryReportReplyRow
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
 * ApSummaryReportReplyRow Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApSummaryReportReplyRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApSummaryReportReply.Row';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'supplier_id' => 'string',
        'supplier_name' => 'string',
        'emp_id' => 'string',
        'emp_name' => 'string',
        'dept_id' => 'string',
        'dept_name' => 'string',
        'supplier_group_id' => 'string',
        'supplier_group_name' => 'string',
        'pre_balance_for' => 'string',
        'scm_balance_for' => 'string',
        'oth_balance_for' => 'string',
        'balance_for' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'supplier_id' => null,
        'supplier_name' => null,
        'emp_id' => null,
        'emp_name' => null,
        'dept_id' => null,
        'dept_name' => null,
        'supplier_group_id' => null,
        'supplier_group_name' => null,
        'pre_balance_for' => null,
        'scm_balance_for' => null,
        'oth_balance_for' => null,
        'balance_for' => null
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
        'supplier_id' => 'supplier_id',
        'supplier_name' => 'supplier_name',
        'emp_id' => 'emp_id',
        'emp_name' => 'emp_name',
        'dept_id' => 'dept_id',
        'dept_name' => 'dept_name',
        'supplier_group_id' => 'supplier_group_id',
        'supplier_group_name' => 'supplier_group_name',
        'pre_balance_for' => 'pre_balance_for',
        'scm_balance_for' => 'scm_balance_for',
        'oth_balance_for' => 'oth_balance_for',
        'balance_for' => 'balance_for'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'supplier_id' => 'setSupplierId',
        'supplier_name' => 'setSupplierName',
        'emp_id' => 'setEmpId',
        'emp_name' => 'setEmpName',
        'dept_id' => 'setDeptId',
        'dept_name' => 'setDeptName',
        'supplier_group_id' => 'setSupplierGroupId',
        'supplier_group_name' => 'setSupplierGroupName',
        'pre_balance_for' => 'setPreBalanceFor',
        'scm_balance_for' => 'setScmBalanceFor',
        'oth_balance_for' => 'setOthBalanceFor',
        'balance_for' => 'setBalanceFor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'supplier_id' => 'getSupplierId',
        'supplier_name' => 'getSupplierName',
        'emp_id' => 'getEmpId',
        'emp_name' => 'getEmpName',
        'dept_id' => 'getDeptId',
        'dept_name' => 'getDeptName',
        'supplier_group_id' => 'getSupplierGroupId',
        'supplier_group_name' => 'getSupplierGroupName',
        'pre_balance_for' => 'getPreBalanceFor',
        'scm_balance_for' => 'getScmBalanceFor',
        'oth_balance_for' => 'getOthBalanceFor',
        'balance_for' => 'getBalanceFor'
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
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['supplier_name'] = isset($data['supplier_name']) ? $data['supplier_name'] : null;
        $this->container['emp_id'] = isset($data['emp_id']) ? $data['emp_id'] : null;
        $this->container['emp_name'] = isset($data['emp_name']) ? $data['emp_name'] : null;
        $this->container['dept_id'] = isset($data['dept_id']) ? $data['dept_id'] : null;
        $this->container['dept_name'] = isset($data['dept_name']) ? $data['dept_name'] : null;
        $this->container['supplier_group_id'] = isset($data['supplier_group_id']) ? $data['supplier_group_id'] : null;
        $this->container['supplier_group_name'] = isset($data['supplier_group_name']) ? $data['supplier_group_name'] : null;
        $this->container['pre_balance_for'] = isset($data['pre_balance_for']) ? $data['pre_balance_for'] : null;
        $this->container['scm_balance_for'] = isset($data['scm_balance_for']) ? $data['scm_balance_for'] : null;
        $this->container['oth_balance_for'] = isset($data['oth_balance_for']) ? $data['oth_balance_for'] : null;
        $this->container['balance_for'] = isset($data['balance_for']) ? $data['balance_for'] : null;
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
     * Gets dept_name
     *
     * @return string
     */
    public function getDeptName()
    {
        return $this->container['dept_name'];
    }

    /**
     * Sets dept_name
     *
     * @param string $dept_name dept_name
     *
     * @return $this
     */
    public function setDeptName($dept_name)
    {
        $this->container['dept_name'] = $dept_name;

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
     * Gets supplier_group_name
     *
     * @return string
     */
    public function getSupplierGroupName()
    {
        return $this->container['supplier_group_name'];
    }

    /**
     * Sets supplier_group_name
     *
     * @param string $supplier_group_name supplier_group_name
     *
     * @return $this
     */
    public function setSupplierGroupName($supplier_group_name)
    {
        $this->container['supplier_group_name'] = $supplier_group_name;

        return $this;
    }

    /**
     * Gets pre_balance_for
     *
     * @return string
     */
    public function getPreBalanceFor()
    {
        return $this->container['pre_balance_for'];
    }

    /**
     * Sets pre_balance_for
     *
     * @param string $pre_balance_for pre_balance_for
     *
     * @return $this
     */
    public function setPreBalanceFor($pre_balance_for)
    {
        $this->container['pre_balance_for'] = $pre_balance_for;

        return $this;
    }

    /**
     * Gets scm_balance_for
     *
     * @return string
     */
    public function getScmBalanceFor()
    {
        return $this->container['scm_balance_for'];
    }

    /**
     * Sets scm_balance_for
     *
     * @param string $scm_balance_for scm_balance_for
     *
     * @return $this
     */
    public function setScmBalanceFor($scm_balance_for)
    {
        $this->container['scm_balance_for'] = $scm_balance_for;

        return $this;
    }

    /**
     * Gets oth_balance_for
     *
     * @return string
     */
    public function getOthBalanceFor()
    {
        return $this->container['oth_balance_for'];
    }

    /**
     * Sets oth_balance_for
     *
     * @param string $oth_balance_for oth_balance_for
     *
     * @return $this
     */
    public function setOthBalanceFor($oth_balance_for)
    {
        $this->container['oth_balance_for'] = $oth_balance_for;

        return $this;
    }

    /**
     * Gets balance_for
     *
     * @return string
     */
    public function getBalanceFor()
    {
        return $this->container['balance_for'];
    }

    /**
     * Sets balance_for
     *
     * @param string $balance_for balance_for
     *
     * @return $this
     */
    public function setBalanceFor($balance_for)
    {
        $this->container['balance_for'] = $balance_for;

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


