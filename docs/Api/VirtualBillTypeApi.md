# com_kingdee_service\VirtualBillTypeApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**virtualBillTypeList**](VirtualBillTypeApi.md#virtualBillTypeList) | **GET** /jdy/v2/fi/virtual_type | 外部单据分类列表;获取外部单据分类列表;1.0.6
[**virtualBillTypeSave**](VirtualBillTypeApi.md#virtualBillTypeSave) | **POST** /jdy/v2/fi/virtual_type | 外部单据分类保存;外部单据分类新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.7


# **virtualBillTypeList**
> \com_kingdee_service\data\entity\VirtualBillTypeListReply virtualBillTypeList($body)

外部单据分类列表;获取外部单据分类列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\VirtualBillTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\VirtualBillTypeListReq(); // \com_kingdee_service\data\entity\VirtualBillTypeListReq | 

try {
    $result = $apiInstance->virtualBillTypeList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualBillTypeApi->virtualBillTypeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\VirtualBillTypeListReq**](../Model/VirtualBillTypeListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\VirtualBillTypeListReply**](../Model/VirtualBillTypeListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **virtualBillTypeSave**
> \com_kingdee_service\data\entity\SaveListReply virtualBillTypeSave($body)

外部单据分类保存;外部单据分类新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\VirtualBillTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\VirtualBillTypeSaveRequest(); // \com_kingdee_service\data\entity\VirtualBillTypeSaveRequest | 

try {
    $result = $apiInstance->virtualBillTypeSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualBillTypeApi->virtualBillTypeSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\VirtualBillTypeSaveRequest**](../Model/VirtualBillTypeSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveListReply**](../Model/SaveListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

