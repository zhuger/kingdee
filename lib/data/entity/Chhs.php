<?php
/**
 * Chhs
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
 * Chhs Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Chhs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Chhs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_by_param' => 'bool',
        'order_by_cost' => 'bool',
        'valua_method' => 'string',
        'batch_number' => 'bool',
        'serial_number' => 'bool',
        'assat_tribute' => 'bool',
        'radio_field2' => 'bool',
        'radio_field3' => 'bool',
        'navall' => 'bool',
        'nav_first_field' => 'bool',
        'nav_sec_field' => 'bool',
        'nav_third_field' => 'bool',
        'nav_forth_field' => 'bool',
        'retall' => 'bool',
        'ret_first_field' => 'bool',
        'ret_sec_field' => 'bool',
        'ret_third_field' => 'bool',
        'ret_forth_field' => 'bool',
        'radio_field12' => 'bool',
        'radio_field1' => 'bool',
        'enable_close_account_cost' => 'bool',
        'not_create_voucher_bill' => 'bool',
        'nagative' => 'string',
        'param_nagative' => 'string',
        'return' => 'string',
        'param_return' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_by_param' => null,
        'order_by_cost' => null,
        'valua_method' => null,
        'batch_number' => null,
        'serial_number' => null,
        'assat_tribute' => null,
        'radio_field2' => null,
        'radio_field3' => null,
        'navall' => null,
        'nav_first_field' => null,
        'nav_sec_field' => null,
        'nav_third_field' => null,
        'nav_forth_field' => null,
        'retall' => null,
        'ret_first_field' => null,
        'ret_sec_field' => null,
        'ret_third_field' => null,
        'ret_forth_field' => null,
        'radio_field12' => null,
        'radio_field1' => null,
        'enable_close_account_cost' => null,
        'not_create_voucher_bill' => null,
        'nagative' => null,
        'param_nagative' => null,
        'return' => null,
        'param_return' => null
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
        'order_by_param' => 'order_by_param',
        'order_by_cost' => 'order_by_cost',
        'valua_method' => 'valua_method',
        'batch_number' => 'batch_number',
        'serial_number' => 'serial_number',
        'assat_tribute' => 'assat_tribute',
        'radio_field2' => 'radio_field2',
        'radio_field3' => 'radio_field3',
        'navall' => 'navall',
        'nav_first_field' => 'nav_first_field',
        'nav_sec_field' => 'nav_sec_field',
        'nav_third_field' => 'nav_third_field',
        'nav_forth_field' => 'nav_forth_field',
        'retall' => 'retall',
        'ret_first_field' => 'ret_first_field',
        'ret_sec_field' => 'ret_sec_field',
        'ret_third_field' => 'ret_third_field',
        'ret_forth_field' => 'ret_forth_field',
        'radio_field12' => 'radio_field12',
        'radio_field1' => 'radio_field1',
        'enable_close_account_cost' => 'enable_close_account_cost',
        'not_create_voucher_bill' => 'not_create_voucher_bill',
        'nagative' => 'nagative',
        'param_nagative' => 'param_nagative',
        'return' => 'return',
        'param_return' => 'param_return'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_by_param' => 'setOrderByParam',
        'order_by_cost' => 'setOrderByCost',
        'valua_method' => 'setValuaMethod',
        'batch_number' => 'setBatchNumber',
        'serial_number' => 'setSerialNumber',
        'assat_tribute' => 'setAssatTribute',
        'radio_field2' => 'setRadioField2',
        'radio_field3' => 'setRadioField3',
        'navall' => 'setNavall',
        'nav_first_field' => 'setNavFirstField',
        'nav_sec_field' => 'setNavSecField',
        'nav_third_field' => 'setNavThirdField',
        'nav_forth_field' => 'setNavForthField',
        'retall' => 'setRetall',
        'ret_first_field' => 'setRetFirstField',
        'ret_sec_field' => 'setRetSecField',
        'ret_third_field' => 'setRetThirdField',
        'ret_forth_field' => 'setRetForthField',
        'radio_field12' => 'setRadioField12',
        'radio_field1' => 'setRadioField1',
        'enable_close_account_cost' => 'setEnableCloseAccountCost',
        'not_create_voucher_bill' => 'setNotCreateVoucherBill',
        'nagative' => 'setNagative',
        'param_nagative' => 'setParamNagative',
        'return' => 'setReturn',
        'param_return' => 'setParamReturn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_by_param' => 'getOrderByParam',
        'order_by_cost' => 'getOrderByCost',
        'valua_method' => 'getValuaMethod',
        'batch_number' => 'getBatchNumber',
        'serial_number' => 'getSerialNumber',
        'assat_tribute' => 'getAssatTribute',
        'radio_field2' => 'getRadioField2',
        'radio_field3' => 'getRadioField3',
        'navall' => 'getNavall',
        'nav_first_field' => 'getNavFirstField',
        'nav_sec_field' => 'getNavSecField',
        'nav_third_field' => 'getNavThirdField',
        'nav_forth_field' => 'getNavForthField',
        'retall' => 'getRetall',
        'ret_first_field' => 'getRetFirstField',
        'ret_sec_field' => 'getRetSecField',
        'ret_third_field' => 'getRetThirdField',
        'ret_forth_field' => 'getRetForthField',
        'radio_field12' => 'getRadioField12',
        'radio_field1' => 'getRadioField1',
        'enable_close_account_cost' => 'getEnableCloseAccountCost',
        'not_create_voucher_bill' => 'getNotCreateVoucherBill',
        'nagative' => 'getNagative',
        'param_nagative' => 'getParamNagative',
        'return' => 'getReturn',
        'param_return' => 'getParamReturn'
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
        $this->container['order_by_param'] = isset($data['order_by_param']) ? $data['order_by_param'] : null;
        $this->container['order_by_cost'] = isset($data['order_by_cost']) ? $data['order_by_cost'] : null;
        $this->container['valua_method'] = isset($data['valua_method']) ? $data['valua_method'] : null;
        $this->container['batch_number'] = isset($data['batch_number']) ? $data['batch_number'] : null;
        $this->container['serial_number'] = isset($data['serial_number']) ? $data['serial_number'] : null;
        $this->container['assat_tribute'] = isset($data['assat_tribute']) ? $data['assat_tribute'] : null;
        $this->container['radio_field2'] = isset($data['radio_field2']) ? $data['radio_field2'] : null;
        $this->container['radio_field3'] = isset($data['radio_field3']) ? $data['radio_field3'] : null;
        $this->container['navall'] = isset($data['navall']) ? $data['navall'] : null;
        $this->container['nav_first_field'] = isset($data['nav_first_field']) ? $data['nav_first_field'] : null;
        $this->container['nav_sec_field'] = isset($data['nav_sec_field']) ? $data['nav_sec_field'] : null;
        $this->container['nav_third_field'] = isset($data['nav_third_field']) ? $data['nav_third_field'] : null;
        $this->container['nav_forth_field'] = isset($data['nav_forth_field']) ? $data['nav_forth_field'] : null;
        $this->container['retall'] = isset($data['retall']) ? $data['retall'] : null;
        $this->container['ret_first_field'] = isset($data['ret_first_field']) ? $data['ret_first_field'] : null;
        $this->container['ret_sec_field'] = isset($data['ret_sec_field']) ? $data['ret_sec_field'] : null;
        $this->container['ret_third_field'] = isset($data['ret_third_field']) ? $data['ret_third_field'] : null;
        $this->container['ret_forth_field'] = isset($data['ret_forth_field']) ? $data['ret_forth_field'] : null;
        $this->container['radio_field12'] = isset($data['radio_field12']) ? $data['radio_field12'] : null;
        $this->container['radio_field1'] = isset($data['radio_field1']) ? $data['radio_field1'] : null;
        $this->container['enable_close_account_cost'] = isset($data['enable_close_account_cost']) ? $data['enable_close_account_cost'] : null;
        $this->container['not_create_voucher_bill'] = isset($data['not_create_voucher_bill']) ? $data['not_create_voucher_bill'] : null;
        $this->container['nagative'] = isset($data['nagative']) ? $data['nagative'] : null;
        $this->container['param_nagative'] = isset($data['param_nagative']) ? $data['param_nagative'] : null;
        $this->container['return'] = isset($data['return']) ? $data['return'] : null;
        $this->container['param_return'] = isset($data['param_return']) ? $data['param_return'] : null;
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
     * Gets order_by_param
     *
     * @return bool
     */
    public function getOrderByParam()
    {
        return $this->container['order_by_param'];
    }

    /**
     * Sets order_by_param
     *
     * @param bool $order_by_param order_by_param
     *
     * @return $this
     */
    public function setOrderByParam($order_by_param)
    {
        $this->container['order_by_param'] = $order_by_param;

        return $this;
    }

    /**
     * Gets order_by_cost
     *
     * @return bool
     */
    public function getOrderByCost()
    {
        return $this->container['order_by_cost'];
    }

    /**
     * Sets order_by_cost
     *
     * @param bool $order_by_cost order_by_cost
     *
     * @return $this
     */
    public function setOrderByCost($order_by_cost)
    {
        $this->container['order_by_cost'] = $order_by_cost;

        return $this;
    }

    /**
     * Gets valua_method
     *
     * @return string
     */
    public function getValuaMethod()
    {
        return $this->container['valua_method'];
    }

    /**
     * Sets valua_method
     *
     * @param string $valua_method valua_method
     *
     * @return $this
     */
    public function setValuaMethod($valua_method)
    {
        $this->container['valua_method'] = $valua_method;

        return $this;
    }

    /**
     * Gets batch_number
     *
     * @return bool
     */
    public function getBatchNumber()
    {
        return $this->container['batch_number'];
    }

    /**
     * Sets batch_number
     *
     * @param bool $batch_number batch_number
     *
     * @return $this
     */
    public function setBatchNumber($batch_number)
    {
        $this->container['batch_number'] = $batch_number;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return bool
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param bool $serial_number serial_number
     *
     * @return $this
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets assat_tribute
     *
     * @return bool
     */
    public function getAssatTribute()
    {
        return $this->container['assat_tribute'];
    }

    /**
     * Sets assat_tribute
     *
     * @param bool $assat_tribute assat_tribute
     *
     * @return $this
     */
    public function setAssatTribute($assat_tribute)
    {
        $this->container['assat_tribute'] = $assat_tribute;

        return $this;
    }

    /**
     * Gets radio_field2
     *
     * @return bool
     */
    public function getRadioField2()
    {
        return $this->container['radio_field2'];
    }

    /**
     * Sets radio_field2
     *
     * @param bool $radio_field2 radio_field2
     *
     * @return $this
     */
    public function setRadioField2($radio_field2)
    {
        $this->container['radio_field2'] = $radio_field2;

        return $this;
    }

    /**
     * Gets radio_field3
     *
     * @return bool
     */
    public function getRadioField3()
    {
        return $this->container['radio_field3'];
    }

    /**
     * Sets radio_field3
     *
     * @param bool $radio_field3 radio_field3
     *
     * @return $this
     */
    public function setRadioField3($radio_field3)
    {
        $this->container['radio_field3'] = $radio_field3;

        return $this;
    }

    /**
     * Gets navall
     *
     * @return bool
     */
    public function getNavall()
    {
        return $this->container['navall'];
    }

    /**
     * Sets navall
     *
     * @param bool $navall navall
     *
     * @return $this
     */
    public function setNavall($navall)
    {
        $this->container['navall'] = $navall;

        return $this;
    }

    /**
     * Gets nav_first_field
     *
     * @return bool
     */
    public function getNavFirstField()
    {
        return $this->container['nav_first_field'];
    }

    /**
     * Sets nav_first_field
     *
     * @param bool $nav_first_field nav_first_field
     *
     * @return $this
     */
    public function setNavFirstField($nav_first_field)
    {
        $this->container['nav_first_field'] = $nav_first_field;

        return $this;
    }

    /**
     * Gets nav_sec_field
     *
     * @return bool
     */
    public function getNavSecField()
    {
        return $this->container['nav_sec_field'];
    }

    /**
     * Sets nav_sec_field
     *
     * @param bool $nav_sec_field nav_sec_field
     *
     * @return $this
     */
    public function setNavSecField($nav_sec_field)
    {
        $this->container['nav_sec_field'] = $nav_sec_field;

        return $this;
    }

    /**
     * Gets nav_third_field
     *
     * @return bool
     */
    public function getNavThirdField()
    {
        return $this->container['nav_third_field'];
    }

    /**
     * Sets nav_third_field
     *
     * @param bool $nav_third_field nav_third_field
     *
     * @return $this
     */
    public function setNavThirdField($nav_third_field)
    {
        $this->container['nav_third_field'] = $nav_third_field;

        return $this;
    }

    /**
     * Gets nav_forth_field
     *
     * @return bool
     */
    public function getNavForthField()
    {
        return $this->container['nav_forth_field'];
    }

    /**
     * Sets nav_forth_field
     *
     * @param bool $nav_forth_field nav_forth_field
     *
     * @return $this
     */
    public function setNavForthField($nav_forth_field)
    {
        $this->container['nav_forth_field'] = $nav_forth_field;

        return $this;
    }

    /**
     * Gets retall
     *
     * @return bool
     */
    public function getRetall()
    {
        return $this->container['retall'];
    }

    /**
     * Sets retall
     *
     * @param bool $retall retall
     *
     * @return $this
     */
    public function setRetall($retall)
    {
        $this->container['retall'] = $retall;

        return $this;
    }

    /**
     * Gets ret_first_field
     *
     * @return bool
     */
    public function getRetFirstField()
    {
        return $this->container['ret_first_field'];
    }

    /**
     * Sets ret_first_field
     *
     * @param bool $ret_first_field ret_first_field
     *
     * @return $this
     */
    public function setRetFirstField($ret_first_field)
    {
        $this->container['ret_first_field'] = $ret_first_field;

        return $this;
    }

    /**
     * Gets ret_sec_field
     *
     * @return bool
     */
    public function getRetSecField()
    {
        return $this->container['ret_sec_field'];
    }

    /**
     * Sets ret_sec_field
     *
     * @param bool $ret_sec_field ret_sec_field
     *
     * @return $this
     */
    public function setRetSecField($ret_sec_field)
    {
        $this->container['ret_sec_field'] = $ret_sec_field;

        return $this;
    }

    /**
     * Gets ret_third_field
     *
     * @return bool
     */
    public function getRetThirdField()
    {
        return $this->container['ret_third_field'];
    }

    /**
     * Sets ret_third_field
     *
     * @param bool $ret_third_field ret_third_field
     *
     * @return $this
     */
    public function setRetThirdField($ret_third_field)
    {
        $this->container['ret_third_field'] = $ret_third_field;

        return $this;
    }

    /**
     * Gets ret_forth_field
     *
     * @return bool
     */
    public function getRetForthField()
    {
        return $this->container['ret_forth_field'];
    }

    /**
     * Sets ret_forth_field
     *
     * @param bool $ret_forth_field ret_forth_field
     *
     * @return $this
     */
    public function setRetForthField($ret_forth_field)
    {
        $this->container['ret_forth_field'] = $ret_forth_field;

        return $this;
    }

    /**
     * Gets radio_field12
     *
     * @return bool
     */
    public function getRadioField12()
    {
        return $this->container['radio_field12'];
    }

    /**
     * Sets radio_field12
     *
     * @param bool $radio_field12 radio_field12
     *
     * @return $this
     */
    public function setRadioField12($radio_field12)
    {
        $this->container['radio_field12'] = $radio_field12;

        return $this;
    }

    /**
     * Gets radio_field1
     *
     * @return bool
     */
    public function getRadioField1()
    {
        return $this->container['radio_field1'];
    }

    /**
     * Sets radio_field1
     *
     * @param bool $radio_field1 radio_field1
     *
     * @return $this
     */
    public function setRadioField1($radio_field1)
    {
        $this->container['radio_field1'] = $radio_field1;

        return $this;
    }

    /**
     * Gets enable_close_account_cost
     *
     * @return bool
     */
    public function getEnableCloseAccountCost()
    {
        return $this->container['enable_close_account_cost'];
    }

    /**
     * Sets enable_close_account_cost
     *
     * @param bool $enable_close_account_cost enable_close_account_cost
     *
     * @return $this
     */
    public function setEnableCloseAccountCost($enable_close_account_cost)
    {
        $this->container['enable_close_account_cost'] = $enable_close_account_cost;

        return $this;
    }

    /**
     * Gets not_create_voucher_bill
     *
     * @return bool
     */
    public function getNotCreateVoucherBill()
    {
        return $this->container['not_create_voucher_bill'];
    }

    /**
     * Sets not_create_voucher_bill
     *
     * @param bool $not_create_voucher_bill not_create_voucher_bill
     *
     * @return $this
     */
    public function setNotCreateVoucherBill($not_create_voucher_bill)
    {
        $this->container['not_create_voucher_bill'] = $not_create_voucher_bill;

        return $this;
    }

    /**
     * Gets nagative
     *
     * @return string
     */
    public function getNagative()
    {
        return $this->container['nagative'];
    }

    /**
     * Sets nagative
     *
     * @param string $nagative nagative
     *
     * @return $this
     */
    public function setNagative($nagative)
    {
        $this->container['nagative'] = $nagative;

        return $this;
    }

    /**
     * Gets param_nagative
     *
     * @return string
     */
    public function getParamNagative()
    {
        return $this->container['param_nagative'];
    }

    /**
     * Sets param_nagative
     *
     * @param string $param_nagative param_nagative
     *
     * @return $this
     */
    public function setParamNagative($param_nagative)
    {
        $this->container['param_nagative'] = $param_nagative;

        return $this;
    }

    /**
     * Gets return
     *
     * @return string
     */
    public function getReturn()
    {
        return $this->container['return'];
    }

    /**
     * Sets return
     *
     * @param string $return return
     *
     * @return $this
     */
    public function setReturn($return)
    {
        $this->container['return'] = $return;

        return $this;
    }

    /**
     * Gets param_return
     *
     * @return string
     */
    public function getParamReturn()
    {
        return $this->container['param_return'];
    }

    /**
     * Sets param_return
     *
     * @param string $param_return param_return
     *
     * @return $this
     */
    public function setParamReturn($param_return)
    {
        $this->container['param_return'] = $param_return;

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


