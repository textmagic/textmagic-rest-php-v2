<?php
/**
 * GetBalanceNotificationSettingsResponse
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
 * Swagger Codegen version: 2.4.22
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
 * GetBalanceNotificationSettingsResponse Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetBalanceNotificationSettingsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetBalanceNotificationSettingsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lowBalanceNotification' => 'bool',
        'alertBalance' => 'float',
        'alertPhone' => 'string',
        'alertEmail1' => 'string',
        'alertEmail2' => 'string',
        'alertEmail3' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lowBalanceNotification' => null,
        'alertBalance' => null,
        'alertPhone' => null,
        'alertEmail1' => null,
        'alertEmail2' => null,
        'alertEmail3' => null
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
        'lowBalanceNotification' => 'lowBalanceNotification',
        'alertBalance' => 'alertBalance',
        'alertPhone' => 'alertPhone',
        'alertEmail1' => 'alertEmail1',
        'alertEmail2' => 'alertEmail2',
        'alertEmail3' => 'alertEmail3'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lowBalanceNotification' => 'setLowBalanceNotification',
        'alertBalance' => 'setAlertBalance',
        'alertPhone' => 'setAlertPhone',
        'alertEmail1' => 'setAlertEmail1',
        'alertEmail2' => 'setAlertEmail2',
        'alertEmail3' => 'setAlertEmail3'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lowBalanceNotification' => 'getLowBalanceNotification',
        'alertBalance' => 'getAlertBalance',
        'alertPhone' => 'getAlertPhone',
        'alertEmail1' => 'getAlertEmail1',
        'alertEmail2' => 'getAlertEmail2',
        'alertEmail3' => 'getAlertEmail3'
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
        $this->container['lowBalanceNotification'] = isset($data['lowBalanceNotification']) ? $data['lowBalanceNotification'] : null;
        $this->container['alertBalance'] = isset($data['alertBalance']) ? $data['alertBalance'] : null;
        $this->container['alertPhone'] = isset($data['alertPhone']) ? $data['alertPhone'] : null;
        $this->container['alertEmail1'] = isset($data['alertEmail1']) ? $data['alertEmail1'] : null;
        $this->container['alertEmail2'] = isset($data['alertEmail2']) ? $data['alertEmail2'] : null;
        $this->container['alertEmail3'] = isset($data['alertEmail3']) ? $data['alertEmail3'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lowBalanceNotification'] === null) {
            $invalidProperties[] = "'lowBalanceNotification' can't be null";
        }
        if ($this->container['alertBalance'] === null) {
            $invalidProperties[] = "'alertBalance' can't be null";
        }
        if ($this->container['alertPhone'] === null) {
            $invalidProperties[] = "'alertPhone' can't be null";
        }
        if ($this->container['alertEmail1'] === null) {
            $invalidProperties[] = "'alertEmail1' can't be null";
        }
        if ($this->container['alertEmail2'] === null) {
            $invalidProperties[] = "'alertEmail2' can't be null";
        }
        if ($this->container['alertEmail3'] === null) {
            $invalidProperties[] = "'alertEmail3' can't be null";
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
     * Gets lowBalanceNotification
     *
     * @return bool
     */
    public function getLowBalanceNotification()
    {
        return $this->container['lowBalanceNotification'];
    }

    /**
     * Sets lowBalanceNotification
     *
     * @param bool $lowBalanceNotification Should user receive low balance notification.
     *
     * @return $this
     */
    public function setLowBalanceNotification($lowBalanceNotification)
    {
        $this->container['lowBalanceNotification'] = $lowBalanceNotification;

        return $this;
    }

    /**
     * Gets alertBalance
     *
     * @return float
     */
    public function getAlertBalance()
    {
        return $this->container['alertBalance'];
    }

    /**
     * Sets alertBalance
     *
     * @param float $alertBalance If balance is below this value, user receive low balance notification.
     *
     * @return $this
     */
    public function setAlertBalance($alertBalance)
    {
        $this->container['alertBalance'] = $alertBalance;

        return $this;
    }

    /**
     * Gets alertPhone
     *
     * @return string
     */
    public function getAlertPhone()
    {
        return $this->container['alertPhone'];
    }

    /**
     * Sets alertPhone
     *
     * @param string $alertPhone Low balance notification phone number.
     *
     * @return $this
     */
    public function setAlertPhone($alertPhone)
    {
        $this->container['alertPhone'] = $alertPhone;

        return $this;
    }

    /**
     * Gets alertEmail1
     *
     * @return string
     */
    public function getAlertEmail1()
    {
        return $this->container['alertEmail1'];
    }

    /**
     * Sets alertEmail1
     *
     * @param string $alertEmail1 Low balance notification email 1.
     *
     * @return $this
     */
    public function setAlertEmail1($alertEmail1)
    {
        $this->container['alertEmail1'] = $alertEmail1;

        return $this;
    }

    /**
     * Gets alertEmail2
     *
     * @return string
     */
    public function getAlertEmail2()
    {
        return $this->container['alertEmail2'];
    }

    /**
     * Sets alertEmail2
     *
     * @param string $alertEmail2 Low balance notification email 2.
     *
     * @return $this
     */
    public function setAlertEmail2($alertEmail2)
    {
        $this->container['alertEmail2'] = $alertEmail2;

        return $this;
    }

    /**
     * Gets alertEmail3
     *
     * @return string
     */
    public function getAlertEmail3()
    {
        return $this->container['alertEmail3'];
    }

    /**
     * Sets alertEmail3
     *
     * @param string $alertEmail3 Low balance notification email 3.
     *
     * @return $this
     */
    public function setAlertEmail3($alertEmail3)
    {
        $this->container['alertEmail3'] = $alertEmail3;

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


