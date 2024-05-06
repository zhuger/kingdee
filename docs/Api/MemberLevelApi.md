# com_kingdee_service\MemberLevelApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**memberLevelList**](MemberLevelApi.md#memberLevelList) | **GET** /jdy/v2/ls/mb_level | 会员级别列表;会员级别列表;1.0.6


# **memberLevelList**
> \com_kingdee_service\data\entity\MemberLevelRes memberLevelList($body)

会员级别列表;会员级别列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MemberLevelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MemberLevelListReq(); // \com_kingdee_service\data\entity\MemberLevelListReq | 

try {
    $result = $apiInstance->memberLevelList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberLevelApi->memberLevelList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MemberLevelListReq**](../Model/MemberLevelListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\MemberLevelRes**](../Model/MemberLevelRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

