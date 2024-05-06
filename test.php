<?php
use com_kingdee_service\Configuration;
use com_kingdee_service\data\api\AccountApi;
use com_kingdee_service\data\entity\AccountListReq;
use com_kingdee_service\data\entity\AccountSaveRequest;

require_once(__DIR__ . '/vendor/autoload.php');

$config = new Configuration();
$config->setAppID('236883');
$config->setAppSec('c61140fbd74d9a431f311b927df1e0d7');

//  获取授权信息方法
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
    var_dump($app_secret);
    var_dump($result->data[0]);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizeApi->asterAuthorize: ', $e->getMessage(), PHP_EOL;
}

// 根据授权信息获取访问凭证
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
    var_dump($app_token);
    var_dump($result);
} catch (Exception $e) {
    echo 'Exception when calling AppTokenApi->asterAppToken: ', $e->getMessage(), PHP_EOL;
}


// 调用业务接口
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


// ====科目修改保存====
$data = ['items' => [
		[
            "account_type_id"=>"1",
            "check_item_entry"=>[
				[
                    "bd_aux_info_type_id"=>"1",
					"id"=>"1",
					"is_require"=>true,
					"seq"=>"1"
				]
			],
			"currency_ids"=>"[]",
			"dc"=>"1",
			"enable"=>"1",
			"help_code"=>"助记码",
			"id"=>"1",
			"is_all_currency"=>false,
			"is_assist"=>false,
			"is_bank"=>false,
			"is_cash"=>false,
			"is_cash_equivalent"=>false,
			"is_change_currency"=>false,
			"is_currency"=>false,
			"is_qty"=>false,
			"level"=>"级次",
			"number"=>"190101",
			"parent_id"=>"1"
		]
	]
];
$body = new AccountSaveRequest($data); // \com_kingdee_service\data\entity\AccountSaveRequest |

try {
    $result = $apiInstance->accountSave($body);
    print_r($result);
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


