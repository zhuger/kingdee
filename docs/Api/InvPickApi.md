# com_kingdee_service\InvPickApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invPickFaSave**](InvPickApi.md#invPickFaSave) | **POST** /jdy/v2/scm/inv_invpink_save_v2 | 生产领料单保存;生产领料单保存;1.0.4
[**invPickInvPickDetail**](InvPickApi.md#invPickInvPickDetail) | **GET** /jdy/v2/scm/inv_pick_detail | 生产领料单详情;生产领料单详情;1.0.9
[**invPickInvPickList**](InvPickApi.md#invPickInvPickList) | **GET** /jdy/v2/scm/inv_pick | 生产领料单列表;生产领料单列表;1.0.7


# **invPickFaSave**
> \com_kingdee_service\data\entity\SaveReply invPickFaSave($body)

生产领料单保存;生产领料单保存;1.0.4

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvPickApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\PickSaveRequest(); // \com_kingdee_service\data\entity\PickSaveRequest | 

try {
    $result = $apiInstance->invPickFaSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvPickApi->invPickFaSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\PickSaveRequest**](../Model/PickSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invPickInvPickDetail**
> \com_kingdee_service\data\entity\InvPickDetailRes invPickInvPickDetail($id, $number)

生产领料单详情;生产领料单详情;1.0.9

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvPickApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->invPickInvPickDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvPickApi->invPickInvPickDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvPickDetailRes**](../Model/InvPickDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invPickInvPickList**
> \com_kingdee_service\data\entity\InvPickListRes invPickInvPickList($body)

生产领料单列表;生产领料单列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvPickApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvPickInvPickListReq(); // \com_kingdee_service\data\entity\InvPickInvPickListReq | 

try {
    $result = $apiInstance->invPickInvPickList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvPickApi->invPickInvPickList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvPickInvPickListReq**](../Model/InvPickInvPickListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvPickListRes**](../Model/InvPickListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

