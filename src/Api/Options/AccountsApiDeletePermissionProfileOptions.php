<?php

declare(strict_types=1);

/**
 * AccountsApiDeletePermissionProfileOptions.
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
 * AccountsApiDeletePermissionProfileOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsApiDeletePermissionProfileOptions
{
    /**
      * $move_users_to 
      * @var ?string
      */
    protected ?string $move_users_to = null;

    /**
     * Gets move_users_to
     *
     * @return ?string
     */
    public function getMoveUsersTo(): ?string
    {
        return $this->move_users_to;
    }

    /**
     * Sets move_users_to
     * @param ?string $move_users_to 
     *
     * @return self
     */
    public function setMoveUsersTo(?string $move_users_to): self
    {
        $this->move_users_to = $move_users_to;
        return $this;
    }
}
