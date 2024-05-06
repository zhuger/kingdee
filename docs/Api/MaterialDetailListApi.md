# com_kingdee_service\MaterialDetailListApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**materialDetailListList**](MaterialDetailListApi.md#materialDetailListList) | **GET** /jdy/v2/ls/material | 门店商品列表;门店商品列表;1.0.6


# **materialDetailListList**
> \com_kingdee_service\data\entity\MaterialDetailListRes materialDetailListList($body)

门店商品列表;门店商品列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MaterialDetailListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MaterialDetailListListReq(); // \com_kingdee_service\data\entity\MaterialDetailListListReq | 

try {
    $result = $apiInstance->materialDetailListList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialDetailListApi->materialDetailListList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MaterialDetailListListReq**](../Model/MaterialDetailListListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\MaterialDetailListRes**](../Model/MaterialDetailListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

