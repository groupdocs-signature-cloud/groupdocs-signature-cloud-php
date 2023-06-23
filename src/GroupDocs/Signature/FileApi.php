<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="FileApi.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Signature;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GroupDocs\Signature\Model\Requests;

/*
 * GroupDocs.Signature Cloud API Reference
 */
class FileApi
{
    /*
     * Stores client instance
     * @var ClientInterface client for calling api
     */
    protected $client;

    /*
     * Stores configuration
     * @var Configuration configuration info
     */
    protected $config;
  
    /*
     * Stores header selector
     * HeaderSelector class for header selection
     */
    protected $headerSelector;

    /*
     * Stores access token
     * @var accessToken Access token
     */
    protected $accessToken;

    /*
     * Initialize a new instance of FileApi
     * @param Configuration   $config configuration info
     * @param ClientInterface   $client client for calling api
     * @param HeaderSelector   $selector class for header selection
     */
    public function __construct(Configuration $config = null, ClientInterface $client = null, HeaderSelector $selector = null)
    {
        $this->config = $config ?: new Configuration();
        $this->client = $client ?: new Client();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /*
     * Gets the config
     * @return Configuration
     */
    public function getConfig() 
    {
        return $this->config;
    }

    /*
     * Operation copyFile
     *
     * Copy file
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Signature\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function copyFile(Requests\copyFileRequest $request)
    {
        $this->copyFileWithHttpInfo($request);
    }

    /*
     * Operation copyFileWithHttpInfo
     *
     * Copy file
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Signature\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function copyFileWithHttpInfo(Requests\copyFileRequest $request)
    {
        $returnType = '';
        $request = $this->copyFileRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error != null && $error->message != null
                    ? $error->message
                    : ($error != null && $error->error != null && $error->error->message != null ? $error->error->message : $e->getMessage());
                
                throw new ApiException($errorMessage, $errorCode);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /*
     * Operation copyFileAsync
     *
     * Copy file
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFileAsync(Requests\copyFileRequest $request) 
    {
        return $this->copyFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation copyFileAsyncWithHttpInfo
     *
     * Copy file
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function copyFileAsyncWithHttpInfo(Requests\copyFileRequest $request) 
    {
        $returnType = '';
        $request = $this->copyFileRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();        
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'copyFile'
     *
     * @param Requests\copyFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function copyFileRequest(Requests\copyFileRequest $request)
    {
        // verify the required parameter 'srcPath' is set
        if ($request->srcPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $srcPath when calling copyFile');
        }
        // verify the required parameter 'destPath' is set
        if ($request->destPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $destPath when calling copyFile');
        }

        $resourcePath = '/signature/storage/file/copy/{srcPath}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->srcPath !== null) {
            $localName = lcfirst('srcPath');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->srcPath), $resourcePath);
        }

        // query params
        if ($request->destPath !== null) {
            $localName = lcfirst('destPath');
            $localValue = is_bool($request->destPath) ? ($request->destPath ? 'true' : 'false') : $request->destPath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->srcStorageName !== null) {
            $localName = lcfirst('srcStorageName');
            $localValue = is_bool($request->srcStorageName) ? ($request->srcStorageName ? 'true' : 'false') : $request->srcStorageName;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->destStorageName !== null) {
            $localName = lcfirst('destStorageName');
            $localValue = is_bool($request->destStorageName) ? ($request->destStorageName ? 'true' : 'false') : $request->destStorageName;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->versionId !== null) {
            $localName = lcfirst('versionId');
            $localValue = is_bool($request->versionId) ? ($request->versionId ? 'true' : 'false') : $request->versionId;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
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
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation deleteFile
     *
     * Delete file
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Signature\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFile(Requests\deleteFileRequest $request)
    {
        $this->deleteFileWithHttpInfo($request);
    }

    /*
     * Operation deleteFileWithHttpInfo
     *
     * Delete file
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Signature\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteFileWithHttpInfo(Requests\deleteFileRequest $request)
    {
        $returnType = '';
        $request = $this->deleteFileRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error != null && $error->message != null
                    ? $error->message
                    : ($error != null && $error->error != null && $error->error->message != null ? $error->error->message : $e->getMessage());
                
                throw new ApiException($errorMessage, $errorCode);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /*
     * Operation deleteFileAsync
     *
     * Delete file
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFileAsync(Requests\deleteFileRequest $request) 
    {
        return $this->deleteFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation deleteFileAsyncWithHttpInfo
     *
     * Delete file
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFileAsyncWithHttpInfo(Requests\deleteFileRequest $request) 
    {
        $returnType = '';
        $request = $this->deleteFileRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();        
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'deleteFile'
     *
     * @param Requests\deleteFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteFileRequest(Requests\deleteFileRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling deleteFile');
        }

        $resourcePath = '/signature/storage/file/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }

        // query params
        if ($request->storageName !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($request->storageName) ? ($request->storageName ? 'true' : 'false') : $request->storageName;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->versionId !== null) {
            $localName = lcfirst('versionId');
            $localValue = is_bool($request->versionId) ? ($request->versionId ? 'true' : 'false') : $request->versionId;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
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
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'DELETE',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('DELETE', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation downloadFile
     *
     * Download file
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Signature\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplFileObject
     */
    public function downloadFile(Requests\downloadFileRequest $request)
    {
        list($response) = $this->downloadFileWithHttpInfo($request);
        return $response;
    }

    /*
     * Operation downloadFileWithHttpInfo
     *
     * Download file
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Signature\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function downloadFileWithHttpInfo(Requests\downloadFileRequest $request)
    {
        $returnType = '\SplFileObject';
        $request = $this->downloadFileRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error != null && $error->message != null
                    ? $error->message
                    : ($error != null && $error->error != null && $error->error->message != null ? $error->error->message : $e->getMessage());
                
                throw new ApiException($errorMessage, $errorCode);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
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
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation downloadFileAsync
     *
     * Download file
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadFileAsync(Requests\downloadFileRequest $request) 
    {
        return $this->downloadFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation downloadFileAsyncWithHttpInfo
     *
     * Download file
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadFileAsyncWithHttpInfo(Requests\downloadFileRequest $request) 
    {
        $returnType = '\SplFileObject';
        $request = $this->downloadFileRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();        
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'downloadFile'
     *
     * @param Requests\downloadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function downloadFileRequest(Requests\downloadFileRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling downloadFile');
        }

        $resourcePath = '/signature/storage/file/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }

        // query params
        if ($request->storageName !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($request->storageName) ? ($request->storageName ? 'true' : 'false') : $request->storageName;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->versionId !== null) {
            $localName = lcfirst('versionId');
            $localValue = is_bool($request->versionId) ? ($request->versionId ? 'true' : 'false') : $request->versionId;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['multipart/form-data'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'GET',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('GET', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation moveFile
     *
     * Move file
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Signature\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function moveFile(Requests\moveFileRequest $request)
    {
        $this->moveFileWithHttpInfo($request);
    }

    /*
     * Operation moveFileWithHttpInfo
     *
     * Move file
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Signature\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function moveFileWithHttpInfo(Requests\moveFileRequest $request)
    {
        $returnType = '';
        $request = $this->moveFileRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error != null && $error->message != null
                    ? $error->message
                    : ($error != null && $error->error != null && $error->error->message != null ? $error->error->message : $e->getMessage());
                
                throw new ApiException($errorMessage, $errorCode);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /*
     * Operation moveFileAsync
     *
     * Move file
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFileAsync(Requests\moveFileRequest $request) 
    {
        return $this->moveFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation moveFileAsyncWithHttpInfo
     *
     * Move file
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function moveFileAsyncWithHttpInfo(Requests\moveFileRequest $request) 
    {
        $returnType = '';
        $request = $this->moveFileRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();        
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'moveFile'
     *
     * @param Requests\moveFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function moveFileRequest(Requests\moveFileRequest $request)
    {
        // verify the required parameter 'srcPath' is set
        if ($request->srcPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $srcPath when calling moveFile');
        }
        // verify the required parameter 'destPath' is set
        if ($request->destPath === null) {
            throw new \InvalidArgumentException('Missing the required parameter $destPath when calling moveFile');
        }

        $resourcePath = '/signature/storage/file/move/{srcPath}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->srcPath !== null) {
            $localName = lcfirst('srcPath');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->srcPath), $resourcePath);
        }

        // query params
        if ($request->destPath !== null) {
            $localName = lcfirst('destPath');
            $localValue = is_bool($request->destPath) ? ($request->destPath ? 'true' : 'false') : $request->destPath;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->srcStorageName !== null) {
            $localName = lcfirst('srcStorageName');
            $localValue = is_bool($request->srcStorageName) ? ($request->srcStorageName ? 'true' : 'false') : $request->srcStorageName;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->destStorageName !== null) {
            $localName = lcfirst('destStorageName');
            $localValue = is_bool($request->destStorageName) ? ($request->destStorageName ? 'true' : 'false') : $request->destStorageName;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
        // query params
        if ($request->versionId !== null) {
            $localName = lcfirst('versionId');
            $localValue = is_bool($request->versionId) ? ($request->versionId ? 'true' : 'false') : $request->versionId;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
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
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Operation uploadFile
     *
     * Upload file
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Signature\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GroupDocs\Signature\Model\FilesUploadResult
     */
    public function uploadFile(Requests\uploadFileRequest $request)
    {
        list($response) = $this->uploadFileWithHttpInfo($request);
        return $response;
    }

    /*
     * Operation uploadFileWithHttpInfo
     *
     * Upload file
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \GroupDocs\Signature\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GroupDocs\Signature\Model\FilesUploadResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadFileWithHttpInfo(Requests\uploadFileRequest $request)
    {
        $returnType = '\GroupDocs\Signature\Model\FilesUploadResult';
        $request = $this->uploadFileRequest($request);

        try {
            $options = $this->_createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error != null && $error->message != null
                    ? $error->message
                    : ($error != null && $error->error != null && $error->error->message != null ? $error->error->message : $e->getMessage());
                
                throw new ApiException($errorMessage, $errorCode);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {          
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode);
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
            
            if ($this->config->getDebug()) {
                $this->_writeResponseLog($statusCode, $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            case 200:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\GroupDocs\Signature\Model\FilesUploadResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                break;
            }
            throw $e;
        }
    }

    /*
     * Operation uploadFileAsync
     *
     * Upload file
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadFileAsync(Requests\uploadFileRequest $request) 
    {
        return $this->uploadFileAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /*
     * Operation uploadFileAsyncWithHttpInfo
     *
     * Upload file
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadFileAsyncWithHttpInfo(Requests\uploadFileRequest $request) 
    {
        $returnType = '\GroupDocs\Signature\Model\FilesUploadResult';
        $request = $this->uploadFileRequest($request);

        return $this->client
            ->sendAsync($request, $this->_createHttpClientOption())
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
                    
                    if ($this->config->getDebug()) {
                        $this->_writeResponseLog($response->getStatusCode(), $response->getHeaders(), ObjectSerializer::deserialize($content, $returnType, []));
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {        
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();        
          
                    throw new ApiException(
                        sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode
                    );
                }
            );
    }

    /*
     * Create request for operation 'uploadFile'
     *
     * @param Requests\uploadFileRequest $request is a request object for operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function uploadFileRequest(Requests\uploadFileRequest $request)
    {
        // verify the required parameter 'path' is set
        if ($request->path === null) {
            throw new \InvalidArgumentException('Missing the required parameter $path when calling uploadFile');
        }
        // verify the required parameter 'file' is set
        if ($request->file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file when calling uploadFile');
        }

        $resourcePath = '/signature/storage/file/{path}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = "";
        $multipart = false;
    
        // path params
        if ($request->path !== null) {
            $localName = lcfirst('path');
            $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($request->path), $resourcePath);
        }

        // query params
        if ($request->storageName !== null) {
            $localName = lcfirst('storageName');
            $localValue = is_bool($request->storageName) ? ($request->storageName ? 'true' : 'false') : $request->storageName;
            if (strpos($resourcePath, '{' . $localName . '}') !== false) {
                $resourcePath = str_replace('{' . $localName . '}', ObjectSerializer::toPathValue($localValue), $resourcePath);
            } else {
                $queryParams[$localName] = ObjectSerializer::toQueryValue($localValue);
            }
        }
    
    
        $resourcePath = $this->_buildUrl($resourcePath, $queryParams);

        // form params
        if ($request->file !== null) {
            $multipart = true;
            $filename = ObjectSerializer::toFormValue($request->file);
            $handle = fopen($filename, "rb");
            $fsize = filesize($filename);
            $contents = fread($handle, $fsize);
            $formParams['file'] = $contents;
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'filename' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = $formParams["data"];
            }
        }
    
        $this->_requestToken();

        if ($this->accessToken !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->accessToken;
        }

        $defaultHeaders = [];
        
        if ($this->config->getClientName()) {
            $defaultHeaders['x-groupdocs-client'] = $this->config->getClientName();
        }

        if ($this->config->getClientVersion()) {
            $defaultHeaders['x-groupdocs-client-version'] = $this->config->getClientVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
    
        $req = new Request(
            'PUT',
            $resourcePath,
            $headers,
            $httpBody
        );
        if ($this->config->getDebug()) {
            $this->_writeRequestLog('PUT', $resourcePath, $headers, $httpBody);
        }
        
        return $req;
    }

    /*
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    private function _createHttpClientOption() 
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = true;
        }

        return $options;
    }
    
    /*
     * Executes response logging
     */
    private function _writeResponseLog($statusCode, $headers, $body)
    {
        $logInfo = "\nResponse: $statusCode \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes request logging
     */
    private function _writeRequestLog($method, $url, $headers, $body)
    {
        $logInfo = "\n$method: $url \n";
        echo $logInfo . $this->_writeHeadersAndBody($logInfo, $headers, $body);
    }
	
    /*
     * Executes header and boy formatting
     */
    private function _writeHeadersAndBody($logInfo, $headers, $body)
    {
        foreach ($headers as $name => $value) {
            if(is_array($value))
            {
                $logInfo .= $name . ': ';
                foreach ($value as $val)
                    $logInfo .= $val . "; ";
                $logInfo .= "\n";
            }
            else
                $logInfo .= $name . ': ' . $value . "\n";
        }
        
        return $logInfo .= "Body: " . $body . "\n";
    }

    /*
     * Executes url parsing
     */
    private function _buildUrl($url, $queryParams) 
    {
        $urlPath = trim($url, '/');
        $urlQuery = http_build_query($queryParams);
 
        $url = $this->config->getServerUrl() . '/' . $urlPath . "?" . $urlQuery;
        
        return $url;
    }
  
    /*
     * Gets a request token from server
     */
    private function _requestToken() 
    {
        if($this->accessToken == null) 
        {
            $requestUrl = $this->config->getApiBaseUrl() . "/connect/token";
            $postData = "grant_type=client_credentials" . "&client_id=" . $this->config->getAppSid() . "&client_secret=" . $this->config->getAppKey();
            try {
                $headers = [];
                $headers["Content-Type"] = "application/x-www-form-urlencoded";                
                $response = $this->client->send(new Request('POST', $requestUrl, $headers, $postData));
                $result = json_decode($response->getBody()->getContents(), true);
            
                $this->accessToken = $result["access_token"];                
            } catch (RequestException $e) {
                $responseBody = $e->getResponse()->getBody();
                $content = $responseBody->getContents();
                $error = json_decode($content);

                $errorCode = $e->getCode();
                $errorMessage = $error->error != null 
                    ? $error->error
                    : $e->getMessage();
                    
                throw new ApiException($errorMessage, $errorCode);
            }
        }
    }
  
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="copyFileRequest.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Signature\Model\Requests;

/*
 * Request model for copyFile operation.
 */
class copyFileRequest
{
    /*
     * Initializes a new instance of the copyFileRequest class.
     *  
     * @param string $srcPath Source file path e.g. '/folder/file.ext'
     * @param string $destPath Destination file path
     * @param string $srcStorageName Source storage name
     * @param string $destStorageName Destination storage name
     * @param string $versionId File version ID to copy
     */
    public function __construct($srcPath, $destPath, $srcStorageName = null, $destStorageName = null, $versionId = null)             
    {
        $this->srcPath = $srcPath;
        $this->destPath = $destPath;
        $this->srcStorageName = $srcStorageName;
        $this->destStorageName = $destStorageName;
        $this->versionId = $versionId;
    }

    /*
     * Source file path e.g. '/folder/file.ext'
     */
    public $srcPath;
	
    /*
     * Destination file path
     */
    public $destPath;
	
    /*
     * Source storage name
     */
    public $srcStorageName;
	
    /*
     * Destination storage name
     */
    public $destStorageName;
	
    /*
     * File version ID to copy
     */
    public $versionId;
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="deleteFileRequest.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Signature\Model\Requests;

/*
 * Request model for deleteFile operation.
 */
class deleteFileRequest
{
    /*
     * Initializes a new instance of the deleteFileRequest class.
     *  
     * @param string $path File path e.g. '/folder/file.ext'
     * @param string $storageName Storage name
     * @param string $versionId File version ID to delete
     */
    public function __construct($path, $storageName = null, $versionId = null)             
    {
        $this->path = $path;
        $this->storageName = $storageName;
        $this->versionId = $versionId;
    }

    /*
     * File path e.g. '/folder/file.ext'
     */
    public $path;
	
    /*
     * Storage name
     */
    public $storageName;
	
    /*
     * File version ID to delete
     */
    public $versionId;
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="downloadFileRequest.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Signature\Model\Requests;

/*
 * Request model for downloadFile operation.
 */
class downloadFileRequest
{
    /*
     * Initializes a new instance of the downloadFileRequest class.
     *  
     * @param string $path File path e.g. '/folder/file.ext'
     * @param string $storageName Storage name
     * @param string $versionId File version ID to download
     */
    public function __construct($path, $storageName = null, $versionId = null)             
    {
        $this->path = $path;
        $this->storageName = $storageName;
        $this->versionId = $versionId;
    }

    /*
     * File path e.g. '/folder/file.ext'
     */
    public $path;
	
    /*
     * Storage name
     */
    public $storageName;
	
    /*
     * File version ID to download
     */
    public $versionId;
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="moveFileRequest.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Signature\Model\Requests;

/*
 * Request model for moveFile operation.
 */
class moveFileRequest
{
    /*
     * Initializes a new instance of the moveFileRequest class.
     *  
     * @param string $srcPath Source file path e.g. '/src.ext'
     * @param string $destPath Destination file path e.g. '/dest.ext'
     * @param string $srcStorageName Source storage name
     * @param string $destStorageName Destination storage name
     * @param string $versionId File version ID to move
     */
    public function __construct($srcPath, $destPath, $srcStorageName = null, $destStorageName = null, $versionId = null)             
    {
        $this->srcPath = $srcPath;
        $this->destPath = $destPath;
        $this->srcStorageName = $srcStorageName;
        $this->destStorageName = $destStorageName;
        $this->versionId = $versionId;
    }

    /*
     * Source file path e.g. '/src.ext'
     */
    public $srcPath;
	
    /*
     * Destination file path e.g. '/dest.ext'
     */
    public $destPath;
	
    /*
     * Source storage name
     */
    public $srcStorageName;
	
    /*
     * Destination storage name
     */
    public $destStorageName;
	
    /*
     * File version ID to move
     */
    public $versionId;
}
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="uploadFileRequest.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Signature\Model\Requests;

/*
 * Request model for uploadFile operation.
 */
class uploadFileRequest
{
    /*
     * Initializes a new instance of the uploadFileRequest class.
     *  
     * @param string $path Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header.
     * @param \SplFileObject $file File to upload
     * @param string $storageName Storage name
     */
    public function __construct($path, $file, $storageName = null)             
    {
        $this->path = $path;
        $this->file = $file;
        $this->storageName = $storageName;
    }

    /*
     * Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext             If the content is multipart and path does not contains the file name it tries to get them from filename parameter             from Content-Disposition header.
     */
    public $path;
	
    /*
     * File to upload
     */
    public $file;
	
    /*
     * Storage name
     */
    public $storageName;
}
