# com_kingdee_service\SalaryItemsApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salaryItemsSalaryItemsList**](SalaryItemsApi.md#salaryItemsSalaryItemsList) | **GET** /jdy/v2/fi/sa_item | 工资项目列表;获取工资项目列表;1.0.2
[**salaryItemsSalaryItemsSave**](SalaryItemsApi.md#salaryItemsSalaryItemsSave) | **POST** /jdy/v2/fi/sa_item | 工资项目保存;工资项目修改及增加;1.0.2


# **salaryItemsSalaryItemsList**
> \com_kingdee_service\data\entity\SalaryItemsListReply salaryItemsSalaryItemsList($body)

工资项目列表;获取工资项目列表;1.0.2

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SalaryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SalaryItemsSalaryItemsListReq(); // \com_kingdee_service\data\entity\SalaryItemsSalaryItemsListReq | 

try {
    $result = $apiInstance->salaryItemsSalaryItemsList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryItemsApi->salaryItemsSalaryItemsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SalaryItemsSalaryItemsListReq**](../Model/SalaryItemsSalaryItemsListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\SalaryItemsListReply**](../Model/SalaryItemsListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salaryItemsSalaryItemsSave**
> \com_kingdee_service\data\entity\SaveReply salaryItemsSalaryItemsSave($body)

工资项目保存;工资项目修改及增加;1.0.2

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SalaryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SalaryItemsSaveRequest(); // \com_kingdee_service\data\entity\SalaryItemsSaveRequest | 

try {
    $result = $apiInstance->salaryItemsSalaryItemsSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalaryItemsApi->salaryItemsSalaryItemsSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SalaryItemsSaveRequest**](../Model/SalaryItemsSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

