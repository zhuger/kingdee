# com_kingdee_service\MatIssueOrderApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**matIssueOrderDetail**](MatIssueOrderApi.md#matIssueOrderDetail) | **GET** /jdy/v2/pm/mat_issue_order_detail | 委外发料单详情;委外发料单详情;1.0.7
[**matIssueOrderList**](MatIssueOrderApi.md#matIssueOrderList) | **GET** /jdy/v2/pm/mat_issue_order | 委外发料单列表;委外发料单列表;1.0.6


# **matIssueOrderDetail**
> \com_kingdee_service\data\entity\MatIssueOrderDetailReply matIssueOrderDetail($id, $number)

委外发料单详情;委外发料单详情;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MatIssueOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->matIssueOrderDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatIssueOrderApi->matIssueOrderDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\MatIssueOrderDetailReply**](../Model/MatIssueOrderDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **matIssueOrderList**
> \com_kingdee_service\data\entity\MatIssueOrderListReply matIssueOrderList($body)

委外发料单列表;委外发料单列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MatIssueOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MatIssueOrderListReq(); // \com_kingdee_service\data\entity\MatIssueOrderListReq | 

try {
    $result = $apiInstance->matIssueOrderList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MatIssueOrderApi->matIssueOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MatIssueOrderListReq**](../Model/MatIssueOrderListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\MatIssueOrderListReply**](../Model/MatIssueOrderListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

