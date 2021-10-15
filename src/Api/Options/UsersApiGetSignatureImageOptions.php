<?php

declare(strict_types=1);

/**
 * UsersApiGetSignatureImageOptions.
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

namespace DocuSign\eSign\Api\Options;


/**
 * UsersApiGetSignatureImageOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsersApiGetSignatureImageOptions
{
    /**
      * $include_chrome 
      * @var ?string
      */
    protected ?string $include_chrome = null;

    /**
     * Gets include_chrome
     *
     * @return ?string
     */
    public function getIncludeChrome(): ?string
    {
        return $this->include_chrome;
    }

    /**
     * Sets include_chrome
     * @param ?string $include_chrome 
     *
     * @return self
     */
    public function setIncludeChrome(?string $include_chrome): self
    {
        $this->include_chrome = $include_chrome;
        return $this;
    }
}
