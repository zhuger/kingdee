# com_kingdee_service\CaApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**caCaAccountBalance**](CaApi.md#caCaAccountBalance) | **GET** /jdy/v2/fi/ca_account_balance | 出纳资金余额;获取出纳资金余额表列表;1.0.6


# **caCaAccountBalance**
> \com_kingdee_service\data\entity\CaAccountBalanceListReply caCaAccountBalance($body)

出纳资金余额;获取出纳资金余额表列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\CaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\CaCaAccountBalanceReq(); // \com_kingdee_service\data\entity\CaCaAccountBalanceReq | 

try {
    $result = $apiInstance->caCaAccountBalance($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CaApi->caCaAccountBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\CaCaAccountBalanceReq**](../Model/CaCaAccountBalanceReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\CaAccountBalanceListReply**](../Model/CaAccountBalanceListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

