# com_kingdee_service\SystemApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemBillPush**](SystemApi.md#systemBillPush) | **POST** /jdy/v2/sys/bill_push | 单据下推;调用单据下推将直接保存新建目标单据并返回单据id;1.0.13
[**systemCommonOperate**](SystemApi.md#systemCommonOperate) | **POST** /jdy/v2/sys/common_operate | 通用批量操作;通用批量操作;1.0.9
[**systemCountryLoad**](SystemApi.md#systemCountryLoad) | **GET** /jdy/v2/sys/country_load | 国家行政区域查询;国家行政区域查询;1.0.6
[**systemCurrentUserInfo**](SystemApi.md#systemCurrentUserInfo) | **GET** /jdy/v2/sys/current_user_info | 当前用户信息查询;当前用户信息查询;1.0.7
[**systemCustomField**](SystemApi.md#systemCustomField) | **GET** /jdy/v2/sys/custom_field | 自定义字段查询;自定义字段查询;1.0.7
[**systemCustomFieldSave**](SystemApi.md#systemCustomFieldSave) | **POST** /jdy/v2/sys/custom_field | 自定义字段保存;自定义字段保存;1.0.1
[**systemDivisionLoad**](SystemApi.md#systemDivisionLoad) | **GET** /jdy/v2/sys/division_load | 省市区查询;省市区查询;1.0.6
[**systemSettlingParam**](SystemApi.md#systemSettlingParam) | **GET** /jdy/v2/sys/system_param | 系统参数查询;系统参数查询;1.0.7
[**systemUserList**](SystemApi.md#systemUserList) | **GET** /jdy/v2/sys/user_list | 用户信息列表;用户信息列表;1.0.8


# **systemBillPush**
> \com_kingdee_service\data\entity\SaveReply systemBillPush($body)

单据下推;调用单据下推将直接保存新建目标单据并返回单据id;1.0.13

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\BillPushRequest(); // \com_kingdee_service\data\entity\BillPushRequest | 

try {
    $result = $apiInstance->systemBillPush($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemBillPush: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\BillPushRequest**](../Model/BillPushRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemCommonOperate**
> \com_kingdee_service\data\entity\SaveReply systemCommonOperate($body)

通用批量操作;通用批量操作;1.0.9

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\CommonOperateRequest(); // \com_kingdee_service\data\entity\CommonOperateRequest | 

try {
    $result = $apiInstance->systemCommonOperate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemCommonOperate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\CommonOperateRequest**](../Model/CommonOperateRequest.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemCountryLoad**
> \com_kingdee_service\data\entity\CountryLoadRes systemCountryLoad($body)

国家行政区域查询;国家行政区域查询;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SystemCountryLoadReq(); // \com_kingdee_service\data\entity\SystemCountryLoadReq | 

try {
    $result = $apiInstance->systemCountryLoad($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemCountryLoad: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SystemCountryLoadReq**](../Model/SystemCountryLoadReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\CountryLoadRes**](../Model/CountryLoadRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemCurrentUserInfo**
> \com_kingdee_service\data\entity\CurrentUserInfoRes systemCurrentUserInfo($body)

当前用户信息查询;当前用户信息查询;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SystemCurrentUserInfoReq(); // \com_kingdee_service\data\entity\SystemCurrentUserInfoReq | 

try {
    $result = $apiInstance->systemCurrentUserInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemCurrentUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SystemCurrentUserInfoReq**](../Model/SystemCurrentUserInfoReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\CurrentUserInfoRes**](../Model/CurrentUserInfoRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemCustomField**
> \com_kingdee_service\data\entity\CustomFieldRes systemCustomField($body)

自定义字段查询;自定义字段查询;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SystemCustomFieldReq(); // \com_kingdee_service\data\entity\SystemCustomFieldReq | 

try {
    $result = $apiInstance->systemCustomField($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SystemCustomFieldReq**](../Model/SystemCustomFieldReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\CustomFieldRes**](../Model/CustomFieldRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemCustomFieldSave**
> \com_kingdee_service\data\entity\EmptyReply systemCustomFieldSave($body)

自定义字段保存;自定义字段保存;1.0.1

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\CustomFieldSaveReq(); // \com_kingdee_service\data\entity\CustomFieldSaveReq | 

try {
    $result = $apiInstance->systemCustomFieldSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemCustomFieldSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\CustomFieldSaveReq**](../Model/CustomFieldSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\EmptyReply**](../Model/EmptyReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemDivisionLoad**
> \com_kingdee_service\data\entity\DivisionLoadReply systemDivisionLoad($body)

省市区查询;省市区查询;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SystemDivisionLoadReq(); // \com_kingdee_service\data\entity\SystemDivisionLoadReq | 

try {
    $result = $apiInstance->systemDivisionLoad($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemDivisionLoad: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SystemDivisionLoadReq**](../Model/SystemDivisionLoadReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\DivisionLoadReply**](../Model/DivisionLoadReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemSettlingParam**
> \com_kingdee_service\data\entity\SettlingParamRes systemSettlingParam($body)

系统参数查询;系统参数查询;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SystemSettlingParamReq(); // \com_kingdee_service\data\entity\SystemSettlingParamReq | 

try {
    $result = $apiInstance->systemSettlingParam($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemSettlingParam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SystemSettlingParamReq**](../Model/SystemSettlingParamReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\SettlingParamRes**](../Model/SettlingParamRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemUserList**
> \com_kingdee_service\data\entity\UserListRes systemUserList($body)

用户信息列表;用户信息列表;1.0.8

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\SystemUserListReq(); // \com_kingdee_service\data\entity\SystemUserListReq | 

try {
    $result = $apiInstance->systemUserList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemUserList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\SystemUserListReq**](../Model/SystemUserListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\UserListRes**](../Model/UserListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

