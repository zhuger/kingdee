# com_kingdee_service\PointRuleApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pointRuleList**](PointRuleApi.md#pointRuleList) | **GET** /jdy/v2/ls/point_rule | 积分规则查询;积分规则查询;1.0.6


# **pointRuleList**
> \com_kingdee_service\data\entity\PointRuleListRes pointRuleList($body)

积分规则查询;积分规则查询;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\PointRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\PointRuleListReq(); // \com_kingdee_service\data\entity\PointRuleListReq | 

try {
    $result = $apiInstance->pointRuleList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointRuleApi->pointRuleList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\PointRuleListReq**](../Model/PointRuleListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\PointRuleListRes**](../Model/PointRuleListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

