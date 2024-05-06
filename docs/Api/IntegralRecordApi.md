# com_kingdee_service\IntegralRecordApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**integralRecordList**](IntegralRecordApi.md#integralRecordList) | **GET** /jdy/v2/ls/integral_record | 积分流水查询;积分流水查询;1.0.6


# **integralRecordList**
> \com_kingdee_service\data\entity\IntegralRecordListRes integralRecordList($body)

积分流水查询;积分流水查询;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\IntegralRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\IntegralRecordListReq(); // \com_kingdee_service\data\entity\IntegralRecordListReq | 

try {
    $result = $apiInstance->integralRecordList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegralRecordApi->integralRecordList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\IntegralRecordListReq**](../Model/IntegralRecordListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\IntegralRecordListRes**](../Model/IntegralRecordListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

