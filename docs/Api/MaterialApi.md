# com_kingdee_service\MaterialApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**materialMaterialDetail**](MaterialApi.md#materialMaterialDetail) | **GET** /jdy/v2/bd/material_detail | 商品详情;获取商品详情;1.0.12
[**materialMaterialList**](MaterialApi.md#materialMaterialList) | **GET** /jdy/v2/bd/material | 商品列表;获取商品列表;1.0.11
[**materialMaterialPictureDelete**](MaterialApi.md#materialMaterialPictureDelete) | **DELETE** /jdy/v2/bd/material_picture | 商品图片删除;删除商品图片;1.0.6
[**materialMaterialPictureUpdate**](MaterialApi.md#materialMaterialPictureUpdate) | **POST** /jdy/v2/bd/material_picture | 商品图片上传;上传商品图片;1.0.6
[**materialMaterialSave**](MaterialApi.md#materialMaterialSave) | **POST** /jdy/v2/bd/material | 商品保存;商品新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.15


# **materialMaterialDetail**
> \com_kingdee_service\data\entity\MaterialDetailReply materialMaterialDetail($id, $number)

商品详情;获取商品详情;1.0.12

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MaterialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->materialMaterialDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialApi->materialMaterialDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\MaterialDetailReply**](../Model/MaterialDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **materialMaterialList**
> \com_kingdee_service\data\entity\MaterialListReply materialMaterialList($body)

商品列表;获取商品列表;1.0.11

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MaterialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MaterialMaterialListReq(); // \com_kingdee_service\data\entity\MaterialMaterialListReq | 

try {
    $result = $apiInstance->materialMaterialList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialApi->materialMaterialList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MaterialMaterialListReq**](../Model/MaterialMaterialListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\MaterialListReply**](../Model/MaterialListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **materialMaterialPictureDelete**
> \com_kingdee_service\data\entity\PictureDeleteReply materialMaterialPictureDelete($body)

商品图片删除;删除商品图片;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MaterialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\PictureDeleteRequest(); // \com_kingdee_service\data\entity\PictureDeleteRequest | 

try {
    $result = $apiInstance->materialMaterialPictureDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialApi->materialMaterialPictureDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\PictureDeleteRequest**](../Model/PictureDeleteRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\PictureDeleteReply**](../Model/PictureDeleteReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **materialMaterialPictureUpdate**
> \com_kingdee_service\data\entity\PictureUploadReply materialMaterialPictureUpdate($body)

商品图片上传;上传商品图片;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MaterialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\PictureUploadRequest(); // \com_kingdee_service\data\entity\PictureUploadRequest | 

try {
    $result = $apiInstance->materialMaterialPictureUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialApi->materialMaterialPictureUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\PictureUploadRequest**](../Model/PictureUploadRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\PictureUploadReply**](../Model/PictureUploadReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **materialMaterialSave**
> \com_kingdee_service\data\entity\SaveReply materialMaterialSave($body)

商品保存;商品新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.15

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MaterialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MaterialSaveRequest(); // \com_kingdee_service\data\entity\MaterialSaveRequest | 

try {
    $result = $apiInstance->materialMaterialSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MaterialApi->materialMaterialSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MaterialSaveRequest**](../Model/MaterialSaveRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

