# com_kingdee_service\AppTokenApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asterAppToken**](AppTokenApi.md#asterAppToken) | **GET** /jdyconnector/app_management/kingdee_auth_token | AsterAppToken


# **asterAppToken**
> \com_kingdee_service\data\entity\AsterAppTokenRes asterAppToken($app_key, $app_signature, $uid)

AsterAppToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\AppTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_key = "app_key_example"; // string | app_key
$app_signature = "app_signature_example"; // string | app_signature
$uid = "uid_example"; // string | uid

try {
    $result = $apiInstance->asterAppToken($app_key, $app_signature, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppTokenApi->asterAppToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_key** | **string**| app_key |
 **app_signature** | **string**| app_signature |
 **uid** | **string**| uid | [optional]

### Return type

[**\com_kingdee_service\data\entity\AsterAppTokenRes**](../Model/AsterAppTokenRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

