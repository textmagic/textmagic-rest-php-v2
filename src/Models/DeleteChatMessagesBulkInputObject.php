<?php
/**
 * DeleteChatMessagesBulkInputObject
 *
 * PHP version 5
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Textmagic API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.43
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TextMagic\Models;

use \ArrayAccess;
use \TextMagic\ObjectSerializer;

/**
 * DeleteChatMessagesBulkInputObject Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeleteChatMessagesBulkInputObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeleteChatMessagesBulkInputObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inboundIds' => 'string',
        'sentIds' => 'string',
        'callsIds' => 'string',
        'all' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inboundIds' => null,
        'sentIds' => null,
        'callsIds' => null,
        'all' => null
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
        'inboundIds' => 'inbound_ids',
        'sentIds' => 'sent_ids',
        'callsIds' => 'calls_ids',
        'all' => 'all'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inboundIds' => 'setInboundIds',
        'sentIds' => 'setSentIds',
        'callsIds' => 'setCallsIds',
        'all' => 'setAll'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inboundIds' => 'getInboundIds',
        'sentIds' => 'getSentIds',
        'callsIds' => 'getCallsIds',
        'all' => 'getAll'
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
        $this->container['inboundIds'] = isset($data['inboundIds']) ? $data['inboundIds'] : null;
        $this->container['sentIds'] = isset($data['sentIds']) ? $data['sentIds'] : null;
        $this->container['callsIds'] = isset($data['callsIds']) ? $data['callsIds'] : null;
        $this->container['all'] = isset($data['all']) ? $data['all'] : null;
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
     * Gets inboundIds
     *
     * @return string
     */
    public function getInboundIds()
    {
        return $this->container['inboundIds'];
    }

    /**
     * Sets inboundIds
     *
     * @param string $inboundIds Inbound message IDs to delete. Require when \"all\" is equal to 0 (false).
     *
     * @return $this
     */
    public function setInboundIds($inboundIds)
    {
        $this->container['inboundIds'] = $inboundIds;

        return $this;
    }

    /**
     * Gets sentIds
     *
     * @return string
     */
    public function getSentIds()
    {
        return $this->container['sentIds'];
    }

    /**
     * Sets sentIds
     *
     * @param string $sentIds Sent message IDs to delete. Require when \"all\" is equal to 0 (false).
     *
     * @return $this
     */
    public function setSentIds($sentIds)
    {
        $this->container['sentIds'] = $sentIds;

        return $this;
    }

    /**
     * Gets callsIds
     *
     * @return string
     */
    public function getCallsIds()
    {
        return $this->container['callsIds'];
    }

    /**
     * Sets callsIds
     *
     * @param string $callsIds Calls IDs to delete. Require when \"all\" is equal to 0 (false).
     *
     * @return $this
     */
    public function setCallsIds($callsIds)
    {
        $this->container['callsIds'] = $callsIds;

        return $this;
    }

    /**
     * Gets all
     *
     * @return bool
     */
    public function getAll()
    {
        return $this->container['all'];
    }

    /**
     * Sets all
     *
     * @param bool $all Default is 0 (false). If set to 1, all the entities will be removed.
     *
     * @return $this
     */
    public function setAll($all)
    {
        $this->container['all'] = $all;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


