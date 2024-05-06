<?php
/**
 * AccountDetailReply
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
 * AccountDetailReply Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountDetailReply implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountDetailReply';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'number' => 'string',
        'help_code' => 'string',
        'dc' => 'string',
        'account_type_id' => 'string',
        'account_type_name' => 'string',
        'account_type_number' => 'string',
        'parent_id' => 'string',
        'parent_name' => 'string',
        'parent_number' => 'string',
        'is_cash' => 'bool',
        'is_bank' => 'bool',
        'is_cash_equivalent' => 'bool',
        'is_qty' => 'bool',
        'is_currency' => 'bool',
        'is_all_currency' => 'bool',
        'is_change_currency' => 'bool',
        'is_assist' => 'bool',
        'enable' => 'string',
        'is_leaf' => 'bool',
        'check_item_entry' => '\com_kingdee_service\data\entity\AccountCheckItemEntry[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'number' => null,
        'help_code' => null,
        'dc' => null,
        'account_type_id' => null,
        'account_type_name' => null,
        'account_type_number' => null,
        'parent_id' => null,
        'parent_name' => null,
        'parent_number' => null,
        'is_cash' => null,
        'is_bank' => null,
        'is_cash_equivalent' => null,
        'is_qty' => null,
        'is_currency' => null,
        'is_all_currency' => null,
        'is_change_currency' => null,
        'is_assist' => null,
        'enable' => null,
        'is_leaf' => null,
        'check_item_entry' => null
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
        'name' => 'name',
        'number' => 'number',
        'help_code' => 'help_code',
        'dc' => 'dc',
        'account_type_id' => 'account_type_id',
        'account_type_name' => 'account_type_name',
        'account_type_number' => 'account_type_number',
        'parent_id' => 'parent_id',
        'parent_name' => 'parent_name',
        'parent_number' => 'parent_number',
        'is_cash' => 'is_cash',
        'is_bank' => 'is_bank',
        'is_cash_equivalent' => 'is_cash_equivalent',
        'is_qty' => 'is_qty',
        'is_currency' => 'is_currency',
        'is_all_currency' => 'is_all_currency',
        'is_change_currency' => 'is_change_currency',
        'is_assist' => 'is_assist',
        'enable' => 'enable',
        'is_leaf' => 'is_leaf',
        'check_item_entry' => 'check_item_entry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'number' => 'setNumber',
        'help_code' => 'setHelpCode',
        'dc' => 'setDc',
        'account_type_id' => 'setAccountTypeId',
        'account_type_name' => 'setAccountTypeName',
        'account_type_number' => 'setAccountTypeNumber',
        'parent_id' => 'setParentId',
        'parent_name' => 'setParentName',
        'parent_number' => 'setParentNumber',
        'is_cash' => 'setIsCash',
        'is_bank' => 'setIsBank',
        'is_cash_equivalent' => 'setIsCashEquivalent',
        'is_qty' => 'setIsQty',
        'is_currency' => 'setIsCurrency',
        'is_all_currency' => 'setIsAllCurrency',
        'is_change_currency' => 'setIsChangeCurrency',
        'is_assist' => 'setIsAssist',
        'enable' => 'setEnable',
        'is_leaf' => 'setIsLeaf',
        'check_item_entry' => 'setCheckItemEntry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'number' => 'getNumber',
        'help_code' => 'getHelpCode',
        'dc' => 'getDc',
        'account_type_id' => 'getAccountTypeId',
        'account_type_name' => 'getAccountTypeName',
        'account_type_number' => 'getAccountTypeNumber',
        'parent_id' => 'getParentId',
        'parent_name' => 'getParentName',
        'parent_number' => 'getParentNumber',
        'is_cash' => 'getIsCash',
        'is_bank' => 'getIsBank',
        'is_cash_equivalent' => 'getIsCashEquivalent',
        'is_qty' => 'getIsQty',
        'is_currency' => 'getIsCurrency',
        'is_all_currency' => 'getIsAllCurrency',
        'is_change_currency' => 'getIsChangeCurrency',
        'is_assist' => 'getIsAssist',
        'enable' => 'getEnable',
        'is_leaf' => 'getIsLeaf',
        'check_item_entry' => 'getCheckItemEntry'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['help_code'] = isset($data['help_code']) ? $data['help_code'] : null;
        $this->container['dc'] = isset($data['dc']) ? $data['dc'] : null;
        $this->container['account_type_id'] = isset($data['account_type_id']) ? $data['account_type_id'] : null;
        $this->container['account_type_name'] = isset($data['account_type_name']) ? $data['account_type_name'] : null;
        $this->container['account_type_number'] = isset($data['account_type_number']) ? $data['account_type_number'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['parent_name'] = isset($data['parent_name']) ? $data['parent_name'] : null;
        $this->container['parent_number'] = isset($data['parent_number']) ? $data['parent_number'] : null;
        $this->container['is_cash'] = isset($data['is_cash']) ? $data['is_cash'] : null;
        $this->container['is_bank'] = isset($data['is_bank']) ? $data['is_bank'] : null;
        $this->container['is_cash_equivalent'] = isset($data['is_cash_equivalent']) ? $data['is_cash_equivalent'] : null;
        $this->container['is_qty'] = isset($data['is_qty']) ? $data['is_qty'] : null;
        $this->container['is_currency'] = isset($data['is_currency']) ? $data['is_currency'] : null;
        $this->container['is_all_currency'] = isset($data['is_all_currency']) ? $data['is_all_currency'] : null;
        $this->container['is_change_currency'] = isset($data['is_change_currency']) ? $data['is_change_currency'] : null;
        $this->container['is_assist'] = isset($data['is_assist']) ? $data['is_assist'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['is_leaf'] = isset($data['is_leaf']) ? $data['is_leaf'] : null;
        $this->container['check_item_entry'] = isset($data['check_item_entry']) ? $data['check_item_entry'] : null;
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
     * Gets help_code
     *
     * @return string
     */
    public function getHelpCode()
    {
        return $this->container['help_code'];
    }

    /**
     * Sets help_code
     *
     * @param string $help_code help_code
     *
     * @return $this
     */
    public function setHelpCode($help_code)
    {
        $this->container['help_code'] = $help_code;

        return $this;
    }

    /**
     * Gets dc
     *
     * @return string
     */
    public function getDc()
    {
        return $this->container['dc'];
    }

    /**
     * Sets dc
     *
     * @param string $dc dc
     *
     * @return $this
     */
    public function setDc($dc)
    {
        $this->container['dc'] = $dc;

        return $this;
    }

    /**
     * Gets account_type_id
     *
     * @return string
     */
    public function getAccountTypeId()
    {
        return $this->container['account_type_id'];
    }

    /**
     * Sets account_type_id
     *
     * @param string $account_type_id account_type_id
     *
     * @return $this
     */
    public function setAccountTypeId($account_type_id)
    {
        $this->container['account_type_id'] = $account_type_id;

        return $this;
    }

    /**
     * Gets account_type_name
     *
     * @return string
     */
    public function getAccountTypeName()
    {
        return $this->container['account_type_name'];
    }

    /**
     * Sets account_type_name
     *
     * @param string $account_type_name account_type_name
     *
     * @return $this
     */
    public function setAccountTypeName($account_type_name)
    {
        $this->container['account_type_name'] = $account_type_name;

        return $this;
    }

    /**
     * Gets account_type_number
     *
     * @return string
     */
    public function getAccountTypeNumber()
    {
        return $this->container['account_type_number'];
    }

    /**
     * Sets account_type_number
     *
     * @param string $account_type_number account_type_number
     *
     * @return $this
     */
    public function setAccountTypeNumber($account_type_number)
    {
        $this->container['account_type_number'] = $account_type_number;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id parent_id
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets parent_name
     *
     * @return string
     */
    public function getParentName()
    {
        return $this->container['parent_name'];
    }

    /**
     * Sets parent_name
     *
     * @param string $parent_name parent_name
     *
     * @return $this
     */
    public function setParentName($parent_name)
    {
        $this->container['parent_name'] = $parent_name;

        return $this;
    }

    /**
     * Gets parent_number
     *
     * @return string
     */
    public function getParentNumber()
    {
        return $this->container['parent_number'];
    }

    /**
     * Sets parent_number
     *
     * @param string $parent_number parent_number
     *
     * @return $this
     */
    public function setParentNumber($parent_number)
    {
        $this->container['parent_number'] = $parent_number;

        return $this;
    }

    /**
     * Gets is_cash
     *
     * @return bool
     */
    public function getIsCash()
    {
        return $this->container['is_cash'];
    }

    /**
     * Sets is_cash
     *
     * @param bool $is_cash is_cash
     *
     * @return $this
     */
    public function setIsCash($is_cash)
    {
        $this->container['is_cash'] = $is_cash;

        return $this;
    }

    /**
     * Gets is_bank
     *
     * @return bool
     */
    public function getIsBank()
    {
        return $this->container['is_bank'];
    }

    /**
     * Sets is_bank
     *
     * @param bool $is_bank is_bank
     *
     * @return $this
     */
    public function setIsBank($is_bank)
    {
        $this->container['is_bank'] = $is_bank;

        return $this;
    }

    /**
     * Gets is_cash_equivalent
     *
     * @return bool
     */
    public function getIsCashEquivalent()
    {
        return $this->container['is_cash_equivalent'];
    }

    /**
     * Sets is_cash_equivalent
     *
     * @param bool $is_cash_equivalent is_cash_equivalent
     *
     * @return $this
     */
    public function setIsCashEquivalent($is_cash_equivalent)
    {
        $this->container['is_cash_equivalent'] = $is_cash_equivalent;

        return $this;
    }

    /**
     * Gets is_qty
     *
     * @return bool
     */
    public function getIsQty()
    {
        return $this->container['is_qty'];
    }

    /**
     * Sets is_qty
     *
     * @param bool $is_qty is_qty
     *
     * @return $this
     */
    public function setIsQty($is_qty)
    {
        $this->container['is_qty'] = $is_qty;

        return $this;
    }

    /**
     * Gets is_currency
     *
     * @return bool
     */
    public function getIsCurrency()
    {
        return $this->container['is_currency'];
    }

    /**
     * Sets is_currency
     *
     * @param bool $is_currency is_currency
     *
     * @return $this
     */
    public function setIsCurrency($is_currency)
    {
        $this->container['is_currency'] = $is_currency;

        return $this;
    }

    /**
     * Gets is_all_currency
     *
     * @return bool
     */
    public function getIsAllCurrency()
    {
        return $this->container['is_all_currency'];
    }

    /**
     * Sets is_all_currency
     *
     * @param bool $is_all_currency is_all_currency
     *
     * @return $this
     */
    public function setIsAllCurrency($is_all_currency)
    {
        $this->container['is_all_currency'] = $is_all_currency;

        return $this;
    }

    /**
     * Gets is_change_currency
     *
     * @return bool
     */
    public function getIsChangeCurrency()
    {
        return $this->container['is_change_currency'];
    }

    /**
     * Sets is_change_currency
     *
     * @param bool $is_change_currency is_change_currency
     *
     * @return $this
     */
    public function setIsChangeCurrency($is_change_currency)
    {
        $this->container['is_change_currency'] = $is_change_currency;

        return $this;
    }

    /**
     * Gets is_assist
     *
     * @return bool
     */
    public function getIsAssist()
    {
        return $this->container['is_assist'];
    }

    /**
     * Sets is_assist
     *
     * @param bool $is_assist is_assist
     *
     * @return $this
     */
    public function setIsAssist($is_assist)
    {
        $this->container['is_assist'] = $is_assist;

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
     * Gets is_leaf
     *
     * @return bool
     */
    public function getIsLeaf()
    {
        return $this->container['is_leaf'];
    }

    /**
     * Sets is_leaf
     *
     * @param bool $is_leaf is_leaf
     *
     * @return $this
     */
    public function setIsLeaf($is_leaf)
    {
        $this->container['is_leaf'] = $is_leaf;

        return $this;
    }

    /**
     * Gets check_item_entry
     *
     * @return \com_kingdee_service\data\entity\AccountCheckItemEntry[]
     */
    public function getCheckItemEntry()
    {
        return $this->container['check_item_entry'];
    }

    /**
     * Sets check_item_entry
     *
     * @param \com_kingdee_service\data\entity\AccountCheckItemEntry[] $check_item_entry check_item_entry
     *
     * @return $this
     */
    public function setCheckItemEntry($check_item_entry)
    {
        $this->container['check_item_entry'] = $check_item_entry;

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

