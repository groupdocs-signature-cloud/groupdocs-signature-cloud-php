<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SignImageOptions.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
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
 * SignImageOptions
 *
 * @description Represents the Image sign options
 */
class SignImageOptions extends SignOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SignImageOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'imageFilePath' => 'string',
        'left' => 'int',
        'top' => 'int',
        'width' => 'int',
        'height' => 'int',
        'locationMeasureType' => 'string',
        'sizeMeasureType' => 'string',
        'rotationAngle' => 'int',
        'horizontalAlignment' => 'string',
        'verticalAlignment' => 'string',
        'margin' => '\GroupDocs\Signature\Model\Padding',
        'marginMeasureType' => 'string',
        'transparency' => 'double',
        'border' => '\GroupDocs\Signature\Model\BorderLine'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'imageFilePath' => null,
        'left' => 'int32',
        'top' => 'int32',
        'width' => 'int32',
        'height' => 'int32',
        'locationMeasureType' => null,
        'sizeMeasureType' => null,
        'rotationAngle' => 'int32',
        'horizontalAlignment' => null,
        'verticalAlignment' => null,
        'margin' => null,
        'marginMeasureType' => null,
        'transparency' => 'double',
        'border' => null
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
        'imageFilePath' => 'ImageFilePath',
        'left' => 'Left',
        'top' => 'Top',
        'width' => 'Width',
        'height' => 'Height',
        'locationMeasureType' => 'LocationMeasureType',
        'sizeMeasureType' => 'SizeMeasureType',
        'rotationAngle' => 'RotationAngle',
        'horizontalAlignment' => 'HorizontalAlignment',
        'verticalAlignment' => 'VerticalAlignment',
        'margin' => 'Margin',
        'marginMeasureType' => 'MarginMeasureType',
        'transparency' => 'Transparency',
        'border' => 'Border'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'imageFilePath' => 'setImageFilePath',
        'left' => 'setLeft',
        'top' => 'setTop',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'locationMeasureType' => 'setLocationMeasureType',
        'sizeMeasureType' => 'setSizeMeasureType',
        'rotationAngle' => 'setRotationAngle',
        'horizontalAlignment' => 'setHorizontalAlignment',
        'verticalAlignment' => 'setVerticalAlignment',
        'margin' => 'setMargin',
        'marginMeasureType' => 'setMarginMeasureType',
        'transparency' => 'setTransparency',
        'border' => 'setBorder'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'imageFilePath' => 'getImageFilePath',
        'left' => 'getLeft',
        'top' => 'getTop',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'locationMeasureType' => 'getLocationMeasureType',
        'sizeMeasureType' => 'getSizeMeasureType',
        'rotationAngle' => 'getRotationAngle',
        'horizontalAlignment' => 'getHorizontalAlignment',
        'verticalAlignment' => 'getVerticalAlignment',
        'margin' => 'getMargin',
        'marginMeasureType' => 'getMarginMeasureType',
        'transparency' => 'getTransparency',
        'border' => 'getBorder'
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

    const LOCATION_MEASURE_TYPE_PIXELS = 'Pixels';
    const LOCATION_MEASURE_TYPE_PERCENTS = 'Percents';
    const LOCATION_MEASURE_TYPE_MILLIMETERS = 'Millimeters';
    const SIZE_MEASURE_TYPE_PIXELS = 'Pixels';
    const SIZE_MEASURE_TYPE_PERCENTS = 'Percents';
    const SIZE_MEASURE_TYPE_MILLIMETERS = 'Millimeters';
    const HORIZONTAL_ALIGNMENT_NONE = 'None';
    const HORIZONTAL_ALIGNMENT_LEFT = 'Left';
    const HORIZONTAL_ALIGNMENT_CENTER = 'Center';
    const HORIZONTAL_ALIGNMENT_RIGHT = 'Right';
    const VERTICAL_ALIGNMENT_NONE = 'None';
    const VERTICAL_ALIGNMENT_TOP = 'Top';
    const VERTICAL_ALIGNMENT_CENTER = 'Center';
    const VERTICAL_ALIGNMENT_BOTTOM = 'Bottom';
    const MARGIN_MEASURE_TYPE_PIXELS = 'Pixels';
    const MARGIN_MEASURE_TYPE_PERCENTS = 'Percents';
    const MARGIN_MEASURE_TYPE_MILLIMETERS = 'Millimeters';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocationMeasureTypeAllowableValues()
    {
        return [
            self::LOCATION_MEASURE_TYPE_PIXELS,
            self::LOCATION_MEASURE_TYPE_PERCENTS,
            self::LOCATION_MEASURE_TYPE_MILLIMETERS,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSizeMeasureTypeAllowableValues()
    {
        return [
            self::SIZE_MEASURE_TYPE_PIXELS,
            self::SIZE_MEASURE_TYPE_PERCENTS,
            self::SIZE_MEASURE_TYPE_MILLIMETERS,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHorizontalAlignmentAllowableValues()
    {
        return [
            self::HORIZONTAL_ALIGNMENT_NONE,
            self::HORIZONTAL_ALIGNMENT_LEFT,
            self::HORIZONTAL_ALIGNMENT_CENTER,
            self::HORIZONTAL_ALIGNMENT_RIGHT,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerticalAlignmentAllowableValues()
    {
        return [
            self::VERTICAL_ALIGNMENT_NONE,
            self::VERTICAL_ALIGNMENT_TOP,
            self::VERTICAL_ALIGNMENT_CENTER,
            self::VERTICAL_ALIGNMENT_BOTTOM,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMarginMeasureTypeAllowableValues()
    {
        return [
            self::MARGIN_MEASURE_TYPE_PIXELS,
            self::MARGIN_MEASURE_TYPE_PERCENTS,
            self::MARGIN_MEASURE_TYPE_MILLIMETERS,
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

        $this->container['imageFilePath'] = isset($data['imageFilePath']) ? $data['imageFilePath'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['locationMeasureType'] = isset($data['locationMeasureType']) ? $data['locationMeasureType'] : null;
        $this->container['sizeMeasureType'] = isset($data['sizeMeasureType']) ? $data['sizeMeasureType'] : null;
        $this->container['rotationAngle'] = isset($data['rotationAngle']) ? $data['rotationAngle'] : null;
        $this->container['horizontalAlignment'] = isset($data['horizontalAlignment']) ? $data['horizontalAlignment'] : null;
        $this->container['verticalAlignment'] = isset($data['verticalAlignment']) ? $data['verticalAlignment'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
        $this->container['marginMeasureType'] = isset($data['marginMeasureType']) ? $data['marginMeasureType'] : null;
        $this->container['transparency'] = isset($data['transparency']) ? $data['transparency'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['left'] === null) {
            $invalidProperties[] = "'left' can't be null";
        }
        if ($this->container['top'] === null) {
            $invalidProperties[] = "'top' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['locationMeasureType'] === null) {
            $invalidProperties[] = "'locationMeasureType' can't be null";
        }
        $allowedValues = $this->getLocationMeasureTypeAllowableValues();
        if (!in_array($this->container['locationMeasureType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'locationMeasureType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sizeMeasureType'] === null) {
            $invalidProperties[] = "'sizeMeasureType' can't be null";
        }
        $allowedValues = $this->getSizeMeasureTypeAllowableValues();
        if (!in_array($this->container['sizeMeasureType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sizeMeasureType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['rotationAngle'] === null) {
            $invalidProperties[] = "'rotationAngle' can't be null";
        }
        if ($this->container['horizontalAlignment'] === null) {
            $invalidProperties[] = "'horizontalAlignment' can't be null";
        }
        $allowedValues = $this->getHorizontalAlignmentAllowableValues();
        if (!in_array($this->container['horizontalAlignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'horizontalAlignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['verticalAlignment'] === null) {
            $invalidProperties[] = "'verticalAlignment' can't be null";
        }
        $allowedValues = $this->getVerticalAlignmentAllowableValues();
        if (!in_array($this->container['verticalAlignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'verticalAlignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['marginMeasureType'] === null) {
            $invalidProperties[] = "'marginMeasureType' can't be null";
        }
        $allowedValues = $this->getMarginMeasureTypeAllowableValues();
        if (!in_array($this->container['marginMeasureType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'marginMeasureType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['transparency'] === null) {
            $invalidProperties[] = "'transparency' can't be null";
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

        if ($this->container['left'] === null) {
            return false;
        }
        if ($this->container['top'] === null) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['locationMeasureType'] === null) {
            return false;
        }
        $allowedValues = $this->getLocationMeasureTypeAllowableValues();
        if (!in_array($this->container['locationMeasureType'], $allowedValues)) {
            return false;
        }
        if ($this->container['sizeMeasureType'] === null) {
            return false;
        }
        $allowedValues = $this->getSizeMeasureTypeAllowableValues();
        if (!in_array($this->container['sizeMeasureType'], $allowedValues)) {
            return false;
        }
        if ($this->container['rotationAngle'] === null) {
            return false;
        }
        if ($this->container['horizontalAlignment'] === null) {
            return false;
        }
        $allowedValues = $this->getHorizontalAlignmentAllowableValues();
        if (!in_array($this->container['horizontalAlignment'], $allowedValues)) {
            return false;
        }
        if ($this->container['verticalAlignment'] === null) {
            return false;
        }
        $allowedValues = $this->getVerticalAlignmentAllowableValues();
        if (!in_array($this->container['verticalAlignment'], $allowedValues)) {
            return false;
        }
        if ($this->container['marginMeasureType'] === null) {
            return false;
        }
        $allowedValues = $this->getMarginMeasureTypeAllowableValues();
        if (!in_array($this->container['marginMeasureType'], $allowedValues)) {
            return false;
        }
        if ($this->container['transparency'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets imageFilePath
     *
     * @return string
     */
    public function getImageFilePath()
    {
        return $this->container['imageFilePath'];
    }

    /*
     * Sets imageFilePath
     *
     * @param string $imageFilePath Gets or sets the signature image file name. This property is used only if ImageStream is not specified
     *
     * @return $this
     */
    public function setImageFilePath($imageFilePath)
    {
        $this->container['imageFilePath'] = $imageFilePath;

        return $this;
    }

    /*
     * Gets left
     *
     * @return int
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /*
     * Sets left
     *
     * @param int $left Left X position of Signature on Document Page in Measure values (pixels or percent see MeasureType LocationMeasureType). (works if horizontal alignment is not specified). For Spreadsheet documents this property is mutually exclusive with Column property. If Left property is set ColumnNumber will be reset to 0
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /*
     * Gets top
     *
     * @return int
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /*
     * Sets top
     *
     * @param int $top Top Y Position of Signature on Document Page in Measure values (pixels or percent see MeasureType LocationMeasureType). (works if vertical alignment is not specified). For Spreadsheet documents this property is mutually exclusive with Row property. If Top property is set RowNumber will be reset to 0
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }

    /*
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /*
     * Sets width
     *
     * @param int $width Width of Signature on Document Page in Measure values (pixels or percent see MeasureType SizeMeasureType)
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
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
     * @param int $height Height of Signature on Document Page in Measure values (pixels or percent see MeasureType SizeMeasureType)
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /*
     * Gets locationMeasureType
     *
     * @return string
     */
    public function getLocationMeasureType()
    {
        return $this->container['locationMeasureType'];
    }

    /*
     * Sets locationMeasureType
     *
     * @param string $locationMeasureType Measure type (pixels or percent) for Left and Top properties
     *
     * @return $this
     */
    public function setLocationMeasureType($locationMeasureType)
    {
        $allowedValues = $this->getLocationMeasureTypeAllowableValues();
        if ((!is_numeric($locationMeasureType) && !in_array($locationMeasureType, $allowedValues)) || (is_numeric($locationMeasureType) && !in_array($allowedValues[$locationMeasureType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'locationMeasureType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['locationMeasureType'] = $locationMeasureType;

        return $this;
    }

    /*
     * Gets sizeMeasureType
     *
     * @return string
     */
    public function getSizeMeasureType()
    {
        return $this->container['sizeMeasureType'];
    }

    /*
     * Sets sizeMeasureType
     *
     * @param string $sizeMeasureType Measure type (pixels or percent) for Width and Height properties
     *
     * @return $this
     */
    public function setSizeMeasureType($sizeMeasureType)
    {
        $allowedValues = $this->getSizeMeasureTypeAllowableValues();
        if ((!is_numeric($sizeMeasureType) && !in_array($sizeMeasureType, $allowedValues)) || (is_numeric($sizeMeasureType) && !in_array($allowedValues[$sizeMeasureType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'sizeMeasureType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['sizeMeasureType'] = $sizeMeasureType;

        return $this;
    }

    /*
     * Gets rotationAngle
     *
     * @return int
     */
    public function getRotationAngle()
    {
        return $this->container['rotationAngle'];
    }

    /*
     * Sets rotationAngle
     *
     * @param int $rotationAngle Rotation angle of signature on document page (clockwise)
     *
     * @return $this
     */
    public function setRotationAngle($rotationAngle)
    {
        $this->container['rotationAngle'] = $rotationAngle;

        return $this;
    }

    /*
     * Gets horizontalAlignment
     *
     * @return string
     */
    public function getHorizontalAlignment()
    {
        return $this->container['horizontalAlignment'];
    }

    /*
     * Sets horizontalAlignment
     *
     * @param string $horizontalAlignment Horizontal alignment of signature on document page
     *
     * @return $this
     */
    public function setHorizontalAlignment($horizontalAlignment)
    {
        $allowedValues = $this->getHorizontalAlignmentAllowableValues();
        if ((!is_numeric($horizontalAlignment) && !in_array($horizontalAlignment, $allowedValues)) || (is_numeric($horizontalAlignment) && !in_array($allowedValues[$horizontalAlignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'horizontalAlignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['horizontalAlignment'] = $horizontalAlignment;

        return $this;
    }

    /*
     * Gets verticalAlignment
     *
     * @return string
     */
    public function getVerticalAlignment()
    {
        return $this->container['verticalAlignment'];
    }

    /*
     * Sets verticalAlignment
     *
     * @param string $verticalAlignment Vertical alignment of signature on document page
     *
     * @return $this
     */
    public function setVerticalAlignment($verticalAlignment)
    {
        $allowedValues = $this->getVerticalAlignmentAllowableValues();
        if ((!is_numeric($verticalAlignment) && !in_array($verticalAlignment, $allowedValues)) || (is_numeric($verticalAlignment) && !in_array($allowedValues[$verticalAlignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'verticalAlignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['verticalAlignment'] = $verticalAlignment;

        return $this;
    }

    /*
     * Gets margin
     *
     * @return \GroupDocs\Signature\Model\Padding
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /*
     * Sets margin
     *
     * @param \GroupDocs\Signature\Model\Padding $margin Gets or sets the space between Sign and Document edges (works ONLY if horizontal or vertical alignment are specified)
     *
     * @return $this
     */
    public function setMargin($margin)
    {
        $this->container['margin'] = $margin;

        return $this;
    }

    /*
     * Gets marginMeasureType
     *
     * @return string
     */
    public function getMarginMeasureType()
    {
        return $this->container['marginMeasureType'];
    }

    /*
     * Sets marginMeasureType
     *
     * @param string $marginMeasureType Gets or sets the measure type (pixels or percent) for Margin
     *
     * @return $this
     */
    public function setMarginMeasureType($marginMeasureType)
    {
        $allowedValues = $this->getMarginMeasureTypeAllowableValues();
        if ((!is_numeric($marginMeasureType) && !in_array($marginMeasureType, $allowedValues)) || (is_numeric($marginMeasureType) && !in_array($allowedValues[$marginMeasureType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'marginMeasureType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['marginMeasureType'] = $marginMeasureType;

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
     * @param double $transparency Gets or sets the signature transparency(value from 0.0 (opaque) through 1.0 (clear)). Default value is 0 (opaque).
     *
     * @return $this
     */
    public function setTransparency($transparency)
    {
        $this->container['transparency'] = $transparency;

        return $this;
    }

    /*
     * Gets border
     *
     * @return \GroupDocs\Signature\Model\BorderLine
     */
    public function getBorder()
    {
        return $this->container['border'];
    }

    /*
     * Sets border
     *
     * @param \GroupDocs\Signature\Model\BorderLine $border Gets or sets the signature border properties
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;

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


