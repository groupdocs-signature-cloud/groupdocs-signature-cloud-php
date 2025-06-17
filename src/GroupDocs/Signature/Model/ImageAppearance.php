<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ImageAppearance.php">
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
 * ImageAppearance
 *
 * @description Describes extended appearance features for Image Signature.
 */
class ImageAppearance extends SignatureAppearance 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ImageAppearance";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'brightness' => 'double',
        'contrast' => 'double',
        'gammaCorrection' => 'double',
        'grayscale' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'brightness' => 'double',
        'contrast' => 'double',
        'gammaCorrection' => 'double',
        'grayscale' => null
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
        'brightness' => 'Brightness',
        'contrast' => 'Contrast',
        'gammaCorrection' => 'GammaCorrection',
        'grayscale' => 'Grayscale'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brightness' => 'setBrightness',
        'contrast' => 'setContrast',
        'gammaCorrection' => 'setGammaCorrection',
        'grayscale' => 'setGrayscale'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brightness' => 'getBrightness',
        'contrast' => 'getContrast',
        'gammaCorrection' => 'getGammaCorrection',
        'grayscale' => 'getGrayscale'
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

        $this->container['brightness'] = isset($data['brightness']) ? $data['brightness'] : null;
        $this->container['contrast'] = isset($data['contrast']) ? $data['contrast'] : null;
        $this->container['gammaCorrection'] = isset($data['gammaCorrection']) ? $data['gammaCorrection'] : null;
        $this->container['grayscale'] = isset($data['grayscale']) ? $data['grayscale'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['brightness'] === null) {
            $invalidProperties[] = "'brightness' can't be null";
        }
        if ($this->container['contrast'] === null) {
            $invalidProperties[] = "'contrast' can't be null";
        }
        if ($this->container['gammaCorrection'] === null) {
            $invalidProperties[] = "'gammaCorrection' can't be null";
        }
        if ($this->container['grayscale'] === null) {
            $invalidProperties[] = "'grayscale' can't be null";
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

        if ($this->container['brightness'] === null) {
            return false;
        }
        if ($this->container['contrast'] === null) {
            return false;
        }
        if ($this->container['gammaCorrection'] === null) {
            return false;
        }
        if ($this->container['grayscale'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets brightness
     *
     * @return double
     */
    public function getBrightness()
    {
        return $this->container['brightness'];
    }

    /*
     * Sets brightness
     *
     * @param double $brightness Gets or sets image brightness. Default value is 1 it corresponds to original brightness of image.
     *
     * @return $this
     */
    public function setBrightness($brightness)
    {
        $this->container['brightness'] = $brightness;

        return $this;
    }

    /*
     * Gets contrast
     *
     * @return double
     */
    public function getContrast()
    {
        return $this->container['contrast'];
    }

    /*
     * Sets contrast
     *
     * @param double $contrast Gets or sets image contrast. Default value is 1 it corresponds to original contrast of image.
     *
     * @return $this
     */
    public function setContrast($contrast)
    {
        $this->container['contrast'] = $contrast;

        return $this;
    }

    /*
     * Gets gammaCorrection
     *
     * @return double
     */
    public function getGammaCorrection()
    {
        return $this->container['gammaCorrection'];
    }

    /*
     * Sets gammaCorrection
     *
     * @param double $gammaCorrection Gets or sets image gamma. Default value is 1 it corresponds to original gamma of image.
     *
     * @return $this
     */
    public function setGammaCorrection($gammaCorrection)
    {
        $this->container['gammaCorrection'] = $gammaCorrection;

        return $this;
    }

    /*
     * Gets grayscale
     *
     * @return bool
     */
    public function getGrayscale()
    {
        return $this->container['grayscale'];
    }

    /*
     * Sets grayscale
     *
     * @param bool $grayscale Setup this flag to true if gray-scale filter is required.
     *
     * @return $this
     */
    public function setGrayscale($grayscale)
    {
        $this->container['grayscale'] = $grayscale;

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


