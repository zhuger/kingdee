<?php
/**
 * SupplierGroupListRes
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
 * SupplierGroupListRes Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupplierGroupListRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SupplierGroupListRes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_page' => 'int',
        'current_page_size' => 'int',
        'current_page' => 'int',
        'count' => 'string',
        'page_size' => 'int',
        'page' => 'int',
        'rows' => '\com_kingdee_service\data\entity\SupplierGroupListResRow[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_page' => 'int32',
        'current_page_size' => 'int32',
        'current_page' => 'int32',
        'count' => null,
        'page_size' => 'int32',
        'page' => 'int32',
        'rows' => null
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
        'total_page' => 'total_page',
        'current_page_size' => 'current_page_size',
        'current_page' => 'currentPage',
        'count' => 'count',
        'page_size' => 'page_size',
        'page' => 'page',
        'rows' => 'rows'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_page' => 'setTotalPage',
        'current_page_size' => 'setCurrentPageSize',
        'current_page' => 'setCurrentPage',
        'count' => 'setCount',
        'page_size' => 'setPageSize',
        'page' => 'setPage',
        'rows' => 'setRows'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_page' => 'getTotalPage',
        'current_page_size' => 'getCurrentPageSize',
        'current_page' => 'getCurrentPage',
        'count' => 'getCount',
        'page_size' => 'getPageSize',
        'page' => 'getPage',
        'rows' => 'getRows'
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
        $this->container['total_page'] = isset($data['total_page']) ? $data['total_page'] : null;
        $this->container['current_page_size'] = isset($data['current_page_size']) ? $data['current_page_size'] : null;
        $this->container['current_page'] = isset($data['current_page']) ? $data['current_page'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
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
     * Gets total_page
     *
     * @return int
     */
    public function getTotalPage()
    {
        return $this->container['total_page'];
    }

    /**
     * Sets total_page
     *
     * @param int $total_page total_page
     *
     * @return $this
     */
    public function setTotalPage($total_page)
    {
        $this->container['total_page'] = $total_page;

        return $this;
    }

    /**
     * Gets current_page_size
     *
     * @return int
     */
    public function getCurrentPageSize()
    {
        return $this->container['current_page_size'];
    }

    /**
     * Sets current_page_size
     *
     * @param int $current_page_size current_page_size
     *
     * @return $this
     */
    public function setCurrentPageSize($current_page_size)
    {
        $this->container['current_page_size'] = $current_page_size;

        return $this;
    }

    /**
     * Gets current_page
     *
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     *
     * @param int $current_page current_page
     *
     * @return $this
     */
    public function setCurrentPage($current_page)
    {
        $this->container['current_page'] = $current_page;

        return $this;
    }

    /**
     * Gets count
     *
     * @return string
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param string $count count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size page_size
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int $page page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return \com_kingdee_service\data\entity\SupplierGroupListResRow[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \com_kingdee_service\data\entity\SupplierGroupListResRow[] $rows rows
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

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


