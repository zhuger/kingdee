# com_kingdee_service\ShelfApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shelfList**](ShelfApi.md#shelfList) | **GET** /jdy/v2/ls/shelf | 商品上下架列表;商品上下架列表;1.0.6


# **shelfList**
> \com_kingdee_service\data\entity\ShelfListRes shelfList($body)

商品上下架列表;商品上下架列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ShelfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ShelfListReq(); // \com_kingdee_service\data\entity\ShelfListReq | 

try {
    $result = $apiInstance->shelfList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShelfApi->shelfList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ShelfListReq**](../Model/ShelfListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\ShelfListRes**](../Model/ShelfListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

