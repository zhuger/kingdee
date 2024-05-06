<?php
/**
 * Auxentity
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
 * Auxentity Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Auxentity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Auxentity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'sku_id' => 'string',
        'sku_number' => 'string',
        'picture_url' => 'string',
        'aux_id1' => 'string',
        'aux_number1' => 'string',
        'aux_name1' => 'string',
        'aux_type_id1' => 'string',
        'aux_type_number1' => 'string',
        'aux_type_name1' => 'string',
        'aux_id2' => 'string',
        'aux_number2' => 'string',
        'aux_name2' => 'string',
        'aux_type_id2' => 'string',
        'aux_type_number2' => 'string',
        'aux_type_name2' => 'string',
        'aux_id3' => 'string',
        'aux_number3' => 'string',
        'aux_name3' => 'string',
        'aux_type_id3' => 'string',
        'aux_type_number3' => 'string',
        'aux_type_name3' => 'string',
        'aux_id4' => 'string',
        'aux_number4' => 'string',
        'aux_name4' => 'string',
        'aux_type_id4' => 'string',
        'aux_type_number4' => 'string',
        'aux_type_name4' => 'string',
        'aux_id5' => 'string',
        'aux_number5' => 'string',
        'aux_name5' => 'string',
        'aux_type_id5' => 'string',
        'aux_type_number5' => 'string',
        'aux_type_name5' => 'string',
        'aux_combination_name' => 'string',
        'concat_type_id' => 'string',
        'aux_enable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'sku_id' => null,
        'sku_number' => null,
        'picture_url' => null,
        'aux_id1' => null,
        'aux_number1' => null,
        'aux_name1' => null,
        'aux_type_id1' => null,
        'aux_type_number1' => null,
        'aux_type_name1' => null,
        'aux_id2' => null,
        'aux_number2' => null,
        'aux_name2' => null,
        'aux_type_id2' => null,
        'aux_type_number2' => null,
        'aux_type_name2' => null,
        'aux_id3' => null,
        'aux_number3' => null,
        'aux_name3' => null,
        'aux_type_id3' => null,
        'aux_type_number3' => null,
        'aux_type_name3' => null,
        'aux_id4' => null,
        'aux_number4' => null,
        'aux_name4' => null,
        'aux_type_id4' => null,
        'aux_type_number4' => null,
        'aux_type_name4' => null,
        'aux_id5' => null,
        'aux_number5' => null,
        'aux_name5' => null,
        'aux_type_id5' => null,
        'aux_type_number5' => null,
        'aux_type_name5' => null,
        'aux_combination_name' => null,
        'concat_type_id' => null,
        'aux_enable' => null
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
        'sku_id' => 'sku_id',
        'sku_number' => 'sku_number',
        'picture_url' => 'picture_url',
        'aux_id1' => 'aux_id1',
        'aux_number1' => 'aux_number1',
        'aux_name1' => 'aux_name1',
        'aux_type_id1' => 'aux_type_id1',
        'aux_type_number1' => 'aux_type_number1',
        'aux_type_name1' => 'aux_type_name1',
        'aux_id2' => 'aux_id2',
        'aux_number2' => 'aux_number2',
        'aux_name2' => 'aux_name2',
        'aux_type_id2' => 'aux_type_id2',
        'aux_type_number2' => 'aux_type_number2',
        'aux_type_name2' => 'aux_type_name2',
        'aux_id3' => 'aux_id3',
        'aux_number3' => 'aux_number3',
        'aux_name3' => 'aux_name3',
        'aux_type_id3' => 'aux_type_id3',
        'aux_type_number3' => 'aux_type_number3',
        'aux_type_name3' => 'aux_type_name3',
        'aux_id4' => 'aux_id4',
        'aux_number4' => 'aux_number4',
        'aux_name4' => 'aux_name4',
        'aux_type_id4' => 'aux_type_id4',
        'aux_type_number4' => 'aux_type_number4',
        'aux_type_name4' => 'aux_type_name4',
        'aux_id5' => 'aux_id5',
        'aux_number5' => 'aux_number5',
        'aux_name5' => 'aux_name5',
        'aux_type_id5' => 'aux_type_id5',
        'aux_type_number5' => 'aux_type_number5',
        'aux_type_name5' => 'aux_type_name5',
        'aux_combination_name' => 'aux_combination_name',
        'concat_type_id' => 'concat_type_id',
        'aux_enable' => 'aux_enable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sku_id' => 'setSkuId',
        'sku_number' => 'setSkuNumber',
        'picture_url' => 'setPictureUrl',
        'aux_id1' => 'setAuxId1',
        'aux_number1' => 'setAuxNumber1',
        'aux_name1' => 'setAuxName1',
        'aux_type_id1' => 'setAuxTypeId1',
        'aux_type_number1' => 'setAuxTypeNumber1',
        'aux_type_name1' => 'setAuxTypeName1',
        'aux_id2' => 'setAuxId2',
        'aux_number2' => 'setAuxNumber2',
        'aux_name2' => 'setAuxName2',
        'aux_type_id2' => 'setAuxTypeId2',
        'aux_type_number2' => 'setAuxTypeNumber2',
        'aux_type_name2' => 'setAuxTypeName2',
        'aux_id3' => 'setAuxId3',
        'aux_number3' => 'setAuxNumber3',
        'aux_name3' => 'setAuxName3',
        'aux_type_id3' => 'setAuxTypeId3',
        'aux_type_number3' => 'setAuxTypeNumber3',
        'aux_type_name3' => 'setAuxTypeName3',
        'aux_id4' => 'setAuxId4',
        'aux_number4' => 'setAuxNumber4',
        'aux_name4' => 'setAuxName4',
        'aux_type_id4' => 'setAuxTypeId4',
        'aux_type_number4' => 'setAuxTypeNumber4',
        'aux_type_name4' => 'setAuxTypeName4',
        'aux_id5' => 'setAuxId5',
        'aux_number5' => 'setAuxNumber5',
        'aux_name5' => 'setAuxName5',
        'aux_type_id5' => 'setAuxTypeId5',
        'aux_type_number5' => 'setAuxTypeNumber5',
        'aux_type_name5' => 'setAuxTypeName5',
        'aux_combination_name' => 'setAuxCombinationName',
        'concat_type_id' => 'setConcatTypeId',
        'aux_enable' => 'setAuxEnable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sku_id' => 'getSkuId',
        'sku_number' => 'getSkuNumber',
        'picture_url' => 'getPictureUrl',
        'aux_id1' => 'getAuxId1',
        'aux_number1' => 'getAuxNumber1',
        'aux_name1' => 'getAuxName1',
        'aux_type_id1' => 'getAuxTypeId1',
        'aux_type_number1' => 'getAuxTypeNumber1',
        'aux_type_name1' => 'getAuxTypeName1',
        'aux_id2' => 'getAuxId2',
        'aux_number2' => 'getAuxNumber2',
        'aux_name2' => 'getAuxName2',
        'aux_type_id2' => 'getAuxTypeId2',
        'aux_type_number2' => 'getAuxTypeNumber2',
        'aux_type_name2' => 'getAuxTypeName2',
        'aux_id3' => 'getAuxId3',
        'aux_number3' => 'getAuxNumber3',
        'aux_name3' => 'getAuxName3',
        'aux_type_id3' => 'getAuxTypeId3',
        'aux_type_number3' => 'getAuxTypeNumber3',
        'aux_type_name3' => 'getAuxTypeName3',
        'aux_id4' => 'getAuxId4',
        'aux_number4' => 'getAuxNumber4',
        'aux_name4' => 'getAuxName4',
        'aux_type_id4' => 'getAuxTypeId4',
        'aux_type_number4' => 'getAuxTypeNumber4',
        'aux_type_name4' => 'getAuxTypeName4',
        'aux_id5' => 'getAuxId5',
        'aux_number5' => 'getAuxNumber5',
        'aux_name5' => 'getAuxName5',
        'aux_type_id5' => 'getAuxTypeId5',
        'aux_type_number5' => 'getAuxTypeNumber5',
        'aux_type_name5' => 'getAuxTypeName5',
        'aux_combination_name' => 'getAuxCombinationName',
        'concat_type_id' => 'getConcatTypeId',
        'aux_enable' => 'getAuxEnable'
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
        $this->container['sku_id'] = isset($data['sku_id']) ? $data['sku_id'] : null;
        $this->container['sku_number'] = isset($data['sku_number']) ? $data['sku_number'] : null;
        $this->container['picture_url'] = isset($data['picture_url']) ? $data['picture_url'] : null;
        $this->container['aux_id1'] = isset($data['aux_id1']) ? $data['aux_id1'] : null;
        $this->container['aux_number1'] = isset($data['aux_number1']) ? $data['aux_number1'] : null;
        $this->container['aux_name1'] = isset($data['aux_name1']) ? $data['aux_name1'] : null;
        $this->container['aux_type_id1'] = isset($data['aux_type_id1']) ? $data['aux_type_id1'] : null;
        $this->container['aux_type_number1'] = isset($data['aux_type_number1']) ? $data['aux_type_number1'] : null;
        $this->container['aux_type_name1'] = isset($data['aux_type_name1']) ? $data['aux_type_name1'] : null;
        $this->container['aux_id2'] = isset($data['aux_id2']) ? $data['aux_id2'] : null;
        $this->container['aux_number2'] = isset($data['aux_number2']) ? $data['aux_number2'] : null;
        $this->container['aux_name2'] = isset($data['aux_name2']) ? $data['aux_name2'] : null;
        $this->container['aux_type_id2'] = isset($data['aux_type_id2']) ? $data['aux_type_id2'] : null;
        $this->container['aux_type_number2'] = isset($data['aux_type_number2']) ? $data['aux_type_number2'] : null;
        $this->container['aux_type_name2'] = isset($data['aux_type_name2']) ? $data['aux_type_name2'] : null;
        $this->container['aux_id3'] = isset($data['aux_id3']) ? $data['aux_id3'] : null;
        $this->container['aux_number3'] = isset($data['aux_number3']) ? $data['aux_number3'] : null;
        $this->container['aux_name3'] = isset($data['aux_name3']) ? $data['aux_name3'] : null;
        $this->container['aux_type_id3'] = isset($data['aux_type_id3']) ? $data['aux_type_id3'] : null;
        $this->container['aux_type_number3'] = isset($data['aux_type_number3']) ? $data['aux_type_number3'] : null;
        $this->container['aux_type_name3'] = isset($data['aux_type_name3']) ? $data['aux_type_name3'] : null;
        $this->container['aux_id4'] = isset($data['aux_id4']) ? $data['aux_id4'] : null;
        $this->container['aux_number4'] = isset($data['aux_number4']) ? $data['aux_number4'] : null;
        $this->container['aux_name4'] = isset($data['aux_name4']) ? $data['aux_name4'] : null;
        $this->container['aux_type_id4'] = isset($data['aux_type_id4']) ? $data['aux_type_id4'] : null;
        $this->container['aux_type_number4'] = isset($data['aux_type_number4']) ? $data['aux_type_number4'] : null;
        $this->container['aux_type_name4'] = isset($data['aux_type_name4']) ? $data['aux_type_name4'] : null;
        $this->container['aux_id5'] = isset($data['aux_id5']) ? $data['aux_id5'] : null;
        $this->container['aux_number5'] = isset($data['aux_number5']) ? $data['aux_number5'] : null;
        $this->container['aux_name5'] = isset($data['aux_name5']) ? $data['aux_name5'] : null;
        $this->container['aux_type_id5'] = isset($data['aux_type_id5']) ? $data['aux_type_id5'] : null;
        $this->container['aux_type_number5'] = isset($data['aux_type_number5']) ? $data['aux_type_number5'] : null;
        $this->container['aux_type_name5'] = isset($data['aux_type_name5']) ? $data['aux_type_name5'] : null;
        $this->container['aux_combination_name'] = isset($data['aux_combination_name']) ? $data['aux_combination_name'] : null;
        $this->container['concat_type_id'] = isset($data['concat_type_id']) ? $data['concat_type_id'] : null;
        $this->container['aux_enable'] = isset($data['aux_enable']) ? $data['aux_enable'] : null;
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
     * Gets sku_id
     *
     * @return string
     */
    public function getSkuId()
    {
        return $this->container['sku_id'];
    }

    /**
     * Sets sku_id
     *
     * @param string $sku_id sku_id
     *
     * @return $this
     */
    public function setSkuId($sku_id)
    {
        $this->container['sku_id'] = $sku_id;

        return $this;
    }

    /**
     * Gets sku_number
     *
     * @return string
     */
    public function getSkuNumber()
    {
        return $this->container['sku_number'];
    }

    /**
     * Sets sku_number
     *
     * @param string $sku_number sku_number
     *
     * @return $this
     */
    public function setSkuNumber($sku_number)
    {
        $this->container['sku_number'] = $sku_number;

        return $this;
    }

    /**
     * Gets picture_url
     *
     * @return string
     */
    public function getPictureUrl()
    {
        return $this->container['picture_url'];
    }

    /**
     * Sets picture_url
     *
     * @param string $picture_url picture_url
     *
     * @return $this
     */
    public function setPictureUrl($picture_url)
    {
        $this->container['picture_url'] = $picture_url;

        return $this;
    }

    /**
     * Gets aux_id1
     *
     * @return string
     */
    public function getAuxId1()
    {
        return $this->container['aux_id1'];
    }

    /**
     * Sets aux_id1
     *
     * @param string $aux_id1 aux_id1
     *
     * @return $this
     */
    public function setAuxId1($aux_id1)
    {
        $this->container['aux_id1'] = $aux_id1;

        return $this;
    }

    /**
     * Gets aux_number1
     *
     * @return string
     */
    public function getAuxNumber1()
    {
        return $this->container['aux_number1'];
    }

    /**
     * Sets aux_number1
     *
     * @param string $aux_number1 aux_number1
     *
     * @return $this
     */
    public function setAuxNumber1($aux_number1)
    {
        $this->container['aux_number1'] = $aux_number1;

        return $this;
    }

    /**
     * Gets aux_name1
     *
     * @return string
     */
    public function getAuxName1()
    {
        return $this->container['aux_name1'];
    }

    /**
     * Sets aux_name1
     *
     * @param string $aux_name1 aux_name1
     *
     * @return $this
     */
    public function setAuxName1($aux_name1)
    {
        $this->container['aux_name1'] = $aux_name1;

        return $this;
    }

    /**
     * Gets aux_type_id1
     *
     * @return string
     */
    public function getAuxTypeId1()
    {
        return $this->container['aux_type_id1'];
    }

    /**
     * Sets aux_type_id1
     *
     * @param string $aux_type_id1 aux_type_id1
     *
     * @return $this
     */
    public function setAuxTypeId1($aux_type_id1)
    {
        $this->container['aux_type_id1'] = $aux_type_id1;

        return $this;
    }

    /**
     * Gets aux_type_number1
     *
     * @return string
     */
    public function getAuxTypeNumber1()
    {
        return $this->container['aux_type_number1'];
    }

    /**
     * Sets aux_type_number1
     *
     * @param string $aux_type_number1 aux_type_number1
     *
     * @return $this
     */
    public function setAuxTypeNumber1($aux_type_number1)
    {
        $this->container['aux_type_number1'] = $aux_type_number1;

        return $this;
    }

    /**
     * Gets aux_type_name1
     *
     * @return string
     */
    public function getAuxTypeName1()
    {
        return $this->container['aux_type_name1'];
    }

    /**
     * Sets aux_type_name1
     *
     * @param string $aux_type_name1 aux_type_name1
     *
     * @return $this
     */
    public function setAuxTypeName1($aux_type_name1)
    {
        $this->container['aux_type_name1'] = $aux_type_name1;

        return $this;
    }

    /**
     * Gets aux_id2
     *
     * @return string
     */
    public function getAuxId2()
    {
        return $this->container['aux_id2'];
    }

    /**
     * Sets aux_id2
     *
     * @param string $aux_id2 aux_id2
     *
     * @return $this
     */
    public function setAuxId2($aux_id2)
    {
        $this->container['aux_id2'] = $aux_id2;

        return $this;
    }

    /**
     * Gets aux_number2
     *
     * @return string
     */
    public function getAuxNumber2()
    {
        return $this->container['aux_number2'];
    }

    /**
     * Sets aux_number2
     *
     * @param string $aux_number2 aux_number2
     *
     * @return $this
     */
    public function setAuxNumber2($aux_number2)
    {
        $this->container['aux_number2'] = $aux_number2;

        return $this;
    }

    /**
     * Gets aux_name2
     *
     * @return string
     */
    public function getAuxName2()
    {
        return $this->container['aux_name2'];
    }

    /**
     * Sets aux_name2
     *
     * @param string $aux_name2 aux_name2
     *
     * @return $this
     */
    public function setAuxName2($aux_name2)
    {
        $this->container['aux_name2'] = $aux_name2;

        return $this;
    }

    /**
     * Gets aux_type_id2
     *
     * @return string
     */
    public function getAuxTypeId2()
    {
        return $this->container['aux_type_id2'];
    }

    /**
     * Sets aux_type_id2
     *
     * @param string $aux_type_id2 aux_type_id2
     *
     * @return $this
     */
    public function setAuxTypeId2($aux_type_id2)
    {
        $this->container['aux_type_id2'] = $aux_type_id2;

        return $this;
    }

    /**
     * Gets aux_type_number2
     *
     * @return string
     */
    public function getAuxTypeNumber2()
    {
        return $this->container['aux_type_number2'];
    }

    /**
     * Sets aux_type_number2
     *
     * @param string $aux_type_number2 aux_type_number2
     *
     * @return $this
     */
    public function setAuxTypeNumber2($aux_type_number2)
    {
        $this->container['aux_type_number2'] = $aux_type_number2;

        return $this;
    }

    /**
     * Gets aux_type_name2
     *
     * @return string
     */
    public function getAuxTypeName2()
    {
        return $this->container['aux_type_name2'];
    }

    /**
     * Sets aux_type_name2
     *
     * @param string $aux_type_name2 aux_type_name2
     *
     * @return $this
     */
    public function setAuxTypeName2($aux_type_name2)
    {
        $this->container['aux_type_name2'] = $aux_type_name2;

        return $this;
    }

    /**
     * Gets aux_id3
     *
     * @return string
     */
    public function getAuxId3()
    {
        return $this->container['aux_id3'];
    }

    /**
     * Sets aux_id3
     *
     * @param string $aux_id3 aux_id3
     *
     * @return $this
     */
    public function setAuxId3($aux_id3)
    {
        $this->container['aux_id3'] = $aux_id3;

        return $this;
    }

    /**
     * Gets aux_number3
     *
     * @return string
     */
    public function getAuxNumber3()
    {
        return $this->container['aux_number3'];
    }

    /**
     * Sets aux_number3
     *
     * @param string $aux_number3 aux_number3
     *
     * @return $this
     */
    public function setAuxNumber3($aux_number3)
    {
        $this->container['aux_number3'] = $aux_number3;

        return $this;
    }

    /**
     * Gets aux_name3
     *
     * @return string
     */
    public function getAuxName3()
    {
        return $this->container['aux_name3'];
    }

    /**
     * Sets aux_name3
     *
     * @param string $aux_name3 aux_name3
     *
     * @return $this
     */
    public function setAuxName3($aux_name3)
    {
        $this->container['aux_name3'] = $aux_name3;

        return $this;
    }

    /**
     * Gets aux_type_id3
     *
     * @return string
     */
    public function getAuxTypeId3()
    {
        return $this->container['aux_type_id3'];
    }

    /**
     * Sets aux_type_id3
     *
     * @param string $aux_type_id3 aux_type_id3
     *
     * @return $this
     */
    public function setAuxTypeId3($aux_type_id3)
    {
        $this->container['aux_type_id3'] = $aux_type_id3;

        return $this;
    }

    /**
     * Gets aux_type_number3
     *
     * @return string
     */
    public function getAuxTypeNumber3()
    {
        return $this->container['aux_type_number3'];
    }

    /**
     * Sets aux_type_number3
     *
     * @param string $aux_type_number3 aux_type_number3
     *
     * @return $this
     */
    public function setAuxTypeNumber3($aux_type_number3)
    {
        $this->container['aux_type_number3'] = $aux_type_number3;

        return $this;
    }

    /**
     * Gets aux_type_name3
     *
     * @return string
     */
    public function getAuxTypeName3()
    {
        return $this->container['aux_type_name3'];
    }

    /**
     * Sets aux_type_name3
     *
     * @param string $aux_type_name3 aux_type_name3
     *
     * @return $this
     */
    public function setAuxTypeName3($aux_type_name3)
    {
        $this->container['aux_type_name3'] = $aux_type_name3;

        return $this;
    }

    /**
     * Gets aux_id4
     *
     * @return string
     */
    public function getAuxId4()
    {
        return $this->container['aux_id4'];
    }

    /**
     * Sets aux_id4
     *
     * @param string $aux_id4 aux_id4
     *
     * @return $this
     */
    public function setAuxId4($aux_id4)
    {
        $this->container['aux_id4'] = $aux_id4;

        return $this;
    }

    /**
     * Gets aux_number4
     *
     * @return string
     */
    public function getAuxNumber4()
    {
        return $this->container['aux_number4'];
    }

    /**
     * Sets aux_number4
     *
     * @param string $aux_number4 aux_number4
     *
     * @return $this
     */
    public function setAuxNumber4($aux_number4)
    {
        $this->container['aux_number4'] = $aux_number4;

        return $this;
    }

    /**
     * Gets aux_name4
     *
     * @return string
     */
    public function getAuxName4()
    {
        return $this->container['aux_name4'];
    }

    /**
     * Sets aux_name4
     *
     * @param string $aux_name4 aux_name4
     *
     * @return $this
     */
    public function setAuxName4($aux_name4)
    {
        $this->container['aux_name4'] = $aux_name4;

        return $this;
    }

    /**
     * Gets aux_type_id4
     *
     * @return string
     */
    public function getAuxTypeId4()
    {
        return $this->container['aux_type_id4'];
    }

    /**
     * Sets aux_type_id4
     *
     * @param string $aux_type_id4 aux_type_id4
     *
     * @return $this
     */
    public function setAuxTypeId4($aux_type_id4)
    {
        $this->container['aux_type_id4'] = $aux_type_id4;

        return $this;
    }

    /**
     * Gets aux_type_number4
     *
     * @return string
     */
    public function getAuxTypeNumber4()
    {
        return $this->container['aux_type_number4'];
    }

    /**
     * Sets aux_type_number4
     *
     * @param string $aux_type_number4 aux_type_number4
     *
     * @return $this
     */
    public function setAuxTypeNumber4($aux_type_number4)
    {
        $this->container['aux_type_number4'] = $aux_type_number4;

        return $this;
    }

    /**
     * Gets aux_type_name4
     *
     * @return string
     */
    public function getAuxTypeName4()
    {
        return $this->container['aux_type_name4'];
    }

    /**
     * Sets aux_type_name4
     *
     * @param string $aux_type_name4 aux_type_name4
     *
     * @return $this
     */
    public function setAuxTypeName4($aux_type_name4)
    {
        $this->container['aux_type_name4'] = $aux_type_name4;

        return $this;
    }

    /**
     * Gets aux_id5
     *
     * @return string
     */
    public function getAuxId5()
    {
        return $this->container['aux_id5'];
    }

    /**
     * Sets aux_id5
     *
     * @param string $aux_id5 aux_id5
     *
     * @return $this
     */
    public function setAuxId5($aux_id5)
    {
        $this->container['aux_id5'] = $aux_id5;

        return $this;
    }

    /**
     * Gets aux_number5
     *
     * @return string
     */
    public function getAuxNumber5()
    {
        return $this->container['aux_number5'];
    }

    /**
     * Sets aux_number5
     *
     * @param string $aux_number5 aux_number5
     *
     * @return $this
     */
    public function setAuxNumber5($aux_number5)
    {
        $this->container['aux_number5'] = $aux_number5;

        return $this;
    }

    /**
     * Gets aux_name5
     *
     * @return string
     */
    public function getAuxName5()
    {
        return $this->container['aux_name5'];
    }

    /**
     * Sets aux_name5
     *
     * @param string $aux_name5 aux_name5
     *
     * @return $this
     */
    public function setAuxName5($aux_name5)
    {
        $this->container['aux_name5'] = $aux_name5;

        return $this;
    }

    /**
     * Gets aux_type_id5
     *
     * @return string
     */
    public function getAuxTypeId5()
    {
        return $this->container['aux_type_id5'];
    }

    /**
     * Sets aux_type_id5
     *
     * @param string $aux_type_id5 aux_type_id5
     *
     * @return $this
     */
    public function setAuxTypeId5($aux_type_id5)
    {
        $this->container['aux_type_id5'] = $aux_type_id5;

        return $this;
    }

    /**
     * Gets aux_type_number5
     *
     * @return string
     */
    public function getAuxTypeNumber5()
    {
        return $this->container['aux_type_number5'];
    }

    /**
     * Sets aux_type_number5
     *
     * @param string $aux_type_number5 aux_type_number5
     *
     * @return $this
     */
    public function setAuxTypeNumber5($aux_type_number5)
    {
        $this->container['aux_type_number5'] = $aux_type_number5;

        return $this;
    }

    /**
     * Gets aux_type_name5
     *
     * @return string
     */
    public function getAuxTypeName5()
    {
        return $this->container['aux_type_name5'];
    }

    /**
     * Sets aux_type_name5
     *
     * @param string $aux_type_name5 aux_type_name5
     *
     * @return $this
     */
    public function setAuxTypeName5($aux_type_name5)
    {
        $this->container['aux_type_name5'] = $aux_type_name5;

        return $this;
    }

    /**
     * Gets aux_combination_name
     *
     * @return string
     */
    public function getAuxCombinationName()
    {
        return $this->container['aux_combination_name'];
    }

    /**
     * Sets aux_combination_name
     *
     * @param string $aux_combination_name aux_combination_name
     *
     * @return $this
     */
    public function setAuxCombinationName($aux_combination_name)
    {
        $this->container['aux_combination_name'] = $aux_combination_name;

        return $this;
    }

    /**
     * Gets concat_type_id
     *
     * @return string
     */
    public function getConcatTypeId()
    {
        return $this->container['concat_type_id'];
    }

    /**
     * Sets concat_type_id
     *
     * @param string $concat_type_id concat_type_id
     *
     * @return $this
     */
    public function setConcatTypeId($concat_type_id)
    {
        $this->container['concat_type_id'] = $concat_type_id;

        return $this;
    }

    /**
     * Gets aux_enable
     *
     * @return bool
     */
    public function getAuxEnable()
    {
        return $this->container['aux_enable'];
    }

    /**
     * Sets aux_enable
     *
     * @param bool $aux_enable aux_enable
     *
     * @return $this
     */
    public function setAuxEnable($aux_enable)
    {
        $this->container['aux_enable'] = $aux_enable;

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


