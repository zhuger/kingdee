# com_kingdee_service\AccountBalanceInfoApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountBalanceInfoList**](AccountBalanceInfoApi.md#accountBalanceInfoList) | **GET** /jdy/v2/ls/account_balance_info | 会员账户余额查询;会员账户余额查询;1.0.6


# **accountBalanceInfoList**
> \com_kingdee_service\data\entity\AccountBalanceInfoListRes accountBalanceInfoList($body)

会员账户余额查询;会员账户余额查询;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\AccountBalanceInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\AccountBalanceInfoListReq(); // \com_kingdee_service\data\entity\AccountBalanceInfoListReq | 

try {
    $result = $apiInstance->accountBalanceInfoList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBalanceInfoApi->accountBalanceInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\AccountBalanceInfoListReq**](../Model/AccountBalanceInfoListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\AccountBalanceInfoListRes**](../Model/AccountBalanceInfoListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

