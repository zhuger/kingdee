# com_kingdee_service\InvDisassembleApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invDisassembleDisAssembleDetail**](InvDisassembleApi.md#invDisassembleDisAssembleDetail) | **GET** /jdy/v2/scm/inv_disassemble_detail | 拆卸单详情;拆卸单详情;1.0.9
[**invDisassembleDisAssembleList**](InvDisassembleApi.md#invDisassembleDisAssembleList) | **GET** /jdy/v2/scm/inv_disassemble | 拆卸单列表;拆卸单列表;1.0.7
[**invDisassembleDisAssembleSave**](InvDisassembleApi.md#invDisassembleDisAssembleSave) | **POST** /jdy/v2/scm/inv_disassemble | 拆卸单保存;拆卸单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.11


# **invDisassembleDisAssembleDetail**
> \com_kingdee_service\data\entity\DisAssembleDetailRes invDisassembleDisAssembleDetail($id, $number)

拆卸单详情;拆卸单详情;1.0.9

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvDisassembleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->invDisassembleDisAssembleDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvDisassembleApi->invDisassembleDisAssembleDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\DisAssembleDetailRes**](../Model/DisAssembleDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invDisassembleDisAssembleList**
> \com_kingdee_service\data\entity\DisAssembleListRes invDisassembleDisAssembleList($body)

拆卸单列表;拆卸单列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvDisassembleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvDisassembleDisAssembleListReq(); // \com_kingdee_service\data\entity\InvDisassembleDisAssembleListReq | 

try {
    $result = $apiInstance->invDisassembleDisAssembleList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvDisassembleApi->invDisassembleDisAssembleList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvDisassembleDisAssembleListReq**](../Model/InvDisassembleDisAssembleListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\DisAssembleListRes**](../Model/DisAssembleListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invDisassembleDisAssembleSave**
> \com_kingdee_service\data\entity\SaveReply invDisassembleDisAssembleSave($body)

拆卸单保存;拆卸单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.11

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvDisassembleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\DisAssembleSaveReq(); // \com_kingdee_service\data\entity\DisAssembleSaveReq | 

try {
    $result = $apiInstance->invDisassembleDisAssembleSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvDisassembleApi->invDisassembleDisAssembleSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\DisAssembleSaveReq**](../Model/DisAssembleSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

