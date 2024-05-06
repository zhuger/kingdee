# com_kingdee_service\ArOtherCreditRetApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**arOtherCreditRetDetail**](ArOtherCreditRetApi.md#arOtherCreditRetDetail) | **GET** /jdy/v2/arap/ar_other_credit_ret_detail | 其他收入退款单详情;获取其他收入退款单详情;1.0.11
[**arOtherCreditRetList**](ArOtherCreditRetApi.md#arOtherCreditRetList) | **GET** /jdy/v2/arap/ar_other_credit_ret | 其他收入退款单列表;获取其他收入退款单列表;1.0.11
[**arOtherCreditRetSave**](ArOtherCreditRetApi.md#arOtherCreditRetSave) | **POST** /jdy/v2/arap/ar_other_credit_ret | 其他收入退款单保存;保存其他收入退款单。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.13


# **arOtherCreditRetDetail**
> \com_kingdee_service\data\entity\ArOtherCreditRetDetailReply arOtherCreditRetDetail($id, $number)

其他收入退款单详情;获取其他收入退款单详情;1.0.11

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ArOtherCreditRetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->arOtherCreditRetDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArOtherCreditRetApi->arOtherCreditRetDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\ArOtherCreditRetDetailReply**](../Model/ArOtherCreditRetDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **arOtherCreditRetList**
> \com_kingdee_service\data\entity\ArOtherCreditRetListReply arOtherCreditRetList($body)

其他收入退款单列表;获取其他收入退款单列表;1.0.11

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ArOtherCreditRetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ArOtherCreditRetListReq(); // \com_kingdee_service\data\entity\ArOtherCreditRetListReq | 

try {
    $result = $apiInstance->arOtherCreditRetList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArOtherCreditRetApi->arOtherCreditRetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ArOtherCreditRetListReq**](../Model/ArOtherCreditRetListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\ArOtherCreditRetListReply**](../Model/ArOtherCreditRetListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **arOtherCreditRetSave**
> \com_kingdee_service\data\entity\SaveReply arOtherCreditRetSave($body)

其他收入退款单保存;保存其他收入退款单。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.13

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ArOtherCreditRetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ArOtherCreditRetSaveRequest(); // \com_kingdee_service\data\entity\ArOtherCreditRetSaveRequest | 

try {
    $result = $apiInstance->arOtherCreditRetSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArOtherCreditRetApi->arOtherCreditRetSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ArOtherCreditRetSaveRequest**](../Model/ArOtherCreditRetSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

