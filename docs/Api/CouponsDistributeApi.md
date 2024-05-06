# com_kingdee_service\CouponsDistributeApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**couponsDistributeList**](CouponsDistributeApi.md#couponsDistributeList) | **POST** /jdy/v2/ls/coupons_distribute | 优惠券发放(领用);优惠券发放(领用);1.0.6


# **couponsDistributeList**
> \com_kingdee_service\data\entity\Rows couponsDistributeList($body)

优惠券发放(领用);优惠券发放(领用);1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\CouponsDistributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\CouponsDistributeReq(); // \com_kingdee_service\data\entity\CouponsDistributeReq | 

try {
    $result = $apiInstance->couponsDistributeList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsDistributeApi->couponsDistributeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\CouponsDistributeReq**](../Model/CouponsDistributeReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\Rows**](../Model/Rows.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

