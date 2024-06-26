<?php
/**
 * PurReqSaveReq
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
 * PurReqSaveReq Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurReqSaveReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurReqSaveReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'bill_no' => 'string',
        'bill_date' => 'string',
        'whole_supplier_id' => 'string',
        'emp_id' => 'string',
        'dept_id' => 'string',
        'remark' => 'string',
        'contact_address' => 'string',
        'dispatcher_linkman' => 'string',
        'dispatcher_phone' => 'string',
        'dispatcher_country_id' => 'string',
        'dispatcher_province_id' => 'string',
        'dispatcher_city_id' => 'string',
        'dispatcher_district_id' => 'string',
        'dispatcher_address' => 'string',
        'ignore_warn' => 'bool',
        'material_entity' => '\com_kingdee_service\data\entity\PurReqSaveReqMaterialEntity[]',
        'attachments_url' => 'string[]',
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
        'whole_supplier_id' => null,
        'emp_id' => null,
        'dept_id' => null,
        'remark' => null,
        'contact_address' => null,
        'dispatcher_linkman' => null,
        'dispatcher_phone' => null,
        'dispatcher_country_id' => null,
        'dispatcher_province_id' => null,
        'dispatcher_city_id' => null,
        'dispatcher_district_id' => null,
        'dispatcher_address' => null,
        'ignore_warn' => null,
        'material_entity' => null,
        'attachments_url' => null,
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
        'whole_supplier_id' => 'whole_supplier_id',
        'emp_id' => 'emp_id',
        'dept_id' => 'dept_id',
        'remark' => 'remark',
        'contact_address' => 'contact_address',
        'dispatcher_linkman' => 'dispatcher_linkman',
        'dispatcher_phone' => 'dispatcher_phone',
        'dispatcher_country_id' => 'dispatcher_country_id',
        'dispatcher_province_id' => 'dispatcher_province_id',
        'dispatcher_city_id' => 'dispatcher_city_id',
        'dispatcher_district_id' => 'dispatcher_district_id',
        'dispatcher_address' => 'dispatcher_address',
        'ignore_warn' => 'ignore_warn',
        'material_entity' => 'material_entity',
        'attachments_url' => 'attachments_url',
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
        'whole_supplier_id' => 'setWholeSupplierId',
        'emp_id' => 'setEmpId',
        'dept_id' => 'setDeptId',
        'remark' => 'setRemark',
        'contact_address' => 'setContactAddress',
        'dispatcher_linkman' => 'setDispatcherLinkman',
        'dispatcher_phone' => 'setDispatcherPhone',
        'dispatcher_country_id' => 'setDispatcherCountryId',
        'dispatcher_province_id' => 'setDispatcherProvinceId',
        'dispatcher_city_id' => 'setDispatcherCityId',
        'dispatcher_district_id' => 'setDispatcherDistrictId',
        'dispatcher_address' => 'setDispatcherAddress',
        'ignore_warn' => 'setIgnoreWarn',
        'material_entity' => 'setMaterialEntity',
        'attachments_url' => 'setAttachmentsUrl',
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
        'whole_supplier_id' => 'getWholeSupplierId',
        'emp_id' => 'getEmpId',
        'dept_id' => 'getDeptId',
        'remark' => 'getRemark',
        'contact_address' => 'getContactAddress',
        'dispatcher_linkman' => 'getDispatcherLinkman',
        'dispatcher_phone' => 'getDispatcherPhone',
        'dispatcher_country_id' => 'getDispatcherCountryId',
        'dispatcher_province_id' => 'getDispatcherProvinceId',
        'dispatcher_city_id' => 'getDispatcherCityId',
        'dispatcher_district_id' => 'getDispatcherDistrictId',
        'dispatcher_address' => 'getDispatcherAddress',
        'ignore_warn' => 'getIgnoreWarn',
        'material_entity' => 'getMaterialEntity',
        'attachments_url' => 'getAttachmentsUrl',
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
        $this->container['whole_supplier_id'] = isset($data['whole_supplier_id']) ? $data['whole_supplier_id'] : null;
        $this->container['emp_id'] = isset($data['emp_id']) ? $data['emp_id'] : null;
        $this->container['dept_id'] = isset($data['dept_id']) ? $data['dept_id'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['contact_address'] = isset($data['contact_address']) ? $data['contact_address'] : null;
        $this->container['dispatcher_linkman'] = isset($data['dispatcher_linkman']) ? $data['dispatcher_linkman'] : null;
        $this->container['dispatcher_phone'] = isset($data['dispatcher_phone']) ? $data['dispatcher_phone'] : null;
        $this->container['dispatcher_country_id'] = isset($data['dispatcher_country_id']) ? $data['dispatcher_country_id'] : null;
        $this->container['dispatcher_province_id'] = isset($data['dispatcher_province_id']) ? $data['dispatcher_province_id'] : null;
        $this->container['dispatcher_city_id'] = isset($data['dispatcher_city_id']) ? $data['dispatcher_city_id'] : null;
        $this->container['dispatcher_district_id'] = isset($data['dispatcher_district_id']) ? $data['dispatcher_district_id'] : null;
        $this->container['dispatcher_address'] = isset($data['dispatcher_address']) ? $data['dispatcher_address'] : null;
        $this->container['ignore_warn'] = isset($data['ignore_warn']) ? $data['ignore_warn'] : null;
        $this->container['material_entity'] = isset($data['material_entity']) ? $data['material_entity'] : null;
        $this->container['attachments_url'] = isset($data['attachments_url']) ? $data['attachments_url'] : null;
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
     * Gets whole_supplier_id
     *
     * @return string
     */
    public function getWholeSupplierId()
    {
        return $this->container['whole_supplier_id'];
    }

    /**
     * Sets whole_supplier_id
     *
     * @param string $whole_supplier_id whole_supplier_id
     *
     * @return $this
     */
    public function setWholeSupplierId($whole_supplier_id)
    {
        $this->container['whole_supplier_id'] = $whole_supplier_id;

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
     * Gets dispatcher_linkman
     *
     * @return string
     */
    public function getDispatcherLinkman()
    {
        return $this->container['dispatcher_linkman'];
    }

    /**
     * Sets dispatcher_linkman
     *
     * @param string $dispatcher_linkman dispatcher_linkman
     *
     * @return $this
     */
    public function setDispatcherLinkman($dispatcher_linkman)
    {
        $this->container['dispatcher_linkman'] = $dispatcher_linkman;

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
     * Gets dispatcher_district_id
     *
     * @return string
     */
    public function getDispatcherDistrictId()
    {
        return $this->container['dispatcher_district_id'];
    }

    /**
     * Sets dispatcher_district_id
     *
     * @param string $dispatcher_district_id dispatcher_district_id
     *
     * @return $this
     */
    public function setDispatcherDistrictId($dispatcher_district_id)
    {
        $this->container['dispatcher_district_id'] = $dispatcher_district_id;

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
     * Gets material_entity
     *
     * @return \com_kingdee_service\data\entity\PurReqSaveReqMaterialEntity[]
     */
    public function getMaterialEntity()
    {
        return $this->container['material_entity'];
    }

    /**
     * Sets material_entity
     *
     * @param \com_kingdee_service\data\entity\PurReqSaveReqMaterialEntity[] $material_entity material_entity
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
     * @return string[]
     */
    public function getAttachmentsUrl()
    {
        return $this->container['attachments_url'];
    }

    /**
     * Sets attachments_url
     *
     * @param string[] $attachments_url attachments_url
     *
     * @return $this
     */
    public function setAttachmentsUrl($attachments_url)
    {
        $this->container['attachments_url'] = $attachments_url;

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


