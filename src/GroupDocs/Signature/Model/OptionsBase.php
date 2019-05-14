<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="OptionsBase.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
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
 * OptionsBase
 *
 * @description Base container class for all possible options data
 */
class OptionsBase implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "OptionsBase";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'documentType' => 'string',
        'signatureType' => 'string',
        'page' => 'int',
        'allPages' => 'bool',
        'pagesSetup' => '\GroupDocs\Signature\Model\PagesSetup'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'documentType' => null,
        'signatureType' => null,
        'page' => 'int32',
        'allPages' => null,
        'pagesSetup' => null
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
        'documentType' => 'DocumentType',
        'signatureType' => 'SignatureType',
        'page' => 'Page',
        'allPages' => 'AllPages',
        'pagesSetup' => 'PagesSetup'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'documentType' => 'setDocumentType',
        'signatureType' => 'setSignatureType',
        'page' => 'setPage',
        'allPages' => 'setAllPages',
        'pagesSetup' => 'setPagesSetup'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'documentType' => 'getDocumentType',
        'signatureType' => 'getSignatureType',
        'page' => 'getPage',
        'allPages' => 'getAllPages',
        'pagesSetup' => 'getPagesSetup'
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

    const DOCUMENT_TYPE_IMAGE = 'Image';
    const DOCUMENT_TYPE_PDF = 'Pdf';
    const DOCUMENT_TYPE_PRESENTATION = 'Presentation';
    const DOCUMENT_TYPE_SPREADSHEET = 'Spreadsheet';
    const DOCUMENT_TYPE_WORD_PROCESSING = 'WordProcessing';
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
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE_IMAGE,
            self::DOCUMENT_TYPE_PDF,
            self::DOCUMENT_TYPE_PRESENTATION,
            self::DOCUMENT_TYPE_SPREADSHEET,
            self::DOCUMENT_TYPE_WORD_PROCESSING,
        ];
    }
    
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
        $this->container['documentType'] = isset($data['documentType']) ? $data['documentType'] : null;
        $this->container['signatureType'] = isset($data['signatureType']) ? $data['signatureType'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['allPages'] = isset($data['allPages']) ? $data['allPages'] : null;
        $this->container['pagesSetup'] = isset($data['pagesSetup']) ? $data['pagesSetup'] : null;

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

        if ($this->container['documentType'] === null) {
            $invalidProperties[] = "'documentType' can't be null";
        }
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($this->container['documentType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'documentType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        if ($this->container['allPages'] === null) {
            $invalidProperties[] = "'allPages' can't be null";
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

        if ($this->container['documentType'] === null) {
            return false;
        }
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!in_array($this->container['documentType'], $allowedValues)) {
            return false;
        }
        if ($this->container['signatureType'] === null) {
            return false;
        }
        $allowedValues = $this->getSignatureTypeAllowableValues();
        if (!in_array($this->container['signatureType'], $allowedValues)) {
            return false;
        }
        if ($this->container['allPages'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets documentType
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->container['documentType'];
    }

    /*
     * Sets documentType
     *
     * @param string $documentType Specifies the type of document to process
     *
     * @return $this
     */
    public function setDocumentType($documentType)
    {
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if ((!is_numeric($documentType) && !in_array($documentType, $allowedValues)) || (is_numeric($documentType) && !in_array($allowedValues[$documentType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'documentType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['documentType'] = $documentType;

        return $this;
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
     * @param string $signatureType Specifies the signature type of processing
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
     * Gets page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /*
     * Sets page
     *
     * @param int $page Gets or sets a document page number for processing. Value is optional
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /*
     * Gets allPages
     *
     * @return bool
     */
    public function getAllPages()
    {
        return $this->container['allPages'];
    }

    /*
     * Sets allPages
     *
     * @param bool $allPages Process all document pages. Type of processing depends on SignatureType For Images Document Type it can be used only for multi-frames images like .tiff
     *
     * @return $this
     */
    public function setAllPages($allPages)
    {
        $this->container['allPages'] = $allPages;

        return $this;
    }

    /*
     * Gets pagesSetup
     *
     * @return \GroupDocs\Signature\Model\PagesSetup
     */
    public function getPagesSetup()
    {
        return $this->container['pagesSetup'];
    }

    /*
     * Sets pagesSetup
     *
     * @param \GroupDocs\Signature\Model\PagesSetup $pagesSetup Options to specify pages for processing
     *
     * @return $this
     */
    public function setPagesSetup($pagesSetup)
    {
        $this->container['pagesSetup'] = $pagesSetup;

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


