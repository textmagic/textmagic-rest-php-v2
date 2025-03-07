<?php
/**
 * GetBalanceNotificationOptionsResponse
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
 * GetBalanceNotificationOptionsResponse Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetBalanceNotificationOptionsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetBalanceNotificationOptionsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_1' => 'string',
        '_2' => 'string',
        '_3' => 'string',
        '_5' => 'string',
        '_10' => 'string',
        '_20' => 'string',
        '_30' => 'string',
        '_50' => 'string',
        '_100' => 'string',
        '_500' => 'string',
        '_1000' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_1' => null,
        '_2' => null,
        '_3' => null,
        '_5' => null,
        '_10' => null,
        '_20' => null,
        '_30' => null,
        '_50' => null,
        '_100' => null,
        '_500' => null,
        '_1000' => null
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
        '_1' => '1',
        '_2' => '2',
        '_3' => '3',
        '_5' => '5',
        '_10' => '10',
        '_20' => '20',
        '_30' => '30',
        '_50' => '50',
        '_100' => '100',
        '_500' => '500',
        '_1000' => '1000'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_1' => 'set1',
        '_2' => 'set2',
        '_3' => 'set3',
        '_5' => 'set5',
        '_10' => 'set10',
        '_20' => 'set20',
        '_30' => 'set30',
        '_50' => 'set50',
        '_100' => 'set100',
        '_500' => 'set500',
        '_1000' => 'set1000'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_1' => 'get1',
        '_2' => 'get2',
        '_3' => 'get3',
        '_5' => 'get5',
        '_10' => 'get10',
        '_20' => 'get20',
        '_30' => 'get30',
        '_50' => 'get50',
        '_100' => 'get100',
        '_500' => 'get500',
        '_1000' => 'get1000'
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
        $this->container['_1'] = isset($data['_1']) ? $data['_1'] : null;
        $this->container['_2'] = isset($data['_2']) ? $data['_2'] : null;
        $this->container['_3'] = isset($data['_3']) ? $data['_3'] : null;
        $this->container['_5'] = isset($data['_5']) ? $data['_5'] : null;
        $this->container['_10'] = isset($data['_10']) ? $data['_10'] : null;
        $this->container['_20'] = isset($data['_20']) ? $data['_20'] : null;
        $this->container['_30'] = isset($data['_30']) ? $data['_30'] : null;
        $this->container['_50'] = isset($data['_50']) ? $data['_50'] : null;
        $this->container['_100'] = isset($data['_100']) ? $data['_100'] : null;
        $this->container['_500'] = isset($data['_500']) ? $data['_500'] : null;
        $this->container['_1000'] = isset($data['_1000']) ? $data['_1000'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['_1'] === null) {
            $invalidProperties[] = "'_1' can't be null";
        }
        if ($this->container['_2'] === null) {
            $invalidProperties[] = "'_2' can't be null";
        }
        if ($this->container['_3'] === null) {
            $invalidProperties[] = "'_3' can't be null";
        }
        if ($this->container['_5'] === null) {
            $invalidProperties[] = "'_5' can't be null";
        }
        if ($this->container['_10'] === null) {
            $invalidProperties[] = "'_10' can't be null";
        }
        if ($this->container['_20'] === null) {
            $invalidProperties[] = "'_20' can't be null";
        }
        if ($this->container['_30'] === null) {
            $invalidProperties[] = "'_30' can't be null";
        }
        if ($this->container['_50'] === null) {
            $invalidProperties[] = "'_50' can't be null";
        }
        if ($this->container['_100'] === null) {
            $invalidProperties[] = "'_100' can't be null";
        }
        if ($this->container['_500'] === null) {
            $invalidProperties[] = "'_500' can't be null";
        }
        if ($this->container['_1000'] === null) {
            $invalidProperties[] = "'_1000' can't be null";
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
     * Gets _1
     *
     * @return string
     */
    public function get1()
    {
        return $this->container['_1'];
    }

    /**
     * Sets _1
     *
     * @param string $_1 Contains sign of currency in Unicode hex code.
     *
     * @return $this
     */
    public function set1($_1)
    {
        $this->container['_1'] = $_1;

        return $this;
    }

    /**
     * Gets _2
     *
     * @return string
     */
    public function get2()
    {
        return $this->container['_2'];
    }

    /**
     * Sets _2
     *
     * @param string $_2 Contains sign of currency in Unicode hex code.
     *
     * @return $this
     */
    public function set2($_2)
    {
        $this->container['_2'] = $_2;

        return $this;
    }

    /**
     * Gets _3
     *
     * @return string
     */
    public function get3()
    {
        return $this->container['_3'];
    }

    /**
     * Sets _3
     *
     * @param string $_3 Contains sign of currency in Unicode hex code.
     *
     * @return $this
     */
    public function set3($_3)
    {
        $this->container['_3'] = $_3;

        return $this;
    }

    /**
     * Gets _5
     *
     * @return string
     */
    public function get5()
    {
        return $this->container['_5'];
    }

    /**
     * Sets _5
     *
     * @param string $_5 Contains sign of currency in Unicode hex code.
     *
     * @return $this
     */
    public function set5($_5)
    {
        $this->container['_5'] = $_5;

        return $this;
    }

    /**
     * Gets _10
     *
     * @return string
     */
    public function get10()
    {
        return $this->container['_10'];
    }

    /**
     * Sets _10
     *
     * @param string $_10 Contains sign of currency in Unicode hex code.
     *
     * @return $this
     */
    public function set10($_10)
    {
        $this->container['_10'] = $_10;

        return $this;
    }

    /**
     * Gets _20
     *
     * @return string
     */
    public function get20()
    {
        return $this->container['_20'];
    }

    /**
     * Sets _20
     *
     * @param string $_20 Contains sign of currency in Unicode hex code.
     *
     * @return $this
     */
    public function set20($_20)
    {
        $this->container['_20'] = $_20;

        return $this;
    }

    /**
     * Gets _30
     *
     * @return string
     */
    public function get30()
    {
        return $this->container['_30'];
    }

    /**
     * Sets _30
     *
     * @param string $_30 Contains sign of currency in Unicode hex code.
     *
     * @return $this
     */
    public function set30($_30)
    {
        $this->container['_30'] = $_30;

        return $this;
    }

    /**
     * Gets _50
     *
     * @return string
     */
    public function get50()
    {
        return $this->container['_50'];
    }

    /**
     * Sets _50
     *
     * @param string $_50 Contains sign of currency in Unicode hex code.
     *
     * @return $this
     */
    public function set50($_50)
    {
        $this->container['_50'] = $_50;

        return $this;
    }

    /**
     * Gets _100
     *
     * @return string
     */
    public function get100()
    {
        return $this->container['_100'];
    }

    /**
     * Sets _100
     *
     * @param string $_100 Contains sign of currency in Unicode hex code.
     *
     * @return $this
     */
    public function set100($_100)
    {
        $this->container['_100'] = $_100;

        return $this;
    }

    /**
     * Gets _500
     *
     * @return string
     */
    public function get500()
    {
        return $this->container['_500'];
    }

    /**
     * Sets _500
     *
     * @param string $_500 Contains sign of currency in Unicode hex code.
     *
     * @return $this
     */
    public function set500($_500)
    {
        $this->container['_500'] = $_500;

        return $this;
    }

    /**
     * Gets _1000
     *
     * @return string
     */
    public function get1000()
    {
        return $this->container['_1000'];
    }

    /**
     * Sets _1000
     *
     * @param string $_1000 Contains sign of currency in Unicode hex code.
     *
     * @return $this
     */
    public function set1000($_1000)
    {
        $this->container['_1000'] = $_1000;

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


