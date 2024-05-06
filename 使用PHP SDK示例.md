# 使用PHP SDK示例

本文档介绍如何使用PHP SDK进行开发。

## Requirements

PHP 5.5 and later

## Installation & Usage

## 步骤一：使用完整的代码运行，

- 首先，你需要下载PHP SDK

​		[PHP SDK下载地址](https://open.jdy.com/admin/api/download?path=MzE4)

- 使用完整的代码直接运行，如果项目已经有composer安装其他扩展和有vendor目录，需要手动合并目录复制文件，composer文件夹和autoload.php不用复制过去，仍旧使用自己项目的，其他第三方目录复制过去即可


## 步骤二：使用

- 配置Client信息

```php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new Configuration();
$config->setAppID('236883');
$config->setAppSec('c61140fbd74d9a431f311b927df1e0d7');
```


接下来，可以使用该客户端执行各种操作。

例如，获取授权信息方法：

```php
$apiInstance = new com_kingdee_service\data\api\AuthorizeApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$outer_instance_id = "107218833860857856"; // string | outerInstanceId
try {
    $result = $apiInstance->asterAuthorize($outer_instance_id);
    $app_key = $result->data[0]->appKey;
    $app_secret = $result->data[0]->appSecret;
} catch (Exception $e) {
    echo 'Exception when calling AuthorizeApi->asterAuthorize: ', $e->getMessage(), PHP_EOL;
}
```

例如，根据授权信息获取访问凭证：

```php
$apiInstance = new com_kingdee_service\data\api\AppTokenApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(), $config
);
$app_signature = base64_encode(hash_hmac('sha256', $app_key, $app_secret, false));; // string | app_signature
$uid = null; // string | uid
try {
    $result = $apiInstance->asterAppToken($app_key, $app_signature, $uid);
    $app_token = $result->data->{'app-token'};
} catch (Exception $e) {
    echo 'Exception when calling AppTokenApi->asterAppToken: ', $e->getMessage(), PHP_EOL;
}
```

例如，调用一个获取科目列表API方法,但是在调用业务接口前，需要放入当前的app-token：

```php
$config->setAppToken($app_token);

$apiInstance = new AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(), $config
    );


// ====获取科目列表====
$req = [
    'search' => '',
    'enable' => '',
];
$body = new AccountListReq($req);
try {
    $result = $apiInstance->accountList($body);
    echo $result->description;
    echo $result->data->total_count;
    var_dump($result->data);
} catch (Exception $e) {
    // 1.只获取失败信息详情
    echo 'Exception when calling AccountApi->accountSave: ', $e->getMessage(), PHP_EOL;

    // 2.获取失败信息并进行处理
    // {"description":"JWT token has expired","errcode":1000202001}
    $result = $e->getResponseBody();
    $ret = json_decode($result);
    echo $ret->description;
    echo $ret->errcode;
}
```

## 

## 结论
完整的demo实例代码可参考PHP SDK文件夹下面的test.php文件

使用PHP SDK可以方便地与其他系统进行集成。通过按照上述步骤安装和配置PHP SDK，并使用相关的类和方法，你可以轻松地使用PHP进行开发。

希望本文档能够帮助你开始使用PHP SDK。如有任何问题，请随时向我们咨询。

以上是一个使用PHP SDK的Markdown文档示例。根据你的实际需求，你可以根据这个示例进行扩展和修改。祝你顺利完成项目！