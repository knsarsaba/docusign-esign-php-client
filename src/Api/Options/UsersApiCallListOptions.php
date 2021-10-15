<?php

declare(strict_types=1);

/**
 * UsersApiCallListOptions.
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
 * UsersApiCallListOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature Ruby Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsersApiListOptions
{
    /**
      * $additional_info When set to **true**, the full list of user information is returned for each user in the account.
      * @var ?string
      */
    protected ?string $additional_info = null;

    /**
     * Gets additional_info
     *
     * @return ?string
     */
    public function getAdditionalInfo(): ?string
    {
        return $this->additional_info;
    }

    /**
     * Sets additional_info
     * @param ?string $additional_info When set to **true**, the full list of user information is returned for each user in the account.
     *
     * @return self
     */
    public function setAdditionalInfo(?string $additional_info): self
    {
        $this->additional_info = $additional_info;
        return $this;
    }
    /**
      * $count Number of records to return. The number must be greater than 0 and less than or equal to 100.
      * @var ?string
      */
    protected ?string $count = null;

    /**
     * Gets count
     *
     * @return ?string
     */
    public function getCount(): ?string
    {
        return $this->count;
    }

    /**
     * Sets count
     * @param ?string $count Number of records to return. The number must be greater than 0 and less than or equal to 100.
     *
     * @return self
     */
    public function setCount(?string $count): self
    {
        $this->count = $count;
        return $this;
    }
    /**
      * $email 
      * @var ?string
      */
    protected ?string $email = null;

    /**
     * Gets email
     *
     * @return ?string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets email
     * @param ?string $email 
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
      * $email_substring Filters the returned user records by the email address or a sub-string of email address.
      * @var ?string
      */
    protected ?string $email_substring = null;

    /**
     * Gets email_substring
     *
     * @return ?string
     */
    public function getEmailSubstring(): ?string
    {
        return $this->email_substring;
    }

    /**
     * Sets email_substring
     * @param ?string $email_substring Filters the returned user records by the email address or a sub-string of email address.
     *
     * @return self
     */
    public function setEmailSubstring(?string $email_substring): self
    {
        $this->email_substring = $email_substring;
        return $this;
    }
    /**
      * $group_id Filters user records returned by one or more group Id's.
      * @var ?string
      */
    protected ?string $group_id = null;

    /**
     * Gets group_id
     *
     * @return ?string
     */
    public function getGroupId(): ?string
    {
        return $this->group_id;
    }

    /**
     * Sets group_id
     * @param ?string $group_id Filters user records returned by one or more group Id's.
     *
     * @return self
     */
    public function setGroupId(?string $group_id): self
    {
        $this->group_id = $group_id;
        return $this;
    }
    /**
      * $include_usersettings_for_csv 
      * @var ?string
      */
    protected ?string $include_usersettings_for_csv = null;

    /**
     * Gets include_usersettings_for_csv
     *
     * @return ?string
     */
    public function getIncludeUsersettingsForCsv(): ?string
    {
        return $this->include_usersettings_for_csv;
    }

    /**
     * Sets include_usersettings_for_csv
     * @param ?string $include_usersettings_for_csv 
     *
     * @return self
     */
    public function setIncludeUsersettingsForCsv(?string $include_usersettings_for_csv): self
    {
        $this->include_usersettings_for_csv = $include_usersettings_for_csv;
        return $this;
    }
    /**
      * $login_status 
      * @var ?string
      */
    protected ?string $login_status = null;

    /**
     * Gets login_status
     *
     * @return ?string
     */
    public function getLoginStatus(): ?string
    {
        return $this->login_status;
    }

    /**
     * Sets login_status
     * @param ?string $login_status 
     *
     * @return self
     */
    public function setLoginStatus(?string $login_status): self
    {
        $this->login_status = $login_status;
        return $this;
    }
    /**
      * $not_group_id 
      * @var ?string
      */
    protected ?string $not_group_id = null;

    /**
     * Gets not_group_id
     *
     * @return ?string
     */
    public function getNotGroupId(): ?string
    {
        return $this->not_group_id;
    }

    /**
     * Sets not_group_id
     * @param ?string $not_group_id 
     *
     * @return self
     */
    public function setNotGroupId(?string $not_group_id): self
    {
        $this->not_group_id = $not_group_id;
        return $this;
    }
    /**
      * $start_position Starting value for the list.
      * @var ?string
      */
    protected ?string $start_position = null;

    /**
     * Gets start_position
     *
     * @return ?string
     */
    public function getStartPosition(): ?string
    {
        return $this->start_position;
    }

    /**
     * Sets start_position
     * @param ?string $start_position Starting value for the list.
     *
     * @return self
     */
    public function setStartPosition(?string $start_position): self
    {
        $this->start_position = $start_position;
        return $this;
    }
    /**
      * $status 
      * @var ?string
      */
    protected ?string $status = null;

    /**
     * Gets status
     *
     * @return ?string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets status
     * @param ?string $status 
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
      * $user_name_substring Filters the user records returned by the user name or a sub-string of user name.
      * @var ?string
      */
    protected ?string $user_name_substring = null;

    /**
     * Gets user_name_substring
     *
     * @return ?string
     */
    public function getUserNameSubstring(): ?string
    {
        return $this->user_name_substring;
    }

    /**
     * Sets user_name_substring
     * @param ?string $user_name_substring Filters the user records returned by the user name or a sub-string of user name.
     *
     * @return self
     */
    public function setUserNameSubstring(?string $user_name_substring): self
    {
        $this->user_name_substring = $user_name_substring;
        return $this;
    }
}
