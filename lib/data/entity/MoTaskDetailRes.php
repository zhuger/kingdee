<?php
/**
 * MoTaskDetailRes
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
 * MoTaskDetailRes Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MoTaskDetailRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MoTaskDetailRes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auditor_id' => 'string',
        'auditor_name' => 'string',
        'auditor_number' => 'string',
        'audit_time' => 'string',
        'bill_close_state' => 'string',
        'bill_date' => 'string',
        'bill_no' => 'string',
        'bill_status' => 'string',
        'close_id' => 'string',
        'close_name' => 'string',
        'close_number' => 'string',
        'close_time' => 'string',
        'create_time' => 'string',
        'creator_id' => 'string',
        'creator_name' => 'string',
        'creatorid_number' => 'string',
        'dept_id' => 'string',
        'dept_name' => 'string',
        'dept_number' => 'string',
        'emp_id' => 'string',
        'emp_name' => 'string',
        'empid_number' => 'string',
        'transtype' => 'string',
        'io_status' => 'string',
        'modifier_id' => 'string',
        'modifier_name' => 'string',
        'modifier_number' => 'string',
        'modify_time' => 'string',
        'pick_ex_status' => 'string',
        'pick_status' => 'string',
        'realiostatus' => 'string',
        'remark' => 'string',
        'material_entity' => '\com_kingdee_service\data\entity\MaterialEntity[]',
        'sub_material_entity' => '\com_kingdee_service\data\entity\SubMaterialEntity[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auditor_id' => null,
        'auditor_name' => null,
        'auditor_number' => null,
        'audit_time' => null,
        'bill_close_state' => null,
        'bill_date' => null,
        'bill_no' => null,
        'bill_status' => null,
        'close_id' => null,
        'close_name' => null,
        'close_number' => null,
        'close_time' => null,
        'create_time' => null,
        'creator_id' => null,
        'creator_name' => null,
        'creatorid_number' => null,
        'dept_id' => null,
        'dept_name' => null,
        'dept_number' => null,
        'emp_id' => null,
        'emp_name' => null,
        'empid_number' => null,
        'transtype' => null,
        'io_status' => null,
        'modifier_id' => null,
        'modifier_name' => null,
        'modifier_number' => null,
        'modify_time' => null,
        'pick_ex_status' => null,
        'pick_status' => null,
        'realiostatus' => null,
        'remark' => null,
        'material_entity' => null,
        'sub_material_entity' => null
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
        'auditor_id' => 'auditor_id',
        'auditor_name' => 'auditor_name',
        'auditor_number' => 'auditor_number',
        'audit_time' => 'audit_time',
        'bill_close_state' => 'bill_close_state',
        'bill_date' => 'bill_date',
        'bill_no' => 'bill_no',
        'bill_status' => 'bill_status',
        'close_id' => 'close_id',
        'close_name' => 'close_name',
        'close_number' => 'close_number',
        'close_time' => 'close_time',
        'create_time' => 'create_time',
        'creator_id' => 'creator_id',
        'creator_name' => 'creator_name',
        'creatorid_number' => 'creatorid_number',
        'dept_id' => 'dept_id',
        'dept_name' => 'dept_name',
        'dept_number' => 'dept_number',
        'emp_id' => 'emp_id',
        'emp_name' => 'emp_name',
        'empid_number' => 'empid_number',
        'transtype' => 'transtype',
        'io_status' => 'io_status',
        'modifier_id' => 'modifier_id',
        'modifier_name' => 'modifier_name',
        'modifier_number' => 'modifier_number',
        'modify_time' => 'modify_time',
        'pick_ex_status' => 'pick_ex_status',
        'pick_status' => 'pick_status',
        'realiostatus' => 'realiostatus',
        'remark' => 'remark',
        'material_entity' => 'material_entity',
        'sub_material_entity' => 'sub_material_entity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auditor_id' => 'setAuditorId',
        'auditor_name' => 'setAuditorName',
        'auditor_number' => 'setAuditorNumber',
        'audit_time' => 'setAuditTime',
        'bill_close_state' => 'setBillCloseState',
        'bill_date' => 'setBillDate',
        'bill_no' => 'setBillNo',
        'bill_status' => 'setBillStatus',
        'close_id' => 'setCloseId',
        'close_name' => 'setCloseName',
        'close_number' => 'setCloseNumber',
        'close_time' => 'setCloseTime',
        'create_time' => 'setCreateTime',
        'creator_id' => 'setCreatorId',
        'creator_name' => 'setCreatorName',
        'creatorid_number' => 'setCreatoridNumber',
        'dept_id' => 'setDeptId',
        'dept_name' => 'setDeptName',
        'dept_number' => 'setDeptNumber',
        'emp_id' => 'setEmpId',
        'emp_name' => 'setEmpName',
        'empid_number' => 'setEmpidNumber',
        'transtype' => 'setTranstype',
        'io_status' => 'setIoStatus',
        'modifier_id' => 'setModifierId',
        'modifier_name' => 'setModifierName',
        'modifier_number' => 'setModifierNumber',
        'modify_time' => 'setModifyTime',
        'pick_ex_status' => 'setPickExStatus',
        'pick_status' => 'setPickStatus',
        'realiostatus' => 'setRealiostatus',
        'remark' => 'setRemark',
        'material_entity' => 'setMaterialEntity',
        'sub_material_entity' => 'setSubMaterialEntity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auditor_id' => 'getAuditorId',
        'auditor_name' => 'getAuditorName',
        'auditor_number' => 'getAuditorNumber',
        'audit_time' => 'getAuditTime',
        'bill_close_state' => 'getBillCloseState',
        'bill_date' => 'getBillDate',
        'bill_no' => 'getBillNo',
        'bill_status' => 'getBillStatus',
        'close_id' => 'getCloseId',
        'close_name' => 'getCloseName',
        'close_number' => 'getCloseNumber',
        'close_time' => 'getCloseTime',
        'create_time' => 'getCreateTime',
        'creator_id' => 'getCreatorId',
        'creator_name' => 'getCreatorName',
        'creatorid_number' => 'getCreatoridNumber',
        'dept_id' => 'getDeptId',
        'dept_name' => 'getDeptName',
        'dept_number' => 'getDeptNumber',
        'emp_id' => 'getEmpId',
        'emp_name' => 'getEmpName',
        'empid_number' => 'getEmpidNumber',
        'transtype' => 'getTranstype',
        'io_status' => 'getIoStatus',
        'modifier_id' => 'getModifierId',
        'modifier_name' => 'getModifierName',
        'modifier_number' => 'getModifierNumber',
        'modify_time' => 'getModifyTime',
        'pick_ex_status' => 'getPickExStatus',
        'pick_status' => 'getPickStatus',
        'realiostatus' => 'getRealiostatus',
        'remark' => 'getRemark',
        'material_entity' => 'getMaterialEntity',
        'sub_material_entity' => 'getSubMaterialEntity'
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
        $this->container['auditor_id'] = isset($data['auditor_id']) ? $data['auditor_id'] : null;
        $this->container['auditor_name'] = isset($data['auditor_name']) ? $data['auditor_name'] : null;
        $this->container['auditor_number'] = isset($data['auditor_number']) ? $data['auditor_number'] : null;
        $this->container['audit_time'] = isset($data['audit_time']) ? $data['audit_time'] : null;
        $this->container['bill_close_state'] = isset($data['bill_close_state']) ? $data['bill_close_state'] : null;
        $this->container['bill_date'] = isset($data['bill_date']) ? $data['bill_date'] : null;
        $this->container['bill_no'] = isset($data['bill_no']) ? $data['bill_no'] : null;
        $this->container['bill_status'] = isset($data['bill_status']) ? $data['bill_status'] : null;
        $this->container['close_id'] = isset($data['close_id']) ? $data['close_id'] : null;
        $this->container['close_name'] = isset($data['close_name']) ? $data['close_name'] : null;
        $this->container['close_number'] = isset($data['close_number']) ? $data['close_number'] : null;
        $this->container['close_time'] = isset($data['close_time']) ? $data['close_time'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['creator_name'] = isset($data['creator_name']) ? $data['creator_name'] : null;
        $this->container['creatorid_number'] = isset($data['creatorid_number']) ? $data['creatorid_number'] : null;
        $this->container['dept_id'] = isset($data['dept_id']) ? $data['dept_id'] : null;
        $this->container['dept_name'] = isset($data['dept_name']) ? $data['dept_name'] : null;
        $this->container['dept_number'] = isset($data['dept_number']) ? $data['dept_number'] : null;
        $this->container['emp_id'] = isset($data['emp_id']) ? $data['emp_id'] : null;
        $this->container['emp_name'] = isset($data['emp_name']) ? $data['emp_name'] : null;
        $this->container['empid_number'] = isset($data['empid_number']) ? $data['empid_number'] : null;
        $this->container['transtype'] = isset($data['transtype']) ? $data['transtype'] : null;
        $this->container['io_status'] = isset($data['io_status']) ? $data['io_status'] : null;
        $this->container['modifier_id'] = isset($data['modifier_id']) ? $data['modifier_id'] : null;
        $this->container['modifier_name'] = isset($data['modifier_name']) ? $data['modifier_name'] : null;
        $this->container['modifier_number'] = isset($data['modifier_number']) ? $data['modifier_number'] : null;
        $this->container['modify_time'] = isset($data['modify_time']) ? $data['modify_time'] : null;
        $this->container['pick_ex_status'] = isset($data['pick_ex_status']) ? $data['pick_ex_status'] : null;
        $this->container['pick_status'] = isset($data['pick_status']) ? $data['pick_status'] : null;
        $this->container['realiostatus'] = isset($data['realiostatus']) ? $data['realiostatus'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['material_entity'] = isset($data['material_entity']) ? $data['material_entity'] : null;
        $this->container['sub_material_entity'] = isset($data['sub_material_entity']) ? $data['sub_material_entity'] : null;
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
     * Gets bill_close_state
     *
     * @return string
     */
    public function getBillCloseState()
    {
        return $this->container['bill_close_state'];
    }

    /**
     * Sets bill_close_state
     *
     * @param string $bill_close_state bill_close_state
     *
     * @return $this
     */
    public function setBillCloseState($bill_close_state)
    {
        $this->container['bill_close_state'] = $bill_close_state;

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
     * Gets close_id
     *
     * @return string
     */
    public function getCloseId()
    {
        return $this->container['close_id'];
    }

    /**
     * Sets close_id
     *
     * @param string $close_id close_id
     *
     * @return $this
     */
    public function setCloseId($close_id)
    {
        $this->container['close_id'] = $close_id;

        return $this;
    }

    /**
     * Gets close_name
     *
     * @return string
     */
    public function getCloseName()
    {
        return $this->container['close_name'];
    }

    /**
     * Sets close_name
     *
     * @param string $close_name close_name
     *
     * @return $this
     */
    public function setCloseName($close_name)
    {
        $this->container['close_name'] = $close_name;

        return $this;
    }

    /**
     * Gets close_number
     *
     * @return string
     */
    public function getCloseNumber()
    {
        return $this->container['close_number'];
    }

    /**
     * Sets close_number
     *
     * @param string $close_number close_number
     *
     * @return $this
     */
    public function setCloseNumber($close_number)
    {
        $this->container['close_number'] = $close_number;

        return $this;
    }

    /**
     * Gets close_time
     *
     * @return string
     */
    public function getCloseTime()
    {
        return $this->container['close_time'];
    }

    /**
     * Sets close_time
     *
     * @param string $close_time close_time
     *
     * @return $this
     */
    public function setCloseTime($close_time)
    {
        $this->container['close_time'] = $close_time;

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
     * Gets creatorid_number
     *
     * @return string
     */
    public function getCreatoridNumber()
    {
        return $this->container['creatorid_number'];
    }

    /**
     * Sets creatorid_number
     *
     * @param string $creatorid_number creatorid_number
     *
     * @return $this
     */
    public function setCreatoridNumber($creatorid_number)
    {
        $this->container['creatorid_number'] = $creatorid_number;

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
     * Gets empid_number
     *
     * @return string
     */
    public function getEmpidNumber()
    {
        return $this->container['empid_number'];
    }

    /**
     * Sets empid_number
     *
     * @param string $empid_number empid_number
     *
     * @return $this
     */
    public function setEmpidNumber($empid_number)
    {
        $this->container['empid_number'] = $empid_number;

        return $this;
    }

    /**
     * Gets transtype
     *
     * @return string
     */
    public function getTranstype()
    {
        return $this->container['transtype'];
    }

    /**
     * Sets transtype
     *
     * @param string $transtype transtype
     *
     * @return $this
     */
    public function setTranstype($transtype)
    {
        $this->container['transtype'] = $transtype;

        return $this;
    }

    /**
     * Gets io_status
     *
     * @return string
     */
    public function getIoStatus()
    {
        return $this->container['io_status'];
    }

    /**
     * Sets io_status
     *
     * @param string $io_status io_status
     *
     * @return $this
     */
    public function setIoStatus($io_status)
    {
        $this->container['io_status'] = $io_status;

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
     * Gets pick_ex_status
     *
     * @return string
     */
    public function getPickExStatus()
    {
        return $this->container['pick_ex_status'];
    }

    /**
     * Sets pick_ex_status
     *
     * @param string $pick_ex_status pick_ex_status
     *
     * @return $this
     */
    public function setPickExStatus($pick_ex_status)
    {
        $this->container['pick_ex_status'] = $pick_ex_status;

        return $this;
    }

    /**
     * Gets pick_status
     *
     * @return string
     */
    public function getPickStatus()
    {
        return $this->container['pick_status'];
    }

    /**
     * Sets pick_status
     *
     * @param string $pick_status pick_status
     *
     * @return $this
     */
    public function setPickStatus($pick_status)
    {
        $this->container['pick_status'] = $pick_status;

        return $this;
    }

    /**
     * Gets realiostatus
     *
     * @return string
     */
    public function getRealiostatus()
    {
        return $this->container['realiostatus'];
    }

    /**
     * Sets realiostatus
     *
     * @param string $realiostatus realiostatus
     *
     * @return $this
     */
    public function setRealiostatus($realiostatus)
    {
        $this->container['realiostatus'] = $realiostatus;

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
     * Gets material_entity
     *
     * @return \com_kingdee_service\data\entity\MaterialEntity[]
     */
    public function getMaterialEntity()
    {
        return $this->container['material_entity'];
    }

    /**
     * Sets material_entity
     *
     * @param \com_kingdee_service\data\entity\MaterialEntity[] $material_entity material_entity
     *
     * @return $this
     */
    public function setMaterialEntity($material_entity)
    {
        $this->container['material_entity'] = $material_entity;

        return $this;
    }

    /**
     * Gets sub_material_entity
     *
     * @return \com_kingdee_service\data\entity\SubMaterialEntity[]
     */
    public function getSubMaterialEntity()
    {
        return $this->container['sub_material_entity'];
    }

    /**
     * Sets sub_material_entity
     *
     * @param \com_kingdee_service\data\entity\SubMaterialEntity[] $sub_material_entity sub_material_entity
     *
     * @return $this
     */
    public function setSubMaterialEntity($sub_material_entity)
    {
        $this->container['sub_material_entity'] = $sub_material_entity;

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


