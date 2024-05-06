# com_kingdee_service\SalOrderLockApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salOrderLockCancel**](SalOrderLockApi.md#salOrderLockCancel) | **POST** /jdy/v2/scm/sail_order_lock | 销售订单锁库;销售订单锁库;1.0.6


# **salOrderLockCancel**
> \com_kingdee_service\data\entity\EmptyReply salOrderLockCancel($body)

销售订单锁库;销售订单锁库;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SalOrderLockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SailOrderLockReq(); // \com_kingdee_service\data\entity\SailOrderLockReq | 

try {
    $result = $apiInstance->salOrderLockCancel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalOrderLockApi->salOrderLockCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SailOrderLockReq**](../Model/SailOrderLockReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\EmptyReply**](../Model/EmptyReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

