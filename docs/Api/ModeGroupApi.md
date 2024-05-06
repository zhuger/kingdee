# com_kingdee_service\ModeGroupApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**modeGroupList**](ModeGroupApi.md#modeGroupList) | **GET** /jdy/v2/fi/fa_modegroup | 变动方式列表;变动方式分类列表;1.0.8


# **modeGroupList**
> \com_kingdee_service\data\entity\GAltermodeListReply modeGroupList($body)

变动方式列表;变动方式分类列表;1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\ModeGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\ModeGroupListReq(); // \com_kingdee_service\data\entity\ModeGroupListReq | 

try {
    $result = $apiInstance->modeGroupList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModeGroupApi->modeGroupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\ModeGroupListReq**](../Model/ModeGroupListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\GAltermodeListReply**](../Model/GAltermodeListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

