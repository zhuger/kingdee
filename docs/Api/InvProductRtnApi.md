# com_kingdee_service\InvProductRtnApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invProductRtnInvProductRtnDetail**](InvProductRtnApi.md#invProductRtnInvProductRtnDetail) | **GET** /jdy/v2/scm/inv_product_ret_detail | 产品退库单详情;产品退库单详情;1.0.8
[**invProductRtnInvProductRtnList**](InvProductRtnApi.md#invProductRtnInvProductRtnList) | **GET** /jdy/v2/scm/inv_product_ret | 产品退库单列表;产品退库单列表;1.0.7


# **invProductRtnInvProductRtnDetail**
> \com_kingdee_service\data\entity\InvProductRtnDetailRes invProductRtnInvProductRtnDetail($id, $number)

产品退库单详情;产品退库单详情;1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvProductRtnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->invProductRtnInvProductRtnDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvProductRtnApi->invProductRtnInvProductRtnDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvProductRtnDetailRes**](../Model/InvProductRtnDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invProductRtnInvProductRtnList**
> \com_kingdee_service\data\entity\InvProductRtnListRes invProductRtnInvProductRtnList($body)

产品退库单列表;产品退库单列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvProductRtnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvProductRtnInvProductRtnListReq(); // \com_kingdee_service\data\entity\InvProductRtnInvProductRtnListReq | 

try {
    $result = $apiInstance->invProductRtnInvProductRtnList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvProductRtnApi->invProductRtnInvProductRtnList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvProductRtnInvProductRtnListReq**](../Model/InvProductRtnInvProductRtnListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvProductRtnListRes**](../Model/InvProductRtnListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

