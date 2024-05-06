# com_kingdee_service\AccountBookApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountBookAccountBalance**](AccountBookApi.md#accountBookAccountBalance) | **GET** /jdy/v2/fi/account_balance_report | 科目余额表;查询科目余额表;1.0.6
[**accountBookQtySum**](AccountBookApi.md#accountBookQtySum) | **GET** /jdy/v2/fi/qty_sum | 数量金额总账;查询数量金额总账;1.0.6
[**accountBookSubLedger**](AccountBookApi.md#accountBookSubLedger) | **GET** /jdy/v2/fi/sub_ledger_report | 明细账;查询明细账;1.0.6


# **accountBookAccountBalance**
> \com_kingdee_service\data\entity\AccountBalanceReply accountBookAccountBalance($body)

科目余额表;查询科目余额表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\AccountBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\AccountBookAccountBalanceReq(); // \com_kingdee_service\data\entity\AccountBookAccountBalanceReq | 

try {
    $result = $apiInstance->accountBookAccountBalance($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBookApi->accountBookAccountBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\AccountBookAccountBalanceReq**](../Model/AccountBookAccountBalanceReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\AccountBalanceReply**](../Model/AccountBalanceReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountBookQtySum**
> \com_kingdee_service\data\entity\QtySumReply accountBookQtySum($body)

数量金额总账;查询数量金额总账;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\AccountBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\AccountBookQtySumReq(); // \com_kingdee_service\data\entity\AccountBookQtySumReq | 

try {
    $result = $apiInstance->accountBookQtySum($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBookApi->accountBookQtySum: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\AccountBookQtySumReq**](../Model/AccountBookQtySumReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\QtySumReply**](../Model/QtySumReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountBookSubLedger**
> \com_kingdee_service\data\entity\SubLedgerReply accountBookSubLedger($body)

明细账;查询明细账;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\AccountBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\AccountBookSubLedgerReq(); // \com_kingdee_service\data\entity\AccountBookSubLedgerReq | 

try {
    $result = $apiInstance->accountBookSubLedger($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBookApi->accountBookSubLedger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\AccountBookSubLedgerReq**](../Model/AccountBookSubLedgerReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\SubLedgerReply**](../Model/SubLedgerReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

