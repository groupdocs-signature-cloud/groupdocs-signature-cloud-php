<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SignQRCodeOptionsData.php">
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
 * SignQRCodeOptionsData
 */

namespace GroupDocs\Signature\Model;
use \GroupDocs\Signature\ObjectSerializer;

/*
 * SignQRCodeOptionsData
 *
 * @description Represents the QRCode Signature Options.
 */
class SignQRCodeOptionsData extends SignTextOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SignQRCodeOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'qRCodeTypeName' => 'string',
        'borderVisiblity' => 'bool',
        'borderDashStyle' => 'string',
        'borderWeight' => 'double',
        'opacity' => 'double',
        'codeTextAlignment' => 'string',
        'innerMargins' => '\GroupDocs\Signature\Model\PaddingData'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'qRCodeTypeName' => null,
        'borderVisiblity' => null,
        'borderDashStyle' => null,
        'borderWeight' => 'double',
        'opacity' => 'double',
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
        'qRCodeTypeName' => 'QRCodeTypeName',
        'borderVisiblity' => 'BorderVisiblity',
        'borderDashStyle' => 'BorderDashStyle',
        'borderWeight' => 'BorderWeight',
        'opacity' => 'Opacity',
        'codeTextAlignment' => 'CodeTextAlignment',
        'innerMargins' => 'InnerMargins'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'qRCodeTypeName' => 'setQRCodeTypeName',
        'borderVisiblity' => 'setBorderVisiblity',
        'borderDashStyle' => 'setBorderDashStyle',
        'borderWeight' => 'setBorderWeight',
        'opacity' => 'setOpacity',
        'codeTextAlignment' => 'setCodeTextAlignment',
        'innerMargins' => 'setInnerMargins'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'qRCodeTypeName' => 'getQRCodeTypeName',
        'borderVisiblity' => 'getBorderVisiblity',
        'borderDashStyle' => 'getBorderDashStyle',
        'borderWeight' => 'getBorderWeight',
        'opacity' => 'getOpacity',
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

    const BORDER_DASH_STYLE_DASH = 'Dash';
    const BORDER_DASH_STYLE_DASH_DOT = 'DashDot';
    const BORDER_DASH_STYLE_DASH_DOT_DOT = 'DashDotDot';
    const BORDER_DASH_STYLE_DASH_LONG_DASH = 'DashLongDash';
    const BORDER_DASH_STYLE_DASH_LONG_DASH_DOT = 'DashLongDashDot';
    const BORDER_DASH_STYLE_ROUND_DOT = 'RoundDot';
    const BORDER_DASH_STYLE_SOLID = 'Solid';
    const BORDER_DASH_STYLE_SQUARE_DOT = 'SquareDot';
    const CODE_TEXT_ALIGNMENT_NONE = 'None';
    const CODE_TEXT_ALIGNMENT_ABOVE = 'Above';
    const CODE_TEXT_ALIGNMENT_BELOW = 'Below';
    const CODE_TEXT_ALIGNMENT_RIGHT = 'Right';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBorderDashStyleAllowableValues()
    {
        return [
            self::BORDER_DASH_STYLE_DASH,
            self::BORDER_DASH_STYLE_DASH_DOT,
            self::BORDER_DASH_STYLE_DASH_DOT_DOT,
            self::BORDER_DASH_STYLE_DASH_LONG_DASH,
            self::BORDER_DASH_STYLE_DASH_LONG_DASH_DOT,
            self::BORDER_DASH_STYLE_ROUND_DOT,
            self::BORDER_DASH_STYLE_SOLID,
            self::BORDER_DASH_STYLE_SQUARE_DOT,
        ];
    }
    
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

        $this->container['qRCodeTypeName'] = isset($data['qRCodeTypeName']) ? $data['qRCodeTypeName'] : null;
        $this->container['borderVisiblity'] = isset($data['borderVisiblity']) ? $data['borderVisiblity'] : null;
        $this->container['borderDashStyle'] = isset($data['borderDashStyle']) ? $data['borderDashStyle'] : null;
        $this->container['borderWeight'] = isset($data['borderWeight']) ? $data['borderWeight'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
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

        $allowedValues = $this->getBorderDashStyleAllowableValues();
        if (!in_array($this->container['borderDashStyle'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'borderDashStyle', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        $allowedValues = $this->getBorderDashStyleAllowableValues();
        if (!in_array($this->container['borderDashStyle'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getCodeTextAlignmentAllowableValues();
        if (!in_array($this->container['codeTextAlignment'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets qRCodeTypeName
     *
     * @return string
     */
    public function getQRCodeTypeName()
    {
        return $this->container['qRCodeTypeName'];
    }

    /*
     * Sets qRCodeTypeName
     *
     * @param string $qRCodeTypeName Get or set QRCode type. Pick one from supported QRCode Types list.
     *
     * @return $this
     */
    public function setQRCodeTypeName($qRCodeTypeName)
    {
        $this->container['qRCodeTypeName'] = $qRCodeTypeName;

        return $this;
    }

    /*
     * Gets borderVisiblity
     *
     * @return bool
     */
    public function getBorderVisiblity()
    {
        return $this->container['borderVisiblity'];
    }

    /*
     * Sets borderVisiblity
     *
     * @param bool $borderVisiblity Gets or sets the signature border visibility.
     *
     * @return $this
     */
    public function setBorderVisiblity($borderVisiblity)
    {
        $this->container['borderVisiblity'] = $borderVisiblity;

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
     * @param string $codeTextAlignment Gets or sets the alignment of text in the result QRCode. Default value is None.
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
     * @return \GroupDocs\Signature\Model\PaddingData
     */
    public function getInnerMargins()
    {
        return $this->container['innerMargins'];
    }

    /*
     * Sets innerMargins
     *
     * @param \GroupDocs\Signature\Model\PaddingData $innerMargins Gets or sets the space between QRCode elements and result image borders.
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


