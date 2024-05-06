<?php
/**
 * Basedata
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
 * Basedata Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Basedata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Basedata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_enable_daux' => 'bool',
        'is_enable_daux_material_cust' => 'bool',
        'is_enable_dserial' => 'bool',
        'is_enabled_batch_manage' => 'bool',
        'is_enabled_quality_period' => 'bool',
        'is_enable_donecode' => 'bool',
        'is_enable_tax' => 'bool',
        'default_tax' => 'int',
        'is_enabled_price_tax' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_enable_daux' => null,
        'is_enable_daux_material_cust' => null,
        'is_enable_dserial' => null,
        'is_enabled_batch_manage' => null,
        'is_enabled_quality_period' => null,
        'is_enable_donecode' => null,
        'is_enable_tax' => null,
        'default_tax' => 'int32',
        'is_enabled_price_tax' => null
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
        'is_enable_daux' => 'is_enable_daux',
        'is_enable_daux_material_cust' => 'is_enable_daux_material_cust',
        'is_enable_dserial' => 'is_enable_dserial',
        'is_enabled_batch_manage' => 'is_enabled_batch_manage',
        'is_enabled_quality_period' => 'is_enabled_quality_period',
        'is_enable_donecode' => 'is_enable_donecode',
        'is_enable_tax' => 'is_enable_tax',
        'default_tax' => 'default_tax',
        'is_enabled_price_tax' => 'is_enabled_price_tax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_enable_daux' => 'setIsEnableDaux',
        'is_enable_daux_material_cust' => 'setIsEnableDauxMaterialCust',
        'is_enable_dserial' => 'setIsEnableDserial',
        'is_enabled_batch_manage' => 'setIsEnabledBatchManage',
        'is_enabled_quality_period' => 'setIsEnabledQualityPeriod',
        'is_enable_donecode' => 'setIsEnableDonecode',
        'is_enable_tax' => 'setIsEnableTax',
        'default_tax' => 'setDefaultTax',
        'is_enabled_price_tax' => 'setIsEnabledPriceTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_enable_daux' => 'getIsEnableDaux',
        'is_enable_daux_material_cust' => 'getIsEnableDauxMaterialCust',
        'is_enable_dserial' => 'getIsEnableDserial',
        'is_enabled_batch_manage' => 'getIsEnabledBatchManage',
        'is_enabled_quality_period' => 'getIsEnabledQualityPeriod',
        'is_enable_donecode' => 'getIsEnableDonecode',
        'is_enable_tax' => 'getIsEnableTax',
        'default_tax' => 'getDefaultTax',
        'is_enabled_price_tax' => 'getIsEnabledPriceTax'
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
        $this->container['is_enable_daux'] = isset($data['is_enable_daux']) ? $data['is_enable_daux'] : null;
        $this->container['is_enable_daux_material_cust'] = isset($data['is_enable_daux_material_cust']) ? $data['is_enable_daux_material_cust'] : null;
        $this->container['is_enable_dserial'] = isset($data['is_enable_dserial']) ? $data['is_enable_dserial'] : null;
        $this->container['is_enabled_batch_manage'] = isset($data['is_enabled_batch_manage']) ? $data['is_enabled_batch_manage'] : null;
        $this->container['is_enabled_quality_period'] = isset($data['is_enabled_quality_period']) ? $data['is_enabled_quality_period'] : null;
        $this->container['is_enable_donecode'] = isset($data['is_enable_donecode']) ? $data['is_enable_donecode'] : null;
        $this->container['is_enable_tax'] = isset($data['is_enable_tax']) ? $data['is_enable_tax'] : null;
        $this->container['default_tax'] = isset($data['default_tax']) ? $data['default_tax'] : null;
        $this->container['is_enabled_price_tax'] = isset($data['is_enabled_price_tax']) ? $data['is_enabled_price_tax'] : null;
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
     * Gets is_enable_daux
     *
     * @return bool
     */
    public function getIsEnableDaux()
    {
        return $this->container['is_enable_daux'];
    }

    /**
     * Sets is_enable_daux
     *
     * @param bool $is_enable_daux is_enable_daux
     *
     * @return $this
     */
    public function setIsEnableDaux($is_enable_daux)
    {
        $this->container['is_enable_daux'] = $is_enable_daux;

        return $this;
    }

    /**
     * Gets is_enable_daux_material_cust
     *
     * @return bool
     */
    public function getIsEnableDauxMaterialCust()
    {
        return $this->container['is_enable_daux_material_cust'];
    }

    /**
     * Sets is_enable_daux_material_cust
     *
     * @param bool $is_enable_daux_material_cust is_enable_daux_material_cust
     *
     * @return $this
     */
    public function setIsEnableDauxMaterialCust($is_enable_daux_material_cust)
    {
        $this->container['is_enable_daux_material_cust'] = $is_enable_daux_material_cust;

        return $this;
    }

    /**
     * Gets is_enable_dserial
     *
     * @return bool
     */
    public function getIsEnableDserial()
    {
        return $this->container['is_enable_dserial'];
    }

    /**
     * Sets is_enable_dserial
     *
     * @param bool $is_enable_dserial is_enable_dserial
     *
     * @return $this
     */
    public function setIsEnableDserial($is_enable_dserial)
    {
        $this->container['is_enable_dserial'] = $is_enable_dserial;

        return $this;
    }

    /**
     * Gets is_enabled_batch_manage
     *
     * @return bool
     */
    public function getIsEnabledBatchManage()
    {
        return $this->container['is_enabled_batch_manage'];
    }

    /**
     * Sets is_enabled_batch_manage
     *
     * @param bool $is_enabled_batch_manage is_enabled_batch_manage
     *
     * @return $this
     */
    public function setIsEnabledBatchManage($is_enabled_batch_manage)
    {
        $this->container['is_enabled_batch_manage'] = $is_enabled_batch_manage;

        return $this;
    }

    /**
     * Gets is_enabled_quality_period
     *
     * @return bool
     */
    public function getIsEnabledQualityPeriod()
    {
        return $this->container['is_enabled_quality_period'];
    }

    /**
     * Sets is_enabled_quality_period
     *
     * @param bool $is_enabled_quality_period is_enabled_quality_period
     *
     * @return $this
     */
    public function setIsEnabledQualityPeriod($is_enabled_quality_period)
    {
        $this->container['is_enabled_quality_period'] = $is_enabled_quality_period;

        return $this;
    }

    /**
     * Gets is_enable_donecode
     *
     * @return bool
     */
    public function getIsEnableDonecode()
    {
        return $this->container['is_enable_donecode'];
    }

    /**
     * Sets is_enable_donecode
     *
     * @param bool $is_enable_donecode is_enable_donecode
     *
     * @return $this
     */
    public function setIsEnableDonecode($is_enable_donecode)
    {
        $this->container['is_enable_donecode'] = $is_enable_donecode;

        return $this;
    }

    /**
     * Gets is_enable_tax
     *
     * @return bool
     */
    public function getIsEnableTax()
    {
        return $this->container['is_enable_tax'];
    }

    /**
     * Sets is_enable_tax
     *
     * @param bool $is_enable_tax is_enable_tax
     *
     * @return $this
     */
    public function setIsEnableTax($is_enable_tax)
    {
        $this->container['is_enable_tax'] = $is_enable_tax;

        return $this;
    }

    /**
     * Gets default_tax
     *
     * @return int
     */
    public function getDefaultTax()
    {
        return $this->container['default_tax'];
    }

    /**
     * Sets default_tax
     *
     * @param int $default_tax default_tax
     *
     * @return $this
     */
    public function setDefaultTax($default_tax)
    {
        $this->container['default_tax'] = $default_tax;

        return $this;
    }

    /**
     * Gets is_enabled_price_tax
     *
     * @return bool
     */
    public function getIsEnabledPriceTax()
    {
        return $this->container['is_enabled_price_tax'];
    }

    /**
     * Sets is_enabled_price_tax
     *
     * @param bool $is_enabled_price_tax is_enabled_price_tax
     *
     * @return $this
     */
    public function setIsEnabledPriceTax($is_enabled_price_tax)
    {
        $this->container['is_enabled_price_tax'] = $is_enabled_price_tax;

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


