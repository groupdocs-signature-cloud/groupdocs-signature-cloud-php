<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PagesSetup.php">
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

use \ArrayAccess;
use \GroupDocs\Signature\ObjectSerializer;

/*
 * PagesSetup
 *
 * @description Describes special pages of document to process
 */
class PagesSetup implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PagesSetup";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'firstPage' => 'bool',
        'lastPage' => 'bool',
        'oddPages' => 'bool',
        'evenPages' => 'bool',
        'pageNumbers' => 'int[]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'firstPage' => null,
        'lastPage' => null,
        'oddPages' => null,
        'evenPages' => null,
        'pageNumbers' => 'int32'
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
        'firstPage' => 'FirstPage',
        'lastPage' => 'LastPage',
        'oddPages' => 'OddPages',
        'evenPages' => 'EvenPages',
        'pageNumbers' => 'PageNumbers'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'firstPage' => 'setFirstPage',
        'lastPage' => 'setLastPage',
        'oddPages' => 'setOddPages',
        'evenPages' => 'setEvenPages',
        'pageNumbers' => 'setPageNumbers'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'firstPage' => 'getFirstPage',
        'lastPage' => 'getLastPage',
        'oddPages' => 'getOddPages',
        'evenPages' => 'getEvenPages',
        'pageNumbers' => 'getPageNumbers'
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
        $this->container['firstPage'] = isset($data['firstPage']) ? $data['firstPage'] : null;
        $this->container['lastPage'] = isset($data['lastPage']) ? $data['lastPage'] : null;
        $this->container['oddPages'] = isset($data['oddPages']) ? $data['oddPages'] : null;
        $this->container['evenPages'] = isset($data['evenPages']) ? $data['evenPages'] : null;
        $this->container['pageNumbers'] = isset($data['pageNumbers']) ? $data['pageNumbers'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['firstPage'] === null) {
            $invalidProperties[] = "'firstPage' can't be null";
        }
        if ($this->container['lastPage'] === null) {
            $invalidProperties[] = "'lastPage' can't be null";
        }
        if ($this->container['oddPages'] === null) {
            $invalidProperties[] = "'oddPages' can't be null";
        }
        if ($this->container['evenPages'] === null) {
            $invalidProperties[] = "'evenPages' can't be null";
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

        if ($this->container['firstPage'] === null) {
            return false;
        }
        if ($this->container['lastPage'] === null) {
            return false;
        }
        if ($this->container['oddPages'] === null) {
            return false;
        }
        if ($this->container['evenPages'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets firstPage
     *
     * @return bool
     */
    public function getFirstPage()
    {
        return $this->container['firstPage'];
    }

    /*
     * Sets firstPage
     *
     * @param bool $firstPage Get or set flag to use first document page
     *
     * @return $this
     */
    public function setFirstPage($firstPage)
    {
        $this->container['firstPage'] = $firstPage;

        return $this;
    }

    /*
     * Gets lastPage
     *
     * @return bool
     */
    public function getLastPage()
    {
        return $this->container['lastPage'];
    }

    /*
     * Sets lastPage
     *
     * @param bool $lastPage Get or set flag to use last document page
     *
     * @return $this
     */
    public function setLastPage($lastPage)
    {
        $this->container['lastPage'] = $lastPage;

        return $this;
    }

    /*
     * Gets oddPages
     *
     * @return bool
     */
    public function getOddPages()
    {
        return $this->container['oddPages'];
    }

    /*
     * Sets oddPages
     *
     * @param bool $oddPages Get or set flag to use odd pages of document
     *
     * @return $this
     */
    public function setOddPages($oddPages)
    {
        $this->container['oddPages'] = $oddPages;

        return $this;
    }

    /*
     * Gets evenPages
     *
     * @return bool
     */
    public function getEvenPages()
    {
        return $this->container['evenPages'];
    }

    /*
     * Sets evenPages
     *
     * @param bool $evenPages Get or set flag to use even pages of document
     *
     * @return $this
     */
    public function setEvenPages($evenPages)
    {
        $this->container['evenPages'] = $evenPages;

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
     * @param int[] $pageNumbers Set arbitrary pages of document to use
     *
     * @return $this
     */
    public function setPageNumbers($pageNumbers)
    {
        $this->container['pageNumbers'] = $pageNumbers;

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


