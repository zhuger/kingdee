<?php
/**
 * LabelGroupLabelGroupListReq
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
 * LabelGroupLabelGroupListReq Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabelGroupLabelGroupListReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LabelGroup_LabelGroupListReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'modify_end_time' => 'string',
        'search' => 'string',
        'create_start_time' => 'string',
        'base_data_use_id' => 'string',
        'un_page' => 'string',
        'modify_start_time' => 'string',
        'page' => 'string',
        'create_end_time' => 'string',
        'page_size' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'modify_end_time' => null,
        'search' => null,
        'create_start_time' => null,
        'base_data_use_id' => null,
        'un_page' => null,
        'modify_start_time' => null,
        'page' => null,
        'create_end_time' => null,
        'page_size' => null
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
        'modify_end_time' => 'modify_end_time',
        'search' => 'search',
        'create_start_time' => 'create_start_time',
        'base_data_use_id' => 'base_data_use_id',
        'un_page' => 'un_page',
        'modify_start_time' => 'modify_start_time',
        'page' => 'page',
        'create_end_time' => 'create_end_time',
        'page_size' => 'page_size'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'modify_end_time' => 'setModifyEndTime',
        'search' => 'setSearch',
        'create_start_time' => 'setCreateStartTime',
        'base_data_use_id' => 'setBaseDataUseId',
        'un_page' => 'setUnPage',
        'modify_start_time' => 'setModifyStartTime',
        'page' => 'setPage',
        'create_end_time' => 'setCreateEndTime',
        'page_size' => 'setPageSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'modify_end_time' => 'getModifyEndTime',
        'search' => 'getSearch',
        'create_start_time' => 'getCreateStartTime',
        'base_data_use_id' => 'getBaseDataUseId',
        'un_page' => 'getUnPage',
        'modify_start_time' => 'getModifyStartTime',
        'page' => 'getPage',
        'create_end_time' => 'getCreateEndTime',
        'page_size' => 'getPageSize'
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
        $this->container['modify_end_time'] = isset($data['modify_end_time']) ? $data['modify_end_time'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['create_start_time'] = isset($data['create_start_time']) ? $data['create_start_time'] : null;
        $this->container['base_data_use_id'] = isset($data['base_data_use_id']) ? $data['base_data_use_id'] : null;
        $this->container['un_page'] = isset($data['un_page']) ? $data['un_page'] : null;
        $this->container['modify_start_time'] = isset($data['modify_start_time']) ? $data['modify_start_time'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['create_end_time'] = isset($data['create_end_time']) ? $data['create_end_time'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
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
     * Gets modify_end_time
     *
     * @return string
     */
    public function getModifyEndTime()
    {
        return $this->container['modify_end_time'];
    }

    /**
     * Sets modify_end_time
     *
     * @param string $modify_end_time modify_end_time
     *
     * @return $this
     */
    public function setModifyEndTime($modify_end_time)
    {
        $this->container['modify_end_time'] = $modify_end_time;

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
     * Gets create_start_time
     *
     * @return string
     */
    public function getCreateStartTime()
    {
        return $this->container['create_start_time'];
    }

    /**
     * Sets create_start_time
     *
     * @param string $create_start_time create_start_time
     *
     * @return $this
     */
    public function setCreateStartTime($create_start_time)
    {
        $this->container['create_start_time'] = $create_start_time;

        return $this;
    }

    /**
     * Gets base_data_use_id
     *
     * @return string
     */
    public function getBaseDataUseId()
    {
        return $this->container['base_data_use_id'];
    }

    /**
     * Sets base_data_use_id
     *
     * @param string $base_data_use_id base_data_use_id
     *
     * @return $this
     */
    public function setBaseDataUseId($base_data_use_id)
    {
        $this->container['base_data_use_id'] = $base_data_use_id;

        return $this;
    }

    /**
     * Gets un_page
     *
     * @return string
     */
    public function getUnPage()
    {
        return $this->container['un_page'];
    }

    /**
     * Sets un_page
     *
     * @param string $un_page un_page
     *
     * @return $this
     */
    public function setUnPage($un_page)
    {
        $this->container['un_page'] = $un_page;

        return $this;
    }

    /**
     * Gets modify_start_time
     *
     * @return string
     */
    public function getModifyStartTime()
    {
        return $this->container['modify_start_time'];
    }

    /**
     * Sets modify_start_time
     *
     * @param string $modify_start_time modify_start_time
     *
     * @return $this
     */
    public function setModifyStartTime($modify_start_time)
    {
        $this->container['modify_start_time'] = $modify_start_time;

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
     * Gets create_end_time
     *
     * @return string
     */
    public function getCreateEndTime()
    {
        return $this->container['create_end_time'];
    }

    /**
     * Sets create_end_time
     *
     * @param string $create_end_time create_end_time
     *
     * @return $this
     */
    public function setCreateEndTime($create_end_time)
    {
        $this->container['create_end_time'] = $create_end_time;

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


