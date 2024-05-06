# com_kingdee_service\LogisticsCompanyApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**logisticsCompanyLogisticsCompanyDetailList**](LogisticsCompanyApi.md#logisticsCompanyLogisticsCompanyDetailList) | **GET** /jdy/v2/bd/logistics_company_detail | 物流公司详情;获取物流公司详情;1.0.6
[**logisticsCompanyLogisticsCompanyList**](LogisticsCompanyApi.md#logisticsCompanyLogisticsCompanyList) | **GET** /jdy/v2/bd/logistics_company | 物流公司列表;获取物流公司列表;1.0.6
[**logisticsCompanyLogisticsCompanySave**](LogisticsCompanyApi.md#logisticsCompanyLogisticsCompanySave) | **POST** /jdy/v2/bd/logistics_company | 物流公司保存;物流公司新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.7


# **logisticsCompanyLogisticsCompanyDetailList**
> \com_kingdee_service\data\entity\LogisticsCompanyDetailRes logisticsCompanyLogisticsCompanyDetailList($id, $number)

物流公司详情;获取物流公司详情;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\LogisticsCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->logisticsCompanyLogisticsCompanyDetailList($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogisticsCompanyApi->logisticsCompanyLogisticsCompanyDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\LogisticsCompanyDetailRes**](../Model/LogisticsCompanyDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logisticsCompanyLogisticsCompanyList**
> \com_kingdee_service\data\entity\LogisticsCompanyListRes logisticsCompanyLogisticsCompanyList($body)

物流公司列表;获取物流公司列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\LogisticsCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\LogisticsCompanyLogisticsCompanyListReq(); // \com_kingdee_service\data\entity\LogisticsCompanyLogisticsCompanyListReq | 

try {
    $result = $apiInstance->logisticsCompanyLogisticsCompanyList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogisticsCompanyApi->logisticsCompanyLogisticsCompanyList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\LogisticsCompanyLogisticsCompanyListReq**](../Model/LogisticsCompanyLogisticsCompanyListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\LogisticsCompanyListRes**](../Model/LogisticsCompanyListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logisticsCompanyLogisticsCompanySave**
> \com_kingdee_service\data\entity\SaveReply logisticsCompanyLogisticsCompanySave($body)

物流公司保存;物流公司新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\LogisticsCompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\LogisticsCompanySaveReq(); // \com_kingdee_service\data\entity\LogisticsCompanySaveReq | 

try {
    $result = $apiInstance->logisticsCompanyLogisticsCompanySave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogisticsCompanyApi->logisticsCompanyLogisticsCompanySave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\LogisticsCompanySaveReq**](../Model/LogisticsCompanySaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

