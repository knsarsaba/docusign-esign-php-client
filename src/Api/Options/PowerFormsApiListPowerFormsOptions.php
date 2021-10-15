<?php

declare(strict_types=1);

/**
 * PowerFormsApiListPowerFormsOptions.
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
 * PowerFormsApiListPowerFormsOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PowerFormsApiListPowerFormsOptions
{
    /**
      * $from_date 
      * @var ?string
      */
    protected ?string $from_date = null;

    /**
     * Gets from_date
     *
     * @return ?string
     */
    public function getFromDate(): ?string
    {
        return $this->from_date;
    }

    /**
     * Sets from_date
     * @param ?string $from_date 
     *
     * @return self
     */
    public function setFromDate(?string $from_date): self
    {
        $this->from_date = $from_date;
        return $this;
    }
    /**
      * $order 
      * @var ?string
      */
    protected ?string $order = null;

    /**
     * Gets order
     *
     * @return ?string
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * Sets order
     * @param ?string $order 
     *
     * @return self
     */
    public function setOrder(?string $order): self
    {
        $this->order = $order;
        return $this;
    }
    /**
      * $order_by 
      * @var ?string
      */
    protected ?string $order_by = null;

    /**
     * Gets order_by
     *
     * @return ?string
     */
    public function getOrderBy(): ?string
    {
        return $this->order_by;
    }

    /**
     * Sets order_by
     * @param ?string $order_by 
     *
     * @return self
     */
    public function setOrderBy(?string $order_by): self
    {
        $this->order_by = $order_by;
        return $this;
    }
    /**
      * $to_date 
      * @var ?string
      */
    protected ?string $to_date = null;

    /**
     * Gets to_date
     *
     * @return ?string
     */
    public function getToDate(): ?string
    {
        return $this->to_date;
    }

    /**
     * Sets to_date
     * @param ?string $to_date 
     *
     * @return self
     */
    public function setToDate(?string $to_date): self
    {
        $this->to_date = $to_date;
        return $this;
    }
}
