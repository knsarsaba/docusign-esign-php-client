<?php

declare(strict_types=1);

/**
 * EnvelopesApiListTabsOptions.
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
 * EnvelopesApiListTabsOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnvelopesApiListTabsOptions
{
    /**
      * $include_anchor_tab_locations When set to **true**, all tabs with anchor tab properties are included in the response.
      * @var ?string
      */
    protected ?string $include_anchor_tab_locations = null;

    /**
     * Gets include_anchor_tab_locations
     *
     * @return ?string
     */
    public function getIncludeAnchorTabLocations(): ?string
    {
        return $this->include_anchor_tab_locations;
    }

    /**
     * Sets include_anchor_tab_locations
     * @param ?string $include_anchor_tab_locations When set to **true**, all tabs with anchor tab properties are included in the response.
     *
     * @return self
     */
    public function setIncludeAnchorTabLocations(?string $include_anchor_tab_locations): self
    {
        $this->include_anchor_tab_locations = $include_anchor_tab_locations;
        return $this;
    }
    /**
      * $include_metadata 
      * @var ?string
      */
    protected ?string $include_metadata = null;

    /**
     * Gets include_metadata
     *
     * @return ?string
     */
    public function getIncludeMetadata(): ?string
    {
        return $this->include_metadata;
    }

    /**
     * Sets include_metadata
     * @param ?string $include_metadata 
     *
     * @return self
     */
    public function setIncludeMetadata(?string $include_metadata): self
    {
        $this->include_metadata = $include_metadata;
        return $this;
    }
}
