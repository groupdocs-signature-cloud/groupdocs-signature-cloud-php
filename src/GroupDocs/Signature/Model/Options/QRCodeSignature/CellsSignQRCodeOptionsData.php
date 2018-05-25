<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="CellsSignQRCodeOptionsData.php">
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
 * CellsSignQRCodeOptionsData
 */

namespace GroupDocs\Signature\Model;
use \GroupDocs\Signature\ObjectSerializer;

/*
 * CellsSignQRCodeOptionsData
 *
 * @description Represents the QRCode Signature Options for Cells Documents.
 */
class CellsSignQRCodeOptionsData extends SignQRCodeOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CellsSignQRCodeOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'sheetNumber' => 'int',
        'rowNumber' => 'int',
        'columnNumber' => 'int',
        'locationMeasureType' => 'string',
        'sizeMeasureType' => 'string',
        'marginMeasureType' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'sheetNumber' => 'int32',
        'rowNumber' => 'int32',
        'columnNumber' => 'int32',
        'locationMeasureType' => null,
        'sizeMeasureType' => null,
        'marginMeasureType' => null
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
        'sheetNumber' => 'SheetNumber',
        'rowNumber' => 'RowNumber',
        'columnNumber' => 'ColumnNumber',
        'locationMeasureType' => 'LocationMeasureType',
        'sizeMeasureType' => 'SizeMeasureType',
        'marginMeasureType' => 'MarginMeasureType'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sheetNumber' => 'setSheetNumber',
        'rowNumber' => 'setRowNumber',
        'columnNumber' => 'setColumnNumber',
        'locationMeasureType' => 'setLocationMeasureType',
        'sizeMeasureType' => 'setSizeMeasureType',
        'marginMeasureType' => 'setMarginMeasureType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sheetNumber' => 'getSheetNumber',
        'rowNumber' => 'getRowNumber',
        'columnNumber' => 'getColumnNumber',
        'locationMeasureType' => 'getLocationMeasureType',
        'sizeMeasureType' => 'getSizeMeasureType',
        'marginMeasureType' => 'getMarginMeasureType'
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

        $this->container['sheetNumber'] = isset($data['sheetNumber']) ? $data['sheetNumber'] : null;
        $this->container['rowNumber'] = isset($data['rowNumber']) ? $data['rowNumber'] : null;
        $this->container['columnNumber'] = isset($data['columnNumber']) ? $data['columnNumber'] : null;
        $this->container['locationMeasureType'] = isset($data['locationMeasureType']) ? $data['locationMeasureType'] : null;
        $this->container['sizeMeasureType'] = isset($data['sizeMeasureType']) ? $data['sizeMeasureType'] : null;
        $this->container['marginMeasureType'] = isset($data['marginMeasureType']) ? $data['marginMeasureType'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getLocationMeasureTypeAllowableValues();
        if (!in_array($this->container['locationMeasureType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'locationMeasureType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSizeMeasureTypeAllowableValues();
        if (!in_array($this->container['sizeMeasureType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sizeMeasureType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMarginMeasureTypeAllowableValues();
        if (!in_array($this->container['marginMeasureType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'marginMeasureType', must be one of '%s'",
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

        $allowedValues = $this->getLocationMeasureTypeAllowableValues();
        if (!in_array($this->container['locationMeasureType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getSizeMeasureTypeAllowableValues();
        if (!in_array($this->container['sizeMeasureType'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getMarginMeasureTypeAllowableValues();
        if (!in_array($this->container['marginMeasureType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets sheetNumber
     *
     * @return int
     */
    public function getSheetNumber()
    {
        return $this->container['sheetNumber'];
    }

    /*
     * Sets sheetNumber
     *
     * @param int $sheetNumber Gets or sets worksheet number for signing. DocumentPageNumber parameter contains the same value.
     *
     * @return $this
     */
    public function setSheetNumber($sheetNumber)
    {
        $this->container['sheetNumber'] = $sheetNumber;

        return $this;
    }

    /*
     * Gets rowNumber
     *
     * @return int
     */
    public function getRowNumber()
    {
        return $this->container['rowNumber'];
    }

    /*
     * Sets rowNumber
     *
     * @param int $rowNumber Gets or sets the top row number of signature (min value is 0). Top parameter contains the same value.
     *
     * @return $this
     */
    public function setRowNumber($rowNumber)
    {
        $this->container['rowNumber'] = $rowNumber;

        return $this;
    }

    /*
     * Gets columnNumber
     *
     * @return int
     */
    public function getColumnNumber()
    {
        return $this->container['columnNumber'];
    }

    /*
     * Sets columnNumber
     *
     * @param int $columnNumber Gets or sets the left column number of signature (min value is 0). Left parameter contains the same value.
     *
     * @return $this
     */
    public function setColumnNumber($columnNumber)
    {
        $this->container['columnNumber'] = $columnNumber;

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
     * @param string $locationMeasureType Measure type (pixels or percent) for Left and Top properties. This property is obsolete.
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
     * @param string $sizeMeasureType Measure type (pixels or percent) for Width and Height properties. This property is obsolete.
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
     * @param string $marginMeasureType Gets or sets the measure type (pixels or percent) for Margin. This property is obsolete.
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


