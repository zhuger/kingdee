<?php
/**
 * QtySumReplyRow
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
 * QtySumReplyRow Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QtySumReplyRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QtySumReply.Row';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'account_no' => 'string',
        'account_name' => 'string',
        'currency_name' => 'string',
        'detail_id' => 'string',
        'begin_dc' => 'string',
        'end_dc' => 'string',
        'unit_name' => 'string',
        'begin_amount' => 'string',
        'begin_amount_for' => 'string',
        'begin_price' => 'string',
        'begin_qty' => 'string',
        'debit_qty' => 'string',
        'debit_amount' => 'string',
        'credit_qty' => 'string',
        'credit_amount' => 'string',
        'year_debit_qty' => 'string',
        'year_debit_amount' => 'string',
        'year_credit_qty' => 'string',
        'year_credit_amount' => 'string',
        'end_amount' => 'string',
        'end_amount_for' => 'string',
        'end_price' => 'string',
        'end_qty' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => null,
        'account_no' => null,
        'account_name' => null,
        'currency_name' => null,
        'detail_id' => null,
        'begin_dc' => null,
        'end_dc' => null,
        'unit_name' => null,
        'begin_amount' => null,
        'begin_amount_for' => null,
        'begin_price' => null,
        'begin_qty' => null,
        'debit_qty' => null,
        'debit_amount' => null,
        'credit_qty' => null,
        'credit_amount' => null,
        'year_debit_qty' => null,
        'year_debit_amount' => null,
        'year_credit_qty' => null,
        'year_credit_amount' => null,
        'end_amount' => null,
        'end_amount_for' => null,
        'end_price' => null,
        'end_qty' => null
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
        'account_id' => 'account_id',
        'account_no' => 'account_no',
        'account_name' => 'account_name',
        'currency_name' => 'currency_name',
        'detail_id' => 'detail_id',
        'begin_dc' => 'begin_dc',
        'end_dc' => 'end_dc',
        'unit_name' => 'unit_name',
        'begin_amount' => 'begin_amount',
        'begin_amount_for' => 'begin_amount_for',
        'begin_price' => 'begin_price',
        'begin_qty' => 'begin_qty',
        'debit_qty' => 'debit_qty',
        'debit_amount' => 'debit_amount',
        'credit_qty' => 'credit_qty',
        'credit_amount' => 'credit_amount',
        'year_debit_qty' => 'year_debit_qty',
        'year_debit_amount' => 'year_debit_amount',
        'year_credit_qty' => 'year_credit_qty',
        'year_credit_amount' => 'year_credit_amount',
        'end_amount' => 'end_amount',
        'end_amount_for' => 'end_amount_for',
        'end_price' => 'end_price',
        'end_qty' => 'end_qty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'account_no' => 'setAccountNo',
        'account_name' => 'setAccountName',
        'currency_name' => 'setCurrencyName',
        'detail_id' => 'setDetailId',
        'begin_dc' => 'setBeginDc',
        'end_dc' => 'setEndDc',
        'unit_name' => 'setUnitName',
        'begin_amount' => 'setBeginAmount',
        'begin_amount_for' => 'setBeginAmountFor',
        'begin_price' => 'setBeginPrice',
        'begin_qty' => 'setBeginQty',
        'debit_qty' => 'setDebitQty',
        'debit_amount' => 'setDebitAmount',
        'credit_qty' => 'setCreditQty',
        'credit_amount' => 'setCreditAmount',
        'year_debit_qty' => 'setYearDebitQty',
        'year_debit_amount' => 'setYearDebitAmount',
        'year_credit_qty' => 'setYearCreditQty',
        'year_credit_amount' => 'setYearCreditAmount',
        'end_amount' => 'setEndAmount',
        'end_amount_for' => 'setEndAmountFor',
        'end_price' => 'setEndPrice',
        'end_qty' => 'setEndQty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'account_no' => 'getAccountNo',
        'account_name' => 'getAccountName',
        'currency_name' => 'getCurrencyName',
        'detail_id' => 'getDetailId',
        'begin_dc' => 'getBeginDc',
        'end_dc' => 'getEndDc',
        'unit_name' => 'getUnitName',
        'begin_amount' => 'getBeginAmount',
        'begin_amount_for' => 'getBeginAmountFor',
        'begin_price' => 'getBeginPrice',
        'begin_qty' => 'getBeginQty',
        'debit_qty' => 'getDebitQty',
        'debit_amount' => 'getDebitAmount',
        'credit_qty' => 'getCreditQty',
        'credit_amount' => 'getCreditAmount',
        'year_debit_qty' => 'getYearDebitQty',
        'year_debit_amount' => 'getYearDebitAmount',
        'year_credit_qty' => 'getYearCreditQty',
        'year_credit_amount' => 'getYearCreditAmount',
        'end_amount' => 'getEndAmount',
        'end_amount_for' => 'getEndAmountFor',
        'end_price' => 'getEndPrice',
        'end_qty' => 'getEndQty'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['account_no'] = isset($data['account_no']) ? $data['account_no'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['currency_name'] = isset($data['currency_name']) ? $data['currency_name'] : null;
        $this->container['detail_id'] = isset($data['detail_id']) ? $data['detail_id'] : null;
        $this->container['begin_dc'] = isset($data['begin_dc']) ? $data['begin_dc'] : null;
        $this->container['end_dc'] = isset($data['end_dc']) ? $data['end_dc'] : null;
        $this->container['unit_name'] = isset($data['unit_name']) ? $data['unit_name'] : null;
        $this->container['begin_amount'] = isset($data['begin_amount']) ? $data['begin_amount'] : null;
        $this->container['begin_amount_for'] = isset($data['begin_amount_for']) ? $data['begin_amount_for'] : null;
        $this->container['begin_price'] = isset($data['begin_price']) ? $data['begin_price'] : null;
        $this->container['begin_qty'] = isset($data['begin_qty']) ? $data['begin_qty'] : null;
        $this->container['debit_qty'] = isset($data['debit_qty']) ? $data['debit_qty'] : null;
        $this->container['debit_amount'] = isset($data['debit_amount']) ? $data['debit_amount'] : null;
        $this->container['credit_qty'] = isset($data['credit_qty']) ? $data['credit_qty'] : null;
        $this->container['credit_amount'] = isset($data['credit_amount']) ? $data['credit_amount'] : null;
        $this->container['year_debit_qty'] = isset($data['year_debit_qty']) ? $data['year_debit_qty'] : null;
        $this->container['year_debit_amount'] = isset($data['year_debit_amount']) ? $data['year_debit_amount'] : null;
        $this->container['year_credit_qty'] = isset($data['year_credit_qty']) ? $data['year_credit_qty'] : null;
        $this->container['year_credit_amount'] = isset($data['year_credit_amount']) ? $data['year_credit_amount'] : null;
        $this->container['end_amount'] = isset($data['end_amount']) ? $data['end_amount'] : null;
        $this->container['end_amount_for'] = isset($data['end_amount_for']) ? $data['end_amount_for'] : null;
        $this->container['end_price'] = isset($data['end_price']) ? $data['end_price'] : null;
        $this->container['end_qty'] = isset($data['end_qty']) ? $data['end_qty'] : null;
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets account_no
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->container['account_no'];
    }

    /**
     * Sets account_no
     *
     * @param string $account_no account_no
     *
     * @return $this
     */
    public function setAccountNo($account_no)
    {
        $this->container['account_no'] = $account_no;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string $account_name account_name
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

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
     * Gets detail_id
     *
     * @return string
     */
    public function getDetailId()
    {
        return $this->container['detail_id'];
    }

    /**
     * Sets detail_id
     *
     * @param string $detail_id detail_id
     *
     * @return $this
     */
    public function setDetailId($detail_id)
    {
        $this->container['detail_id'] = $detail_id;

        return $this;
    }

    /**
     * Gets begin_dc
     *
     * @return string
     */
    public function getBeginDc()
    {
        return $this->container['begin_dc'];
    }

    /**
     * Sets begin_dc
     *
     * @param string $begin_dc begin_dc
     *
     * @return $this
     */
    public function setBeginDc($begin_dc)
    {
        $this->container['begin_dc'] = $begin_dc;

        return $this;
    }

    /**
     * Gets end_dc
     *
     * @return string
     */
    public function getEndDc()
    {
        return $this->container['end_dc'];
    }

    /**
     * Sets end_dc
     *
     * @param string $end_dc end_dc
     *
     * @return $this
     */
    public function setEndDc($end_dc)
    {
        $this->container['end_dc'] = $end_dc;

        return $this;
    }

    /**
     * Gets unit_name
     *
     * @return string
     */
    public function getUnitName()
    {
        return $this->container['unit_name'];
    }

    /**
     * Sets unit_name
     *
     * @param string $unit_name unit_name
     *
     * @return $this
     */
    public function setUnitName($unit_name)
    {
        $this->container['unit_name'] = $unit_name;

        return $this;
    }

    /**
     * Gets begin_amount
     *
     * @return string
     */
    public function getBeginAmount()
    {
        return $this->container['begin_amount'];
    }

    /**
     * Sets begin_amount
     *
     * @param string $begin_amount begin_amount
     *
     * @return $this
     */
    public function setBeginAmount($begin_amount)
    {
        $this->container['begin_amount'] = $begin_amount;

        return $this;
    }

    /**
     * Gets begin_amount_for
     *
     * @return string
     */
    public function getBeginAmountFor()
    {
        return $this->container['begin_amount_for'];
    }

    /**
     * Sets begin_amount_for
     *
     * @param string $begin_amount_for begin_amount_for
     *
     * @return $this
     */
    public function setBeginAmountFor($begin_amount_for)
    {
        $this->container['begin_amount_for'] = $begin_amount_for;

        return $this;
    }

    /**
     * Gets begin_price
     *
     * @return string
     */
    public function getBeginPrice()
    {
        return $this->container['begin_price'];
    }

    /**
     * Sets begin_price
     *
     * @param string $begin_price begin_price
     *
     * @return $this
     */
    public function setBeginPrice($begin_price)
    {
        $this->container['begin_price'] = $begin_price;

        return $this;
    }

    /**
     * Gets begin_qty
     *
     * @return string
     */
    public function getBeginQty()
    {
        return $this->container['begin_qty'];
    }

    /**
     * Sets begin_qty
     *
     * @param string $begin_qty begin_qty
     *
     * @return $this
     */
    public function setBeginQty($begin_qty)
    {
        $this->container['begin_qty'] = $begin_qty;

        return $this;
    }

    /**
     * Gets debit_qty
     *
     * @return string
     */
    public function getDebitQty()
    {
        return $this->container['debit_qty'];
    }

    /**
     * Sets debit_qty
     *
     * @param string $debit_qty debit_qty
     *
     * @return $this
     */
    public function setDebitQty($debit_qty)
    {
        $this->container['debit_qty'] = $debit_qty;

        return $this;
    }

    /**
     * Gets debit_amount
     *
     * @return string
     */
    public function getDebitAmount()
    {
        return $this->container['debit_amount'];
    }

    /**
     * Sets debit_amount
     *
     * @param string $debit_amount debit_amount
     *
     * @return $this
     */
    public function setDebitAmount($debit_amount)
    {
        $this->container['debit_amount'] = $debit_amount;

        return $this;
    }

    /**
     * Gets credit_qty
     *
     * @return string
     */
    public function getCreditQty()
    {
        return $this->container['credit_qty'];
    }

    /**
     * Sets credit_qty
     *
     * @param string $credit_qty credit_qty
     *
     * @return $this
     */
    public function setCreditQty($credit_qty)
    {
        $this->container['credit_qty'] = $credit_qty;

        return $this;
    }

    /**
     * Gets credit_amount
     *
     * @return string
     */
    public function getCreditAmount()
    {
        return $this->container['credit_amount'];
    }

    /**
     * Sets credit_amount
     *
     * @param string $credit_amount credit_amount
     *
     * @return $this
     */
    public function setCreditAmount($credit_amount)
    {
        $this->container['credit_amount'] = $credit_amount;

        return $this;
    }

    /**
     * Gets year_debit_qty
     *
     * @return string
     */
    public function getYearDebitQty()
    {
        return $this->container['year_debit_qty'];
    }

    /**
     * Sets year_debit_qty
     *
     * @param string $year_debit_qty year_debit_qty
     *
     * @return $this
     */
    public function setYearDebitQty($year_debit_qty)
    {
        $this->container['year_debit_qty'] = $year_debit_qty;

        return $this;
    }

    /**
     * Gets year_debit_amount
     *
     * @return string
     */
    public function getYearDebitAmount()
    {
        return $this->container['year_debit_amount'];
    }

    /**
     * Sets year_debit_amount
     *
     * @param string $year_debit_amount year_debit_amount
     *
     * @return $this
     */
    public function setYearDebitAmount($year_debit_amount)
    {
        $this->container['year_debit_amount'] = $year_debit_amount;

        return $this;
    }

    /**
     * Gets year_credit_qty
     *
     * @return string
     */
    public function getYearCreditQty()
    {
        return $this->container['year_credit_qty'];
    }

    /**
     * Sets year_credit_qty
     *
     * @param string $year_credit_qty year_credit_qty
     *
     * @return $this
     */
    public function setYearCreditQty($year_credit_qty)
    {
        $this->container['year_credit_qty'] = $year_credit_qty;

        return $this;
    }

    /**
     * Gets year_credit_amount
     *
     * @return string
     */
    public function getYearCreditAmount()
    {
        return $this->container['year_credit_amount'];
    }

    /**
     * Sets year_credit_amount
     *
     * @param string $year_credit_amount year_credit_amount
     *
     * @return $this
     */
    public function setYearCreditAmount($year_credit_amount)
    {
        $this->container['year_credit_amount'] = $year_credit_amount;

        return $this;
    }

    /**
     * Gets end_amount
     *
     * @return string
     */
    public function getEndAmount()
    {
        return $this->container['end_amount'];
    }

    /**
     * Sets end_amount
     *
     * @param string $end_amount end_amount
     *
     * @return $this
     */
    public function setEndAmount($end_amount)
    {
        $this->container['end_amount'] = $end_amount;

        return $this;
    }

    /**
     * Gets end_amount_for
     *
     * @return string
     */
    public function getEndAmountFor()
    {
        return $this->container['end_amount_for'];
    }

    /**
     * Sets end_amount_for
     *
     * @param string $end_amount_for end_amount_for
     *
     * @return $this
     */
    public function setEndAmountFor($end_amount_for)
    {
        $this->container['end_amount_for'] = $end_amount_for;

        return $this;
    }

    /**
     * Gets end_price
     *
     * @return string
     */
    public function getEndPrice()
    {
        return $this->container['end_price'];
    }

    /**
     * Sets end_price
     *
     * @param string $end_price end_price
     *
     * @return $this
     */
    public function setEndPrice($end_price)
    {
        $this->container['end_price'] = $end_price;

        return $this;
    }

    /**
     * Gets end_qty
     *
     * @return string
     */
    public function getEndQty()
    {
        return $this->container['end_qty'];
    }

    /**
     * Sets end_qty
     *
     * @param string $end_qty end_qty
     *
     * @return $this
     */
    public function setEndQty($end_qty)
    {
        $this->container['end_qty'] = $end_qty;

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


