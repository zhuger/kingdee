# com_kingdee_service\MallRechargeRuleListApi

All URIs are relative to *https://api.kingdee.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mallRechargeRuleListList**](MallRechargeRuleListApi.md#mallRechargeRuleListList) | **GET** /jdy/v2/ls/mall_recharge_rule | 充值赠送规则;会员充值赠送规则列表查询;1.0.6


# **mallRechargeRuleListList**
> \com_kingdee_service\data\entity\MallRechargeRuleListRes mallRechargeRuleListList($body)

充值赠送规则;会员充值赠送规则列表查询;1.0.6

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = com_kingdee_service\Configuration::getDefaultConfiguration()
    ->setAppID('YOUR_AppID')
    ->setAppSec('YOUR_AppSec');
    ->setAppToken('YOUR_AppToken');

$apiInstance = new com_kingdee_service\Api\MallRechargeRuleListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \com_kingdee_service\data\entity\MallRechargeRuleListListReq(); // \com_kingdee_service\data\entity\MallRechargeRuleListListReq | 

try {
    $result = $apiInstance->mallRechargeRuleListList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MallRechargeRuleListApi->mallRechargeRuleListList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\com_kingdee_service\data\entity\MallRechargeRuleListListReq**](../Model/MallRechargeRuleListListReq.md)|  | [optional]

### Return type

[**\com_kingdee_service\data\entity\MallRechargeRuleListRes**](../Model/MallRechargeRuleListRes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

