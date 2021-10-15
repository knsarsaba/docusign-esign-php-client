<?php

declare(strict_types=1);

/**
 * AccountsApiUpdateAccountSignatureImageOptions.
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
 * AccountsApiUpdateAccountSignatureImageOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsApiUpdateAccountSignatureImageOptions
{
    /**
      * $transparent_png 
      * @var ?string
      */
    protected ?string $transparent_png = null;

    /**
     * Gets transparent_png
     *
     * @return ?string
     */
    public function getTransparentPng(): ?string
    {
        return $this->transparent_png;
    }

    /**
     * Sets transparent_png
     * @param ?string $transparent_png 
     *
     * @return self
     */
    public function setTransparentPng(?string $transparent_png): self
    {
        $this->transparent_png = $transparent_png;
        return $this;
    }
}
