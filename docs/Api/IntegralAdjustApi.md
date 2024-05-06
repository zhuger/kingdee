# com_kingdee_service\IntegralAdjustApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**integralAdjustSave**](IntegralAdjustApi.md#integralAdjustSave) | **POST** /jdy/v2/ls/integral_adjust | 会员积分调整;会员积分调整;1.0.9


# **integralAdjustSave**
> string integralAdjustSave($body)

会员积分调整;会员积分调整;1.0.9

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\IntegralAdjustApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\IntegralAdjustReq(); // \com_kingdee_service\data\entity\IntegralAdjustReq | 

try {
    $result = $apiInstance->integralAdjustSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegralAdjustApi->integralAdjustSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\IntegralAdjustReq**](../Model/IntegralAdjustReq.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

