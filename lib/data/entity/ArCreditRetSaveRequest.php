<?php
/**
 * ArCreditRetSaveRequest
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
 * ArCreditRetSaveRequest Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ArCreditRetSaveRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ArCreditRetSaveRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'default_bill_source' => 'string',
        'bill_date' => 'string',
        'customer_id' => 'string',
        'cur_total_instant_amount' => 'string',
        'pay_entry_list' => '\com_kingdee_service\data\entity\ArCreditRetSaveRequestPayEntry[]',
        'source_bill_entry_list' => '\com_kingdee_service\data\entity\ArCreditRetSaveRequestSourceBillEntry[]',
        'custom_field' => 'map[string,string]',
        'operation_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'default_bill_source' => null,
        'bill_date' => null,
        'customer_id' => null,
        'cur_total_instant_amount' => null,
        'pay_entry_list' => null,
        'source_bill_entry_list' => null,
        'custom_field' => null,
        'operation_key' => null
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
        'default_bill_source' => 'default_bill_source',
        'bill_date' => 'bill_date',
        'customer_id' => 'customer_id',
        'cur_total_instant_amount' => 'cur_total_instant_amount',
        'pay_entry_list' => 'pay_entry_list',
        'source_bill_entry_list' => 'source_bill_entry_list',
        'custom_field' => 'custom_field',
        'operation_key' => 'operation_key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'default_bill_source' => 'setDefaultBillSource',
        'bill_date' => 'setBillDate',
        'customer_id' => 'setCustomerId',
        'cur_total_instant_amount' => 'setCurTotalInstantAmount',
        'pay_entry_list' => 'setPayEntryList',
        'source_bill_entry_list' => 'setSourceBillEntryList',
        'custom_field' => 'setCustomField',
        'operation_key' => 'setOperationKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'default_bill_source' => 'getDefaultBillSource',
        'bill_date' => 'getBillDate',
        'customer_id' => 'getCustomerId',
        'cur_total_instant_amount' => 'getCurTotalInstantAmount',
        'pay_entry_list' => 'getPayEntryList',
        'source_bill_entry_list' => 'getSourceBillEntryList',
        'custom_field' => 'getCustomField',
        'operation_key' => 'getOperationKey'
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
        $this->container['default_bill_source'] = isset($data['default_bill_source']) ? $data['default_bill_source'] : null;
        $this->container['bill_date'] = isset($data['bill_date']) ? $data['bill_date'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['cur_total_instant_amount'] = isset($data['cur_total_instant_amount']) ? $data['cur_total_instant_amount'] : null;
        $this->container['pay_entry_list'] = isset($data['pay_entry_list']) ? $data['pay_entry_list'] : null;
        $this->container['source_bill_entry_list'] = isset($data['source_bill_entry_list']) ? $data['source_bill_entry_list'] : null;
        $this->container['custom_field'] = isset($data['custom_field']) ? $data['custom_field'] : null;
        $this->container['operation_key'] = isset($data['operation_key']) ? $data['operation_key'] : null;
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
     * Gets default_bill_source
     *
     * @return string
     */
    public function getDefaultBillSource()
    {
        return $this->container['default_bill_source'];
    }

    /**
     * Sets default_bill_source
     *
     * @param string $default_bill_source default_bill_source
     *
     * @return $this
     */
    public function setDefaultBillSource($default_bill_source)
    {
        $this->container['default_bill_source'] = $default_bill_source;

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
     * Gets cur_total_instant_amount
     *
     * @return string
     */
    public function getCurTotalInstantAmount()
    {
        return $this->container['cur_total_instant_amount'];
    }

    /**
     * Sets cur_total_instant_amount
     *
     * @param string $cur_total_instant_amount cur_total_instant_amount
     *
     * @return $this
     */
    public function setCurTotalInstantAmount($cur_total_instant_amount)
    {
        $this->container['cur_total_instant_amount'] = $cur_total_instant_amount;

        return $this;
    }

    /**
     * Gets pay_entry_list
     *
     * @return \com_kingdee_service\data\entity\ArCreditRetSaveRequestPayEntry[]
     */
    public function getPayEntryList()
    {
        return $this->container['pay_entry_list'];
    }

    /**
     * Sets pay_entry_list
     *
     * @param \com_kingdee_service\data\entity\ArCreditRetSaveRequestPayEntry[] $pay_entry_list pay_entry_list
     *
     * @return $this
     */
    public function setPayEntryList($pay_entry_list)
    {
        $this->container['pay_entry_list'] = $pay_entry_list;

        return $this;
    }

    /**
     * Gets source_bill_entry_list
     *
     * @return \com_kingdee_service\data\entity\ArCreditRetSaveRequestSourceBillEntry[]
     */
    public function getSourceBillEntryList()
    {
        return $this->container['source_bill_entry_list'];
    }

    /**
     * Sets source_bill_entry_list
     *
     * @param \com_kingdee_service\data\entity\ArCreditRetSaveRequestSourceBillEntry[] $source_bill_entry_list source_bill_entry_list
     *
     * @return $this
     */
    public function setSourceBillEntryList($source_bill_entry_list)
    {
        $this->container['source_bill_entry_list'] = $source_bill_entry_list;

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
     * Gets operation_key
     *
     * @return string
     */
    public function getOperationKey()
    {
        return $this->container['operation_key'];
    }

    /**
     * Sets operation_key
     *
     * @param string $operation_key operation_key
     *
     * @return $this
     */
    public function setOperationKey($operation_key)
    {
        $this->container['operation_key'] = $operation_key;

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


