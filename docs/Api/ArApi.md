# com_kingdee_service\ArApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**arArOrderStatementReport**](ArApi.md#arArOrderStatementReport) | **GET** /jdy/v2/arap/ar_order_statement_report | 应收账款明细表;获取应收账款明细表;1.0.6
[**arArReport**](ArApi.md#arArReport) | **GET** /jdy/v2/arap/ar_report | 客户应收统计表;获取客户应收统计表;1.0.6


# **arArOrderStatementReport**
> \com_kingdee_service\data\entity\ArOrderStatementReportReply arArOrderStatementReport($body)

应收账款明细表;获取应收账款明细表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ArApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ArArOrderStatementReportReq(); // \com_kingdee_service\data\entity\ArArOrderStatementReportReq | 

try {
    $result = $apiInstance->arArOrderStatementReport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArApi->arArOrderStatementReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ArArOrderStatementReportReq**](../Model/ArArOrderStatementReportReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\ArOrderStatementReportReply**](../Model/ArOrderStatementReportReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **arArReport**
> \com_kingdee_service\data\entity\ArReportReply arArReport($body)

客户应收统计表;获取客户应收统计表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ArApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ArArReportReq(); // \com_kingdee_service\data\entity\ArArReportReq | 

try {
    $result = $apiInstance->arArReport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArApi->arArReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ArArReportReq**](../Model/ArArReportReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\ArReportReply**](../Model/ArReportReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

