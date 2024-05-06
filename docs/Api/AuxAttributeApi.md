# com_kingdee_service\AuxAttributeApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**auxAttributeAuxtypeDetailList**](AuxAttributeApi.md#auxAttributeAuxtypeDetailList) | **GET** /jdy/v2/bd/aux_attribute | 辅助属性列表;获取辅助属性列表;1.0.6
[**auxAttributeAuxtypeDetailListSave**](AuxAttributeApi.md#auxAttributeAuxtypeDetailListSave) | **POST** /jdy/v2/bd/aux_attribute | 辅助属性保存;辅助属性新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.7


# **auxAttributeAuxtypeDetailList**
> \com_kingdee_service\data\entity\AuxtypeDetailListRes auxAttributeAuxtypeDetailList($body)

辅助属性列表;获取辅助属性列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\AuxAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\AuxAttributeAuxtypeDetailListReq(); // \com_kingdee_service\data\entity\AuxAttributeAuxtypeDetailListReq | 

try {
    $result = $apiInstance->auxAttributeAuxtypeDetailList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuxAttributeApi->auxAttributeAuxtypeDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\AuxAttributeAuxtypeDetailListReq**](../Model/AuxAttributeAuxtypeDetailListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\AuxtypeDetailListRes**](../Model/AuxtypeDetailListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auxAttributeAuxtypeDetailListSave**
> \com_kingdee_service\data\entity\SaveReply auxAttributeAuxtypeDetailListSave($body)

辅助属性保存;辅助属性新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\AuxAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\AuxtypeDetailSaveReq(); // \com_kingdee_service\data\entity\AuxtypeDetailSaveReq | 

try {
    $result = $apiInstance->auxAttributeAuxtypeDetailListSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuxAttributeApi->auxAttributeAuxtypeDetailListSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\AuxtypeDetailSaveReq**](../Model/AuxtypeDetailSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

