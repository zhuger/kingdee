<?php
/**
 * SalQuotaDetailReplyCusBearFeeEntry
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
 * SalQuotaDetailReplyCusBearFeeEntry Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalQuotaDetailReplyCusBearFeeEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalQuotaDetailReply.CusBearFeeEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'income_name_id' => 'string',
        'income_name_name' => 'string',
        'income_name_number' => 'string',
        'income_amount' => 'string',
        'income_amount_for' => 'string',
        'income_comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'income_name_id' => null,
        'income_name_name' => null,
        'income_name_number' => null,
        'income_amount' => null,
        'income_amount_for' => null,
        'income_comment' => null
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
        'income_name_id' => 'income_name_id',
        'income_name_name' => 'income_name_name',
        'income_name_number' => 'income_name_number',
        'income_amount' => 'income_amount',
        'income_amount_for' => 'income_amount_for',
        'income_comment' => 'income_comment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'income_name_id' => 'setIncomeNameId',
        'income_name_name' => 'setIncomeNameName',
        'income_name_number' => 'setIncomeNameNumber',
        'income_amount' => 'setIncomeAmount',
        'income_amount_for' => 'setIncomeAmountFor',
        'income_comment' => 'setIncomeComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'income_name_id' => 'getIncomeNameId',
        'income_name_name' => 'getIncomeNameName',
        'income_name_number' => 'getIncomeNameNumber',
        'income_amount' => 'getIncomeAmount',
        'income_amount_for' => 'getIncomeAmountFor',
        'income_comment' => 'getIncomeComment'
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
        $this->container['income_name_id'] = isset($data['income_name_id']) ? $data['income_name_id'] : null;
        $this->container['income_name_name'] = isset($data['income_name_name']) ? $data['income_name_name'] : null;
        $this->container['income_name_number'] = isset($data['income_name_number']) ? $data['income_name_number'] : null;
        $this->container['income_amount'] = isset($data['income_amount']) ? $data['income_amount'] : null;
        $this->container['income_amount_for'] = isset($data['income_amount_for']) ? $data['income_amount_for'] : null;
        $this->container['income_comment'] = isset($data['income_comment']) ? $data['income_comment'] : null;
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
     * Gets income_name_id
     *
     * @return string
     */
    public function getIncomeNameId()
    {
        return $this->container['income_name_id'];
    }

    /**
     * Sets income_name_id
     *
     * @param string $income_name_id income_name_id
     *
     * @return $this
     */
    public function setIncomeNameId($income_name_id)
    {
        $this->container['income_name_id'] = $income_name_id;

        return $this;
    }

    /**
     * Gets income_name_name
     *
     * @return string
     */
    public function getIncomeNameName()
    {
        return $this->container['income_name_name'];
    }

    /**
     * Sets income_name_name
     *
     * @param string $income_name_name income_name_name
     *
     * @return $this
     */
    public function setIncomeNameName($income_name_name)
    {
        $this->container['income_name_name'] = $income_name_name;

        return $this;
    }

    /**
     * Gets income_name_number
     *
     * @return string
     */
    public function getIncomeNameNumber()
    {
        return $this->container['income_name_number'];
    }

    /**
     * Sets income_name_number
     *
     * @param string $income_name_number income_name_number
     *
     * @return $this
     */
    public function setIncomeNameNumber($income_name_number)
    {
        $this->container['income_name_number'] = $income_name_number;

        return $this;
    }

    /**
     * Gets income_amount
     *
     * @return string
     */
    public function getIncomeAmount()
    {
        return $this->container['income_amount'];
    }

    /**
     * Sets income_amount
     *
     * @param string $income_amount income_amount
     *
     * @return $this
     */
    public function setIncomeAmount($income_amount)
    {
        $this->container['income_amount'] = $income_amount;

        return $this;
    }

    /**
     * Gets income_amount_for
     *
     * @return string
     */
    public function getIncomeAmountFor()
    {
        return $this->container['income_amount_for'];
    }

    /**
     * Sets income_amount_for
     *
     * @param string $income_amount_for income_amount_for
     *
     * @return $this
     */
    public function setIncomeAmountFor($income_amount_for)
    {
        $this->container['income_amount_for'] = $income_amount_for;

        return $this;
    }

    /**
     * Gets income_comment
     *
     * @return string
     */
    public function getIncomeComment()
    {
        return $this->container['income_comment'];
    }

    /**
     * Sets income_comment
     *
     * @param string $income_comment income_comment
     *
     * @return $this
     */
    public function setIncomeComment($income_comment)
    {
        $this->container['income_comment'] = $income_comment;

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


