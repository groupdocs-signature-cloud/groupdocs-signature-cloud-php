<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SignStampOptions.php">
 *   Copyright (c) Aspose Pty Ltd
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
 * SignStampOptions
 *
 * @description Represents the Stamp signature options
 */
class SignStampOptions extends SignImageOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SignStampOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'outerLines' => '\GroupDocs\Signature\Model\StampLine[]',
        'innerLines' => '\GroupDocs\Signature\Model\StampLine[]',
        'backgroundColor' => '\GroupDocs\Signature\Model\Color',
        'backgroundBrush' => '\GroupDocs\Signature\Model\Brush',
        'backgroundColorCropType' => 'string',
        'backgroundImageCropType' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'outerLines' => null,
        'innerLines' => null,
        'backgroundColor' => null,
        'backgroundBrush' => null,
        'backgroundColorCropType' => null,
        'backgroundImageCropType' => null
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
        'outerLines' => 'OuterLines',
        'innerLines' => 'InnerLines',
        'backgroundColor' => 'BackgroundColor',
        'backgroundBrush' => 'BackgroundBrush',
        'backgroundColorCropType' => 'BackgroundColorCropType',
        'backgroundImageCropType' => 'BackgroundImageCropType'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'outerLines' => 'setOuterLines',
        'innerLines' => 'setInnerLines',
        'backgroundColor' => 'setBackgroundColor',
        'backgroundBrush' => 'setBackgroundBrush',
        'backgroundColorCropType' => 'setBackgroundColorCropType',
        'backgroundImageCropType' => 'setBackgroundImageCropType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'outerLines' => 'getOuterLines',
        'innerLines' => 'getInnerLines',
        'backgroundColor' => 'getBackgroundColor',
        'backgroundBrush' => 'getBackgroundBrush',
        'backgroundColorCropType' => 'getBackgroundColorCropType',
        'backgroundImageCropType' => 'getBackgroundImageCropType'
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

    const BACKGROUND_COLOR_CROP_TYPE_NONE = 'None';
    const BACKGROUND_COLOR_CROP_TYPE_OUTER_AREA = 'OuterArea';
    const BACKGROUND_COLOR_CROP_TYPE_MIDDLE_AREA = 'MiddleArea';
    const BACKGROUND_COLOR_CROP_TYPE_INNER_AREA = 'InnerArea';
    const BACKGROUND_IMAGE_CROP_TYPE_NONE = 'None';
    const BACKGROUND_IMAGE_CROP_TYPE_OUTER_AREA = 'OuterArea';
    const BACKGROUND_IMAGE_CROP_TYPE_MIDDLE_AREA = 'MiddleArea';
    const BACKGROUND_IMAGE_CROP_TYPE_INNER_AREA = 'InnerArea';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBackgroundColorCropTypeAllowableValues()
    {
        return [
            self::BACKGROUND_COLOR_CROP_TYPE_NONE,
            self::BACKGROUND_COLOR_CROP_TYPE_OUTER_AREA,
            self::BACKGROUND_COLOR_CROP_TYPE_MIDDLE_AREA,
            self::BACKGROUND_COLOR_CROP_TYPE_INNER_AREA,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBackgroundImageCropTypeAllowableValues()
    {
        return [
            self::BACKGROUND_IMAGE_CROP_TYPE_NONE,
            self::BACKGROUND_IMAGE_CROP_TYPE_OUTER_AREA,
            self::BACKGROUND_IMAGE_CROP_TYPE_MIDDLE_AREA,
            self::BACKGROUND_IMAGE_CROP_TYPE_INNER_AREA,
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

        $this->container['outerLines'] = isset($data['outerLines']) ? $data['outerLines'] : null;
        $this->container['innerLines'] = isset($data['innerLines']) ? $data['innerLines'] : null;
        $this->container['backgroundColor'] = isset($data['backgroundColor']) ? $data['backgroundColor'] : null;
        $this->container['backgroundBrush'] = isset($data['backgroundBrush']) ? $data['backgroundBrush'] : null;
        $this->container['backgroundColorCropType'] = isset($data['backgroundColorCropType']) ? $data['backgroundColorCropType'] : null;
        $this->container['backgroundImageCropType'] = isset($data['backgroundImageCropType']) ? $data['backgroundImageCropType'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['backgroundColorCropType'] === null) {
            $invalidProperties[] = "'backgroundColorCropType' can't be null";
        }
        $allowedValues = $this->getBackgroundColorCropTypeAllowableValues();
        if (!in_array($this->container['backgroundColorCropType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'backgroundColorCropType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['backgroundImageCropType'] === null) {
            $invalidProperties[] = "'backgroundImageCropType' can't be null";
        }
        $allowedValues = $this->getBackgroundImageCropTypeAllowableValues();
        if (!in_array($this->container['backgroundImageCropType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'backgroundImageCropType', must be one of '%s'",
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

        if ($this->container['backgroundColorCropType'] === null) {
            return false;
        }
        $allowedValues = $this->getBackgroundColorCropTypeAllowableValues();
        if (!in_array($this->container['backgroundColorCropType'], $allowedValues)) {
            return false;
        }
        if ($this->container['backgroundImageCropType'] === null) {
            return false;
        }
        $allowedValues = $this->getBackgroundImageCropTypeAllowableValues();
        if (!in_array($this->container['backgroundImageCropType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets outerLines
     *
     * @return \GroupDocs\Signature\Model\StampLine[]
     */
    public function getOuterLines()
    {
        return $this->container['outerLines'];
    }

    /*
     * Sets outerLines
     *
     * @param \GroupDocs\Signature\Model\StampLine[] $outerLines List of Outer Lines rendered as concentric circles
     *
     * @return $this
     */
    public function setOuterLines($outerLines)
    {
        $this->container['outerLines'] = $outerLines;

        return $this;
    }

    /*
     * Gets innerLines
     *
     * @return \GroupDocs\Signature\Model\StampLine[]
     */
    public function getInnerLines()
    {
        return $this->container['innerLines'];
    }

    /*
     * Sets innerLines
     *
     * @param \GroupDocs\Signature\Model\StampLine[] $innerLines List of Inner Lines rendered as set of rectangles
     *
     * @return $this
     */
    public function setInnerLines($innerLines)
    {
        $this->container['innerLines'] = $innerLines;

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
     * Gets backgroundBrush
     *
     * @return \GroupDocs\Signature\Model\Brush
     */
    public function getBackgroundBrush()
    {
        return $this->container['backgroundBrush'];
    }

    /*
     * Sets backgroundBrush
     *
     * @param \GroupDocs\Signature\Model\Brush $backgroundBrush Gets or sets the signature background brush. Value by default is null.  When property has a value it is used instead BackgroundBrush property
     *
     * @return $this
     */
    public function setBackgroundBrush($backgroundBrush)
    {
        $this->container['backgroundBrush'] = $backgroundBrush;

        return $this;
    }

    /*
     * Gets backgroundColorCropType
     *
     * @return string
     */
    public function getBackgroundColorCropType()
    {
        return $this->container['backgroundColorCropType'];
    }

    /*
     * Sets backgroundColorCropType
     *
     * @param string $backgroundColorCropType Gets or sets the background color crop type of signature
     *
     * @return $this
     */
    public function setBackgroundColorCropType($backgroundColorCropType)
    {
        $allowedValues = $this->getBackgroundColorCropTypeAllowableValues();
        if ((!is_numeric($backgroundColorCropType) && !in_array($backgroundColorCropType, $allowedValues)) || (is_numeric($backgroundColorCropType) && !in_array($allowedValues[$backgroundColorCropType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'backgroundColorCropType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['backgroundColorCropType'] = $backgroundColorCropType;

        return $this;
    }

    /*
     * Gets backgroundImageCropType
     *
     * @return string
     */
    public function getBackgroundImageCropType()
    {
        return $this->container['backgroundImageCropType'];
    }

    /*
     * Sets backgroundImageCropType
     *
     * @param string $backgroundImageCropType Gets or sets the background image crop type of signature
     *
     * @return $this
     */
    public function setBackgroundImageCropType($backgroundImageCropType)
    {
        $allowedValues = $this->getBackgroundImageCropTypeAllowableValues();
        if ((!is_numeric($backgroundImageCropType) && !in_array($backgroundImageCropType, $allowedValues)) || (is_numeric($backgroundImageCropType) && !in_array($allowedValues[$backgroundImageCropType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'backgroundImageCropType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['backgroundImageCropType'] = $backgroundImageCropType;

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


