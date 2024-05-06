# com_kingdee_service\ApPreCreditApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apPreCreditDetail**](ApPreCreditApi.md#apPreCreditDetail) | **GET** /jdy/v2/arap/ap_pre_credit_detail | 预付款单详情;获取预付款单详情;1.0.9
[**apPreCreditList**](ApPreCreditApi.md#apPreCreditList) | **GET** /jdy/v2/arap/ap_pre_credit | 预付款单列表;获取预付款单列表;1.0.11
[**apPreCreditSave**](ApPreCreditApi.md#apPreCreditSave) | **POST** /jdy/v2/arap/ap_pre_credit | 预付款单保存;预付款单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.14


# **apPreCreditDetail**
> \com_kingdee_service\data\entity\ApPreCreditDetailReply apPreCreditDetail($id, $number)

预付款单详情;获取预付款单详情;1.0.9

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ApPreCreditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->apPreCreditDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApPreCreditApi->apPreCreditDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\ApPreCreditDetailReply**](../Model/ApPreCreditDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apPreCreditList**
> \com_kingdee_service\data\entity\ApPreCreditListReply apPreCreditList($body)

预付款单列表;获取预付款单列表;1.0.11

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ApPreCreditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ApPreCreditListReq(); // \com_kingdee_service\data\entity\ApPreCreditListReq | 

try {
    $result = $apiInstance->apPreCreditList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApPreCreditApi->apPreCreditList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ApPreCreditListReq**](../Model/ApPreCreditListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\ApPreCreditListReply**](../Model/ApPreCreditListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apPreCreditSave**
> \com_kingdee_service\data\entity\SaveReply apPreCreditSave($body)

预付款单保存;预付款单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.14

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ApPreCreditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ApPreCreditSaveRequest(); // \com_kingdee_service\data\entity\ApPreCreditSaveRequest | 

try {
    $result = $apiInstance->apPreCreditSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApPreCreditApi->apPreCreditSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ApPreCreditSaveRequest**](../Model/ApPreCreditSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

