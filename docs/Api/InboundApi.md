# com_kingdee_service\InboundApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inboundDetail**](InboundApi.md#inboundDetail) | **GET** /jdy/v2/pm/subm_prodin_detail | 委外产品入库单详情;委外产品入库单详情;1.0.7
[**inboundList**](InboundApi.md#inboundList) | **GET** /jdy/v2/pm/subm_prodin | 委外产品入库单列表;委外产品入库单列表;1.0.6


# **inboundDetail**
> \com_kingdee_service\data\entity\SubmProdInDetailRes inboundDetail($id, $number)

委外产品入库单详情;委外产品入库单详情;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->inboundDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundApi->inboundDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\SubmProdInDetailRes**](../Model/SubmProdInDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inboundList**
> \com_kingdee_service\data\entity\SubmProdInListRes inboundList($body)

委外产品入库单列表;委外产品入库单列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InboundListReq(); // \com_kingdee_service\data\entity\InboundListReq | 

try {
    $result = $apiInstance->inboundList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InboundApi->inboundList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InboundListReq**](../Model/InboundListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\SubmProdInListRes**](../Model/SubmProdInListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

