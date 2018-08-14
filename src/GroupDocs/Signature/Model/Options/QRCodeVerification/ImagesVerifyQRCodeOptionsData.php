<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ImagesVerifyQRCodeOptionsData.php">
 *   Copyright (c) 2003-2018 Aspose Pty Ltd
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
/*
 * ImagesVerifyQRCodeOptionsData
 */

namespace GroupDocs\Signature\Model;
use \GroupDocs\Signature\ObjectSerializer;

/*
 * ImagesVerifyQRCodeOptionsData
 *
 * @description Represents the QRCode Verify Options for Images Documents.
 */
class ImagesVerifyQRCodeOptionsData extends VerifyQRCodeOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ImagesVerifyQRCodeOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'documentPageNumber' => 'int',
        'pagesSetup' => '\GroupDocs\Signature\Model\PagesSetupData',
        'verifyAllPages' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'documentPageNumber' => 'int32',
        'pagesSetup' => null,
        'verifyAllPages' => null
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
        'documentPageNumber' => 'DocumentPageNumber',
        'pagesSetup' => 'PagesSetup',
        'verifyAllPages' => 'VerifyAllPages'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'documentPageNumber' => 'setDocumentPageNumber',
        'pagesSetup' => 'setPagesSetup',
        'verifyAllPages' => 'setVerifyAllPages'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'documentPageNumber' => 'getDocumentPageNumber',
        'pagesSetup' => 'getPagesSetup',
        'verifyAllPages' => 'getVerifyAllPages'
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

        $this->container['documentPageNumber'] = isset($data['documentPageNumber']) ? $data['documentPageNumber'] : null;
        $this->container['pagesSetup'] = isset($data['pagesSetup']) ? $data['pagesSetup'] : null;
        $this->container['verifyAllPages'] = isset($data['verifyAllPages']) ? $data['verifyAllPages'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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

        return true;
    }


    /*
     * Gets documentPageNumber
     *
     * @return int
     */
    public function getDocumentPageNumber()
    {
        return $this->container['documentPageNumber'];
    }

    /*
     * Sets documentPageNumber
     *
     * @param int $documentPageNumber Gets or sets document page number for verifying. This property can only be used for multi-frames image formats (Tiff). Minimal value is 1.
     *
     * @return $this
     */
    public function setDocumentPageNumber($documentPageNumber)
    {
        $this->container['documentPageNumber'] = $documentPageNumber;

        return $this;
    }

    /*
     * Gets pagesSetup
     *
     * @return \GroupDocs\Signature\Model\PagesSetupData
     */
    public function getPagesSetup()
    {
        return $this->container['pagesSetup'];
    }

    /*
     * Sets pagesSetup
     *
     * @param \GroupDocs\Signature\Model\PagesSetupData $pagesSetup Options to specify pages to be verified. This property can only be used for multi-frames image formats (Tiff).
     *
     * @return $this
     */
    public function setPagesSetup($pagesSetup)
    {
        $this->container['pagesSetup'] = $pagesSetup;

        return $this;
    }

    /*
     * Gets verifyAllPages
     *
     * @return bool
     */
    public function getVerifyAllPages()
    {
        return $this->container['verifyAllPages'];
    }

    /*
     * Sets verifyAllPages
     *
     * @param bool $verifyAllPages Verify all document pages. This property can only be used for multi-frames image formats (Tiff).
     *
     * @return $this
     */
    public function setVerifyAllPages($verifyAllPages)
    {
        $this->container['verifyAllPages'] = $verifyAllPages;

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


