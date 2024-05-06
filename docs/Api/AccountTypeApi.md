# com_kingdee_service\AccountTypeApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountTypeList**](AccountTypeApi.md#accountTypeList) | **GET** /jdy/v2/fi/account_type | 科目类别列表;获取科目类别列表;1.0.6


# **accountTypeList**
> \com_kingdee_service\data\entity\AccountTypeListReply accountTypeList($body)

科目类别列表;获取科目类别列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\AccountTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\AccountTypeListReq(); // \com_kingdee_service\data\entity\AccountTypeListReq | 

try {
    $result = $apiInstance->accountTypeList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTypeApi->accountTypeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\AccountTypeListReq**](../Model/AccountTypeListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\AccountTypeListReply**](../Model/AccountTypeListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

