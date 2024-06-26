<?php
/**
 * InboundSaveReq
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
 * InboundSaveReq Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InboundSaveReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InboundSaveReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'bill_no' => 'string',
        'bill_date' => 'string',
        'trans_type' => 'string',
        'remark' => 'string',
        'dept_id' => 'string',
        'dept_number' => 'string',
        'emp_id' => 'string',
        'emp_number' => 'string',
        'supplier_id' => 'string',
        'supplier_number' => 'string',
        'contact_info' => 'string',
        'currency_id' => 'string',
        'currency_number' => 'string',
        'exchange_rate' => 'double',
        'dispatcher_phone' => 'string',
        'dispatcher_country_id' => 'string',
        'dispatcher_province_id' => 'string',
        'dispatcher_city_id' => 'string',
        'dispatcher_district' => 'string',
        'dispatcher_address' => 'string',
        'diff_amount' => 'double',
        'total_amount' => 'double',
        'cost_fee_entity' => '\com_kingdee_service\data\entity\InboundSaveReqCostFeeEntity',
        'ignore_warn' => 'bool',
        'payment_entry' => '\com_kingdee_service\data\entity\InboundSaveReqPaymentEntry[]',
        'material_entity' => '\com_kingdee_service\data\entity\InboundSaveReqMaterialEntity[]',
        'attachments_url' => '\com_kingdee_service\data\entity\InboundSaveReqAttachmentsUrl[]',
        'outside_pk_id' => 'string',
        'deduction_balance' => 'string',
        'deduction_entry' => 'string',
        'reverse_condition_calculate' => 'bool',
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
        'bill_no' => null,
        'bill_date' => null,
        'trans_type' => null,
        'remark' => null,
        'dept_id' => null,
        'dept_number' => null,
        'emp_id' => null,
        'emp_number' => null,
        'supplier_id' => null,
        'supplier_number' => null,
        'contact_info' => null,
        'currency_id' => null,
        'currency_number' => null,
        'exchange_rate' => 'double',
        'dispatcher_phone' => null,
        'dispatcher_country_id' => null,
        'dispatcher_province_id' => null,
        'dispatcher_city_id' => null,
        'dispatcher_district' => null,
        'dispatcher_address' => null,
        'diff_amount' => 'double',
        'total_amount' => 'double',
        'cost_fee_entity' => null,
        'ignore_warn' => null,
        'payment_entry' => null,
        'material_entity' => null,
        'attachments_url' => null,
        'outside_pk_id' => null,
        'deduction_balance' => null,
        'deduction_entry' => null,
        'reverse_condition_calculate' => null,
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
        'bill_no' => 'bill_no',
        'bill_date' => 'bill_date',
        'trans_type' => 'trans_type',
        'remark' => 'remark',
        'dept_id' => 'dept_id',
        'dept_number' => 'dept_number',
        'emp_id' => 'emp_id',
        'emp_number' => 'emp_number',
        'supplier_id' => 'supplier_id',
        'supplier_number' => 'supplier_number',
        'contact_info' => 'contact_info',
        'currency_id' => 'currency_id',
        'currency_number' => 'currency_number',
        'exchange_rate' => 'exchange_rate',
        'dispatcher_phone' => 'dispatcher_phone',
        'dispatcher_country_id' => 'dispatcher_country_id',
        'dispatcher_province_id' => 'dispatcher_province_id',
        'dispatcher_city_id' => 'dispatcher_city_id',
        'dispatcher_district' => 'dispatcher_district',
        'dispatcher_address' => 'dispatcher_address',
        'diff_amount' => 'diff_amount',
        'total_amount' => 'total_amount',
        'cost_fee_entity' => 'cost_fee_entity',
        'ignore_warn' => 'ignore_warn',
        'payment_entry' => 'payment_entry',
        'material_entity' => 'material_entity',
        'attachments_url' => 'attachments_url',
        'outside_pk_id' => 'outside_pk_id',
        'deduction_balance' => 'deduction_balance',
        'deduction_entry' => 'deduction_entry',
        'reverse_condition_calculate' => 'reverse_condition_calculate',
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
        'bill_no' => 'setBillNo',
        'bill_date' => 'setBillDate',
        'trans_type' => 'setTransType',
        'remark' => 'setRemark',
        'dept_id' => 'setDeptId',
        'dept_number' => 'setDeptNumber',
        'emp_id' => 'setEmpId',
        'emp_number' => 'setEmpNumber',
        'supplier_id' => 'setSupplierId',
        'supplier_number' => 'setSupplierNumber',
        'contact_info' => 'setContactInfo',
        'currency_id' => 'setCurrencyId',
        'currency_number' => 'setCurrencyNumber',
        'exchange_rate' => 'setExchangeRate',
        'dispatcher_phone' => 'setDispatcherPhone',
        'dispatcher_country_id' => 'setDispatcherCountryId',
        'dispatcher_province_id' => 'setDispatcherProvinceId',
        'dispatcher_city_id' => 'setDispatcherCityId',
        'dispatcher_district' => 'setDispatcherDistrict',
        'dispatcher_address' => 'setDispatcherAddress',
        'diff_amount' => 'setDiffAmount',
        'total_amount' => 'setTotalAmount',
        'cost_fee_entity' => 'setCostFeeEntity',
        'ignore_warn' => 'setIgnoreWarn',
        'payment_entry' => 'setPaymentEntry',
        'material_entity' => 'setMaterialEntity',
        'attachments_url' => 'setAttachmentsUrl',
        'outside_pk_id' => 'setOutsidePkId',
        'deduction_balance' => 'setDeductionBalance',
        'deduction_entry' => 'setDeductionEntry',
        'reverse_condition_calculate' => 'setReverseConditionCalculate',
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
        'bill_no' => 'getBillNo',
        'bill_date' => 'getBillDate',
        'trans_type' => 'getTransType',
        'remark' => 'getRemark',
        'dept_id' => 'getDeptId',
        'dept_number' => 'getDeptNumber',
        'emp_id' => 'getEmpId',
        'emp_number' => 'getEmpNumber',
        'supplier_id' => 'getSupplierId',
        'supplier_number' => 'getSupplierNumber',
        'contact_info' => 'getContactInfo',
        'currency_id' => 'getCurrencyId',
        'currency_number' => 'getCurrencyNumber',
        'exchange_rate' => 'getExchangeRate',
        'dispatcher_phone' => 'getDispatcherPhone',
        'dispatcher_country_id' => 'getDispatcherCountryId',
        'dispatcher_province_id' => 'getDispatcherProvinceId',
        'dispatcher_city_id' => 'getDispatcherCityId',
        'dispatcher_district' => 'getDispatcherDistrict',
        'dispatcher_address' => 'getDispatcherAddress',
        'diff_amount' => 'getDiffAmount',
        'total_amount' => 'getTotalAmount',
        'cost_fee_entity' => 'getCostFeeEntity',
        'ignore_warn' => 'getIgnoreWarn',
        'payment_entry' => 'getPaymentEntry',
        'material_entity' => 'getMaterialEntity',
        'attachments_url' => 'getAttachmentsUrl',
        'outside_pk_id' => 'getOutsidePkId',
        'deduction_balance' => 'getDeductionBalance',
        'deduction_entry' => 'getDeductionEntry',
        'reverse_condition_calculate' => 'getReverseConditionCalculate',
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
        $this->container['bill_no'] = isset($data['bill_no']) ? $data['bill_no'] : null;
        $this->container['bill_date'] = isset($data['bill_date']) ? $data['bill_date'] : null;
        $this->container['trans_type'] = isset($data['trans_type']) ? $data['trans_type'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['dept_id'] = isset($data['dept_id']) ? $data['dept_id'] : null;
        $this->container['dept_number'] = isset($data['dept_number']) ? $data['dept_number'] : null;
        $this->container['emp_id'] = isset($data['emp_id']) ? $data['emp_id'] : null;
        $this->container['emp_number'] = isset($data['emp_number']) ? $data['emp_number'] : null;
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['supplier_number'] = isset($data['supplier_number']) ? $data['supplier_number'] : null;
        $this->container['contact_info'] = isset($data['contact_info']) ? $data['contact_info'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['currency_number'] = isset($data['currency_number']) ? $data['currency_number'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['dispatcher_phone'] = isset($data['dispatcher_phone']) ? $data['dispatcher_phone'] : null;
        $this->container['dispatcher_country_id'] = isset($data['dispatcher_country_id']) ? $data['dispatcher_country_id'] : null;
        $this->container['dispatcher_province_id'] = isset($data['dispatcher_province_id']) ? $data['dispatcher_province_id'] : null;
        $this->container['dispatcher_city_id'] = isset($data['dispatcher_city_id']) ? $data['dispatcher_city_id'] : null;
        $this->container['dispatcher_district'] = isset($data['dispatcher_district']) ? $data['dispatcher_district'] : null;
        $this->container['dispatcher_address'] = isset($data['dispatcher_address']) ? $data['dispatcher_address'] : null;
        $this->container['diff_amount'] = isset($data['diff_amount']) ? $data['diff_amount'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['cost_fee_entity'] = isset($data['cost_fee_entity']) ? $data['cost_fee_entity'] : null;
        $this->container['ignore_warn'] = isset($data['ignore_warn']) ? $data['ignore_warn'] : null;
        $this->container['payment_entry'] = isset($data['payment_entry']) ? $data['payment_entry'] : null;
        $this->container['material_entity'] = isset($data['material_entity']) ? $data['material_entity'] : null;
        $this->container['attachments_url'] = isset($data['attachments_url']) ? $data['attachments_url'] : null;
        $this->container['outside_pk_id'] = isset($data['outside_pk_id']) ? $data['outside_pk_id'] : null;
        $this->container['deduction_balance'] = isset($data['deduction_balance']) ? $data['deduction_balance'] : null;
        $this->container['deduction_entry'] = isset($data['deduction_entry']) ? $data['deduction_entry'] : null;
        $this->container['reverse_condition_calculate'] = isset($data['reverse_condition_calculate']) ? $data['reverse_condition_calculate'] : null;
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
     * Gets trans_type
     *
     * @return string
     */
    public function getTransType()
    {
        return $this->container['trans_type'];
    }

    /**
     * Sets trans_type
     *
     * @param string $trans_type trans_type
     *
     * @return $this
     */
    public function setTransType($trans_type)
    {
        $this->container['trans_type'] = $trans_type;

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
     * Gets contact_info
     *
     * @return string
     */
    public function getContactInfo()
    {
        return $this->container['contact_info'];
    }

    /**
     * Sets contact_info
     *
     * @param string $contact_info contact_info
     *
     * @return $this
     */
    public function setContactInfo($contact_info)
    {
        $this->container['contact_info'] = $contact_info;

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
     * Gets exchange_rate
     *
     * @return double
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param double $exchange_rate exchange_rate
     *
     * @return $this
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;

        return $this;
    }

    /**
     * Gets dispatcher_phone
     *
     * @return string
     */
    public function getDispatcherPhone()
    {
        return $this->container['dispatcher_phone'];
    }

    /**
     * Sets dispatcher_phone
     *
     * @param string $dispatcher_phone dispatcher_phone
     *
     * @return $this
     */
    public function setDispatcherPhone($dispatcher_phone)
    {
        $this->container['dispatcher_phone'] = $dispatcher_phone;

        return $this;
    }

    /**
     * Gets dispatcher_country_id
     *
     * @return string
     */
    public function getDispatcherCountryId()
    {
        return $this->container['dispatcher_country_id'];
    }

    /**
     * Sets dispatcher_country_id
     *
     * @param string $dispatcher_country_id dispatcher_country_id
     *
     * @return $this
     */
    public function setDispatcherCountryId($dispatcher_country_id)
    {
        $this->container['dispatcher_country_id'] = $dispatcher_country_id;

        return $this;
    }

    /**
     * Gets dispatcher_province_id
     *
     * @return string
     */
    public function getDispatcherProvinceId()
    {
        return $this->container['dispatcher_province_id'];
    }

    /**
     * Sets dispatcher_province_id
     *
     * @param string $dispatcher_province_id dispatcher_province_id
     *
     * @return $this
     */
    public function setDispatcherProvinceId($dispatcher_province_id)
    {
        $this->container['dispatcher_province_id'] = $dispatcher_province_id;

        return $this;
    }

    /**
     * Gets dispatcher_city_id
     *
     * @return string
     */
    public function getDispatcherCityId()
    {
        return $this->container['dispatcher_city_id'];
    }

    /**
     * Sets dispatcher_city_id
     *
     * @param string $dispatcher_city_id dispatcher_city_id
     *
     * @return $this
     */
    public function setDispatcherCityId($dispatcher_city_id)
    {
        $this->container['dispatcher_city_id'] = $dispatcher_city_id;

        return $this;
    }

    /**
     * Gets dispatcher_district
     *
     * @return string
     */
    public function getDispatcherDistrict()
    {
        return $this->container['dispatcher_district'];
    }

    /**
     * Sets dispatcher_district
     *
     * @param string $dispatcher_district dispatcher_district
     *
     * @return $this
     */
    public function setDispatcherDistrict($dispatcher_district)
    {
        $this->container['dispatcher_district'] = $dispatcher_district;

        return $this;
    }

    /**
     * Gets dispatcher_address
     *
     * @return string
     */
    public function getDispatcherAddress()
    {
        return $this->container['dispatcher_address'];
    }

    /**
     * Sets dispatcher_address
     *
     * @param string $dispatcher_address dispatcher_address
     *
     * @return $this
     */
    public function setDispatcherAddress($dispatcher_address)
    {
        $this->container['dispatcher_address'] = $dispatcher_address;

        return $this;
    }

    /**
     * Gets diff_amount
     *
     * @return double
     */
    public function getDiffAmount()
    {
        return $this->container['diff_amount'];
    }

    /**
     * Sets diff_amount
     *
     * @param double $diff_amount diff_amount
     *
     * @return $this
     */
    public function setDiffAmount($diff_amount)
    {
        $this->container['diff_amount'] = $diff_amount;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double $total_amount total_amount
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets cost_fee_entity
     *
     * @return \com_kingdee_service\data\entity\InboundSaveReqCostFeeEntity
     */
    public function getCostFeeEntity()
    {
        return $this->container['cost_fee_entity'];
    }

    /**
     * Sets cost_fee_entity
     *
     * @param \com_kingdee_service\data\entity\InboundSaveReqCostFeeEntity $cost_fee_entity cost_fee_entity
     *
     * @return $this
     */
    public function setCostFeeEntity($cost_fee_entity)
    {
        $this->container['cost_fee_entity'] = $cost_fee_entity;

        return $this;
    }

    /**
     * Gets ignore_warn
     *
     * @return bool
     */
    public function getIgnoreWarn()
    {
        return $this->container['ignore_warn'];
    }

    /**
     * Sets ignore_warn
     *
     * @param bool $ignore_warn ignore_warn
     *
     * @return $this
     */
    public function setIgnoreWarn($ignore_warn)
    {
        $this->container['ignore_warn'] = $ignore_warn;

        return $this;
    }

    /**
     * Gets payment_entry
     *
     * @return \com_kingdee_service\data\entity\InboundSaveReqPaymentEntry[]
     */
    public function getPaymentEntry()
    {
        return $this->container['payment_entry'];
    }

    /**
     * Sets payment_entry
     *
     * @param \com_kingdee_service\data\entity\InboundSaveReqPaymentEntry[] $payment_entry payment_entry
     *
     * @return $this
     */
    public function setPaymentEntry($payment_entry)
    {
        $this->container['payment_entry'] = $payment_entry;

        return $this;
    }

    /**
     * Gets material_entity
     *
     * @return \com_kingdee_service\data\entity\InboundSaveReqMaterialEntity[]
     */
    public function getMaterialEntity()
    {
        return $this->container['material_entity'];
    }

    /**
     * Sets material_entity
     *
     * @param \com_kingdee_service\data\entity\InboundSaveReqMaterialEntity[] $material_entity material_entity
     *
     * @return $this
     */
    public function setMaterialEntity($material_entity)
    {
        $this->container['material_entity'] = $material_entity;

        return $this;
    }

    /**
     * Gets attachments_url
     *
     * @return \com_kingdee_service\data\entity\InboundSaveReqAttachmentsUrl[]
     */
    public function getAttachmentsUrl()
    {
        return $this->container['attachments_url'];
    }

    /**
     * Sets attachments_url
     *
     * @param \com_kingdee_service\data\entity\InboundSaveReqAttachmentsUrl[] $attachments_url attachments_url
     *
     * @return $this
     */
    public function setAttachmentsUrl($attachments_url)
    {
        $this->container['attachments_url'] = $attachments_url;

        return $this;
    }

    /**
     * Gets outside_pk_id
     *
     * @return string
     */
    public function getOutsidePkId()
    {
        return $this->container['outside_pk_id'];
    }

    /**
     * Sets outside_pk_id
     *
     * @param string $outside_pk_id outside_pk_id
     *
     * @return $this
     */
    public function setOutsidePkId($outside_pk_id)
    {
        $this->container['outside_pk_id'] = $outside_pk_id;

        return $this;
    }

    /**
     * Gets deduction_balance
     *
     * @return string
     */
    public function getDeductionBalance()
    {
        return $this->container['deduction_balance'];
    }

    /**
     * Sets deduction_balance
     *
     * @param string $deduction_balance deduction_balance
     *
     * @return $this
     */
    public function setDeductionBalance($deduction_balance)
    {
        $this->container['deduction_balance'] = $deduction_balance;

        return $this;
    }

    /**
     * Gets deduction_entry
     *
     * @return string
     */
    public function getDeductionEntry()
    {
        return $this->container['deduction_entry'];
    }

    /**
     * Sets deduction_entry
     *
     * @param string $deduction_entry deduction_entry
     *
     * @return $this
     */
    public function setDeductionEntry($deduction_entry)
    {
        $this->container['deduction_entry'] = $deduction_entry;

        return $this;
    }

    /**
     * Gets reverse_condition_calculate
     *
     * @return bool
     */
    public function getReverseConditionCalculate()
    {
        return $this->container['reverse_condition_calculate'];
    }

    /**
     * Sets reverse_condition_calculate
     *
     * @param bool $reverse_condition_calculate reverse_condition_calculate
     *
     * @return $this
     */
    public function setReverseConditionCalculate($reverse_condition_calculate)
    {
        $this->container['reverse_condition_calculate'] = $reverse_condition_calculate;

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


