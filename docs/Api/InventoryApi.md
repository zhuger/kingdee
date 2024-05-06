# com_kingdee_service\InventoryApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryBatchKfperiodInvList**](InventoryApi.md#inventoryBatchKfperiodInvList) | **GET** /jdy/v2/scm/batch_kfperiod_inventory | 批次保质期及库存列表;批次保质期及库存列表;1.0.7
[**inventoryInvDetailList**](InventoryApi.md#inventoryInvDetailList) | **GET** /jdy/v2/scm/inv_detail | 商品收发明细表列表;商品收发明细表列表;1.0.7
[**inventoryInvList**](InventoryApi.md#inventoryInvList) | **GET** /jdy/v2/scm/inventory | 商品库存列表;商品库存列表;1.0.6
[**inventoryInvOccupy**](InventoryApi.md#inventoryInvOccupy) | **POST** /jdy/v2/scm/inv_occupy | 库存占用;库存占用;1.0.8
[**inventoryInvReleaseOccupy**](InventoryApi.md#inventoryInvReleaseOccupy) | **POST** /jdy/v2/scm/inv_release_occupy | 库存占用释放;库存占用释放;1.0.7
[**inventoryInvSerialStatusList**](InventoryApi.md#inventoryInvSerialStatusList) | **GET** /jdy/v2/scm/inventory_serial_status | 序列号状态表列表;序列号状态表列表;1.0.7
[**inventoryMaterialStock**](InventoryApi.md#inventoryMaterialStock) | **GET** /jdy/v2/scm/inventory_stock | 商品仓库库存查询;商品仓库库存查询;1.0.7


# **inventoryBatchKfperiodInvList**
> \com_kingdee_service\data\entity\BatchKfperiodInvListRes inventoryBatchKfperiodInvList($body)

批次保质期及库存列表;批次保质期及库存列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InventoryBatchKfperiodInvListReq(); // \com_kingdee_service\data\entity\InventoryBatchKfperiodInvListReq | 

try {
    $result = $apiInstance->inventoryBatchKfperiodInvList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryBatchKfperiodInvList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InventoryBatchKfperiodInvListReq**](../Model/InventoryBatchKfperiodInvListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\BatchKfperiodInvListRes**](../Model/BatchKfperiodInvListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInvDetailList**
> \com_kingdee_service\data\entity\InvDetailListRes inventoryInvDetailList($page, $page_size, $start_date, $end_date, $search, $filter_stock_category, $filter_sp_id, $filter_stock_id, $filter_material_category, $filter_material_id, $filter_batch_no, $filter_dept_id, $filter_bill_type_id, $filter_audit_status)

商品收发明细表列表;商品收发明细表列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | a=第几页，默认1 ;c=2.
$page_size = 56; // int | a=页大小，可选50/100,默认100;c=50.
$start_date = "start_date_example"; // string | a=开始时间；格式：yyyy-MM-dd;c=2021-04-16.
$end_date = "end_date_example"; // string | a=结束时间；格式：yyyy-MM-dd;c=2021-04-17.
$search = "search_example"; // string | 模糊搜索，支持商品名称;c=XXX.
$filter_stock_category = array("filter_stock_category_example"); // string[] | a=仓库分类id；格式：[,];c=[11,22].
$filter_sp_id = array("filter_sp_id_example"); // string[] | a=仓位id；格式：[,];c=[11,22].
$filter_stock_id = array("filter_stock_id_example"); // string[] | a=仓库id；格式：[,];c=[11,22].
$filter_material_category = array("filter_material_category_example"); // string[] | a=商品类别id；格式：[,];c=[11,22].
$filter_material_id = array("filter_material_id_example"); // string[] | a=商品id；格式：[,];c=[1057992072985868292].
$filter_batch_no = array("filter_batch_no_example"); // string[] | a=批次；格式：[,];c=[11,22].
$filter_dept_id = array("filter_dept_id_example"); // string[] | a=部门id；格式：[,];c=[11,22].
$filter_bill_type_id = "filter_bill_type_id_example"; // string | a=单据类型, 详见单据类型表格；格式：[,];c=[11,22].
$filter_audit_status = "filter_audit_status_example"; // string | a=调价单状态审核状态,C为审核，B为未审核，D为作废中;c=C.

try {
    $result = $apiInstance->inventoryInvDetailList($page, $page_size, $start_date, $end_date, $search, $filter_stock_category, $filter_sp_id, $filter_stock_id, $filter_material_category, $filter_material_id, $filter_batch_no, $filter_dept_id, $filter_bill_type_id, $filter_audit_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryInvDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| a&#x3D;第几页，默认1 ;c&#x3D;2. | [optional]
 **page_size** | **int**| a&#x3D;页大小，可选50/100,默认100;c&#x3D;50. | [optional]
 **start_date** | **string**| a&#x3D;开始时间；格式：yyyy-MM-dd;c&#x3D;2021-04-16. | [optional]
 **end_date** | **string**| a&#x3D;结束时间；格式：yyyy-MM-dd;c&#x3D;2021-04-17. | [optional]
 **search** | **string**| 模糊搜索，支持商品名称;c&#x3D;XXX. | [optional]
 **filter_stock_category** | [**string[]**](../Model/string.md)| a&#x3D;仓库分类id；格式：[,];c&#x3D;[11,22]. | [optional]
 **filter_sp_id** | [**string[]**](../Model/string.md)| a&#x3D;仓位id；格式：[,];c&#x3D;[11,22]. | [optional]
 **filter_stock_id** | [**string[]**](../Model/string.md)| a&#x3D;仓库id；格式：[,];c&#x3D;[11,22]. | [optional]
 **filter_material_category** | [**string[]**](../Model/string.md)| a&#x3D;商品类别id；格式：[,];c&#x3D;[11,22]. | [optional]
 **filter_material_id** | [**string[]**](../Model/string.md)| a&#x3D;商品id；格式：[,];c&#x3D;[1057992072985868292]. | [optional]
 **filter_batch_no** | [**string[]**](../Model/string.md)| a&#x3D;批次；格式：[,];c&#x3D;[11,22]. | [optional]
 **filter_dept_id** | [**string[]**](../Model/string.md)| a&#x3D;部门id；格式：[,];c&#x3D;[11,22]. | [optional]
 **filter_bill_type_id** | **string**| a&#x3D;单据类型, 详见单据类型表格；格式：[,];c&#x3D;[11,22]. | [optional]
 **filter_audit_status** | **string**| a&#x3D;调价单状态审核状态,C为审核，B为未审核，D为作废中;c&#x3D;C. | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvDetailListRes**](../Model/InvDetailListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInvList**
> \com_kingdee_service\data\entity\InvListRes inventoryInvList($body)

商品库存列表;商品库存列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InventoryInvListReq(); // \com_kingdee_service\data\entity\InventoryInvListReq | 

try {
    $result = $apiInstance->inventoryInvList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryInvList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InventoryInvListReq**](../Model/InventoryInvListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvListRes**](../Model/InvListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInvOccupy**
> \com_kingdee_service\data\entity\SaveReply inventoryInvOccupy($body)

库存占用;库存占用;1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvOccupyReq(); // \com_kingdee_service\data\entity\InvOccupyReq | 

try {
    $result = $apiInstance->inventoryInvOccupy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryInvOccupy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvOccupyReq**](../Model/InvOccupyReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInvReleaseOccupy**
> \com_kingdee_service\data\entity\SaveReply inventoryInvReleaseOccupy($body)

库存占用释放;库存占用释放;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvReleaseOccupyReq(); // \com_kingdee_service\data\entity\InvReleaseOccupyReq | 

try {
    $result = $apiInstance->inventoryInvReleaseOccupy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryInvReleaseOccupy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvReleaseOccupyReq**](../Model/InvReleaseOccupyReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInvSerialStatusList**
> \com_kingdee_service\data\entity\InvSerialStatusListRes inventoryInvSerialStatusList($body)

序列号状态表列表;序列号状态表列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InventoryInvSerialStatusListReq(); // \com_kingdee_service\data\entity\InventoryInvSerialStatusListReq | 

try {
    $result = $apiInstance->inventoryInvSerialStatusList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryInvSerialStatusList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InventoryInvSerialStatusListReq**](../Model/InventoryInvSerialStatusListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvSerialStatusListRes**](../Model/InvSerialStatusListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryMaterialStock**
> \com_kingdee_service\data\entity\MaterialStockRes inventoryMaterialStock($body)

商品仓库库存查询;商品仓库库存查询;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InventoryMaterialStockReq(); // \com_kingdee_service\data\entity\InventoryMaterialStockReq | 

try {
    $result = $apiInstance->inventoryMaterialStock($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryMaterialStock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InventoryMaterialStockReq**](../Model/InventoryMaterialStockReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\MaterialStockRes**](../Model/MaterialStockRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

