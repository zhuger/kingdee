<?php
/**
 * ArOrderStatementReportReplyRow
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
 * ArOrderStatementReportReplyRow Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ArOrderStatementReportReplyRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ArOrderStatementReportReply.Row';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_id' => 'string',
        'customer_name' => 'string',
        'pre_amount_for' => 'string',
        'scm_amount_for' => 'string',
        'oth_amount_for' => 'string',
        'amount_for' => 'string',
        'rp_scm_amount_for' => 'string',
        'rp_oth_amount_for' => 'string',
        'rp_amount_for' => 'string',
        'pre_balance_for' => 'string',
        'scm_balance_for' => 'string',
        'oth_balance_for' => 'string',
        'balance_for' => 'string',
        'bill_date' => 'string',
        'bill_type' => 'string',
        'bill_type_name' => 'string',
        'id' => 'string',
        'bill_no' => 'string',
        'amount' => 'string',
        'type_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer_id' => null,
        'customer_name' => null,
        'pre_amount_for' => null,
        'scm_amount_for' => null,
        'oth_amount_for' => null,
        'amount_for' => null,
        'rp_scm_amount_for' => null,
        'rp_oth_amount_for' => null,
        'rp_amount_for' => null,
        'pre_balance_for' => null,
        'scm_balance_for' => null,
        'oth_balance_for' => null,
        'balance_for' => null,
        'bill_date' => null,
        'bill_type' => null,
        'bill_type_name' => null,
        'id' => null,
        'bill_no' => null,
        'amount' => null,
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
        'customer_id' => 'customer_id',
        'customer_name' => 'customer_name',
        'pre_amount_for' => 'pre_amount_for',
        'scm_amount_for' => 'scm_amount_for',
        'oth_amount_for' => 'oth_amount_for',
        'amount_for' => 'amount_for',
        'rp_scm_amount_for' => 'rp_scm_amount_for',
        'rp_oth_amount_for' => 'rp_oth_amount_for',
        'rp_amount_for' => 'rp_amount_for',
        'pre_balance_for' => 'pre_balance_for',
        'scm_balance_for' => 'scm_balance_for',
        'oth_balance_for' => 'oth_balance_for',
        'balance_for' => 'balance_for',
        'bill_date' => 'bill_date',
        'bill_type' => 'bill_type',
        'bill_type_name' => 'bill_type_name',
        'id' => 'id',
        'bill_no' => 'bill_no',
        'amount' => 'amount',
        'type_name' => 'type_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_id' => 'setCustomerId',
        'customer_name' => 'setCustomerName',
        'pre_amount_for' => 'setPreAmountFor',
        'scm_amount_for' => 'setScmAmountFor',
        'oth_amount_for' => 'setOthAmountFor',
        'amount_for' => 'setAmountFor',
        'rp_scm_amount_for' => 'setRpScmAmountFor',
        'rp_oth_amount_for' => 'setRpOthAmountFor',
        'rp_amount_for' => 'setRpAmountFor',
        'pre_balance_for' => 'setPreBalanceFor',
        'scm_balance_for' => 'setScmBalanceFor',
        'oth_balance_for' => 'setOthBalanceFor',
        'balance_for' => 'setBalanceFor',
        'bill_date' => 'setBillDate',
        'bill_type' => 'setBillType',
        'bill_type_name' => 'setBillTypeName',
        'id' => 'setId',
        'bill_no' => 'setBillNo',
        'amount' => 'setAmount',
        'type_name' => 'setTypeName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_id' => 'getCustomerId',
        'customer_name' => 'getCustomerName',
        'pre_amount_for' => 'getPreAmountFor',
        'scm_amount_for' => 'getScmAmountFor',
        'oth_amount_for' => 'getOthAmountFor',
        'amount_for' => 'getAmountFor',
        'rp_scm_amount_for' => 'getRpScmAmountFor',
        'rp_oth_amount_for' => 'getRpOthAmountFor',
        'rp_amount_for' => 'getRpAmountFor',
        'pre_balance_for' => 'getPreBalanceFor',
        'scm_balance_for' => 'getScmBalanceFor',
        'oth_balance_for' => 'getOthBalanceFor',
        'balance_for' => 'getBalanceFor',
        'bill_date' => 'getBillDate',
        'bill_type' => 'getBillType',
        'bill_type_name' => 'getBillTypeName',
        'id' => 'getId',
        'bill_no' => 'getBillNo',
        'amount' => 'getAmount',
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
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['customer_name'] = isset($data['customer_name']) ? $data['customer_name'] : null;
        $this->container['pre_amount_for'] = isset($data['pre_amount_for']) ? $data['pre_amount_for'] : null;
        $this->container['scm_amount_for'] = isset($data['scm_amount_for']) ? $data['scm_amount_for'] : null;
        $this->container['oth_amount_for'] = isset($data['oth_amount_for']) ? $data['oth_amount_for'] : null;
        $this->container['amount_for'] = isset($data['amount_for']) ? $data['amount_for'] : null;
        $this->container['rp_scm_amount_for'] = isset($data['rp_scm_amount_for']) ? $data['rp_scm_amount_for'] : null;
        $this->container['rp_oth_amount_for'] = isset($data['rp_oth_amount_for']) ? $data['rp_oth_amount_for'] : null;
        $this->container['rp_amount_for'] = isset($data['rp_amount_for']) ? $data['rp_amount_for'] : null;
        $this->container['pre_balance_for'] = isset($data['pre_balance_for']) ? $data['pre_balance_for'] : null;
        $this->container['scm_balance_for'] = isset($data['scm_balance_for']) ? $data['scm_balance_for'] : null;
        $this->container['oth_balance_for'] = isset($data['oth_balance_for']) ? $data['oth_balance_for'] : null;
        $this->container['balance_for'] = isset($data['balance_for']) ? $data['balance_for'] : null;
        $this->container['bill_date'] = isset($data['bill_date']) ? $data['bill_date'] : null;
        $this->container['bill_type'] = isset($data['bill_type']) ? $data['bill_type'] : null;
        $this->container['bill_type_name'] = isset($data['bill_type_name']) ? $data['bill_type_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['bill_no'] = isset($data['bill_no']) ? $data['bill_no'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
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
     * Gets pre_amount_for
     *
     * @return string
     */
    public function getPreAmountFor()
    {
        return $this->container['pre_amount_for'];
    }

    /**
     * Sets pre_amount_for
     *
     * @param string $pre_amount_for pre_amount_for
     *
     * @return $this
     */
    public function setPreAmountFor($pre_amount_for)
    {
        $this->container['pre_amount_for'] = $pre_amount_for;

        return $this;
    }

    /**
     * Gets scm_amount_for
     *
     * @return string
     */
    public function getScmAmountFor()
    {
        return $this->container['scm_amount_for'];
    }

    /**
     * Sets scm_amount_for
     *
     * @param string $scm_amount_for scm_amount_for
     *
     * @return $this
     */
    public function setScmAmountFor($scm_amount_for)
    {
        $this->container['scm_amount_for'] = $scm_amount_for;

        return $this;
    }

    /**
     * Gets oth_amount_for
     *
     * @return string
     */
    public function getOthAmountFor()
    {
        return $this->container['oth_amount_for'];
    }

    /**
     * Sets oth_amount_for
     *
     * @param string $oth_amount_for oth_amount_for
     *
     * @return $this
     */
    public function setOthAmountFor($oth_amount_for)
    {
        $this->container['oth_amount_for'] = $oth_amount_for;

        return $this;
    }

    /**
     * Gets amount_for
     *
     * @return string
     */
    public function getAmountFor()
    {
        return $this->container['amount_for'];
    }

    /**
     * Sets amount_for
     *
     * @param string $amount_for amount_for
     *
     * @return $this
     */
    public function setAmountFor($amount_for)
    {
        $this->container['amount_for'] = $amount_for;

        return $this;
    }

    /**
     * Gets rp_scm_amount_for
     *
     * @return string
     */
    public function getRpScmAmountFor()
    {
        return $this->container['rp_scm_amount_for'];
    }

    /**
     * Sets rp_scm_amount_for
     *
     * @param string $rp_scm_amount_for rp_scm_amount_for
     *
     * @return $this
     */
    public function setRpScmAmountFor($rp_scm_amount_for)
    {
        $this->container['rp_scm_amount_for'] = $rp_scm_amount_for;

        return $this;
    }

    /**
     * Gets rp_oth_amount_for
     *
     * @return string
     */
    public function getRpOthAmountFor()
    {
        return $this->container['rp_oth_amount_for'];
    }

    /**
     * Sets rp_oth_amount_for
     *
     * @param string $rp_oth_amount_for rp_oth_amount_for
     *
     * @return $this
     */
    public function setRpOthAmountFor($rp_oth_amount_for)
    {
        $this->container['rp_oth_amount_for'] = $rp_oth_amount_for;

        return $this;
    }

    /**
     * Gets rp_amount_for
     *
     * @return string
     */
    public function getRpAmountFor()
    {
        return $this->container['rp_amount_for'];
    }

    /**
     * Sets rp_amount_for
     *
     * @param string $rp_amount_for rp_amount_for
     *
     * @return $this
     */
    public function setRpAmountFor($rp_amount_for)
    {
        $this->container['rp_amount_for'] = $rp_amount_for;

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
     * Gets bill_type
     *
     * @return string
     */
    public function getBillType()
    {
        return $this->container['bill_type'];
    }

    /**
     * Sets bill_type
     *
     * @param string $bill_type bill_type
     *
     * @return $this
     */
    public function setBillType($bill_type)
    {
        $this->container['bill_type'] = $bill_type;

        return $this;
    }

    /**
     * Gets bill_type_name
     *
     * @return string
     */
    public function getBillTypeName()
    {
        return $this->container['bill_type_name'];
    }

    /**
     * Sets bill_type_name
     *
     * @param string $bill_type_name bill_type_name
     *
     * @return $this
     */
    public function setBillTypeName($bill_type_name)
    {
        $this->container['bill_type_name'] = $bill_type_name;

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
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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

