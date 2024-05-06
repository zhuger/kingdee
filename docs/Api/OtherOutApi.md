# com_kingdee_service\OtherOutApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**otherOutOtherOutDetail**](OtherOutApi.md#otherOutOtherOutDetail) | **GET** /jdy/v2/scm/inv_other_out_detail | 其他出库单详情;其他出库单详情;1.0.10
[**otherOutOtherOutList**](OtherOutApi.md#otherOutOtherOutList) | **GET** /jdy/v2/scm/inv_other_out | 其他出库单列表;其他出库单列表;1.0.8
[**otherOutOtherOutSave**](OtherOutApi.md#otherOutOtherOutSave) | **POST** /jdy/v2/scm/inv_other_out | 其他出库单保存;其他出库单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.12


# **otherOutOtherOutDetail**
> \com_kingdee_service\data\entity\OtherOutDetailRes otherOutOtherOutDetail($id, $number)

其他出库单详情;其他出库单详情;1.0.10

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\OtherOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->otherOutOtherOutDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherOutApi->otherOutOtherOutDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\OtherOutDetailRes**](../Model/OtherOutDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **otherOutOtherOutList**
> \com_kingdee_service\data\entity\OtherOutListRes otherOutOtherOutList($body)

其他出库单列表;其他出库单列表;1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\OtherOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\OtherOutOtherOutListReq(); // \com_kingdee_service\data\entity\OtherOutOtherOutListReq | 

try {
    $result = $apiInstance->otherOutOtherOutList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherOutApi->otherOutOtherOutList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\OtherOutOtherOutListReq**](../Model/OtherOutOtherOutListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\OtherOutListRes**](../Model/OtherOutListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **otherOutOtherOutSave**
> \com_kingdee_service\data\entity\SaveReply otherOutOtherOutSave($body)

其他出库单保存;其他出库单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.12

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\OtherOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\OtherOutSaveReq(); // \com_kingdee_service\data\entity\OtherOutSaveReq | 

try {
    $result = $apiInstance->otherOutOtherOutSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherOutApi->otherOutOtherOutSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\OtherOutSaveReq**](../Model/OtherOutSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

