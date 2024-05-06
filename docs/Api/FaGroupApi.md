# com_kingdee_service\FaGroupApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**faGroupList**](FaGroupApi.md#faGroupList) | **GET** /jdy/v2/fi/fa_group | 资产类别列表;获取资产类别列表;1.0.13
[**faGroupSave**](FaGroupApi.md#faGroupSave) | **POST** /jdy/v2/fi/fa_group_save | 资产类别保存;资产类别保存;1.0.13


# **faGroupList**
> \com_kingdee_service\data\entity\GroupListReply faGroupList($body)

资产类别列表;获取资产类别列表;1.0.13

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\FaGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\FaGroupListReq(); // \com_kingdee_service\data\entity\FaGroupListReq | 

try {
    $result = $apiInstance->faGroupList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaGroupApi->faGroupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\FaGroupListReq**](../Model/FaGroupListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\GroupListReply**](../Model/GroupListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faGroupSave**
> \com_kingdee_service\data\entity\SaveReply faGroupSave($body)

资产类别保存;资产类别保存;1.0.13

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\FaGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\GroupSaveRequest(); // \com_kingdee_service\data\entity\GroupSaveRequest | 

try {
    $result = $apiInstance->faGroupSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaGroupApi->faGroupSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\GroupSaveRequest**](../Model/GroupSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

