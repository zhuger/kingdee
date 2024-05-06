<?php
/**
 * ProdRtnOrderListReplyRow
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
 * ProdRtnOrderListReplyRow Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProdRtnOrderListReplyRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProdRtnOrderListReply.Row';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create_date' => 'string',
        'bill_date' => 'string',
        'supplier_id' => 'string',
        'supplier_name' => 'string',
        'supplier_number' => 'string',
        'bill_no' => 'string',
        'bill_status' => 'string',
        'id' => 'string',
        'currency_name' => 'string',
        'label_list' => '\com_kingdee_service\data\entity\Mullabel[]',
        'remark' => 'string',
        'settlement_period' => 'string',
        'bill_source' => 'string',
        'print_count' => 'string',
        'due_date' => 'string',
        'bill_type' => 'string',
        'currency_id' => 'string',
        'currency_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'create_date' => null,
        'bill_date' => null,
        'supplier_id' => null,
        'supplier_name' => null,
        'supplier_number' => null,
        'bill_no' => null,
        'bill_status' => null,
        'id' => null,
        'currency_name' => null,
        'label_list' => null,
        'remark' => null,
        'settlement_period' => null,
        'bill_source' => null,
        'print_count' => null,
        'due_date' => null,
        'bill_type' => null,
        'currency_id' => null,
        'currency_number' => null
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
        'create_date' => 'create_date',
        'bill_date' => 'bill_date',
        'supplier_id' => 'supplier_id',
        'supplier_name' => 'supplier_name',
        'supplier_number' => 'supplier_number',
        'bill_no' => 'bill_no',
        'bill_status' => 'bill_status',
        'id' => 'id',
        'currency_name' => 'currency_name',
        'label_list' => 'label_list',
        'remark' => 'remark',
        'settlement_period' => 'settlement_period',
        'bill_source' => 'bill_source',
        'print_count' => 'print_count',
        'due_date' => 'due_date',
        'bill_type' => 'bill_type',
        'currency_id' => 'currency_id',
        'currency_number' => 'currency_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_date' => 'setCreateDate',
        'bill_date' => 'setBillDate',
        'supplier_id' => 'setSupplierId',
        'supplier_name' => 'setSupplierName',
        'supplier_number' => 'setSupplierNumber',
        'bill_no' => 'setBillNo',
        'bill_status' => 'setBillStatus',
        'id' => 'setId',
        'currency_name' => 'setCurrencyName',
        'label_list' => 'setLabelList',
        'remark' => 'setRemark',
        'settlement_period' => 'setSettlementPeriod',
        'bill_source' => 'setBillSource',
        'print_count' => 'setPrintCount',
        'due_date' => 'setDueDate',
        'bill_type' => 'setBillType',
        'currency_id' => 'setCurrencyId',
        'currency_number' => 'setCurrencyNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_date' => 'getCreateDate',
        'bill_date' => 'getBillDate',
        'supplier_id' => 'getSupplierId',
        'supplier_name' => 'getSupplierName',
        'supplier_number' => 'getSupplierNumber',
        'bill_no' => 'getBillNo',
        'bill_status' => 'getBillStatus',
        'id' => 'getId',
        'currency_name' => 'getCurrencyName',
        'label_list' => 'getLabelList',
        'remark' => 'getRemark',
        'settlement_period' => 'getSettlementPeriod',
        'bill_source' => 'getBillSource',
        'print_count' => 'getPrintCount',
        'due_date' => 'getDueDate',
        'bill_type' => 'getBillType',
        'currency_id' => 'getCurrencyId',
        'currency_number' => 'getCurrencyNumber'
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
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['bill_date'] = isset($data['bill_date']) ? $data['bill_date'] : null;
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['supplier_name'] = isset($data['supplier_name']) ? $data['supplier_name'] : null;
        $this->container['supplier_number'] = isset($data['supplier_number']) ? $data['supplier_number'] : null;
        $this->container['bill_no'] = isset($data['bill_no']) ? $data['bill_no'] : null;
        $this->container['bill_status'] = isset($data['bill_status']) ? $data['bill_status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['currency_name'] = isset($data['currency_name']) ? $data['currency_name'] : null;
        $this->container['label_list'] = isset($data['label_list']) ? $data['label_list'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['settlement_period'] = isset($data['settlement_period']) ? $data['settlement_period'] : null;
        $this->container['bill_source'] = isset($data['bill_source']) ? $data['bill_source'] : null;
        $this->container['print_count'] = isset($data['print_count']) ? $data['print_count'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['bill_type'] = isset($data['bill_type']) ? $data['bill_type'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['currency_number'] = isset($data['currency_number']) ? $data['currency_number'] : null;
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
     * Gets create_date
     *
     * @return string
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param string $create_date create_date
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

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
     * Gets label_list
     *
     * @return \com_kingdee_service\data\entity\Mullabel[]
     */
    public function getLabelList()
    {
        return $this->container['label_list'];
    }

    /**
     * Sets label_list
     *
     * @param \com_kingdee_service\data\entity\Mullabel[] $label_list label_list
     *
     * @return $this
     */
    public function setLabelList($label_list)
    {
        $this->container['label_list'] = $label_list;

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
     * Gets settlement_period
     *
     * @return string
     */
    public function getSettlementPeriod()
    {
        return $this->container['settlement_period'];
    }

    /**
     * Sets settlement_period
     *
     * @param string $settlement_period settlement_period
     *
     * @return $this
     */
    public function setSettlementPeriod($settlement_period)
    {
        $this->container['settlement_period'] = $settlement_period;

        return $this;
    }

    /**
     * Gets bill_source
     *
     * @return string
     */
    public function getBillSource()
    {
        return $this->container['bill_source'];
    }

    /**
     * Sets bill_source
     *
     * @param string $bill_source bill_source
     *
     * @return $this
     */
    public function setBillSource($bill_source)
    {
        $this->container['bill_source'] = $bill_source;

        return $this;
    }

    /**
     * Gets print_count
     *
     * @return string
     */
    public function getPrintCount()
    {
        return $this->container['print_count'];
    }

    /**
     * Sets print_count
     *
     * @param string $print_count print_count
     *
     * @return $this
     */
    public function setPrintCount($print_count)
    {
        $this->container['print_count'] = $print_count;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

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


