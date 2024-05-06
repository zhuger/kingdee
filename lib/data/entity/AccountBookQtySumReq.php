<?php
/**
 * AccountBookQtySumReq
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
 * AccountBookQtySumReq Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountBookQtySumReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountBook_qtySumReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'show_only_leaf' => 'int',
        'show_expand_item' => 'int',
        'level_to' => 'string',
        'start_period' => 'string',
        'price_scale' => 'string',
        'expend_all' => 'int',
        'end_period' => 'string',
        'qty_scale' => 'string',
        'account_id' => 'string[]',
        'level_from' => 'int',
        'hide_no_happen' => 'int',
        'page' => 'int',
        'hide_balance_zero' => 'string',
        'currency_id' => 'string',
        'page_size' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'show_only_leaf' => 'int32',
        'show_expand_item' => 'int32',
        'level_to' => null,
        'start_period' => null,
        'price_scale' => null,
        'expend_all' => 'int32',
        'end_period' => null,
        'qty_scale' => null,
        'account_id' => null,
        'level_from' => 'int32',
        'hide_no_happen' => 'int32',
        'page' => 'int32',
        'hide_balance_zero' => null,
        'currency_id' => null,
        'page_size' => 'int32'
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
        'show_only_leaf' => 'show_only_leaf',
        'show_expand_item' => 'show_expand_item',
        'level_to' => 'level_to',
        'start_period' => 'start_period',
        'price_scale' => 'price_scale',
        'expend_all' => 'expend_all',
        'end_period' => 'end_period',
        'qty_scale' => 'qty_scale',
        'account_id' => 'account_id',
        'level_from' => 'level_from',
        'hide_no_happen' => 'hide_no_happen',
        'page' => 'page',
        'hide_balance_zero' => 'hide_balance_zero',
        'currency_id' => 'currency_id',
        'page_size' => 'page_size'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'show_only_leaf' => 'setShowOnlyLeaf',
        'show_expand_item' => 'setShowExpandItem',
        'level_to' => 'setLevelTo',
        'start_period' => 'setStartPeriod',
        'price_scale' => 'setPriceScale',
        'expend_all' => 'setExpendAll',
        'end_period' => 'setEndPeriod',
        'qty_scale' => 'setQtyScale',
        'account_id' => 'setAccountId',
        'level_from' => 'setLevelFrom',
        'hide_no_happen' => 'setHideNoHappen',
        'page' => 'setPage',
        'hide_balance_zero' => 'setHideBalanceZero',
        'currency_id' => 'setCurrencyId',
        'page_size' => 'setPageSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'show_only_leaf' => 'getShowOnlyLeaf',
        'show_expand_item' => 'getShowExpandItem',
        'level_to' => 'getLevelTo',
        'start_period' => 'getStartPeriod',
        'price_scale' => 'getPriceScale',
        'expend_all' => 'getExpendAll',
        'end_period' => 'getEndPeriod',
        'qty_scale' => 'getQtyScale',
        'account_id' => 'getAccountId',
        'level_from' => 'getLevelFrom',
        'hide_no_happen' => 'getHideNoHappen',
        'page' => 'getPage',
        'hide_balance_zero' => 'getHideBalanceZero',
        'currency_id' => 'getCurrencyId',
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
        $this->container['show_only_leaf'] = isset($data['show_only_leaf']) ? $data['show_only_leaf'] : null;
        $this->container['show_expand_item'] = isset($data['show_expand_item']) ? $data['show_expand_item'] : null;
        $this->container['level_to'] = isset($data['level_to']) ? $data['level_to'] : null;
        $this->container['start_period'] = isset($data['start_period']) ? $data['start_period'] : null;
        $this->container['price_scale'] = isset($data['price_scale']) ? $data['price_scale'] : null;
        $this->container['expend_all'] = isset($data['expend_all']) ? $data['expend_all'] : null;
        $this->container['end_period'] = isset($data['end_period']) ? $data['end_period'] : null;
        $this->container['qty_scale'] = isset($data['qty_scale']) ? $data['qty_scale'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['level_from'] = isset($data['level_from']) ? $data['level_from'] : null;
        $this->container['hide_no_happen'] = isset($data['hide_no_happen']) ? $data['hide_no_happen'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['hide_balance_zero'] = isset($data['hide_balance_zero']) ? $data['hide_balance_zero'] : null;
        $this->container['currency_id'] = isset($data['currency_id']) ? $data['currency_id'] : null;
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
     * Gets show_only_leaf
     *
     * @return int
     */
    public function getShowOnlyLeaf()
    {
        return $this->container['show_only_leaf'];
    }

    /**
     * Sets show_only_leaf
     *
     * @param int $show_only_leaf show_only_leaf
     *
     * @return $this
     */
    public function setShowOnlyLeaf($show_only_leaf)
    {
        $this->container['show_only_leaf'] = $show_only_leaf;

        return $this;
    }

    /**
     * Gets show_expand_item
     *
     * @return int
     */
    public function getShowExpandItem()
    {
        return $this->container['show_expand_item'];
    }

    /**
     * Sets show_expand_item
     *
     * @param int $show_expand_item show_expand_item
     *
     * @return $this
     */
    public function setShowExpandItem($show_expand_item)
    {
        $this->container['show_expand_item'] = $show_expand_item;

        return $this;
    }

    /**
     * Gets level_to
     *
     * @return string
     */
    public function getLevelTo()
    {
        return $this->container['level_to'];
    }

    /**
     * Sets level_to
     *
     * @param string $level_to level_to
     *
     * @return $this
     */
    public function setLevelTo($level_to)
    {
        $this->container['level_to'] = $level_to;

        return $this;
    }

    /**
     * Gets start_period
     *
     * @return string
     */
    public function getStartPeriod()
    {
        return $this->container['start_period'];
    }

    /**
     * Sets start_period
     *
     * @param string $start_period start_period
     *
     * @return $this
     */
    public function setStartPeriod($start_period)
    {
        $this->container['start_period'] = $start_period;

        return $this;
    }

    /**
     * Gets price_scale
     *
     * @return string
     */
    public function getPriceScale()
    {
        return $this->container['price_scale'];
    }

    /**
     * Sets price_scale
     *
     * @param string $price_scale price_scale
     *
     * @return $this
     */
    public function setPriceScale($price_scale)
    {
        $this->container['price_scale'] = $price_scale;

        return $this;
    }

    /**
     * Gets expend_all
     *
     * @return int
     */
    public function getExpendAll()
    {
        return $this->container['expend_all'];
    }

    /**
     * Sets expend_all
     *
     * @param int $expend_all expend_all
     *
     * @return $this
     */
    public function setExpendAll($expend_all)
    {
        $this->container['expend_all'] = $expend_all;

        return $this;
    }

    /**
     * Gets end_period
     *
     * @return string
     */
    public function getEndPeriod()
    {
        return $this->container['end_period'];
    }

    /**
     * Sets end_period
     *
     * @param string $end_period end_period
     *
     * @return $this
     */
    public function setEndPeriod($end_period)
    {
        $this->container['end_period'] = $end_period;

        return $this;
    }

    /**
     * Gets qty_scale
     *
     * @return string
     */
    public function getQtyScale()
    {
        return $this->container['qty_scale'];
    }

    /**
     * Sets qty_scale
     *
     * @param string $qty_scale qty_scale
     *
     * @return $this
     */
    public function setQtyScale($qty_scale)
    {
        $this->container['qty_scale'] = $qty_scale;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string[]
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string[] $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets level_from
     *
     * @return int
     */
    public function getLevelFrom()
    {
        return $this->container['level_from'];
    }

    /**
     * Sets level_from
     *
     * @param int $level_from level_from
     *
     * @return $this
     */
    public function setLevelFrom($level_from)
    {
        $this->container['level_from'] = $level_from;

        return $this;
    }

    /**
     * Gets hide_no_happen
     *
     * @return int
     */
    public function getHideNoHappen()
    {
        return $this->container['hide_no_happen'];
    }

    /**
     * Sets hide_no_happen
     *
     * @param int $hide_no_happen hide_no_happen
     *
     * @return $this
     */
    public function setHideNoHappen($hide_no_happen)
    {
        $this->container['hide_no_happen'] = $hide_no_happen;

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
     * Gets hide_balance_zero
     *
     * @return string
     */
    public function getHideBalanceZero()
    {
        return $this->container['hide_balance_zero'];
    }

    /**
     * Sets hide_balance_zero
     *
     * @param string $hide_balance_zero hide_balance_zero
     *
     * @return $this
     */
    public function setHideBalanceZero($hide_balance_zero)
    {
        $this->container['hide_balance_zero'] = $hide_balance_zero;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id currency_id
     *
     * @return $this
     */
    public function setCurrencyId($currency_id)
    {
        $this->container['currency_id'] = $currency_id;

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


