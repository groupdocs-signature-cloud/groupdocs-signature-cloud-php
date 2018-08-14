<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="CellsSignStampOptionsData.php">
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
 * CellsSignStampOptionsData
 */

namespace GroupDocs\Signature\Model;
use \GroupDocs\Signature\ObjectSerializer;

/*
 * CellsSignStampOptionsData
 *
 * @description Represents the Stamp Signature Options for Cells Documents.
 */
class CellsSignStampOptionsData extends SignStampOptionsData 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CellsSignStampOptionsData";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'documentPageNumber' => 'int',
        'top' => 'int',
        'left' => 'int',
        'margin' => '\GroupDocs\Signature\Model\PaddingData',
        'sheetNumber' => 'int',
        'rowNumber' => 'int',
        'columnNumber' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'documentPageNumber' => 'int32',
        'top' => 'int32',
        'left' => 'int32',
        'margin' => null,
        'sheetNumber' => 'int32',
        'rowNumber' => 'int32',
        'columnNumber' => 'int32'
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
        'documentPageNumber' => 'DocumentPageNumber',
        'top' => 'Top',
        'left' => 'Left',
        'margin' => 'Margin',
        'sheetNumber' => 'SheetNumber',
        'rowNumber' => 'RowNumber',
        'columnNumber' => 'ColumnNumber'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'documentPageNumber' => 'setDocumentPageNumber',
        'top' => 'setTop',
        'left' => 'setLeft',
        'margin' => 'setMargin',
        'sheetNumber' => 'setSheetNumber',
        'rowNumber' => 'setRowNumber',
        'columnNumber' => 'setColumnNumber'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'documentPageNumber' => 'getDocumentPageNumber',
        'top' => 'getTop',
        'left' => 'getLeft',
        'margin' => 'getMargin',
        'sheetNumber' => 'getSheetNumber',
        'rowNumber' => 'getRowNumber',
        'columnNumber' => 'getColumnNumber'
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

        $this->container['documentPageNumber'] = isset($data['documentPageNumber']) ? $data['documentPageNumber'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
        $this->container['sheetNumber'] = isset($data['sheetNumber']) ? $data['sheetNumber'] : null;
        $this->container['rowNumber'] = isset($data['rowNumber']) ? $data['rowNumber'] : null;
        $this->container['columnNumber'] = isset($data['columnNumber']) ? $data['columnNumber'] : null;
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
     * Gets documentPageNumber
     *
     * @return int
     */
    public function getDocumentPageNumber()
    {
        return $this->container['documentPageNumber'];
    }

    /*
     * Sets documentPageNumber
     *
     * @param int $documentPageNumber Gets or sets worksheet number for signing. Minimal value is 1.
     *
     * @return $this
     */
    public function setDocumentPageNumber($documentPageNumber)
    {
        $this->container['documentPageNumber'] = $documentPageNumber;

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
     * @param int $top Gets or sets the position of the top edge of the Signature area in pixels. This property is mutually exclusive with Row property. If Top property is set RowNumber will be reset to 0.
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

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
     * @param int $left Gets or sets the position of the left edge of the Signature area in pixels. This property is mutually exclusive with Column property. If Left property is set ColumnNumber will be reset to 0.
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /*
     * Gets margin
     *
     * @return \GroupDocs\Signature\Model\PaddingData
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /*
     * Sets margin
     *
     * @param \GroupDocs\Signature\Model\PaddingData $margin Gets or sets the space between Sign and worksheet edges. (works ONLY if horizontal or vertical alignment are specified).
     *
     * @return $this
     */
    public function setMargin($margin)
    {
        $this->container['margin'] = $margin;

        return $this;
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


