# com_kingdee_service\MallPreWriteOffApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mallPreWriteOffSave**](MallPreWriteOffApi.md#mallPreWriteOffSave) | **POST** /jdy/v2/ls/mall_pre_write_off | 预核销;预核销;1.0.6


# **mallPreWriteOffSave**
> \com_kingdee_service\data\entity\MallPreWriteOffRes mallPreWriteOffSave($body)

预核销;预核销;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MallPreWriteOffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MallPreWriteOffReq(); // \com_kingdee_service\data\entity\MallPreWriteOffReq | 

try {
    $result = $apiInstance->mallPreWriteOffSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MallPreWriteOffApi->mallPreWriteOffSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MallPreWriteOffReq**](../Model/MallPreWriteOffReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\MallPreWriteOffRes**](../Model/MallPreWriteOffRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

