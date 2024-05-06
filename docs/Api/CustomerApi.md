# com_kingdee_service\CustomerApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerCustomerDetail**](CustomerApi.md#customerCustomerDetail) | **GET** /jdy/v2/bd/customer_detail | 客户详情;获取客户详情;1.0.9
[**customerCustomerList**](CustomerApi.md#customerCustomerList) | **GET** /jdy/v2/bd/customer | 客户列表;获取客户列表;1.0.7
[**customerCustomerSave**](CustomerApi.md#customerCustomerSave) | **POST** /jdy/v2/bd/customer | 客户保存;客户新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.9


# **customerCustomerDetail**
> \com_kingdee_service\data\entity\CustomerDetailRes customerCustomerDetail($id, $number, $show_period, $show_un_visit_days, $show_business_time, $show_debt)

客户详情;获取客户详情;1.0.9

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id;b=2147483647;c=1;d=true.
$number = "number_example"; // string | a=编码;b=30;c=001;d=false.
$show_period = true; // bool | a=是否查询周期信息，true-查询，false-不查询；默认为：false;b=1;c=false;d=false.
$show_un_visit_days = true; // bool | a=是否显示未拜访天数；默认false-不显示;b=1;c=false;d=false.
$show_business_time = true; // bool | a=是否查询客户最近交易时间，true-查询，false-不查询；默认为：false;b=1;c=1;d=false.
$show_debt = true; // bool | a=是否查询客户欠款，true-查询，false-不查询；默认为：false;b=1;c=false;d=false.

try {
    $result = $apiInstance->customerCustomerDetail($id, $number, $show_period, $show_un_visit_days, $show_business_time, $show_debt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCustomerDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id;b&#x3D;2147483647;c&#x3D;1;d&#x3D;true. | [optional]
 **number** | **string**| a&#x3D;编码;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]
 **show_period** | **bool**| a&#x3D;是否查询周期信息，true-查询，false-不查询；默认为：false;b&#x3D;1;c&#x3D;false;d&#x3D;false. | [optional]
 **show_un_visit_days** | **bool**| a&#x3D;是否显示未拜访天数；默认false-不显示;b&#x3D;1;c&#x3D;false;d&#x3D;false. | [optional]
 **show_business_time** | **bool**| a&#x3D;是否查询客户最近交易时间，true-查询，false-不查询；默认为：false;b&#x3D;1;c&#x3D;1;d&#x3D;false. | [optional]
 **show_debt** | **bool**| a&#x3D;是否查询客户欠款，true-查询，false-不查询；默认为：false;b&#x3D;1;c&#x3D;false;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\CustomerDetailRes**](../Model/CustomerDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerList**
> \com_kingdee_service\data\entity\CustomerListRes customerCustomerList($body)

客户列表;获取客户列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\CustomerCustomerListReq(); // \com_kingdee_service\data\entity\CustomerCustomerListReq | 

try {
    $result = $apiInstance->customerCustomerList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCustomerList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\CustomerCustomerListReq**](../Model/CustomerCustomerListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\CustomerListRes**](../Model/CustomerListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerSave**
> \com_kingdee_service\data\entity\SaveReply customerCustomerSave($body)

客户保存;客户新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.9

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\CustomerSaveReq(); // \com_kingdee_service\data\entity\CustomerSaveReq | 

try {
    $result = $apiInstance->customerCustomerSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customerCustomerSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\CustomerSaveReq**](../Model/CustomerSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

