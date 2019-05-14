<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SignTextOptions.php">
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
use \GroupDocs\Signature\ObjectSerializer;

/*
 * SignTextOptions
 *
 * @description Base container class for signature options data
 */
class SignTextOptions extends SignOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SignTextOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'left' => 'int',
        'top' => 'int',
        'width' => 'int',
        'height' => 'int',
        'locationMeasureType' => 'string',
        'sizeMeasureType' => 'string',
        'stretch' => 'string',
        'rotationAngle' => 'int',
        'horizontalAlignment' => 'string',
        'verticalAlignment' => 'string',
        'margin' => '\GroupDocs\Signature\Model\Padding',
        'marginMeasureType' => 'string',
        'text' => 'string',
        'font' => '\GroupDocs\Signature\Model\SignatureFont',
        'foreColor' => '\GroupDocs\Signature\Model\Color',
        'borderColor' => '\GroupDocs\Signature\Model\Color',
        'backgroundColor' => '\GroupDocs\Signature\Model\Color',
        'backgroundBrush' => '\GroupDocs\Signature\Model\Brush',
        'borderVisiblity' => 'bool',
        'borderDashStyle' => 'string',
        'borderTransparency' => 'double',
        'textHorizontalAlignment' => 'string',
        'textVerticalAlignment' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'left' => 'int32',
        'top' => 'int32',
        'width' => 'int32',
        'height' => 'int32',
        'locationMeasureType' => null,
        'sizeMeasureType' => null,
        'stretch' => null,
        'rotationAngle' => 'int32',
        'horizontalAlignment' => null,
        'verticalAlignment' => null,
        'margin' => null,
        'marginMeasureType' => null,
        'text' => null,
        'font' => null,
        'foreColor' => null,
        'borderColor' => null,
        'backgroundColor' => null,
        'backgroundBrush' => null,
        'borderVisiblity' => null,
        'borderDashStyle' => null,
        'borderTransparency' => 'double',
        'textHorizontalAlignment' => null,
        'textVerticalAlignment' => null
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
        'left' => 'Left',
        'top' => 'Top',
        'width' => 'Width',
        'height' => 'Height',
        'locationMeasureType' => 'LocationMeasureType',
        'sizeMeasureType' => 'SizeMeasureType',
        'stretch' => 'Stretch',
        'rotationAngle' => 'RotationAngle',
        'horizontalAlignment' => 'HorizontalAlignment',
        'verticalAlignment' => 'VerticalAlignment',
        'margin' => 'Margin',
        'marginMeasureType' => 'MarginMeasureType',
        'text' => 'Text',
        'font' => 'Font',
        'foreColor' => 'ForeColor',
        'borderColor' => 'BorderColor',
        'backgroundColor' => 'BackgroundColor',
        'backgroundBrush' => 'BackgroundBrush',
        'borderVisiblity' => 'BorderVisiblity',
        'borderDashStyle' => 'BorderDashStyle',
        'borderTransparency' => 'BorderTransparency',
        'textHorizontalAlignment' => 'TextHorizontalAlignment',
        'textVerticalAlignment' => 'TextVerticalAlignment'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'left' => 'setLeft',
        'top' => 'setTop',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'locationMeasureType' => 'setLocationMeasureType',
        'sizeMeasureType' => 'setSizeMeasureType',
        'stretch' => 'setStretch',
        'rotationAngle' => 'setRotationAngle',
        'horizontalAlignment' => 'setHorizontalAlignment',
        'verticalAlignment' => 'setVerticalAlignment',
        'margin' => 'setMargin',
        'marginMeasureType' => 'setMarginMeasureType',
        'text' => 'setText',
        'font' => 'setFont',
        'foreColor' => 'setForeColor',
        'borderColor' => 'setBorderColor',
        'backgroundColor' => 'setBackgroundColor',
        'backgroundBrush' => 'setBackgroundBrush',
        'borderVisiblity' => 'setBorderVisiblity',
        'borderDashStyle' => 'setBorderDashStyle',
        'borderTransparency' => 'setBorderTransparency',
        'textHorizontalAlignment' => 'setTextHorizontalAlignment',
        'textVerticalAlignment' => 'setTextVerticalAlignment'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'left' => 'getLeft',
        'top' => 'getTop',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'locationMeasureType' => 'getLocationMeasureType',
        'sizeMeasureType' => 'getSizeMeasureType',
        'stretch' => 'getStretch',
        'rotationAngle' => 'getRotationAngle',
        'horizontalAlignment' => 'getHorizontalAlignment',
        'verticalAlignment' => 'getVerticalAlignment',
        'margin' => 'getMargin',
        'marginMeasureType' => 'getMarginMeasureType',
        'text' => 'getText',
        'font' => 'getFont',
        'foreColor' => 'getForeColor',
        'borderColor' => 'getBorderColor',
        'backgroundColor' => 'getBackgroundColor',
        'backgroundBrush' => 'getBackgroundBrush',
        'borderVisiblity' => 'getBorderVisiblity',
        'borderDashStyle' => 'getBorderDashStyle',
        'borderTransparency' => 'getBorderTransparency',
        'textHorizontalAlignment' => 'getTextHorizontalAlignment',
        'textVerticalAlignment' => 'getTextVerticalAlignment'
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
    const STRETCH_NONE = 'None';
    const STRETCH_PAGE_WIDTH = 'PageWidth';
    const STRETCH_PAGE_HEIGHT = 'PageHeight';
    const STRETCH_PAGE_AREA = 'PageArea';
    const HORIZONTAL_ALIGNMENT__DEFAULT = 'Default';
    const HORIZONTAL_ALIGNMENT_NONE = 'None';
    const HORIZONTAL_ALIGNMENT_LEFT = 'Left';
    const HORIZONTAL_ALIGNMENT_CENTER = 'Center';
    const HORIZONTAL_ALIGNMENT_RIGHT = 'Right';
    const VERTICAL_ALIGNMENT__DEFAULT = 'Default';
    const VERTICAL_ALIGNMENT_NONE = 'None';
    const VERTICAL_ALIGNMENT_TOP = 'Top';
    const VERTICAL_ALIGNMENT_CENTER = 'Center';
    const VERTICAL_ALIGNMENT_BOTTOM = 'Bottom';
    const MARGIN_MEASURE_TYPE_PIXELS = 'Pixels';
    const MARGIN_MEASURE_TYPE_PERCENTS = 'Percents';
    const MARGIN_MEASURE_TYPE_MILLIMETERS = 'Millimeters';
    const BORDER_DASH_STYLE_DASH = 'Dash';
    const BORDER_DASH_STYLE_DASH_DOT = 'DashDot';
    const BORDER_DASH_STYLE_DASH_DOT_DOT = 'DashDotDot';
    const BORDER_DASH_STYLE_DASH_LONG_DASH = 'DashLongDash';
    const BORDER_DASH_STYLE_DASH_LONG_DASH_DOT = 'DashLongDashDot';
    const BORDER_DASH_STYLE_ROUND_DOT = 'RoundDot';
    const BORDER_DASH_STYLE_SOLID = 'Solid';
    const BORDER_DASH_STYLE_SQUARE_DOT = 'SquareDot';
    const TEXT_HORIZONTAL_ALIGNMENT_LEFT = 'Left';
    const TEXT_HORIZONTAL_ALIGNMENT_CENTER = 'Center';
    const TEXT_HORIZONTAL_ALIGNMENT_RIGHT = 'Right';
    const TEXT_VERTICAL_ALIGNMENT_TOP = 'Top';
    const TEXT_VERTICAL_ALIGNMENT_CENTER = 'Center';
    const TEXT_VERTICAL_ALIGNMENT_BOTTOM = 'Bottom';
    

    
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
    public function getStretchAllowableValues()
    {
        return [
            self::STRETCH_NONE,
            self::STRETCH_PAGE_WIDTH,
            self::STRETCH_PAGE_HEIGHT,
            self::STRETCH_PAGE_AREA,
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
            self::HORIZONTAL_ALIGNMENT__DEFAULT,
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
            self::VERTICAL_ALIGNMENT__DEFAULT,
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
    public function getTextHorizontalAlignmentAllowableValues()
    {
        return [
            self::TEXT_HORIZONTAL_ALIGNMENT_LEFT,
            self::TEXT_HORIZONTAL_ALIGNMENT_CENTER,
            self::TEXT_HORIZONTAL_ALIGNMENT_RIGHT,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextVerticalAlignmentAllowableValues()
    {
        return [
            self::TEXT_VERTICAL_ALIGNMENT_TOP,
            self::TEXT_VERTICAL_ALIGNMENT_CENTER,
            self::TEXT_VERTICAL_ALIGNMENT_BOTTOM,
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

        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['locationMeasureType'] = isset($data['locationMeasureType']) ? $data['locationMeasureType'] : null;
        $this->container['sizeMeasureType'] = isset($data['sizeMeasureType']) ? $data['sizeMeasureType'] : null;
        $this->container['stretch'] = isset($data['stretch']) ? $data['stretch'] : null;
        $this->container['rotationAngle'] = isset($data['rotationAngle']) ? $data['rotationAngle'] : null;
        $this->container['horizontalAlignment'] = isset($data['horizontalAlignment']) ? $data['horizontalAlignment'] : null;
        $this->container['verticalAlignment'] = isset($data['verticalAlignment']) ? $data['verticalAlignment'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
        $this->container['marginMeasureType'] = isset($data['marginMeasureType']) ? $data['marginMeasureType'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['foreColor'] = isset($data['foreColor']) ? $data['foreColor'] : null;
        $this->container['borderColor'] = isset($data['borderColor']) ? $data['borderColor'] : null;
        $this->container['backgroundColor'] = isset($data['backgroundColor']) ? $data['backgroundColor'] : null;
        $this->container['backgroundBrush'] = isset($data['backgroundBrush']) ? $data['backgroundBrush'] : null;
        $this->container['borderVisiblity'] = isset($data['borderVisiblity']) ? $data['borderVisiblity'] : null;
        $this->container['borderDashStyle'] = isset($data['borderDashStyle']) ? $data['borderDashStyle'] : null;
        $this->container['borderTransparency'] = isset($data['borderTransparency']) ? $data['borderTransparency'] : null;
        $this->container['textHorizontalAlignment'] = isset($data['textHorizontalAlignment']) ? $data['textHorizontalAlignment'] : null;
        $this->container['textVerticalAlignment'] = isset($data['textVerticalAlignment']) ? $data['textVerticalAlignment'] : null;
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

        if ($this->container['stretch'] === null) {
            $invalidProperties[] = "'stretch' can't be null";
        }
        $allowedValues = $this->getStretchAllowableValues();
        if (!in_array($this->container['stretch'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'stretch', must be one of '%s'",
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

        if ($this->container['borderVisiblity'] === null) {
            $invalidProperties[] = "'borderVisiblity' can't be null";
        }
        if ($this->container['borderDashStyle'] === null) {
            $invalidProperties[] = "'borderDashStyle' can't be null";
        }
        $allowedValues = $this->getBorderDashStyleAllowableValues();
        if (!in_array($this->container['borderDashStyle'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'borderDashStyle', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['borderTransparency'] === null) {
            $invalidProperties[] = "'borderTransparency' can't be null";
        }
        if ($this->container['textHorizontalAlignment'] === null) {
            $invalidProperties[] = "'textHorizontalAlignment' can't be null";
        }
        $allowedValues = $this->getTextHorizontalAlignmentAllowableValues();
        if (!in_array($this->container['textHorizontalAlignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'textHorizontalAlignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['textVerticalAlignment'] === null) {
            $invalidProperties[] = "'textVerticalAlignment' can't be null";
        }
        $allowedValues = $this->getTextVerticalAlignmentAllowableValues();
        if (!in_array($this->container['textVerticalAlignment'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'textVerticalAlignment', must be one of '%s'",
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
        if ($this->container['stretch'] === null) {
            return false;
        }
        $allowedValues = $this->getStretchAllowableValues();
        if (!in_array($this->container['stretch'], $allowedValues)) {
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
        if ($this->container['borderVisiblity'] === null) {
            return false;
        }
        if ($this->container['borderDashStyle'] === null) {
            return false;
        }
        $allowedValues = $this->getBorderDashStyleAllowableValues();
        if (!in_array($this->container['borderDashStyle'], $allowedValues)) {
            return false;
        }
        if ($this->container['borderTransparency'] === null) {
            return false;
        }
        if ($this->container['textHorizontalAlignment'] === null) {
            return false;
        }
        $allowedValues = $this->getTextHorizontalAlignmentAllowableValues();
        if (!in_array($this->container['textHorizontalAlignment'], $allowedValues)) {
            return false;
        }
        if ($this->container['textVerticalAlignment'] === null) {
            return false;
        }
        $allowedValues = $this->getTextVerticalAlignmentAllowableValues();
        if (!in_array($this->container['textVerticalAlignment'], $allowedValues)) {
            return false;
        }
        return true;
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
     * @param int $left Left X position of Signature on Document Page in Measure values (pixels or percent see MeasureType LocationMeasureType property)
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
     * @param int $top Top Y Position of Signature on Document Page in Measure values (pixels or percent see MeasureType LocationMeasureType property)
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
     * @param int $width Width of Signature area on Document Page in Measure values (pixels or percent see MeasureType SizeMeasureType property)
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
     * @param int $height Height of Signature are on Document Page in Measure values (pixels or percent see MeasureType SizeMeasureType property)
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
     * Gets stretch
     *
     * @return string
     */
    public function getStretch()
    {
        return $this->container['stretch'];
    }

    /*
     * Sets stretch
     *
     * @param string $stretch Stretch mode on document page
     *
     * @return $this
     */
    public function setStretch($stretch)
    {
        $allowedValues = $this->getStretchAllowableValues();
        if ((!is_numeric($stretch) && !in_array($stretch, $allowedValues)) || (is_numeric($stretch) && !in_array($allowedValues[$stretch], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'stretch', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['stretch'] = $stretch;

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
     * @param string $text Text of signature
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
     * @param \GroupDocs\Signature\Model\SignatureFont $font Gets or sets the font of signature
     *
     * @return $this
     */
    public function setFont($font)
    {
        $this->container['font'] = $font;

        return $this;
    }

    /*
     * Gets foreColor
     *
     * @return \GroupDocs\Signature\Model\Color
     */
    public function getForeColor()
    {
        return $this->container['foreColor'];
    }

    /*
     * Sets foreColor
     *
     * @param \GroupDocs\Signature\Model\Color $foreColor Gets or sets the fore color of signature
     *
     * @return $this
     */
    public function setForeColor($foreColor)
    {
        $this->container['foreColor'] = $foreColor;

        return $this;
    }

    /*
     * Gets borderColor
     *
     * @return \GroupDocs\Signature\Model\Color
     */
    public function getBorderColor()
    {
        return $this->container['borderColor'];
    }

    /*
     * Sets borderColor
     *
     * @param \GroupDocs\Signature\Model\Color $borderColor Gets or sets the border color of signature
     *
     * @return $this
     */
    public function setBorderColor($borderColor)
    {
        $this->container['borderColor'] = $borderColor;

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
     * @param \GroupDocs\Signature\Model\Brush $backgroundBrush Gets or sets the signature background brush. Value by default is null.  If this property has a value it will be used instead BackgroundBrush property. For Spreadsheet documents TextStamp implementation RadialGradientBrush is not applicable, it is replaced by LinearGradientBrush. Spreadsheets, Images, Presentations It is not used for Watermark implementation. PDF For Stamp implementation LinearGradientBrush (ColorStart) and RadialGradientBrush (ColorInner) are used as SolidBrush. PDF It is not used for Annotation, Sticker, TextToFormField and Watermark implementations. Presentations For TextStamp implementation RadialGradientBrush is not applicable, it is replaced by LinearGradientBrush. Word Processing For TextStamp implementation LinearGradientBrush (ColorStart) and RadialGradientBrush (ColorInner) are used as SolidBrush. Word Processing It is not used for TextToFormField and Watermark implementations
     *
     * @return $this
     */
    public function setBackgroundBrush($backgroundBrush)
    {
        $this->container['backgroundBrush'] = $backgroundBrush;

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
     * @param bool $borderVisiblity Gets or sets the signature border visibility It is not suitable for PDF
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
     * @param string $borderDashStyle Gets or sets the signature border style It is not suitable for PDF
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
     * @param double $borderTransparency Gets or sets the signature border transparency (value from 0.0 (opaque) through 1.0 (clear)) It is not suitable for PDF
     *
     * @return $this
     */
    public function setBorderTransparency($borderTransparency)
    {
        $this->container['borderTransparency'] = $borderTransparency;

        return $this;
    }

    /*
     * Gets textHorizontalAlignment
     *
     * @return string
     */
    public function getTextHorizontalAlignment()
    {
        return $this->container['textHorizontalAlignment'];
    }

    /*
     * Sets textHorizontalAlignment
     *
     * @param string $textHorizontalAlignment Horizontal alignment of text inside a signature
     *
     * @return $this
     */
    public function setTextHorizontalAlignment($textHorizontalAlignment)
    {
        $allowedValues = $this->getTextHorizontalAlignmentAllowableValues();
        if ((!is_numeric($textHorizontalAlignment) && !in_array($textHorizontalAlignment, $allowedValues)) || (is_numeric($textHorizontalAlignment) && !in_array($allowedValues[$textHorizontalAlignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'textHorizontalAlignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['textHorizontalAlignment'] = $textHorizontalAlignment;

        return $this;
    }

    /*
     * Gets textVerticalAlignment
     *
     * @return string
     */
    public function getTextVerticalAlignment()
    {
        return $this->container['textVerticalAlignment'];
    }

    /*
     * Sets textVerticalAlignment
     *
     * @param string $textVerticalAlignment Vertical alignment of text inside a signature
     *
     * @return $this
     */
    public function setTextVerticalAlignment($textVerticalAlignment)
    {
        $allowedValues = $this->getTextVerticalAlignmentAllowableValues();
        if ((!is_numeric($textVerticalAlignment) && !in_array($textVerticalAlignment, $allowedValues)) || (is_numeric($textVerticalAlignment) && !in_array($allowedValues[$textVerticalAlignment], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'textVerticalAlignment', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['textVerticalAlignment'] = $textVerticalAlignment;

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


