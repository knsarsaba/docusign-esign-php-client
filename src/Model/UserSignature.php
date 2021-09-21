<?php
/**
 * UserSignature
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
 * UserSignature Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserSignature implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'userSignature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adopted_date_time' => '?string',
        'created_date_time' => '?string',
        'date_stamp_properties' => '\DocuSign\eSign\Model\DateStampProperties',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'external_id' => '?string',
        'image_type' => '?string',
        'initials150_image_id' => '?string',
        'initials_image_uri' => '?string',
        'is_default' => '?string',
        'phonetic_name' => '?string',
        'signature150_image_id' => '?string',
        'signature_font' => '?string',
        'signature_id' => '?string',
        'signature_image_uri' => '?string',
        'signature_initials' => '?string',
        'signature_name' => '?string',
        'signature_type' => '?string',
        'stamp_format' => '?string',
        'stamp_image_uri' => '?string',
        'stamp_size_mm' => '?string',
        'stamp_type' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adopted_date_time' => null,
        'created_date_time' => null,
        'date_stamp_properties' => null,
        'error_details' => null,
        'external_id' => null,
        'image_type' => null,
        'initials150_image_id' => null,
        'initials_image_uri' => null,
        'is_default' => null,
        'phonetic_name' => null,
        'signature150_image_id' => null,
        'signature_font' => null,
        'signature_id' => null,
        'signature_image_uri' => null,
        'signature_initials' => null,
        'signature_name' => null,
        'signature_type' => null,
        'stamp_format' => null,
        'stamp_image_uri' => null,
        'stamp_size_mm' => null,
        'stamp_type' => null
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
        'adopted_date_time' => 'adoptedDateTime',
        'created_date_time' => 'createdDateTime',
        'date_stamp_properties' => 'dateStampProperties',
        'error_details' => 'errorDetails',
        'external_id' => 'externalID',
        'image_type' => 'imageType',
        'initials150_image_id' => 'initials150ImageId',
        'initials_image_uri' => 'initialsImageUri',
        'is_default' => 'isDefault',
        'phonetic_name' => 'phoneticName',
        'signature150_image_id' => 'signature150ImageId',
        'signature_font' => 'signatureFont',
        'signature_id' => 'signatureId',
        'signature_image_uri' => 'signatureImageUri',
        'signature_initials' => 'signatureInitials',
        'signature_name' => 'signatureName',
        'signature_type' => 'signatureType',
        'stamp_format' => 'stampFormat',
        'stamp_image_uri' => 'stampImageUri',
        'stamp_size_mm' => 'stampSizeMM',
        'stamp_type' => 'stampType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adopted_date_time' => 'setAdoptedDateTime',
        'created_date_time' => 'setCreatedDateTime',
        'date_stamp_properties' => 'setDateStampProperties',
        'error_details' => 'setErrorDetails',
        'external_id' => 'setExternalId',
        'image_type' => 'setImageType',
        'initials150_image_id' => 'setInitials150ImageId',
        'initials_image_uri' => 'setInitialsImageUri',
        'is_default' => 'setIsDefault',
        'phonetic_name' => 'setPhoneticName',
        'signature150_image_id' => 'setSignature150ImageId',
        'signature_font' => 'setSignatureFont',
        'signature_id' => 'setSignatureId',
        'signature_image_uri' => 'setSignatureImageUri',
        'signature_initials' => 'setSignatureInitials',
        'signature_name' => 'setSignatureName',
        'signature_type' => 'setSignatureType',
        'stamp_format' => 'setStampFormat',
        'stamp_image_uri' => 'setStampImageUri',
        'stamp_size_mm' => 'setStampSizeMm',
        'stamp_type' => 'setStampType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adopted_date_time' => 'getAdoptedDateTime',
        'created_date_time' => 'getCreatedDateTime',
        'date_stamp_properties' => 'getDateStampProperties',
        'error_details' => 'getErrorDetails',
        'external_id' => 'getExternalId',
        'image_type' => 'getImageType',
        'initials150_image_id' => 'getInitials150ImageId',
        'initials_image_uri' => 'getInitialsImageUri',
        'is_default' => 'getIsDefault',
        'phonetic_name' => 'getPhoneticName',
        'signature150_image_id' => 'getSignature150ImageId',
        'signature_font' => 'getSignatureFont',
        'signature_id' => 'getSignatureId',
        'signature_image_uri' => 'getSignatureImageUri',
        'signature_initials' => 'getSignatureInitials',
        'signature_name' => 'getSignatureName',
        'signature_type' => 'getSignatureType',
        'stamp_format' => 'getStampFormat',
        'stamp_image_uri' => 'getStampImageUri',
        'stamp_size_mm' => 'getStampSizeMm',
        'stamp_type' => 'getStampType'
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
        $this->container['adopted_date_time'] = isset($data['adopted_date_time']) ? $data['adopted_date_time'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['date_stamp_properties'] = isset($data['date_stamp_properties']) ? $data['date_stamp_properties'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['image_type'] = isset($data['image_type']) ? $data['image_type'] : null;
        $this->container['initials150_image_id'] = isset($data['initials150_image_id']) ? $data['initials150_image_id'] : null;
        $this->container['initials_image_uri'] = isset($data['initials_image_uri']) ? $data['initials_image_uri'] : null;
        $this->container['is_default'] = isset($data['is_default']) ? $data['is_default'] : null;
        $this->container['phonetic_name'] = isset($data['phonetic_name']) ? $data['phonetic_name'] : null;
        $this->container['signature150_image_id'] = isset($data['signature150_image_id']) ? $data['signature150_image_id'] : null;
        $this->container['signature_font'] = isset($data['signature_font']) ? $data['signature_font'] : null;
        $this->container['signature_id'] = isset($data['signature_id']) ? $data['signature_id'] : null;
        $this->container['signature_image_uri'] = isset($data['signature_image_uri']) ? $data['signature_image_uri'] : null;
        $this->container['signature_initials'] = isset($data['signature_initials']) ? $data['signature_initials'] : null;
        $this->container['signature_name'] = isset($data['signature_name']) ? $data['signature_name'] : null;
        $this->container['signature_type'] = isset($data['signature_type']) ? $data['signature_type'] : null;
        $this->container['stamp_format'] = isset($data['stamp_format']) ? $data['stamp_format'] : null;
        $this->container['stamp_image_uri'] = isset($data['stamp_image_uri']) ? $data['stamp_image_uri'] : null;
        $this->container['stamp_size_mm'] = isset($data['stamp_size_mm']) ? $data['stamp_size_mm'] : null;
        $this->container['stamp_type'] = isset($data['stamp_type']) ? $data['stamp_type'] : null;
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
     * Gets adopted_date_time
     *
     * @return ?string
     */
    public function getAdoptedDateTime()
    {
        return $this->container['adopted_date_time'];
    }

    /**
     * Sets adopted_date_time
     *
     * @param ?string $adopted_date_time The date and time the user adopted their signature.
     *
     * @return $this
     */
    public function setAdoptedDateTime($adopted_date_time)
    {
        $this->container['adopted_date_time'] = $adopted_date_time;

        return $this;
    }

    /**
     * Gets created_date_time
     *
     * @return ?string
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     *
     * @param ?string $created_date_time Indicates the date and time the item was created.
     *
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        $this->container['created_date_time'] = $created_date_time;

        return $this;
    }

    /**
     * Gets date_stamp_properties
     *
     * @return \DocuSign\eSign\Model\DateStampProperties
     */
    public function getDateStampProperties()
    {
        return $this->container['date_stamp_properties'];
    }

    /**
     * Sets date_stamp_properties
     *
     * @param \DocuSign\eSign\Model\DateStampProperties $date_stamp_properties date_stamp_properties
     *
     * @return $this
     */
    public function setDateStampProperties($date_stamp_properties)
    {
        $this->container['date_stamp_properties'] = $date_stamp_properties;

        return $this;
    }

    /**
     * Gets error_details
     *
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details error_details
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return ?string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param ?string $external_id 
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets image_type
     *
     * @return ?string
     */
    public function getImageType()
    {
        return $this->container['image_type'];
    }

    /**
     * Sets image_type
     *
     * @param ?string $image_type 
     *
     * @return $this
     */
    public function setImageType($image_type)
    {
        $this->container['image_type'] = $image_type;

        return $this;
    }

    /**
     * Gets initials150_image_id
     *
     * @return ?string
     */
    public function getInitials150ImageId()
    {
        return $this->container['initials150_image_id'];
    }

    /**
     * Sets initials150_image_id
     *
     * @param ?string $initials150_image_id 
     *
     * @return $this
     */
    public function setInitials150ImageId($initials150_image_id)
    {
        $this->container['initials150_image_id'] = $initials150_image_id;

        return $this;
    }

    /**
     * Gets initials_image_uri
     *
     * @return ?string
     */
    public function getInitialsImageUri()
    {
        return $this->container['initials_image_uri'];
    }

    /**
     * Sets initials_image_uri
     *
     * @param ?string $initials_image_uri Contains the URI for an endpoint that you can use to retrieve the initials image.
     *
     * @return $this
     */
    public function setInitialsImageUri($initials_image_uri)
    {
        $this->container['initials_image_uri'] = $initials_image_uri;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return ?string
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param ?string $is_default 
     *
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets phonetic_name
     *
     * @return ?string
     */
    public function getPhoneticName()
    {
        return $this->container['phonetic_name'];
    }

    /**
     * Sets phonetic_name
     *
     * @param ?string $phonetic_name 
     *
     * @return $this
     */
    public function setPhoneticName($phonetic_name)
    {
        $this->container['phonetic_name'] = $phonetic_name;

        return $this;
    }

    /**
     * Gets signature150_image_id
     *
     * @return ?string
     */
    public function getSignature150ImageId()
    {
        return $this->container['signature150_image_id'];
    }

    /**
     * Sets signature150_image_id
     *
     * @param ?string $signature150_image_id 
     *
     * @return $this
     */
    public function setSignature150ImageId($signature150_image_id)
    {
        $this->container['signature150_image_id'] = $signature150_image_id;

        return $this;
    }

    /**
     * Gets signature_font
     *
     * @return ?string
     */
    public function getSignatureFont()
    {
        return $this->container['signature_font'];
    }

    /**
     * Sets signature_font
     *
     * @param ?string $signature_font The font type for the signature, if the signature is not drawn. The supported font types are:  \"7_DocuSign\", \"1_DocuSign\", \"6_DocuSign\", \"8_DocuSign\", \"3_DocuSign\", \"Mistral\", \"4_DocuSign\", \"2_DocuSign\", \"5_DocuSign\", \"Rage Italic\"
     *
     * @return $this
     */
    public function setSignatureFont($signature_font)
    {
        $this->container['signature_font'] = $signature_font;

        return $this;
    }

    /**
     * Gets signature_id
     *
     * @return ?string
     */
    public function getSignatureId()
    {
        return $this->container['signature_id'];
    }

    /**
     * Sets signature_id
     *
     * @param ?string $signature_id Specifies the signature ID associated with the signature name. You can use the signature ID in the URI in place of the signature name, and the value stored in the `signatureName` property in the body is used. This allows the use of special characters (such as \"&\", \"<\", \">\") in a the signature name. Note that with each update to signatures, the returned signature ID might change, so the caller will need to trigger off the signature name to get the new signature ID.
     *
     * @return $this
     */
    public function setSignatureId($signature_id)
    {
        $this->container['signature_id'] = $signature_id;

        return $this;
    }

    /**
     * Gets signature_image_uri
     *
     * @return ?string
     */
    public function getSignatureImageUri()
    {
        return $this->container['signature_image_uri'];
    }

    /**
     * Sets signature_image_uri
     *
     * @param ?string $signature_image_uri Contains the URI for an endpoint that you can use to retrieve the signature image.
     *
     * @return $this
     */
    public function setSignatureImageUri($signature_image_uri)
    {
        $this->container['signature_image_uri'] = $signature_image_uri;

        return $this;
    }

    /**
     * Gets signature_initials
     *
     * @return ?string
     */
    public function getSignatureInitials()
    {
        return $this->container['signature_initials'];
    }

    /**
     * Sets signature_initials
     *
     * @param ?string $signature_initials The initials associated with the signature.
     *
     * @return $this
     */
    public function setSignatureInitials($signature_initials)
    {
        $this->container['signature_initials'] = $signature_initials;

        return $this;
    }

    /**
     * Gets signature_name
     *
     * @return ?string
     */
    public function getSignatureName()
    {
        return $this->container['signature_name'];
    }

    /**
     * Sets signature_name
     *
     * @param ?string $signature_name Specifies the user signature name.
     *
     * @return $this
     */
    public function setSignatureName($signature_name)
    {
        $this->container['signature_name'] = $signature_name;

        return $this;
    }

    /**
     * Gets signature_type
     *
     * @return ?string
     */
    public function getSignatureType()
    {
        return $this->container['signature_type'];
    }

    /**
     * Sets signature_type
     *
     * @param ?string $signature_type 
     *
     * @return $this
     */
    public function setSignatureType($signature_type)
    {
        $this->container['signature_type'] = $signature_type;

        return $this;
    }

    /**
     * Gets stamp_format
     *
     * @return ?string
     */
    public function getStampFormat()
    {
        return $this->container['stamp_format'];
    }

    /**
     * Sets stamp_format
     *
     * @param ?string $stamp_format 
     *
     * @return $this
     */
    public function setStampFormat($stamp_format)
    {
        $this->container['stamp_format'] = $stamp_format;

        return $this;
    }

    /**
     * Gets stamp_image_uri
     *
     * @return ?string
     */
    public function getStampImageUri()
    {
        return $this->container['stamp_image_uri'];
    }

    /**
     * Sets stamp_image_uri
     *
     * @param ?string $stamp_image_uri 
     *
     * @return $this
     */
    public function setStampImageUri($stamp_image_uri)
    {
        $this->container['stamp_image_uri'] = $stamp_image_uri;

        return $this;
    }

    /**
     * Gets stamp_size_mm
     *
     * @return ?string
     */
    public function getStampSizeMm()
    {
        return $this->container['stamp_size_mm'];
    }

    /**
     * Sets stamp_size_mm
     *
     * @param ?string $stamp_size_mm 
     *
     * @return $this
     */
    public function setStampSizeMm($stamp_size_mm)
    {
        $this->container['stamp_size_mm'] = $stamp_size_mm;

        return $this;
    }

    /**
     * Gets stamp_type
     *
     * @return ?string
     */
    public function getStampType()
    {
        return $this->container['stamp_type'];
    }

    /**
     * Sets stamp_type
     *
     * @param ?string $stamp_type 
     *
     * @return $this
     */
    public function setStampType($stamp_type)
    {
        $this->container['stamp_type'] = $stamp_type;

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

