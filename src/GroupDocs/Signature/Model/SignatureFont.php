<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SignatureFont.php">
 *   Copyright (c) 2003-2022 Aspose Pty Ltd
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
 * SignatureFont
 *
 * @description Create instance of SignatureFont class to specify Font properties
 */
class SignatureFont implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SignatureFont";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fontFamily' => 'string',
        'fontSize' => 'double',
        'bold' => 'bool',
        'italic' => 'bool',
        'underline' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fontFamily' => null,
        'fontSize' => 'double',
        'bold' => null,
        'italic' => null,
        'underline' => null
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
        'fontFamily' => 'FontFamily',
        'fontSize' => 'FontSize',
        'bold' => 'Bold',
        'italic' => 'Italic',
        'underline' => 'Underline'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fontFamily' => 'setFontFamily',
        'fontSize' => 'setFontSize',
        'bold' => 'setBold',
        'italic' => 'setItalic',
        'underline' => 'setUnderline'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fontFamily' => 'getFontFamily',
        'fontSize' => 'getFontSize',
        'bold' => 'getBold',
        'italic' => 'getItalic',
        'underline' => 'getUnderline'
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
        $this->container['fontFamily'] = isset($data['fontFamily']) ? $data['fontFamily'] : null;
        $this->container['fontSize'] = isset($data['fontSize']) ? $data['fontSize'] : null;
        $this->container['bold'] = isset($data['bold']) ? $data['bold'] : null;
        $this->container['italic'] = isset($data['italic']) ? $data['italic'] : null;
        $this->container['underline'] = isset($data['underline']) ? $data['underline'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fontSize'] === null) {
            $invalidProperties[] = "'fontSize' can't be null";
        }
        if ($this->container['bold'] === null) {
            $invalidProperties[] = "'bold' can't be null";
        }
        if ($this->container['italic'] === null) {
            $invalidProperties[] = "'italic' can't be null";
        }
        if ($this->container['underline'] === null) {
            $invalidProperties[] = "'underline' can't be null";
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

        if ($this->container['fontSize'] === null) {
            return false;
        }
        if ($this->container['bold'] === null) {
            return false;
        }
        if ($this->container['italic'] === null) {
            return false;
        }
        if ($this->container['underline'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets fontFamily
     *
     * @return string
     */
    public function getFontFamily()
    {
        return $this->container['fontFamily'];
    }

    /*
     * Sets fontFamily
     *
     * @param string $fontFamily Font Family Name
     *
     * @return $this
     */
    public function setFontFamily($fontFamily)
    {
        $this->container['fontFamily'] = $fontFamily;

        return $this;
    }

    /*
     * Gets fontSize
     *
     * @return double
     */
    public function getFontSize()
    {
        return $this->container['fontSize'];
    }

    /*
     * Sets fontSize
     *
     * @param double $fontSize Font Size
     *
     * @return $this
     */
    public function setFontSize($fontSize)
    {
        $this->container['fontSize'] = $fontSize;

        return $this;
    }

    /*
     * Gets bold
     *
     * @return bool
     */
    public function getBold()
    {
        return $this->container['bold'];
    }

    /*
     * Sets bold
     *
     * @param bool $bold Apply Font Bold Style
     *
     * @return $this
     */
    public function setBold($bold)
    {
        $this->container['bold'] = $bold;

        return $this;
    }

    /*
     * Gets italic
     *
     * @return bool
     */
    public function getItalic()
    {
        return $this->container['italic'];
    }

    /*
     * Sets italic
     *
     * @param bool $italic Apply Font Italic Style
     *
     * @return $this
     */
    public function setItalic($italic)
    {
        $this->container['italic'] = $italic;

        return $this;
    }

    /*
     * Gets underline
     *
     * @return bool
     */
    public function getUnderline()
    {
        return $this->container['underline'];
    }

    /*
     * Sets underline
     *
     * @param bool $underline Apply Underline Style
     *
     * @return $this
     */
    public function setUnderline($underline)
    {
        $this->container['underline'] = $underline;

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


