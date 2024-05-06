# com_kingdee_service\MaterialBrandApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**materialBrandBrandDetail**](MaterialBrandApi.md#materialBrandBrandDetail) | **GET** /jdy/v2/bd/material_brand_detail | 商品品牌详情;获取商品品牌详情;1.0.7
[**materialBrandBrandList**](MaterialBrandApi.md#materialBrandBrandList) | **GET** /jdy/v2/bd/material_brand | 商品品牌列表;获取商品品牌列表;1.0.7
[**materialBrandBrandSave**](MaterialBrandApi.md#materialBrandBrandSave) | **POST** /jdy/v2/bd/material_brand | 商品品牌保存;商品品牌新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.7


# **materialBrandBrandDetail**
> \com_kingdee_service\data\entity\MaterialBrandDetailReply materialBrandBrandDetail($id, $number)

商品品牌详情;获取商品品牌详情;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MaterialBrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->materialBrandBrandDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialBrandApi->materialBrandBrandDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\MaterialBrandDetailReply**](../Model/MaterialBrandDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **materialBrandBrandList**
> \com_kingdee_service\data\entity\BrandListReply materialBrandBrandList($body)

商品品牌列表;获取商品品牌列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MaterialBrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MaterialBrandBrandListReq(); // \com_kingdee_service\data\entity\MaterialBrandBrandListReq | 

try {
    $result = $apiInstance->materialBrandBrandList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialBrandApi->materialBrandBrandList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MaterialBrandBrandListReq**](../Model/MaterialBrandBrandListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\BrandListReply**](../Model/BrandListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **materialBrandBrandSave**
> \com_kingdee_service\data\entity\SaveReply materialBrandBrandSave($body)

商品品牌保存;商品品牌新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MaterialBrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\BrandSaveRequest(); // \com_kingdee_service\data\entity\BrandSaveRequest | 

try {
    $result = $apiInstance->materialBrandBrandSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialBrandApi->materialBrandBrandSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\BrandSaveRequest**](../Model/BrandSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

