<?php
/**
 * InvProductSaveRequest
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
 * InvProductSaveRequest Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvProductSaveRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvProductSaveRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'default_bill_source' => 'string',
        'id' => 'string',
        'bill_no' => 'string',
        'operation_key' => 'string',
        'bill_date' => 'string',
        'emp_id' => 'string',
        'dept_id' => 'string',
        'acceptorid_id' => 'string[]',
        'mul_bill_label' => 'string',
        'bill_stock_id' => 'string',
        'bill_sp_id' => 'string',
        'remark' => 'string',
        'currency_id' => 'string',
        'material_entity' => '\com_kingdee_service\data\entity\InvProductSaveRequestMaterialEntity[]',
        'attachments_url' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'default_bill_source' => null,
        'id' => null,
        'bill_no' => null,
        'operation_key' => null,
        'bill_date' => null,
        'emp_id' => null,
        'dept_id' => null,
        'acceptorid_id' => null,
        'mul_bill_label' => null,
        'bill_stock_id' => null,
        'bill_sp_id' => null,
        'remark' => null,
        'currency_id' => null,
        'material_entity' => null,
        'attachments_url' => null
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
        'bill_no' => 'bill_no',
        'operation_key' => 'operation_key',
        'bill_date' => 'bill_date',
        'emp_id' => 'emp_id',
        'dept_id' => 'dept_id',
        'acceptorid_id' => 'acceptorid_id',
        'mul_bill_label' => 'mul_bill_label',
        'bill_stock_id' => 'bill_stock_id',
        'bill_sp_id' => 'bill_sp_id',
        'remark' => 'remark',
        'currency_id' => 'currency_id',
        'material_entity' => 'material_entity',
        'attachments_url' => 'attachments_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_bill_source' => 'setDefaultBillSource',
        'id' => 'setId',
        'bill_no' => 'setBillNo',
        'operation_key' => 'setOperationKey',
        'bill_date' => 'setBillDate',
        'emp_id' => 'setEmpId',
        'dept_id' => 'setDeptId',
        'acceptorid_id' => 'setAcceptoridId',
        'mul_bill_label' => 'setMulBillLabel',
        'bill_stock_id' => 'setBillStockId',
        'bill_sp_id' => 'setBillSpId',
        'remark' => 'setRemark',
        'currency_id' => 'setCurrencyId',
        'material_entity' => 'setMaterialEntity',
        'attachments_url' => 'setAttachmentsUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_bill_source' => 'getDefaultBillSource',
        'id' => 'getId',
        'bill_no' => 'getBillNo',
        'operation_key' => 'getOperationKey',
        'bill_date' => 'getBillDate',
        'emp_id' => 'getEmpId',
        'dept_id' => 'getDeptId',
        'acceptorid_id' => 'getAcceptoridId',
        'mul_bill_label' => 'getMulBillLabel',
        'bill_stock_id' => 'getBillStockId',
        'bill_sp_id' => 'getBillSpId',
        'remark' => 'getRemark',
        'currency_id' => 'getCurrencyId',
        'material_entity' => 'getMaterialEntity',
        'attachments_url' => 'getAttachmentsUrl'
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
        $this->container['bill_no'] = isset($data['bill_no']) ? $data['bill_no'] : null;
        $this->container['operation_key'] = isset($data['operation_key']) ? $data['operation_key'] : null;
        $this->container['bill_date'] = isset($data['bill_date']) ? $data['bill_date'] : null;
        $this->container['emp_id'] = isset($data['emp_id']) ? $data['emp_id'] : null;
        $this->container['dept_id'] = isset($data['dept_id']) ? $data['dept_id'] : null;
        $this->container['acceptorid_id'] = isset($data['acceptorid_id']) ? $data['acceptorid_id'] : null;
        $this->container['mul_bill_label'] = isset($data['mul_bill_label']) ? $data['mul_bill_label'] : null;
        $this->container['bill_stock_id'] = isset($data['bill_stock_id']) ? $data['bill_stock_id'] : null;
        $this->container['bill_sp_id'] = isset($data['bill_sp_id']) ? $data['bill_sp_id'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
        $this->container['material_entity'] = isset($data['material_entity']) ? $data['material_entity'] : null;
        $this->container['attachments_url'] = isset($data['attachments_url']) ? $data['attachments_url'] : null;
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
     * Gets acceptorid_id
     *
     * @return string[]
     */
    public function getAcceptoridId()
    {
        return $this->container['acceptorid_id'];
    }

    /**
     * Sets acceptorid_id
     *
     * @param string[] $acceptorid_id acceptorid_id
     *
     * @return $this
     */
    public function setAcceptoridId($acceptorid_id)
    {
        $this->container['acceptorid_id'] = $acceptorid_id;

        return $this;
    }

    /**
     * Gets mul_bill_label
     *
     * @return string
     */
    public function getMulBillLabel()
    {
        return $this->container['mul_bill_label'];
    }

    /**
     * Sets mul_bill_label
     *
     * @param string $mul_bill_label mul_bill_label
     *
     * @return $this
     */
    public function setMulBillLabel($mul_bill_label)
    {
        $this->container['mul_bill_label'] = $mul_bill_label;

        return $this;
    }

    /**
     * Gets bill_stock_id
     *
     * @return string
     */
    public function getBillStockId()
    {
        return $this->container['bill_stock_id'];
    }

    /**
     * Sets bill_stock_id
     *
     * @param string $bill_stock_id bill_stock_id
     *
     * @return $this
     */
    public function setBillStockId($bill_stock_id)
    {
        $this->container['bill_stock_id'] = $bill_stock_id;

        return $this;
    }

    /**
     * Gets bill_sp_id
     *
     * @return string
     */
    public function getBillSpId()
    {
        return $this->container['bill_sp_id'];
    }

    /**
     * Sets bill_sp_id
     *
     * @param string $bill_sp_id bill_sp_id
     *
     * @return $this
     */
    public function setBillSpId($bill_sp_id)
    {
        $this->container['bill_sp_id'] = $bill_sp_id;

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
     * Gets material_entity
     *
     * @return \com_kingdee_service\data\entity\InvProductSaveRequestMaterialEntity[]
     */
    public function getMaterialEntity()
    {
        return $this->container['material_entity'];
    }

    /**
     * Sets material_entity
     *
     * @param \com_kingdee_service\data\entity\InvProductSaveRequestMaterialEntity[] $material_entity material_entity
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


