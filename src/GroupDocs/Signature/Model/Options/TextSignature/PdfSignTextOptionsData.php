<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PdfSignTextOptionsData.php">
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
 * PdfSignTextOptionsData
 */

namespace GroupDocs\Signature\Model;
use \GroupDocs\Signature\ObjectSerializer;

/*
 * PdfSignTextOptionsData
 *
 * @description Represents the Text Sign Options for PDF Documents.
 */
class PdfSignTextOptionsData extends SignTextOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PdfSignTextOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'opacity' => 'double',
        'signatureID' => 'int',
        'signatureImplementation' => 'string',
        'formTextFieldTitle' => 'string',
        'formTextFieldType' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'opacity' => 'double',
        'signatureID' => 'int32',
        'signatureImplementation' => null,
        'formTextFieldTitle' => null,
        'formTextFieldType' => null
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
        'opacity' => 'Opacity',
        'signatureID' => 'SignatureID',
        'signatureImplementation' => 'SignatureImplementation',
        'formTextFieldTitle' => 'FormTextFieldTitle',
        'formTextFieldType' => 'FormTextFieldType'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opacity' => 'setOpacity',
        'signatureID' => 'setSignatureID',
        'signatureImplementation' => 'setSignatureImplementation',
        'formTextFieldTitle' => 'setFormTextFieldTitle',
        'formTextFieldType' => 'setFormTextFieldType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opacity' => 'getOpacity',
        'signatureID' => 'getSignatureID',
        'signatureImplementation' => 'getSignatureImplementation',
        'formTextFieldTitle' => 'getFormTextFieldTitle',
        'formTextFieldType' => 'getFormTextFieldType'
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

    const SIGNATURE_IMPLEMENTATION_STAMP = 'Stamp';
    const SIGNATURE_IMPLEMENTATION_IMAGE = 'Image';
    const SIGNATURE_IMPLEMENTATION_ANNOTATION = 'Annotation';
    const SIGNATURE_IMPLEMENTATION_STICKER = 'Sticker';
    const SIGNATURE_IMPLEMENTATION_TEXT_TO_FORM_FIELD = 'TextToFormField';
    const SIGNATURE_IMPLEMENTATION_WATERMARK = 'Watermark';
    const FORM_TEXT_FIELD_TYPE_ALL_TEXT_TYPES = 'AllTextTypes';
    const FORM_TEXT_FIELD_TYPE_PLAIN_TEXT = 'PlainText';
    const FORM_TEXT_FIELD_TYPE_RICH_TEXT = 'RichText';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignatureImplementationAllowableValues()
    {
        return [
            self::SIGNATURE_IMPLEMENTATION_STAMP,
            self::SIGNATURE_IMPLEMENTATION_IMAGE,
            self::SIGNATURE_IMPLEMENTATION_ANNOTATION,
            self::SIGNATURE_IMPLEMENTATION_STICKER,
            self::SIGNATURE_IMPLEMENTATION_TEXT_TO_FORM_FIELD,
            self::SIGNATURE_IMPLEMENTATION_WATERMARK,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormTextFieldTypeAllowableValues()
    {
        return [
            self::FORM_TEXT_FIELD_TYPE_ALL_TEXT_TYPES,
            self::FORM_TEXT_FIELD_TYPE_PLAIN_TEXT,
            self::FORM_TEXT_FIELD_TYPE_RICH_TEXT,
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

        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
        $this->container['signatureID'] = isset($data['signatureID']) ? $data['signatureID'] : null;
        $this->container['signatureImplementation'] = isset($data['signatureImplementation']) ? $data['signatureImplementation'] : null;
        $this->container['formTextFieldTitle'] = isset($data['formTextFieldTitle']) ? $data['formTextFieldTitle'] : null;
        $this->container['formTextFieldType'] = isset($data['formTextFieldType']) ? $data['formTextFieldType'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getSignatureImplementationAllowableValues();
        if (!in_array($this->container['signatureImplementation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'signatureImplementation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFormTextFieldTypeAllowableValues();
        if (!in_array($this->container['formTextFieldType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'formTextFieldType', must be one of '%s'",
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

        $allowedValues = $this->getSignatureImplementationAllowableValues();
        if (!in_array($this->container['signatureImplementation'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getFormTextFieldTypeAllowableValues();
        if (!in_array($this->container['formTextFieldType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets opacity
     *
     * @return double
     */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /*
     * Sets opacity
     *
     * @param double $opacity Gets or sets the signature opacity (value from 0.0 (clear) through 1.0 (opaque)). By default the value is 1.0.
     *
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;

        return $this;
    }

    /*
     * Gets signatureID
     *
     * @return int
     */
    public function getSignatureID()
    {
        return $this->container['signatureID'];
    }

    /*
     * Sets signatureID
     *
     * @param int $signatureID Gets or sets the unique ID of signature. It can be used in signature verification options.
     *
     * @return $this
     */
    public function setSignatureID($signatureID)
    {
        $this->container['signatureID'] = $signatureID;

        return $this;
    }

    /*
     * Gets signatureImplementation
     *
     * @return string
     */
    public function getSignatureImplementation()
    {
        return $this->container['signatureImplementation'];
    }

    /*
     * Sets signatureImplementation
     *
     * @param string $signatureImplementation Gets or sets the type of text signature implementation.
     *
     * @return $this
     */
    public function setSignatureImplementation($signatureImplementation)
    {
        $allowedValues = $this->getSignatureImplementationAllowableValues();
        if ((!is_numeric($signatureImplementation) && !in_array($signatureImplementation, $allowedValues)) || (is_numeric($signatureImplementation) && !in_array($allowedValues[$signatureImplementation], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'signatureImplementation', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['signatureImplementation'] = $signatureImplementation;

        return $this;
    }

    /*
     * Gets formTextFieldTitle
     *
     * @return string
     */
    public function getFormTextFieldTitle()
    {
        return $this->container['formTextFieldTitle'];
    }

    /*
     * Sets formTextFieldTitle
     *
     * @param string $formTextFieldTitle Gets or sets the title of text form field to put text signature into it. This property could be used only with PdfTextSignatureImplementation = TextToFormField.
     *
     * @return $this
     */
    public function setFormTextFieldTitle($formTextFieldTitle)
    {
        $this->container['formTextFieldTitle'] = $formTextFieldTitle;

        return $this;
    }

    /*
     * Gets formTextFieldType
     *
     * @return string
     */
    public function getFormTextFieldType()
    {
        return $this->container['formTextFieldType'];
    }

    /*
     * Sets formTextFieldType
     *
     * @param string $formTextFieldType Gets or sets the type of form field to put text signature into it. This property could be used only with PdfTextSignatureImplementation = TextToFormField. Value by default is AllTextTypes.
     *
     * @return $this
     */
    public function setFormTextFieldType($formTextFieldType)
    {
        $allowedValues = $this->getFormTextFieldTypeAllowableValues();
        if ((!is_numeric($formTextFieldType) && !in_array($formTextFieldType, $allowedValues)) || (is_numeric($formTextFieldType) && !in_array($allowedValues[$formTextFieldType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'formTextFieldType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['formTextFieldType'] = $formTextFieldType;

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


