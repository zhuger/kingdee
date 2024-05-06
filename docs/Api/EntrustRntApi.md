# com_kingdee_service\EntrustRntApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**entrustRntDetail**](EntrustRntApi.md#entrustRntDetail) | **GET** /jdy/v2/scm/entrust_rtn_detail | 委托代销退货详情;委托代销退货详情;1.0.14
[**entrustRntList**](EntrustRntApi.md#entrustRntList) | **GET** /jdy/v2/scm/entrust_rnt | 委托代销退货列表;委托代销退货列表;1.0.12
[**entrustRntSave**](EntrustRntApi.md#entrustRntSave) | **POST** /jdy/v2/scm/entrust_rnt | 委托代销退货保存;委托代销退货新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.19


# **entrustRntDetail**
> \com_kingdee_service\data\entity\EntrustRntDetailReply entrustRntDetail($id, $number)

委托代销退货详情;委托代销退货详情;1.0.14

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\EntrustRntApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->entrustRntDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntrustRntApi->entrustRntDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\EntrustRntDetailReply**](../Model/EntrustRntDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **entrustRntList**
> \com_kingdee_service\data\entity\EntrustRntListReply entrustRntList($body)

委托代销退货列表;委托代销退货列表;1.0.12

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\EntrustRntApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\EntrustRntListReq(); // \com_kingdee_service\data\entity\EntrustRntListReq | 

try {
    $result = $apiInstance->entrustRntList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntrustRntApi->entrustRntList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\EntrustRntListReq**](../Model/EntrustRntListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\EntrustRntListReply**](../Model/EntrustRntListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **entrustRntSave**
> \com_kingdee_service\data\entity\SaveReply entrustRntSave($body)

委托代销退货保存;委托代销退货新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.19

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\EntrustRntApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SalEntrustRntSaveReq(); // \com_kingdee_service\data\entity\SalEntrustRntSaveReq | 

try {
    $result = $apiInstance->entrustRntSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntrustRntApi->entrustRntSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SalEntrustRntSaveReq**](../Model/SalEntrustRntSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

