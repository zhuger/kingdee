# com_kingdee_service\VirtualBillApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**virtualBillDetail**](VirtualBillApi.md#virtualBillDetail) | **GET** /jdy/v2/fi/virtual_detail | 外部单据详情;获取外部单据详情;1.0.7
[**virtualBillList**](VirtualBillApi.md#virtualBillList) | **GET** /jdy/v2/fi/virtual | 外部单据列表;获取外部单据列表;1.0.6
[**virtualBillSave**](VirtualBillApi.md#virtualBillSave) | **POST** /jdy/v2/fi/virtual | 外部单据保存;外部单据新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.8


# **virtualBillDetail**
> \com_kingdee_service\data\entity\VirtualBillDetailReply virtualBillDetail($id, $number)

外部单据详情;获取外部单据详情;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\VirtualBillApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->virtualBillDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualBillApi->virtualBillDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\VirtualBillDetailReply**](../Model/VirtualBillDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualBillList**
> \com_kingdee_service\data\entity\VirtualBillListReply virtualBillList($body)

外部单据列表;获取外部单据列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\VirtualBillApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\VirtualBillListReq(); // \com_kingdee_service\data\entity\VirtualBillListReq | 

try {
    $result = $apiInstance->virtualBillList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualBillApi->virtualBillList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\VirtualBillListReq**](../Model/VirtualBillListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\VirtualBillListReply**](../Model/VirtualBillListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualBillSave**
> \com_kingdee_service\data\entity\SaveListReply virtualBillSave($body)

外部单据保存;外部单据新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\VirtualBillApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\VirtualBillSaveRequest(); // \com_kingdee_service\data\entity\VirtualBillSaveRequest | 

try {
    $result = $apiInstance->virtualBillSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualBillApi->virtualBillSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\VirtualBillSaveRequest**](../Model/VirtualBillSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveListReply**](../Model/SaveListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

