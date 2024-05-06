# com_kingdee_service\MemberApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**memberDetail**](MemberApi.md#memberDetail) | **GET** /jdy/v2/ls/member_detail | 会员详情;会员详情;1.0.6
[**memberList**](MemberApi.md#memberList) | **GET** /jdy/v2/ls/member | 会员列表;会员列表;1.0.6
[**memberSave**](MemberApi.md#memberSave) | **POST** /jdy/v2/ls/member | 会员保存;会员保存;1.0.7


# **memberDetail**
> \com_kingdee_service\data\entity\MemberDetailRes memberDetail($id, $mobile)

会员详情;会员详情;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | a=会员id;c=1;d=false.
$mobile = "mobile_example"; // string | a=手机号;c=1333333333;d=false.

try {
    $result = $apiInstance->memberDetail($id, $mobile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberApi->memberDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| a&#x3D;会员id;c&#x3D;1;d&#x3D;false. | [optional]
 **mobile** | **string**| a&#x3D;手机号;c&#x3D;1333333333;d&#x3D;false. | [optional]

### Return type

[**\com_kingdee_service\data\entity\MemberDetailRes**](../Model/MemberDetailRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **memberList**
> \com_kingdee_service\data\entity\MemberListRes memberList($body)

会员列表;会员列表;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MemberListReq(); // \com_kingdee_service\data\entity\MemberListReq | 

try {
    $result = $apiInstance->memberList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberApi->memberList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MemberListReq**](../Model/MemberListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\MemberListRes**](../Model/MemberListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **memberSave**
> \com_kingdee_service\data\entity\MemberSaveRes memberSave($body)

会员保存;会员保存;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MemberSaveReq(); // \com_kingdee_service\data\entity\MemberSaveReq | 

try {
    $result = $apiInstance->memberSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberApi->memberSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MemberSaveReq**](../Model/MemberSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\MemberSaveRes**](../Model/MemberSaveRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

