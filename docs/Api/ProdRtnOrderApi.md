# com_kingdee_service\ProdRtnOrderApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**prodRtnOrderProdRtnOrderDetail**](ProdRtnOrderApi.md#prodRtnOrderProdRtnOrderDetail) | **GET** /jdy/v2/pm/subm_prod_rtn_detail | 委外产品退货单详情;获取委外产品退货单详情;1.0.2
[**prodRtnOrderProdRtnOrderList**](ProdRtnOrderApi.md#prodRtnOrderProdRtnOrderList) | **GET** /jdy/v2/pm/subm_prod_rtn | 委外产品退货单列表;获取委外产品退货单列表;1.0.2


# **prodRtnOrderProdRtnOrderDetail**
> \com_kingdee_service\data\entity\ProdRtnOrderDetailReply prodRtnOrderProdRtnOrderDetail($id)

委外产品退货单详情;获取委外产品退货单详情;1.0.2

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ProdRtnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id;b=2147483647;c=1;d=false.

try {
    $result = $apiInstance->prodRtnOrderProdRtnOrderDetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdRtnOrderApi->prodRtnOrderProdRtnOrderDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\ProdRtnOrderDetailReply**](../Model/ProdRtnOrderDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prodRtnOrderProdRtnOrderList**
> \com_kingdee_service\data\entity\ProdRtnOrderListReply prodRtnOrderProdRtnOrderList($body)

委外产品退货单列表;获取委外产品退货单列表;1.0.2

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ProdRtnOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ProdRtnOrderProdRtnOrderListReq(); // \com_kingdee_service\data\entity\ProdRtnOrderProdRtnOrderListReq | 

try {
    $result = $apiInstance->prodRtnOrderProdRtnOrderList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProdRtnOrderApi->prodRtnOrderProdRtnOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ProdRtnOrderProdRtnOrderListReq**](../Model/ProdRtnOrderProdRtnOrderListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\ProdRtnOrderListReply**](../Model/ProdRtnOrderListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

