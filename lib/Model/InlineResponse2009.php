<?php
/**
 * InlineResponse2009
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
 * InlineResponse2009 Class Doc Comment
 *
 * @category Class
 * @package  melmccann\cardanowallet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse2009 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_9';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'genesis_block_hash' => 'string',
        'blockchain_start_time' => 'string',
        'slot_length' => '\melmccann\cardanowallet\Model\InlineResponse2009SlotLength',
        'epoch_length' => '\melmccann\cardanowallet\Model\InlineResponse2009EpochLength',
        'epoch_stability' => '\melmccann\cardanowallet\Model\WalletsTipHeight',
        'active_slot_coefficient' => '\melmccann\cardanowallet\Model\InlineResponse2009ActiveSlotCoefficient',
        'decentralization_level' => '\melmccann\cardanowallet\Model\InlineResponse2009ActiveSlotCoefficient'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'genesis_block_hash' => 'hex',
        'blockchain_start_time' => 'iso-8601-date-and-time',
        'slot_length' => null,
        'epoch_length' => null,
        'epoch_stability' => null,
        'active_slot_coefficient' => null,
        'decentralization_level' => null
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
        'genesis_block_hash' => 'genesis_block_hash',
        'blockchain_start_time' => 'blockchain_start_time',
        'slot_length' => 'slot_length',
        'epoch_length' => 'epoch_length',
        'epoch_stability' => 'epoch_stability',
        'active_slot_coefficient' => 'active_slot_coefficient',
        'decentralization_level' => 'decentralization_level'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'genesis_block_hash' => 'setGenesisBlockHash',
        'blockchain_start_time' => 'setBlockchainStartTime',
        'slot_length' => 'setSlotLength',
        'epoch_length' => 'setEpochLength',
        'epoch_stability' => 'setEpochStability',
        'active_slot_coefficient' => 'setActiveSlotCoefficient',
        'decentralization_level' => 'setDecentralizationLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'genesis_block_hash' => 'getGenesisBlockHash',
        'blockchain_start_time' => 'getBlockchainStartTime',
        'slot_length' => 'getSlotLength',
        'epoch_length' => 'getEpochLength',
        'epoch_stability' => 'getEpochStability',
        'active_slot_coefficient' => 'getActiveSlotCoefficient',
        'decentralization_level' => 'getDecentralizationLevel'
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
        $this->container['genesis_block_hash'] = isset($data['genesis_block_hash']) ? $data['genesis_block_hash'] : null;
        $this->container['blockchain_start_time'] = isset($data['blockchain_start_time']) ? $data['blockchain_start_time'] : null;
        $this->container['slot_length'] = isset($data['slot_length']) ? $data['slot_length'] : null;
        $this->container['epoch_length'] = isset($data['epoch_length']) ? $data['epoch_length'] : null;
        $this->container['epoch_stability'] = isset($data['epoch_stability']) ? $data['epoch_stability'] : null;
        $this->container['active_slot_coefficient'] = isset($data['active_slot_coefficient']) ? $data['active_slot_coefficient'] : null;
        $this->container['decentralization_level'] = isset($data['decentralization_level']) ? $data['decentralization_level'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['genesis_block_hash'] === null) {
            $invalidProperties[] = "'genesis_block_hash' can't be null";
        }
        if ((mb_strlen($this->container['genesis_block_hash']) > 64)) {
            $invalidProperties[] = "invalid value for 'genesis_block_hash', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['genesis_block_hash']) < 64)) {
            $invalidProperties[] = "invalid value for 'genesis_block_hash', the character length must be bigger than or equal to 64.";
        }

        if ($this->container['blockchain_start_time'] === null) {
            $invalidProperties[] = "'blockchain_start_time' can't be null";
        }
        if ($this->container['slot_length'] === null) {
            $invalidProperties[] = "'slot_length' can't be null";
        }
        if ($this->container['epoch_length'] === null) {
            $invalidProperties[] = "'epoch_length' can't be null";
        }
        if ($this->container['epoch_stability'] === null) {
            $invalidProperties[] = "'epoch_stability' can't be null";
        }
        if ($this->container['active_slot_coefficient'] === null) {
            $invalidProperties[] = "'active_slot_coefficient' can't be null";
        }
        if ($this->container['decentralization_level'] === null) {
            $invalidProperties[] = "'decentralization_level' can't be null";
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
     * Gets genesis_block_hash
     *
     * @return string
     */
    public function getGenesisBlockHash()
    {
        return $this->container['genesis_block_hash'];
    }

    /**
     * Sets genesis_block_hash
     *
     * @param string $genesis_block_hash The hash of genesis block
     *
     * @return $this
     */
    public function setGenesisBlockHash($genesis_block_hash)
    {
        if ((mb_strlen($genesis_block_hash) > 64)) {
            throw new \InvalidArgumentException('invalid length for $genesis_block_hash when calling InlineResponse2009., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($genesis_block_hash) < 64)) {
            throw new \InvalidArgumentException('invalid length for $genesis_block_hash when calling InlineResponse2009., must be bigger than or equal to 64.');
        }

        $this->container['genesis_block_hash'] = $genesis_block_hash;

        return $this;
    }

    /**
     * Gets blockchain_start_time
     *
     * @return string
     */
    public function getBlockchainStartTime()
    {
        return $this->container['blockchain_start_time'];
    }

    /**
     * Sets blockchain_start_time
     *
     * @param string $blockchain_start_time blockchain_start_time
     *
     * @return $this
     */
    public function setBlockchainStartTime($blockchain_start_time)
    {
        $this->container['blockchain_start_time'] = $blockchain_start_time;

        return $this;
    }

    /**
     * Gets slot_length
     *
     * @return \melmccann\cardanowallet\Model\InlineResponse2009SlotLength
     */
    public function getSlotLength()
    {
        return $this->container['slot_length'];
    }

    /**
     * Sets slot_length
     *
     * @param \melmccann\cardanowallet\Model\InlineResponse2009SlotLength $slot_length slot_length
     *
     * @return $this
     */
    public function setSlotLength($slot_length)
    {
        $this->container['slot_length'] = $slot_length;

        return $this;
    }

    /**
     * Gets epoch_length
     *
     * @return \melmccann\cardanowallet\Model\InlineResponse2009EpochLength
     */
    public function getEpochLength()
    {
        return $this->container['epoch_length'];
    }

    /**
     * Sets epoch_length
     *
     * @param \melmccann\cardanowallet\Model\InlineResponse2009EpochLength $epoch_length epoch_length
     *
     * @return $this
     */
    public function setEpochLength($epoch_length)
    {
        $this->container['epoch_length'] = $epoch_length;

        return $this;
    }

    /**
     * Gets epoch_stability
     *
     * @return \melmccann\cardanowallet\Model\WalletsTipHeight
     */
    public function getEpochStability()
    {
        return $this->container['epoch_stability'];
    }

    /**
     * Sets epoch_stability
     *
     * @param \melmccann\cardanowallet\Model\WalletsTipHeight $epoch_stability epoch_stability
     *
     * @return $this
     */
    public function setEpochStability($epoch_stability)
    {
        $this->container['epoch_stability'] = $epoch_stability;

        return $this;
    }

    /**
     * Gets active_slot_coefficient
     *
     * @return \melmccann\cardanowallet\Model\InlineResponse2009ActiveSlotCoefficient
     */
    public function getActiveSlotCoefficient()
    {
        return $this->container['active_slot_coefficient'];
    }

    /**
     * Sets active_slot_coefficient
     *
     * @param \melmccann\cardanowallet\Model\InlineResponse2009ActiveSlotCoefficient $active_slot_coefficient active_slot_coefficient
     *
     * @return $this
     */
    public function setActiveSlotCoefficient($active_slot_coefficient)
    {
        $this->container['active_slot_coefficient'] = $active_slot_coefficient;

        return $this;
    }

    /**
     * Gets decentralization_level
     *
     * @return \melmccann\cardanowallet\Model\InlineResponse2009ActiveSlotCoefficient
     */
    public function getDecentralizationLevel()
    {
        return $this->container['decentralization_level'];
    }

    /**
     * Sets decentralization_level
     *
     * @param \melmccann\cardanowallet\Model\InlineResponse2009ActiveSlotCoefficient $decentralization_level decentralization_level
     *
     * @return $this
     */
    public function setDecentralizationLevel($decentralization_level)
    {
        $this->container['decentralization_level'] = $decentralization_level;

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


