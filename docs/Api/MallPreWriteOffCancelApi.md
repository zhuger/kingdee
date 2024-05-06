# com_kingdee_service\MallPreWriteOffCancelApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mallPreWriteOffCancelSave**](MallPreWriteOffCancelApi.md#mallPreWriteOffCancelSave) | **POST** /jdy/v2/ls/mall_pre_write_off_cancel | 反预核销;反预核销;1.0.6


# **mallPreWriteOffCancelSave**
> string mallPreWriteOffCancelSave($body)

反预核销;反预核销;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MallPreWriteOffCancelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MallPreWriteOffCancelReq(); // \com_kingdee_service\data\entity\MallPreWriteOffCancelReq | 

try {
    $result = $apiInstance->mallPreWriteOffCancelSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MallPreWriteOffCancelApi->mallPreWriteOffCancelSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MallPreWriteOffCancelReq**](../Model/MallPreWriteOffCancelReq.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

