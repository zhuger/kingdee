# com_kingdee_service\RefundApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**refundSave**](RefundApi.md#refundSave) | **POST** /jdy/v2/ls/refundSave | 零售退款保存;零售退款保存;1.0.6


# **refundSave**
> \com_kingdee_service\data\entity\RefundSaveRes refundSave($body)

零售退款保存;零售退款保存;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\RefundSaveReq(); // \com_kingdee_service\data\entity\RefundSaveReq | 

try {
    $result = $apiInstance->refundSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\RefundSaveReq**](../Model/RefundSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\RefundSaveRes**](../Model/RefundSaveRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

