<?php

declare(strict_types=1);

/**
 * AccountsApiDeleteCustomFieldOptions.
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
 * AccountsApiDeleteCustomFieldOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsApiDeleteCustomFieldOptions
{
    /**
      * $apply_to_templates 
      * @var ?string
      */
    protected ?string $apply_to_templates = null;

    /**
     * Gets apply_to_templates
     *
     * @return ?string
     */
    public function getApplyToTemplates(): ?string
    {
        return $this->apply_to_templates;
    }

    /**
     * Sets apply_to_templates
     * @param ?string $apply_to_templates 
     *
     * @return self
     */
    public function setApplyToTemplates(?string $apply_to_templates): self
    {
        $this->apply_to_templates = $apply_to_templates;
        return $this;
    }
}
