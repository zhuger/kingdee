<?php
/**
 * AuxInfoAuxinfoListReq
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
 * AuxInfoAuxinfoListReq Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuxInfoAuxinfoListReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuxInfo_AuxinfoListReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'modify_end_time' => 'string',
        'number' => 'string',
        'search' => 'string',
        'create_start_time' => 'string',
        'enable' => 'string',
        'name' => 'string',
        'ids' => 'string[]',
        'modify_start_time' => 'string',
        'page' => 'string',
        'create_end_time' => 'string',
        'page_size' => 'string',
        'group' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'modify_end_time' => null,
        'number' => null,
        'search' => null,
        'create_start_time' => null,
        'enable' => null,
        'name' => null,
        'ids' => null,
        'modify_start_time' => null,
        'page' => null,
        'create_end_time' => null,
        'page_size' => null,
        'group' => null
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
        'number' => 'number',
        'search' => 'search',
        'create_start_time' => 'create_start_time',
        'enable' => 'enable',
        'name' => 'name',
        'ids' => 'ids',
        'modify_start_time' => 'modify_start_time',
        'page' => 'page',
        'create_end_time' => 'create_end_time',
        'page_size' => 'page_size',
        'group' => 'group'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'modify_end_time' => 'setModifyEndTime',
        'number' => 'setNumber',
        'search' => 'setSearch',
        'create_start_time' => 'setCreateStartTime',
        'enable' => 'setEnable',
        'name' => 'setName',
        'ids' => 'setIds',
        'modify_start_time' => 'setModifyStartTime',
        'page' => 'setPage',
        'create_end_time' => 'setCreateEndTime',
        'page_size' => 'setPageSize',
        'group' => 'setGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'modify_end_time' => 'getModifyEndTime',
        'number' => 'getNumber',
        'search' => 'getSearch',
        'create_start_time' => 'getCreateStartTime',
        'enable' => 'getEnable',
        'name' => 'getName',
        'ids' => 'getIds',
        'modify_start_time' => 'getModifyStartTime',
        'page' => 'getPage',
        'create_end_time' => 'getCreateEndTime',
        'page_size' => 'getPageSize',
        'group' => 'getGroup'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['create_start_time'] = isset($data['create_start_time']) ? $data['create_start_time'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['modify_start_time'] = isset($data['modify_start_time']) ? $data['modify_start_time'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['create_end_time'] = isset($data['create_end_time']) ? $data['create_end_time'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

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
     * Gets enable
     *
     * @return string
     */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
     * Sets enable
     *
     * @param string $enable enable
     *
     * @return $this
     */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ids
     *
     * @return string[]
     */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
     * Sets ids
     *
     * @param string[] $ids ids
     *
     * @return $this
     */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;

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
     * Gets group
     *
     * @return string[]
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string[] $group group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

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


