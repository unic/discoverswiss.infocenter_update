<?php
/**
 * DsTourSeasonRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  InfocenterUpdate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * InfocenterUpdate-TEST
 *
 * Infocenter Update test-v2
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace InfocenterUpdate\Client\Model;

use \ArrayAccess;
use \InfocenterUpdate\Client\ObjectSerializer;

/**
 * DsTourSeasonRequest Class Doc Comment
 *
 * @category Class
 * @package  InfocenterUpdate\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DsTourSeasonRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TourSeasonRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'jan' => 'bool',
'feb' => 'bool',
'mar' => 'bool',
'apr' => 'bool',
'may' => 'bool',
'jun' => 'bool',
'jul' => 'bool',
'aug' => 'bool',
'sep' => 'bool',
'oct' => 'bool',
'nov' => 'bool',
'dec' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'jan' => null,
'feb' => null,
'mar' => null,
'apr' => null,
'may' => null,
'jun' => null,
'jul' => null,
'aug' => null,
'sep' => null,
'oct' => null,
'nov' => null,
'dec' => null    ];

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
        'jan' => 'jan',
'feb' => 'feb',
'mar' => 'mar',
'apr' => 'apr',
'may' => 'may',
'jun' => 'jun',
'jul' => 'jul',
'aug' => 'aug',
'sep' => 'sep',
'oct' => 'oct',
'nov' => 'nov',
'dec' => 'dec'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'jan' => 'setJan',
'feb' => 'setFeb',
'mar' => 'setMar',
'apr' => 'setApr',
'may' => 'setMay',
'jun' => 'setJun',
'jul' => 'setJul',
'aug' => 'setAug',
'sep' => 'setSep',
'oct' => 'setOct',
'nov' => 'setNov',
'dec' => 'setDec'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'jan' => 'getJan',
'feb' => 'getFeb',
'mar' => 'getMar',
'apr' => 'getApr',
'may' => 'getMay',
'jun' => 'getJun',
'jul' => 'getJul',
'aug' => 'getAug',
'sep' => 'getSep',
'oct' => 'getOct',
'nov' => 'getNov',
'dec' => 'getDec'    ];

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
        $this->container['jan'] = isset($data['jan']) ? $data['jan'] : null;
        $this->container['feb'] = isset($data['feb']) ? $data['feb'] : null;
        $this->container['mar'] = isset($data['mar']) ? $data['mar'] : null;
        $this->container['apr'] = isset($data['apr']) ? $data['apr'] : null;
        $this->container['may'] = isset($data['may']) ? $data['may'] : null;
        $this->container['jun'] = isset($data['jun']) ? $data['jun'] : null;
        $this->container['jul'] = isset($data['jul']) ? $data['jul'] : null;
        $this->container['aug'] = isset($data['aug']) ? $data['aug'] : null;
        $this->container['sep'] = isset($data['sep']) ? $data['sep'] : null;
        $this->container['oct'] = isset($data['oct']) ? $data['oct'] : null;
        $this->container['nov'] = isset($data['nov']) ? $data['nov'] : null;
        $this->container['dec'] = isset($data['dec']) ? $data['dec'] : null;
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
     * Gets jan
     *
     * @return bool
     */
    public function getJan()
    {
        return $this->container['jan'];
    }

    /**
     * Sets jan
     *
     * @param bool $jan jan
     *
     * @return $this
     */
    public function setJan($jan)
    {
        $this->container['jan'] = $jan;

        return $this;
    }

    /**
     * Gets feb
     *
     * @return bool
     */
    public function getFeb()
    {
        return $this->container['feb'];
    }

    /**
     * Sets feb
     *
     * @param bool $feb feb
     *
     * @return $this
     */
    public function setFeb($feb)
    {
        $this->container['feb'] = $feb;

        return $this;
    }

    /**
     * Gets mar
     *
     * @return bool
     */
    public function getMar()
    {
        return $this->container['mar'];
    }

    /**
     * Sets mar
     *
     * @param bool $mar mar
     *
     * @return $this
     */
    public function setMar($mar)
    {
        $this->container['mar'] = $mar;

        return $this;
    }

    /**
     * Gets apr
     *
     * @return bool
     */
    public function getApr()
    {
        return $this->container['apr'];
    }

    /**
     * Sets apr
     *
     * @param bool $apr apr
     *
     * @return $this
     */
    public function setApr($apr)
    {
        $this->container['apr'] = $apr;

        return $this;
    }

    /**
     * Gets may
     *
     * @return bool
     */
    public function getMay()
    {
        return $this->container['may'];
    }

    /**
     * Sets may
     *
     * @param bool $may may
     *
     * @return $this
     */
    public function setMay($may)
    {
        $this->container['may'] = $may;

        return $this;
    }

    /**
     * Gets jun
     *
     * @return bool
     */
    public function getJun()
    {
        return $this->container['jun'];
    }

    /**
     * Sets jun
     *
     * @param bool $jun jun
     *
     * @return $this
     */
    public function setJun($jun)
    {
        $this->container['jun'] = $jun;

        return $this;
    }

    /**
     * Gets jul
     *
     * @return bool
     */
    public function getJul()
    {
        return $this->container['jul'];
    }

    /**
     * Sets jul
     *
     * @param bool $jul jul
     *
     * @return $this
     */
    public function setJul($jul)
    {
        $this->container['jul'] = $jul;

        return $this;
    }

    /**
     * Gets aug
     *
     * @return bool
     */
    public function getAug()
    {
        return $this->container['aug'];
    }

    /**
     * Sets aug
     *
     * @param bool $aug aug
     *
     * @return $this
     */
    public function setAug($aug)
    {
        $this->container['aug'] = $aug;

        return $this;
    }

    /**
     * Gets sep
     *
     * @return bool
     */
    public function getSep()
    {
        return $this->container['sep'];
    }

    /**
     * Sets sep
     *
     * @param bool $sep sep
     *
     * @return $this
     */
    public function setSep($sep)
    {
        $this->container['sep'] = $sep;

        return $this;
    }

    /**
     * Gets oct
     *
     * @return bool
     */
    public function getOct()
    {
        return $this->container['oct'];
    }

    /**
     * Sets oct
     *
     * @param bool $oct oct
     *
     * @return $this
     */
    public function setOct($oct)
    {
        $this->container['oct'] = $oct;

        return $this;
    }

    /**
     * Gets nov
     *
     * @return bool
     */
    public function getNov()
    {
        return $this->container['nov'];
    }

    /**
     * Sets nov
     *
     * @param bool $nov nov
     *
     * @return $this
     */
    public function setNov($nov)
    {
        $this->container['nov'] = $nov;

        return $this;
    }

    /**
     * Gets dec
     *
     * @return bool
     */
    public function getDec()
    {
        return $this->container['dec'];
    }

    /**
     * Sets dec
     *
     * @param bool $dec dec
     *
     * @return $this
     */
    public function setDec($dec)
    {
        $this->container['dec'] = $dec;

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
