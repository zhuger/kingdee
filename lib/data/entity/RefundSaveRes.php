<?php
/**
 * RefundSaveRes
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
 * RefundSaveRes Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RefundSaveRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RefundSaveRes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'err' => 'string',
        'msg' => 'string',
        'mch_id' => 'string',
        'shop_id' => 'string',
        'refund_no' => 'string',
        'in_refund_no' => 'string',
        'channel_refund_no' => 'string',
        'trans_no' => 'string',
        'refund_amount' => 'string',
        'refund_status' => 'string',
        'finish_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'err' => null,
        'msg' => null,
        'mch_id' => null,
        'shop_id' => null,
        'refund_no' => null,
        'in_refund_no' => null,
        'channel_refund_no' => null,
        'trans_no' => null,
        'refund_amount' => null,
        'refund_status' => null,
        'finish_time' => null
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
        'err' => 'err',
        'msg' => 'msg',
        'mch_id' => 'mch_id',
        'shop_id' => 'shop_id',
        'refund_no' => 'refund_no',
        'in_refund_no' => 'in_refund_no',
        'channel_refund_no' => 'channel_refund_no',
        'trans_no' => 'trans_no',
        'refund_amount' => 'refund_amount',
        'refund_status' => 'refund_status',
        'finish_time' => 'finish_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'err' => 'setErr',
        'msg' => 'setMsg',
        'mch_id' => 'setMchId',
        'shop_id' => 'setShopId',
        'refund_no' => 'setRefundNo',
        'in_refund_no' => 'setInRefundNo',
        'channel_refund_no' => 'setChannelRefundNo',
        'trans_no' => 'setTransNo',
        'refund_amount' => 'setRefundAmount',
        'refund_status' => 'setRefundStatus',
        'finish_time' => 'setFinishTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'err' => 'getErr',
        'msg' => 'getMsg',
        'mch_id' => 'getMchId',
        'shop_id' => 'getShopId',
        'refund_no' => 'getRefundNo',
        'in_refund_no' => 'getInRefundNo',
        'channel_refund_no' => 'getChannelRefundNo',
        'trans_no' => 'getTransNo',
        'refund_amount' => 'getRefundAmount',
        'refund_status' => 'getRefundStatus',
        'finish_time' => 'getFinishTime'
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
        $this->container['err'] = isset($data['err']) ? $data['err'] : null;
        $this->container['msg'] = isset($data['msg']) ? $data['msg'] : null;
        $this->container['mch_id'] = isset($data['mch_id']) ? $data['mch_id'] : null;
        $this->container['shop_id'] = isset($data['shop_id']) ? $data['shop_id'] : null;
        $this->container['refund_no'] = isset($data['refund_no']) ? $data['refund_no'] : null;
        $this->container['in_refund_no'] = isset($data['in_refund_no']) ? $data['in_refund_no'] : null;
        $this->container['channel_refund_no'] = isset($data['channel_refund_no']) ? $data['channel_refund_no'] : null;
        $this->container['trans_no'] = isset($data['trans_no']) ? $data['trans_no'] : null;
        $this->container['refund_amount'] = isset($data['refund_amount']) ? $data['refund_amount'] : null;
        $this->container['refund_status'] = isset($data['refund_status']) ? $data['refund_status'] : null;
        $this->container['finish_time'] = isset($data['finish_time']) ? $data['finish_time'] : null;
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
     * Gets err
     *
     * @return string
     */
    public function getErr()
    {
        return $this->container['err'];
    }

    /**
     * Sets err
     *
     * @param string $err err
     *
     * @return $this
     */
    public function setErr($err)
    {
        $this->container['err'] = $err;

        return $this;
    }

    /**
     * Gets msg
     *
     * @return string
     */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     *
     * @param string $msg msg
     *
     * @return $this
     */
    public function setMsg($msg)
    {
        $this->container['msg'] = $msg;

        return $this;
    }

    /**
     * Gets mch_id
     *
     * @return string
     */
    public function getMchId()
    {
        return $this->container['mch_id'];
    }

    /**
     * Sets mch_id
     *
     * @param string $mch_id mch_id
     *
     * @return $this
     */
    public function setMchId($mch_id)
    {
        $this->container['mch_id'] = $mch_id;

        return $this;
    }

    /**
     * Gets shop_id
     *
     * @return string
     */
    public function getShopId()
    {
        return $this->container['shop_id'];
    }

    /**
     * Sets shop_id
     *
     * @param string $shop_id shop_id
     *
     * @return $this
     */
    public function setShopId($shop_id)
    {
        $this->container['shop_id'] = $shop_id;

        return $this;
    }

    /**
     * Gets refund_no
     *
     * @return string
     */
    public function getRefundNo()
    {
        return $this->container['refund_no'];
    }

    /**
     * Sets refund_no
     *
     * @param string $refund_no refund_no
     *
     * @return $this
     */
    public function setRefundNo($refund_no)
    {
        $this->container['refund_no'] = $refund_no;

        return $this;
    }

    /**
     * Gets in_refund_no
     *
     * @return string
     */
    public function getInRefundNo()
    {
        return $this->container['in_refund_no'];
    }

    /**
     * Sets in_refund_no
     *
     * @param string $in_refund_no in_refund_no
     *
     * @return $this
     */
    public function setInRefundNo($in_refund_no)
    {
        $this->container['in_refund_no'] = $in_refund_no;

        return $this;
    }

    /**
     * Gets channel_refund_no
     *
     * @return string
     */
    public function getChannelRefundNo()
    {
        return $this->container['channel_refund_no'];
    }

    /**
     * Sets channel_refund_no
     *
     * @param string $channel_refund_no channel_refund_no
     *
     * @return $this
     */
    public function setChannelRefundNo($channel_refund_no)
    {
        $this->container['channel_refund_no'] = $channel_refund_no;

        return $this;
    }

    /**
     * Gets trans_no
     *
     * @return string
     */
    public function getTransNo()
    {
        return $this->container['trans_no'];
    }

    /**
     * Sets trans_no
     *
     * @param string $trans_no trans_no
     *
     * @return $this
     */
    public function setTransNo($trans_no)
    {
        $this->container['trans_no'] = $trans_no;

        return $this;
    }

    /**
     * Gets refund_amount
     *
     * @return string
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount
     *
     * @param string $refund_amount refund_amount
     *
     * @return $this
     */
    public function setRefundAmount($refund_amount)
    {
        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets refund_status
     *
     * @return string
     */
    public function getRefundStatus()
    {
        return $this->container['refund_status'];
    }

    /**
     * Sets refund_status
     *
     * @param string $refund_status refund_status
     *
     * @return $this
     */
    public function setRefundStatus($refund_status)
    {
        $this->container['refund_status'] = $refund_status;

        return $this;
    }

    /**
     * Gets finish_time
     *
     * @return string
     */
    public function getFinishTime()
    {
        return $this->container['finish_time'];
    }

    /**
     * Sets finish_time
     *
     * @param string $finish_time finish_time
     *
     * @return $this
     */
    public function setFinishTime($finish_time)
    {
        $this->container['finish_time'] = $finish_time;

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

