# com_kingdee_service\SettlementTypeApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**settlementTypeSettlementTypeList**](SettlementTypeApi.md#settlementTypeSettlementTypeList) | **GET** /jdy/v2/bd/settlement_type | 结算方式列表;获取结算方式列表;1.0.7
[**settlementTypeSettlementTypeSave**](SettlementTypeApi.md#settlementTypeSettlementTypeSave) | **POST** /jdy/v2/bd/settlement_type | 结算方式保存;结算方式新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.7


# **settlementTypeSettlementTypeList**
> \com_kingdee_service\data\entity\SettlementTypeListRes settlementTypeSettlementTypeList($body)

结算方式列表;获取结算方式列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SettlementTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SettlementTypeSettlementTypeListReq(); // \com_kingdee_service\data\entity\SettlementTypeSettlementTypeListReq | 

try {
    $result = $apiInstance->settlementTypeSettlementTypeList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementTypeApi->settlementTypeSettlementTypeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SettlementTypeSettlementTypeListReq**](../Model/SettlementTypeSettlementTypeListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\SettlementTypeListRes**](../Model/SettlementTypeListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settlementTypeSettlementTypeSave**
> \com_kingdee_service\data\entity\SaveReply settlementTypeSettlementTypeSave($body)

结算方式保存;结算方式新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SettlementTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SettlementTypeSaveReq(); // \com_kingdee_service\data\entity\SettlementTypeSaveReq | 

try {
    $result = $apiInstance->settlementTypeSettlementTypeSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementTypeApi->settlementTypeSettlementTypeSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SettlementTypeSaveReq**](../Model/SettlementTypeSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

