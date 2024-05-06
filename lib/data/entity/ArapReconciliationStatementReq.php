<?php
/**
 * ArapReconciliationStatementReq
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
 * ArapReconciliationStatementReq Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ArapReconciliationStatementReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Arap_reconciliationStatementReq';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'end_date' => 'string',
        'item_group_ids' => 'string[]',
        'not_view_zero' => 'bool',
        'dept_ids' => 'string[]',
        'include_uncheck' => 'bool',
        'include_oth' => 'bool',
        'is_show_settle_src_bill' => 'bool',
        'report_entity' => 'string',
        'emp_ids' => 'string[]',
        'is_show_ls' => 'bool',
        'is_not_show_settle_bill' => 'bool',
        'is_only_show_total' => 'bool',
        'item_ids' => 'string[]',
        'is_not_show_total' => 'bool',
        'start_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'end_date' => null,
        'item_group_ids' => null,
        'not_view_zero' => null,
        'dept_ids' => null,
        'include_uncheck' => null,
        'include_oth' => null,
        'is_show_settle_src_bill' => null,
        'report_entity' => null,
        'emp_ids' => null,
        'is_show_ls' => null,
        'is_not_show_settle_bill' => null,
        'is_only_show_total' => null,
        'item_ids' => null,
        'is_not_show_total' => null,
        'start_date' => null
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
        'end_date' => 'end_date',
        'item_group_ids' => 'item_group_ids',
        'not_view_zero' => 'not_view_zero',
        'dept_ids' => 'dept_ids',
        'include_uncheck' => 'include_uncheck',
        'include_oth' => 'include_oth',
        'is_show_settle_src_bill' => 'is_show_settle_src_bill',
        'report_entity' => 'report_entity',
        'emp_ids' => 'emp_ids',
        'is_show_ls' => 'is_show_ls',
        'is_not_show_settle_bill' => 'is_not_show_settle_bill',
        'is_only_show_total' => 'is_only_show_total',
        'item_ids' => 'item_ids',
        'is_not_show_total' => 'is_not_show_total',
        'start_date' => 'start_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_date' => 'setEndDate',
        'item_group_ids' => 'setItemGroupIds',
        'not_view_zero' => 'setNotViewZero',
        'dept_ids' => 'setDeptIds',
        'include_uncheck' => 'setIncludeUncheck',
        'include_oth' => 'setIncludeOth',
        'is_show_settle_src_bill' => 'setIsShowSettleSrcBill',
        'report_entity' => 'setReportEntity',
        'emp_ids' => 'setEmpIds',
        'is_show_ls' => 'setIsShowLs',
        'is_not_show_settle_bill' => 'setIsNotShowSettleBill',
        'is_only_show_total' => 'setIsOnlyShowTotal',
        'item_ids' => 'setItemIds',
        'is_not_show_total' => 'setIsNotShowTotal',
        'start_date' => 'setStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_date' => 'getEndDate',
        'item_group_ids' => 'getItemGroupIds',
        'not_view_zero' => 'getNotViewZero',
        'dept_ids' => 'getDeptIds',
        'include_uncheck' => 'getIncludeUncheck',
        'include_oth' => 'getIncludeOth',
        'is_show_settle_src_bill' => 'getIsShowSettleSrcBill',
        'report_entity' => 'getReportEntity',
        'emp_ids' => 'getEmpIds',
        'is_show_ls' => 'getIsShowLs',
        'is_not_show_settle_bill' => 'getIsNotShowSettleBill',
        'is_only_show_total' => 'getIsOnlyShowTotal',
        'item_ids' => 'getItemIds',
        'is_not_show_total' => 'getIsNotShowTotal',
        'start_date' => 'getStartDate'
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
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['item_group_ids'] = isset($data['item_group_ids']) ? $data['item_group_ids'] : null;
        $this->container['not_view_zero'] = isset($data['not_view_zero']) ? $data['not_view_zero'] : null;
        $this->container['dept_ids'] = isset($data['dept_ids']) ? $data['dept_ids'] : null;
        $this->container['include_uncheck'] = isset($data['include_uncheck']) ? $data['include_uncheck'] : null;
        $this->container['include_oth'] = isset($data['include_oth']) ? $data['include_oth'] : null;
        $this->container['is_show_settle_src_bill'] = isset($data['is_show_settle_src_bill']) ? $data['is_show_settle_src_bill'] : null;
        $this->container['report_entity'] = isset($data['report_entity']) ? $data['report_entity'] : null;
        $this->container['emp_ids'] = isset($data['emp_ids']) ? $data['emp_ids'] : null;
        $this->container['is_show_ls'] = isset($data['is_show_ls']) ? $data['is_show_ls'] : null;
        $this->container['is_not_show_settle_bill'] = isset($data['is_not_show_settle_bill']) ? $data['is_not_show_settle_bill'] : null;
        $this->container['is_only_show_total'] = isset($data['is_only_show_total']) ? $data['is_only_show_total'] : null;
        $this->container['item_ids'] = isset($data['item_ids']) ? $data['item_ids'] : null;
        $this->container['is_not_show_total'] = isset($data['is_not_show_total']) ? $data['is_not_show_total'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
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
     * Gets item_group_ids
     *
     * @return string[]
     */
    public function getItemGroupIds()
    {
        return $this->container['item_group_ids'];
    }

    /**
     * Sets item_group_ids
     *
     * @param string[] $item_group_ids item_group_ids
     *
     * @return $this
     */
    public function setItemGroupIds($item_group_ids)
    {
        $this->container['item_group_ids'] = $item_group_ids;

        return $this;
    }

    /**
     * Gets not_view_zero
     *
     * @return bool
     */
    public function getNotViewZero()
    {
        return $this->container['not_view_zero'];
    }

    /**
     * Sets not_view_zero
     *
     * @param bool $not_view_zero not_view_zero
     *
     * @return $this
     */
    public function setNotViewZero($not_view_zero)
    {
        $this->container['not_view_zero'] = $not_view_zero;

        return $this;
    }

    /**
     * Gets dept_ids
     *
     * @return string[]
     */
    public function getDeptIds()
    {
        return $this->container['dept_ids'];
    }

    /**
     * Sets dept_ids
     *
     * @param string[] $dept_ids dept_ids
     *
     * @return $this
     */
    public function setDeptIds($dept_ids)
    {
        $this->container['dept_ids'] = $dept_ids;

        return $this;
    }

    /**
     * Gets include_uncheck
     *
     * @return bool
     */
    public function getIncludeUncheck()
    {
        return $this->container['include_uncheck'];
    }

    /**
     * Sets include_uncheck
     *
     * @param bool $include_uncheck include_uncheck
     *
     * @return $this
     */
    public function setIncludeUncheck($include_uncheck)
    {
        $this->container['include_uncheck'] = $include_uncheck;

        return $this;
    }

    /**
     * Gets include_oth
     *
     * @return bool
     */
    public function getIncludeOth()
    {
        return $this->container['include_oth'];
    }

    /**
     * Sets include_oth
     *
     * @param bool $include_oth include_oth
     *
     * @return $this
     */
    public function setIncludeOth($include_oth)
    {
        $this->container['include_oth'] = $include_oth;

        return $this;
    }

    /**
     * Gets is_show_settle_src_bill
     *
     * @return bool
     */
    public function getIsShowSettleSrcBill()
    {
        return $this->container['is_show_settle_src_bill'];
    }

    /**
     * Sets is_show_settle_src_bill
     *
     * @param bool $is_show_settle_src_bill is_show_settle_src_bill
     *
     * @return $this
     */
    public function setIsShowSettleSrcBill($is_show_settle_src_bill)
    {
        $this->container['is_show_settle_src_bill'] = $is_show_settle_src_bill;

        return $this;
    }

    /**
     * Gets report_entity
     *
     * @return string
     */
    public function getReportEntity()
    {
        return $this->container['report_entity'];
    }

    /**
     * Sets report_entity
     *
     * @param string $report_entity report_entity
     *
     * @return $this
     */
    public function setReportEntity($report_entity)
    {
        $this->container['report_entity'] = $report_entity;

        return $this;
    }

    /**
     * Gets emp_ids
     *
     * @return string[]
     */
    public function getEmpIds()
    {
        return $this->container['emp_ids'];
    }

    /**
     * Sets emp_ids
     *
     * @param string[] $emp_ids emp_ids
     *
     * @return $this
     */
    public function setEmpIds($emp_ids)
    {
        $this->container['emp_ids'] = $emp_ids;

        return $this;
    }

    /**
     * Gets is_show_ls
     *
     * @return bool
     */
    public function getIsShowLs()
    {
        return $this->container['is_show_ls'];
    }

    /**
     * Sets is_show_ls
     *
     * @param bool $is_show_ls is_show_ls
     *
     * @return $this
     */
    public function setIsShowLs($is_show_ls)
    {
        $this->container['is_show_ls'] = $is_show_ls;

        return $this;
    }

    /**
     * Gets is_not_show_settle_bill
     *
     * @return bool
     */
    public function getIsNotShowSettleBill()
    {
        return $this->container['is_not_show_settle_bill'];
    }

    /**
     * Sets is_not_show_settle_bill
     *
     * @param bool $is_not_show_settle_bill is_not_show_settle_bill
     *
     * @return $this
     */
    public function setIsNotShowSettleBill($is_not_show_settle_bill)
    {
        $this->container['is_not_show_settle_bill'] = $is_not_show_settle_bill;

        return $this;
    }

    /**
     * Gets is_only_show_total
     *
     * @return bool
     */
    public function getIsOnlyShowTotal()
    {
        return $this->container['is_only_show_total'];
    }

    /**
     * Sets is_only_show_total
     *
     * @param bool $is_only_show_total is_only_show_total
     *
     * @return $this
     */
    public function setIsOnlyShowTotal($is_only_show_total)
    {
        $this->container['is_only_show_total'] = $is_only_show_total;

        return $this;
    }

    /**
     * Gets item_ids
     *
     * @return string[]
     */
    public function getItemIds()
    {
        return $this->container['item_ids'];
    }

    /**
     * Sets item_ids
     *
     * @param string[] $item_ids item_ids
     *
     * @return $this
     */
    public function setItemIds($item_ids)
    {
        $this->container['item_ids'] = $item_ids;

        return $this;
    }

    /**
     * Gets is_not_show_total
     *
     * @return bool
     */
    public function getIsNotShowTotal()
    {
        return $this->container['is_not_show_total'];
    }

    /**
     * Sets is_not_show_total
     *
     * @param bool $is_not_show_total is_not_show_total
     *
     * @return $this
     */
    public function setIsNotShowTotal($is_not_show_total)
    {
        $this->container['is_not_show_total'] = $is_not_show_total;

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

