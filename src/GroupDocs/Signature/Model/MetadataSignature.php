<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="MetadataSignature.php">
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
 * MetadataSignature
 *
 * @description Contains Metadata signature properties.
 */
class MetadataSignature extends Signature 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "MetadataSignature";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'type' => 'string',
        'dataType' => 'string',
        'value' => 'string',
        'name' => 'string',
        'id' => 'int',
        'size' => 'int',
        'description' => 'string',
        'tagPrefix' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'type' => null,
        'dataType' => null,
        'value' => null,
        'name' => null,
        'id' => null,
        'size' => 'int32',
        'description' => null,
        'tagPrefix' => null
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
        'type' => 'Type',
        'dataType' => 'DataType',
        'value' => 'Value',
        'name' => 'Name',
        'id' => 'Id',
        'size' => 'Size',
        'description' => 'Description',
        'tagPrefix' => 'TagPrefix'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'dataType' => 'setDataType',
        'value' => 'setValue',
        'name' => 'setName',
        'id' => 'setId',
        'size' => 'setSize',
        'description' => 'setDescription',
        'tagPrefix' => 'setTagPrefix'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'dataType' => 'getDataType',
        'value' => 'getValue',
        'name' => 'getName',
        'id' => 'getId',
        'size' => 'getSize',
        'description' => 'getDescription',
        'tagPrefix' => 'getTagPrefix'
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

    const TYPE_NONE = 'None';
    const TYPE_CERTIFICATE = 'Certificate';
    const TYPE_IMAGE = 'Image';
    const TYPE_PDF = 'Pdf';
    const TYPE_PRESENTATION = 'Presentation';
    const TYPE_SPREADSHEET = 'Spreadsheet';
    const TYPE_WORD_PROCESSING = 'WordProcessing';
    const DATA_TYPE_UNDEFINED = 'Undefined';
    const DATA_TYPE_BOOLEAN = 'Boolean';
    const DATA_TYPE_INTEGER = 'Integer';
    const DATA_TYPE_DOUBLE = 'Double';
    const DATA_TYPE_DATE_TIME = 'DateTime';
    const DATA_TYPE_STRING = 'String';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NONE,
            self::TYPE_CERTIFICATE,
            self::TYPE_IMAGE,
            self::TYPE_PDF,
            self::TYPE_PRESENTATION,
            self::TYPE_SPREADSHEET,
            self::TYPE_WORD_PROCESSING,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataTypeAllowableValues()
    {
        return [
            self::DATA_TYPE_UNDEFINED,
            self::DATA_TYPE_BOOLEAN,
            self::DATA_TYPE_INTEGER,
            self::DATA_TYPE_DOUBLE,
            self::DATA_TYPE_DATE_TIME,
            self::DATA_TYPE_STRING,
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

        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tagPrefix'] = isset($data['tagPrefix']) ? $data['tagPrefix'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['dataType'] === null) {
            $invalidProperties[] = "'dataType' can't be null";
        }
        $allowedValues = $this->getDataTypeAllowableValues();
        if (!in_array($this->container['dataType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'dataType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
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

        if ($this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        if ($this->container['dataType'] === null) {
            return false;
        }
        $allowedValues = $this->getDataTypeAllowableValues();
        if (!in_array($this->container['dataType'], $allowedValues)) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['size'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /*
     * Sets type
     *
     * @param string $type Specifies metadata type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if ((!is_numeric($type) && !in_array($type, $allowedValues)) || (is_numeric($type) && !in_array($allowedValues[$type], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'type', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['type'] = $type;

        return $this;
    }

    /*
     * Gets dataType
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /*
     * Sets dataType
     *
     * @param string $dataType Specifies metadata value type.
     *
     * @return $this
     */
    public function setDataType($dataType)
    {
        $allowedValues = $this->getDataTypeAllowableValues();
        if ((!is_numeric($dataType) && !in_array($dataType, $allowedValues)) || (is_numeric($dataType) && !in_array($allowedValues[$dataType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'dataType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['dataType'] = $dataType;

        return $this;
    }

    /*
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /*
     * Sets value
     *
     * @param string $value Specifies metadata object value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /*
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /*
     * Sets name
     *
     * @param string $name Specifies unique metadata name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /*
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /*
     * Sets id
     *
     * @param int $id The identifier of Image Metadata signature. See GroupDocs.Signature.Domain.ImageMetadataSignatures class that contains standard Signature with predefined Id value.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /*
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /*
     * Sets size
     *
     * @param int $size Size of  Image Metadata value
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /*
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /*
     * Sets description
     *
     * @param string $description Description for standard Image Metadata signature
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /*
     * Gets tagPrefix
     *
     * @return string
     */
    public function getTagPrefix()
    {
        return $this->container['tagPrefix'];
    }

    /*
     * Sets tagPrefix
     *
     * @param string $tagPrefix The prefix tag of Pdf Metadata signature name. By default this property is set to \"xmp\". Possible values are
     *
     * @return $this
     */
    public function setTagPrefix($tagPrefix)
    {
        $this->container['tagPrefix'] = $tagPrefix;

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


