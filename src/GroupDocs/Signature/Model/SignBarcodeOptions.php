<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SignBarcodeOptions.php">
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
 * SignBarcodeOptions
 *
 * @description Represents the Barcode signature options
 */
class SignBarcodeOptions extends SignTextOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SignBarcodeOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'barcodeType' => 'string',
        'transparency' => 'double',
        'codeTextAlignment' => 'string',
        'innerMargins' => '\GroupDocs\Signature\Model\Padding'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'barcodeType' => null,
        'transparency' => 'double',
        'codeTextAlignment' => null,
        'innerMargins' => null
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
        'transparency' => 'Transparency',
        'codeTextAlignment' => 'CodeTextAlignment',
        'innerMargins' => 'InnerMargins'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'barcodeType' => 'setBarcodeType',
        'transparency' => 'setTransparency',
        'codeTextAlignment' => 'setCodeTextAlignment',
        'innerMargins' => 'setInnerMargins'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'barcodeType' => 'getBarcodeType',
        'transparency' => 'getTransparency',
        'codeTextAlignment' => 'getCodeTextAlignment',
        'innerMargins' => 'getInnerMargins'
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

    const CODE_TEXT_ALIGNMENT_NONE = 'None';
    const CODE_TEXT_ALIGNMENT_ABOVE = 'Above';
    const CODE_TEXT_ALIGNMENT_BELOW = 'Below';
    const CODE_TEXT_ALIGNMENT_RIGHT = 'Right';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeTextAlignmentAllowableValues()
    {
        return [
            self::CODE_TEXT_ALIGNMENT_NONE,
            self::CODE_TEXT_ALIGNMENT_ABOVE,
            self::CODE_TEXT_ALIGNMENT_BELOW,
            self::CODE_TEXT_ALIGNMENT_RIGHT,
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
        $this->container['transparency'] = isset($data['transparency']) ? $data['transparency'] : null;
        $this->container['codeTextAlignment'] = isset($data['codeTextAlignment']) ? $data['codeTextAlignment'] : null;
        $this->container['innerMargins'] = isset($data['innerMargins']) ? $data['innerMargins'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['codeTextAlignment'] === null) {
            $invalidProperties[] = "'codeTextAlignment' can't be null";
        }
        $allowedValues = $this->getCodeTextAlignmentAllowableValues();
        if (!in_array($this->container['codeTextAlignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'codeTextAlignment', must be one of '%s'",
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

        if ($this->container['codeTextAlignment'] === null) {
            return false;
        }
        $allowedValues = $this->getCodeTextAlignmentAllowableValues();
        if (!in_array($this->container['codeTextAlignment'], $allowedValues)) {
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
     * @param string $barcodeType Get or set Barcode type. Pick one from supported barcode types list
     *
     * @return $this
     */
    public function setBarcodeType($barcodeType)
    {
        $this->container['barcodeType'] = $barcodeType;

        return $this;
    }

    /*
     * Gets transparency
     *
     * @return double
     */
    public function getTransparency()
    {
        return $this->container['transparency'];
    }

    /*
     * Sets transparency
     *
     * @param double $transparency Gets or sets the signature transparency (value from 0.0 (opaque) through 1.0 (clear)). Default value is 0 (opaque).
     *
     * @return $this
     */
    public function setTransparency($transparency)
    {
        $this->container['transparency'] = $transparency;

        return $this;
    }

    /*
     * Gets codeTextAlignment
     *
     * @return string
     */
    public function getCodeTextAlignment()
    {
        return $this->container['codeTextAlignment'];
    }

    /*
     * Sets codeTextAlignment
     *
     * @param string $codeTextAlignment Gets or sets the alignment of text in the result Barcode Default value is None
     *
     * @return $this
     */
    public function setCodeTextAlignment($codeTextAlignment)
    {
        $allowedValues = $this->getCodeTextAlignmentAllowableValues();
        if ((!is_numeric($codeTextAlignment) && !in_array($codeTextAlignment, $allowedValues)) || (is_numeric($codeTextAlignment) && !in_array($allowedValues[$codeTextAlignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'codeTextAlignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['codeTextAlignment'] = $codeTextAlignment;

        return $this;
    }

    /*
     * Gets innerMargins
     *
     * @return \GroupDocs\Signature\Model\Padding
     */
    public function getInnerMargins()
    {
        return $this->container['innerMargins'];
    }

    /*
     * Sets innerMargins
     *
     * @param \GroupDocs\Signature\Model\Padding $innerMargins Gets or sets the space between Barcode elements and result image borders
     *
     * @return $this
     */
    public function setInnerMargins($innerMargins)
    {
        $this->container['innerMargins'] = $innerMargins;

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


