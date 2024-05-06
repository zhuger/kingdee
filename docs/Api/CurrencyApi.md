# com_kingdee_service\CurrencyApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**currencyCurrencyDetail**](CurrencyApi.md#currencyCurrencyDetail) | **GET** /jdy/v2/bd/currency_detail | 币别详情;获取币别详情;1.0.6
[**currencyCurrencyList**](CurrencyApi.md#currencyCurrencyList) | **GET** /jdy/v2/bd/currency | 币别列表;获取币别列表;1.0.7
[**currencyCurrencySave**](CurrencyApi.md#currencyCurrencySave) | **POST** /jdy/v2/bd/currency | 币别保存;币别新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.7


# **currencyCurrencyDetail**
> \com_kingdee_service\data\entity\CurrencyDetailRes currencyCurrencyDetail($id, $number)

币别详情;获取币别详情;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->currencyCurrencyDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyCurrencyDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\CurrencyDetailRes**](../Model/CurrencyDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyCurrencyList**
> \com_kingdee_service\data\entity\CurrencyListRes currencyCurrencyList($body)

币别列表;获取币别列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\CurrencyCurrencyListReq(); // \com_kingdee_service\data\entity\CurrencyCurrencyListReq | 

try {
    $result = $apiInstance->currencyCurrencyList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyCurrencyList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\CurrencyCurrencyListReq**](../Model/CurrencyCurrencyListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\CurrencyListRes**](../Model/CurrencyListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyCurrencySave**
> \com_kingdee_service\data\entity\SingleSaveReply currencyCurrencySave($body)

币别保存;币别新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\CurrencySaveReq(); // \com_kingdee_service\data\entity\CurrencySaveReq | 

try {
    $result = $apiInstance->currencyCurrencySave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyCurrencySave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\CurrencySaveReq**](../Model/CurrencySaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SingleSaveReply**](../Model/SingleSaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

