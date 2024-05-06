# com_kingdee_service\VoucherTypeApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voucherTypeList**](VoucherTypeApi.md#voucherTypeList) | **GET** /jdy/v2/fi/voucher_type | 凭证字列表;凭证字列表;1.0.8


# **voucherTypeList**
> \com_kingdee_service\data\entity\VoucherTypeListReply voucherTypeList($body)

凭证字列表;凭证字列表;1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\VoucherTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\VoucherTypeListReq(); // \com_kingdee_service\data\entity\VoucherTypeListReq | 

try {
    $result = $apiInstance->voucherTypeList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherTypeApi->voucherTypeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\VoucherTypeListReq**](../Model/VoucherTypeListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\VoucherTypeListReply**](../Model/VoucherTypeListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

