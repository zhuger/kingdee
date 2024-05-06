<?php
/**
 * RtnSaveReqMaterialEntity
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
 * RtnSaveReqMaterialEntity Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RtnSaveReqMaterialEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RtnSaveReq.MaterialEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'material_id' => 'string',
        'material_number' => 'string',
        'stock_id' => 'string',
        'stock_number' => 'string',
        'sp_id' => 'string',
        'qty' => 'double',
        'unit_id' => 'string',
        'aux_qty' => 'double',
        'aux_unit_id' => 'string',
        'aux_prop_id' => 'string',
        'barcode' => 'string',
        'batch_no' => 'string',
        'prop_lace' => 'string',
        'pro_reg_no' => 'string',
        'pro_license' => 'string',
        'kf_date' => 'string',
        'valid_date' => 'string',
        'kf_type' => 'string',
        'kf_period' => 'double',
        'sn_list_id' => 'string',
        'sn_list' => 'string',
        'price' => 'double',
        'tax_price' => 'double',
        'cess' => 'double',
        'tax_amount' => 'double',
        'all_amount' => 'double',
        'dis_rate' => 'double',
        'discount' => 'double',
        'dis_amount' => 'double',
        'dis_price' => 'double',
        'amount' => 'double',
        'bill_dis_before_amount' => 'double',
        'act_tax_price' => 'double',
        'bill_dis_distribution' => 'double',
        'act_non_tax_amount' => 'double',
        'fee' => 'double',
        'divide_diff_amount' => 'double',
        'is_free' => 'int',
        'cur_settle_amount' => 'double',
        'all_amount_for' => 'double',
        'cost' => 'double',
        'unit_cost' => 'double',
        'comment' => 'string',
        'src_bill_type_id' => 'string',
        'src_inter_id' => 'string',
        'src_entry_id' => 'string',
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
        'material_number' => null,
        'stock_id' => null,
        'stock_number' => null,
        'sp_id' => null,
        'qty' => 'double',
        'unit_id' => null,
        'aux_qty' => 'double',
        'aux_unit_id' => null,
        'aux_prop_id' => null,
        'barcode' => null,
        'batch_no' => null,
        'prop_lace' => null,
        'pro_reg_no' => null,
        'pro_license' => null,
        'kf_date' => null,
        'valid_date' => null,
        'kf_type' => null,
        'kf_period' => 'double',
        'sn_list_id' => null,
        'sn_list' => null,
        'price' => 'double',
        'tax_price' => 'double',
        'cess' => 'double',
        'tax_amount' => 'double',
        'all_amount' => 'double',
        'dis_rate' => 'double',
        'discount' => 'double',
        'dis_amount' => 'double',
        'dis_price' => 'double',
        'amount' => 'double',
        'bill_dis_before_amount' => 'double',
        'act_tax_price' => 'double',
        'bill_dis_distribution' => 'double',
        'act_non_tax_amount' => 'double',
        'fee' => 'double',
        'divide_diff_amount' => 'double',
        'is_free' => 'int32',
        'cur_settle_amount' => 'double',
        'all_amount_for' => 'double',
        'cost' => 'double',
        'unit_cost' => 'double',
        'comment' => null,
        'src_bill_type_id' => null,
        'src_inter_id' => null,
        'src_entry_id' => null,
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
        'material_number' => 'material_number',
        'stock_id' => 'stock_id',
        'stock_number' => 'stock_number',
        'sp_id' => 'sp_id',
        'qty' => 'qty',
        'unit_id' => 'unit_id',
        'aux_qty' => 'aux_qty',
        'aux_unit_id' => 'aux_unit_id',
        'aux_prop_id' => 'aux_prop_id',
        'barcode' => 'barcode',
        'batch_no' => 'batch_no',
        'prop_lace' => 'prop_lace',
        'pro_reg_no' => 'pro_reg_no',
        'pro_license' => 'pro_license',
        'kf_date' => 'kf_date',
        'valid_date' => 'valid_date',
        'kf_type' => 'kf_type',
        'kf_period' => 'kf_period',
        'sn_list_id' => 'sn_list_id',
        'sn_list' => 'sn_list',
        'price' => 'price',
        'tax_price' => 'tax_price',
        'cess' => 'cess',
        'tax_amount' => 'tax_amount',
        'all_amount' => 'all_amount',
        'dis_rate' => 'dis_rate',
        'discount' => 'discount',
        'dis_amount' => 'dis_amount',
        'dis_price' => 'dis_price',
        'amount' => 'amount',
        'bill_dis_before_amount' => 'bill_dis_before_amount',
        'act_tax_price' => 'act_tax_price',
        'bill_dis_distribution' => 'bill_dis_distribution',
        'act_non_tax_amount' => 'act_non_tax_amount',
        'fee' => 'fee',
        'divide_diff_amount' => 'divide_diff_amount',
        'is_free' => 'is_free',
        'cur_settle_amount' => 'cur_settle_amount',
        'all_amount_for' => 'all_amount_for',
        'cost' => 'cost',
        'unit_cost' => 'unit_cost',
        'comment' => 'comment',
        'src_bill_type_id' => 'src_bill_type_id',
        'src_inter_id' => 'src_inter_id',
        'src_entry_id' => 'src_entry_id',
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
        'material_number' => 'setMaterialNumber',
        'stock_id' => 'setStockId',
        'stock_number' => 'setStockNumber',
        'sp_id' => 'setSpId',
        'qty' => 'setQty',
        'unit_id' => 'setUnitId',
        'aux_qty' => 'setAuxQty',
        'aux_unit_id' => 'setAuxUnitId',
        'aux_prop_id' => 'setAuxPropId',
        'barcode' => 'setBarcode',
        'batch_no' => 'setBatchNo',
        'prop_lace' => 'setPropLace',
        'pro_reg_no' => 'setProRegNo',
        'pro_license' => 'setProLicense',
        'kf_date' => 'setKfDate',
        'valid_date' => 'setValidDate',
        'kf_type' => 'setKfType',
        'kf_period' => 'setKfPeriod',
        'sn_list_id' => 'setSnListId',
        'sn_list' => 'setSnList',
        'price' => 'setPrice',
        'tax_price' => 'setTaxPrice',
        'cess' => 'setCess',
        'tax_amount' => 'setTaxAmount',
        'all_amount' => 'setAllAmount',
        'dis_rate' => 'setDisRate',
        'discount' => 'setDiscount',
        'dis_amount' => 'setDisAmount',
        'dis_price' => 'setDisPrice',
        'amount' => 'setAmount',
        'bill_dis_before_amount' => 'setBillDisBeforeAmount',
        'act_tax_price' => 'setActTaxPrice',
        'bill_dis_distribution' => 'setBillDisDistribution',
        'act_non_tax_amount' => 'setActNonTaxAmount',
        'fee' => 'setFee',
        'divide_diff_amount' => 'setDivideDiffAmount',
        'is_free' => 'setIsFree',
        'cur_settle_amount' => 'setCurSettleAmount',
        'all_amount_for' => 'setAllAmountFor',
        'cost' => 'setCost',
        'unit_cost' => 'setUnitCost',
        'comment' => 'setComment',
        'src_bill_type_id' => 'setSrcBillTypeId',
        'src_inter_id' => 'setSrcInterId',
        'src_entry_id' => 'setSrcEntryId',
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
        'material_number' => 'getMaterialNumber',
        'stock_id' => 'getStockId',
        'stock_number' => 'getStockNumber',
        'sp_id' => 'getSpId',
        'qty' => 'getQty',
        'unit_id' => 'getUnitId',
        'aux_qty' => 'getAuxQty',
        'aux_unit_id' => 'getAuxUnitId',
        'aux_prop_id' => 'getAuxPropId',
        'barcode' => 'getBarcode',
        'batch_no' => 'getBatchNo',
        'prop_lace' => 'getPropLace',
        'pro_reg_no' => 'getProRegNo',
        'pro_license' => 'getProLicense',
        'kf_date' => 'getKfDate',
        'valid_date' => 'getValidDate',
        'kf_type' => 'getKfType',
        'kf_period' => 'getKfPeriod',
        'sn_list_id' => 'getSnListId',
        'sn_list' => 'getSnList',
        'price' => 'getPrice',
        'tax_price' => 'getTaxPrice',
        'cess' => 'getCess',
        'tax_amount' => 'getTaxAmount',
        'all_amount' => 'getAllAmount',
        'dis_rate' => 'getDisRate',
        'discount' => 'getDiscount',
        'dis_amount' => 'getDisAmount',
        'dis_price' => 'getDisPrice',
        'amount' => 'getAmount',
        'bill_dis_before_amount' => 'getBillDisBeforeAmount',
        'act_tax_price' => 'getActTaxPrice',
        'bill_dis_distribution' => 'getBillDisDistribution',
        'act_non_tax_amount' => 'getActNonTaxAmount',
        'fee' => 'getFee',
        'divide_diff_amount' => 'getDivideDiffAmount',
        'is_free' => 'getIsFree',
        'cur_settle_amount' => 'getCurSettleAmount',
        'all_amount_for' => 'getAllAmountFor',
        'cost' => 'getCost',
        'unit_cost' => 'getUnitCost',
        'comment' => 'getComment',
        'src_bill_type_id' => 'getSrcBillTypeId',
        'src_inter_id' => 'getSrcInterId',
        'src_entry_id' => 'getSrcEntryId',
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
        $this->container['material_number'] = isset($data['material_number']) ? $data['material_number'] : null;
        $this->container['stock_id'] = isset($data['stock_id']) ? $data['stock_id'] : null;
        $this->container['stock_number'] = isset($data['stock_number']) ? $data['stock_number'] : null;
        $this->container['sp_id'] = isset($data['sp_id']) ? $data['sp_id'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['unit_id'] = isset($data['unit_id']) ? $data['unit_id'] : null;
        $this->container['aux_qty'] = isset($data['aux_qty']) ? $data['aux_qty'] : null;
        $this->container['aux_unit_id'] = isset($data['aux_unit_id']) ? $data['aux_unit_id'] : null;
        $this->container['aux_prop_id'] = isset($data['aux_prop_id']) ? $data['aux_prop_id'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['batch_no'] = isset($data['batch_no']) ? $data['batch_no'] : null;
        $this->container['prop_lace'] = isset($data['prop_lace']) ? $data['prop_lace'] : null;
        $this->container['pro_reg_no'] = isset($data['pro_reg_no']) ? $data['pro_reg_no'] : null;
        $this->container['pro_license'] = isset($data['pro_license']) ? $data['pro_license'] : null;
        $this->container['kf_date'] = isset($data['kf_date']) ? $data['kf_date'] : null;
        $this->container['valid_date'] = isset($data['valid_date']) ? $data['valid_date'] : null;
        $this->container['kf_type'] = isset($data['kf_type']) ? $data['kf_type'] : null;
        $this->container['kf_period'] = isset($data['kf_period']) ? $data['kf_period'] : null;
        $this->container['sn_list_id'] = isset($data['sn_list_id']) ? $data['sn_list_id'] : null;
        $this->container['sn_list'] = isset($data['sn_list']) ? $data['sn_list'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['tax_price'] = isset($data['tax_price']) ? $data['tax_price'] : null;
        $this->container['cess'] = isset($data['cess']) ? $data['cess'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['all_amount'] = isset($data['all_amount']) ? $data['all_amount'] : null;
        $this->container['dis_rate'] = isset($data['dis_rate']) ? $data['dis_rate'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['dis_amount'] = isset($data['dis_amount']) ? $data['dis_amount'] : null;
        $this->container['dis_price'] = isset($data['dis_price']) ? $data['dis_price'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['bill_dis_before_amount'] = isset($data['bill_dis_before_amount']) ? $data['bill_dis_before_amount'] : null;
        $this->container['act_tax_price'] = isset($data['act_tax_price']) ? $data['act_tax_price'] : null;
        $this->container['bill_dis_distribution'] = isset($data['bill_dis_distribution']) ? $data['bill_dis_distribution'] : null;
        $this->container['act_non_tax_amount'] = isset($data['act_non_tax_amount']) ? $data['act_non_tax_amount'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['divide_diff_amount'] = isset($data['divide_diff_amount']) ? $data['divide_diff_amount'] : null;
        $this->container['is_free'] = isset($data['is_free']) ? $data['is_free'] : null;
        $this->container['cur_settle_amount'] = isset($data['cur_settle_amount']) ? $data['cur_settle_amount'] : null;
        $this->container['all_amount_for'] = isset($data['all_amount_for']) ? $data['all_amount_for'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['unit_cost'] = isset($data['unit_cost']) ? $data['unit_cost'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['src_bill_type_id'] = isset($data['src_bill_type_id']) ? $data['src_bill_type_id'] : null;
        $this->container['src_inter_id'] = isset($data['src_inter_id']) ? $data['src_inter_id'] : null;
        $this->container['src_entry_id'] = isset($data['src_entry_id']) ? $data['src_entry_id'] : null;
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
     * Gets material_number
     *
     * @return string
     */
    public function getMaterialNumber()
    {
        return $this->container['material_number'];
    }

    /**
     * Sets material_number
     *
     * @param string $material_number material_number
     *
     * @return $this
     */
    public function setMaterialNumber($material_number)
    {
        $this->container['material_number'] = $material_number;

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
     * Gets stock_number
     *
     * @return string
     */
    public function getStockNumber()
    {
        return $this->container['stock_number'];
    }

    /**
     * Sets stock_number
     *
     * @param string $stock_number stock_number
     *
     * @return $this
     */
    public function setStockNumber($stock_number)
    {
        $this->container['stock_number'] = $stock_number;

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
     * Gets prop_lace
     *
     * @return string
     */
    public function getPropLace()
    {
        return $this->container['prop_lace'];
    }

    /**
     * Sets prop_lace
     *
     * @param string $prop_lace prop_lace
     *
     * @return $this
     */
    public function setPropLace($prop_lace)
    {
        $this->container['prop_lace'] = $prop_lace;

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
     * @return double
     */
    public function getKfPeriod()
    {
        return $this->container['kf_period'];
    }

    /**
     * Sets kf_period
     *
     * @param double $kf_period kf_period
     *
     * @return $this
     */
    public function setKfPeriod($kf_period)
    {
        $this->container['kf_period'] = $kf_period;

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
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets tax_price
     *
     * @return double
     */
    public function getTaxPrice()
    {
        return $this->container['tax_price'];
    }

    /**
     * Sets tax_price
     *
     * @param double $tax_price tax_price
     *
     * @return $this
     */
    public function setTaxPrice($tax_price)
    {
        $this->container['tax_price'] = $tax_price;

        return $this;
    }

    /**
     * Gets cess
     *
     * @return double
     */
    public function getCess()
    {
        return $this->container['cess'];
    }

    /**
     * Sets cess
     *
     * @param double $cess cess
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
     * @return double
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param double $tax_amount tax_amount
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
     * @return double
     */
    public function getAllAmount()
    {
        return $this->container['all_amount'];
    }

    /**
     * Sets all_amount
     *
     * @param double $all_amount all_amount
     *
     * @return $this
     */
    public function setAllAmount($all_amount)
    {
        $this->container['all_amount'] = $all_amount;

        return $this;
    }

    /**
     * Gets dis_rate
     *
     * @return double
     */
    public function getDisRate()
    {
        return $this->container['dis_rate'];
    }

    /**
     * Sets dis_rate
     *
     * @param double $dis_rate dis_rate
     *
     * @return $this
     */
    public function setDisRate($dis_rate)
    {
        $this->container['dis_rate'] = $dis_rate;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return double
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param double $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets dis_amount
     *
     * @return double
     */
    public function getDisAmount()
    {
        return $this->container['dis_amount'];
    }

    /**
     * Sets dis_amount
     *
     * @param double $dis_amount dis_amount
     *
     * @return $this
     */
    public function setDisAmount($dis_amount)
    {
        $this->container['dis_amount'] = $dis_amount;

        return $this;
    }

    /**
     * Gets dis_price
     *
     * @return double
     */
    public function getDisPrice()
    {
        return $this->container['dis_price'];
    }

    /**
     * Sets dis_price
     *
     * @param double $dis_price dis_price
     *
     * @return $this
     */
    public function setDisPrice($dis_price)
    {
        $this->container['dis_price'] = $dis_price;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets bill_dis_before_amount
     *
     * @return double
     */
    public function getBillDisBeforeAmount()
    {
        return $this->container['bill_dis_before_amount'];
    }

    /**
     * Sets bill_dis_before_amount
     *
     * @param double $bill_dis_before_amount bill_dis_before_amount
     *
     * @return $this
     */
    public function setBillDisBeforeAmount($bill_dis_before_amount)
    {
        $this->container['bill_dis_before_amount'] = $bill_dis_before_amount;

        return $this;
    }

    /**
     * Gets act_tax_price
     *
     * @return double
     */
    public function getActTaxPrice()
    {
        return $this->container['act_tax_price'];
    }

    /**
     * Sets act_tax_price
     *
     * @param double $act_tax_price act_tax_price
     *
     * @return $this
     */
    public function setActTaxPrice($act_tax_price)
    {
        $this->container['act_tax_price'] = $act_tax_price;

        return $this;
    }

    /**
     * Gets bill_dis_distribution
     *
     * @return double
     */
    public function getBillDisDistribution()
    {
        return $this->container['bill_dis_distribution'];
    }

    /**
     * Sets bill_dis_distribution
     *
     * @param double $bill_dis_distribution bill_dis_distribution
     *
     * @return $this
     */
    public function setBillDisDistribution($bill_dis_distribution)
    {
        $this->container['bill_dis_distribution'] = $bill_dis_distribution;

        return $this;
    }

    /**
     * Gets act_non_tax_amount
     *
     * @return double
     */
    public function getActNonTaxAmount()
    {
        return $this->container['act_non_tax_amount'];
    }

    /**
     * Sets act_non_tax_amount
     *
     * @param double $act_non_tax_amount act_non_tax_amount
     *
     * @return $this
     */
    public function setActNonTaxAmount($act_non_tax_amount)
    {
        $this->container['act_non_tax_amount'] = $act_non_tax_amount;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return double
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param double $fee fee
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets divide_diff_amount
     *
     * @return double
     */
    public function getDivideDiffAmount()
    {
        return $this->container['divide_diff_amount'];
    }

    /**
     * Sets divide_diff_amount
     *
     * @param double $divide_diff_amount divide_diff_amount
     *
     * @return $this
     */
    public function setDivideDiffAmount($divide_diff_amount)
    {
        $this->container['divide_diff_amount'] = $divide_diff_amount;

        return $this;
    }

    /**
     * Gets is_free
     *
     * @return int
     */
    public function getIsFree()
    {
        return $this->container['is_free'];
    }

    /**
     * Sets is_free
     *
     * @param int $is_free is_free
     *
     * @return $this
     */
    public function setIsFree($is_free)
    {
        $this->container['is_free'] = $is_free;

        return $this;
    }

    /**
     * Gets cur_settle_amount
     *
     * @return double
     */
    public function getCurSettleAmount()
    {
        return $this->container['cur_settle_amount'];
    }

    /**
     * Sets cur_settle_amount
     *
     * @param double $cur_settle_amount cur_settle_amount
     *
     * @return $this
     */
    public function setCurSettleAmount($cur_settle_amount)
    {
        $this->container['cur_settle_amount'] = $cur_settle_amount;

        return $this;
    }

    /**
     * Gets all_amount_for
     *
     * @return double
     */
    public function getAllAmountFor()
    {
        return $this->container['all_amount_for'];
    }

    /**
     * Sets all_amount_for
     *
     * @param double $all_amount_for all_amount_for
     *
     * @return $this
     */
    public function setAllAmountFor($all_amount_for)
    {
        $this->container['all_amount_for'] = $all_amount_for;

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
     * Gets src_bill_type_id
     *
     * @return string
     */
    public function getSrcBillTypeId()
    {
        return $this->container['src_bill_type_id'];
    }

    /**
     * Sets src_bill_type_id
     *
     * @param string $src_bill_type_id src_bill_type_id
     *
     * @return $this
     */
    public function setSrcBillTypeId($src_bill_type_id)
    {
        $this->container['src_bill_type_id'] = $src_bill_type_id;

        return $this;
    }

    /**
     * Gets src_inter_id
     *
     * @return string
     */
    public function getSrcInterId()
    {
        return $this->container['src_inter_id'];
    }

    /**
     * Sets src_inter_id
     *
     * @param string $src_inter_id src_inter_id
     *
     * @return $this
     */
    public function setSrcInterId($src_inter_id)
    {
        $this->container['src_inter_id'] = $src_inter_id;

        return $this;
    }

    /**
     * Gets src_entry_id
     *
     * @return string
     */
    public function getSrcEntryId()
    {
        return $this->container['src_entry_id'];
    }

    /**
     * Sets src_entry_id
     *
     * @param string $src_entry_id src_entry_id
     *
     * @return $this
     */
    public function setSrcEntryId($src_entry_id)
    {
        $this->container['src_entry_id'] = $src_entry_id;

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


