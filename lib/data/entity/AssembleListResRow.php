<?php
/**
 * AssembleListResRow
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
 * AssembleListResRow Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AssembleListResRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AssembleListRes.Row';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'bill_no' => 'string',
        'bill_date' => 'string',
        'bill_status' => 'string',
        'audit_time' => 'string',
        'modify_time' => 'string',
        'print_count' => 'int',
        'remark' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'bill_no' => null,
        'bill_date' => null,
        'bill_status' => null,
        'audit_time' => null,
        'modify_time' => null,
        'print_count' => 'int32',
        'remark' => null
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
        'bill_no' => 'bill_no',
        'bill_date' => 'bill_date',
        'bill_status' => 'bill_status',
        'audit_time' => 'audit_time',
        'modify_time' => 'modify_time',
        'print_count' => 'print_count',
        'remark' => 'remark'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'bill_no' => 'setBillNo',
        'bill_date' => 'setBillDate',
        'bill_status' => 'setBillStatus',
        'audit_time' => 'setAuditTime',
        'modify_time' => 'setModifyTime',
        'print_count' => 'setPrintCount',
        'remark' => 'setRemark'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'bill_no' => 'getBillNo',
        'bill_date' => 'getBillDate',
        'bill_status' => 'getBillStatus',
        'audit_time' => 'getAuditTime',
        'modify_time' => 'getModifyTime',
        'print_count' => 'getPrintCount',
        'remark' => 'getRemark'
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
        $this->container['bill_no'] = isset($data['bill_no']) ? $data['bill_no'] : null;
        $this->container['bill_date'] = isset($data['bill_date']) ? $data['bill_date'] : null;
        $this->container['bill_status'] = isset($data['bill_status']) ? $data['bill_status'] : null;
        $this->container['audit_time'] = isset($data['audit_time']) ? $data['audit_time'] : null;
        $this->container['modify_time'] = isset($data['modify_time']) ? $data['modify_time'] : null;
        $this->container['print_count'] = isset($data['print_count']) ? $data['print_count'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
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
     * Gets bill_no
     *
     * @return string
     */
    public function getBillNo()
    {
        return $this->container['bill_no'];
    }

    /**
     * Sets bill_no
     *
     * @param string $bill_no bill_no
     *
     * @return $this
     */
    public function setBillNo($bill_no)
    {
        $this->container['bill_no'] = $bill_no;

        return $this;
    }

    /**
     * Gets bill_date
     *
     * @return string
     */
    public function getBillDate()
    {
        return $this->container['bill_date'];
    }

    /**
     * Sets bill_date
     *
     * @param string $bill_date bill_date
     *
     * @return $this
     */
    public function setBillDate($bill_date)
    {
        $this->container['bill_date'] = $bill_date;

        return $this;
    }

    /**
     * Gets bill_status
     *
     * @return string
     */
    public function getBillStatus()
    {
        return $this->container['bill_status'];
    }

    /**
     * Sets bill_status
     *
     * @param string $bill_status bill_status
     *
     * @return $this
     */
    public function setBillStatus($bill_status)
    {
        $this->container['bill_status'] = $bill_status;

        return $this;
    }

    /**
     * Gets audit_time
     *
     * @return string
     */
    public function getAuditTime()
    {
        return $this->container['audit_time'];
    }

    /**
     * Sets audit_time
     *
     * @param string $audit_time audit_time
     *
     * @return $this
     */
    public function setAuditTime($audit_time)
    {
        $this->container['audit_time'] = $audit_time;

        return $this;
    }

    /**
     * Gets modify_time
     *
     * @return string
     */
    public function getModifyTime()
    {
        return $this->container['modify_time'];
    }

    /**
     * Sets modify_time
     *
     * @param string $modify_time modify_time
     *
     * @return $this
     */
    public function setModifyTime($modify_time)
    {
        $this->container['modify_time'] = $modify_time;

        return $this;
    }

    /**
     * Gets print_count
     *
     * @return int
     */
    public function getPrintCount()
    {
        return $this->container['print_count'];
    }

    /**
     * Sets print_count
     *
     * @param int $print_count print_count
     *
     * @return $this
     */
    public function setPrintCount($print_count)
    {
        $this->container['print_count'] = $print_count;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string $remark remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

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


