<?php
/**
 * SalOutBoundCostFeeRows
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
 * SalOutBoundCostFeeRows Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalOutBoundCostFeeRows implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalOutBound.CostFeeRows';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'supplier_id' => 'string',
        'pacct_type_id' => 'string',
        'amount' => 'string',
        'amount_for' => 'string',
        'cess' => 'string',
        'tax_amount' => 'string',
        'all_amount' => 'string',
        'all_amount_for' => 'string',
        'currency_id' => 'string',
        'exchange_rate' => 'string',
        'linked_bill_no' => 'string',
        'comment' => 'string',
        'receive_info_entity' => '\com_kingdee_service\data\entity\SalOutBoundReceiveInfoRows[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'supplier_id' => null,
        'pacct_type_id' => null,
        'amount' => null,
        'amount_for' => null,
        'cess' => null,
        'tax_amount' => null,
        'all_amount' => null,
        'all_amount_for' => null,
        'currency_id' => null,
        'exchange_rate' => null,
        'linked_bill_no' => null,
        'comment' => null,
        'receive_info_entity' => null
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
        'supplier_id' => 'supplier_id',
        'pacct_type_id' => 'pacct_type_id',
        'amount' => 'amount',
        'amount_for' => 'amount_for',
        'cess' => 'cess',
        'tax_amount' => 'tax_amount',
        'all_amount' => 'all_amount',
        'all_amount_for' => 'all_amount_for',
        'currency_id' => 'currency_id',
        'exchange_rate' => 'exchange_rate',
        'linked_bill_no' => 'linked_bill_no',
        'comment' => 'comment',
        'receive_info_entity' => 'receive_info_entity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'supplier_id' => 'setSupplierId',
        'pacct_type_id' => 'setPacctTypeId',
        'amount' => 'setAmount',
        'amount_for' => 'setAmountFor',
        'cess' => 'setCess',
        'tax_amount' => 'setTaxAmount',
        'all_amount' => 'setAllAmount',
        'all_amount_for' => 'setAllAmountFor',
        'currency_id' => 'setCurrencyId',
        'exchange_rate' => 'setExchangeRate',
        'linked_bill_no' => 'setLinkedBillNo',
        'comment' => 'setComment',
        'receive_info_entity' => 'setReceiveInfoEntity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'supplier_id' => 'getSupplierId',
        'pacct_type_id' => 'getPacctTypeId',
        'amount' => 'getAmount',
        'amount_for' => 'getAmountFor',
        'cess' => 'getCess',
        'tax_amount' => 'getTaxAmount',
        'all_amount' => 'getAllAmount',
        'all_amount_for' => 'getAllAmountFor',
        'currency_id' => 'getCurrencyId',
        'exchange_rate' => 'getExchangeRate',
        'linked_bill_no' => 'getLinkedBillNo',
        'comment' => 'getComment',
        'receive_info_entity' => 'getReceiveInfoEntity'
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
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['pacct_type_id'] = isset($data['pacct_type_id']) ? $data['pacct_type_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['amount_for'] = isset($data['amount_for']) ? $data['amount_for'] : null;
        $this->container['cess'] = isset($data['cess']) ? $data['cess'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['all_amount'] = isset($data['all_amount']) ? $data['all_amount'] : null;
        $this->container['all_amount_for'] = isset($data['all_amount_for']) ? $data['all_amount_for'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['linked_bill_no'] = isset($data['linked_bill_no']) ? $data['linked_bill_no'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['receive_info_entity'] = isset($data['receive_info_entity']) ? $data['receive_info_entity'] : null;
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
     * Gets pacct_type_id
     *
     * @return string
     */
    public function getPacctTypeId()
    {
        return $this->container['pacct_type_id'];
    }

    /**
     * Sets pacct_type_id
     *
     * @param string $pacct_type_id pacct_type_id
     *
     * @return $this
     */
    public function setPacctTypeId($pacct_type_id)
    {
        $this->container['pacct_type_id'] = $pacct_type_id;

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
     * Gets cess
     *
     * @return string
     */
    public function getCess()
    {
        return $this->container['cess'];
    }

    /**
     * Sets cess
     *
     * @param string $cess cess
     *
     * @return $this
     */
    public function setCess($cess)
    {
        $this->container['cess'] = $cess;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param string $tax_amount tax_amount
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets all_amount
     *
     * @return string
     */
    public function getAllAmount()
    {
        return $this->container['all_amount'];
    }

    /**
     * Sets all_amount
     *
     * @param string $all_amount all_amount
     *
     * @return $this
     */
    public function setAllAmount($all_amount)
    {
        $this->container['all_amount'] = $all_amount;

        return $this;
    }

    /**
     * Gets all_amount_for
     *
     * @return string
     */
    public function getAllAmountFor()
    {
        return $this->container['all_amount_for'];
    }

    /**
     * Sets all_amount_for
     *
     * @param string $all_amount_for all_amount_for
     *
     * @return $this
     */
    public function setAllAmountFor($all_amount_for)
    {
        $this->container['all_amount_for'] = $all_amount_for;

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
     * Gets linked_bill_no
     *
     * @return string
     */
    public function getLinkedBillNo()
    {
        return $this->container['linked_bill_no'];
    }

    /**
     * Sets linked_bill_no
     *
     * @param string $linked_bill_no linked_bill_no
     *
     * @return $this
     */
    public function setLinkedBillNo($linked_bill_no)
    {
        $this->container['linked_bill_no'] = $linked_bill_no;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets receive_info_entity
     *
     * @return \com_kingdee_service\data\entity\SalOutBoundReceiveInfoRows[]
     */
    public function getReceiveInfoEntity()
    {
        return $this->container['receive_info_entity'];
    }

    /**
     * Sets receive_info_entity
     *
     * @param \com_kingdee_service\data\entity\SalOutBoundReceiveInfoRows[] $receive_info_entity receive_info_entity
     *
     * @return $this
     */
    public function setReceiveInfoEntity($receive_info_entity)
    {
        $this->container['receive_info_entity'] = $receive_info_entity;

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


