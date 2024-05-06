# com_kingdee_service\LabelGroupApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**labelGroupLabelGroupList**](LabelGroupApi.md#labelGroupLabelGroupList) | **GET** /jdy/v2/bd/label_group | 标签分类列表;获取标签分类列表;1.0.7
[**labelGroupLabelGroupSave**](LabelGroupApi.md#labelGroupLabelGroupSave) | **POST** /jdy/v2/bd/label_group | 标签分类保存;标签分类新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index&#x3D;2&amp;categrayId&#x3D;3cc8ee9a663e11eda5c84b5d383a2b93&amp;id&#x3D;9e804b8c712511eda0b39f724d124b07);1.0.7


# **labelGroupLabelGroupList**
> \com_kingdee_service\data\entity\LabelGroupListRes labelGroupLabelGroupList($body)

标签分类列表;获取标签分类列表;1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\LabelGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\LabelGroupLabelGroupListReq(); // \com_kingdee_service\data\entity\LabelGroupLabelGroupListReq | 

try {
    $result = $apiInstance->labelGroupLabelGroupList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelGroupApi->labelGroupLabelGroupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\LabelGroupLabelGroupListReq**](../Model/LabelGroupLabelGroupListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\LabelGroupListRes**](../Model/LabelGroupListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **labelGroupLabelGroupSave**
> \com_kingdee_service\data\entity\SaveReply labelGroupLabelGroupSave($body)

标签分类保存;标签分类新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.7

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\LabelGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\LabelGroupSaveReq(); // \com_kingdee_service\data\entity\LabelGroupSaveReq | 

try {
    $result = $apiInstance->labelGroupLabelGroupSave($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelGroupApi->labelGroupLabelGroupSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\LabelGroupSaveReq**](../Model/LabelGroupSaveReq.md)|  |

### Return type

[**\com_kingdee_service\data\entity\SaveReply**](../Model/SaveReply.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

