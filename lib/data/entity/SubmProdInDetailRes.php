<?php
/**
 * SubmProdInDetailRes
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
 * SubmProdInDetailRes Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubmProdInDetailRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubmProdInDetailRes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'bill_no' => 'string',
        'bill_date' => 'string',
        'bill_status' => 'string',
        'create_time' => 'string',
        'modify_time' => 'string',
        'audit_time' => 'string',
        'creator_id' => 'string',
        'creator_name' => 'string',
        'creator_number' => 'string',
        'modifier_id' => 'string',
        'modifier_name' => 'string',
        'modifier_number' => 'string',
        'auditor_id' => 'string',
        'auditor_name' => 'string',
        'auditor_number' => 'string',
        'remark' => 'string',
        'dept_id' => 'string',
        'dept_name' => 'string',
        'dept_number' => 'string',
        'emp_id' => 'string',
        'emp_name' => 'string',
        'emp_number' => 'string',
        'supplier_id' => 'string',
        'supplier_name' => 'string',
        'supplier_number' => 'string',
        'contact_phone' => 'string',
        'contact_country_id' => 'string',
        'contact_country_name' => 'string',
        'contact_country_number' => 'string',
        'contact_province_id' => 'string',
        'contact_province_name' => 'string',
        'contact_province_number' => 'string',
        'contact_city_id' => 'string',
        'contact_city_name' => 'string',
        'contact_city_number' => 'string',
        'contact_district_id' => 'string',
        'contact_district_name' => 'string',
        'contact_district_number' => 'string',
        'exchange_rate' => 'double',
        'all_debt' => 'double',
        'last_debt' => 'double',
        'material_entity' => '\com_kingdee_service\data\entity\SubmProdInDetailResMaterialEntity[]'
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
        'bill_status' => null,
        'create_time' => null,
        'modify_time' => null,
        'audit_time' => null,
        'creator_id' => null,
        'creator_name' => null,
        'creator_number' => null,
        'modifier_id' => null,
        'modifier_name' => null,
        'modifier_number' => null,
        'auditor_id' => null,
        'auditor_name' => null,
        'auditor_number' => null,
        'remark' => null,
        'dept_id' => null,
        'dept_name' => null,
        'dept_number' => null,
        'emp_id' => null,
        'emp_name' => null,
        'emp_number' => null,
        'supplier_id' => null,
        'supplier_name' => null,
        'supplier_number' => null,
        'contact_phone' => null,
        'contact_country_id' => null,
        'contact_country_name' => null,
        'contact_country_number' => null,
        'contact_province_id' => null,
        'contact_province_name' => null,
        'contact_province_number' => null,
        'contact_city_id' => null,
        'contact_city_name' => null,
        'contact_city_number' => null,
        'contact_district_id' => null,
        'contact_district_name' => null,
        'contact_district_number' => null,
        'exchange_rate' => 'double',
        'all_debt' => 'double',
        'last_debt' => 'double',
        'material_entity' => null
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
        'bill_status' => 'bill_status',
        'create_time' => 'create_time',
        'modify_time' => 'modify_time',
        'audit_time' => 'audit_time',
        'creator_id' => 'creator_id',
        'creator_name' => 'creator_name',
        'creator_number' => 'creator_number',
        'modifier_id' => 'modifier_id',
        'modifier_name' => 'modifier_name',
        'modifier_number' => 'modifier_number',
        'auditor_id' => 'auditor_id',
        'auditor_name' => 'auditor_name',
        'auditor_number' => 'auditor_number',
        'remark' => 'remark',
        'dept_id' => 'dept_id',
        'dept_name' => 'dept_name',
        'dept_number' => 'dept_number',
        'emp_id' => 'emp_id',
        'emp_name' => 'emp_name',
        'emp_number' => 'emp_number',
        'supplier_id' => 'supplier_id',
        'supplier_name' => 'supplier_name',
        'supplier_number' => 'supplier_number',
        'contact_phone' => 'contact_phone',
        'contact_country_id' => 'contact_country_id',
        'contact_country_name' => 'contact_country_name',
        'contact_country_number' => 'contact_country_number',
        'contact_province_id' => 'contact_province_id',
        'contact_province_name' => 'contact_province_name',
        'contact_province_number' => 'contact_province_number',
        'contact_city_id' => 'contact_city_id',
        'contact_city_name' => 'contact_city_name',
        'contact_city_number' => 'contact_city_number',
        'contact_district_id' => 'contact_district_id',
        'contact_district_name' => 'contact_district_name',
        'contact_district_number' => 'contact_district_number',
        'exchange_rate' => 'exchange_rate',
        'all_debt' => 'all_debt',
        'last_debt' => 'last_debt',
        'material_entity' => 'material_entity'
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
        'bill_status' => 'setBillStatus',
        'create_time' => 'setCreateTime',
        'modify_time' => 'setModifyTime',
        'audit_time' => 'setAuditTime',
        'creator_id' => 'setCreatorId',
        'creator_name' => 'setCreatorName',
        'creator_number' => 'setCreatorNumber',
        'modifier_id' => 'setModifierId',
        'modifier_name' => 'setModifierName',
        'modifier_number' => 'setModifierNumber',
        'auditor_id' => 'setAuditorId',
        'auditor_name' => 'setAuditorName',
        'auditor_number' => 'setAuditorNumber',
        'remark' => 'setRemark',
        'dept_id' => 'setDeptId',
        'dept_name' => 'setDeptName',
        'dept_number' => 'setDeptNumber',
        'emp_id' => 'setEmpId',
        'emp_name' => 'setEmpName',
        'emp_number' => 'setEmpNumber',
        'supplier_id' => 'setSupplierId',
        'supplier_name' => 'setSupplierName',
        'supplier_number' => 'setSupplierNumber',
        'contact_phone' => 'setContactPhone',
        'contact_country_id' => 'setContactCountryId',
        'contact_country_name' => 'setContactCountryName',
        'contact_country_number' => 'setContactCountryNumber',
        'contact_province_id' => 'setContactProvinceId',
        'contact_province_name' => 'setContactProvinceName',
        'contact_province_number' => 'setContactProvinceNumber',
        'contact_city_id' => 'setContactCityId',
        'contact_city_name' => 'setContactCityName',
        'contact_city_number' => 'setContactCityNumber',
        'contact_district_id' => 'setContactDistrictId',
        'contact_district_name' => 'setContactDistrictName',
        'contact_district_number' => 'setContactDistrictNumber',
        'exchange_rate' => 'setExchangeRate',
        'all_debt' => 'setAllDebt',
        'last_debt' => 'setLastDebt',
        'material_entity' => 'setMaterialEntity'
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
        'bill_status' => 'getBillStatus',
        'create_time' => 'getCreateTime',
        'modify_time' => 'getModifyTime',
        'audit_time' => 'getAuditTime',
        'creator_id' => 'getCreatorId',
        'creator_name' => 'getCreatorName',
        'creator_number' => 'getCreatorNumber',
        'modifier_id' => 'getModifierId',
        'modifier_name' => 'getModifierName',
        'modifier_number' => 'getModifierNumber',
        'auditor_id' => 'getAuditorId',
        'auditor_name' => 'getAuditorName',
        'auditor_number' => 'getAuditorNumber',
        'remark' => 'getRemark',
        'dept_id' => 'getDeptId',
        'dept_name' => 'getDeptName',
        'dept_number' => 'getDeptNumber',
        'emp_id' => 'getEmpId',
        'emp_name' => 'getEmpName',
        'emp_number' => 'getEmpNumber',
        'supplier_id' => 'getSupplierId',
        'supplier_name' => 'getSupplierName',
        'supplier_number' => 'getSupplierNumber',
        'contact_phone' => 'getContactPhone',
        'contact_country_id' => 'getContactCountryId',
        'contact_country_name' => 'getContactCountryName',
        'contact_country_number' => 'getContactCountryNumber',
        'contact_province_id' => 'getContactProvinceId',
        'contact_province_name' => 'getContactProvinceName',
        'contact_province_number' => 'getContactProvinceNumber',
        'contact_city_id' => 'getContactCityId',
        'contact_city_name' => 'getContactCityName',
        'contact_city_number' => 'getContactCityNumber',
        'contact_district_id' => 'getContactDistrictId',
        'contact_district_name' => 'getContactDistrictName',
        'contact_district_number' => 'getContactDistrictNumber',
        'exchange_rate' => 'getExchangeRate',
        'all_debt' => 'getAllDebt',
        'last_debt' => 'getLastDebt',
        'material_entity' => 'getMaterialEntity'
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
        $this->container['bill_status'] = isset($data['bill_status']) ? $data['bill_status'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['modify_time'] = isset($data['modify_time']) ? $data['modify_time'] : null;
        $this->container['audit_time'] = isset($data['audit_time']) ? $data['audit_time'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['creator_name'] = isset($data['creator_name']) ? $data['creator_name'] : null;
        $this->container['creator_number'] = isset($data['creator_number']) ? $data['creator_number'] : null;
        $this->container['modifier_id'] = isset($data['modifier_id']) ? $data['modifier_id'] : null;
        $this->container['modifier_name'] = isset($data['modifier_name']) ? $data['modifier_name'] : null;
        $this->container['modifier_number'] = isset($data['modifier_number']) ? $data['modifier_number'] : null;
        $this->container['auditor_id'] = isset($data['auditor_id']) ? $data['auditor_id'] : null;
        $this->container['auditor_name'] = isset($data['auditor_name']) ? $data['auditor_name'] : null;
        $this->container['auditor_number'] = isset($data['auditor_number']) ? $data['auditor_number'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['dept_id'] = isset($data['dept_id']) ? $data['dept_id'] : null;
        $this->container['dept_name'] = isset($data['dept_name']) ? $data['dept_name'] : null;
        $this->container['dept_number'] = isset($data['dept_number']) ? $data['dept_number'] : null;
        $this->container['emp_id'] = isset($data['emp_id']) ? $data['emp_id'] : null;
        $this->container['emp_name'] = isset($data['emp_name']) ? $data['emp_name'] : null;
        $this->container['emp_number'] = isset($data['emp_number']) ? $data['emp_number'] : null;
        $this->container['supplier_id'] = isset($data['supplier_id']) ? $data['supplier_id'] : null;
        $this->container['supplier_name'] = isset($data['supplier_name']) ? $data['supplier_name'] : null;
        $this->container['supplier_number'] = isset($data['supplier_number']) ? $data['supplier_number'] : null;
        $this->container['contact_phone'] = isset($data['contact_phone']) ? $data['contact_phone'] : null;
        $this->container['contact_country_id'] = isset($data['contact_country_id']) ? $data['contact_country_id'] : null;
        $this->container['contact_country_name'] = isset($data['contact_country_name']) ? $data['contact_country_name'] : null;
        $this->container['contact_country_number'] = isset($data['contact_country_number']) ? $data['contact_country_number'] : null;
        $this->container['contact_province_id'] = isset($data['contact_province_id']) ? $data['contact_province_id'] : null;
        $this->container['contact_province_name'] = isset($data['contact_province_name']) ? $data['contact_province_name'] : null;
        $this->container['contact_province_number'] = isset($data['contact_province_number']) ? $data['contact_province_number'] : null;
        $this->container['contact_city_id'] = isset($data['contact_city_id']) ? $data['contact_city_id'] : null;
        $this->container['contact_city_name'] = isset($data['contact_city_name']) ? $data['contact_city_name'] : null;
        $this->container['contact_city_number'] = isset($data['contact_city_number']) ? $data['contact_city_number'] : null;
        $this->container['contact_district_id'] = isset($data['contact_district_id']) ? $data['contact_district_id'] : null;
        $this->container['contact_district_name'] = isset($data['contact_district_name']) ? $data['contact_district_name'] : null;
        $this->container['contact_district_number'] = isset($data['contact_district_number']) ? $data['contact_district_number'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['all_debt'] = isset($data['all_debt']) ? $data['all_debt'] : null;
        $this->container['last_debt'] = isset($data['last_debt']) ? $data['last_debt'] : null;
        $this->container['material_entity'] = isset($data['material_entity']) ? $data['material_entity'] : null;
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
     * Gets create_time
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param string $create_time create_time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets modify_time
     *
     * @return string
     */
    public function getModifyTime()
    {
        return $this->container['modify_time'];
    }

    /**
     * Sets modify_time
     *
     * @param string $modify_time modify_time
     *
     * @return $this
     */
    public function setModifyTime($modify_time)
    {
        $this->container['modify_time'] = $modify_time;

        return $this;
    }

    /**
     * Gets audit_time
     *
     * @return string
     */
    public function getAuditTime()
    {
        return $this->container['audit_time'];
    }

    /**
     * Sets audit_time
     *
     * @param string $audit_time audit_time
     *
     * @return $this
     */
    public function setAuditTime($audit_time)
    {
        $this->container['audit_time'] = $audit_time;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return string
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param string $creator_id creator_id
     *
     * @return $this
     */
    public function setCreatorId($creator_id)
    {
        $this->container['creator_id'] = $creator_id;

        return $this;
    }

    /**
     * Gets creator_name
     *
     * @return string
     */
    public function getCreatorName()
    {
        return $this->container['creator_name'];
    }

    /**
     * Sets creator_name
     *
     * @param string $creator_name creator_name
     *
     * @return $this
     */
    public function setCreatorName($creator_name)
    {
        $this->container['creator_name'] = $creator_name;

        return $this;
    }

    /**
     * Gets creator_number
     *
     * @return string
     */
    public function getCreatorNumber()
    {
        return $this->container['creator_number'];
    }

    /**
     * Sets creator_number
     *
     * @param string $creator_number creator_number
     *
     * @return $this
     */
    public function setCreatorNumber($creator_number)
    {
        $this->container['creator_number'] = $creator_number;

        return $this;
    }

    /**
     * Gets modifier_id
     *
     * @return string
     */
    public function getModifierId()
    {
        return $this->container['modifier_id'];
    }

    /**
     * Sets modifier_id
     *
     * @param string $modifier_id modifier_id
     *
     * @return $this
     */
    public function setModifierId($modifier_id)
    {
        $this->container['modifier_id'] = $modifier_id;

        return $this;
    }

    /**
     * Gets modifier_name
     *
     * @return string
     */
    public function getModifierName()
    {
        return $this->container['modifier_name'];
    }

    /**
     * Sets modifier_name
     *
     * @param string $modifier_name modifier_name
     *
     * @return $this
     */
    public function setModifierName($modifier_name)
    {
        $this->container['modifier_name'] = $modifier_name;

        return $this;
    }

    /**
     * Gets modifier_number
     *
     * @return string
     */
    public function getModifierNumber()
    {
        return $this->container['modifier_number'];
    }

    /**
     * Sets modifier_number
     *
     * @param string $modifier_number modifier_number
     *
     * @return $this
     */
    public function setModifierNumber($modifier_number)
    {
        $this->container['modifier_number'] = $modifier_number;

        return $this;
    }

    /**
     * Gets auditor_id
     *
     * @return string
     */
    public function getAuditorId()
    {
        return $this->container['auditor_id'];
    }

    /**
     * Sets auditor_id
     *
     * @param string $auditor_id auditor_id
     *
     * @return $this
     */
    public function setAuditorId($auditor_id)
    {
        $this->container['auditor_id'] = $auditor_id;

        return $this;
    }

    /**
     * Gets auditor_name
     *
     * @return string
     */
    public function getAuditorName()
    {
        return $this->container['auditor_name'];
    }

    /**
     * Sets auditor_name
     *
     * @param string $auditor_name auditor_name
     *
     * @return $this
     */
    public function setAuditorName($auditor_name)
    {
        $this->container['auditor_name'] = $auditor_name;

        return $this;
    }

    /**
     * Gets auditor_number
     *
     * @return string
     */
    public function getAuditorNumber()
    {
        return $this->container['auditor_number'];
    }

    /**
     * Sets auditor_number
     *
     * @param string $auditor_number auditor_number
     *
     * @return $this
     */
    public function setAuditorNumber($auditor_number)
    {
        $this->container['auditor_number'] = $auditor_number;

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
     * Gets contact_country_name
     *
     * @return string
     */
    public function getContactCountryName()
    {
        return $this->container['contact_country_name'];
    }

    /**
     * Sets contact_country_name
     *
     * @param string $contact_country_name contact_country_name
     *
     * @return $this
     */
    public function setContactCountryName($contact_country_name)
    {
        $this->container['contact_country_name'] = $contact_country_name;

        return $this;
    }

    /**
     * Gets contact_country_number
     *
     * @return string
     */
    public function getContactCountryNumber()
    {
        return $this->container['contact_country_number'];
    }

    /**
     * Sets contact_country_number
     *
     * @param string $contact_country_number contact_country_number
     *
     * @return $this
     */
    public function setContactCountryNumber($contact_country_number)
    {
        $this->container['contact_country_number'] = $contact_country_number;

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
     * Gets contact_province_name
     *
     * @return string
     */
    public function getContactProvinceName()
    {
        return $this->container['contact_province_name'];
    }

    /**
     * Sets contact_province_name
     *
     * @param string $contact_province_name contact_province_name
     *
     * @return $this
     */
    public function setContactProvinceName($contact_province_name)
    {
        $this->container['contact_province_name'] = $contact_province_name;

        return $this;
    }

    /**
     * Gets contact_province_number
     *
     * @return string
     */
    public function getContactProvinceNumber()
    {
        return $this->container['contact_province_number'];
    }

    /**
     * Sets contact_province_number
     *
     * @param string $contact_province_number contact_province_number
     *
     * @return $this
     */
    public function setContactProvinceNumber($contact_province_number)
    {
        $this->container['contact_province_number'] = $contact_province_number;

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
     * Gets contact_city_name
     *
     * @return string
     */
    public function getContactCityName()
    {
        return $this->container['contact_city_name'];
    }

    /**
     * Sets contact_city_name
     *
     * @param string $contact_city_name contact_city_name
     *
     * @return $this
     */
    public function setContactCityName($contact_city_name)
    {
        $this->container['contact_city_name'] = $contact_city_name;

        return $this;
    }

    /**
     * Gets contact_city_number
     *
     * @return string
     */
    public function getContactCityNumber()
    {
        return $this->container['contact_city_number'];
    }

    /**
     * Sets contact_city_number
     *
     * @param string $contact_city_number contact_city_number
     *
     * @return $this
     */
    public function setContactCityNumber($contact_city_number)
    {
        $this->container['contact_city_number'] = $contact_city_number;

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
     * Gets contact_district_name
     *
     * @return string
     */
    public function getContactDistrictName()
    {
        return $this->container['contact_district_name'];
    }

    /**
     * Sets contact_district_name
     *
     * @param string $contact_district_name contact_district_name
     *
     * @return $this
     */
    public function setContactDistrictName($contact_district_name)
    {
        $this->container['contact_district_name'] = $contact_district_name;

        return $this;
    }

    /**
     * Gets contact_district_number
     *
     * @return string
     */
    public function getContactDistrictNumber()
    {
        return $this->container['contact_district_number'];
    }

    /**
     * Sets contact_district_number
     *
     * @param string $contact_district_number contact_district_number
     *
     * @return $this
     */
    public function setContactDistrictNumber($contact_district_number)
    {
        $this->container['contact_district_number'] = $contact_district_number;

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
     * Gets all_debt
     *
     * @return double
     */
    public function getAllDebt()
    {
        return $this->container['all_debt'];
    }

    /**
     * Sets all_debt
     *
     * @param double $all_debt all_debt
     *
     * @return $this
     */
    public function setAllDebt($all_debt)
    {
        $this->container['all_debt'] = $all_debt;

        return $this;
    }

    /**
     * Gets last_debt
     *
     * @return double
     */
    public function getLastDebt()
    {
        return $this->container['last_debt'];
    }

    /**
     * Sets last_debt
     *
     * @param double $last_debt last_debt
     *
     * @return $this
     */
    public function setLastDebt($last_debt)
    {
        $this->container['last_debt'] = $last_debt;

        return $this;
    }

    /**
     * Gets material_entity
     *
     * @return \com_kingdee_service\data\entity\SubmProdInDetailResMaterialEntity[]
     */
    public function getMaterialEntity()
    {
        return $this->container['material_entity'];
    }

    /**
     * Sets material_entity
     *
     * @param \com_kingdee_service\data\entity\SubmProdInDetailResMaterialEntity[] $material_entity material_entity
     *
     * @return $this
     */
    public function setMaterialEntity($material_entity)
    {
        $this->container['material_entity'] = $material_entity;

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


