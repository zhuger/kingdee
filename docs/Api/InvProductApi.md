# com_kingdee_service\InvProductApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invProductFaSave**](InvProductApi.md#invProductFaSave) | **POST** /jdy/v2/scm/inv_product_save_v2 | 产品入库单保存;产品入库单保存;1.0.4
[**invProductInvProductDetail**](InvProductApi.md#invProductInvProductDetail) | **GET** /jdy/v2/scm/inv_product_detail | 产品入库单详情;产品入库单详情;1.0.7
[**invProductInvProductList**](InvProductApi.md#invProductInvProductList) | **GET** /jdy/v2/scm/inv_product | 产品入库单列表;产品入库单列表;1.0.8


# **invProductFaSave**
> \com_kingdee_service\data\entity\SaveReply invProductFaSave($body)

产品入库单保存;产品入库单保存;1.0.4

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvProductSaveRequest(); // \com_kingdee_service\data\entity\InvProductSaveRequest | 

try {
    $result = $apiInstance->invProductFaSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvProductApi->invProductFaSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvProductSaveRequest**](../Model/InvProductSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invProductInvProductDetail**
> \com_kingdee_service\data\entity\InvProductDetailRes invProductInvProductDetail($id, $number)

产品入库单详情;产品入库单详情;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->invProductInvProductDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvProductApi->invProductInvProductDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvProductDetailRes**](../Model/InvProductDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invProductInvProductList**
> \com_kingdee_service\data\entity\InvProductListRes invProductInvProductList($body)

产品入库单列表;产品入库单列表;1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvProductInvProductListReq(); // \com_kingdee_service\data\entity\InvProductInvProductListReq | 

try {
    $result = $apiInstance->invProductInvProductList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvProductApi->invProductInvProductList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvProductInvProductListReq**](../Model/InvProductInvProductListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvProductListRes**](../Model/InvProductListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

