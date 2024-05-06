# com_kingdee_service\FaCardApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**faCardDetail**](FaCardApi.md#faCardDetail) | **GET** /jdy/v2/fi/fa_card_detail | 资产详情;获取资产详情;1.0.13
[**faCardList**](FaCardApi.md#faCardList) | **GET** /jdy/v2/fi/fa_card | 资产列表;获取资产列表;1.0.13
[**faCardSave**](FaCardApi.md#faCardSave) | **POST** /jdy/v2/fi/fa_card_save | 资产保存;资产保存;1.0.13


# **faCardDetail**
> \com_kingdee_service\data\entity\CardDetailReply faCardDetail($id)

资产详情;获取资产详情;1.0.13

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\FaCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=单据ID;c=1;d=true.

try {
    $result = $apiInstance->faCardDetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaCardApi->faCardDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;单据ID;c&#x3D;1;d&#x3D;true. | [optional]

### Return type

[**\com_kingdee_service\data\entity\CardDetailReply**](../Model/CardDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faCardList**
> \com_kingdee_service\data\entity\CardListReply faCardList($body)

资产列表;获取资产列表;1.0.13

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\FaCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\FaCardListReq(); // \com_kingdee_service\data\entity\FaCardListReq | 

try {
    $result = $apiInstance->faCardList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaCardApi->faCardList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\FaCardListReq**](../Model/FaCardListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\CardListReply**](../Model/CardListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **faCardSave**
> \com_kingdee_service\data\entity\SaveReply faCardSave($body)

资产保存;资产保存;1.0.13

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\FaCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\CardSaveRequest(); // \com_kingdee_service\data\entity\CardSaveRequest | 

try {
    $result = $apiInstance->faCardSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaCardApi->faCardSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\CardSaveRequest**](../Model/CardSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

