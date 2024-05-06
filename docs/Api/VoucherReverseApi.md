# com_kingdee_service\VoucherReverseApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**voucherReverseReverse**](VoucherReverseApi.md#voucherReverseReverse) | **POST** /jdy/v2/fi/voucher_reverse | 凭证冲销;冲销凭证;1.0.6


# **voucherReverseReverse**
> \com_kingdee_service\data\entity\VoucherReverseReply voucherReverseReverse($body)

凭证冲销;冲销凭证;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\VoucherReverseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\IdsRequest(); // \com_kingdee_service\data\entity\IdsRequest | 

try {
    $result = $apiInstance->voucherReverseReverse($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherReverseApi->voucherReverseReverse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\IdsRequest**](../Model/IdsRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\VoucherReverseReply**](../Model/VoucherReverseReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

