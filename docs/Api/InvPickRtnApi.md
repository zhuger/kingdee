# com_kingdee_service\InvPickRtnApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invPickRtnInvPickRtnDetail**](InvPickRtnApi.md#invPickRtnInvPickRtnDetail) | **GET** /jdy/v2/scm/inv_pick_ret_detail | 生产退料单详情;生产退料单详情;1.0.8
[**invPickRtnInvPickRtnList**](InvPickRtnApi.md#invPickRtnInvPickRtnList) | **GET** /jdy/v2/scm/inv_pick_ret | 生产退料单列表;生产退料单列表;1.0.7


# **invPickRtnInvPickRtnDetail**
> \com_kingdee_service\data\entity\InvPickRtnDetailRes invPickRtnInvPickRtnDetail($id, $number)

生产退料单详情;生产退料单详情;1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvPickRtnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->invPickRtnInvPickRtnDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvPickRtnApi->invPickRtnInvPickRtnDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvPickRtnDetailRes**](../Model/InvPickRtnDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invPickRtnInvPickRtnList**
> \com_kingdee_service\data\entity\InvPickRtnListRes invPickRtnInvPickRtnList($body)

生产退料单列表;生产退料单列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvPickRtnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvPickRtnInvPickRtnListReq(); // \com_kingdee_service\data\entity\InvPickRtnInvPickRtnListReq | 

try {
    $result = $apiInstance->invPickRtnInvPickRtnList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvPickRtnApi->invPickRtnInvPickRtnList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvPickRtnInvPickRtnListReq**](../Model/InvPickRtnInvPickRtnListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvPickRtnListRes**](../Model/InvPickRtnListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

