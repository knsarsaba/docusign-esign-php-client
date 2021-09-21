<?php
/**
 * ForgottenPasswordInformation
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
 * ForgottenPasswordInformation Class Doc Comment
 *
 * @category    Class
 * @description A complex element that has up to four Question/Answer pairs for forgotten password information.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ForgottenPasswordInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'forgottenPasswordInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'forgotten_password_answer1' => '?string',
        'forgotten_password_answer2' => '?string',
        'forgotten_password_answer3' => '?string',
        'forgotten_password_answer4' => '?string',
        'forgotten_password_question1' => '?string',
        'forgotten_password_question2' => '?string',
        'forgotten_password_question3' => '?string',
        'forgotten_password_question4' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'forgotten_password_answer1' => null,
        'forgotten_password_answer2' => null,
        'forgotten_password_answer3' => null,
        'forgotten_password_answer4' => null,
        'forgotten_password_question1' => null,
        'forgotten_password_question2' => null,
        'forgotten_password_question3' => null,
        'forgotten_password_question4' => null
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
        'forgotten_password_answer1' => 'forgottenPasswordAnswer1',
        'forgotten_password_answer2' => 'forgottenPasswordAnswer2',
        'forgotten_password_answer3' => 'forgottenPasswordAnswer3',
        'forgotten_password_answer4' => 'forgottenPasswordAnswer4',
        'forgotten_password_question1' => 'forgottenPasswordQuestion1',
        'forgotten_password_question2' => 'forgottenPasswordQuestion2',
        'forgotten_password_question3' => 'forgottenPasswordQuestion3',
        'forgotten_password_question4' => 'forgottenPasswordQuestion4'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'forgotten_password_answer1' => 'setForgottenPasswordAnswer1',
        'forgotten_password_answer2' => 'setForgottenPasswordAnswer2',
        'forgotten_password_answer3' => 'setForgottenPasswordAnswer3',
        'forgotten_password_answer4' => 'setForgottenPasswordAnswer4',
        'forgotten_password_question1' => 'setForgottenPasswordQuestion1',
        'forgotten_password_question2' => 'setForgottenPasswordQuestion2',
        'forgotten_password_question3' => 'setForgottenPasswordQuestion3',
        'forgotten_password_question4' => 'setForgottenPasswordQuestion4'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'forgotten_password_answer1' => 'getForgottenPasswordAnswer1',
        'forgotten_password_answer2' => 'getForgottenPasswordAnswer2',
        'forgotten_password_answer3' => 'getForgottenPasswordAnswer3',
        'forgotten_password_answer4' => 'getForgottenPasswordAnswer4',
        'forgotten_password_question1' => 'getForgottenPasswordQuestion1',
        'forgotten_password_question2' => 'getForgottenPasswordQuestion2',
        'forgotten_password_question3' => 'getForgottenPasswordQuestion3',
        'forgotten_password_question4' => 'getForgottenPasswordQuestion4'
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
        $this->container['forgotten_password_answer1'] = isset($data['forgotten_password_answer1']) ? $data['forgotten_password_answer1'] : null;
        $this->container['forgotten_password_answer2'] = isset($data['forgotten_password_answer2']) ? $data['forgotten_password_answer2'] : null;
        $this->container['forgotten_password_answer3'] = isset($data['forgotten_password_answer3']) ? $data['forgotten_password_answer3'] : null;
        $this->container['forgotten_password_answer4'] = isset($data['forgotten_password_answer4']) ? $data['forgotten_password_answer4'] : null;
        $this->container['forgotten_password_question1'] = isset($data['forgotten_password_question1']) ? $data['forgotten_password_question1'] : null;
        $this->container['forgotten_password_question2'] = isset($data['forgotten_password_question2']) ? $data['forgotten_password_question2'] : null;
        $this->container['forgotten_password_question3'] = isset($data['forgotten_password_question3']) ? $data['forgotten_password_question3'] : null;
        $this->container['forgotten_password_question4'] = isset($data['forgotten_password_question4']) ? $data['forgotten_password_question4'] : null;
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
     * Gets forgotten_password_answer1
     *
     * @return ?string
     */
    public function getForgottenPasswordAnswer1()
    {
        return $this->container['forgotten_password_answer1'];
    }

    /**
     * Sets forgotten_password_answer1
     *
     * @param ?string $forgotten_password_answer1 The answer to the first forgotten password challenge question.
     *
     * @return $this
     */
    public function setForgottenPasswordAnswer1($forgotten_password_answer1)
    {
        $this->container['forgotten_password_answer1'] = $forgotten_password_answer1;

        return $this;
    }

    /**
     * Gets forgotten_password_answer2
     *
     * @return ?string
     */
    public function getForgottenPasswordAnswer2()
    {
        return $this->container['forgotten_password_answer2'];
    }

    /**
     * Sets forgotten_password_answer2
     *
     * @param ?string $forgotten_password_answer2 The answer to the second forgotten password challenge question.
     *
     * @return $this
     */
    public function setForgottenPasswordAnswer2($forgotten_password_answer2)
    {
        $this->container['forgotten_password_answer2'] = $forgotten_password_answer2;

        return $this;
    }

    /**
     * Gets forgotten_password_answer3
     *
     * @return ?string
     */
    public function getForgottenPasswordAnswer3()
    {
        return $this->container['forgotten_password_answer3'];
    }

    /**
     * Sets forgotten_password_answer3
     *
     * @param ?string $forgotten_password_answer3 The answer to the third forgotten password challenge question.
     *
     * @return $this
     */
    public function setForgottenPasswordAnswer3($forgotten_password_answer3)
    {
        $this->container['forgotten_password_answer3'] = $forgotten_password_answer3;

        return $this;
    }

    /**
     * Gets forgotten_password_answer4
     *
     * @return ?string
     */
    public function getForgottenPasswordAnswer4()
    {
        return $this->container['forgotten_password_answer4'];
    }

    /**
     * Sets forgotten_password_answer4
     *
     * @param ?string $forgotten_password_answer4 The answer to the fourth forgotten password challenge question.
     *
     * @return $this
     */
    public function setForgottenPasswordAnswer4($forgotten_password_answer4)
    {
        $this->container['forgotten_password_answer4'] = $forgotten_password_answer4;

        return $this;
    }

    /**
     * Gets forgotten_password_question1
     *
     * @return ?string
     */
    public function getForgottenPasswordQuestion1()
    {
        return $this->container['forgotten_password_question1'];
    }

    /**
     * Sets forgotten_password_question1
     *
     * @param ?string $forgotten_password_question1 The first challenge question presented to a user who has forgotten their password.
     *
     * @return $this
     */
    public function setForgottenPasswordQuestion1($forgotten_password_question1)
    {
        $this->container['forgotten_password_question1'] = $forgotten_password_question1;

        return $this;
    }

    /**
     * Gets forgotten_password_question2
     *
     * @return ?string
     */
    public function getForgottenPasswordQuestion2()
    {
        return $this->container['forgotten_password_question2'];
    }

    /**
     * Sets forgotten_password_question2
     *
     * @param ?string $forgotten_password_question2 The second challenge question presented to a user who has forgotten their password.
     *
     * @return $this
     */
    public function setForgottenPasswordQuestion2($forgotten_password_question2)
    {
        $this->container['forgotten_password_question2'] = $forgotten_password_question2;

        return $this;
    }

    /**
     * Gets forgotten_password_question3
     *
     * @return ?string
     */
    public function getForgottenPasswordQuestion3()
    {
        return $this->container['forgotten_password_question3'];
    }

    /**
     * Sets forgotten_password_question3
     *
     * @param ?string $forgotten_password_question3 The third challenge question presented to a user who has forgotten their password.
     *
     * @return $this
     */
    public function setForgottenPasswordQuestion3($forgotten_password_question3)
    {
        $this->container['forgotten_password_question3'] = $forgotten_password_question3;

        return $this;
    }

    /**
     * Gets forgotten_password_question4
     *
     * @return ?string
     */
    public function getForgottenPasswordQuestion4()
    {
        return $this->container['forgotten_password_question4'];
    }

    /**
     * Sets forgotten_password_question4
     *
     * @param ?string $forgotten_password_question4 The fourth challenge question presented to a user who has forgotten their password.
     *
     * @return $this
     */
    public function setForgottenPasswordQuestion4($forgotten_password_question4)
    {
        $this->container['forgotten_password_question4'] = $forgotten_password_question4;

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

