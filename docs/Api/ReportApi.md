# com_kingdee_service\ReportApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportProfit**](ReportApi.md#reportProfit) | **GET** /jdy/v2/fi/profit_report | 利润表;获取利润表;1.0.6


# **reportProfit**
> \com_kingdee_service\data\entity\ProfitReply reportProfit($body)

利润表;获取利润表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ReportProfitReq(); // \com_kingdee_service\data\entity\ReportProfitReq | 

try {
    $result = $apiInstance->reportProfit($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportProfit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ReportProfitReq**](../Model/ReportProfitReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\ProfitReply**](../Model/ProfitReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

