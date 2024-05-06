# com_kingdee_service\FpApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fpDetail**](FpApi.md#fpDetail) | **GET** /jdy/v2/fi/invoice_detail | 发票详情;获取发票详情;1.0.7
[**fpList**](FpApi.md#fpList) | **GET** /jdy/v2/fi/invoice_fp | 发票列表;获取发票列表;1.0.7


# **fpDetail**
> \com_kingdee_service\data\entity\InvoiceDetailReply fpDetail($invoice_no)

发票详情;获取发票详情;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\FpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_no = array("invoice_no_example"); // string[] | a=发票号码;c=[];d=true.

try {
    $result = $apiInstance->fpDetail($invoice_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FpApi->fpDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_no** | [**string[]**](../Model/string.md)| a&#x3D;发票号码;c&#x3D;[];d&#x3D;true. | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvoiceDetailReply**](../Model/InvoiceDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fpList**
> \com_kingdee_service\data\entity\InvoiceListReply fpList($body)

发票列表;获取发票列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\FpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\FpListReq(); // \com_kingdee_service\data\entity\FpListReq | 

try {
    $result = $apiInstance->fpList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FpApi->fpList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\FpListReq**](../Model/FpListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvoiceListReply**](../Model/InvoiceListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

