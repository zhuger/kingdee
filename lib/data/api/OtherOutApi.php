<?php
/**
 * OtherOutApi
 * PHP version  5
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 星辰
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: version not set
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com_kingdee_service\data\api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use com_kingdee_service\ApiException;
use com_kingdee_service\Configuration;
use com_kingdee_service\HeaderSelector;
use com_kingdee_service\ObjectSerializer;

/**
 * OtherOutApi Class Doc Comment
 *
 * @category Class
 * @package  com_kingdee_service
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OtherOutApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation otherOutOtherOutDetail
     *
     * 其他出库单详情;其他出库单详情;1.0.10
     *
     * @param  string $id a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. (optional)
     * @param  string $number a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. (optional)
     *
     * @throws \com_kingdee_service\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com_kingdee_service\data\entity\OtherOutDetailRes
     */
    public function otherOutOtherOutDetail($id = null, $number = null)
    {
        $response = $this->otherOutOtherOutDetailWithHttpInfo($id, $number);
        return $response;
    }

    /**
     * Operation otherOutOtherOutDetailWithHttpInfo
     *
     * 其他出库单详情;其他出库单详情;1.0.10
     *
     * @param  string $id a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. (optional)
     * @param  string $number a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. (optional)
     *
     * @throws \com_kingdee_service\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com_kingdee_service\data\entity\OtherOutDetailRes, HTTP status code, HTTP response headers (array of strings)
     */
    public function otherOutOtherOutDetailWithHttpInfo($id = null, $number = null)
    {
        $returnType = '\com_kingdee_service\data\entity\OtherOutDetailRes';
        $request = $this->otherOutOtherOutDetailRequest($id, $number);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return $content;

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com_kingdee_service\data\entity\OtherOutDetailRes',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com_kingdee_service\data\entity\Status',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation otherOutOtherOutDetailAsync
     *
     * 其他出库单详情;其他出库单详情;1.0.10
     *
     * @param  string $id a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. (optional)
     * @param  string $number a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function otherOutOtherOutDetailAsync($id = null, $number = null)
    {
        return $this->otherOutOtherOutDetailAsyncWithHttpInfo($id, $number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation otherOutOtherOutDetailAsyncWithHttpInfo
     *
     * 其他出库单详情;其他出库单详情;1.0.10
     *
     * @param  string $id a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. (optional)
     * @param  string $number a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function otherOutOtherOutDetailAsyncWithHttpInfo($id = null, $number = null)
    {
        $returnType = '\com_kingdee_service\data\entity\OtherOutDetailRes';
        $request = $this->otherOutOtherOutDetailRequest($id, $number);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return $content;
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'otherOutOtherOutDetail'
     *
     * @param  string $id a&#x3D;id（id与number二选一）;b&#x3D;2147483647;c&#x3D;1;d&#x3D;false. (optional)
     * @param  string $number a&#x3D;编码（*id与number二选一）;b&#x3D;30;c&#x3D;001;d&#x3D;false. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function otherOutOtherOutDetailRequest($id = null, $number = null)
    {

        $resourcePath = '/jdy/v2/scm/inv_other_out_detail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($number !== null) {
            $queryParams['number'] = ObjectSerializer::toQueryValue($number);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        // 增加头部签名
        $headers['Content-Type'] = 'application/json; charset=UTF-8';
        //固定字符串
        $headers['X-Api-SignHeaders'] = 'X-Api-TimeStamp,X-Api-Nonce';
        $headers['X-Api-Auth-Version'] = '2.0';
        $headers['X-Api-ClientID'] = $this->config->getAppID();
        //当前时间戳
        list($msec, $sec) = explode(' ', microtime());
        $timestamp = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
        //随机数
        $nonce = rand(1000000, 9999999);
        $headers['X-Api-TimeStamp'] = $timestamp;
        $headers['X-Api-Nonce'] = $nonce;

        //参数处理
        $urlencode_params = '';
        if (!empty($queryParams)) {
            $values = array();
            foreach ($queryParams as $key => $val) {
                $values[] = rawurlencode(rawurlencode($key)) . "=" . rawurlencode(rawurlencode($val));
            }
            $urlencode_params = implode("&", $values);
            unset($values);
        }
        $data = strtoupper('GET') . "\n" . urlencode($resourcePath) . "\n" . $urlencode_params . "\nx-api-nonce:" . $nonce . "\nx-api-timestamp:" . $timestamp . "\n";
        //密钥
        $seckey = $this->config->getAppSec();
        $headers['X-Api-Signature'] = base64_encode(hash_hmac('sha256', $data, $seckey, false));
        $headers['app-token'] = $this->config->getAppToken();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation otherOutOtherOutList
     *
     * 其他出库单列表;其他出库单列表;1.0.8
     *
     * @param  \com_kingdee_service\data\entity\OtherOutOtherOutListReq $body body (optional)
     *
     * @throws \com_kingdee_service\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com_kingdee_service\data\entity\OtherOutListRes
     */
    public function otherOutOtherOutList($body = null)
    {
        $response = $this->otherOutOtherOutListWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation otherOutOtherOutListWithHttpInfo
     *
     * 其他出库单列表;其他出库单列表;1.0.8
     *
     * @param  \com_kingdee_service\data\entity\OtherOutOtherOutListReq $body (optional)
     *
     * @throws \com_kingdee_service\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com_kingdee_service\data\entity\OtherOutListRes, HTTP status code, HTTP response headers (array of strings)
     */
    public function otherOutOtherOutListWithHttpInfo($body = null)
    {
        $returnType = '\com_kingdee_service\data\entity\OtherOutListRes';
        $request = $this->otherOutOtherOutListRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return $content;

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com_kingdee_service\data\entity\OtherOutListRes',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com_kingdee_service\data\entity\Status',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation otherOutOtherOutListAsync
     *
     * 其他出库单列表;其他出库单列表;1.0.8
     *
     * @param  \com_kingdee_service\data\entity\OtherOutOtherOutListReq $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function otherOutOtherOutListAsync($body = null)
    {
        return $this->otherOutOtherOutListAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation otherOutOtherOutListAsyncWithHttpInfo
     *
     * 其他出库单列表;其他出库单列表;1.0.8
     *
     * @param  \com_kingdee_service\data\entity\OtherOutOtherOutListReq $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function otherOutOtherOutListAsyncWithHttpInfo($body = null)
    {
        $returnType = '\com_kingdee_service\data\entity\OtherOutListRes';
        $request = $this->otherOutOtherOutListRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return $content;
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'otherOutOtherOutList'
     *
     * @param  \com_kingdee_service\data\entity\OtherOutOtherOutListReq $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function otherOutOtherOutListRequest($body = null)
    {

        $resourcePath = '/jdy/v2/scm/inv_other_out';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        // 增加头部签名
        $headers['Content-Type'] = 'application/json; charset=UTF-8';
        //固定字符串
        $headers['X-Api-SignHeaders'] = 'X-Api-TimeStamp,X-Api-Nonce';
        $headers['X-Api-Auth-Version'] = '2.0';
        $headers['X-Api-ClientID'] = $this->config->getAppID();
        //当前时间戳
        list($msec, $sec) = explode(' ', microtime());
        $timestamp = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
        //随机数
        $nonce = rand(1000000, 9999999);
        $headers['X-Api-TimeStamp'] = $timestamp;
        $headers['X-Api-Nonce'] = $nonce;

        //参数处理
        $urlencode_params = '';
        if (!empty($queryParams)) {
            $values = array();
            foreach ($queryParams as $key => $val) {
                $values[] = rawurlencode(rawurlencode($key)) . "=" . rawurlencode(rawurlencode($val));
            }
            $urlencode_params = implode("&", $values);
            unset($values);
        }
        $data = strtoupper('GET') . "\n" . urlencode($resourcePath) . "\n" . $urlencode_params . "\nx-api-nonce:" . $nonce . "\nx-api-timestamp:" . $timestamp . "\n";
        //密钥
        $seckey = $this->config->getAppSec();
        $headers['X-Api-Signature'] = base64_encode(hash_hmac('sha256', $data, $seckey, false));
        $headers['app-token'] = $this->config->getAppToken();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation otherOutOtherOutSave
     *
     * 其他出库单保存;其他出库单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.12
     *
     * @param  \com_kingdee_service\data\entity\OtherOutSaveReq $body body (required)
     *
     * @throws \com_kingdee_service\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \com_kingdee_service\data\entity\SaveReply
     */
    public function otherOutOtherOutSave($body)
    {
        $response = $this->otherOutOtherOutSaveWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation otherOutOtherOutSaveWithHttpInfo
     *
     * 其他出库单保存;其他出库单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.12
     *
     * @param  \com_kingdee_service\data\entity\OtherOutSaveReq $body (required)
     *
     * @throws \com_kingdee_service\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \com_kingdee_service\data\entity\SaveReply, HTTP status code, HTTP response headers (array of strings)
     */
    public function otherOutOtherOutSaveWithHttpInfo($body)
    {
        $returnType = '\com_kingdee_service\data\entity\SaveReply';
        $request = $this->otherOutOtherOutSaveRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return $content;

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com_kingdee_service\data\entity\SaveReply',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\com_kingdee_service\data\entity\Status',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation otherOutOtherOutSaveAsync
     *
     * 其他出库单保存;其他出库单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.12
     *
     * @param  \com_kingdee_service\data\entity\OtherOutSaveReq $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function otherOutOtherOutSaveAsync($body)
    {
        return $this->otherOutOtherOutSaveAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation otherOutOtherOutSaveAsyncWithHttpInfo
     *
     * 其他出库单保存;其他出库单新增及修改。审核、删除等详见[通用操作接口](https://open.jdy.com/#/files/api/detail?index=2&categrayId=3cc8ee9a663e11eda5c84b5d383a2b93&id=9e804b8c712511eda0b39f724d124b07);1.0.12
     *
     * @param  \com_kingdee_service\data\entity\OtherOutSaveReq $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function otherOutOtherOutSaveAsyncWithHttpInfo($body)
    {
        $returnType = '\com_kingdee_service\data\entity\SaveReply';
        $request = $this->otherOutOtherOutSaveRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return $content;
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'otherOutOtherOutSave'
     *
     * @param  \com_kingdee_service\data\entity\OtherOutSaveReq $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function otherOutOtherOutSaveRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling otherOutOtherOutSave'
            );
        }

        $resourcePath = '/jdy/v2/scm/inv_other_out';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        // 增加头部签名
        $headers['Content-Type'] = 'application/json; charset=UTF-8';
        //固定字符串
        $headers['X-Api-SignHeaders'] = 'X-Api-TimeStamp,X-Api-Nonce';
        $headers['X-Api-Auth-Version'] = '2.0';
        $headers['X-Api-ClientID'] = $this->config->getAppID();
        //当前时间戳
        list($msec, $sec) = explode(' ', microtime());
        $timestamp = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
        //随机数
        $nonce = rand(1000000, 9999999);
        $headers['X-Api-TimeStamp'] = $timestamp;
        $headers['X-Api-Nonce'] = $nonce;

        //参数处理
        $urlencode_params = '';
        if (!empty($queryParams)) {
            $values = array();
            foreach ($queryParams as $key => $val) {
                $values[] = rawurlencode(rawurlencode($key)) . "=" . rawurlencode(rawurlencode($val));
            }
            $urlencode_params = implode("&", $values);
            unset($values);
        }
        $data = strtoupper('POST') . "\n" . urlencode($resourcePath) . "\n" . $urlencode_params . "\nx-api-nonce:" . $nonce . "\nx-api-timestamp:" . $timestamp . "\n";
        //密钥
        $seckey = $this->config->getAppSec();
        $headers['X-Api-Signature'] = base64_encode(hash_hmac('sha256', $data, $seckey, false));
        $headers['app-token'] = $this->config->getAppToken();

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
