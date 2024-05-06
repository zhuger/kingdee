# com_kingdee_service\CouponsListApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**couponsListList**](CouponsListApi.md#couponsListList) | **GET** /jdy/v2/ls/coupons | 会员优惠券查询;会员优惠券查询;1.0.6


# **couponsListList**
> \com_kingdee_service\data\entity\CouponsListRes couponsListList($body)

会员优惠券查询;会员优惠券查询;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\CouponsListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\CouponsListListReq(); // \com_kingdee_service\data\entity\CouponsListListReq | 

try {
    $result = $apiInstance->couponsListList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsListApi->couponsListList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\CouponsListListReq**](../Model/CouponsListListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\CouponsListRes**](../Model/CouponsListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

