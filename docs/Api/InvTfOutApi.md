# com_kingdee_service\InvTfOutApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invTfOutInvTfOutDetail**](InvTfOutApi.md#invTfOutInvTfOutDetail) | **GET** /jdy/v2/scm/inv_tfout_detail | 调拨出库单详情;调拨出库单详情;1.0.10
[**invTfOutInvTfOutList**](InvTfOutApi.md#invTfOutInvTfOutList) | **GET** /jdy/v2/scm/inv_tfout | 调拨出库单列表;调拨出库单列表;1.0.7
[**invTfOutInvTfOutSave**](InvTfOutApi.md#invTfOutInvTfOutSave) | **POST** /jdy/v2/scm/inv_tfout | 调拨出库单保存;调拨出库单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.11


# **invTfOutInvTfOutDetail**
> \com_kingdee_service\data\entity\InvTfOutDetailRes invTfOutInvTfOutDetail($id, $number)

调拨出库单详情;调拨出库单详情;1.0.10

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvTfOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->invTfOutInvTfOutDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvTfOutApi->invTfOutInvTfOutDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvTfOutDetailRes**](../Model/InvTfOutDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invTfOutInvTfOutList**
> \com_kingdee_service\data\entity\InvTfOutListRes invTfOutInvTfOutList($body)

调拨出库单列表;调拨出库单列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvTfOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvTfOutInvTfOutListReq(); // \com_kingdee_service\data\entity\InvTfOutInvTfOutListReq | 

try {
    $result = $apiInstance->invTfOutInvTfOutList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvTfOutApi->invTfOutInvTfOutList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvTfOutInvTfOutListReq**](../Model/InvTfOutInvTfOutListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvTfOutListRes**](../Model/InvTfOutListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invTfOutInvTfOutSave**
> \com_kingdee_service\data\entity\SaveReply invTfOutInvTfOutSave($body)

调拨出库单保存;调拨出库单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.11

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvTfOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvTfOutSaveReq(); // \com_kingdee_service\data\entity\InvTfOutSaveReq | 

try {
    $result = $apiInstance->invTfOutInvTfOutSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvTfOutApi->invTfOutInvTfOutSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvTfOutSaveReq**](../Model/InvTfOutSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

