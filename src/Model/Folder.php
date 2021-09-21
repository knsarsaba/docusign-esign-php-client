<?php
/**
 * Folder
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
 * Folder Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Folder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'folder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'filter' => '\DocuSign\eSign\Model\Filter',
        'folder_id' => '?string',
        'folders' => '\DocuSign\eSign\Model\Folder[]',
        'name' => '?string',
        'owner_email' => '?string',
        'owner_user_id' => '?string',
        'owner_user_name' => '?string',
        'parent_folder_id' => '?string',
        'parent_folder_uri' => '?string',
        'type' => '?string',
        'uri' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error_details' => null,
        'filter' => null,
        'folder_id' => null,
        'folders' => null,
        'name' => null,
        'owner_email' => null,
        'owner_user_id' => null,
        'owner_user_name' => null,
        'parent_folder_id' => null,
        'parent_folder_uri' => null,
        'type' => null,
        'uri' => null
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
        'error_details' => 'errorDetails',
        'filter' => 'filter',
        'folder_id' => 'folderId',
        'folders' => 'folders',
        'name' => 'name',
        'owner_email' => 'ownerEmail',
        'owner_user_id' => 'ownerUserId',
        'owner_user_name' => 'ownerUserName',
        'parent_folder_id' => 'parentFolderId',
        'parent_folder_uri' => 'parentFolderUri',
        'type' => 'type',
        'uri' => 'uri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_details' => 'setErrorDetails',
        'filter' => 'setFilter',
        'folder_id' => 'setFolderId',
        'folders' => 'setFolders',
        'name' => 'setName',
        'owner_email' => 'setOwnerEmail',
        'owner_user_id' => 'setOwnerUserId',
        'owner_user_name' => 'setOwnerUserName',
        'parent_folder_id' => 'setParentFolderId',
        'parent_folder_uri' => 'setParentFolderUri',
        'type' => 'setType',
        'uri' => 'setUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_details' => 'getErrorDetails',
        'filter' => 'getFilter',
        'folder_id' => 'getFolderId',
        'folders' => 'getFolders',
        'name' => 'getName',
        'owner_email' => 'getOwnerEmail',
        'owner_user_id' => 'getOwnerUserId',
        'owner_user_name' => 'getOwnerUserName',
        'parent_folder_id' => 'getParentFolderId',
        'parent_folder_uri' => 'getParentFolderUri',
        'type' => 'getType',
        'uri' => 'getUri'
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
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['folder_id'] = isset($data['folder_id']) ? $data['folder_id'] : null;
        $this->container['folders'] = isset($data['folders']) ? $data['folders'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner_email'] = isset($data['owner_email']) ? $data['owner_email'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['owner_user_name'] = isset($data['owner_user_name']) ? $data['owner_user_name'] : null;
        $this->container['parent_folder_id'] = isset($data['parent_folder_id']) ? $data['parent_folder_id'] : null;
        $this->container['parent_folder_uri'] = isset($data['parent_folder_uri']) ? $data['parent_folder_uri'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
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
     * Gets filter
     *
     * @return \DocuSign\eSign\Model\Filter
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \DocuSign\eSign\Model\Filter $filter filter
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return ?string
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param ?string $folder_id 
     *
     * @return $this
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets folders
     *
     * @return \DocuSign\eSign\Model\Folder[]
     */
    public function getFolders()
    {
        return $this->container['folders'];
    }

    /**
     * Sets folders
     *
     * @param \DocuSign\eSign\Model\Folder[] $folders A collection of folder objects returned in a response.
     *
     * @return $this
     */
    public function setFolders($folders)
    {
        $this->container['folders'] = $folders;

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
     * @param ?string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner_email
     *
     * @return ?string
     */
    public function getOwnerEmail()
    {
        return $this->container['owner_email'];
    }

    /**
     * Sets owner_email
     *
     * @param ?string $owner_email 
     *
     * @return $this
     */
    public function setOwnerEmail($owner_email)
    {
        $this->container['owner_email'] = $owner_email;

        return $this;
    }

    /**
     * Gets owner_user_id
     *
     * @return ?string
     */
    public function getOwnerUserId()
    {
        return $this->container['owner_user_id'];
    }

    /**
     * Sets owner_user_id
     *
     * @param ?string $owner_user_id 
     *
     * @return $this
     */
    public function setOwnerUserId($owner_user_id)
    {
        $this->container['owner_user_id'] = $owner_user_id;

        return $this;
    }

    /**
     * Gets owner_user_name
     *
     * @return ?string
     */
    public function getOwnerUserName()
    {
        return $this->container['owner_user_name'];
    }

    /**
     * Sets owner_user_name
     *
     * @param ?string $owner_user_name 
     *
     * @return $this
     */
    public function setOwnerUserName($owner_user_name)
    {
        $this->container['owner_user_name'] = $owner_user_name;

        return $this;
    }

    /**
     * Gets parent_folder_id
     *
     * @return ?string
     */
    public function getParentFolderId()
    {
        return $this->container['parent_folder_id'];
    }

    /**
     * Sets parent_folder_id
     *
     * @param ?string $parent_folder_id 
     *
     * @return $this
     */
    public function setParentFolderId($parent_folder_id)
    {
        $this->container['parent_folder_id'] = $parent_folder_id;

        return $this;
    }

    /**
     * Gets parent_folder_uri
     *
     * @return ?string
     */
    public function getParentFolderUri()
    {
        return $this->container['parent_folder_uri'];
    }

    /**
     * Sets parent_folder_uri
     *
     * @param ?string $parent_folder_uri 
     *
     * @return $this
     */
    public function setParentFolderUri($parent_folder_uri)
    {
        $this->container['parent_folder_uri'] = $parent_folder_uri;

        return $this;
    }

    /**
     * Gets type
     *
     * @return ?string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param ?string $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return ?string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param ?string $uri 
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

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

