# com_kingdee_service\AuthorizeApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**asterAuthorize**](AuthorizeApi.md#asterAuthorize) | **POST** /jdyconnector/app_management/push_app_authorize | AsterAuthorize


# **asterAuthorize**
> \com_kingdee_service\data\entity\AsterAuthorizeRes[] asterAuthorize($outer_instance_id)

AsterAuthorize

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\AuthorizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$outer_instance_id = "outer_instance_id_example"; // string | outerInstanceId

try {
    $result = $apiInstance->asterAuthorize($outer_instance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizeApi->asterAuthorize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **outer_instance_id** | **string**| outerInstanceId |

### Return type

[**\com_kingdee_service\data\entity\AsterAuthorizeRes[]**](../Model/AsterAuthorizeRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

