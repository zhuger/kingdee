# com_kingdee_service\ArapApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**arapApSummaryReport**](ArapApi.md#arapApSummaryReport) | **GET** /jdy/v2/arap/ap_summary_report | 应付账款汇总表;获取应付账款汇总表;1.0.6
[**arapArSummaryReport**](ArapApi.md#arapArSummaryReport) | **GET** /jdy/v2/arap/ar_summary_report | 应收账款汇总表;获取应收账款汇总表;1.0.6
[**arapArapBalance**](ArapApi.md#arapArapBalance) | **GET** /jdy/v2/arap/arap_balance | 应收应付余额表;获取应收应付余额表;1.0.6
[**arapCustomerDebt**](ArapApi.md#arapCustomerDebt) | **GET** /jdy/v2/arap/customer_debt | 客户欠款余额;查询客户的上次欠款和应收款余额;1.0.6
[**arapReconciliationStatement**](ArapApi.md#arapReconciliationStatement) | **GET** /jdy/v2/arap/reconciliation_statement | 供应商/客户 对账单;获取供应商/客户 对账表;1.0.7


# **arapApSummaryReport**
> \com_kingdee_service\data\entity\ApSummaryReportReply arapApSummaryReport($body)

应付账款汇总表;获取应付账款汇总表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ArapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ArapApSummaryReportReq(); // \com_kingdee_service\data\entity\ArapApSummaryReportReq | 

try {
    $result = $apiInstance->arapApSummaryReport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArapApi->arapApSummaryReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ArapApSummaryReportReq**](../Model/ArapApSummaryReportReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\ApSummaryReportReply**](../Model/ApSummaryReportReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **arapArSummaryReport**
> \com_kingdee_service\data\entity\ArSummaryReportReply arapArSummaryReport($body)

应收账款汇总表;获取应收账款汇总表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ArapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ArapArSummaryReportReq(); // \com_kingdee_service\data\entity\ArapArSummaryReportReq | 

try {
    $result = $apiInstance->arapArSummaryReport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArapApi->arapArSummaryReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ArapArSummaryReportReq**](../Model/ArapArSummaryReportReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\ArSummaryReportReply**](../Model/ArSummaryReportReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **arapArapBalance**
> \com_kingdee_service\data\entity\ArapBalanceReply arapArapBalance($body)

应收应付余额表;获取应收应付余额表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ArapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ArapArapBalanceReq(); // \com_kingdee_service\data\entity\ArapArapBalanceReq | 

try {
    $result = $apiInstance->arapArapBalance($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArapApi->arapArapBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ArapArapBalanceReq**](../Model/ArapArapBalanceReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\ArapBalanceReply**](../Model/ArapBalanceReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **arapCustomerDebt**
> \com_kingdee_service\data\entity\CustomerDebtReply arapCustomerDebt($body)

客户欠款余额;查询客户的上次欠款和应收款余额;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ArapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ArapCustomerDebtReq(); // \com_kingdee_service\data\entity\ArapCustomerDebtReq | 

try {
    $result = $apiInstance->arapCustomerDebt($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArapApi->arapCustomerDebt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ArapCustomerDebtReq**](../Model/ArapCustomerDebtReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\CustomerDebtReply**](../Model/CustomerDebtReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **arapReconciliationStatement**
> \com_kingdee_service\data\entity\ReconciliationStatementReply arapReconciliationStatement($body)

供应商/客户 对账单;获取供应商/客户 对账表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ArapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ArapReconciliationStatementReq(); // \com_kingdee_service\data\entity\ArapReconciliationStatementReq | 

try {
    $result = $apiInstance->arapReconciliationStatement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArapApi->arapReconciliationStatement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ArapReconciliationStatementReq**](../Model/ArapReconciliationStatementReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\ReconciliationStatementReply**](../Model/ReconciliationStatementReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

