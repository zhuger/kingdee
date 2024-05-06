<?php
/**
 * ApCreditSaveRequestSourceBillEntry
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
 * ApCreditSaveRequestSourceBillEntry Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApCreditSaveRequestSourceBillEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApCreditSaveRequest.SourceBillEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'src_bill_id' => 'string',
        'src_bill_type_id' => 'string',
        'cur_settle_amount' => 'string',
        'src_comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'src_bill_id' => null,
        'src_bill_type_id' => null,
        'cur_settle_amount' => null,
        'src_comment' => null
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
        'src_bill_id' => 'src_bill_id',
        'src_bill_type_id' => 'src_bill_type_id',
        'cur_settle_amount' => 'cur_settle_amount',
        'src_comment' => 'src_comment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'src_bill_id' => 'setSrcBillId',
        'src_bill_type_id' => 'setSrcBillTypeId',
        'cur_settle_amount' => 'setCurSettleAmount',
        'src_comment' => 'setSrcComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'src_bill_id' => 'getSrcBillId',
        'src_bill_type_id' => 'getSrcBillTypeId',
        'cur_settle_amount' => 'getCurSettleAmount',
        'src_comment' => 'getSrcComment'
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
        $this->container['src_bill_id'] = isset($data['src_bill_id']) ? $data['src_bill_id'] : null;
        $this->container['src_bill_type_id'] = isset($data['src_bill_type_id']) ? $data['src_bill_type_id'] : null;
        $this->container['cur_settle_amount'] = isset($data['cur_settle_amount']) ? $data['cur_settle_amount'] : null;
        $this->container['src_comment'] = isset($data['src_comment']) ? $data['src_comment'] : null;
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
     * Gets src_bill_id
     *
     * @return string
     */
    public function getSrcBillId()
    {
        return $this->container['src_bill_id'];
    }

    /**
     * Sets src_bill_id
     *
     * @param string $src_bill_id src_bill_id
     *
     * @return $this
     */
    public function setSrcBillId($src_bill_id)
    {
        $this->container['src_bill_id'] = $src_bill_id;

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
     * Gets cur_settle_amount
     *
     * @return string
     */
    public function getCurSettleAmount()
    {
        return $this->container['cur_settle_amount'];
    }

    /**
     * Sets cur_settle_amount
     *
     * @param string $cur_settle_amount cur_settle_amount
     *
     * @return $this
     */
    public function setCurSettleAmount($cur_settle_amount)
    {
        $this->container['cur_settle_amount'] = $cur_settle_amount;

        return $this;
    }

    /**
     * Gets src_comment
     *
     * @return string
     */
    public function getSrcComment()
    {
        return $this->container['src_comment'];
    }

    /**
     * Sets src_comment
     *
     * @param string $src_comment src_comment
     *
     * @return $this
     */
    public function setSrcComment($src_comment)
    {
        $this->container['src_comment'] = $src_comment;

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


