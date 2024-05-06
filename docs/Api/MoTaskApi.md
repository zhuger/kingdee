# com_kingdee_service\MoTaskApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**moTaskDetail**](MoTaskApi.md#moTaskDetail) | **GET** /jdy/v2/pm/mo_taskbill_detail | 生产任务单详情;生产任务单详情;1.0.9
[**moTaskList**](MoTaskApi.md#moTaskList) | **GET** /jdy/v2/pm/mo_taskbill | 生产任务单列表;生产任务单列表;1.0.9


# **moTaskDetail**
> \com_kingdee_service\data\entity\MoTaskDetailRes moTaskDetail($id, $number)

生产任务单详情;生产任务单详情;1.0.9

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MoTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->moTaskDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MoTaskApi->moTaskDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\MoTaskDetailRes**](../Model/MoTaskDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moTaskList**
> \com_kingdee_service\data\entity\MoTaskListRes moTaskList($body)

生产任务单列表;生产任务单列表;1.0.9

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MoTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MoTaskListReq(); // \com_kingdee_service\data\entity\MoTaskListReq | 

try {
    $result = $apiInstance->moTaskList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MoTaskApi->moTaskList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MoTaskListReq**](../Model/MoTaskListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\MoTaskListRes**](../Model/MoTaskListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

