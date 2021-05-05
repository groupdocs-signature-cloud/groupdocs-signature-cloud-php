<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="DeleteOptions.php">
 *   Copyright (c) 2003-2021 Aspose Pty Ltd
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

use \ArrayAccess;
use \GroupDocs\Signature\ObjectSerializer;

/*
 * DeleteOptions
 *
 * @description Base container class for delete signature options
 */
class DeleteOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DeleteOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'signatureType' => 'string',
        'signatureId' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'signatureType' => null,
        'signatureId' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'signatureType' => 'SignatureType',
        'signatureId' => 'SignatureId'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signatureType' => 'setSignatureType',
        'signatureId' => 'setSignatureId'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signatureType' => 'getSignatureType',
        'signatureId' => 'getSignatureId'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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

    const SIGNATURE_TYPE_NONE = 'None';
    const SIGNATURE_TYPE_TEXT = 'Text';
    const SIGNATURE_TYPE_IMAGE = 'Image';
    const SIGNATURE_TYPE_DIGITAL = 'Digital';
    const SIGNATURE_TYPE_BARCODE = 'Barcode';
    const SIGNATURE_TYPE_QR_CODE = 'QRCode';
    const SIGNATURE_TYPE_STAMP = 'Stamp';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignatureTypeAllowableValues()
    {
        return [
            self::SIGNATURE_TYPE_NONE,
            self::SIGNATURE_TYPE_TEXT,
            self::SIGNATURE_TYPE_IMAGE,
            self::SIGNATURE_TYPE_DIGITAL,
            self::SIGNATURE_TYPE_BARCODE,
            self::SIGNATURE_TYPE_QR_CODE,
            self::SIGNATURE_TYPE_STAMP,
        ];
    }
    

    /*
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['signatureType'] = isset($data['signatureType']) ? $data['signatureType'] : null;
        $this->container['signatureId'] = isset($data['signatureId']) ? $data['signatureId'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['signatureType'] === null) {
            $invalidProperties[] = "'signatureType' can't be null";
        }
        $allowedValues = $this->getSignatureTypeAllowableValues();
        if (!in_array($this->container['signatureType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'signatureType', must be one of '%s'",
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

        if ($this->container['signatureType'] === null) {
            return false;
        }
        $allowedValues = $this->getSignatureTypeAllowableValues();
        if (!in_array($this->container['signatureType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets signatureType
     *
     * @return string
     */
    public function getSignatureType()
    {
        return $this->container['signatureType'];
    }

    /*
     * Sets signatureType
     *
     * @param string $signatureType Specifies the type of signature
     *
     * @return $this
     */
    public function setSignatureType($signatureType)
    {
        $allowedValues = $this->getSignatureTypeAllowableValues();
        if ((!is_numeric($signatureType) && !in_array($signatureType, $allowedValues)) || (is_numeric($signatureType) && !in_array($allowedValues[$signatureType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'signatureType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['signatureType'] = $signatureType;

        return $this;
    }

    /*
     * Gets signatureId
     *
     * @return string
     */
    public function getSignatureId()
    {
        return $this->container['signatureId'];
    }

    /*
     * Sets signatureId
     *
     * @param string $signatureId Unique signature identifier to modify signature in the document over Update or Delete methods. This property will be set automatically after Sign or Search method being called. If this property was saved before it can be set manually to manipulate the signature.
     *
     * @return $this
     */
    public function setSignatureId($signatureId)
    {
        $this->container['signatureId'] = $signatureId;

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


