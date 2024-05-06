# com_kingdee_service\RechargeRecordApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rechargeRecordList**](RechargeRecordApi.md#rechargeRecordList) | **GET** /jdy/v2/ls/recharge_record | 储值流水查询;储值流水查询;1.0.6


# **rechargeRecordList**
> \com_kingdee_service\data\entity\RechargeRecordListRes rechargeRecordList($body)

储值流水查询;储值流水查询;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\RechargeRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\RechargeRecordListReq(); // \com_kingdee_service\data\entity\RechargeRecordListReq | 

try {
    $result = $apiInstance->rechargeRecordList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RechargeRecordApi->rechargeRecordList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\RechargeRecordListReq**](../Model/RechargeRecordListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\RechargeRecordListRes**](../Model/RechargeRecordListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

