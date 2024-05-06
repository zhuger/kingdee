# com_kingdee_service\SalInBoundApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salInBoundDetail**](SalInBoundApi.md#salInBoundDetail) | **GET** /jdy/v2/scm/sal_in_bound_detail | 销售退货单详情;销售退货单详情;1.0.11
[**salInBoundList**](SalInBoundApi.md#salInBoundList) | **GET** /jdy/v2/scm/sal_in_bound | 销售退货单列表;销售退货单列表;1.0.8
[**salInBoundSave**](SalInBoundApi.md#salInBoundSave) | **POST** /jdy/v2/scm/sal_in_bound | 销售退货单保存;销售退货单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.2


# **salInBoundDetail**
> \com_kingdee_service\data\entity\SalInBoundDetailReply salInBoundDetail($id, $number)

销售退货单详情;销售退货单详情;1.0.11

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SalInBoundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->salInBoundDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalInBoundApi->salInBoundDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\SalInBoundDetailReply**](../Model/SalInBoundDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salInBoundList**
> \com_kingdee_service\data\entity\SalInBoundListReply salInBoundList($body)

销售退货单列表;销售退货单列表;1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SalInBoundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SalInBoundListReq(); // \com_kingdee_service\data\entity\SalInBoundListReq | 

try {
    $result = $apiInstance->salInBoundList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalInBoundApi->salInBoundList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SalInBoundListReq**](../Model/SalInBoundListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\SalInBoundListReply**](../Model/SalInBoundListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salInBoundSave**
> \com_kingdee_service\data\entity\SaveReply salInBoundSave($body)

销售退货单保存;销售退货单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.2

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SalInBoundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SalInBoundSaveReq(); // \com_kingdee_service\data\entity\SalInBoundSaveReq | 

try {
    $result = $apiInstance->salInBoundSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalInBoundApi->salInBoundSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SalInBoundSaveReq**](../Model/SalInBoundSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

