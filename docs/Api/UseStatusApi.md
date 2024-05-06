# com_kingdee_service\UseStatusApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**useStatusFaSave**](UseStatusApi.md#useStatusFaSave) | **POST** /jdy/v2/fi/fa_usestatus_save | 使用状态保存;使用状态保存;1.0.7
[**useStatusList**](UseStatusApi.md#useStatusList) | **GET** /jdy/v2/fi/fa_usestatus | 使用状态列表;获取使用状态列表;1.0.8


# **useStatusFaSave**
> \com_kingdee_service\data\entity\SaveReply useStatusFaSave($body)

使用状态保存;使用状态保存;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\UseStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\UsestatusSaveRequest(); // \com_kingdee_service\data\entity\UsestatusSaveRequest | 

try {
    $result = $apiInstance->useStatusFaSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseStatusApi->useStatusFaSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\UsestatusSaveRequest**](../Model/UsestatusSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **useStatusList**
> \com_kingdee_service\data\entity\UsestatusListReply useStatusList($body)

使用状态列表;获取使用状态列表;1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\UseStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\UseStatusListReq(); // \com_kingdee_service\data\entity\UseStatusListReq | 

try {
    $result = $apiInstance->useStatusList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UseStatusApi->useStatusList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\UseStatusListReq**](../Model/UseStatusListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\UsestatusListReply**](../Model/UsestatusListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

