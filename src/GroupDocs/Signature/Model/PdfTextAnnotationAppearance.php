<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PdfTextAnnotationAppearance.php">
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
 * PdfTextAnnotationAppearance
 *
 * @description Describes appearance of PDF text annotation object (Title, Subject, Content).
 */
class PdfTextAnnotationAppearance extends SignatureAppearance 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PdfTextAnnotationAppearance";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'border' => '\GroupDocs\Signature\Model\BorderLine',
        'borderEffect' => 'string',
        'borderEffectIntensity' => 'int',
        'contents' => 'string',
        'hCornerRadius' => 'int',
        'subject' => 'string',
        'title' => 'string',
        'vCornerRadius' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'border' => null,
        'borderEffect' => null,
        'borderEffectIntensity' => 'int32',
        'contents' => null,
        'hCornerRadius' => 'int32',
        'subject' => null,
        'title' => null,
        'vCornerRadius' => 'int32'
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
        'border' => 'Border',
        'borderEffect' => 'BorderEffect',
        'borderEffectIntensity' => 'BorderEffectIntensity',
        'contents' => 'Contents',
        'hCornerRadius' => 'HCornerRadius',
        'subject' => 'Subject',
        'title' => 'Title',
        'vCornerRadius' => 'VCornerRadius'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'border' => 'setBorder',
        'borderEffect' => 'setBorderEffect',
        'borderEffectIntensity' => 'setBorderEffectIntensity',
        'contents' => 'setContents',
        'hCornerRadius' => 'setHCornerRadius',
        'subject' => 'setSubject',
        'title' => 'setTitle',
        'vCornerRadius' => 'setVCornerRadius'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'border' => 'getBorder',
        'borderEffect' => 'getBorderEffect',
        'borderEffectIntensity' => 'getBorderEffectIntensity',
        'contents' => 'getContents',
        'hCornerRadius' => 'getHCornerRadius',
        'subject' => 'getSubject',
        'title' => 'getTitle',
        'vCornerRadius' => 'getVCornerRadius'
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

    const BORDER_EFFECT_NONE = 'None';
    const BORDER_EFFECT_CLOUDY = 'Cloudy';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBorderEffectAllowableValues()
    {
        return [
            self::BORDER_EFFECT_NONE,
            self::BORDER_EFFECT_CLOUDY,
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

        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['borderEffect'] = isset($data['borderEffect']) ? $data['borderEffect'] : null;
        $this->container['borderEffectIntensity'] = isset($data['borderEffectIntensity']) ? $data['borderEffectIntensity'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['hCornerRadius'] = isset($data['hCornerRadius']) ? $data['hCornerRadius'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['vCornerRadius'] = isset($data['vCornerRadius']) ? $data['vCornerRadius'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['borderEffect'] === null) {
            $invalidProperties[] = "'borderEffect' can't be null";
        }
        $allowedValues = $this->getBorderEffectAllowableValues();
        if (!in_array($this->container['borderEffect'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'borderEffect', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['borderEffectIntensity'] === null) {
            $invalidProperties[] = "'borderEffectIntensity' can't be null";
        }
        if ($this->container['hCornerRadius'] === null) {
            $invalidProperties[] = "'hCornerRadius' can't be null";
        }
        if ($this->container['vCornerRadius'] === null) {
            $invalidProperties[] = "'vCornerRadius' can't be null";
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

        if ($this->container['borderEffect'] === null) {
            return false;
        }
        $allowedValues = $this->getBorderEffectAllowableValues();
        if (!in_array($this->container['borderEffect'], $allowedValues)) {
            return false;
        }
        if ($this->container['borderEffectIntensity'] === null) {
            return false;
        }
        if ($this->container['hCornerRadius'] === null) {
            return false;
        }
        if ($this->container['vCornerRadius'] === null) {
            return false;
        }
        return true;
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
     * @param \GroupDocs\Signature\Model\BorderLine $border Represents border appearance
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;

        return $this;
    }

    /*
     * Gets borderEffect
     *
     * @return string
     */
    public function getBorderEffect()
    {
        return $this->container['borderEffect'];
    }

    /*
     * Sets borderEffect
     *
     * @param string $borderEffect Gets or sets border effect.
     *
     * @return $this
     */
    public function setBorderEffect($borderEffect)
    {
        $allowedValues = $this->getBorderEffectAllowableValues();
        if ((!is_numeric($borderEffect) && !in_array($borderEffect, $allowedValues)) || (is_numeric($borderEffect) && !in_array($allowedValues[$borderEffect], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'borderEffect', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['borderEffect'] = $borderEffect;

        return $this;
    }

    /*
     * Gets borderEffectIntensity
     *
     * @return int
     */
    public function getBorderEffectIntensity()
    {
        return $this->container['borderEffectIntensity'];
    }

    /*
     * Sets borderEffectIntensity
     *
     * @param int $borderEffectIntensity Gets or sets border effect intensity. Valid range of value is [0..2].
     *
     * @return $this
     */
    public function setBorderEffectIntensity($borderEffectIntensity)
    {
        $this->container['borderEffectIntensity'] = $borderEffectIntensity;

        return $this;
    }

    /*
     * Gets contents
     *
     * @return string
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /*
     * Sets contents
     *
     * @param string $contents Gets or sets content of annotation object.
     *
     * @return $this
     */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;

        return $this;
    }

    /*
     * Gets hCornerRadius
     *
     * @return int
     */
    public function getHCornerRadius()
    {
        return $this->container['hCornerRadius'];
    }

    /*
     * Sets hCornerRadius
     *
     * @param int $hCornerRadius Gets or sets horizontal corner radius.
     *
     * @return $this
     */
    public function setHCornerRadius($hCornerRadius)
    {
        $this->container['hCornerRadius'] = $hCornerRadius;

        return $this;
    }

    /*
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /*
     * Sets subject
     *
     * @param string $subject Gets or sets Subject representing description of the object.
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /*
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /*
     * Sets title
     *
     * @param string $title Gets or sets a Title that will be displayed in title bar of annotation object.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /*
     * Gets vCornerRadius
     *
     * @return int
     */
    public function getVCornerRadius()
    {
        return $this->container['vCornerRadius'];
    }

    /*
     * Sets vCornerRadius
     *
     * @param int $vCornerRadius Gets or sets vertical corner radius.
     *
     * @return $this
     */
    public function setVCornerRadius($vCornerRadius)
    {
        $this->container['vCornerRadius'] = $vCornerRadius;

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


