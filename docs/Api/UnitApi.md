# com_kingdee_service\UnitApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**unitMaterialUnitDetail**](UnitApi.md#unitMaterialUnitDetail) | **GET** /jdy/v2/bd/material_unit_detail | 商品单位详情;商品单位详情;1.0.7
[**unitMaterialUnitList**](UnitApi.md#unitMaterialUnitList) | **GET** /jdy/v2/bd/material_unit | 商品单位列表;商品单位列表;1.0.6
[**unitMeasureUnitDetail**](UnitApi.md#unitMeasureUnitDetail) | **GET** /jdy/v2/bd/measure_unit_detail | 计量单位详情;获取计量单位详情;1.0.6
[**unitMeasureUnitList**](UnitApi.md#unitMeasureUnitList) | **GET** /jdy/v2/bd/measure_unit | 计量单位列表;获取计量单位列表;1.0.6
[**unitMeasureUnitSave**](UnitApi.md#unitMeasureUnitSave) | **POST** /jdy/v2/bd/measure_unit | 计量单位保存;计量单位新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.7


# **unitMaterialUnitDetail**
> \com_kingdee_service\data\entity\MaterialUnitDetailRes unitMaterialUnitDetail($id)

商品单位详情;商品单位详情;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id;b=2147483647;c=1;d=false.

try {
    $result = $apiInstance->unitMaterialUnitDetail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->unitMaterialUnitDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\MaterialUnitDetailRes**](../Model/MaterialUnitDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitMaterialUnitList**
> \com_kingdee_service\data\entity\MaterialUnitListRes unitMaterialUnitList($body)

商品单位列表;商品单位列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\UnitMaterialUnitListReq(); // \com_kingdee_service\data\entity\UnitMaterialUnitListReq | 

try {
    $result = $apiInstance->unitMaterialUnitList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->unitMaterialUnitList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\UnitMaterialUnitListReq**](../Model/UnitMaterialUnitListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\MaterialUnitListRes**](../Model/MaterialUnitListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitMeasureUnitDetail**
> \com_kingdee_service\data\entity\MeasureUnitDetailRes unitMeasureUnitDetail($id, $number)

计量单位详情;获取计量单位详情;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->unitMeasureUnitDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->unitMeasureUnitDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\MeasureUnitDetailRes**](../Model/MeasureUnitDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitMeasureUnitList**
> \com_kingdee_service\data\entity\MeasureUnitListRes unitMeasureUnitList($body)

计量单位列表;获取计量单位列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\UnitMeasureUnitListReq(); // \com_kingdee_service\data\entity\UnitMeasureUnitListReq | 

try {
    $result = $apiInstance->unitMeasureUnitList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->unitMeasureUnitList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\UnitMeasureUnitListReq**](../Model/UnitMeasureUnitListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\MeasureUnitListRes**](../Model/MeasureUnitListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitMeasureUnitSave**
> \com_kingdee_service\data\entity\SaveReply unitMeasureUnitSave($body)

计量单位保存;计量单位新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MeasureUnitSaveReq(); // \com_kingdee_service\data\entity\MeasureUnitSaveReq | 

try {
    $result = $apiInstance->unitMeasureUnitSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->unitMeasureUnitSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MeasureUnitSaveReq**](../Model/MeasureUnitSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

