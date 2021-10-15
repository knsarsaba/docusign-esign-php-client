<?php

declare(strict_types=1);

/**
 * EnvelopesApiApplyTemplateOptions.
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
 * EnvelopesApiApplyTemplateOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnvelopesApiApplyTemplateOptions
{
    /**
      * $preserve_template_recipient 
      * @var ?string
      */
    protected ?string $preserve_template_recipient = null;

    /**
     * Gets preserve_template_recipient
     *
     * @return ?string
     */
    public function getPreserveTemplateRecipient(): ?string
    {
        return $this->preserve_template_recipient;
    }

    /**
     * Sets preserve_template_recipient
     * @param ?string $preserve_template_recipient 
     *
     * @return self
     */
    public function setPreserveTemplateRecipient(?string $preserve_template_recipient): self
    {
        $this->preserve_template_recipient = $preserve_template_recipient;
        return $this;
    }
}
