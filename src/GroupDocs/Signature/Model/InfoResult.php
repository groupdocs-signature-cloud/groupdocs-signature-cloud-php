<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="InfoResult.php">
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

use \ArrayAccess;
use \GroupDocs\Signature\ObjectSerializer;

/*
 * InfoResult
 *
 * @description Document info result
 */
class InfoResult implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "InfoResult";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fileInfo' => '\GroupDocs\Signature\Model\FileInfo',
        'extension' => 'string',
        'fileFormat' => 'string',
        'size' => 'int',
        'pagesCount' => 'int',
        'dateCreated' => '\DateTime',
        'dateModified' => '\DateTime',
        'widthForMaxHeight' => 'int',
        'maxPageHeight' => 'int',
        'pages' => '\GroupDocs\Signature\Model\PageInfo[]',
        'signatures' => '\GroupDocs\Signature\Model\Signature[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fileInfo' => null,
        'extension' => null,
        'fileFormat' => null,
        'size' => 'int64',
        'pagesCount' => 'int32',
        'dateCreated' => 'date-time',
        'dateModified' => 'date-time',
        'widthForMaxHeight' => 'int32',
        'maxPageHeight' => 'int32',
        'pages' => null,
        'signatures' => null
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
        'fileInfo' => 'FileInfo',
        'extension' => 'Extension',
        'fileFormat' => 'FileFormat',
        'size' => 'Size',
        'pagesCount' => 'PagesCount',
        'dateCreated' => 'DateCreated',
        'dateModified' => 'DateModified',
        'widthForMaxHeight' => 'WidthForMaxHeight',
        'maxPageHeight' => 'MaxPageHeight',
        'pages' => 'Pages',
        'signatures' => 'Signatures'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fileInfo' => 'setFileInfo',
        'extension' => 'setExtension',
        'fileFormat' => 'setFileFormat',
        'size' => 'setSize',
        'pagesCount' => 'setPagesCount',
        'dateCreated' => 'setDateCreated',
        'dateModified' => 'setDateModified',
        'widthForMaxHeight' => 'setWidthForMaxHeight',
        'maxPageHeight' => 'setMaxPageHeight',
        'pages' => 'setPages',
        'signatures' => 'setSignatures'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fileInfo' => 'getFileInfo',
        'extension' => 'getExtension',
        'fileFormat' => 'getFileFormat',
        'size' => 'getSize',
        'pagesCount' => 'getPagesCount',
        'dateCreated' => 'getDateCreated',
        'dateModified' => 'getDateModified',
        'widthForMaxHeight' => 'getWidthForMaxHeight',
        'maxPageHeight' => 'getMaxPageHeight',
        'pages' => 'getPages',
        'signatures' => 'getSignatures'
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
        $this->container['fileInfo'] = isset($data['fileInfo']) ? $data['fileInfo'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['fileFormat'] = isset($data['fileFormat']) ? $data['fileFormat'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['pagesCount'] = isset($data['pagesCount']) ? $data['pagesCount'] : null;
        $this->container['dateCreated'] = isset($data['dateCreated']) ? $data['dateCreated'] : null;
        $this->container['dateModified'] = isset($data['dateModified']) ? $data['dateModified'] : null;
        $this->container['widthForMaxHeight'] = isset($data['widthForMaxHeight']) ? $data['widthForMaxHeight'] : null;
        $this->container['maxPageHeight'] = isset($data['maxPageHeight']) ? $data['maxPageHeight'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
        $this->container['signatures'] = isset($data['signatures']) ? $data['signatures'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['pagesCount'] === null) {
            $invalidProperties[] = "'pagesCount' can't be null";
        }
        if ($this->container['dateCreated'] === null) {
            $invalidProperties[] = "'dateCreated' can't be null";
        }
        if ($this->container['dateModified'] === null) {
            $invalidProperties[] = "'dateModified' can't be null";
        }
        if ($this->container['widthForMaxHeight'] === null) {
            $invalidProperties[] = "'widthForMaxHeight' can't be null";
        }
        if ($this->container['maxPageHeight'] === null) {
            $invalidProperties[] = "'maxPageHeight' can't be null";
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

        if ($this->container['size'] === null) {
            return false;
        }
        if ($this->container['pagesCount'] === null) {
            return false;
        }
        if ($this->container['dateCreated'] === null) {
            return false;
        }
        if ($this->container['dateModified'] === null) {
            return false;
        }
        if ($this->container['widthForMaxHeight'] === null) {
            return false;
        }
        if ($this->container['maxPageHeight'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets fileInfo
     *
     * @return \GroupDocs\Signature\Model\FileInfo
     */
    public function getFileInfo()
    {
        return $this->container['fileInfo'];
    }

    /*
     * Sets fileInfo
     *
     * @param \GroupDocs\Signature\Model\FileInfo $fileInfo Input File info
     *
     * @return $this
     */
    public function setFileInfo($fileInfo)
    {
        $this->container['fileInfo'] = $fileInfo;

        return $this;
    }

    /*
     * Gets extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /*
     * Sets extension
     *
     * @param string $extension Document extension
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /*
     * Gets fileFormat
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->container['fileFormat'];
    }

    /*
     * Sets fileFormat
     *
     * @param string $fileFormat Document file format
     *
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
        $this->container['fileFormat'] = $fileFormat;

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
     * @param int $size Document size in bytes
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /*
     * Gets pagesCount
     *
     * @return int
     */
    public function getPagesCount()
    {
        return $this->container['pagesCount'];
    }

    /*
     * Sets pagesCount
     *
     * @param int $pagesCount Count of pages in document
     *
     * @return $this
     */
    public function setPagesCount($pagesCount)
    {
        $this->container['pagesCount'] = $pagesCount;

        return $this;
    }

    /*
     * Gets dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /*
     * Sets dateCreated
     *
     * @param \DateTime $dateCreated Document created date
     *
     * @return $this
     */
    public function setDateCreated($dateCreated)
    {
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /*
     * Gets dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['dateModified'];
    }

    /*
     * Sets dateModified
     *
     * @param \DateTime $dateModified Document modification date
     *
     * @return $this
     */
    public function setDateModified($dateModified)
    {
        $this->container['dateModified'] = $dateModified;

        return $this;
    }

    /*
     * Gets widthForMaxHeight
     *
     * @return int
     */
    public function getWidthForMaxHeight()
    {
        return $this->container['widthForMaxHeight'];
    }

    /*
     * Sets widthForMaxHeight
     *
     * @param int $widthForMaxHeight Specifies width for max height of document page
     *
     * @return $this
     */
    public function setWidthForMaxHeight($widthForMaxHeight)
    {
        $this->container['widthForMaxHeight'] = $widthForMaxHeight;

        return $this;
    }

    /*
     * Gets maxPageHeight
     *
     * @return int
     */
    public function getMaxPageHeight()
    {
        return $this->container['maxPageHeight'];
    }

    /*
     * Sets maxPageHeight
     *
     * @param int $maxPageHeight Specifies max page height
     *
     * @return $this
     */
    public function setMaxPageHeight($maxPageHeight)
    {
        $this->container['maxPageHeight'] = $maxPageHeight;

        return $this;
    }

    /*
     * Gets pages
     *
     * @return \GroupDocs\Signature\Model\PageInfo[]
     */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /*
     * Sets pages
     *
     * @param \GroupDocs\Signature\Model\PageInfo[] $pages List of document pages descriptions
     *
     * @return $this
     */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;

        return $this;
    }

    /*
     * Gets signatures
     *
     * @return \GroupDocs\Signature\Model\Signature[]
     */
    public function getSignatures()
    {
        return $this->container['signatures'];
    }

    /*
     * Sets signatures
     *
     * @param \GroupDocs\Signature\Model\Signature[] $signatures Collection of document signatures
     *
     * @return $this
     */
    public function setSignatures($signatures)
    {
        $this->container['signatures'] = $signatures;

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


