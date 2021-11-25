<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PdfDigitalSignatureAppearance.php">
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
 * PdfDigitalSignatureAppearance
 *
 * @description Describes appearance of Digital Signature are on PDF documents.
 */
class PdfDigitalSignatureAppearance extends SignatureAppearance 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PdfDigitalSignatureAppearance";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'background' => '\GroupDocs\Signature\Model\Color',
        'contactInfoLabel' => 'string',
        'dateSignedAtLabel' => 'string',
        'digitalSignedLabel' => 'string',
        'fontFamilyName' => 'string',
        'fontSize' => 'double',
        'locationLabel' => 'string',
        'reasonLabel' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'background' => null,
        'contactInfoLabel' => null,
        'dateSignedAtLabel' => null,
        'digitalSignedLabel' => null,
        'fontFamilyName' => null,
        'fontSize' => 'double',
        'locationLabel' => null,
        'reasonLabel' => null
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
        'background' => 'Background',
        'contactInfoLabel' => 'ContactInfoLabel',
        'dateSignedAtLabel' => 'DateSignedAtLabel',
        'digitalSignedLabel' => 'DigitalSignedLabel',
        'fontFamilyName' => 'FontFamilyName',
        'fontSize' => 'FontSize',
        'locationLabel' => 'LocationLabel',
        'reasonLabel' => 'ReasonLabel'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'background' => 'setBackground',
        'contactInfoLabel' => 'setContactInfoLabel',
        'dateSignedAtLabel' => 'setDateSignedAtLabel',
        'digitalSignedLabel' => 'setDigitalSignedLabel',
        'fontFamilyName' => 'setFontFamilyName',
        'fontSize' => 'setFontSize',
        'locationLabel' => 'setLocationLabel',
        'reasonLabel' => 'setReasonLabel'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'background' => 'getBackground',
        'contactInfoLabel' => 'getContactInfoLabel',
        'dateSignedAtLabel' => 'getDateSignedAtLabel',
        'digitalSignedLabel' => 'getDigitalSignedLabel',
        'fontFamilyName' => 'getFontFamilyName',
        'fontSize' => 'getFontSize',
        'locationLabel' => 'getLocationLabel',
        'reasonLabel' => 'getReasonLabel'
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

        $this->container['background'] = isset($data['background']) ? $data['background'] : null;
        $this->container['contactInfoLabel'] = isset($data['contactInfoLabel']) ? $data['contactInfoLabel'] : null;
        $this->container['dateSignedAtLabel'] = isset($data['dateSignedAtLabel']) ? $data['dateSignedAtLabel'] : null;
        $this->container['digitalSignedLabel'] = isset($data['digitalSignedLabel']) ? $data['digitalSignedLabel'] : null;
        $this->container['fontFamilyName'] = isset($data['fontFamilyName']) ? $data['fontFamilyName'] : null;
        $this->container['fontSize'] = isset($data['fontSize']) ? $data['fontSize'] : null;
        $this->container['locationLabel'] = isset($data['locationLabel']) ? $data['locationLabel'] : null;
        $this->container['reasonLabel'] = isset($data['reasonLabel']) ? $data['reasonLabel'] : null;
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
     * Gets background
     *
     * @return \GroupDocs\Signature\Model\Color
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /*
     * Sets background
     *
     * @param \GroupDocs\Signature\Model\Color $background Get or set background color of signature appearance. By default the value is SystemColors.Windows
     *
     * @return $this
     */
    public function setBackground($background)
    {
        $this->container['background'] = $background;

        return $this;
    }

    /*
     * Gets contactInfoLabel
     *
     * @return string
     */
    public function getContactInfoLabel()
    {
        return $this->container['contactInfoLabel'];
    }

    /*
     * Sets contactInfoLabel
     *
     * @param string $contactInfoLabel Gets or sets contact info label. Default value: \"Contact\". if this value is empty then no contact label will appear on digital signature area.
     *
     * @return $this
     */
    public function setContactInfoLabel($contactInfoLabel)
    {
        $this->container['contactInfoLabel'] = $contactInfoLabel;

        return $this;
    }

    /*
     * Gets dateSignedAtLabel
     *
     * @return string
     */
    public function getDateSignedAtLabel()
    {
        return $this->container['dateSignedAtLabel'];
    }

    /*
     * Sets dateSignedAtLabel
     *
     * @param string $dateSignedAtLabel Gets or sets date signed label. Default value: \"Date\".
     *
     * @return $this
     */
    public function setDateSignedAtLabel($dateSignedAtLabel)
    {
        $this->container['dateSignedAtLabel'] = $dateSignedAtLabel;

        return $this;
    }

    /*
     * Gets digitalSignedLabel
     *
     * @return string
     */
    public function getDigitalSignedLabel()
    {
        return $this->container['digitalSignedLabel'];
    }

    /*
     * Sets digitalSignedLabel
     *
     * @param string $digitalSignedLabel Gets or sets digital signed label. Default value: \"Digitally signed by\".
     *
     * @return $this
     */
    public function setDigitalSignedLabel($digitalSignedLabel)
    {
        $this->container['digitalSignedLabel'] = $digitalSignedLabel;

        return $this;
    }

    /*
     * Gets fontFamilyName
     *
     * @return string
     */
    public function getFontFamilyName()
    {
        return $this->container['fontFamilyName'];
    }

    /*
     * Sets fontFamilyName
     *
     * @param string $fontFamilyName Gets or sets the Font family name to display the labels. Default value is \"Arial\".
     *
     * @return $this
     */
    public function setFontFamilyName($fontFamilyName)
    {
        $this->container['fontFamilyName'] = $fontFamilyName;

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
     * @param double $fontSize Gets or sets the Font size to display the labels. Default value is 10.
     *
     * @return $this
     */
    public function setFontSize($fontSize)
    {
        $this->container['fontSize'] = $fontSize;

        return $this;
    }

    /*
     * Gets locationLabel
     *
     * @return string
     */
    public function getLocationLabel()
    {
        return $this->container['locationLabel'];
    }

    /*
     * Sets locationLabel
     *
     * @param string $locationLabel Gets or sets location label. Default value: \"Location\". if this value is empty then no location label will appear on digital signature area.
     *
     * @return $this
     */
    public function setLocationLabel($locationLabel)
    {
        $this->container['locationLabel'] = $locationLabel;

        return $this;
    }

    /*
     * Gets reasonLabel
     *
     * @return string
     */
    public function getReasonLabel()
    {
        return $this->container['reasonLabel'];
    }

    /*
     * Sets reasonLabel
     *
     * @param string $reasonLabel Gets or sets reason label. Default value: \"Reason\". if this value is empty then no reason label will appear on digital signature area.
     *
     * @return $this
     */
    public function setReasonLabel($reasonLabel)
    {
        $this->container['reasonLabel'] = $reasonLabel;

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


