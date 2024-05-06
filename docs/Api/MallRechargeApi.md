# com_kingdee_service\MallRechargeApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mallRechargeList**](MallRechargeApi.md#mallRechargeList) | **POST** /jdy/v2/ls/mall_recharge | 会员充值;会员充值;1.0.7


# **mallRechargeList**
> \com_kingdee_service\data\entity\MallRechargeRes mallRechargeList($body)

会员充值;会员充值;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MallRechargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MallRechargeReq(); // \com_kingdee_service\data\entity\MallRechargeReq | 

try {
    $result = $apiInstance->mallRechargeList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MallRechargeApi->mallRechargeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MallRechargeReq**](../Model/MallRechargeReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\MallRechargeRes**](../Model/MallRechargeRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

