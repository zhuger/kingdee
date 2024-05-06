<?php
/**
 * FaCardListReq
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
 * FaCardListReq Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FaCardListReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FaCard_listReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_due' => 'string',
        'search' => 'string',
        'is_clear' => 'string',
        'is_init' => 'bool',
        'end_use_date' => 'string',
        'is_split' => 'string',
        'page' => 'string',
        'start_use_date' => 'string',
        'page_size' => 'string',
        'end_record_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_due' => null,
        'search' => null,
        'is_clear' => null,
        'is_init' => null,
        'end_use_date' => null,
        'is_split' => null,
        'page' => null,
        'start_use_date' => null,
        'page_size' => null,
        'end_record_date' => null
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
        'is_due' => 'is_due',
        'search' => 'search',
        'is_clear' => 'is_clear',
        'is_init' => 'is_init',
        'end_use_date' => 'end_use_date',
        'is_split' => 'is_split',
        'page' => 'page',
        'start_use_date' => 'start_use_date',
        'page_size' => 'page_size',
        'end_record_date' => 'end_record_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_due' => 'setIsDue',
        'search' => 'setSearch',
        'is_clear' => 'setIsClear',
        'is_init' => 'setIsInit',
        'end_use_date' => 'setEndUseDate',
        'is_split' => 'setIsSplit',
        'page' => 'setPage',
        'start_use_date' => 'setStartUseDate',
        'page_size' => 'setPageSize',
        'end_record_date' => 'setEndRecordDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_due' => 'getIsDue',
        'search' => 'getSearch',
        'is_clear' => 'getIsClear',
        'is_init' => 'getIsInit',
        'end_use_date' => 'getEndUseDate',
        'is_split' => 'getIsSplit',
        'page' => 'getPage',
        'start_use_date' => 'getStartUseDate',
        'page_size' => 'getPageSize',
        'end_record_date' => 'getEndRecordDate'
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
        $this->container['is_due'] = isset($data['is_due']) ? $data['is_due'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['is_clear'] = isset($data['is_clear']) ? $data['is_clear'] : null;
        $this->container['is_init'] = isset($data['is_init']) ? $data['is_init'] : null;
        $this->container['end_use_date'] = isset($data['end_use_date']) ? $data['end_use_date'] : null;
        $this->container['is_split'] = isset($data['is_split']) ? $data['is_split'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['start_use_date'] = isset($data['start_use_date']) ? $data['start_use_date'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['end_record_date'] = isset($data['end_record_date']) ? $data['end_record_date'] : null;
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
     * Gets is_due
     *
     * @return string
     */
    public function getIsDue()
    {
        return $this->container['is_due'];
    }

    /**
     * Sets is_due
     *
     * @param string $is_due is_due
     *
     * @return $this
     */
    public function setIsDue($is_due)
    {
        $this->container['is_due'] = $is_due;

        return $this;
    }

    /**
     * Gets search
     *
     * @return string
     */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
     * Sets search
     *
     * @param string $search search
     *
     * @return $this
     */
    public function setSearch($search)
    {
        $this->container['search'] = $search;

        return $this;
    }

    /**
     * Gets is_clear
     *
     * @return string
     */
    public function getIsClear()
    {
        return $this->container['is_clear'];
    }

    /**
     * Sets is_clear
     *
     * @param string $is_clear is_clear
     *
     * @return $this
     */
    public function setIsClear($is_clear)
    {
        $this->container['is_clear'] = $is_clear;

        return $this;
    }

    /**
     * Gets is_init
     *
     * @return bool
     */
    public function getIsInit()
    {
        return $this->container['is_init'];
    }

    /**
     * Sets is_init
     *
     * @param bool $is_init is_init
     *
     * @return $this
     */
    public function setIsInit($is_init)
    {
        $this->container['is_init'] = $is_init;

        return $this;
    }

    /**
     * Gets end_use_date
     *
     * @return string
     */
    public function getEndUseDate()
    {
        return $this->container['end_use_date'];
    }

    /**
     * Sets end_use_date
     *
     * @param string $end_use_date end_use_date
     *
     * @return $this
     */
    public function setEndUseDate($end_use_date)
    {
        $this->container['end_use_date'] = $end_use_date;

        return $this;
    }

    /**
     * Gets is_split
     *
     * @return string
     */
    public function getIsSplit()
    {
        return $this->container['is_split'];
    }

    /**
     * Sets is_split
     *
     * @param string $is_split is_split
     *
     * @return $this
     */
    public function setIsSplit($is_split)
    {
        $this->container['is_split'] = $is_split;

        return $this;
    }

    /**
     * Gets page
     *
     * @return string
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param string $page page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets start_use_date
     *
     * @return string
     */
    public function getStartUseDate()
    {
        return $this->container['start_use_date'];
    }

    /**
     * Sets start_use_date
     *
     * @param string $start_use_date start_use_date
     *
     * @return $this
     */
    public function setStartUseDate($start_use_date)
    {
        $this->container['start_use_date'] = $start_use_date;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return string
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param string $page_size page_size
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets end_record_date
     *
     * @return string
     */
    public function getEndRecordDate()
    {
        return $this->container['end_record_date'];
    }

    /**
     * Sets end_record_date
     *
     * @param string $end_record_date end_record_date
     *
     * @return $this
     */
    public function setEndRecordDate($end_record_date)
    {
        $this->container['end_record_date'] = $end_record_date;

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


