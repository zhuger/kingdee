<?php
/**
 * MemberSaveReq
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
 * MemberSaveReq Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MemberSaveReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MemberSaveReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mobile' => 'string',
        'name' => 'string',
        'label' => 'string[]',
        'customer' => 'string',
        'source' => 'string',
        'join_way' => 'string',
        'referrere_mp' => 'string',
        'mbcard_id' => 'string',
        'sex_group' => 'string',
        'birthday' => 'string',
        'remark' => 'string',
        'address' => 'string',
        'detail_address' => 'string',
        'enable' => 'string',
        'is_delete' => 'string',
        'level' => 'string',
        'shop' => 'string',
        'custom_no' => 'string',
        'period' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'sale_shop' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mobile' => null,
        'name' => null,
        'label' => null,
        'customer' => null,
        'source' => null,
        'join_way' => null,
        'referrere_mp' => null,
        'mbcard_id' => null,
        'sex_group' => null,
        'birthday' => null,
        'remark' => null,
        'address' => null,
        'detail_address' => null,
        'enable' => null,
        'is_delete' => null,
        'level' => null,
        'shop' => null,
        'custom_no' => null,
        'period' => null,
        'start_date' => null,
        'end_date' => null,
        'sale_shop' => null
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
        'mobile' => 'mobile',
        'name' => 'name',
        'label' => 'label',
        'customer' => 'customer',
        'source' => 'source',
        'join_way' => 'join_way',
        'referrere_mp' => 'referrere_mp',
        'mbcard_id' => 'mbcard_id',
        'sex_group' => 'sex_group',
        'birthday' => 'birthday',
        'remark' => 'remark',
        'address' => 'address',
        'detail_address' => 'detail_address',
        'enable' => 'enable',
        'is_delete' => 'is_delete',
        'level' => 'level',
        'shop' => 'shop',
        'custom_no' => 'custom_no',
        'period' => 'period',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'sale_shop' => 'sale_shop'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mobile' => 'setMobile',
        'name' => 'setName',
        'label' => 'setLabel',
        'customer' => 'setCustomer',
        'source' => 'setSource',
        'join_way' => 'setJoinWay',
        'referrere_mp' => 'setReferrereMp',
        'mbcard_id' => 'setMbcardId',
        'sex_group' => 'setSexGroup',
        'birthday' => 'setBirthday',
        'remark' => 'setRemark',
        'address' => 'setAddress',
        'detail_address' => 'setDetailAddress',
        'enable' => 'setEnable',
        'is_delete' => 'setIsDelete',
        'level' => 'setLevel',
        'shop' => 'setShop',
        'custom_no' => 'setCustomNo',
        'period' => 'setPeriod',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'sale_shop' => 'setSaleShop'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mobile' => 'getMobile',
        'name' => 'getName',
        'label' => 'getLabel',
        'customer' => 'getCustomer',
        'source' => 'getSource',
        'join_way' => 'getJoinWay',
        'referrere_mp' => 'getReferrereMp',
        'mbcard_id' => 'getMbcardId',
        'sex_group' => 'getSexGroup',
        'birthday' => 'getBirthday',
        'remark' => 'getRemark',
        'address' => 'getAddress',
        'detail_address' => 'getDetailAddress',
        'enable' => 'getEnable',
        'is_delete' => 'getIsDelete',
        'level' => 'getLevel',
        'shop' => 'getShop',
        'custom_no' => 'getCustomNo',
        'period' => 'getPeriod',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'sale_shop' => 'getSaleShop'
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
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['join_way'] = isset($data['join_way']) ? $data['join_way'] : null;
        $this->container['referrere_mp'] = isset($data['referrere_mp']) ? $data['referrere_mp'] : null;
        $this->container['mbcard_id'] = isset($data['mbcard_id']) ? $data['mbcard_id'] : null;
        $this->container['sex_group'] = isset($data['sex_group']) ? $data['sex_group'] : null;
        $this->container['birthday'] = isset($data['birthday']) ? $data['birthday'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['detail_address'] = isset($data['detail_address']) ? $data['detail_address'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['is_delete'] = isset($data['is_delete']) ? $data['is_delete'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['shop'] = isset($data['shop']) ? $data['shop'] : null;
        $this->container['custom_no'] = isset($data['custom_no']) ? $data['custom_no'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['sale_shop'] = isset($data['sale_shop']) ? $data['sale_shop'] : null;
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
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string $mobile mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

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
     * Gets label
     *
     * @return string[]
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string[] $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return string
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param string $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets join_way
     *
     * @return string
     */
    public function getJoinWay()
    {
        return $this->container['join_way'];
    }

    /**
     * Sets join_way
     *
     * @param string $join_way join_way
     *
     * @return $this
     */
    public function setJoinWay($join_way)
    {
        $this->container['join_way'] = $join_way;

        return $this;
    }

    /**
     * Gets referrere_mp
     *
     * @return string
     */
    public function getReferrereMp()
    {
        return $this->container['referrere_mp'];
    }

    /**
     * Sets referrere_mp
     *
     * @param string $referrere_mp referrere_mp
     *
     * @return $this
     */
    public function setReferrereMp($referrere_mp)
    {
        $this->container['referrere_mp'] = $referrere_mp;

        return $this;
    }

    /**
     * Gets mbcard_id
     *
     * @return string
     */
    public function getMbcardId()
    {
        return $this->container['mbcard_id'];
    }

    /**
     * Sets mbcard_id
     *
     * @param string $mbcard_id mbcard_id
     *
     * @return $this
     */
    public function setMbcardId($mbcard_id)
    {
        $this->container['mbcard_id'] = $mbcard_id;

        return $this;
    }

    /**
     * Gets sex_group
     *
     * @return string
     */
    public function getSexGroup()
    {
        return $this->container['sex_group'];
    }

    /**
     * Sets sex_group
     *
     * @param string $sex_group sex_group
     *
     * @return $this
     */
    public function setSexGroup($sex_group)
    {
        $this->container['sex_group'] = $sex_group;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return string
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param string $birthday birthday
     *
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets detail_address
     *
     * @return string
     */
    public function getDetailAddress()
    {
        return $this->container['detail_address'];
    }

    /**
     * Sets detail_address
     *
     * @param string $detail_address detail_address
     *
     * @return $this
     */
    public function setDetailAddress($detail_address)
    {
        $this->container['detail_address'] = $detail_address;

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
     * Gets is_delete
     *
     * @return string
     */
    public function getIsDelete()
    {
        return $this->container['is_delete'];
    }

    /**
     * Sets is_delete
     *
     * @param string $is_delete is_delete
     *
     * @return $this
     */
    public function setIsDelete($is_delete)
    {
        $this->container['is_delete'] = $is_delete;

        return $this;
    }

    /**
     * Gets level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string $level level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets shop
     *
     * @return string
     */
    public function getShop()
    {
        return $this->container['shop'];
    }

    /**
     * Sets shop
     *
     * @param string $shop shop
     *
     * @return $this
     */
    public function setShop($shop)
    {
        $this->container['shop'] = $shop;

        return $this;
    }

    /**
     * Gets custom_no
     *
     * @return string
     */
    public function getCustomNo()
    {
        return $this->container['custom_no'];
    }

    /**
     * Sets custom_no
     *
     * @param string $custom_no custom_no
     *
     * @return $this
     */
    public function setCustomNo($custom_no)
    {
        $this->container['custom_no'] = $custom_no;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string $period period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets sale_shop
     *
     * @return string
     */
    public function getSaleShop()
    {
        return $this->container['sale_shop'];
    }

    /**
     * Sets sale_shop
     *
     * @param string $sale_shop sale_shop
     *
     * @return $this
     */
    public function setSaleShop($sale_shop)
    {
        $this->container['sale_shop'] = $sale_shop;

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

