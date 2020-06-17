<?php
/**
 * ApiByronWallet
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
 * ApiByronWallet Class Doc Comment
 *
 * @category Class
 * @package  melmccann\cardanowallet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiByronWallet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiByronWallet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'balance' => '\melmccann\cardanowallet\Model\ByronWalletsBalance',
        'discovery' => 'string',
        'name' => 'string',
        'passphrase' => '\melmccann\cardanowallet\Model\WalletsPassphrase',
        'state' => '\melmccann\cardanowallet\Model\WalletsState',
        'tip' => '\melmccann\cardanowallet\Model\WalletsTip'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'hex',
        'balance' => null,
        'discovery' => null,
        'name' => null,
        'passphrase' => null,
        'state' => null,
        'tip' => null
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
        'id' => 'id',
        'balance' => 'balance',
        'discovery' => 'discovery',
        'name' => 'name',
        'passphrase' => 'passphrase',
        'state' => 'state',
        'tip' => 'tip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'balance' => 'setBalance',
        'discovery' => 'setDiscovery',
        'name' => 'setName',
        'passphrase' => 'setPassphrase',
        'state' => 'setState',
        'tip' => 'setTip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'balance' => 'getBalance',
        'discovery' => 'getDiscovery',
        'name' => 'getName',
        'passphrase' => 'getPassphrase',
        'state' => 'getState',
        'tip' => 'getTip'
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

    const DISCOVERY_RANDOM = 'random';
    const DISCOVERY_SEQUENTIAL = 'sequential';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDiscoveryAllowableValues()
    {
        return [
            self::DISCOVERY_RANDOM,
            self::DISCOVERY_SEQUENTIAL,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['discovery'] = isset($data['discovery']) ? $data['discovery'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['passphrase'] = isset($data['passphrase']) ? $data['passphrase'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['tip'] = isset($data['tip']) ? $data['tip'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) > 40)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 40.";
        }

        if ((mb_strlen($this->container['id']) < 40)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 40.";
        }

        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        if ($this->container['discovery'] === null) {
            $invalidProperties[] = "'discovery' can't be null";
        }
        $allowedValues = $this->getDiscoveryAllowableValues();
        if (!is_null($this->container['discovery']) && !in_array($this->container['discovery'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'discovery', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['tip'] === null) {
            $invalidProperties[] = "'tip' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id A unique identifier for the wallet
     *
     * @return $this
     */
    public function setId($id)
    {
        if ((mb_strlen($id) > 40)) {
            throw new \InvalidArgumentException('invalid length for $id when calling ApiByronWallet., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($id) < 40)) {
            throw new \InvalidArgumentException('invalid length for $id when calling ApiByronWallet., must be bigger than or equal to 40.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return \melmccann\cardanowallet\Model\ByronWalletsBalance
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param \melmccann\cardanowallet\Model\ByronWalletsBalance $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets discovery
     *
     * @return string
     */
    public function getDiscovery()
    {
        return $this->container['discovery'];
    }

    /**
     * Sets discovery
     *
     * @param string $discovery Mechanism used for discovering addresses.
     *
     * @return $this
     */
    public function setDiscovery($discovery)
    {
        $allowedValues = $this->getDiscoveryAllowableValues();
        if (!in_array($discovery, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'discovery', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['discovery'] = $discovery;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ApiByronWallet., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ApiByronWallet., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets passphrase
     *
     * @return \melmccann\cardanowallet\Model\WalletsPassphrase|null
     */
    public function getPassphrase()
    {
        return $this->container['passphrase'];
    }

    /**
     * Sets passphrase
     *
     * @param \melmccann\cardanowallet\Model\WalletsPassphrase|null $passphrase passphrase
     *
     * @return $this
     */
    public function setPassphrase($passphrase)
    {
        $this->container['passphrase'] = $passphrase;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \melmccann\cardanowallet\Model\WalletsState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \melmccann\cardanowallet\Model\WalletsState $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets tip
     *
     * @return \melmccann\cardanowallet\Model\WalletsTip
     */
    public function getTip()
    {
        return $this->container['tip'];
    }

    /**
     * Sets tip
     *
     * @param \melmccann\cardanowallet\Model\WalletsTip $tip tip
     *
     * @return $this
     */
    public function setTip($tip)
    {
        $this->container['tip'] = $tip;

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


