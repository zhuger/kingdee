# com_kingdee_service\InvTfApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invTfInvTfDiffList**](InvTfApi.md#invTfInvTfDiffList) | **GET** /jdy/v2/scm/inv_tfdiff | 调拨差异单列表;调拨差异单列表;1.0.6
[**invTfInvTfInDrawList**](InvTfApi.md#invTfInvTfInDrawList) | **POST** /jdy/v2/scm/inv_tfin_draw | 调拨差异处理;调拨差异处理;1.0.7


# **invTfInvTfDiffList**
> \com_kingdee_service\data\entity\InvTfDiffListRes invTfInvTfDiffList($body)

调拨差异单列表;调拨差异单列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvTfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvTfInvTfDiffListReq(); // \com_kingdee_service\data\entity\InvTfInvTfDiffListReq | 

try {
    $result = $apiInstance->invTfInvTfDiffList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvTfApi->invTfInvTfDiffList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvTfInvTfDiffListReq**](../Model/InvTfInvTfDiffListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\InvTfDiffListRes**](../Model/InvTfDiffListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invTfInvTfInDrawList**
> \com_kingdee_service\data\entity\InvTfInDrawListRes invTfInvTfInDrawList($body)

调拨差异处理;调拨差异处理;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\InvTfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\InvTfInDrawListReq(); // \com_kingdee_service\data\entity\InvTfInDrawListReq | 

try {
    $result = $apiInstance->invTfInvTfInDrawList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvTfApi->invTfInvTfInDrawList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\InvTfInDrawListReq**](../Model/InvTfInDrawListReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\InvTfInDrawListRes**](../Model/InvTfInDrawListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

