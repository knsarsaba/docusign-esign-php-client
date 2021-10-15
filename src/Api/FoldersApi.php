<?php
declare(strict_types=1);

/**
 * FoldersApi.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Api;

use DocuSign\eSign\Client\ApiClient;
use DocuSign\eSign\Client\ApiException;
use DocuSign\eSign\Configuration;
use DocuSign\eSign\ObjectSerializer;

/**
 * FoldersApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FoldersApi
{
    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     *
     * @return void
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?? new ApiClient();
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return self
     */
    public function setApiClient(ApiClient $apiClient): self
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
    * Update $resourcePath with $
    *
    * @param string $resourcePath the resource path to use
    * @param string $baseName the base name param
    * @param string $paramName the parameter name
    *
    * @return string
    */
    public function updateResourcePath(string $resourcePath, string $baseName, string $paramName): string
    {
        return str_replace(
            "{" . $baseName . "}",
            $this->apiClient->getSerializer()->toPathValue($paramName),
            $resourcePath
        );
    }


    /**
     * Operation callList
     *
     * Gets a list of the folders for the account.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param  \DocuSign\eSign\Api\Options\FoldersApiListOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\FoldersResponse
     */
    public function callList($account_id, \DocuSign\eSign\Api\Options\FoldersApiListOptions $options = null)
    {
        list($response) = $this->callListWithHttpInfo($account_id, $options);
        return $response;
    }

    /**
     * Operation callListWithHttpInfo
     *
     * Gets a list of the folders for the account.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param  \DocuSign\eSign\Api\Options\FoldersApiListOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\FoldersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function callListWithHttpInfo($account_id, \DocuSign\eSign\Api\Options\FoldersApiListOptions $options = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling callList');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/folders";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
            // query params
            if ($options->getInclude() != 'null') {
                $queryParams['include'] = $this->apiClient->getSerializer()->toQueryValue($options->getInclude());
            }
            if ($options->getIncludeItems() != 'null') {
                $queryParams['include_items'] = $this->apiClient->getSerializer()->toQueryValue($options->getIncludeItems());
            }
            if ($options->getStartPosition() != 'null') {
                $queryParams['start_position'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
            }
            if ($options->getTemplate() != 'null') {
                $queryParams['template'] = $this->apiClient->getSerializer()->toQueryValue($options->getTemplate());
            }
            if ($options->getUserFilter() != 'null') {
                $queryParams['user_filter'] = $this->apiClient->getSerializer()->toQueryValue($options->getUserFilter());
            }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\FoldersResponse',
                '/v2.1/accounts/{accountId}/folders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\FoldersResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\FoldersResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listItems
     *
     * Gets a list of the envelopes in the specified folder.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $folder_id The ID of the folder being accessed.
     * @param  \DocuSign\eSign\Api\Options\FoldersApiListItemsOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\FolderItemsResponse
     */
    public function listItems($account_id, $folder_id, \DocuSign\eSign\Api\Options\FoldersApiListItemsOptions $options = null)
    {
        list($response) = $this->listItemsWithHttpInfo($account_id, $folder_id, $options);
        return $response;
    }

    /**
     * Operation listItemsWithHttpInfo
     *
     * Gets a list of the envelopes in the specified folder.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $folder_id The ID of the folder being accessed.
     * @param  \DocuSign\eSign\Api\Options\FoldersApiListItemsOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\FolderItemsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listItemsWithHttpInfo($account_id, $folder_id, \DocuSign\eSign\Api\Options\FoldersApiListItemsOptions $options = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling listItems');
        }
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder_id when calling listItems');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/folders/{folderId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
            // query params
            if ($options->getFromDate() != 'null') {
                $queryParams['from_date'] = $this->apiClient->getSerializer()->toQueryValue($options->getFromDate());
            }
            if ($options->getIncludeItems() != 'null') {
                $queryParams['include_items'] = $this->apiClient->getSerializer()->toQueryValue($options->getIncludeItems());
            }
            if ($options->getOwnerEmail() != 'null') {
                $queryParams['owner_email'] = $this->apiClient->getSerializer()->toQueryValue($options->getOwnerEmail());
            }
            if ($options->getOwnerName() != 'null') {
                $queryParams['owner_name'] = $this->apiClient->getSerializer()->toQueryValue($options->getOwnerName());
            }
            if ($options->getSearchText() != 'null') {
                $queryParams['search_text'] = $this->apiClient->getSerializer()->toQueryValue($options->getSearchText());
            }
            if ($options->getStartPosition() != 'null') {
                $queryParams['start_position'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
            }
            if ($options->getStatus() != 'null') {
                $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($options->getStatus());
            }
            if ($options->getToDate() != 'null') {
                $queryParams['to_date'] = $this->apiClient->getSerializer()->toQueryValue($options->getToDate());
            }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($folder_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "folderId", $folder_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\FolderItemsResponse',
                '/v2.1/accounts/{accountId}/folders/{folderId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\FolderItemsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\FolderItemsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation moveEnvelopes
     *
     * Moves an envelope from its current folder to the specified folder.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $folder_id The ID of the folder being accessed.
     * @param \DocuSign\eSign\Model\FoldersRequest $folders_request  (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\FoldersResponse
     */
    public function moveEnvelopes($account_id, $folder_id, $folders_request = null)
    {
        list($response) = $this->moveEnvelopesWithHttpInfo($account_id, $folder_id, $folders_request);
        return $response;
    }

    /**
     * Operation moveEnvelopesWithHttpInfo
     *
     * Moves an envelope from its current folder to the specified folder.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $folder_id The ID of the folder being accessed.
     * @param \DocuSign\eSign\Model\FoldersRequest $folders_request  (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\FoldersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function moveEnvelopesWithHttpInfo($account_id, $folder_id, $folders_request = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling moveEnvelopes');
        }
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder_id when calling moveEnvelopes');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/folders/{folderId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($folder_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "folderId", $folder_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($folders_request)) {
            $_tempBody = $folders_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\FoldersResponse',
                '/v2.1/accounts/{accountId}/folders/{folderId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\FoldersResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\FoldersResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation search
     *
     * Gets a list of envelopes in folders matching the specified criteria.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $search_folder_id Specifies the envelope group that is searched by the request. These are logical groupings, not actual folder names. Valid values are: drafts, awaiting_my_signature, completed, out_for_signature.
     * @param  \DocuSign\eSign\Api\Options\FoldersApiSearchOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\FolderItemResponse
     */
    public function search($account_id, $search_folder_id, \DocuSign\eSign\Api\Options\FoldersApiSearchOptions $options = null)
    {
        list($response) = $this->searchWithHttpInfo($account_id, $search_folder_id, $options);
        return $response;
    }

    /**
     * Operation searchWithHttpInfo
     *
     * Gets a list of envelopes in folders matching the specified criteria.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $search_folder_id Specifies the envelope group that is searched by the request. These are logical groupings, not actual folder names. Valid values are: drafts, awaiting_my_signature, completed, out_for_signature.
     * @param  \DocuSign\eSign\Api\Options\FoldersApiSearchOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\FolderItemResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchWithHttpInfo($account_id, $search_folder_id, \DocuSign\eSign\Api\Options\FoldersApiSearchOptions $options = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling search');
        }
        // verify the required parameter 'search_folder_id' is set
        if ($search_folder_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $search_folder_id when calling search');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/search_folders/{searchFolderId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
            // query params
            if ($options->getAll() != 'null') {
                $queryParams['all'] = $this->apiClient->getSerializer()->toQueryValue($options->getAll());
            }
            if ($options->getCount() != 'null') {
                $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($options->getCount());
            }
            if ($options->getFromDate() != 'null') {
                $queryParams['from_date'] = $this->apiClient->getSerializer()->toQueryValue($options->getFromDate());
            }
            if ($options->getIncludeRecipients() != 'null') {
                $queryParams['include_recipients'] = $this->apiClient->getSerializer()->toQueryValue($options->getIncludeRecipients());
            }
            if ($options->getOrder() != 'null') {
                $queryParams['order'] = $this->apiClient->getSerializer()->toQueryValue($options->getOrder());
            }
            if ($options->getOrderBy() != 'null') {
                $queryParams['order_by'] = $this->apiClient->getSerializer()->toQueryValue($options->getOrderBy());
            }
            if ($options->getStartPosition() != 'null') {
                $queryParams['start_position'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
            }
            if ($options->getToDate() != 'null') {
                $queryParams['to_date'] = $this->apiClient->getSerializer()->toQueryValue($options->getToDate());
            }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($search_folder_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "searchFolderId", $search_folder_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\FolderItemResponse',
                '/v2.1/accounts/{accountId}/search_folders/{searchFolderId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\FolderItemResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\FolderItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
