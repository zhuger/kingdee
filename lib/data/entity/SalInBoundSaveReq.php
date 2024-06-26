<?php
/**
 * SalInBoundSaveReq
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
 * SalInBoundSaveReq Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalInBoundSaveReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalInBoundSaveReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'default_bill_source' => 'string',
        'id' => 'string',
        'bill_date' => 'string',
        'customer_id' => 'string',
        'emp_id' => 'string',
        'customer_number' => 'string',
        'emp_number' => 'string',
        'bill_no' => 'string',
        'remark' => 'string',
        'contact_linkman' => 'string',
        'contact_phone' => 'string',
        'contact_country_id' => 'string',
        'contact_province_id' => 'string',
        'contact_city_id' => 'string',
        'contact_district_id' => 'string',
        'contact_address' => 'string',
        'bill_dis_amount' => 'double',
        'bill_dis_rate' => 'double',
        'total_ins_amount' => 'double',
        'total_amount' => 'double',
        'diff_amount' => 'double',
        'total_un_settle_amount' => 'double',
        'payment_entry' => '\com_kingdee_service\data\entity\SalInBoundSaveReqPaymentEntry[]',
        'material_entity' => '\com_kingdee_service\data\entity\SalInBoundSaveReqMaterialEntity[]',
        'attachments_url' => '\com_kingdee_service\data\entity\SalInBoundSaveReqAttachments[]',
        'reverse_condition_calculate' => 'bool',
        'custom_field' => 'map[string,string]',
        'operation_key' => 'string',
        'ignore_warn' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'default_bill_source' => null,
        'id' => null,
        'bill_date' => null,
        'customer_id' => null,
        'emp_id' => null,
        'customer_number' => null,
        'emp_number' => null,
        'bill_no' => null,
        'remark' => null,
        'contact_linkman' => null,
        'contact_phone' => null,
        'contact_country_id' => null,
        'contact_province_id' => null,
        'contact_city_id' => null,
        'contact_district_id' => null,
        'contact_address' => null,
        'bill_dis_amount' => 'double',
        'bill_dis_rate' => 'double',
        'total_ins_amount' => 'double',
        'total_amount' => 'double',
        'diff_amount' => 'double',
        'total_un_settle_amount' => 'double',
        'payment_entry' => null,
        'material_entity' => null,
        'attachments_url' => null,
        'reverse_condition_calculate' => null,
        'custom_field' => null,
        'operation_key' => null,
        'ignore_warn' => null
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
        'default_bill_source' => 'default_bill_source',
        'id' => 'id',
        'bill_date' => 'bill_date',
        'customer_id' => 'customer_id',
        'emp_id' => 'emp_id',
        'customer_number' => 'customer_number',
        'emp_number' => 'emp_number',
        'bill_no' => 'bill_no',
        'remark' => 'remark',
        'contact_linkman' => 'contact_linkman',
        'contact_phone' => 'contact_phone',
        'contact_country_id' => 'contact_country_id',
        'contact_province_id' => 'contact_province_id',
        'contact_city_id' => 'contact_city_id',
        'contact_district_id' => 'contact_district_id',
        'contact_address' => 'contact_address',
        'bill_dis_amount' => 'bill_dis_amount',
        'bill_dis_rate' => 'bill_dis_rate',
        'total_ins_amount' => 'total_ins_amount',
        'total_amount' => 'total_amount',
        'diff_amount' => 'diff_amount',
        'total_un_settle_amount' => 'total_un_settle_amount',
        'payment_entry' => 'payment_entry',
        'material_entity' => 'material_entity',
        'attachments_url' => 'attachments_url',
        'reverse_condition_calculate' => 'reverse_condition_calculate',
        'custom_field' => 'custom_field',
        'operation_key' => 'operation_key',
        'ignore_warn' => 'ignore_warn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_bill_source' => 'setDefaultBillSource',
        'id' => 'setId',
        'bill_date' => 'setBillDate',
        'customer_id' => 'setCustomerId',
        'emp_id' => 'setEmpId',
        'customer_number' => 'setCustomerNumber',
        'emp_number' => 'setEmpNumber',
        'bill_no' => 'setBillNo',
        'remark' => 'setRemark',
        'contact_linkman' => 'setContactLinkman',
        'contact_phone' => 'setContactPhone',
        'contact_country_id' => 'setContactCountryId',
        'contact_province_id' => 'setContactProvinceId',
        'contact_city_id' => 'setContactCityId',
        'contact_district_id' => 'setContactDistrictId',
        'contact_address' => 'setContactAddress',
        'bill_dis_amount' => 'setBillDisAmount',
        'bill_dis_rate' => 'setBillDisRate',
        'total_ins_amount' => 'setTotalInsAmount',
        'total_amount' => 'setTotalAmount',
        'diff_amount' => 'setDiffAmount',
        'total_un_settle_amount' => 'setTotalUnSettleAmount',
        'payment_entry' => 'setPaymentEntry',
        'material_entity' => 'setMaterialEntity',
        'attachments_url' => 'setAttachmentsUrl',
        'reverse_condition_calculate' => 'setReverseConditionCalculate',
        'custom_field' => 'setCustomField',
        'operation_key' => 'setOperationKey',
        'ignore_warn' => 'setIgnoreWarn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_bill_source' => 'getDefaultBillSource',
        'id' => 'getId',
        'bill_date' => 'getBillDate',
        'customer_id' => 'getCustomerId',
        'emp_id' => 'getEmpId',
        'customer_number' => 'getCustomerNumber',
        'emp_number' => 'getEmpNumber',
        'bill_no' => 'getBillNo',
        'remark' => 'getRemark',
        'contact_linkman' => 'getContactLinkman',
        'contact_phone' => 'getContactPhone',
        'contact_country_id' => 'getContactCountryId',
        'contact_province_id' => 'getContactProvinceId',
        'contact_city_id' => 'getContactCityId',
        'contact_district_id' => 'getContactDistrictId',
        'contact_address' => 'getContactAddress',
        'bill_dis_amount' => 'getBillDisAmount',
        'bill_dis_rate' => 'getBillDisRate',
        'total_ins_amount' => 'getTotalInsAmount',
        'total_amount' => 'getTotalAmount',
        'diff_amount' => 'getDiffAmount',
        'total_un_settle_amount' => 'getTotalUnSettleAmount',
        'payment_entry' => 'getPaymentEntry',
        'material_entity' => 'getMaterialEntity',
        'attachments_url' => 'getAttachmentsUrl',
        'reverse_condition_calculate' => 'getReverseConditionCalculate',
        'custom_field' => 'getCustomField',
        'operation_key' => 'getOperationKey',
        'ignore_warn' => 'getIgnoreWarn'
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
        $this->container['default_bill_source'] = isset($data['default_bill_source']) ? $data['default_bill_source'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['bill_date'] = isset($data['bill_date']) ? $data['bill_date'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['emp_id'] = isset($data['emp_id']) ? $data['emp_id'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['emp_number'] = isset($data['emp_number']) ? $data['emp_number'] : null;
        $this->container['bill_no'] = isset($data['bill_no']) ? $data['bill_no'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['contact_linkman'] = isset($data['contact_linkman']) ? $data['contact_linkman'] : null;
        $this->container['contact_phone'] = isset($data['contact_phone']) ? $data['contact_phone'] : null;
        $this->container['contact_country_id'] = isset($data['contact_country_id']) ? $data['contact_country_id'] : null;
        $this->container['contact_province_id'] = isset($data['contact_province_id']) ? $data['contact_province_id'] : null;
        $this->container['contact_city_id'] = isset($data['contact_city_id']) ? $data['contact_city_id'] : null;
        $this->container['contact_district_id'] = isset($data['contact_district_id']) ? $data['contact_district_id'] : null;
        $this->container['contact_address'] = isset($data['contact_address']) ? $data['contact_address'] : null;
        $this->container['bill_dis_amount'] = isset($data['bill_dis_amount']) ? $data['bill_dis_amount'] : null;
        $this->container['bill_dis_rate'] = isset($data['bill_dis_rate']) ? $data['bill_dis_rate'] : null;
        $this->container['total_ins_amount'] = isset($data['total_ins_amount']) ? $data['total_ins_amount'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['diff_amount'] = isset($data['diff_amount']) ? $data['diff_amount'] : null;
        $this->container['total_un_settle_amount'] = isset($data['total_un_settle_amount']) ? $data['total_un_settle_amount'] : null;
        $this->container['payment_entry'] = isset($data['payment_entry']) ? $data['payment_entry'] : null;
        $this->container['material_entity'] = isset($data['material_entity']) ? $data['material_entity'] : null;
        $this->container['attachments_url'] = isset($data['attachments_url']) ? $data['attachments_url'] : null;
        $this->container['reverse_condition_calculate'] = isset($data['reverse_condition_calculate']) ? $data['reverse_condition_calculate'] : null;
        $this->container['custom_field'] = isset($data['custom_field']) ? $data['custom_field'] : null;
        $this->container['operation_key'] = isset($data['operation_key']) ? $data['operation_key'] : null;
        $this->container['ignore_warn'] = isset($data['ignore_warn']) ? $data['ignore_warn'] : null;
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
     * Gets contact_linkman
     *
     * @return string
     */
    public function getContactLinkman()
    {
        return $this->container['contact_linkman'];
    }

    /**
     * Sets contact_linkman
     *
     * @param string $contact_linkman contact_linkman
     *
     * @return $this
     */
    public function setContactLinkman($contact_linkman)
    {
        $this->container['contact_linkman'] = $contact_linkman;

        return $this;
    }

    /**
     * Gets contact_phone
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->container['contact_phone'];
    }

    /**
     * Sets contact_phone
     *
     * @param string $contact_phone contact_phone
     *
     * @return $this
     */
    public function setContactPhone($contact_phone)
    {
        $this->container['contact_phone'] = $contact_phone;

        return $this;
    }

    /**
     * Gets contact_country_id
     *
     * @return string
     */
    public function getContactCountryId()
    {
        return $this->container['contact_country_id'];
    }

    /**
     * Sets contact_country_id
     *
     * @param string $contact_country_id contact_country_id
     *
     * @return $this
     */
    public function setContactCountryId($contact_country_id)
    {
        $this->container['contact_country_id'] = $contact_country_id;

        return $this;
    }

    /**
     * Gets contact_province_id
     *
     * @return string
     */
    public function getContactProvinceId()
    {
        return $this->container['contact_province_id'];
    }

    /**
     * Sets contact_province_id
     *
     * @param string $contact_province_id contact_province_id
     *
     * @return $this
     */
    public function setContactProvinceId($contact_province_id)
    {
        $this->container['contact_province_id'] = $contact_province_id;

        return $this;
    }

    /**
     * Gets contact_city_id
     *
     * @return string
     */
    public function getContactCityId()
    {
        return $this->container['contact_city_id'];
    }

    /**
     * Sets contact_city_id
     *
     * @param string $contact_city_id contact_city_id
     *
     * @return $this
     */
    public function setContactCityId($contact_city_id)
    {
        $this->container['contact_city_id'] = $contact_city_id;

        return $this;
    }

    /**
     * Gets contact_district_id
     *
     * @return string
     */
    public function getContactDistrictId()
    {
        return $this->container['contact_district_id'];
    }

    /**
     * Sets contact_district_id
     *
     * @param string $contact_district_id contact_district_id
     *
     * @return $this
     */
    public function setContactDistrictId($contact_district_id)
    {
        $this->container['contact_district_id'] = $contact_district_id;

        return $this;
    }

    /**
     * Gets contact_address
     *
     * @return string
     */
    public function getContactAddress()
    {
        return $this->container['contact_address'];
    }

    /**
     * Sets contact_address
     *
     * @param string $contact_address contact_address
     *
     * @return $this
     */
    public function setContactAddress($contact_address)
    {
        $this->container['contact_address'] = $contact_address;

        return $this;
    }

    /**
     * Gets bill_dis_amount
     *
     * @return double
     */
    public function getBillDisAmount()
    {
        return $this->container['bill_dis_amount'];
    }

    /**
     * Sets bill_dis_amount
     *
     * @param double $bill_dis_amount bill_dis_amount
     *
     * @return $this
     */
    public function setBillDisAmount($bill_dis_amount)
    {
        $this->container['bill_dis_amount'] = $bill_dis_amount;

        return $this;
    }

    /**
     * Gets bill_dis_rate
     *
     * @return double
     */
    public function getBillDisRate()
    {
        return $this->container['bill_dis_rate'];
    }

    /**
     * Sets bill_dis_rate
     *
     * @param double $bill_dis_rate bill_dis_rate
     *
     * @return $this
     */
    public function setBillDisRate($bill_dis_rate)
    {
        $this->container['bill_dis_rate'] = $bill_dis_rate;

        return $this;
    }

    /**
     * Gets total_ins_amount
     *
     * @return double
     */
    public function getTotalInsAmount()
    {
        return $this->container['total_ins_amount'];
    }

    /**
     * Sets total_ins_amount
     *
     * @param double $total_ins_amount total_ins_amount
     *
     * @return $this
     */
    public function setTotalInsAmount($total_ins_amount)
    {
        $this->container['total_ins_amount'] = $total_ins_amount;

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
     * Gets total_un_settle_amount
     *
     * @return double
     */
    public function getTotalUnSettleAmount()
    {
        return $this->container['total_un_settle_amount'];
    }

    /**
     * Sets total_un_settle_amount
     *
     * @param double $total_un_settle_amount total_un_settle_amount
     *
     * @return $this
     */
    public function setTotalUnSettleAmount($total_un_settle_amount)
    {
        $this->container['total_un_settle_amount'] = $total_un_settle_amount;

        return $this;
    }

    /**
     * Gets payment_entry
     *
     * @return \com_kingdee_service\data\entity\SalInBoundSaveReqPaymentEntry[]
     */
    public function getPaymentEntry()
    {
        return $this->container['payment_entry'];
    }

    /**
     * Sets payment_entry
     *
     * @param \com_kingdee_service\data\entity\SalInBoundSaveReqPaymentEntry[] $payment_entry payment_entry
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
     * @return \com_kingdee_service\data\entity\SalInBoundSaveReqMaterialEntity[]
     */
    public function getMaterialEntity()
    {
        return $this->container['material_entity'];
    }

    /**
     * Sets material_entity
     *
     * @param \com_kingdee_service\data\entity\SalInBoundSaveReqMaterialEntity[] $material_entity material_entity
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
     * @return \com_kingdee_service\data\entity\SalInBoundSaveReqAttachments[]
     */
    public function getAttachmentsUrl()
    {
        return $this->container['attachments_url'];
    }

    /**
     * Sets attachments_url
     *
     * @param \com_kingdee_service\data\entity\SalInBoundSaveReqAttachments[] $attachments_url attachments_url
     *
     * @return $this
     */
    public function setAttachmentsUrl($attachments_url)
    {
        $this->container['attachments_url'] = $attachments_url;

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


