# com_kingdee_service\InventoryCheckApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryCheckInvCheckBillDetail**](InventoryCheckApi.md#inventoryCheckInvCheckBillDetail) | **GET** /jdy/v2/scm/inv_check_bill_detail | 盘点单详情;盘点单详情;1.0.9
[**inventoryCheckInvCheckBillGainLossDeal**](InventoryCheckApi.md#inventoryCheckInvCheckBillGainLossDeal) | **POST** /jdy/v2/scm/inv_check_bill_gain_loss_deal | 盘点单盈亏处理;盘点单盈亏处理;1.0.6
[**inventoryCheckInvCheckBillList**](InventoryCheckApi.md#inventoryCheckInvCheckBillList) | **GET** /jdy/v2/scm/inv_check_bill | 盘点单列表;盘点单列表;1.0.7
[**inventoryCheckInvCheckBillSave**](InventoryCheckApi.md#inventoryCheckInvCheckBillSave) | **POST** /jdy/v2/scm/inv_check_bill | 盘点单保存;盘点单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.10
[**inventoryCheckInvCheckTaskList**](InventoryCheckApi.md#inventoryCheckInvCheckTaskList) | **GET** /jdy/v2/scm/inv_check_task | 盘点任务列表;盘点任务列表;1.0.6


# **inventoryCheckInvCheckBillDetail**
> \com_kingdee_service\data\entity\InvCheckBillDetailRes inventoryCheckInvCheckBillDetail($id, $only_basic)

盘点单详情;盘点单详情;1.0.9

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=单据ID;c=803390648580310016;d=true.
$only_basic = true; // bool | a=为true时返回更详细商品信息;c=false.

try {
    $result = $apiInstance->inventoryCheckInvCheckBillDetail($id, $only_basic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryCheckApi->inventoryCheckInvCheckBillDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;单据ID;c&#x3D;803390648580310016;d&#x3D;true. | [optional]
 **only_basic** | **bool**| a&#x3D;为true时返回更详细商品信息;c&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvCheckBillDetailRes**](../Model/InvCheckBillDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCheckInvCheckBillGainLossDeal**
> \com_kingdee_service\data\entity\InvCheckBillGainLossDealRes inventoryCheckInvCheckBillGainLossDeal($body)

盘点单盈亏处理;盘点单盈亏处理;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvCheckBillGainLossDealReq(); // \com_kingdee_service\data\entity\InvCheckBillGainLossDealReq | 

try {
    $result = $apiInstance->inventoryCheckInvCheckBillGainLossDeal($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryCheckApi->inventoryCheckInvCheckBillGainLossDeal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvCheckBillGainLossDealReq**](../Model/InvCheckBillGainLossDealReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\InvCheckBillGainLossDealRes**](../Model/InvCheckBillGainLossDealRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCheckInvCheckBillList**
> \com_kingdee_service\data\entity\InvCheckBillListRes inventoryCheckInvCheckBillList($body)

盘点单列表;盘点单列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InventoryCheckInvCheckBillListReq(); // \com_kingdee_service\data\entity\InventoryCheckInvCheckBillListReq | 

try {
    $result = $apiInstance->inventoryCheckInvCheckBillList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryCheckApi->inventoryCheckInvCheckBillList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InventoryCheckInvCheckBillListReq**](../Model/InventoryCheckInvCheckBillListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvCheckBillListRes**](../Model/InvCheckBillListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCheckInvCheckBillSave**
> \com_kingdee_service\data\entity\SaveReply inventoryCheckInvCheckBillSave($body)

盘点单保存;盘点单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.10

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvCheckBillSaveReq(); // \com_kingdee_service\data\entity\InvCheckBillSaveReq | 

try {
    $result = $apiInstance->inventoryCheckInvCheckBillSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryCheckApi->inventoryCheckInvCheckBillSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvCheckBillSaveReq**](../Model/InvCheckBillSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCheckInvCheckTaskList**
> \com_kingdee_service\data\entity\InvCheckTaskListRes inventoryCheckInvCheckTaskList($body)

盘点任务列表;盘点任务列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InventoryCheckInvCheckTaskListReq(); // \com_kingdee_service\data\entity\InventoryCheckInvCheckTaskListReq | 

try {
    $result = $apiInstance->inventoryCheckInvCheckTaskList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryCheckApi->inventoryCheckInvCheckTaskList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InventoryCheckInvCheckTaskListReq**](../Model/InventoryCheckInvCheckTaskListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvCheckTaskListRes**](../Model/InvCheckTaskListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

