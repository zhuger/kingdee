# com_kingdee_service\FaLocationApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**faLocationFaSave**](FaLocationApi.md#faLocationFaSave) | **POST** /jdy/v2/fi/fa_location_save | 存放地点保存;存放地点保存;1.0.13
[**faLocationList**](FaLocationApi.md#faLocationList) | **GET** /jdy/v2/fi/fa_location | 存放地点列表;获取存放地点列表;1.0.13


# **faLocationFaSave**
> \com_kingdee_service\data\entity\SaveReply faLocationFaSave($body)

存放地点保存;存放地点保存;1.0.13

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\FaLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\LocationSaveRequest(); // \com_kingdee_service\data\entity\LocationSaveRequest | 

try {
    $result = $apiInstance->faLocationFaSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaLocationApi->faLocationFaSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\LocationSaveRequest**](../Model/LocationSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faLocationList**
> \com_kingdee_service\data\entity\LocationListReply faLocationList($body)

存放地点列表;获取存放地点列表;1.0.13

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\FaLocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\FaLocationListReq(); // \com_kingdee_service\data\entity\FaLocationListReq | 

try {
    $result = $apiInstance->faLocationList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaLocationApi->faLocationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\FaLocationListReq**](../Model/FaLocationListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\LocationListReply**](../Model/LocationListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

