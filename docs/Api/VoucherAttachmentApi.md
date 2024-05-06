# com_kingdee_service\VoucherAttachmentApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voucherAttachmentList**](VoucherAttachmentApi.md#voucherAttachmentList) | **GET** /jdy/v2/fi/voucher_attachment | 凭证附件列表;获取凭证附件列表;1.0.6


# **voucherAttachmentList**
> \com_kingdee_service\data\entity\VoucherAttachmentListReply voucherAttachmentList($body)

凭证附件列表;获取凭证附件列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\VoucherAttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\VoucherAttachmentListReq(); // \com_kingdee_service\data\entity\VoucherAttachmentListReq | 

try {
    $result = $apiInstance->voucherAttachmentList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherAttachmentApi->voucherAttachmentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\VoucherAttachmentListReq**](../Model/VoucherAttachmentListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\VoucherAttachmentListReply**](../Model/VoucherAttachmentListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

