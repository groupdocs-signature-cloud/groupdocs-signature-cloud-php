<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="DigitalSignature.php">
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
use \GroupDocs\Signature\ObjectSerializer;

/*
 * DigitalSignature
 *
 * @description Contains digital Signature properties
 */
class DigitalSignature extends Signature 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DigitalSignature";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'comments' => 'string',
        'isValid' => 'bool',
        'signTime' => '\DateTime',
        'pdfDigitalSignature' => '\GroupDocs\Signature\Model\PdfDigitalSignature'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'comments' => null,
        'isValid' => null,
        'signTime' => 'date-time',
        'pdfDigitalSignature' => null
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
        'comments' => 'Comments',
        'isValid' => 'IsValid',
        'signTime' => 'SignTime',
        'pdfDigitalSignature' => 'PdfDigitalSignature'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comments' => 'setComments',
        'isValid' => 'setIsValid',
        'signTime' => 'setSignTime',
        'pdfDigitalSignature' => 'setPdfDigitalSignature'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comments' => 'getComments',
        'isValid' => 'getIsValid',
        'signTime' => 'getSignTime',
        'pdfDigitalSignature' => 'getPdfDigitalSignature'
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

    

    


    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['isValid'] = isset($data['isValid']) ? $data['isValid'] : null;
        $this->container['signTime'] = isset($data['signTime']) ? $data['signTime'] : null;
        $this->container['pdfDigitalSignature'] = isset($data['pdfDigitalSignature']) ? $data['pdfDigitalSignature'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['isValid'] === null) {
            $invalidProperties[] = "'isValid' can't be null";
        }
        if ($this->container['signTime'] === null) {
            $invalidProperties[] = "'signTime' can't be null";
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

        if ($this->container['isValid'] === null) {
            return false;
        }
        if ($this->container['signTime'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /*
     * Sets comments
     *
     * @param string $comments Gets or sets the signing purpose comment
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /*
     * Gets isValid
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->container['isValid'];
    }

    /*
     * Sets isValid
     *
     * @param bool $isValid Keeps true if this digital signature is valid and the document has not been tampered with
     *
     * @return $this
     */
    public function setIsValid($isValid)
    {
        $this->container['isValid'] = $isValid;

        return $this;
    }

    /*
     * Gets signTime
     *
     * @return \DateTime
     */
    public function getSignTime()
    {
        return $this->container['signTime'];
    }

    /*
     * Sets signTime
     *
     * @param \DateTime $signTime Gets or sets the time the document was signed
     *
     * @return $this
     */
    public function setSignTime($signTime)
    {
        $this->container['signTime'] = $signTime;

        return $this;
    }

    /*
     * Gets pdfDigitalSignature
     *
     * @return \GroupDocs\Signature\Model\PdfDigitalSignature
     */
    public function getPdfDigitalSignature()
    {
        return $this->container['pdfDigitalSignature'];
    }

    /*
     * Sets pdfDigitalSignature
     *
     * @param \GroupDocs\Signature\Model\PdfDigitalSignature $pdfDigitalSignature Pdf digital signature properties
     *
     * @return $this
     */
    public function setPdfDigitalSignature($pdfDigitalSignature)
    {
        $this->container['pdfDigitalSignature'] = $pdfDigitalSignature;

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


