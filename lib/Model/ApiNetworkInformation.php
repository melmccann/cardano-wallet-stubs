<?php
/**
 * ApiNetworkInformation
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
 * ApiNetworkInformation Class Doc Comment
 *
 * @category Class
 * @package  melmccann\cardanowallet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiNetworkInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiNetworkInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sync_progress' => '\melmccann\cardanowallet\Model\InlineResponse2007SyncProgress',
        'node_tip' => '\melmccann\cardanowallet\Model\InlineResponse2007NodeTip',
        'network_tip' => '\melmccann\cardanowallet\Model\InlineResponse2007NetworkTip',
        'next_epoch' => '\melmccann\cardanowallet\Model\WalletsDelegationChangesAt'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sync_progress' => null,
        'node_tip' => null,
        'network_tip' => null,
        'next_epoch' => null
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
        'sync_progress' => 'sync_progress',
        'node_tip' => 'node_tip',
        'network_tip' => 'network_tip',
        'next_epoch' => 'next_epoch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sync_progress' => 'setSyncProgress',
        'node_tip' => 'setNodeTip',
        'network_tip' => 'setNetworkTip',
        'next_epoch' => 'setNextEpoch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sync_progress' => 'getSyncProgress',
        'node_tip' => 'getNodeTip',
        'network_tip' => 'getNetworkTip',
        'next_epoch' => 'getNextEpoch'
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
        $this->container['sync_progress'] = isset($data['sync_progress']) ? $data['sync_progress'] : null;
        $this->container['node_tip'] = isset($data['node_tip']) ? $data['node_tip'] : null;
        $this->container['network_tip'] = isset($data['network_tip']) ? $data['network_tip'] : null;
        $this->container['next_epoch'] = isset($data['next_epoch']) ? $data['next_epoch'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sync_progress'] === null) {
            $invalidProperties[] = "'sync_progress' can't be null";
        }
        if ($this->container['node_tip'] === null) {
            $invalidProperties[] = "'node_tip' can't be null";
        }
        if ($this->container['network_tip'] === null) {
            $invalidProperties[] = "'network_tip' can't be null";
        }
        if ($this->container['next_epoch'] === null) {
            $invalidProperties[] = "'next_epoch' can't be null";
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
     * Gets sync_progress
     *
     * @return \melmccann\cardanowallet\Model\InlineResponse2007SyncProgress
     */
    public function getSyncProgress()
    {
        return $this->container['sync_progress'];
    }

    /**
     * Sets sync_progress
     *
     * @param \melmccann\cardanowallet\Model\InlineResponse2007SyncProgress $sync_progress sync_progress
     *
     * @return $this
     */
    public function setSyncProgress($sync_progress)
    {
        $this->container['sync_progress'] = $sync_progress;

        return $this;
    }

    /**
     * Gets node_tip
     *
     * @return \melmccann\cardanowallet\Model\InlineResponse2007NodeTip
     */
    public function getNodeTip()
    {
        return $this->container['node_tip'];
    }

    /**
     * Sets node_tip
     *
     * @param \melmccann\cardanowallet\Model\InlineResponse2007NodeTip $node_tip node_tip
     *
     * @return $this
     */
    public function setNodeTip($node_tip)
    {
        $this->container['node_tip'] = $node_tip;

        return $this;
    }

    /**
     * Gets network_tip
     *
     * @return \melmccann\cardanowallet\Model\InlineResponse2007NetworkTip
     */
    public function getNetworkTip()
    {
        return $this->container['network_tip'];
    }

    /**
     * Sets network_tip
     *
     * @param \melmccann\cardanowallet\Model\InlineResponse2007NetworkTip $network_tip network_tip
     *
     * @return $this
     */
    public function setNetworkTip($network_tip)
    {
        $this->container['network_tip'] = $network_tip;

        return $this;
    }

    /**
     * Gets next_epoch
     *
     * @return \melmccann\cardanowallet\Model\WalletsDelegationChangesAt
     */
    public function getNextEpoch()
    {
        return $this->container['next_epoch'];
    }

    /**
     * Sets next_epoch
     *
     * @param \melmccann\cardanowallet\Model\WalletsDelegationChangesAt $next_epoch next_epoch
     *
     * @return $this
     */
    public function setNextEpoch($next_epoch)
    {
        $this->container['next_epoch'] = $next_epoch;

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


