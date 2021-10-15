<?php

declare(strict_types=1);

/**
 * EnvelopesApiGetEnvelopeOptions.
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
 * EnvelopesApiGetEnvelopeOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnvelopesApiGetEnvelopeOptions
{
    /**
      * $advanced_update When true, envelope information can be added or modified.
      * @var ?string
      */
    protected ?string $advanced_update = null;

    /**
     * Gets advanced_update
     *
     * @return ?string
     */
    public function getAdvancedUpdate(): ?string
    {
        return $this->advanced_update;
    }

    /**
     * Sets advanced_update
     * @param ?string $advanced_update When true, envelope information can be added or modified.
     *
     * @return self
     */
    public function setAdvancedUpdate(?string $advanced_update): self
    {
        $this->advanced_update = $advanced_update;
        return $this;
    }
    /**
      * $include 
      * @var ?string
      */
    protected ?string $include = null;

    /**
     * Gets include
     *
     * @return ?string
     */
    public function getInclude(): ?string
    {
        return $this->include;
    }

    /**
     * Sets include
     * @param ?string $include 
     *
     * @return self
     */
    public function setInclude(?string $include): self
    {
        $this->include = $include;
        return $this;
    }
}
