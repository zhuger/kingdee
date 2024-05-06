# com_kingdee_service\RetailBillApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retailBillDetail**](RetailBillApi.md#retailBillDetail) | **GET** /jdy/v2/ls/retail_bill_detail | 零售单详情;零售单详情;1.0.6
[**retailBillList**](RetailBillApi.md#retailBillList) | **GET** /jdy/v2/ls/retail_bill | 零售单列表;零售单列表;1.0.7
[**retailBillSave**](RetailBillApi.md#retailBillSave) | **POST** /jdy/v2/ls/retail_bill | 零售单保存;零售单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.9


# **retailBillDetail**
> \com_kingdee_service\data\entity\RetailBillDetailRes retailBillDetail($bill_id, $bill_no, $inner_no)

零售单详情;零售单详情;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\RetailBillApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bill_id = "bill_id_example"; // string | a=支持ID精确查询，零售单保存接口返回的订单ID;c=1;d=false.
$bill_no = "bill_no_example"; // string | a=支持按照订单编号查询，零售单接口保存返回的订单编号;c=001;d=false.
$inner_no = "inner_no_example"; // string | a=商城单据内码，外部对接方系统唯一标识，零售单保存对应的srcBillId;c=001;d=false.

try {
    $result = $apiInstance->retailBillDetail($bill_id, $bill_no, $inner_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetailBillApi->retailBillDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bill_id** | **string**| a&#x3D;支持ID精确查询，零售单保存接口返回的订单ID;c&#x3D;1;d&#x3D;false. | [optional]
 **bill_no** | **string**| a&#x3D;支持按照订单编号查询，零售单接口保存返回的订单编号;c&#x3D;001;d&#x3D;false. | [optional]
 **inner_no** | **string**| a&#x3D;商城单据内码，外部对接方系统唯一标识，零售单保存对应的srcBillId;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\RetailBillDetailRes**](../Model/RetailBillDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retailBillList**
> \com_kingdee_service\data\entity\RetailBillRes retailBillList($body)

零售单列表;零售单列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\RetailBillApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\RetailBillListReq(); // \com_kingdee_service\data\entity\RetailBillListReq | 

try {
    $result = $apiInstance->retailBillList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetailBillApi->retailBillList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\RetailBillListReq**](../Model/RetailBillListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\RetailBillRes**](../Model/RetailBillRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retailBillSave**
> \com_kingdee_service\data\entity\RetailBillSaveRes retailBillSave($body)

零售单保存;零售单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.9

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\RetailBillApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\RetailBillSaveReq(); // \com_kingdee_service\data\entity\RetailBillSaveReq | 

try {
    $result = $apiInstance->retailBillSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetailBillApi->retailBillSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\RetailBillSaveReq**](../Model/RetailBillSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\RetailBillSaveRes**](../Model/RetailBillSaveRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

