<?php
/**
 * CardSaveRequestOppositelist
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
 * CardSaveRequestOppositelist Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CardSaveRequestOppositelist implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CardSaveRequest.Oppositelist';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'opposite_dept_id' => 'string',
        'opposite_acct_id' => 'string',
        'opposite_acct_assist' => '\com_kingdee_service\data\entity\CommonAssist[]',
        'opposite_detail_id' => 'string',
        'opposite_percent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'opposite_dept_id' => null,
        'opposite_acct_id' => null,
        'opposite_acct_assist' => null,
        'opposite_detail_id' => null,
        'opposite_percent' => null
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
        'opposite_dept_id' => 'opposite_dept_id',
        'opposite_acct_id' => 'opposite_acct_id',
        'opposite_acct_assist' => 'opposite_acct_assist',
        'opposite_detail_id' => 'opposite_detail_id',
        'opposite_percent' => 'opposite_percent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opposite_dept_id' => 'setOppositeDeptId',
        'opposite_acct_id' => 'setOppositeAcctId',
        'opposite_acct_assist' => 'setOppositeAcctAssist',
        'opposite_detail_id' => 'setOppositeDetailId',
        'opposite_percent' => 'setOppositePercent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opposite_dept_id' => 'getOppositeDeptId',
        'opposite_acct_id' => 'getOppositeAcctId',
        'opposite_acct_assist' => 'getOppositeAcctAssist',
        'opposite_detail_id' => 'getOppositeDetailId',
        'opposite_percent' => 'getOppositePercent'
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
        $this->container['opposite_dept_id'] = isset($data['opposite_dept_id']) ? $data['opposite_dept_id'] : null;
        $this->container['opposite_acct_id'] = isset($data['opposite_acct_id']) ? $data['opposite_acct_id'] : null;
        $this->container['opposite_acct_assist'] = isset($data['opposite_acct_assist']) ? $data['opposite_acct_assist'] : null;
        $this->container['opposite_detail_id'] = isset($data['opposite_detail_id']) ? $data['opposite_detail_id'] : null;
        $this->container['opposite_percent'] = isset($data['opposite_percent']) ? $data['opposite_percent'] : null;
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
     * Gets opposite_dept_id
     *
     * @return string
     */
    public function getOppositeDeptId()
    {
        return $this->container['opposite_dept_id'];
    }

    /**
     * Sets opposite_dept_id
     *
     * @param string $opposite_dept_id opposite_dept_id
     *
     * @return $this
     */
    public function setOppositeDeptId($opposite_dept_id)
    {
        $this->container['opposite_dept_id'] = $opposite_dept_id;

        return $this;
    }

    /**
     * Gets opposite_acct_id
     *
     * @return string
     */
    public function getOppositeAcctId()
    {
        return $this->container['opposite_acct_id'];
    }

    /**
     * Sets opposite_acct_id
     *
     * @param string $opposite_acct_id opposite_acct_id
     *
     * @return $this
     */
    public function setOppositeAcctId($opposite_acct_id)
    {
        $this->container['opposite_acct_id'] = $opposite_acct_id;

        return $this;
    }

    /**
     * Gets opposite_acct_assist
     *
     * @return \com_kingdee_service\data\entity\CommonAssist[]
     */
    public function getOppositeAcctAssist()
    {
        return $this->container['opposite_acct_assist'];
    }

    /**
     * Sets opposite_acct_assist
     *
     * @param \com_kingdee_service\data\entity\CommonAssist[] $opposite_acct_assist opposite_acct_assist
     *
     * @return $this
     */
    public function setOppositeAcctAssist($opposite_acct_assist)
    {
        $this->container['opposite_acct_assist'] = $opposite_acct_assist;

        return $this;
    }

    /**
     * Gets opposite_detail_id
     *
     * @return string
     */
    public function getOppositeDetailId()
    {
        return $this->container['opposite_detail_id'];
    }

    /**
     * Sets opposite_detail_id
     *
     * @param string $opposite_detail_id opposite_detail_id
     *
     * @return $this
     */
    public function setOppositeDetailId($opposite_detail_id)
    {
        $this->container['opposite_detail_id'] = $opposite_detail_id;

        return $this;
    }

    /**
     * Gets opposite_percent
     *
     * @return string
     */
    public function getOppositePercent()
    {
        return $this->container['opposite_percent'];
    }

    /**
     * Sets opposite_percent
     *
     * @param string $opposite_percent opposite_percent
     *
     * @return $this
     */
    public function setOppositePercent($opposite_percent)
    {
        $this->container['opposite_percent'] = $opposite_percent;

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

