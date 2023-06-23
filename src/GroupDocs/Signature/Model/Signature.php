<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="Signature.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
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
 * Signature
 *
 * @description Describes base class for signatures
 */
class Signature implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "Signature";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'signatureType' => 'string',
        'pageNumber' => 'int',
        'signatureId' => 'string',
        'isSignature' => 'bool',
        'createdOn' => '\DateTime',
        'modifiedOn' => '\DateTime',
        'top' => 'int',
        'left' => 'int',
        'width' => 'int',
        'height' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'signatureType' => null,
        'pageNumber' => 'int32',
        'signatureId' => null,
        'isSignature' => null,
        'createdOn' => 'date-time',
        'modifiedOn' => 'date-time',
        'top' => 'int32',
        'left' => 'int32',
        'width' => 'int32',
        'height' => 'int32'
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
        'pageNumber' => 'PageNumber',
        'signatureId' => 'SignatureId',
        'isSignature' => 'IsSignature',
        'createdOn' => 'CreatedOn',
        'modifiedOn' => 'ModifiedOn',
        'top' => 'Top',
        'left' => 'Left',
        'width' => 'Width',
        'height' => 'Height'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signatureType' => 'setSignatureType',
        'pageNumber' => 'setPageNumber',
        'signatureId' => 'setSignatureId',
        'isSignature' => 'setIsSignature',
        'createdOn' => 'setCreatedOn',
        'modifiedOn' => 'setModifiedOn',
        'top' => 'setTop',
        'left' => 'setLeft',
        'width' => 'setWidth',
        'height' => 'setHeight'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signatureType' => 'getSignatureType',
        'pageNumber' => 'getPageNumber',
        'signatureId' => 'getSignatureId',
        'isSignature' => 'getIsSignature',
        'createdOn' => 'getCreatedOn',
        'modifiedOn' => 'getModifiedOn',
        'top' => 'getTop',
        'left' => 'getLeft',
        'width' => 'getWidth',
        'height' => 'getHeight'
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
    const SIGNATURE_TYPE_FORM_FIELD = 'FormField';
    const SIGNATURE_TYPE_METADATA = 'Metadata';
    

    
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
            self::SIGNATURE_TYPE_FORM_FIELD,
            self::SIGNATURE_TYPE_METADATA,
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
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['signatureId'] = isset($data['signatureId']) ? $data['signatureId'] : null;
        $this->container['isSignature'] = isset($data['isSignature']) ? $data['isSignature'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['modifiedOn'] = isset($data['modifiedOn']) ? $data['modifiedOn'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('Type', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
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

        if ($this->container['isSignature'] === null) {
            $invalidProperties[] = "'isSignature' can't be null";
        }
        if ($this->container['createdOn'] === null) {
            $invalidProperties[] = "'createdOn' can't be null";
        }
        if ($this->container['modifiedOn'] === null) {
            $invalidProperties[] = "'modifiedOn' can't be null";
        }
        if ($this->container['top'] === null) {
            $invalidProperties[] = "'top' can't be null";
        }
        if ($this->container['left'] === null) {
            $invalidProperties[] = "'left' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
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
        if ($this->container['isSignature'] === null) {
            return false;
        }
        if ($this->container['createdOn'] === null) {
            return false;
        }
        if ($this->container['modifiedOn'] === null) {
            return false;
        }
        if ($this->container['top'] === null) {
            return false;
        }
        if ($this->container['left'] === null) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
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
     * @param string $signatureType Specifies the signature type (Text, Image, Digital, Barcode, QRCode, Stamp)
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
     * Gets pageNumber
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /*
     * Sets pageNumber
     *
     * @param int $pageNumber Specifies the page signature was found on
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;

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
     * Gets isSignature
     *
     * @return bool
     */
    public function getIsSignature()
    {
        return $this->container['isSignature'];
    }

    /*
     * Sets isSignature
     *
     * @param bool $isSignature Get or set flag to indicate if this component is Signature or document content. This property is being used with Update method to set element as signature (true) or document element (false).
     *
     * @return $this
     */
    public function setIsSignature($isSignature)
    {
        $this->container['isSignature'] = $isSignature;

        return $this;
    }

    /*
     * Gets createdOn
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['createdOn'];
    }

    /*
     * Sets createdOn
     *
     * @param \DateTime $createdOn Get or set the signature creation date
     *
     * @return $this
     */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;

        return $this;
    }

    /*
     * Gets modifiedOn
     *
     * @return \DateTime
     */
    public function getModifiedOn()
    {
        return $this->container['modifiedOn'];
    }

    /*
     * Sets modifiedOn
     *
     * @param \DateTime $modifiedOn Get or set the signature modification date
     *
     * @return $this
     */
    public function setModifiedOn($modifiedOn)
    {
        $this->container['modifiedOn'] = $modifiedOn;

        return $this;
    }

    /*
     * Gets top
     *
     * @return int
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /*
     * Sets top
     *
     * @param int $top Specifies top position of signature
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }

    /*
     * Gets left
     *
     * @return int
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /*
     * Sets left
     *
     * @param int $left Specifies left position of signature
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /*
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /*
     * Sets width
     *
     * @param int $width Specifies width of signature
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /*
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /*
     * Sets height
     *
     * @param int $height Specifies height of signature
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

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


