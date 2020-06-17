<?php
/**
 * ApiTransaction
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
 * ApiTransaction Class Doc Comment
 *
 * @category Class
 * @package  melmccann\cardanowallet
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'amount' => '\melmccann\cardanowallet\Model\InlineResponse2001Total',
        'inserted_at' => '\melmccann\cardanowallet\Model\WalletsWalletIdTransactionsInsertedAt',
        'pending_since' => '\melmccann\cardanowallet\Model\WalletsWalletIdTransactionsPendingSince',
        'depth' => '\melmccann\cardanowallet\Model\WalletsWalletIdTransactionsDepth',
        'direction' => 'string',
        'inputs' => '\melmccann\cardanowallet\Model\WalletsWalletIdTransactionsInputs[]',
        'outputs' => '\melmccann\cardanowallet\Model\WalletsWalletIdTransactionsOutputs[]',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'hex',
        'amount' => null,
        'inserted_at' => null,
        'pending_since' => null,
        'depth' => null,
        'direction' => null,
        'inputs' => null,
        'outputs' => null,
        'status' => null
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
        'amount' => 'amount',
        'inserted_at' => 'inserted_at',
        'pending_since' => 'pending_since',
        'depth' => 'depth',
        'direction' => 'direction',
        'inputs' => 'inputs',
        'outputs' => 'outputs',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'amount' => 'setAmount',
        'inserted_at' => 'setInsertedAt',
        'pending_since' => 'setPendingSince',
        'depth' => 'setDepth',
        'direction' => 'setDirection',
        'inputs' => 'setInputs',
        'outputs' => 'setOutputs',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'amount' => 'getAmount',
        'inserted_at' => 'getInsertedAt',
        'pending_since' => 'getPendingSince',
        'depth' => 'getDepth',
        'direction' => 'getDirection',
        'inputs' => 'getInputs',
        'outputs' => 'getOutputs',
        'status' => 'getStatus'
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

    const DIRECTION_OUTGOING = 'outgoing';
    const DIRECTION_INCOMING = 'incoming';
    const STATUS_PENDING = 'pending';
    const STATUS_IN_LEDGER = 'in_ledger';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_OUTGOING,
            self::DIRECTION_INCOMING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_IN_LEDGER,
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['inserted_at'] = isset($data['inserted_at']) ? $data['inserted_at'] : null;
        $this->container['pending_since'] = isset($data['pending_since']) ? $data['pending_since'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
        if ((mb_strlen($this->container['id']) > 64)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['id']) < 64)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 64.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['inputs'] === null) {
            $invalidProperties[] = "'inputs' can't be null";
        }
        if ($this->container['outputs'] === null) {
            $invalidProperties[] = "'outputs' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param string $id A unique identifier for this transaction
     *
     * @return $this
     */
    public function setId($id)
    {
        if ((mb_strlen($id) > 64)) {
            throw new \InvalidArgumentException('invalid length for $id when calling ApiTransaction., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($id) < 64)) {
            throw new \InvalidArgumentException('invalid length for $id when calling ApiTransaction., must be bigger than or equal to 64.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \melmccann\cardanowallet\Model\InlineResponse2001Total
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \melmccann\cardanowallet\Model\InlineResponse2001Total $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets inserted_at
     *
     * @return \melmccann\cardanowallet\Model\WalletsWalletIdTransactionsInsertedAt|null
     */
    public function getInsertedAt()
    {
        return $this->container['inserted_at'];
    }

    /**
     * Sets inserted_at
     *
     * @param \melmccann\cardanowallet\Model\WalletsWalletIdTransactionsInsertedAt|null $inserted_at inserted_at
     *
     * @return $this
     */
    public function setInsertedAt($inserted_at)
    {
        $this->container['inserted_at'] = $inserted_at;

        return $this;
    }

    /**
     * Gets pending_since
     *
     * @return \melmccann\cardanowallet\Model\WalletsWalletIdTransactionsPendingSince|null
     */
    public function getPendingSince()
    {
        return $this->container['pending_since'];
    }

    /**
     * Sets pending_since
     *
     * @param \melmccann\cardanowallet\Model\WalletsWalletIdTransactionsPendingSince|null $pending_since pending_since
     *
     * @return $this
     */
    public function setPendingSince($pending_since)
    {
        $this->container['pending_since'] = $pending_since;

        return $this;
    }

    /**
     * Gets depth
     *
     * @return \melmccann\cardanowallet\Model\WalletsWalletIdTransactionsDepth|null
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
     * Sets depth
     *
     * @param \melmccann\cardanowallet\Model\WalletsWalletIdTransactionsDepth|null $depth depth
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $allowedValues = $this->getDirectionAllowableValues();
        if (!in_array($direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'direction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets inputs
     *
     * @return \melmccann\cardanowallet\Model\WalletsWalletIdTransactionsInputs[]
     */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
     * Sets inputs
     *
     * @param \melmccann\cardanowallet\Model\WalletsWalletIdTransactionsInputs[] $inputs A list of transaction inputs
     *
     * @return $this
     */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;

        return $this;
    }

    /**
     * Gets outputs
     *
     * @return \melmccann\cardanowallet\Model\WalletsWalletIdTransactionsOutputs[]
     */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
     * Sets outputs
     *
     * @param \melmccann\cardanowallet\Model\WalletsWalletIdTransactionsOutputs[] $outputs A list of target outputs
     *
     * @return $this
     */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Current transaction status.    ```          *---------*          |         |   -------> PENDING <----------------*          |         |                |          *---------*            (rollback)               |                     |          (in ledger)          *-----------*               |               |           |               *---------------> IN_LEDGER |                               |           |                               *-----------*   ```
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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


