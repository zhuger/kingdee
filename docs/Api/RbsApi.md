# com_kingdee_service\RbsApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rbsList**](RbsApi.md#rbsList) | **GET** /jdy/v2/ls/retail_bill_statistic | 零售单汇总查询;零售单汇总查询;1.0.11


# **rbsList**
> \com_kingdee_service\data\entity\RbsRes rbsList($body)

零售单汇总查询;零售单汇总查询;1.0.11

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\RbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\RbsListReq(); // \com_kingdee_service\data\entity\RbsListReq | 

try {
    $result = $apiInstance->rbsList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RbsApi->rbsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\RbsListReq**](../Model/RbsListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\RbsRes**](../Model/RbsRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

