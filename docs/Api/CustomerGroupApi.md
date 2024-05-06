# com_kingdee_service\CustomerGroupApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerGroupGroupList**](CustomerGroupApi.md#customerGroupGroupList) | **GET** /jdy/v2/bd/customer_group | 客户分类列表;获取客户分类列表;1.0.7
[**customerGroupGroupSave**](CustomerGroupApi.md#customerGroupGroupSave) | **POST** /jdy/v2/bd/customer_group | 客户分类保存;客户分类新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.7


# **customerGroupGroupList**
> \com_kingdee_service\data\entity\CustomerGroupListRes customerGroupGroupList($body)

客户分类列表;获取客户分类列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\CustomerGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\CustomerGroupGroupListReq(); // \com_kingdee_service\data\entity\CustomerGroupGroupListReq | 

try {
    $result = $apiInstance->customerGroupGroupList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupApi->customerGroupGroupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\CustomerGroupGroupListReq**](../Model/CustomerGroupGroupListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\CustomerGroupListRes**](../Model/CustomerGroupListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupGroupSave**
> \com_kingdee_service\data\entity\SaveReply customerGroupGroupSave($body)

客户分类保存;客户分类新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\CustomerGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\CustomerGroupSaveReq(); // \com_kingdee_service\data\entity\CustomerGroupSaveReq | 

try {
    $result = $apiInstance->customerGroupGroupSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupApi->customerGroupGroupSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\CustomerGroupSaveReq**](../Model/CustomerGroupSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

