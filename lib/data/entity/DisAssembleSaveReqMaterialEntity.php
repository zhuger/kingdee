<?php
/**
 * DisAssembleSaveReqMaterialEntity
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
 * DisAssembleSaveReqMaterialEntity Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DisAssembleSaveReqMaterialEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DisAssembleSaveReq.MaterialEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'material_id' => 'string',
        'stock_id' => 'string',
        'sp_id' => 'string',
        'qty' => 'double',
        'unit_id' => 'string',
        'aux_qty' => 'double',
        'aux_unit_id' => 'string',
        'aux_prop_id' => 'string',
        'aux_id1' => 'string',
        'aux_id2' => 'string',
        'aux_id3' => 'string',
        'barcode' => 'string',
        'batch_no' => 'string',
        'pro_place' => 'string',
        'pro_reg_no' => 'string',
        'pro_license' => 'string',
        'kf_date' => 'string',
        'valid_date' => 'string',
        'kf_type' => 'string',
        'kf_period' => 'int',
        'sn' => 'string',
        'sn_list_id' => 'string',
        'cost' => 'double',
        'unit_cost' => 'double',
        'comment' => 'string',
        'material_type' => 'string',
        'base_qty' => 'double',
        'base_unit_id' => 'string',
        'aux_id4' => 'string',
        'aux_id5' => 'string',
        'sn_list' => 'string',
        'price' => 'string',
        'custom_entity_field' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'material_id' => null,
        'stock_id' => null,
        'sp_id' => null,
        'qty' => 'double',
        'unit_id' => null,
        'aux_qty' => 'double',
        'aux_unit_id' => null,
        'aux_prop_id' => null,
        'aux_id1' => null,
        'aux_id2' => null,
        'aux_id3' => null,
        'barcode' => null,
        'batch_no' => null,
        'pro_place' => null,
        'pro_reg_no' => null,
        'pro_license' => null,
        'kf_date' => null,
        'valid_date' => null,
        'kf_type' => null,
        'kf_period' => 'int32',
        'sn' => null,
        'sn_list_id' => null,
        'cost' => 'double',
        'unit_cost' => 'double',
        'comment' => null,
        'material_type' => null,
        'base_qty' => 'double',
        'base_unit_id' => null,
        'aux_id4' => null,
        'aux_id5' => null,
        'sn_list' => null,
        'price' => null,
        'custom_entity_field' => null
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
        'material_id' => 'material_id',
        'stock_id' => 'stock_id',
        'sp_id' => 'sp_id',
        'qty' => 'qty',
        'unit_id' => 'unit_id',
        'aux_qty' => 'aux_qty',
        'aux_unit_id' => 'aux_unit_id',
        'aux_prop_id' => 'aux_prop_id',
        'aux_id1' => 'aux_id1',
        'aux_id2' => 'aux_id2',
        'aux_id3' => 'aux_id3',
        'barcode' => 'barcode',
        'batch_no' => 'batch_no',
        'pro_place' => 'pro_place',
        'pro_reg_no' => 'pro_reg_no',
        'pro_license' => 'pro_license',
        'kf_date' => 'kf_date',
        'valid_date' => 'valid_date',
        'kf_type' => 'kf_type',
        'kf_period' => 'kf_period',
        'sn' => 'sn',
        'sn_list_id' => 'sn_list_id',
        'cost' => 'cost',
        'unit_cost' => 'unit_cost',
        'comment' => 'comment',
        'material_type' => 'material_type',
        'base_qty' => 'base_qty',
        'base_unit_id' => 'base_unit_id',
        'aux_id4' => 'aux_id4',
        'aux_id5' => 'aux_id5',
        'sn_list' => 'sn_list',
        'price' => 'price',
        'custom_entity_field' => 'custom_entity_field'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'material_id' => 'setMaterialId',
        'stock_id' => 'setStockId',
        'sp_id' => 'setSpId',
        'qty' => 'setQty',
        'unit_id' => 'setUnitId',
        'aux_qty' => 'setAuxQty',
        'aux_unit_id' => 'setAuxUnitId',
        'aux_prop_id' => 'setAuxPropId',
        'aux_id1' => 'setAuxId1',
        'aux_id2' => 'setAuxId2',
        'aux_id3' => 'setAuxId3',
        'barcode' => 'setBarcode',
        'batch_no' => 'setBatchNo',
        'pro_place' => 'setProPlace',
        'pro_reg_no' => 'setProRegNo',
        'pro_license' => 'setProLicense',
        'kf_date' => 'setKfDate',
        'valid_date' => 'setValidDate',
        'kf_type' => 'setKfType',
        'kf_period' => 'setKfPeriod',
        'sn' => 'setSn',
        'sn_list_id' => 'setSnListId',
        'cost' => 'setCost',
        'unit_cost' => 'setUnitCost',
        'comment' => 'setComment',
        'material_type' => 'setMaterialType',
        'base_qty' => 'setBaseQty',
        'base_unit_id' => 'setBaseUnitId',
        'aux_id4' => 'setAuxId4',
        'aux_id5' => 'setAuxId5',
        'sn_list' => 'setSnList',
        'price' => 'setPrice',
        'custom_entity_field' => 'setCustomEntityField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'material_id' => 'getMaterialId',
        'stock_id' => 'getStockId',
        'sp_id' => 'getSpId',
        'qty' => 'getQty',
        'unit_id' => 'getUnitId',
        'aux_qty' => 'getAuxQty',
        'aux_unit_id' => 'getAuxUnitId',
        'aux_prop_id' => 'getAuxPropId',
        'aux_id1' => 'getAuxId1',
        'aux_id2' => 'getAuxId2',
        'aux_id3' => 'getAuxId3',
        'barcode' => 'getBarcode',
        'batch_no' => 'getBatchNo',
        'pro_place' => 'getProPlace',
        'pro_reg_no' => 'getProRegNo',
        'pro_license' => 'getProLicense',
        'kf_date' => 'getKfDate',
        'valid_date' => 'getValidDate',
        'kf_type' => 'getKfType',
        'kf_period' => 'getKfPeriod',
        'sn' => 'getSn',
        'sn_list_id' => 'getSnListId',
        'cost' => 'getCost',
        'unit_cost' => 'getUnitCost',
        'comment' => 'getComment',
        'material_type' => 'getMaterialType',
        'base_qty' => 'getBaseQty',
        'base_unit_id' => 'getBaseUnitId',
        'aux_id4' => 'getAuxId4',
        'aux_id5' => 'getAuxId5',
        'sn_list' => 'getSnList',
        'price' => 'getPrice',
        'custom_entity_field' => 'getCustomEntityField'
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
        $this->container['material_id'] = isset($data['material_id']) ? $data['material_id'] : null;
        $this->container['stock_id'] = isset($data['stock_id']) ? $data['stock_id'] : null;
        $this->container['sp_id'] = isset($data['sp_id']) ? $data['sp_id'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['aux_qty'] = isset($data['aux_qty']) ? $data['aux_qty'] : null;
        $this->container['aux_unit_id'] = isset($data['aux_unit_id']) ? $data['aux_unit_id'] : null;
        $this->container['aux_prop_id'] = isset($data['aux_prop_id']) ? $data['aux_prop_id'] : null;
        $this->container['aux_id1'] = isset($data['aux_id1']) ? $data['aux_id1'] : null;
        $this->container['aux_id2'] = isset($data['aux_id2']) ? $data['aux_id2'] : null;
        $this->container['aux_id3'] = isset($data['aux_id3']) ? $data['aux_id3'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['batch_no'] = isset($data['batch_no']) ? $data['batch_no'] : null;
        $this->container['pro_place'] = isset($data['pro_place']) ? $data['pro_place'] : null;
        $this->container['pro_reg_no'] = isset($data['pro_reg_no']) ? $data['pro_reg_no'] : null;
        $this->container['pro_license'] = isset($data['pro_license']) ? $data['pro_license'] : null;
        $this->container['kf_date'] = isset($data['kf_date']) ? $data['kf_date'] : null;
        $this->container['valid_date'] = isset($data['valid_date']) ? $data['valid_date'] : null;
        $this->container['kf_type'] = isset($data['kf_type']) ? $data['kf_type'] : null;
        $this->container['kf_period'] = isset($data['kf_period']) ? $data['kf_period'] : null;
        $this->container['sn'] = isset($data['sn']) ? $data['sn'] : null;
        $this->container['sn_list_id'] = isset($data['sn_list_id']) ? $data['sn_list_id'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['unit_cost'] = isset($data['unit_cost']) ? $data['unit_cost'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['material_type'] = isset($data['material_type']) ? $data['material_type'] : null;
        $this->container['base_qty'] = isset($data['base_qty']) ? $data['base_qty'] : null;
        $this->container['base_unit_id'] = isset($data['base_unit_id']) ? $data['base_unit_id'] : null;
        $this->container['aux_id4'] = isset($data['aux_id4']) ? $data['aux_id4'] : null;
        $this->container['aux_id5'] = isset($data['aux_id5']) ? $data['aux_id5'] : null;
        $this->container['sn_list'] = isset($data['sn_list']) ? $data['sn_list'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['custom_entity_field'] = isset($data['custom_entity_field']) ? $data['custom_entity_field'] : null;
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
     * Gets material_id
     *
     * @return string
     */
    public function getMaterialId()
    {
        return $this->container['material_id'];
    }

    /**
     * Sets material_id
     *
     * @param string $material_id material_id
     *
     * @return $this
     */
    public function setMaterialId($material_id)
    {
        $this->container['material_id'] = $material_id;

        return $this;
    }

    /**
     * Gets stock_id
     *
     * @return string
     */
    public function getStockId()
    {
        return $this->container['stock_id'];
    }

    /**
     * Sets stock_id
     *
     * @param string $stock_id stock_id
     *
     * @return $this
     */
    public function setStockId($stock_id)
    {
        $this->container['stock_id'] = $stock_id;

        return $this;
    }

    /**
     * Gets sp_id
     *
     * @return string
     */
    public function getSpId()
    {
        return $this->container['sp_id'];
    }

    /**
     * Sets sp_id
     *
     * @param string $sp_id sp_id
     *
     * @return $this
     */
    public function setSpId($sp_id)
    {
        $this->container['sp_id'] = $sp_id;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return double
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param double $qty qty
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets unit_id
     *
     * @return string
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param string $unit_id unit_id
     *
     * @return $this
     */
    public function setUnitId($unit_id)
    {
        $this->container['unit_id'] = $unit_id;

        return $this;
    }

    /**
     * Gets aux_qty
     *
     * @return double
     */
    public function getAuxQty()
    {
        return $this->container['aux_qty'];
    }

    /**
     * Sets aux_qty
     *
     * @param double $aux_qty aux_qty
     *
     * @return $this
     */
    public function setAuxQty($aux_qty)
    {
        $this->container['aux_qty'] = $aux_qty;

        return $this;
    }

    /**
     * Gets aux_unit_id
     *
     * @return string
     */
    public function getAuxUnitId()
    {
        return $this->container['aux_unit_id'];
    }

    /**
     * Sets aux_unit_id
     *
     * @param string $aux_unit_id aux_unit_id
     *
     * @return $this
     */
    public function setAuxUnitId($aux_unit_id)
    {
        $this->container['aux_unit_id'] = $aux_unit_id;

        return $this;
    }

    /**
     * Gets aux_prop_id
     *
     * @return string
     */
    public function getAuxPropId()
    {
        return $this->container['aux_prop_id'];
    }

    /**
     * Sets aux_prop_id
     *
     * @param string $aux_prop_id aux_prop_id
     *
     * @return $this
     */
    public function setAuxPropId($aux_prop_id)
    {
        $this->container['aux_prop_id'] = $aux_prop_id;

        return $this;
    }

    /**
     * Gets aux_id1
     *
     * @return string
     */
    public function getAuxId1()
    {
        return $this->container['aux_id1'];
    }

    /**
     * Sets aux_id1
     *
     * @param string $aux_id1 aux_id1
     *
     * @return $this
     */
    public function setAuxId1($aux_id1)
    {
        $this->container['aux_id1'] = $aux_id1;

        return $this;
    }

    /**
     * Gets aux_id2
     *
     * @return string
     */
    public function getAuxId2()
    {
        return $this->container['aux_id2'];
    }

    /**
     * Sets aux_id2
     *
     * @param string $aux_id2 aux_id2
     *
     * @return $this
     */
    public function setAuxId2($aux_id2)
    {
        $this->container['aux_id2'] = $aux_id2;

        return $this;
    }

    /**
     * Gets aux_id3
     *
     * @return string
     */
    public function getAuxId3()
    {
        return $this->container['aux_id3'];
    }

    /**
     * Sets aux_id3
     *
     * @param string $aux_id3 aux_id3
     *
     * @return $this
     */
    public function setAuxId3($aux_id3)
    {
        $this->container['aux_id3'] = $aux_id3;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string $barcode barcode
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets batch_no
     *
     * @return string
     */
    public function getBatchNo()
    {
        return $this->container['batch_no'];
    }

    /**
     * Sets batch_no
     *
     * @param string $batch_no batch_no
     *
     * @return $this
     */
    public function setBatchNo($batch_no)
    {
        $this->container['batch_no'] = $batch_no;

        return $this;
    }

    /**
     * Gets pro_place
     *
     * @return string
     */
    public function getProPlace()
    {
        return $this->container['pro_place'];
    }

    /**
     * Sets pro_place
     *
     * @param string $pro_place pro_place
     *
     * @return $this
     */
    public function setProPlace($pro_place)
    {
        $this->container['pro_place'] = $pro_place;

        return $this;
    }

    /**
     * Gets pro_reg_no
     *
     * @return string
     */
    public function getProRegNo()
    {
        return $this->container['pro_reg_no'];
    }

    /**
     * Sets pro_reg_no
     *
     * @param string $pro_reg_no pro_reg_no
     *
     * @return $this
     */
    public function setProRegNo($pro_reg_no)
    {
        $this->container['pro_reg_no'] = $pro_reg_no;

        return $this;
    }

    /**
     * Gets pro_license
     *
     * @return string
     */
    public function getProLicense()
    {
        return $this->container['pro_license'];
    }

    /**
     * Sets pro_license
     *
     * @param string $pro_license pro_license
     *
     * @return $this
     */
    public function setProLicense($pro_license)
    {
        $this->container['pro_license'] = $pro_license;

        return $this;
    }

    /**
     * Gets kf_date
     *
     * @return string
     */
    public function getKfDate()
    {
        return $this->container['kf_date'];
    }

    /**
     * Sets kf_date
     *
     * @param string $kf_date kf_date
     *
     * @return $this
     */
    public function setKfDate($kf_date)
    {
        $this->container['kf_date'] = $kf_date;

        return $this;
    }

    /**
     * Gets valid_date
     *
     * @return string
     */
    public function getValidDate()
    {
        return $this->container['valid_date'];
    }

    /**
     * Sets valid_date
     *
     * @param string $valid_date valid_date
     *
     * @return $this
     */
    public function setValidDate($valid_date)
    {
        $this->container['valid_date'] = $valid_date;

        return $this;
    }

    /**
     * Gets kf_type
     *
     * @return string
     */
    public function getKfType()
    {
        return $this->container['kf_type'];
    }

    /**
     * Sets kf_type
     *
     * @param string $kf_type kf_type
     *
     * @return $this
     */
    public function setKfType($kf_type)
    {
        $this->container['kf_type'] = $kf_type;

        return $this;
    }

    /**
     * Gets kf_period
     *
     * @return int
     */
    public function getKfPeriod()
    {
        return $this->container['kf_period'];
    }

    /**
     * Sets kf_period
     *
     * @param int $kf_period kf_period
     *
     * @return $this
     */
    public function setKfPeriod($kf_period)
    {
        $this->container['kf_period'] = $kf_period;

        return $this;
    }

    /**
     * Gets sn
     *
     * @return string
     */
    public function getSn()
    {
        return $this->container['sn'];
    }

    /**
     * Sets sn
     *
     * @param string $sn sn
     *
     * @return $this
     */
    public function setSn($sn)
    {
        $this->container['sn'] = $sn;

        return $this;
    }

    /**
     * Gets sn_list_id
     *
     * @return string
     */
    public function getSnListId()
    {
        return $this->container['sn_list_id'];
    }

    /**
     * Sets sn_list_id
     *
     * @param string $sn_list_id sn_list_id
     *
     * @return $this
     */
    public function setSnListId($sn_list_id)
    {
        $this->container['sn_list_id'] = $sn_list_id;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return double
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param double $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets unit_cost
     *
     * @return double
     */
    public function getUnitCost()
    {
        return $this->container['unit_cost'];
    }

    /**
     * Sets unit_cost
     *
     * @param double $unit_cost unit_cost
     *
     * @return $this
     */
    public function setUnitCost($unit_cost)
    {
        $this->container['unit_cost'] = $unit_cost;

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
     * Gets material_type
     *
     * @return string
     */
    public function getMaterialType()
    {
        return $this->container['material_type'];
    }

    /**
     * Sets material_type
     *
     * @param string $material_type material_type
     *
     * @return $this
     */
    public function setMaterialType($material_type)
    {
        $this->container['material_type'] = $material_type;

        return $this;
    }

    /**
     * Gets base_qty
     *
     * @return double
     */
    public function getBaseQty()
    {
        return $this->container['base_qty'];
    }

    /**
     * Sets base_qty
     *
     * @param double $base_qty base_qty
     *
     * @return $this
     */
    public function setBaseQty($base_qty)
    {
        $this->container['base_qty'] = $base_qty;

        return $this;
    }

    /**
     * Gets base_unit_id
     *
     * @return string
     */
    public function getBaseUnitId()
    {
        return $this->container['base_unit_id'];
    }

    /**
     * Sets base_unit_id
     *
     * @param string $base_unit_id base_unit_id
     *
     * @return $this
     */
    public function setBaseUnitId($base_unit_id)
    {
        $this->container['base_unit_id'] = $base_unit_id;

        return $this;
    }

    /**
     * Gets aux_id4
     *
     * @return string
     */
    public function getAuxId4()
    {
        return $this->container['aux_id4'];
    }

    /**
     * Sets aux_id4
     *
     * @param string $aux_id4 aux_id4
     *
     * @return $this
     */
    public function setAuxId4($aux_id4)
    {
        $this->container['aux_id4'] = $aux_id4;

        return $this;
    }

    /**
     * Gets aux_id5
     *
     * @return string
     */
    public function getAuxId5()
    {
        return $this->container['aux_id5'];
    }

    /**
     * Sets aux_id5
     *
     * @param string $aux_id5 aux_id5
     *
     * @return $this
     */
    public function setAuxId5($aux_id5)
    {
        $this->container['aux_id5'] = $aux_id5;

        return $this;
    }

    /**
     * Gets sn_list
     *
     * @return string
     */
    public function getSnList()
    {
        return $this->container['sn_list'];
    }

    /**
     * Sets sn_list
     *
     * @param string $sn_list sn_list
     *
     * @return $this
     */
    public function setSnList($sn_list)
    {
        $this->container['sn_list'] = $sn_list;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets custom_entity_field
     *
     * @return map[string,string]
     */
    public function getCustomEntityField()
    {
        return $this->container['custom_entity_field'];
    }

    /**
     * Sets custom_entity_field
     *
     * @param map[string,string] $custom_entity_field custom_entity_field
     *
     * @return $this
     */
    public function setCustomEntityField($custom_entity_field)
    {
        $this->container['custom_entity_field'] = $custom_entity_field;

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


