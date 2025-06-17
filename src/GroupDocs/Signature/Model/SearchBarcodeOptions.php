<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SearchBarcodeOptions.php">
 *   Copyright (c) Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Signature\Model;
use \GroupDocs\Signature\ObjectSerializer;

/*
 * SearchBarcodeOptions
 *
 * @description Defines options to Search barcode signature within a document
 */
class SearchBarcodeOptions extends SearchOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SearchBarcodeOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'barcodeType' => 'string',
        'text' => 'string',
        'matchType' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'barcodeType' => null,
        'text' => null,
        'matchType' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'barcodeType' => 'BarcodeType',
        'text' => 'Text',
        'matchType' => 'MatchType'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'barcodeType' => 'setBarcodeType',
        'text' => 'setText',
        'matchType' => 'setMatchType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'barcodeType' => 'getBarcodeType',
        'text' => 'getText',
        'matchType' => 'getMatchType'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const MATCH_TYPE_EXACT = 'Exact';
    const MATCH_TYPE_STARTS_WITH = 'StartsWith';
    const MATCH_TYPE_ENDS_WITH = 'EndsWith';
    const MATCH_TYPE_CONTAINS = 'Contains';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMatchTypeAllowableValues()
    {
        return [
            self::MATCH_TYPE_EXACT,
            self::MATCH_TYPE_STARTS_WITH,
            self::MATCH_TYPE_ENDS_WITH,
            self::MATCH_TYPE_CONTAINS,
        ];
    }
    


    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['barcodeType'] = isset($data['barcodeType']) ? $data['barcodeType'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['matchType'] === null) {
            $invalidProperties[] = "'matchType' can't be null";
        }
        $allowedValues = $this->getMatchTypeAllowableValues();
        if (!in_array($this->container['matchType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'matchType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['matchType'] === null) {
            return false;
        }
        $allowedValues = $this->getMatchTypeAllowableValues();
        if (!in_array($this->container['matchType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets barcodeType
     *
     * @return string
     */
    public function getBarcodeType()
    {
        return $this->container['barcodeType'];
    }

    /*
     * Sets barcodeType
     *
     * @param string $barcodeType Specifies encode type property to search barcodes. If this value is not set, search is processed for all supported barcode Types
     *
     * @return $this
     */
    public function setBarcodeType($barcodeType)
    {
        $this->container['barcodeType'] = $barcodeType;

        return $this;
    }

    /*
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /*
     * Sets text
     *
     * @param string $text Specifies text for searching and matching in barcode signature
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /*
     * Gets matchType
     *
     * @return string
     */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /*
     * Sets matchType
     *
     * @param string $matchType Get or set barcode text match type search. It is used only when Text property is set
     *
     * @return $this
     */
    public function setMatchType($matchType)
    {
        $allowedValues = $this->getMatchTypeAllowableValues();
        if ((!is_numeric($matchType) && !in_array($matchType, $allowedValues)) || (is_numeric($matchType) && !in_array($allowedValues[$matchType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'matchType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['matchType'] = $matchType;

        return $this;
    }
    /*
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

    /*
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

    /*
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

    /*
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

    /*
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


