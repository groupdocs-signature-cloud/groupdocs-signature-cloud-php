<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ImagesSignTextOptionsData.php">
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
 * ImagesSignTextOptionsData
 */

namespace GroupDocs\Signature\Model;
use \GroupDocs\Signature\ObjectSerializer;

/*
 * ImagesSignTextOptionsData
 *
 * @description Represents the Text Sign Options for Images Documents.
 */
class ImagesSignTextOptionsData extends SignTextOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ImagesSignTextOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'opacity' => 'double',
        'signatureImplementation' => 'string',
        'borderDashStyle' => 'string',
        'borderTransparency' => 'double',
        'borderWeight' => 'double',
        'backgroundTransparency' => 'double'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'opacity' => 'double',
        'signatureImplementation' => null,
        'borderDashStyle' => null,
        'borderTransparency' => 'double',
        'borderWeight' => 'double',
        'backgroundTransparency' => 'double'
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
        'signatureImplementation' => 'SignatureImplementation',
        'borderDashStyle' => 'BorderDashStyle',
        'borderTransparency' => 'BorderTransparency',
        'borderWeight' => 'BorderWeight',
        'backgroundTransparency' => 'BackgroundTransparency'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opacity' => 'setOpacity',
        'signatureImplementation' => 'setSignatureImplementation',
        'borderDashStyle' => 'setBorderDashStyle',
        'borderTransparency' => 'setBorderTransparency',
        'borderWeight' => 'setBorderWeight',
        'backgroundTransparency' => 'setBackgroundTransparency'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opacity' => 'getOpacity',
        'signatureImplementation' => 'getSignatureImplementation',
        'borderDashStyle' => 'getBorderDashStyle',
        'borderTransparency' => 'getBorderTransparency',
        'borderWeight' => 'getBorderWeight',
        'backgroundTransparency' => 'getBackgroundTransparency'
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

    const SIGNATURE_IMPLEMENTATION_TEXT_AS_IMAGE = 'TextAsImage';
    const SIGNATURE_IMPLEMENTATION_WATERMARK = 'Watermark';
    const BORDER_DASH_STYLE__DEFAULT = 'Default';
    const BORDER_DASH_STYLE_SOLID = 'Solid';
    const BORDER_DASH_STYLE_SHORT_DASH = 'ShortDash';
    const BORDER_DASH_STYLE_SHORT_DOT = 'ShortDot';
    const BORDER_DASH_STYLE_SHORT_DASH_DOT = 'ShortDashDot';
    const BORDER_DASH_STYLE_SHORT_DASH_DOT_DOT = 'ShortDashDotDot';
    const BORDER_DASH_STYLE_DOT = 'Dot';
    const BORDER_DASH_STYLE_DASH = 'Dash';
    const BORDER_DASH_STYLE_LONG_DASH = 'LongDash';
    const BORDER_DASH_STYLE_DASH_DOT = 'DashDot';
    const BORDER_DASH_STYLE_LONG_DASH_DOT = 'LongDashDot';
    const BORDER_DASH_STYLE_LONG_DASH_DOT_DOT = 'LongDashDotDot';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignatureImplementationAllowableValues()
    {
        return [
            self::SIGNATURE_IMPLEMENTATION_TEXT_AS_IMAGE,
            self::SIGNATURE_IMPLEMENTATION_WATERMARK,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBorderDashStyleAllowableValues()
    {
        return [
            self::BORDER_DASH_STYLE__DEFAULT,
            self::BORDER_DASH_STYLE_SOLID,
            self::BORDER_DASH_STYLE_SHORT_DASH,
            self::BORDER_DASH_STYLE_SHORT_DOT,
            self::BORDER_DASH_STYLE_SHORT_DASH_DOT,
            self::BORDER_DASH_STYLE_SHORT_DASH_DOT_DOT,
            self::BORDER_DASH_STYLE_DOT,
            self::BORDER_DASH_STYLE_DASH,
            self::BORDER_DASH_STYLE_LONG_DASH,
            self::BORDER_DASH_STYLE_DASH_DOT,
            self::BORDER_DASH_STYLE_LONG_DASH_DOT,
            self::BORDER_DASH_STYLE_LONG_DASH_DOT_DOT,
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
        $this->container['signatureImplementation'] = isset($data['signatureImplementation']) ? $data['signatureImplementation'] : null;
        $this->container['borderDashStyle'] = isset($data['borderDashStyle']) ? $data['borderDashStyle'] : null;
        $this->container['borderTransparency'] = isset($data['borderTransparency']) ? $data['borderTransparency'] : null;
        $this->container['borderWeight'] = isset($data['borderWeight']) ? $data['borderWeight'] : null;
        $this->container['backgroundTransparency'] = isset($data['backgroundTransparency']) ? $data['backgroundTransparency'] : null;
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

        $allowedValues = $this->getBorderDashStyleAllowableValues();
        if (!in_array($this->container['borderDashStyle'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'borderDashStyle', must be one of '%s'",
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
        $allowedValues = $this->getBorderDashStyleAllowableValues();
        if (!in_array($this->container['borderDashStyle'], $allowedValues)) {
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
     * Gets borderDashStyle
     *
     * @return string
     */
    public function getBorderDashStyle()
    {
        return $this->container['borderDashStyle'];
    }

    /*
     * Sets borderDashStyle
     *
     * @param string $borderDashStyle Gets or sets the signature border style.
     *
     * @return $this
     */
    public function setBorderDashStyle($borderDashStyle)
    {
        $allowedValues = $this->getBorderDashStyleAllowableValues();
        if ((!is_numeric($borderDashStyle) && !in_array($borderDashStyle, $allowedValues)) || (is_numeric($borderDashStyle) && !in_array($allowedValues[$borderDashStyle], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'borderDashStyle', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['borderDashStyle'] = $borderDashStyle;

        return $this;
    }

    /*
     * Gets borderTransparency
     *
     * @return double
     */
    public function getBorderTransparency()
    {
        return $this->container['borderTransparency'];
    }

    /*
     * Sets borderTransparency
     *
     * @param double $borderTransparency Gets or sets the signature border transparency (value from 0.0 (opaque) through 1.0 (clear)).
     *
     * @return $this
     */
    public function setBorderTransparency($borderTransparency)
    {
        $this->container['borderTransparency'] = $borderTransparency;

        return $this;
    }

    /*
     * Gets borderWeight
     *
     * @return double
     */
    public function getBorderWeight()
    {
        return $this->container['borderWeight'];
    }

    /*
     * Sets borderWeight
     *
     * @param double $borderWeight Gets or sets the weight of the signature border.
     *
     * @return $this
     */
    public function setBorderWeight($borderWeight)
    {
        $this->container['borderWeight'] = $borderWeight;

        return $this;
    }

    /*
     * Gets backgroundTransparency
     *
     * @return double
     */
    public function getBackgroundTransparency()
    {
        return $this->container['backgroundTransparency'];
    }

    /*
     * Sets backgroundTransparency
     *
     * @param double $backgroundTransparency Gets or sets the signature background transparency (value from 0.0 (opaque) through 1.0 (clear)).
     *
     * @return $this
     */
    public function setBackgroundTransparency($backgroundTransparency)
    {
        $this->container['backgroundTransparency'] = $backgroundTransparency;

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


