# com_kingdee_service\WorkOrderApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workOrderDetail**](WorkOrderApi.md#workOrderDetail) | **GET** /jdy/v2/pm/subm_workorder_detail | 委外加工单详情;委外加工单详情;1.0.7
[**workOrderList**](WorkOrderApi.md#workOrderList) | **GET** /jdy/v2/pm/subm_workorder | 委外加工单列表;委外加工单列表;1.0.6


# **workOrderDetail**
> \com_kingdee_service\data\entity\WorkOrderDetailRes workOrderDetail($id, $number)

委外加工单详情;委外加工单详情;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\WorkOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->workOrderDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderApi->workOrderDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\WorkOrderDetailRes**](../Model/WorkOrderDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workOrderList**
> \com_kingdee_service\data\entity\WorkOrderListRes workOrderList($body)

委外加工单列表;委外加工单列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\WorkOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\WorkOrderListReq(); // \com_kingdee_service\data\entity\WorkOrderListReq | 

try {
    $result = $apiInstance->workOrderList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkOrderApi->workOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\WorkOrderListReq**](../Model/WorkOrderListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\WorkOrderListRes**](../Model/WorkOrderListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

