<?php
/**
 * RetailBillListResSettleEntries
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
 * RetailBillListResSettleEntries Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RetailBillListResSettleEntries implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RetailBillListRes.SettleEntries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'income_type' => 'string',
        'pay_type_id' => 'string',
        'account_id' => 'string',
        'settlement_id' => 'string',
        'online_pay_type' => 'string',
        'settle_amt' => 'string',
        'settle_currency_amt' => 'string',
        'settle_currency_code' => 'string',
        'settle_currency_name' => 'string',
        'settle_currency_rate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'income_type' => null,
        'pay_type_id' => null,
        'account_id' => null,
        'settlement_id' => null,
        'online_pay_type' => null,
        'settle_amt' => null,
        'settle_currency_amt' => null,
        'settle_currency_code' => null,
        'settle_currency_name' => null,
        'settle_currency_rate' => null
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
        'income_type' => 'income_type',
        'pay_type_id' => 'pay_type_id',
        'account_id' => 'account_id',
        'settlement_id' => 'settlement_id',
        'online_pay_type' => 'online_pay_type',
        'settle_amt' => 'settle_amt',
        'settle_currency_amt' => 'settle_currency_amt',
        'settle_currency_code' => 'settle_currency_code',
        'settle_currency_name' => 'settle_currency_name',
        'settle_currency_rate' => 'settle_currency_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'income_type' => 'setIncomeType',
        'pay_type_id' => 'setPayTypeId',
        'account_id' => 'setAccountId',
        'settlement_id' => 'setSettlementId',
        'online_pay_type' => 'setOnlinePayType',
        'settle_amt' => 'setSettleAmt',
        'settle_currency_amt' => 'setSettleCurrencyAmt',
        'settle_currency_code' => 'setSettleCurrencyCode',
        'settle_currency_name' => 'setSettleCurrencyName',
        'settle_currency_rate' => 'setSettleCurrencyRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'income_type' => 'getIncomeType',
        'pay_type_id' => 'getPayTypeId',
        'account_id' => 'getAccountId',
        'settlement_id' => 'getSettlementId',
        'online_pay_type' => 'getOnlinePayType',
        'settle_amt' => 'getSettleAmt',
        'settle_currency_amt' => 'getSettleCurrencyAmt',
        'settle_currency_code' => 'getSettleCurrencyCode',
        'settle_currency_name' => 'getSettleCurrencyName',
        'settle_currency_rate' => 'getSettleCurrencyRate'
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
        $this->container['income_type'] = isset($data['income_type']) ? $data['income_type'] : null;
        $this->container['pay_type_id'] = isset($data['pay_type_id']) ? $data['pay_type_id'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['settlement_id'] = isset($data['settlement_id']) ? $data['settlement_id'] : null;
        $this->container['online_pay_type'] = isset($data['online_pay_type']) ? $data['online_pay_type'] : null;
        $this->container['settle_amt'] = isset($data['settle_amt']) ? $data['settle_amt'] : null;
        $this->container['settle_currency_amt'] = isset($data['settle_currency_amt']) ? $data['settle_currency_amt'] : null;
        $this->container['settle_currency_code'] = isset($data['settle_currency_code']) ? $data['settle_currency_code'] : null;
        $this->container['settle_currency_name'] = isset($data['settle_currency_name']) ? $data['settle_currency_name'] : null;
        $this->container['settle_currency_rate'] = isset($data['settle_currency_rate']) ? $data['settle_currency_rate'] : null;
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
     * Gets income_type
     *
     * @return string
     */
    public function getIncomeType()
    {
        return $this->container['income_type'];
    }

    /**
     * Sets income_type
     *
     * @param string $income_type income_type
     *
     * @return $this
     */
    public function setIncomeType($income_type)
    {
        $this->container['income_type'] = $income_type;

        return $this;
    }

    /**
     * Gets pay_type_id
     *
     * @return string
     */
    public function getPayTypeId()
    {
        return $this->container['pay_type_id'];
    }

    /**
     * Sets pay_type_id
     *
     * @param string $pay_type_id pay_type_id
     *
     * @return $this
     */
    public function setPayTypeId($pay_type_id)
    {
        $this->container['pay_type_id'] = $pay_type_id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets settlement_id
     *
     * @return string
     */
    public function getSettlementId()
    {
        return $this->container['settlement_id'];
    }

    /**
     * Sets settlement_id
     *
     * @param string $settlement_id settlement_id
     *
     * @return $this
     */
    public function setSettlementId($settlement_id)
    {
        $this->container['settlement_id'] = $settlement_id;

        return $this;
    }

    /**
     * Gets online_pay_type
     *
     * @return string
     */
    public function getOnlinePayType()
    {
        return $this->container['online_pay_type'];
    }

    /**
     * Sets online_pay_type
     *
     * @param string $online_pay_type online_pay_type
     *
     * @return $this
     */
    public function setOnlinePayType($online_pay_type)
    {
        $this->container['online_pay_type'] = $online_pay_type;

        return $this;
    }

    /**
     * Gets settle_amt
     *
     * @return string
     */
    public function getSettleAmt()
    {
        return $this->container['settle_amt'];
    }

    /**
     * Sets settle_amt
     *
     * @param string $settle_amt settle_amt
     *
     * @return $this
     */
    public function setSettleAmt($settle_amt)
    {
        $this->container['settle_amt'] = $settle_amt;

        return $this;
    }

    /**
     * Gets settle_currency_amt
     *
     * @return string
     */
    public function getSettleCurrencyAmt()
    {
        return $this->container['settle_currency_amt'];
    }

    /**
     * Sets settle_currency_amt
     *
     * @param string $settle_currency_amt settle_currency_amt
     *
     * @return $this
     */
    public function setSettleCurrencyAmt($settle_currency_amt)
    {
        $this->container['settle_currency_amt'] = $settle_currency_amt;

        return $this;
    }

    /**
     * Gets settle_currency_code
     *
     * @return string
     */
    public function getSettleCurrencyCode()
    {
        return $this->container['settle_currency_code'];
    }

    /**
     * Sets settle_currency_code
     *
     * @param string $settle_currency_code settle_currency_code
     *
     * @return $this
     */
    public function setSettleCurrencyCode($settle_currency_code)
    {
        $this->container['settle_currency_code'] = $settle_currency_code;

        return $this;
    }

    /**
     * Gets settle_currency_name
     *
     * @return string
     */
    public function getSettleCurrencyName()
    {
        return $this->container['settle_currency_name'];
    }

    /**
     * Sets settle_currency_name
     *
     * @param string $settle_currency_name settle_currency_name
     *
     * @return $this
     */
    public function setSettleCurrencyName($settle_currency_name)
    {
        $this->container['settle_currency_name'] = $settle_currency_name;

        return $this;
    }

    /**
     * Gets settle_currency_rate
     *
     * @return string
     */
    public function getSettleCurrencyRate()
    {
        return $this->container['settle_currency_rate'];
    }

    /**
     * Sets settle_currency_rate
     *
     * @param string $settle_currency_rate settle_currency_rate
     *
     * @return $this
     */
    public function setSettleCurrencyRate($settle_currency_rate)
    {
        $this->container['settle_currency_rate'] = $settle_currency_rate;

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


