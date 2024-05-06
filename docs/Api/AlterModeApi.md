# com_kingdee_service\AlterModeApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alterModeFaSave**](AlterModeApi.md#alterModeFaSave) | **POST** /jdy/v2/fi/fa_altermode_save | 变动方式保存;获取变动方式保存;1.0.9
[**alterModeList**](AlterModeApi.md#alterModeList) | **GET** /jdy/v2/fi/fa_altermode | 变动方式列表;获取变动方式列表;1.0.7


# **alterModeFaSave**
> \com_kingdee_service\data\entity\SaveReply alterModeFaSave($body)

变动方式保存;获取变动方式保存;1.0.9

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\AlterModeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\AltermodeSaveRequest(); // \com_kingdee_service\data\entity\AltermodeSaveRequest | 

try {
    $result = $apiInstance->alterModeFaSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlterModeApi->alterModeFaSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\AltermodeSaveRequest**](../Model/AltermodeSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **alterModeList**
> \com_kingdee_service\data\entity\AltermodeListReply alterModeList($body)

变动方式列表;获取变动方式列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\AlterModeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\AlterModeListReq(); // \com_kingdee_service\data\entity\AlterModeListReq | 

try {
    $result = $apiInstance->alterModeList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlterModeApi->alterModeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\AlterModeListReq**](../Model/AlterModeListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\AltermodeListReply**](../Model/AltermodeListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

