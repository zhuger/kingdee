# com_kingdee_service\SalQuotaOrderApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salQuotaOrderDetail**](SalQuotaOrderApi.md#salQuotaOrderDetail) | **GET** /jdy/v2/scm/sal_quota_detail | 销售报价单详情;销售报价单详情;1.0.2
[**salQuotaOrderList**](SalQuotaOrderApi.md#salQuotaOrderList) | **GET** /jdy/v2/scm/sal_quota | 销售报价单列表;销售报价单列表;1.0.2
[**salQuotaOrderSave**](SalQuotaOrderApi.md#salQuotaOrderSave) | **POST** /jdy/v2/scm/sal_quota | 销售报价单保存;销售报价单保存;1.0.3


# **salQuotaOrderDetail**
> \com_kingdee_service\data\entity\SalQuotaDetailReply salQuotaOrderDetail($id, $number)

销售报价单详情;销售报价单详情;1.0.2

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SalQuotaOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=id（id与number二选一）;b=2147483647;c=1;d=false.
$number = "number_example"; // string | a=编码（*id与number二选一）;b=30;c=001;d=false.

try {
    $result = $apiInstance->salQuotaOrderDetail($id, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalQuotaOrderApi->salQuotaOrderDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. | [optional]
 **number** | **string**| a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\SalQuotaDetailReply**](../Model/SalQuotaDetailReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salQuotaOrderList**
> \com_kingdee_service\data\entity\SalQuotaListReply salQuotaOrderList($body)

销售报价单列表;销售报价单列表;1.0.2

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SalQuotaOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SalQuotaOrderListReq(); // \com_kingdee_service\data\entity\SalQuotaOrderListReq | 

try {
    $result = $apiInstance->salQuotaOrderList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalQuotaOrderApi->salQuotaOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SalQuotaOrderListReq**](../Model/SalQuotaOrderListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\SalQuotaListReply**](../Model/SalQuotaListReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salQuotaOrderSave**
> \com_kingdee_service\data\entity\SaveReply salQuotaOrderSave($body)

销售报价单保存;销售报价单保存;1.0.3

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SalQuotaOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SalQuotaSaveReq(); // \com_kingdee_service\data\entity\SalQuotaSaveReq | 

try {
    $result = $apiInstance->salQuotaOrderSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalQuotaOrderApi->salQuotaOrderSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SalQuotaSaveReq**](../Model/SalQuotaSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

