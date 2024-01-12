<?php
/**
 * DoEmailLookupResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TextMagic API
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
 * DoEmailLookupResponse Class Doc Comment
 *
 * @category Class
 * @package  TextMagic
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DoEmailLookupResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DoEmailLookupResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => 'string',
        'status' => 'string',
        'deliverability' => 'string',
        'reason' => 'string',
        'risk' => 'string',
        'addressType' => 'string',
        'isDisposableAddress' => 'bool',
        'suggestion' => 'string',
        'emailRole' => 'string',
        'localPart' => 'string',
        'domainPart' => 'string',
        'exchange' => 'string',
        'preference' => 'int',
        'isInWhiteList' => 'bool',
        'isInBlackList' => 'bool',
        'hasMx' => 'bool',
        'hasAa' => 'bool',
        'hasAaaa' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => 'email',
        'status' => null,
        'deliverability' => null,
        'reason' => null,
        'risk' => null,
        'addressType' => null,
        'isDisposableAddress' => null,
        'suggestion' => null,
        'emailRole' => null,
        'localPart' => null,
        'domainPart' => null,
        'exchange' => null,
        'preference' => null,
        'isInWhiteList' => null,
        'isInBlackList' => null,
        'hasMx' => null,
        'hasAa' => null,
        'hasAaaa' => null
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
        'address' => 'address',
        'status' => 'status',
        'deliverability' => 'deliverability',
        'reason' => 'reason',
        'risk' => 'risk',
        'addressType' => 'addressType',
        'isDisposableAddress' => 'isDisposableAddress',
        'suggestion' => 'suggestion',
        'emailRole' => 'emailRole',
        'localPart' => 'localPart',
        'domainPart' => 'domainPart',
        'exchange' => 'exchange',
        'preference' => 'preference',
        'isInWhiteList' => 'isInWhiteList',
        'isInBlackList' => 'isInBlackList',
        'hasMx' => 'hasMx',
        'hasAa' => 'hasAa',
        'hasAaaa' => 'hasAaaa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'status' => 'setStatus',
        'deliverability' => 'setDeliverability',
        'reason' => 'setReason',
        'risk' => 'setRisk',
        'addressType' => 'setAddressType',
        'isDisposableAddress' => 'setIsDisposableAddress',
        'suggestion' => 'setSuggestion',
        'emailRole' => 'setEmailRole',
        'localPart' => 'setLocalPart',
        'domainPart' => 'setDomainPart',
        'exchange' => 'setExchange',
        'preference' => 'setPreference',
        'isInWhiteList' => 'setIsInWhiteList',
        'isInBlackList' => 'setIsInBlackList',
        'hasMx' => 'setHasMx',
        'hasAa' => 'setHasAa',
        'hasAaaa' => 'setHasAaaa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'status' => 'getStatus',
        'deliverability' => 'getDeliverability',
        'reason' => 'getReason',
        'risk' => 'getRisk',
        'addressType' => 'getAddressType',
        'isDisposableAddress' => 'getIsDisposableAddress',
        'suggestion' => 'getSuggestion',
        'emailRole' => 'getEmailRole',
        'localPart' => 'getLocalPart',
        'domainPart' => 'getDomainPart',
        'exchange' => 'getExchange',
        'preference' => 'getPreference',
        'isInWhiteList' => 'getIsInWhiteList',
        'isInBlackList' => 'getIsInBlackList',
        'hasMx' => 'getHasMx',
        'hasAa' => 'getHasAa',
        'hasAaaa' => 'getHasAaaa'
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

    const STATUS_VALID = 'valid';
    const STATUS_INVALID = 'invalid';
    const RISK_HIGH = 'high';
    const RISK_MEDIUM = 'medium';
    const RISK_LOW = 'low';
    const RISK_UNKNOWN = 'unknown';
    const ADDRESS_TYPE_CORPORATE = 'corporate';
    const ADDRESS_TYPE_FREE = 'free';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_VALID,
            self::STATUS_INVALID,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRiskAllowableValues()
    {
        return [
            self::RISK_HIGH,
            self::RISK_MEDIUM,
            self::RISK_LOW,
            self::RISK_UNKNOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressTypeAllowableValues()
    {
        return [
            self::ADDRESS_TYPE_CORPORATE,
            self::ADDRESS_TYPE_FREE,
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['deliverability'] = isset($data['deliverability']) ? $data['deliverability'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['risk'] = isset($data['risk']) ? $data['risk'] : null;
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['isDisposableAddress'] = isset($data['isDisposableAddress']) ? $data['isDisposableAddress'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['emailRole'] = isset($data['emailRole']) ? $data['emailRole'] : null;
        $this->container['localPart'] = isset($data['localPart']) ? $data['localPart'] : null;
        $this->container['domainPart'] = isset($data['domainPart']) ? $data['domainPart'] : null;
        $this->container['exchange'] = isset($data['exchange']) ? $data['exchange'] : null;
        $this->container['preference'] = isset($data['preference']) ? $data['preference'] : null;
        $this->container['isInWhiteList'] = isset($data['isInWhiteList']) ? $data['isInWhiteList'] : null;
        $this->container['isInBlackList'] = isset($data['isInBlackList']) ? $data['isInBlackList'] : null;
        $this->container['hasMx'] = isset($data['hasMx']) ? $data['hasMx'] : null;
        $this->container['hasAa'] = isset($data['hasAa']) ? $data['hasAa'] : null;
        $this->container['hasAaaa'] = isset($data['hasAaaa']) ? $data['hasAaaa'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
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

        if ($this->container['deliverability'] === null) {
            $invalidProperties[] = "'deliverability' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        if ($this->container['risk'] === null) {
            $invalidProperties[] = "'risk' can't be null";
        }
        $allowedValues = $this->getRiskAllowableValues();
        if (!is_null($this->container['risk']) && !in_array($this->container['risk'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'risk', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['addressType'] === null) {
            $invalidProperties[] = "'addressType' can't be null";
        }
        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!is_null($this->container['addressType']) && !in_array($this->container['addressType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'addressType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['isDisposableAddress'] === null) {
            $invalidProperties[] = "'isDisposableAddress' can't be null";
        }
        if ($this->container['suggestion'] === null) {
            $invalidProperties[] = "'suggestion' can't be null";
        }
        if ($this->container['emailRole'] === null) {
            $invalidProperties[] = "'emailRole' can't be null";
        }
        if ($this->container['localPart'] === null) {
            $invalidProperties[] = "'localPart' can't be null";
        }
        if ($this->container['domainPart'] === null) {
            $invalidProperties[] = "'domainPart' can't be null";
        }
        if ($this->container['exchange'] === null) {
            $invalidProperties[] = "'exchange' can't be null";
        }
        if ($this->container['preference'] === null) {
            $invalidProperties[] = "'preference' can't be null";
        }
        if ($this->container['isInWhiteList'] === null) {
            $invalidProperties[] = "'isInWhiteList' can't be null";
        }
        if ($this->container['isInBlackList'] === null) {
            $invalidProperties[] = "'isInBlackList' can't be null";
        }
        if ($this->container['hasMx'] === null) {
            $invalidProperties[] = "'hasMx' can't be null";
        }
        if ($this->container['hasAa'] === null) {
            $invalidProperties[] = "'hasAa' can't be null";
        }
        if ($this->container['hasAaaa'] === null) {
            $invalidProperties[] = "'hasAaaa' can't be null";
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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address The email address passed to the call.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * @param string $status The email is `valid` or `invalid`.
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
     * Gets deliverability
     *
     * @return string
     */
    public function getDeliverability()
    {
        return $this->container['deliverability'];
    }

    /**
     * Sets deliverability
     *
     * @param string $deliverability The delivery status of the email address is`deliverable`, `undeliverable`. or `unknown`.
     *
     * @return $this
     */
    public function setDeliverability($deliverability)
    {
        $this->container['deliverability'] = $deliverability;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason The reason why the checked email is invalid/undeliverable.
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets risk
     *
     * @return string
     */
    public function getRisk()
    {
        return $this->container['risk'];
    }

    /**
     * Sets risk
     *
     * @param string $risk The risk score of the email is`high`, `medium`, `low` or `null`.
     *
     * @return $this
     */
    public function setRisk($risk)
    {
        $allowedValues = $this->getRiskAllowableValues();
        if (!in_array($risk, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'risk', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['risk'] = $risk;

        return $this;
    }

    /**
     * Gets addressType
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
     * Sets addressType
     *
     * @param string $addressType The email address type (domain) is `free` or `corporate`.
     *
     * @return $this
     */
    public function setAddressType($addressType)
    {
        $allowedValues = $this->getAddressTypeAllowableValues();
        if (!in_array($addressType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'addressType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['addressType'] = $addressType;

        return $this;
    }

    /**
     * Gets isDisposableAddress
     *
     * @return bool
     */
    public function getIsDisposableAddress()
    {
        return $this->container['isDisposableAddress'];
    }

    /**
     * Sets isDisposableAddress
     *
     * @param bool $isDisposableAddress This is `true` if the domain is in the list of disposable email addresses; otherwise, it returns as `false`.
     *
     * @return $this
     */
    public function setIsDisposableAddress($isDisposableAddress)
    {
        $this->container['isDisposableAddress'] = $isDisposableAddress;

        return $this;
    }

    /**
     * Gets suggestion
     *
     * @return string
     */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
     * Sets suggestion
     *
     * @param string $suggestion Null if nothing is suggested; however, if there is a potential typo in the email address, the closest suggestion is provided.
     *
     * @return $this
     */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;

        return $this;
    }

    /**
     * Gets emailRole
     *
     * @return string
     */
    public function getEmailRole()
    {
        return $this->container['emailRole'];
    }

    /**
     * Sets emailRole
     *
     * @param string $emailRole Checks the mailbox part of the email to see whether it matches a specific role type (‘admin’, ‘sales’, ‘webmaster’).
     *
     * @return $this
     */
    public function setEmailRole($emailRole)
    {
        $this->container['emailRole'] = $emailRole;

        return $this;
    }

    /**
     * Gets localPart
     *
     * @return string
     */
    public function getLocalPart()
    {
        return $this->container['localPart'];
    }

    /**
     * Sets localPart
     *
     * @param string $localPart The local part of the email address.
     *
     * @return $this
     */
    public function setLocalPart($localPart)
    {
        $this->container['localPart'] = $localPart;

        return $this;
    }

    /**
     * Gets domainPart
     *
     * @return string
     */
    public function getDomainPart()
    {
        return $this->container['domainPart'];
    }

    /**
     * Sets domainPart
     *
     * @param string $domainPart The domain part of the email address.
     *
     * @return $this
     */
    public function setDomainPart($domainPart)
    {
        $this->container['domainPart'] = $domainPart;

        return $this;
    }

    /**
     * Gets exchange
     *
     * @return string
     */
    public function getExchange()
    {
        return $this->container['exchange'];
    }

    /**
     * Sets exchange
     *
     * @param string $exchange Email exchange server domain name (MX record value).
     *
     * @return $this
     */
    public function setExchange($exchange)
    {
        $this->container['exchange'] = $exchange;

        return $this;
    }

    /**
     * Gets preference
     *
     * @return int
     */
    public function getPreference()
    {
        return $this->container['preference'];
    }

    /**
     * Sets preference
     *
     * @param int $preference MX record preference.
     *
     * @return $this
     */
    public function setPreference($preference)
    {
        $this->container['preference'] = $preference;

        return $this;
    }

    /**
     * Gets isInWhiteList
     *
     * @return bool
     */
    public function getIsInWhiteList()
    {
        return $this->container['isInWhiteList'];
    }

    /**
     * Sets isInWhiteList
     *
     * @param bool $isInWhiteList `true` if the email address exists in the TextMagic whitelist.
     *
     * @return $this
     */
    public function setIsInWhiteList($isInWhiteList)
    {
        $this->container['isInWhiteList'] = $isInWhiteList;

        return $this;
    }

    /**
     * Gets isInBlackList
     *
     * @return bool
     */
    public function getIsInBlackList()
    {
        return $this->container['isInBlackList'];
    }

    /**
     * Sets isInBlackList
     *
     * @param bool $isInBlackList `true` if the email address exists in the TextMagic blacklist.
     *
     * @return $this
     */
    public function setIsInBlackList($isInBlackList)
    {
        $this->container['isInBlackList'] = $isInBlackList;

        return $this;
    }

    /**
     * Gets hasMx
     *
     * @return bool
     */
    public function getHasMx()
    {
        return $this->container['hasMx'];
    }

    /**
     * Sets hasMx
     *
     * @param bool $hasMx `true` if the email address domain has an MX record.
     *
     * @return $this
     */
    public function setHasMx($hasMx)
    {
        $this->container['hasMx'] = $hasMx;

        return $this;
    }

    /**
     * Gets hasAa
     *
     * @return bool
     */
    public function getHasAa()
    {
        return $this->container['hasAa'];
    }

    /**
     * Sets hasAa
     *
     * @param bool $hasAa `true` if the email address domain has an A record (IPv4).
     *
     * @return $this
     */
    public function setHasAa($hasAa)
    {
        $this->container['hasAa'] = $hasAa;

        return $this;
    }

    /**
     * Gets hasAaaa
     *
     * @return bool
     */
    public function getHasAaaa()
    {
        return $this->container['hasAaaa'];
    }

    /**
     * Sets hasAaaa
     *
     * @param bool $hasAaaa `true` if the email address domain has an AAAA record (IPv6).
     *
     * @return $this
     */
    public function setHasAaaa($hasAaaa)
    {
        $this->container['hasAaaa'] = $hasAaaa;

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


