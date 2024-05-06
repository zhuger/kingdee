# com_kingdee_service\SettlementAccountApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**settlementAccountSettlementAccountList**](SettlementAccountApi.md#settlementAccountSettlementAccountList) | **GET** /jdy/v2/bd/settlement_account | 账户列表;获取结算账户列表;1.0.7
[**settlementAccountSettlementAccountSave**](SettlementAccountApi.md#settlementAccountSettlementAccountSave) | **POST** /jdy/v2/bd/settlement_account | 账户保存;结算账户新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.7


# **settlementAccountSettlementAccountList**
> \com_kingdee_service\data\entity\SettlementAccountListRes settlementAccountSettlementAccountList($body)

账户列表;获取结算账户列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SettlementAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SettlementAccountSettlementAccountListReq(); // \com_kingdee_service\data\entity\SettlementAccountSettlementAccountListReq | 

try {
    $result = $apiInstance->settlementAccountSettlementAccountList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementAccountApi->settlementAccountSettlementAccountList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SettlementAccountSettlementAccountListReq**](../Model/SettlementAccountSettlementAccountListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\SettlementAccountListRes**](../Model/SettlementAccountListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settlementAccountSettlementAccountSave**
> \com_kingdee_service\data\entity\SaveReply settlementAccountSettlementAccountSave($body)

账户保存;结算账户新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SettlementAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SettlementAccountSaveReq(); // \com_kingdee_service\data\entity\SettlementAccountSaveReq | 

try {
    $result = $apiInstance->settlementAccountSettlementAccountSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementAccountApi->settlementAccountSettlementAccountSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SettlementAccountSaveReq**](../Model/SettlementAccountSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

