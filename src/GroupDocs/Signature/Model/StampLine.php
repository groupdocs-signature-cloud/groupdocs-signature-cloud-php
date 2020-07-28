<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="StampLine.php">
 *   Copyright (c) 2003-2020 Aspose Pty Ltd
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
 * StampLine
 *
 * @description Specify Stamp line properties
 */
class StampLine implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "StampLine";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'height' => 'int',
        'backgroundColor' => '\GroupDocs\Signature\Model\Color',
        'text' => 'string',
        'font' => '\GroupDocs\Signature\Model\SignatureFont',
        'textColor' => '\GroupDocs\Signature\Model\Color',
        'textBottomIntent' => 'int',
        'textRepeatType' => 'string',
        'outerBorder' => '\GroupDocs\Signature\Model\BorderLine',
        'innerBorder' => '\GroupDocs\Signature\Model\BorderLine',
        'visible' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'height' => 'int32',
        'backgroundColor' => null,
        'text' => null,
        'font' => null,
        'textColor' => null,
        'textBottomIntent' => 'int32',
        'textRepeatType' => null,
        'outerBorder' => null,
        'innerBorder' => null,
        'visible' => null
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
        'height' => 'Height',
        'backgroundColor' => 'BackgroundColor',
        'text' => 'Text',
        'font' => 'Font',
        'textColor' => 'TextColor',
        'textBottomIntent' => 'TextBottomIntent',
        'textRepeatType' => 'TextRepeatType',
        'outerBorder' => 'OuterBorder',
        'innerBorder' => 'InnerBorder',
        'visible' => 'Visible'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'height' => 'setHeight',
        'backgroundColor' => 'setBackgroundColor',
        'text' => 'setText',
        'font' => 'setFont',
        'textColor' => 'setTextColor',
        'textBottomIntent' => 'setTextBottomIntent',
        'textRepeatType' => 'setTextRepeatType',
        'outerBorder' => 'setOuterBorder',
        'innerBorder' => 'setInnerBorder',
        'visible' => 'setVisible'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'height' => 'getHeight',
        'backgroundColor' => 'getBackgroundColor',
        'text' => 'getText',
        'font' => 'getFont',
        'textColor' => 'getTextColor',
        'textBottomIntent' => 'getTextBottomIntent',
        'textRepeatType' => 'getTextRepeatType',
        'outerBorder' => 'getOuterBorder',
        'innerBorder' => 'getInnerBorder',
        'visible' => 'getVisible'
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

    const TEXT_REPEAT_TYPE_NONE = 'None';
    const TEXT_REPEAT_TYPE_FULL_TEXT_REPEAT = 'FullTextRepeat';
    const TEXT_REPEAT_TYPE_REPEAT_WITH_TRUNCATION = 'RepeatWithTruncation';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextRepeatTypeAllowableValues()
    {
        return [
            self::TEXT_REPEAT_TYPE_NONE,
            self::TEXT_REPEAT_TYPE_FULL_TEXT_REPEAT,
            self::TEXT_REPEAT_TYPE_REPEAT_WITH_TRUNCATION,
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
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['backgroundColor'] = isset($data['backgroundColor']) ? $data['backgroundColor'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['textColor'] = isset($data['textColor']) ? $data['textColor'] : null;
        $this->container['textBottomIntent'] = isset($data['textBottomIntent']) ? $data['textBottomIntent'] : null;
        $this->container['textRepeatType'] = isset($data['textRepeatType']) ? $data['textRepeatType'] : null;
        $this->container['outerBorder'] = isset($data['outerBorder']) ? $data['outerBorder'] : null;
        $this->container['innerBorder'] = isset($data['innerBorder']) ? $data['innerBorder'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['textBottomIntent'] === null) {
            $invalidProperties[] = "'textBottomIntent' can't be null";
        }
        if ($this->container['textRepeatType'] === null) {
            $invalidProperties[] = "'textRepeatType' can't be null";
        }
        $allowedValues = $this->getTextRepeatTypeAllowableValues();
        if (!in_array($this->container['textRepeatType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'textRepeatType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['visible'] === null) {
            $invalidProperties[] = "'visible' can't be null";
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

        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['textBottomIntent'] === null) {
            return false;
        }
        if ($this->container['textRepeatType'] === null) {
            return false;
        }
        $allowedValues = $this->getTextRepeatTypeAllowableValues();
        if (!in_array($this->container['textRepeatType'], $allowedValues)) {
            return false;
        }
        if ($this->container['visible'] === null) {
            return false;
        }
        return true;
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
     * @param int $height Gets or sets the line height on Stamp
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /*
     * Gets backgroundColor
     *
     * @return \GroupDocs\Signature\Model\Color
     */
    public function getBackgroundColor()
    {
        return $this->container['backgroundColor'];
    }

    /*
     * Sets backgroundColor
     *
     * @param \GroupDocs\Signature\Model\Color $backgroundColor Gets or sets the background color of signature
     *
     * @return $this
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->container['backgroundColor'] = $backgroundColor;

        return $this;
    }

    /*
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /*
     * Sets text
     *
     * @param string $text Gets or sets the text of stamp line
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /*
     * Gets font
     *
     * @return \GroupDocs\Signature\Model\SignatureFont
     */
    public function getFont()
    {
        return $this->container['font'];
    }

    /*
     * Sets font
     *
     * @param \GroupDocs\Signature\Model\SignatureFont $font Get or set Font of Stamp Line text
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }

    /*
     * Gets textColor
     *
     * @return \GroupDocs\Signature\Model\Color
     */
    public function getTextColor()
    {
        return $this->container['textColor'];
    }

    /*
     * Sets textColor
     *
     * @param \GroupDocs\Signature\Model\Color $textColor Gets or sets the text color of signature
     *
     * @return $this
     */
    public function setTextColor($textColor)
    {
        $this->container['textColor'] = $textColor;

        return $this;
    }

    /*
     * Gets textBottomIntent
     *
     * @return int
     */
    public function getTextBottomIntent()
    {
        return $this->container['textBottomIntent'];
    }

    /*
     * Sets textBottomIntent
     *
     * @param int $textBottomIntent Gets or sets the bottom intent of text
     *
     * @return $this
     */
    public function setTextBottomIntent($textBottomIntent)
    {
        $this->container['textBottomIntent'] = $textBottomIntent;

        return $this;
    }

    /*
     * Gets textRepeatType
     *
     * @return string
     */
    public function getTextRepeatType()
    {
        return $this->container['textRepeatType'];
    }

    /*
     * Sets textRepeatType
     *
     * @param string $textRepeatType Gets or sets text repeat type
     *
     * @return $this
     */
    public function setTextRepeatType($textRepeatType)
    {
        $allowedValues = $this->getTextRepeatTypeAllowableValues();
        if ((!is_numeric($textRepeatType) && !in_array($textRepeatType, $allowedValues)) || (is_numeric($textRepeatType) && !in_array($allowedValues[$textRepeatType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'textRepeatType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['textRepeatType'] = $textRepeatType;

        return $this;
    }

    /*
     * Gets outerBorder
     *
     * @return \GroupDocs\Signature\Model\BorderLine
     */
    public function getOuterBorder()
    {
        return $this->container['outerBorder'];
    }

    /*
     * Sets outerBorder
     *
     * @param \GroupDocs\Signature\Model\BorderLine $outerBorder Setup Outer Border
     *
     * @return $this
     */
    public function setOuterBorder($outerBorder)
    {
        $this->container['outerBorder'] = $outerBorder;

        return $this;
    }

    /*
     * Gets innerBorder
     *
     * @return \GroupDocs\Signature\Model\BorderLine
     */
    public function getInnerBorder()
    {
        return $this->container['innerBorder'];
    }

    /*
     * Sets innerBorder
     *
     * @param \GroupDocs\Signature\Model\BorderLine $innerBorder Setup Internal Border
     *
     * @return $this
     */
    public function setInnerBorder($innerBorder)
    {
        $this->container['innerBorder'] = $innerBorder;

        return $this;
    }

    /*
     * Gets visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /*
     * Sets visible
     *
     * @param bool $visible Get and set visibility of Stamp Line
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

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


