<?php
/**
 * AccountBalanceInfoListRes
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
 * AccountBalanceInfoListRes Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountBalanceInfoListRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountBalanceInfoListRes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'recharge' => '\com_kingdee_service\data\entity\Recharge',
        'integral' => '\com_kingdee_service\data\entity\Integral',
        'credit' => '\com_kingdee_service\data\entity\Credit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'recharge' => null,
        'integral' => null,
        'credit' => null
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
        'recharge' => 'recharge',
        'integral' => 'integral',
        'credit' => 'credit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recharge' => 'setRecharge',
        'integral' => 'setIntegral',
        'credit' => 'setCredit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recharge' => 'getRecharge',
        'integral' => 'getIntegral',
        'credit' => 'getCredit'
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
        $this->container['recharge'] = isset($data['recharge']) ? $data['recharge'] : null;
        $this->container['integral'] = isset($data['integral']) ? $data['integral'] : null;
        $this->container['credit'] = isset($data['credit']) ? $data['credit'] : null;
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
     * Gets recharge
     *
     * @return \com_kingdee_service\data\entity\Recharge
     */
    public function getRecharge()
    {
        return $this->container['recharge'];
    }

    /**
     * Sets recharge
     *
     * @param \com_kingdee_service\data\entity\Recharge $recharge recharge
     *
     * @return $this
     */
    public function setRecharge($recharge)
    {
        $this->container['recharge'] = $recharge;

        return $this;
    }

    /**
     * Gets integral
     *
     * @return \com_kingdee_service\data\entity\Integral
     */
    public function getIntegral()
    {
        return $this->container['integral'];
    }

    /**
     * Sets integral
     *
     * @param \com_kingdee_service\data\entity\Integral $integral integral
     *
     * @return $this
     */
    public function setIntegral($integral)
    {
        $this->container['integral'] = $integral;

        return $this;
    }

    /**
     * Gets credit
     *
     * @return \com_kingdee_service\data\entity\Credit
     */
    public function getCredit()
    {
        return $this->container['credit'];
    }

    /**
     * Sets credit
     *
     * @param \com_kingdee_service\data\entity\Credit $credit credit
     *
     * @return $this
     */
    public function setCredit($credit)
    {
        $this->container['credit'] = $credit;

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


