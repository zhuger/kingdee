# com_kingdee_service\PayRollApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payRollBillDetail**](PayRollApi.md#payRollBillDetail) | **GET** /jdy/v2/fi/sa_bill_detail | 工资单详情;获取工资单详情;1.0.6
[**payRollBillList**](PayRollApi.md#payRollBillList) | **GET** /jdy/v2/fi/sa_bill | 工资单列表;获取工资单列表;1.0.5
[**payRollBillSave**](PayRollApi.md#payRollBillSave) | **POST** /jdy/v2/fi/sa_bill | 工资单保存;工资单修改及新增;1.0.6


# **payRollBillDetail**
> \com_kingdee_service\data\entity\BillDetailReply payRollBillDetail($id)

工资单详情;获取工资单详情;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\PayRollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id;c=123457452;d=true.

try {
    $result = $apiInstance->payRollBillDetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRollApi->payRollBillDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id;c&#x3D;123457452;d&#x3D;true. | [optional]

### Return type

[**\com_kingdee_service\data\entity\BillDetailReply**](../Model/BillDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payRollBillList**
> \com_kingdee_service\data\entity\BillListReply payRollBillList($body)

工资单列表;获取工资单列表;1.0.5

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\PayRollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\PayRollBillListReq(); // \com_kingdee_service\data\entity\PayRollBillListReq | 

try {
    $result = $apiInstance->payRollBillList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRollApi->payRollBillList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\PayRollBillListReq**](../Model/PayRollBillListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\BillListReply**](../Model/BillListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payRollBillSave**
> \com_kingdee_service\data\entity\SaveReply payRollBillSave($body)

工资单保存;工资单修改及新增;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\PayRollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\BillSaveRequest(); // \com_kingdee_service\data\entity\BillSaveRequest | 

try {
    $result = $apiInstance->payRollBillSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayRollApi->payRollBillSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\BillSaveRequest**](../Model/BillSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

