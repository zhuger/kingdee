<?php
/**
 * VoucherListReplyRow
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
 * VoucherListReplyRow Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoucherListReplyRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VoucherListReply.Row';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'date' => 'string',
        'period' => 'string',
        'number' => 'string',
        'voucher_no' => 'string',
        'bill_status' => 'string',
        'group_id' => 'string',
        'group_number' => 'string',
        'group_name' => 'string',
        'debit_total' => 'string',
        'credit_total' => 'string',
        'source_bill_type' => 'string',
        'source_bill_id' => 'string',
        'have_reverse' => 'bool',
        'is_reverse' => 'bool',
        'remark' => 'string',
        'source_bill_no' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'date' => null,
        'period' => null,
        'number' => null,
        'voucher_no' => null,
        'bill_status' => null,
        'group_id' => null,
        'group_number' => null,
        'group_name' => null,
        'debit_total' => null,
        'credit_total' => null,
        'source_bill_type' => null,
        'source_bill_id' => null,
        'have_reverse' => null,
        'is_reverse' => null,
        'remark' => null,
        'source_bill_no' => null
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
        'date' => 'date',
        'period' => 'period',
        'number' => 'number',
        'voucher_no' => 'voucher_no',
        'bill_status' => 'bill_status',
        'group_id' => 'group_id',
        'group_number' => 'group_number',
        'group_name' => 'group_name',
        'debit_total' => 'debit_total',
        'credit_total' => 'credit_total',
        'source_bill_type' => 'source_bill_type',
        'source_bill_id' => 'source_bill_id',
        'have_reverse' => 'have_reverse',
        'is_reverse' => 'is_reverse',
        'remark' => 'remark',
        'source_bill_no' => 'source_bill_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'date' => 'setDate',
        'period' => 'setPeriod',
        'number' => 'setNumber',
        'voucher_no' => 'setVoucherNo',
        'bill_status' => 'setBillStatus',
        'group_id' => 'setGroupId',
        'group_number' => 'setGroupNumber',
        'group_name' => 'setGroupName',
        'debit_total' => 'setDebitTotal',
        'credit_total' => 'setCreditTotal',
        'source_bill_type' => 'setSourceBillType',
        'source_bill_id' => 'setSourceBillId',
        'have_reverse' => 'setHaveReverse',
        'is_reverse' => 'setIsReverse',
        'remark' => 'setRemark',
        'source_bill_no' => 'setSourceBillNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'date' => 'getDate',
        'period' => 'getPeriod',
        'number' => 'getNumber',
        'voucher_no' => 'getVoucherNo',
        'bill_status' => 'getBillStatus',
        'group_id' => 'getGroupId',
        'group_number' => 'getGroupNumber',
        'group_name' => 'getGroupName',
        'debit_total' => 'getDebitTotal',
        'credit_total' => 'getCreditTotal',
        'source_bill_type' => 'getSourceBillType',
        'source_bill_id' => 'getSourceBillId',
        'have_reverse' => 'getHaveReverse',
        'is_reverse' => 'getIsReverse',
        'remark' => 'getRemark',
        'source_bill_no' => 'getSourceBillNo'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['voucher_no'] = isset($data['voucher_no']) ? $data['voucher_no'] : null;
        $this->container['bill_status'] = isset($data['bill_status']) ? $data['bill_status'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['group_number'] = isset($data['group_number']) ? $data['group_number'] : null;
        $this->container['group_name'] = isset($data['group_name']) ? $data['group_name'] : null;
        $this->container['debit_total'] = isset($data['debit_total']) ? $data['debit_total'] : null;
        $this->container['credit_total'] = isset($data['credit_total']) ? $data['credit_total'] : null;
        $this->container['source_bill_type'] = isset($data['source_bill_type']) ? $data['source_bill_type'] : null;
        $this->container['source_bill_id'] = isset($data['source_bill_id']) ? $data['source_bill_id'] : null;
        $this->container['have_reverse'] = isset($data['have_reverse']) ? $data['have_reverse'] : null;
        $this->container['is_reverse'] = isset($data['is_reverse']) ? $data['is_reverse'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['source_bill_no'] = isset($data['source_bill_no']) ? $data['source_bill_no'] : null;
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
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string $period period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

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
     * Gets voucher_no
     *
     * @return string
     */
    public function getVoucherNo()
    {
        return $this->container['voucher_no'];
    }

    /**
     * Sets voucher_no
     *
     * @param string $voucher_no voucher_no
     *
     * @return $this
     */
    public function setVoucherNo($voucher_no)
    {
        $this->container['voucher_no'] = $voucher_no;

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
     * Gets group_id
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string $group_id group_id
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets group_number
     *
     * @return string
     */
    public function getGroupNumber()
    {
        return $this->container['group_number'];
    }

    /**
     * Sets group_number
     *
     * @param string $group_number group_number
     *
     * @return $this
     */
    public function setGroupNumber($group_number)
    {
        $this->container['group_number'] = $group_number;

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
     * Gets debit_total
     *
     * @return string
     */
    public function getDebitTotal()
    {
        return $this->container['debit_total'];
    }

    /**
     * Sets debit_total
     *
     * @param string $debit_total debit_total
     *
     * @return $this
     */
    public function setDebitTotal($debit_total)
    {
        $this->container['debit_total'] = $debit_total;

        return $this;
    }

    /**
     * Gets credit_total
     *
     * @return string
     */
    public function getCreditTotal()
    {
        return $this->container['credit_total'];
    }

    /**
     * Sets credit_total
     *
     * @param string $credit_total credit_total
     *
     * @return $this
     */
    public function setCreditTotal($credit_total)
    {
        $this->container['credit_total'] = $credit_total;

        return $this;
    }

    /**
     * Gets source_bill_type
     *
     * @return string
     */
    public function getSourceBillType()
    {
        return $this->container['source_bill_type'];
    }

    /**
     * Sets source_bill_type
     *
     * @param string $source_bill_type source_bill_type
     *
     * @return $this
     */
    public function setSourceBillType($source_bill_type)
    {
        $this->container['source_bill_type'] = $source_bill_type;

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
     * Gets have_reverse
     *
     * @return bool
     */
    public function getHaveReverse()
    {
        return $this->container['have_reverse'];
    }

    /**
     * Sets have_reverse
     *
     * @param bool $have_reverse have_reverse
     *
     * @return $this
     */
    public function setHaveReverse($have_reverse)
    {
        $this->container['have_reverse'] = $have_reverse;

        return $this;
    }

    /**
     * Gets is_reverse
     *
     * @return bool
     */
    public function getIsReverse()
    {
        return $this->container['is_reverse'];
    }

    /**
     * Sets is_reverse
     *
     * @param bool $is_reverse is_reverse
     *
     * @return $this
     */
    public function setIsReverse($is_reverse)
    {
        $this->container['is_reverse'] = $is_reverse;

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
     * Gets source_bill_no
     *
     * @return string
     */
    public function getSourceBillNo()
    {
        return $this->container['source_bill_no'];
    }

    /**
     * Sets source_bill_no
     *
     * @param string $source_bill_no source_bill_no
     *
     * @return $this
     */
    public function setSourceBillNo($source_bill_no)
    {
        $this->container['source_bill_no'] = $source_bill_no;

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


