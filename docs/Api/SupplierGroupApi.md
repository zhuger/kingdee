# com_kingdee_service\SupplierGroupApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**supplierGroupGroupList**](SupplierGroupApi.md#supplierGroupGroupList) | **GET** /jdy/v2/bd/supplier_group | 供应商分类列表;获取供应商分类列表;1.0.7
[**supplierGroupGroupSave**](SupplierGroupApi.md#supplierGroupGroupSave) | **POST** /jdy/v2/bd/supplier_group | 供应商分类保存;供应商分类新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.7


# **supplierGroupGroupList**
> \com_kingdee_service\data\entity\SupplierGroupListRes supplierGroupGroupList($body)

供应商分类列表;获取供应商分类列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SupplierGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SupplierGroupGroupListReq(); // \com_kingdee_service\data\entity\SupplierGroupGroupListReq | 

try {
    $result = $apiInstance->supplierGroupGroupList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierGroupApi->supplierGroupGroupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SupplierGroupGroupListReq**](../Model/SupplierGroupGroupListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\SupplierGroupListRes**](../Model/SupplierGroupListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierGroupGroupSave**
> \com_kingdee_service\data\entity\SaveReply supplierGroupGroupSave($body)

供应商分类保存;供应商分类新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SupplierGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SupplierGroupSaveReq(); // \com_kingdee_service\data\entity\SupplierGroupSaveReq | 

try {
    $result = $apiInstance->supplierGroupGroupSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierGroupApi->supplierGroupGroupSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SupplierGroupSaveReq**](../Model/SupplierGroupSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

