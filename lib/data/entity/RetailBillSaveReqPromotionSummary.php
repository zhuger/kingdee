<?php
/**
 * RetailBillSaveReqPromotionSummary
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
 * RetailBillSaveReqPromotionSummary Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RetailBillSaveReqPromotionSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RetailBillSaveReq.PromotionSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'promotion_type' => 'string',
        'promotion_amt' => 'string',
        'schema_id' => 'string',
        'schema_type' => 'string',
        'activity_id' => 'string',
        'activity_name' => 'string',
        'coupon_no' => 'string',
        'point_rule_id' => 'string',
        'consume_points' => 'string',
        'gift_points' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'promotion_type' => null,
        'promotion_amt' => null,
        'schema_id' => null,
        'schema_type' => null,
        'activity_id' => null,
        'activity_name' => null,
        'coupon_no' => null,
        'point_rule_id' => null,
        'consume_points' => null,
        'gift_points' => null
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
        'promotion_type' => 'promotion_type',
        'promotion_amt' => 'promotion_amt',
        'schema_id' => 'schema_id',
        'schema_type' => 'schema_type',
        'activity_id' => 'activity_id',
        'activity_name' => 'activity_name',
        'coupon_no' => 'coupon_no',
        'point_rule_id' => 'point_rule_id',
        'consume_points' => 'consume_points',
        'gift_points' => 'gift_points'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'promotion_type' => 'setPromotionType',
        'promotion_amt' => 'setPromotionAmt',
        'schema_id' => 'setSchemaId',
        'schema_type' => 'setSchemaType',
        'activity_id' => 'setActivityId',
        'activity_name' => 'setActivityName',
        'coupon_no' => 'setCouponNo',
        'point_rule_id' => 'setPointRuleId',
        'consume_points' => 'setConsumePoints',
        'gift_points' => 'setGiftPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'promotion_type' => 'getPromotionType',
        'promotion_amt' => 'getPromotionAmt',
        'schema_id' => 'getSchemaId',
        'schema_type' => 'getSchemaType',
        'activity_id' => 'getActivityId',
        'activity_name' => 'getActivityName',
        'coupon_no' => 'getCouponNo',
        'point_rule_id' => 'getPointRuleId',
        'consume_points' => 'getConsumePoints',
        'gift_points' => 'getGiftPoints'
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
        $this->container['promotion_type'] = isset($data['promotion_type']) ? $data['promotion_type'] : null;
        $this->container['promotion_amt'] = isset($data['promotion_amt']) ? $data['promotion_amt'] : null;
        $this->container['schema_id'] = isset($data['schema_id']) ? $data['schema_id'] : null;
        $this->container['schema_type'] = isset($data['schema_type']) ? $data['schema_type'] : null;
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['activity_name'] = isset($data['activity_name']) ? $data['activity_name'] : null;
        $this->container['coupon_no'] = isset($data['coupon_no']) ? $data['coupon_no'] : null;
        $this->container['point_rule_id'] = isset($data['point_rule_id']) ? $data['point_rule_id'] : null;
        $this->container['consume_points'] = isset($data['consume_points']) ? $data['consume_points'] : null;
        $this->container['gift_points'] = isset($data['gift_points']) ? $data['gift_points'] : null;
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
     * Gets promotion_type
     *
     * @return string
     */
    public function getPromotionType()
    {
        return $this->container['promotion_type'];
    }

    /**
     * Sets promotion_type
     *
     * @param string $promotion_type promotion_type
     *
     * @return $this
     */
    public function setPromotionType($promotion_type)
    {
        $this->container['promotion_type'] = $promotion_type;

        return $this;
    }

    /**
     * Gets promotion_amt
     *
     * @return string
     */
    public function getPromotionAmt()
    {
        return $this->container['promotion_amt'];
    }

    /**
     * Sets promotion_amt
     *
     * @param string $promotion_amt promotion_amt
     *
     * @return $this
     */
    public function setPromotionAmt($promotion_amt)
    {
        $this->container['promotion_amt'] = $promotion_amt;

        return $this;
    }

    /**
     * Gets schema_id
     *
     * @return string
     */
    public function getSchemaId()
    {
        return $this->container['schema_id'];
    }

    /**
     * Sets schema_id
     *
     * @param string $schema_id schema_id
     *
     * @return $this
     */
    public function setSchemaId($schema_id)
    {
        $this->container['schema_id'] = $schema_id;

        return $this;
    }

    /**
     * Gets schema_type
     *
     * @return string
     */
    public function getSchemaType()
    {
        return $this->container['schema_type'];
    }

    /**
     * Sets schema_type
     *
     * @param string $schema_type schema_type
     *
     * @return $this
     */
    public function setSchemaType($schema_type)
    {
        $this->container['schema_type'] = $schema_type;

        return $this;
    }

    /**
     * Gets activity_id
     *
     * @return string
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     *
     * @param string $activity_id activity_id
     *
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets activity_name
     *
     * @return string
     */
    public function getActivityName()
    {
        return $this->container['activity_name'];
    }

    /**
     * Sets activity_name
     *
     * @param string $activity_name activity_name
     *
     * @return $this
     */
    public function setActivityName($activity_name)
    {
        $this->container['activity_name'] = $activity_name;

        return $this;
    }

    /**
     * Gets coupon_no
     *
     * @return string
     */
    public function getCouponNo()
    {
        return $this->container['coupon_no'];
    }

    /**
     * Sets coupon_no
     *
     * @param string $coupon_no coupon_no
     *
     * @return $this
     */
    public function setCouponNo($coupon_no)
    {
        $this->container['coupon_no'] = $coupon_no;

        return $this;
    }

    /**
     * Gets point_rule_id
     *
     * @return string
     */
    public function getPointRuleId()
    {
        return $this->container['point_rule_id'];
    }

    /**
     * Sets point_rule_id
     *
     * @param string $point_rule_id point_rule_id
     *
     * @return $this
     */
    public function setPointRuleId($point_rule_id)
    {
        $this->container['point_rule_id'] = $point_rule_id;

        return $this;
    }

    /**
     * Gets consume_points
     *
     * @return string
     */
    public function getConsumePoints()
    {
        return $this->container['consume_points'];
    }

    /**
     * Sets consume_points
     *
     * @param string $consume_points consume_points
     *
     * @return $this
     */
    public function setConsumePoints($consume_points)
    {
        $this->container['consume_points'] = $consume_points;

        return $this;
    }

    /**
     * Gets gift_points
     *
     * @return string
     */
    public function getGiftPoints()
    {
        return $this->container['gift_points'];
    }

    /**
     * Sets gift_points
     *
     * @param string $gift_points gift_points
     *
     * @return $this
     */
    public function setGiftPoints($gift_points)
    {
        $this->container['gift_points'] = $gift_points;

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


