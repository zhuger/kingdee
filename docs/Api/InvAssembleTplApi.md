# com_kingdee_service\InvAssembleTplApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invAssembleTplAssembleTplDetail**](InvAssembleTplApi.md#invAssembleTplAssembleTplDetail) | **GET** /jdy/v2/scm/assemble_tpl_detail | 组装拆卸模板详情;组装拆卸模板详情;1.0.7
[**invAssembleTplAssembleTplList**](InvAssembleTplApi.md#invAssembleTplAssembleTplList) | **GET** /jdy/v2/scm/assemble_tpl | 组装拆卸模板列表;组装拆卸模板列表;1.0.7


# **invAssembleTplAssembleTplDetail**
> \com_kingdee_service\data\entity\AssembleTplDetailRes invAssembleTplAssembleTplDetail($id, $number)

组装拆卸模板详情;组装拆卸模板详情;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvAssembleTplApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->invAssembleTplAssembleTplDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvAssembleTplApi->invAssembleTplAssembleTplDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\AssembleTplDetailRes**](../Model/AssembleTplDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invAssembleTplAssembleTplList**
> \com_kingdee_service\data\entity\AssembleTplListRes invAssembleTplAssembleTplList($body)

组装拆卸模板列表;组装拆卸模板列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvAssembleTplApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvAssembleTplAssembleTplListReq(); // \com_kingdee_service\data\entity\InvAssembleTplAssembleTplListReq | 

try {
    $result = $apiInstance->invAssembleTplAssembleTplList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvAssembleTplApi->invAssembleTplAssembleTplList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvAssembleTplAssembleTplListReq**](../Model/InvAssembleTplAssembleTplListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\AssembleTplListRes**](../Model/AssembleTplListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

