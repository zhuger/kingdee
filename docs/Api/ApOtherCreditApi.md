# com_kingdee_service\ApOtherCreditApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apOtherCreditDetail**](ApOtherCreditApi.md#apOtherCreditDetail) | **GET** /jdy/v2/arap/ap_other_credit_detail | 其他支出单详情;获取其他支出单详情;1.0.10
[**apOtherCreditList**](ApOtherCreditApi.md#apOtherCreditList) | **GET** /jdy/v2/arap/ap_other_credit | 其他支出单列表;获取其他支出单列表;1.0.11
[**apOtherCreditSave**](ApOtherCreditApi.md#apOtherCreditSave) | **POST** /jdy/v2/arap/ap_other_credit | 其他支出单保存;其他支出单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.13


# **apOtherCreditDetail**
> \com_kingdee_service\data\entity\ApOtherCreditDetailReply apOtherCreditDetail($id, $number)

其他支出单详情;获取其他支出单详情;1.0.10

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ApOtherCreditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->apOtherCreditDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApOtherCreditApi->apOtherCreditDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\ApOtherCreditDetailReply**](../Model/ApOtherCreditDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apOtherCreditList**
> \com_kingdee_service\data\entity\ApOtherCreditListReply apOtherCreditList($body)

其他支出单列表;获取其他支出单列表;1.0.11

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ApOtherCreditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ApOtherCreditListReq(); // \com_kingdee_service\data\entity\ApOtherCreditListReq | 

try {
    $result = $apiInstance->apOtherCreditList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApOtherCreditApi->apOtherCreditList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ApOtherCreditListReq**](../Model/ApOtherCreditListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\ApOtherCreditListReply**](../Model/ApOtherCreditListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apOtherCreditSave**
> \com_kingdee_service\data\entity\SaveReply apOtherCreditSave($body)

其他支出单保存;其他支出单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.13

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ApOtherCreditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ApOtherCreditSaveRequest(); // \com_kingdee_service\data\entity\ApOtherCreditSaveRequest | 

try {
    $result = $apiInstance->apOtherCreditSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApOtherCreditApi->apOtherCreditSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ApOtherCreditSaveRequest**](../Model/ApOtherCreditSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

