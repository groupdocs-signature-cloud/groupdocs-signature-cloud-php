<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PreviewSettings.php">
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
 * PreviewSettings
 *
 * @description Defines preview request settings
 */
class PreviewSettings extends BaseSettings 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PreviewSettings";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'width' => 'int',
        'height' => 'int',
        'resolution' => 'int',
        'pageNumbers' => 'int[]',
        'previewFormat' => 'string',
        'hideSignatures' => 'bool',
        'outputPath' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'width' => 'int32',
        'height' => 'int32',
        'resolution' => 'int32',
        'pageNumbers' => 'int32',
        'previewFormat' => null,
        'hideSignatures' => null,
        'outputPath' => null
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
        'width' => 'Width',
        'height' => 'Height',
        'resolution' => 'Resolution',
        'pageNumbers' => 'PageNumbers',
        'previewFormat' => 'PreviewFormat',
        'hideSignatures' => 'HideSignatures',
        'outputPath' => 'OutputPath'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'width' => 'setWidth',
        'height' => 'setHeight',
        'resolution' => 'setResolution',
        'pageNumbers' => 'setPageNumbers',
        'previewFormat' => 'setPreviewFormat',
        'hideSignatures' => 'setHideSignatures',
        'outputPath' => 'setOutputPath'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'width' => 'getWidth',
        'height' => 'getHeight',
        'resolution' => 'getResolution',
        'pageNumbers' => 'getPageNumbers',
        'previewFormat' => 'getPreviewFormat',
        'hideSignatures' => 'getHideSignatures',
        'outputPath' => 'getOutputPath'
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

    const PREVIEW_FORMAT_PNG = 'PNG';
    const PREVIEW_FORMAT_JPEG = 'JPEG';
    const PREVIEW_FORMAT_BMP = 'BMP';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPreviewFormatAllowableValues()
    {
        return [
            self::PREVIEW_FORMAT_PNG,
            self::PREVIEW_FORMAT_JPEG,
            self::PREVIEW_FORMAT_BMP,
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

        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['pageNumbers'] = isset($data['pageNumbers']) ? $data['pageNumbers'] : null;
        $this->container['previewFormat'] = isset($data['previewFormat']) ? $data['previewFormat'] : null;
        $this->container['hideSignatures'] = isset($data['hideSignatures']) ? $data['hideSignatures'] : null;
        $this->container['outputPath'] = isset($data['outputPath']) ? $data['outputPath'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['resolution'] === null) {
            $invalidProperties[] = "'resolution' can't be null";
        }
        if ($this->container['previewFormat'] === null) {
            $invalidProperties[] = "'previewFormat' can't be null";
        }
        $allowedValues = $this->getPreviewFormatAllowableValues();
        if (!in_array($this->container['previewFormat'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'previewFormat', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['hideSignatures'] === null) {
            $invalidProperties[] = "'hideSignatures' can't be null";
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

        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['resolution'] === null) {
            return false;
        }
        if ($this->container['previewFormat'] === null) {
            return false;
        }
        $allowedValues = $this->getPreviewFormatAllowableValues();
        if (!in_array($this->container['previewFormat'], $allowedValues)) {
            return false;
        }
        if ($this->container['hideSignatures'] === null) {
            return false;
        }
        return true;
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
     * @param int $width Preview images width
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
     * @param int $height Preview images height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /*
     * Gets resolution
     *
     * @return int
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /*
     * Sets resolution
     *
     * @param int $resolution Gets or sets the resolution of the preview images in DPI (dots per inch).
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /*
     * Gets pageNumbers
     *
     * @return int[]
     */
    public function getPageNumbers()
    {
        return $this->container['pageNumbers'];
    }

    /*
     * Sets pageNumbers
     *
     * @param int[] $pageNumbers Preview page numbers
     *
     * @return $this
     */
    public function setPageNumbers($pageNumbers)
    {
        $this->container['pageNumbers'] = $pageNumbers;

        return $this;
    }

    /*
     * Gets previewFormat
     *
     * @return string
     */
    public function getPreviewFormat()
    {
        return $this->container['previewFormat'];
    }

    /*
     * Sets previewFormat
     *
     * @param string $previewFormat Preview format
     *
     * @return $this
     */
    public function setPreviewFormat($previewFormat)
    {
        $allowedValues = $this->getPreviewFormatAllowableValues();
        if ((!is_numeric($previewFormat) && !in_array($previewFormat, $allowedValues)) || (is_numeric($previewFormat) && !in_array($allowedValues[$previewFormat], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'previewFormat', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['previewFormat'] = $previewFormat;

        return $this;
    }

    /*
     * Gets hideSignatures
     *
     * @return bool
     */
    public function getHideSignatures()
    {
        return $this->container['hideSignatures'];
    }

    /*
     * Sets hideSignatures
     *
     * @param bool $hideSignatures Flag to hide signatures from page preview image. Only signatures are marked as IsSignature will be hidden from generated document page image
     *
     * @return $this
     */
    public function setHideSignatures($hideSignatures)
    {
        $this->container['hideSignatures'] = $hideSignatures;

        return $this;
    }

    /*
     * Gets outputPath
     *
     * @return string
     */
    public function getOutputPath()
    {
        return $this->container['outputPath'];
    }

    /*
     * Sets outputPath
     *
     * @param string $outputPath Set path for output pages. If not set then default path used.
     *
     * @return $this
     */
    public function setOutputPath($outputPath)
    {
        $this->container['outputPath'] = $outputPath;

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


