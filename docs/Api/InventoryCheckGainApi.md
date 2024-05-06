# com_kingdee_service\InventoryCheckGainApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryCheckGainInvCheckGainBillDetail**](InventoryCheckGainApi.md#inventoryCheckGainInvCheckGainBillDetail) | **GET** /jdy/v2/scm/inv_check_gail_bill_detail | 盘盈单详情;盘盈单详情;1.0.8
[**inventoryCheckGainInvCheckGainBillList**](InventoryCheckGainApi.md#inventoryCheckGainInvCheckGainBillList) | **GET** /jdy/v2/scm/inv_check_gail_bill | 盘盈单列表;盘盈单列表;1.0.6
[**inventoryCheckGainInvCheckGainBillSave**](InventoryCheckGainApi.md#inventoryCheckGainInvCheckGainBillSave) | **POST** /jdy/v2/scm/inv_check_gail_bill | 盘盈单保存;盘盈单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.11


# **inventoryCheckGainInvCheckGainBillDetail**
> \com_kingdee_service\data\entity\InvCheckGainBillDetailRes inventoryCheckGainInvCheckGainBillDetail($id, $number)

盘盈单详情;盘盈单详情;1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryCheckGainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->inventoryCheckGainInvCheckGainBillDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryCheckGainApi->inventoryCheckGainInvCheckGainBillDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvCheckGainBillDetailRes**](../Model/InvCheckGainBillDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCheckGainInvCheckGainBillList**
> \com_kingdee_service\data\entity\InvCheckGainBillListRes inventoryCheckGainInvCheckGainBillList($body)

盘盈单列表;盘盈单列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryCheckGainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InventoryCheckGainInvCheckGainBillListReq(); // \com_kingdee_service\data\entity\InventoryCheckGainInvCheckGainBillListReq | 

try {
    $result = $apiInstance->inventoryCheckGainInvCheckGainBillList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryCheckGainApi->inventoryCheckGainInvCheckGainBillList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InventoryCheckGainInvCheckGainBillListReq**](../Model/InventoryCheckGainInvCheckGainBillListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvCheckGainBillListRes**](../Model/InvCheckGainBillListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCheckGainInvCheckGainBillSave**
> \com_kingdee_service\data\entity\SaveReply inventoryCheckGainInvCheckGainBillSave($body)

盘盈单保存;盘盈单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.11

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InventoryCheckGainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvCheckGainBillSaveReq(); // \com_kingdee_service\data\entity\InvCheckGainBillSaveReq | 

try {
    $result = $apiInstance->inventoryCheckGainInvCheckGainBillSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryCheckGainApi->inventoryCheckGainInvCheckGainBillSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvCheckGainBillSaveReq**](../Model/InvCheckGainBillSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

