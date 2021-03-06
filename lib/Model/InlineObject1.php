<?php
/**
 * InlineObject1
 *
 * PHP version 5
 *
 * @category Class
 * @package  melmccann\cardanowallet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cardano Wallet Backend API
 *
 * <p align=\"right\"><img style=\"position: relative; top: -10em; margin-bottom: -12em;\" width=\"20%\" src=\"https://cardanodocs.com/img/cardano.png\"></img></p>
 *
 * The version of the OpenAPI document: 2.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace melmccann\cardanowallet\Model;

use \ArrayAccess;
use \melmccann\cardanowallet\ObjectSerializer;

/**
 * InlineObject1 Class Doc Comment
 *
 * @category Class
 * @package  melmccann\cardanowallet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'old_passphrase' => 'string',
        'new_passphrase' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'old_passphrase' => null,
        'new_passphrase' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'old_passphrase' => 'old_passphrase',
        'new_passphrase' => 'new_passphrase'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'old_passphrase' => 'setOldPassphrase',
        'new_passphrase' => 'setNewPassphrase'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'old_passphrase' => 'getOldPassphrase',
        'new_passphrase' => 'getNewPassphrase'
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
        return self::$openAPIModelName;
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
        $this->container['old_passphrase'] = isset($data['old_passphrase']) ? $data['old_passphrase'] : null;
        $this->container['new_passphrase'] = isset($data['new_passphrase']) ? $data['new_passphrase'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['old_passphrase'] === null) {
            $invalidProperties[] = "'old_passphrase' can't be null";
        }
        if ((mb_strlen($this->container['old_passphrase']) > 255)) {
            $invalidProperties[] = "invalid value for 'old_passphrase', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['old_passphrase']) < 10)) {
            $invalidProperties[] = "invalid value for 'old_passphrase', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['new_passphrase'] === null) {
            $invalidProperties[] = "'new_passphrase' can't be null";
        }
        if ((mb_strlen($this->container['new_passphrase']) > 255)) {
            $invalidProperties[] = "invalid value for 'new_passphrase', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['new_passphrase']) < 10)) {
            $invalidProperties[] = "invalid value for 'new_passphrase', the character length must be bigger than or equal to 10.";
        }

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
     * Gets old_passphrase
     *
     * @return string
     */
    public function getOldPassphrase()
    {
        return $this->container['old_passphrase'];
    }

    /**
     * Sets old_passphrase
     *
     * @param string $old_passphrase The current passphrase.
     *
     * @return $this
     */
    public function setOldPassphrase($old_passphrase)
    {
        if ((mb_strlen($old_passphrase) > 255)) {
            throw new \InvalidArgumentException('invalid length for $old_passphrase when calling InlineObject1., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($old_passphrase) < 10)) {
            throw new \InvalidArgumentException('invalid length for $old_passphrase when calling InlineObject1., must be bigger than or equal to 10.');
        }

        $this->container['old_passphrase'] = $old_passphrase;

        return $this;
    }

    /**
     * Gets new_passphrase
     *
     * @return string
     */
    public function getNewPassphrase()
    {
        return $this->container['new_passphrase'];
    }

    /**
     * Sets new_passphrase
     *
     * @param string $new_passphrase A master passphrase to lock and protect the wallet for sensitive operation (e.g. sending funds).
     *
     * @return $this
     */
    public function setNewPassphrase($new_passphrase)
    {
        if ((mb_strlen($new_passphrase) > 255)) {
            throw new \InvalidArgumentException('invalid length for $new_passphrase when calling InlineObject1., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($new_passphrase) < 10)) {
            throw new \InvalidArgumentException('invalid length for $new_passphrase when calling InlineObject1., must be bigger than or equal to 10.');
        }

        $this->container['new_passphrase'] = $new_passphrase;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


