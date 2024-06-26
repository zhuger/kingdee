<?php
/**
 * MallPreWriteOffReq
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
 * MallPreWriteOffReq Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MallPreWriteOffReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MallPreWriteOffReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'src_bill_id' => 'string',
        'member_id' => 'string',
        'member_deals' => '\com_kingdee_service\data\entity\MallPreWriteOffReqMemberDeals'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'src_bill_id' => null,
        'member_id' => null,
        'member_deals' => null
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
        'src_bill_id' => 'src_bill_id',
        'member_id' => 'member_id',
        'member_deals' => 'member_deals'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'src_bill_id' => 'setSrcBillId',
        'member_id' => 'setMemberId',
        'member_deals' => 'setMemberDeals'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'src_bill_id' => 'getSrcBillId',
        'member_id' => 'getMemberId',
        'member_deals' => 'getMemberDeals'
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
        $this->container['src_bill_id'] = isset($data['src_bill_id']) ? $data['src_bill_id'] : null;
        $this->container['member_id'] = isset($data['member_id']) ? $data['member_id'] : null;
        $this->container['member_deals'] = isset($data['member_deals']) ? $data['member_deals'] : null;
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
     * Gets member_id
     *
     * @return string
     */
    public function getMemberId()
    {
        return $this->container['member_id'];
    }

    /**
     * Sets member_id
     *
     * @param string $member_id member_id
     *
     * @return $this
     */
    public function setMemberId($member_id)
    {
        $this->container['member_id'] = $member_id;

        return $this;
    }

    /**
     * Gets member_deals
     *
     * @return \com_kingdee_service\data\entity\MallPreWriteOffReqMemberDeals
     */
    public function getMemberDeals()
    {
        return $this->container['member_deals'];
    }

    /**
     * Sets member_deals
     *
     * @param \com_kingdee_service\data\entity\MallPreWriteOffReqMemberDeals $member_deals member_deals
     *
     * @return $this
     */
    public function setMemberDeals($member_deals)
    {
        $this->container['member_deals'] = $member_deals;

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


