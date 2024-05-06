# com_kingdee_service\SettlingTermApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**settlingTermSettlingTermDetail**](SettlingTermApi.md#settlingTermSettlingTermDetail) | **GET** /jdy/v2/bd/settling_term_detail | 结算期限详情;获取结算期限详情;1.0.7
[**settlingTermSettlingTermList**](SettlingTermApi.md#settlingTermSettlingTermList) | **GET** /jdy/v2/bd/settling_term | 结算期限列表;获取结算期限列表;1.0.6
[**settlingTermSettlingTermSave**](SettlingTermApi.md#settlingTermSettlingTermSave) | **POST** /jdy/v2/bd/settling_term | 结算期限保存;结算期限新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.8


# **settlingTermSettlingTermDetail**
> \com_kingdee_service\data\entity\SettlingTermDetailRes settlingTermSettlingTermDetail($id)

结算期限详情;获取结算期限详情;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SettlingTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id;b=2147483647;c=1;d=false.

try {
    $result = $apiInstance->settlingTermSettlingTermDetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlingTermApi->settlingTermSettlingTermDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\SettlingTermDetailRes**](../Model/SettlingTermDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settlingTermSettlingTermList**
> \com_kingdee_service\data\entity\SettlingTermListRes settlingTermSettlingTermList($body)

结算期限列表;获取结算期限列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SettlingTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SettlingTermSettlingTermListReq(); // \com_kingdee_service\data\entity\SettlingTermSettlingTermListReq | 

try {
    $result = $apiInstance->settlingTermSettlingTermList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlingTermApi->settlingTermSettlingTermList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SettlingTermSettlingTermListReq**](../Model/SettlingTermSettlingTermListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\SettlingTermListRes**](../Model/SettlingTermListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settlingTermSettlingTermSave**
> \com_kingdee_service\data\entity\SaveReply settlingTermSettlingTermSave($body)

结算期限保存;结算期限新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SettlingTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SettlingTermSaveReq(); // \com_kingdee_service\data\entity\SettlingTermSaveReq | 

try {
    $result = $apiInstance->settlingTermSettlingTermSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlingTermApi->settlingTermSettlingTermSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SettlingTermSaveReq**](../Model/SettlingTermSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

