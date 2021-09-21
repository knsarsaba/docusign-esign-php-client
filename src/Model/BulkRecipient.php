<?php
/**
 * BulkRecipient
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * BulkRecipient Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkRecipient implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'bulkRecipient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_code' => '?string',
        'email' => '?string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails[]',
        'identification' => '?string',
        'name' => '?string',
        'note' => '?string',
        'phone_number' => '?string',
        'recipient_signature_provider_info' => '\DocuSign\eSign\Model\BulkRecipientSignatureProvider[]',
        'row_number' => '?string',
        'tab_labels' => '\DocuSign\eSign\Model\BulkRecipientTabLabel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_code' => null,
        'email' => null,
        'error_details' => null,
        'identification' => null,
        'name' => null,
        'note' => null,
        'phone_number' => null,
        'recipient_signature_provider_info' => null,
        'row_number' => null,
        'tab_labels' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'access_code' => 'accessCode',
        'email' => 'email',
        'error_details' => 'errorDetails',
        'identification' => 'identification',
        'name' => 'name',
        'note' => 'note',
        'phone_number' => 'phoneNumber',
        'recipient_signature_provider_info' => 'recipientSignatureProviderInfo',
        'row_number' => 'rowNumber',
        'tab_labels' => 'tabLabels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_code' => 'setAccessCode',
        'email' => 'setEmail',
        'error_details' => 'setErrorDetails',
        'identification' => 'setIdentification',
        'name' => 'setName',
        'note' => 'setNote',
        'phone_number' => 'setPhoneNumber',
        'recipient_signature_provider_info' => 'setRecipientSignatureProviderInfo',
        'row_number' => 'setRowNumber',
        'tab_labels' => 'setTabLabels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_code' => 'getAccessCode',
        'email' => 'getEmail',
        'error_details' => 'getErrorDetails',
        'identification' => 'getIdentification',
        'name' => 'getName',
        'note' => 'getNote',
        'phone_number' => 'getPhoneNumber',
        'recipient_signature_provider_info' => 'getRecipientSignatureProviderInfo',
        'row_number' => 'getRowNumber',
        'tab_labels' => 'getTabLabels'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['access_code'] = isset($data['access_code']) ? $data['access_code'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['identification'] = isset($data['identification']) ? $data['identification'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['recipient_signature_provider_info'] = isset($data['recipient_signature_provider_info']) ? $data['recipient_signature_provider_info'] : null;
        $this->container['row_number'] = isset($data['row_number']) ? $data['row_number'] : null;
        $this->container['tab_labels'] = isset($data['tab_labels']) ? $data['tab_labels'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets access_code
     *
     * @return ?string
     */
    public function getAccessCode()
    {
        return $this->container['access_code'];
    }

    /**
     * Sets access_code
     *
     * @param ?string $access_code If a value is provided, the recipient must enter the value as the access code to view and sign the envelope.   Maximum Length: 50 characters and it must conform to the account's access code format setting.  If blank, but the signer `accessCode` property is set in the envelope, then that value is used.  If blank and the signer `accessCode` property is not set, then the access code is not required.
     *
     * @return $this
     */
    public function setAccessCode($access_code)
    {
        $this->container['access_code'] = $access_code;

        return $this;
    }

    /**
     * Gets email
     *
     * @return ?string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param ?string $email Specifies the recipient's email address.   Maximum length: 100 characters.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return \DocuSign\eSign\Model\ErrorDetails[]
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \DocuSign\eSign\Model\ErrorDetails[] $error_details Array or errors.
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets identification
     *
     * @return ?string
     */
    public function getIdentification()
    {
        return $this->container['identification'];
    }

    /**
     * Sets identification
     *
     * @param ?string $identification Specifies the authentication check used for the signer. If blank then no authentication check is required for the signer. Only one value can be used in this field.  The acceptable values are:  * KBA: Enables the normal ID check authentication set up for your account. * Phone: Enables phone authentication. * SMS: Enables SMS authentication.
     *
     * @return $this
     */
    public function setIdentification($identification)
    {
        $this->container['identification'] = $identification;

        return $this;
    }

    /**
     * Gets name
     *
     * @return ?string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param ?string $name Specifies the recipient's name.   Maximum length: 50 characters.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets note
     *
     * @return ?string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param ?string $note Specifies a note that is unique to this recipient. This note is sent to the recipient via the signing email. The note displays in the signing UI near the upper left corner of the document on the signing screen.  Maximum Length: 1000 characters.
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return ?string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param ?string $phone_number This is only used if the Identification field value is Phone or SMS. The value for this field can be a valid telephone number or, if Phone, usersupplied (SMS authentication cannot use a user supplied number). Parenthesis and dashes can be used in the telephone number.  If `usersupplied` is used, the signer supplies his or her own telephone number.
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets recipient_signature_provider_info
     *
     * @return \DocuSign\eSign\Model\BulkRecipientSignatureProvider[]
     */
    public function getRecipientSignatureProviderInfo()
    {
        return $this->container['recipient_signature_provider_info'];
    }

    /**
     * Sets recipient_signature_provider_info
     *
     * @param \DocuSign\eSign\Model\BulkRecipientSignatureProvider[] $recipient_signature_provider_info 
     *
     * @return $this
     */
    public function setRecipientSignatureProviderInfo($recipient_signature_provider_info)
    {
        $this->container['recipient_signature_provider_info'] = $recipient_signature_provider_info;

        return $this;
    }

    /**
     * Gets row_number
     *
     * @return ?string
     */
    public function getRowNumber()
    {
        return $this->container['row_number'];
    }

    /**
     * Sets row_number
     *
     * @param ?string $row_number 
     *
     * @return $this
     */
    public function setRowNumber($row_number)
    {
        $this->container['row_number'] = $row_number;

        return $this;
    }

    /**
     * Gets tab_labels
     *
     * @return \DocuSign\eSign\Model\BulkRecipientTabLabel[]
     */
    public function getTabLabels()
    {
        return $this->container['tab_labels'];
    }

    /**
     * Sets tab_labels
     *
     * @param \DocuSign\eSign\Model\BulkRecipientTabLabel[] $tab_labels Specifies values used to populate recipient tabs with information. This allows each bulk recipient signer to have different values for their associated tabs. Any number of `tabLabel` columns can be added to the bulk recipient file.  The information used in the bulk recipient file header must be the same as the `tabLabel` for the tab.  The values entered in this column are automatically inserted into the corresponding tab for the recipient in the same row.  Note that this option cannot be used for tabs that do not have data or that are automatically populated data such as Signature, Full Name, Email Address, Company, Title, and Date Signed tabs.
     *
     * @return $this
     */
    public function setTabLabels($tab_labels)
    {
        $this->container['tab_labels'] = $tab_labels;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

