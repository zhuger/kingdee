<?php
/**
 * Material
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
 * Material Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Material implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Material';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bd_id' => 'string',
        'material_id' => 'string',
        'bd_name' => 'string',
        'unit' => 'string',
        'aux_prop_id' => 'string',
        'num' => 'string',
        'price' => 'string',
        'material_name' => 'string',
        'img_url' => 'string',
        'small_img_url' => 'string',
        'is_batch' => 'string',
        'is_serial' => 'string',
        'is_aux' => 'string',
        'unit_name' => 'string',
        'aux_comb_name' => 'string',
        'aux_comb_id' => 'string',
        'sku_entry_id' => 'string',
        'is_selected' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bd_id' => null,
        'material_id' => null,
        'bd_name' => null,
        'unit' => null,
        'aux_prop_id' => null,
        'num' => null,
        'price' => null,
        'material_name' => null,
        'img_url' => null,
        'small_img_url' => null,
        'is_batch' => null,
        'is_serial' => null,
        'is_aux' => null,
        'unit_name' => null,
        'aux_comb_name' => null,
        'aux_comb_id' => null,
        'sku_entry_id' => null,
        'is_selected' => null
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
        'bd_id' => 'bd_id',
        'material_id' => 'material_id',
        'bd_name' => 'bd_name',
        'unit' => 'unit',
        'aux_prop_id' => 'aux_prop_id',
        'num' => 'num',
        'price' => 'price',
        'material_name' => 'material_name',
        'img_url' => 'img_url',
        'small_img_url' => 'small_img_url',
        'is_batch' => 'is_batch',
        'is_serial' => 'is_serial',
        'is_aux' => 'is_aux',
        'unit_name' => 'unit_name',
        'aux_comb_name' => 'aux_comb_name',
        'aux_comb_id' => 'aux_comb_id',
        'sku_entry_id' => 'sku_entry_id',
        'is_selected' => 'is_selected'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bd_id' => 'setBdId',
        'material_id' => 'setMaterialId',
        'bd_name' => 'setBdName',
        'unit' => 'setUnit',
        'aux_prop_id' => 'setAuxPropId',
        'num' => 'setNum',
        'price' => 'setPrice',
        'material_name' => 'setMaterialName',
        'img_url' => 'setImgUrl',
        'small_img_url' => 'setSmallImgUrl',
        'is_batch' => 'setIsBatch',
        'is_serial' => 'setIsSerial',
        'is_aux' => 'setIsAux',
        'unit_name' => 'setUnitName',
        'aux_comb_name' => 'setAuxCombName',
        'aux_comb_id' => 'setAuxCombId',
        'sku_entry_id' => 'setSkuEntryId',
        'is_selected' => 'setIsSelected'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bd_id' => 'getBdId',
        'material_id' => 'getMaterialId',
        'bd_name' => 'getBdName',
        'unit' => 'getUnit',
        'aux_prop_id' => 'getAuxPropId',
        'num' => 'getNum',
        'price' => 'getPrice',
        'material_name' => 'getMaterialName',
        'img_url' => 'getImgUrl',
        'small_img_url' => 'getSmallImgUrl',
        'is_batch' => 'getIsBatch',
        'is_serial' => 'getIsSerial',
        'is_aux' => 'getIsAux',
        'unit_name' => 'getUnitName',
        'aux_comb_name' => 'getAuxCombName',
        'aux_comb_id' => 'getAuxCombId',
        'sku_entry_id' => 'getSkuEntryId',
        'is_selected' => 'getIsSelected'
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
        $this->container['bd_id'] = isset($data['bd_id']) ? $data['bd_id'] : null;
        $this->container['material_id'] = isset($data['material_id']) ? $data['material_id'] : null;
        $this->container['bd_name'] = isset($data['bd_name']) ? $data['bd_name'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['aux_prop_id'] = isset($data['aux_prop_id']) ? $data['aux_prop_id'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['material_name'] = isset($data['material_name']) ? $data['material_name'] : null;
        $this->container['img_url'] = isset($data['img_url']) ? $data['img_url'] : null;
        $this->container['small_img_url'] = isset($data['small_img_url']) ? $data['small_img_url'] : null;
        $this->container['is_batch'] = isset($data['is_batch']) ? $data['is_batch'] : null;
        $this->container['is_serial'] = isset($data['is_serial']) ? $data['is_serial'] : null;
        $this->container['is_aux'] = isset($data['is_aux']) ? $data['is_aux'] : null;
        $this->container['unit_name'] = isset($data['unit_name']) ? $data['unit_name'] : null;
        $this->container['aux_comb_name'] = isset($data['aux_comb_name']) ? $data['aux_comb_name'] : null;
        $this->container['aux_comb_id'] = isset($data['aux_comb_id']) ? $data['aux_comb_id'] : null;
        $this->container['sku_entry_id'] = isset($data['sku_entry_id']) ? $data['sku_entry_id'] : null;
        $this->container['is_selected'] = isset($data['is_selected']) ? $data['is_selected'] : null;
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
     * Gets bd_id
     *
     * @return string
     */
    public function getBdId()
    {
        return $this->container['bd_id'];
    }

    /**
     * Sets bd_id
     *
     * @param string $bd_id bd_id
     *
     * @return $this
     */
    public function setBdId($bd_id)
    {
        $this->container['bd_id'] = $bd_id;

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
     * Gets bd_name
     *
     * @return string
     */
    public function getBdName()
    {
        return $this->container['bd_name'];
    }

    /**
     * Sets bd_name
     *
     * @param string $bd_name bd_name
     *
     * @return $this
     */
    public function setBdName($bd_name)
    {
        $this->container['bd_name'] = $bd_name;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

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
     * Gets num
     *
     * @return string
     */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
     * Sets num
     *
     * @param string $num num
     *
     * @return $this
     */
    public function setNum($num)
    {
        $this->container['num'] = $num;

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
     * Gets material_name
     *
     * @return string
     */
    public function getMaterialName()
    {
        return $this->container['material_name'];
    }

    /**
     * Sets material_name
     *
     * @param string $material_name material_name
     *
     * @return $this
     */
    public function setMaterialName($material_name)
    {
        $this->container['material_name'] = $material_name;

        return $this;
    }

    /**
     * Gets img_url
     *
     * @return string
     */
    public function getImgUrl()
    {
        return $this->container['img_url'];
    }

    /**
     * Sets img_url
     *
     * @param string $img_url img_url
     *
     * @return $this
     */
    public function setImgUrl($img_url)
    {
        $this->container['img_url'] = $img_url;

        return $this;
    }

    /**
     * Gets small_img_url
     *
     * @return string
     */
    public function getSmallImgUrl()
    {
        return $this->container['small_img_url'];
    }

    /**
     * Sets small_img_url
     *
     * @param string $small_img_url small_img_url
     *
     * @return $this
     */
    public function setSmallImgUrl($small_img_url)
    {
        $this->container['small_img_url'] = $small_img_url;

        return $this;
    }

    /**
     * Gets is_batch
     *
     * @return string
     */
    public function getIsBatch()
    {
        return $this->container['is_batch'];
    }

    /**
     * Sets is_batch
     *
     * @param string $is_batch is_batch
     *
     * @return $this
     */
    public function setIsBatch($is_batch)
    {
        $this->container['is_batch'] = $is_batch;

        return $this;
    }

    /**
     * Gets is_serial
     *
     * @return string
     */
    public function getIsSerial()
    {
        return $this->container['is_serial'];
    }

    /**
     * Sets is_serial
     *
     * @param string $is_serial is_serial
     *
     * @return $this
     */
    public function setIsSerial($is_serial)
    {
        $this->container['is_serial'] = $is_serial;

        return $this;
    }

    /**
     * Gets is_aux
     *
     * @return string
     */
    public function getIsAux()
    {
        return $this->container['is_aux'];
    }

    /**
     * Sets is_aux
     *
     * @param string $is_aux is_aux
     *
     * @return $this
     */
    public function setIsAux($is_aux)
    {
        $this->container['is_aux'] = $is_aux;

        return $this;
    }

    /**
     * Gets unit_name
     *
     * @return string
     */
    public function getUnitName()
    {
        return $this->container['unit_name'];
    }

    /**
     * Sets unit_name
     *
     * @param string $unit_name unit_name
     *
     * @return $this
     */
    public function setUnitName($unit_name)
    {
        $this->container['unit_name'] = $unit_name;

        return $this;
    }

    /**
     * Gets aux_comb_name
     *
     * @return string
     */
    public function getAuxCombName()
    {
        return $this->container['aux_comb_name'];
    }

    /**
     * Sets aux_comb_name
     *
     * @param string $aux_comb_name aux_comb_name
     *
     * @return $this
     */
    public function setAuxCombName($aux_comb_name)
    {
        $this->container['aux_comb_name'] = $aux_comb_name;

        return $this;
    }

    /**
     * Gets aux_comb_id
     *
     * @return string
     */
    public function getAuxCombId()
    {
        return $this->container['aux_comb_id'];
    }

    /**
     * Sets aux_comb_id
     *
     * @param string $aux_comb_id aux_comb_id
     *
     * @return $this
     */
    public function setAuxCombId($aux_comb_id)
    {
        $this->container['aux_comb_id'] = $aux_comb_id;

        return $this;
    }

    /**
     * Gets sku_entry_id
     *
     * @return string
     */
    public function getSkuEntryId()
    {
        return $this->container['sku_entry_id'];
    }

    /**
     * Sets sku_entry_id
     *
     * @param string $sku_entry_id sku_entry_id
     *
     * @return $this
     */
    public function setSkuEntryId($sku_entry_id)
    {
        $this->container['sku_entry_id'] = $sku_entry_id;

        return $this;
    }

    /**
     * Gets is_selected
     *
     * @return bool
     */
    public function getIsSelected()
    {
        return $this->container['is_selected'];
    }

    /**
     * Sets is_selected
     *
     * @param bool $is_selected is_selected
     *
     * @return $this
     */
    public function setIsSelected($is_selected)
    {
        $this->container['is_selected'] = $is_selected;

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

