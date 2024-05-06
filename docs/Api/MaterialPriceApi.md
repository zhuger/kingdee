# com_kingdee_service\MaterialPriceApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**materialPriceMaterialPrice**](MaterialPriceApi.md#materialPriceMaterialPrice) | **GET** /jdy/v2/bd/material_price | 商品价格策略;获取商品价格策略;1.0.7


# **materialPriceMaterialPrice**
> \com_kingdee_service\data\entity\PriceListReply materialPriceMaterialPrice($body)

商品价格策略;获取商品价格策略;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MaterialPriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MaterialPriceMaterialPriceReq(); // \com_kingdee_service\data\entity\MaterialPriceMaterialPriceReq | 

try {
    $result = $apiInstance->materialPriceMaterialPrice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialPriceApi->materialPriceMaterialPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MaterialPriceMaterialPriceReq**](../Model/MaterialPriceMaterialPriceReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\PriceListReply**](../Model/PriceListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

