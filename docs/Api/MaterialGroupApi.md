# com_kingdee_service\MaterialGroupApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**materialGroupGroupDetail**](MaterialGroupApi.md#materialGroupGroupDetail) | **GET** /jdy/v2/bd/material_group | 商品分类列表;商品分类列表;1.0.8
[**materialGroupGroupList**](MaterialGroupApi.md#materialGroupGroupList) | **GET** /jdy/v2/bd/material_group_detail | 商品分类详情;商品分类详情;1.0.6
[**materialGroupGroupSave**](MaterialGroupApi.md#materialGroupGroupSave) | **POST** /jdy/v2/bd/material_group | 商品分类保存;商品分类新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.7


# **materialGroupGroupDetail**
> \com_kingdee_service\data\entity\GroupListReply materialGroupGroupDetail($body)

商品分类列表;商品分类列表;1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MaterialGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MaterialGroupGroupDetailReq(); // \com_kingdee_service\data\entity\MaterialGroupGroupDetailReq | 

try {
    $result = $apiInstance->materialGroupGroupDetail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialGroupApi->materialGroupGroupDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MaterialGroupGroupDetailReq**](../Model/MaterialGroupGroupDetailReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\GroupListReply**](../Model/GroupListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **materialGroupGroupList**
> \com_kingdee_service\data\entity\GroupDetailReply materialGroupGroupList($id, $number)

商品分类详情;商品分类详情;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MaterialGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->materialGroupGroupList($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialGroupApi->materialGroupGroupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\GroupDetailReply**](../Model/GroupDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **materialGroupGroupSave**
> \com_kingdee_service\data\entity\SaveReply materialGroupGroupSave($body)

商品分类保存;商品分类新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MaterialGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\GroupSaveRequest(); // \com_kingdee_service\data\entity\GroupSaveRequest | 

try {
    $result = $apiInstance->materialGroupGroupSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialGroupApi->materialGroupGroupSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\GroupSaveRequest**](../Model/GroupSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

