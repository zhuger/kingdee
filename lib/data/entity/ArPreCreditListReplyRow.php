<?php
/**
 * ArPreCreditListReplyRow
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
 * ArPreCreditListReplyRow Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ArPreCreditListReplyRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ArPreCreditListReply.Row';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'bill_date' => 'string',
        'bill_no' => 'string',
        'bill_status' => 'string',
        'customer_id' => 'string',
        'customer_number' => 'string',
        'customer_name' => 'string',
        'emp_id' => 'string',
        'emp_number' => 'string',
        'emp_name' => 'string',
        'dept_id' => 'string',
        'dept_number' => 'string',
        'dept_name' => 'string',
        'currency_id' => 'string',
        'currency_number' => 'string',
        'currency_name' => 'string',
        'exchange_rate' => 'string',
        'total_amount' => 'string',
        'total_amount_for' => 'string',
        'total_discount_amount' => 'string',
        'total_discount_amount_for' => 'string',
        'total_settle_amount' => 'string',
        'total_settle_amount_for' => 'string',
        'remark' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'bill_date' => null,
        'bill_no' => null,
        'bill_status' => null,
        'customer_id' => null,
        'customer_number' => null,
        'customer_name' => null,
        'emp_id' => null,
        'emp_number' => null,
        'emp_name' => null,
        'dept_id' => null,
        'dept_number' => null,
        'dept_name' => null,
        'currency_id' => null,
        'currency_number' => null,
        'currency_name' => null,
        'exchange_rate' => null,
        'total_amount' => null,
        'total_amount_for' => null,
        'total_discount_amount' => null,
        'total_discount_amount_for' => null,
        'total_settle_amount' => null,
        'total_settle_amount_for' => null,
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
        'id' => 'id',
        'bill_date' => 'bill_date',
        'bill_no' => 'bill_no',
        'bill_status' => 'bill_status',
        'customer_id' => 'customer_id',
        'customer_number' => 'customer_number',
        'customer_name' => 'customer_name',
        'emp_id' => 'emp_id',
        'emp_number' => 'emp_number',
        'emp_name' => 'emp_name',
        'dept_id' => 'dept_id',
        'dept_number' => 'dept_number',
        'dept_name' => 'dept_name',
        'currency_id' => 'currency_id',
        'currency_number' => 'currency_number',
        'currency_name' => 'currency_name',
        'exchange_rate' => 'exchange_rate',
        'total_amount' => 'total_amount',
        'total_amount_for' => 'total_amount_for',
        'total_discount_amount' => 'total_discount_amount',
        'total_discount_amount_for' => 'total_discount_amount_for',
        'total_settle_amount' => 'total_settle_amount',
        'total_settle_amount_for' => 'total_settle_amount_for',
        'remark' => 'remark'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'bill_date' => 'setBillDate',
        'bill_no' => 'setBillNo',
        'bill_status' => 'setBillStatus',
        'customer_id' => 'setCustomerId',
        'customer_number' => 'setCustomerNumber',
        'customer_name' => 'setCustomerName',
        'emp_id' => 'setEmpId',
        'emp_number' => 'setEmpNumber',
        'emp_name' => 'setEmpName',
        'dept_id' => 'setDeptId',
        'dept_number' => 'setDeptNumber',
        'dept_name' => 'setDeptName',
        'currency_id' => 'setCurrencyId',
        'currency_number' => 'setCurrencyNumber',
        'currency_name' => 'setCurrencyName',
        'exchange_rate' => 'setExchangeRate',
        'total_amount' => 'setTotalAmount',
        'total_amount_for' => 'setTotalAmountFor',
        'total_discount_amount' => 'setTotalDiscountAmount',
        'total_discount_amount_for' => 'setTotalDiscountAmountFor',
        'total_settle_amount' => 'setTotalSettleAmount',
        'total_settle_amount_for' => 'setTotalSettleAmountFor',
        'remark' => 'setRemark'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'bill_date' => 'getBillDate',
        'bill_no' => 'getBillNo',
        'bill_status' => 'getBillStatus',
        'customer_id' => 'getCustomerId',
        'customer_number' => 'getCustomerNumber',
        'customer_name' => 'getCustomerName',
        'emp_id' => 'getEmpId',
        'emp_number' => 'getEmpNumber',
        'emp_name' => 'getEmpName',
        'dept_id' => 'getDeptId',
        'dept_number' => 'getDeptNumber',
        'dept_name' => 'getDeptName',
        'currency_id' => 'getCurrencyId',
        'currency_number' => 'getCurrencyNumber',
        'currency_name' => 'getCurrencyName',
        'exchange_rate' => 'getExchangeRate',
        'total_amount' => 'getTotalAmount',
        'total_amount_for' => 'getTotalAmountFor',
        'total_discount_amount' => 'getTotalDiscountAmount',
        'total_discount_amount_for' => 'getTotalDiscountAmountFor',
        'total_settle_amount' => 'getTotalSettleAmount',
        'total_settle_amount_for' => 'getTotalSettleAmountFor',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['bill_date'] = isset($data['bill_date']) ? $data['bill_date'] : null;
        $this->container['bill_no'] = isset($data['bill_no']) ? $data['bill_no'] : null;
        $this->container['bill_status'] = isset($data['bill_status']) ? $data['bill_status'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['customer_name'] = isset($data['customer_name']) ? $data['customer_name'] : null;
        $this->container['emp_id'] = isset($data['emp_id']) ? $data['emp_id'] : null;
        $this->container['emp_number'] = isset($data['emp_number']) ? $data['emp_number'] : null;
        $this->container['emp_name'] = isset($data['emp_name']) ? $data['emp_name'] : null;
        $this->container['dept_id'] = isset($data['dept_id']) ? $data['dept_id'] : null;
        $this->container['dept_number'] = isset($data['dept_number']) ? $data['dept_number'] : null;
        $this->container['dept_name'] = isset($data['dept_name']) ? $data['dept_name'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['currency_number'] = isset($data['currency_number']) ? $data['currency_number'] : null;
        $this->container['currency_name'] = isset($data['currency_name']) ? $data['currency_name'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['total_amount_for'] = isset($data['total_amount_for']) ? $data['total_amount_for'] : null;
        $this->container['total_discount_amount'] = isset($data['total_discount_amount']) ? $data['total_discount_amount'] : null;
        $this->container['total_discount_amount_for'] = isset($data['total_discount_amount_for']) ? $data['total_discount_amount_for'] : null;
        $this->container['total_settle_amount'] = isset($data['total_settle_amount']) ? $data['total_settle_amount'] : null;
        $this->container['total_settle_amount_for'] = isset($data['total_settle_amount_for']) ? $data['total_settle_amount_for'] : null;
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
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id customer_id
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param string $customer_number customer_number
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets customer_name
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string $customer_name customer_name
     *
     * @return $this
     */
    public function setCustomerName($customer_name)
    {
        $this->container['customer_name'] = $customer_name;

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
     * Gets dept_number
     *
     * @return string
     */
    public function getDeptNumber()
    {
        return $this->container['dept_number'];
    }

    /**
     * Sets dept_number
     *
     * @param string $dept_number dept_number
     *
     * @return $this
     */
    public function setDeptNumber($dept_number)
    {
        $this->container['dept_number'] = $dept_number;

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
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id currency_id
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

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
     * Gets currency_name
     *
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->container['currency_name'];
    }

    /**
     * Sets currency_name
     *
     * @param string $currency_name currency_name
     *
     * @return $this
     */
    public function setCurrencyName($currency_name)
    {
        $this->container['currency_name'] = $currency_name;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return string
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param string $exchange_rate exchange_rate
     *
     * @return $this
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param string $total_amount total_amount
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets total_amount_for
     *
     * @return string
     */
    public function getTotalAmountFor()
    {
        return $this->container['total_amount_for'];
    }

    /**
     * Sets total_amount_for
     *
     * @param string $total_amount_for total_amount_for
     *
     * @return $this
     */
    public function setTotalAmountFor($total_amount_for)
    {
        $this->container['total_amount_for'] = $total_amount_for;

        return $this;
    }

    /**
     * Gets total_discount_amount
     *
     * @return string
     */
    public function getTotalDiscountAmount()
    {
        return $this->container['total_discount_amount'];
    }

    /**
     * Sets total_discount_amount
     *
     * @param string $total_discount_amount total_discount_amount
     *
     * @return $this
     */
    public function setTotalDiscountAmount($total_discount_amount)
    {
        $this->container['total_discount_amount'] = $total_discount_amount;

        return $this;
    }

    /**
     * Gets total_discount_amount_for
     *
     * @return string
     */
    public function getTotalDiscountAmountFor()
    {
        return $this->container['total_discount_amount_for'];
    }

    /**
     * Sets total_discount_amount_for
     *
     * @param string $total_discount_amount_for total_discount_amount_for
     *
     * @return $this
     */
    public function setTotalDiscountAmountFor($total_discount_amount_for)
    {
        $this->container['total_discount_amount_for'] = $total_discount_amount_for;

        return $this;
    }

    /**
     * Gets total_settle_amount
     *
     * @return string
     */
    public function getTotalSettleAmount()
    {
        return $this->container['total_settle_amount'];
    }

    /**
     * Sets total_settle_amount
     *
     * @param string $total_settle_amount total_settle_amount
     *
     * @return $this
     */
    public function setTotalSettleAmount($total_settle_amount)
    {
        $this->container['total_settle_amount'] = $total_settle_amount;

        return $this;
    }

    /**
     * Gets total_settle_amount_for
     *
     * @return string
     */
    public function getTotalSettleAmountFor()
    {
        return $this->container['total_settle_amount_for'];
    }

    /**
     * Sets total_settle_amount_for
     *
     * @param string $total_settle_amount_for total_settle_amount_for
     *
     * @return $this
     */
    public function setTotalSettleAmountFor($total_settle_amount_for)
    {
        $this->container['total_settle_amount_for'] = $total_settle_amount_for;

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

