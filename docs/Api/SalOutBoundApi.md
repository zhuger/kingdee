# com_kingdee_service\SalOutBoundApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salOutBoundDetail**](SalOutBoundApi.md#salOutBoundDetail) | **GET** /jdy/v2/scm/sal_out_bound_detail | 销售出库单详情;销售出库单详情;1.0.13
[**salOutBoundList**](SalOutBoundApi.md#salOutBoundList) | **GET** /jdy/v2/scm/sal_out_bound | 销售出库单列表;销售出库单列表;1.0.10
[**salOutBoundSave**](SalOutBoundApi.md#salOutBoundSave) | **POST** /jdy/v2/scm/sal_out_bound | 销售出库单保存;销售出库单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.20


# **salOutBoundDetail**
> \com_kingdee_service\data\entity\SalOutBoundDetailReply salOutBoundDetail($id, $number)

销售出库单详情;销售出库单详情;1.0.13

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SalOutBoundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->salOutBoundDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalOutBoundApi->salOutBoundDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\SalOutBoundDetailReply**](../Model/SalOutBoundDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salOutBoundList**
> \com_kingdee_service\data\entity\SalOutBoundListReply salOutBoundList($body)

销售出库单列表;销售出库单列表;1.0.10

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SalOutBoundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SalOutBoundListReq(); // \com_kingdee_service\data\entity\SalOutBoundListReq | 

try {
    $result = $apiInstance->salOutBoundList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalOutBoundApi->salOutBoundList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SalOutBoundListReq**](../Model/SalOutBoundListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\SalOutBoundListReply**](../Model/SalOutBoundListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salOutBoundSave**
> \com_kingdee_service\data\entity\SaveReply salOutBoundSave($body)

销售出库单保存;销售出库单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.20

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SalOutBoundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SalOutBoundSaveReq(); // \com_kingdee_service\data\entity\SalOutBoundSaveReq | 

try {
    $result = $apiInstance->salOutBoundSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalOutBoundApi->salOutBoundSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SalOutBoundSaveReq**](../Model/SalOutBoundSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

