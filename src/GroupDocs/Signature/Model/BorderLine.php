<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="BorderLine.php">
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
 * BorderLine
 *
 * @description Instance to keep Border line properties
 */
class BorderLine implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "BorderLine";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'style' => 'string',
        'transparency' => 'double',
        'weight' => 'double',
        'color' => '\GroupDocs\Signature\Model\Color',
        'visible' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'style' => null,
        'transparency' => 'double',
        'weight' => 'double',
        'color' => null,
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
        'style' => 'Style',
        'transparency' => 'Transparency',
        'weight' => 'Weight',
        'color' => 'Color',
        'visible' => 'Visible'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'style' => 'setStyle',
        'transparency' => 'setTransparency',
        'weight' => 'setWeight',
        'color' => 'setColor',
        'visible' => 'setVisible'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'style' => 'getStyle',
        'transparency' => 'getTransparency',
        'weight' => 'getWeight',
        'color' => 'getColor',
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

    const STYLE_SOLID = 'Solid';
    const STYLE_SHORT_DASH = 'ShortDash';
    const STYLE_SHORT_DOT = 'ShortDot';
    const STYLE_SHORT_DASH_DOT = 'ShortDashDot';
    const STYLE_SHORT_DASH_DOT_DOT = 'ShortDashDotDot';
    const STYLE_DOT = 'Dot';
    const STYLE_DASH = 'Dash';
    const STYLE_LONG_DASH = 'LongDash';
    const STYLE_DASH_DOT = 'DashDot';
    const STYLE_LONG_DASH_DOT = 'LongDashDot';
    const STYLE_LONG_DASH_DOT_DOT = 'LongDashDotDot';
    const STYLE_ROUND_DOT = 'RoundDot';
    const STYLE_SQUARE_DOT = 'SquareDot';
    const STYLE_DASH_DOT_DOT = 'DashDotDot';
    const STYLE_DASH_LONG_DASH = 'DashLongDash';
    const STYLE_DASH_LONG_DASH_DOT = 'DashLongDashDot';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStyleAllowableValues()
    {
        return [
            self::STYLE_SOLID,
            self::STYLE_SHORT_DASH,
            self::STYLE_SHORT_DOT,
            self::STYLE_SHORT_DASH_DOT,
            self::STYLE_SHORT_DASH_DOT_DOT,
            self::STYLE_DOT,
            self::STYLE_DASH,
            self::STYLE_LONG_DASH,
            self::STYLE_DASH_DOT,
            self::STYLE_LONG_DASH_DOT,
            self::STYLE_LONG_DASH_DOT_DOT,
            self::STYLE_ROUND_DOT,
            self::STYLE_SQUARE_DOT,
            self::STYLE_DASH_DOT_DOT,
            self::STYLE_DASH_LONG_DASH,
            self::STYLE_DASH_LONG_DASH_DOT,
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
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['transparency'] = isset($data['transparency']) ? $data['transparency'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
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

        if ($this->container['style'] === null) {
            $invalidProperties[] = "'style' can't be null";
        }
        $allowedValues = $this->getStyleAllowableValues();
        if (!in_array($this->container['style'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'style', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['transparency'] === null) {
            $invalidProperties[] = "'transparency' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
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

        if ($this->container['style'] === null) {
            return false;
        }
        $allowedValues = $this->getStyleAllowableValues();
        if (!in_array($this->container['style'], $allowedValues)) {
            return false;
        }
        if ($this->container['transparency'] === null) {
            return false;
        }
        if ($this->container['weight'] === null) {
            return false;
        }
        if ($this->container['visible'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /*
     * Sets style
     *
     * @param string $style Gets or sets the signature border style
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $allowedValues = $this->getStyleAllowableValues();
        if ((!is_numeric($style) && !in_array($style, $allowedValues)) || (is_numeric($style) && !in_array($allowedValues[$style], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'style', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['style'] = $style;

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
     * @param double $transparency Gets or sets the signature border transparency (value from 0.0 (opaque) through 1.0 (clear))
     *
     * @return $this
     */
    public function setTransparency($transparency)
    {
        $this->container['transparency'] = $transparency;

        return $this;
    }

    /*
     * Gets weight
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /*
     * Sets weight
     *
     * @param double $weight Gets or sets the weight of the signature border
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /*
     * Gets color
     *
     * @return \GroupDocs\Signature\Model\Color
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /*
     * Sets color
     *
     * @param \GroupDocs\Signature\Model\Color $color Gets or sets the border color of signature
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

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
     * @param bool $visible Gets or sets the border visibility
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


