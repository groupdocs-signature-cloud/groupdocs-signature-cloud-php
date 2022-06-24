<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PdfTextStickerAppearance.php">
 *   Copyright (c) 2003-2022 Aspose Pty Ltd
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
 * PdfTextStickerAppearance
 *
 * @description Describes appearance of PDF text annotation sticker object and pop-up window of sticker.
 */
class PdfTextStickerAppearance extends SignatureAppearance 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PdfTextStickerAppearance";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'contents' => 'string',
        'icon' => 'string',
        'opened' => 'bool',
        'subject' => 'string',
        'title' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'contents' => null,
        'icon' => null,
        'opened' => null,
        'subject' => null,
        'title' => null
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
        'contents' => 'Contents',
        'icon' => 'Icon',
        'opened' => 'Opened',
        'subject' => 'Subject',
        'title' => 'Title'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contents' => 'setContents',
        'icon' => 'setIcon',
        'opened' => 'setOpened',
        'subject' => 'setSubject',
        'title' => 'setTitle'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contents' => 'getContents',
        'icon' => 'getIcon',
        'opened' => 'getOpened',
        'subject' => 'getSubject',
        'title' => 'getTitle'
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

    const ICON_NOTE = 'Note';
    const ICON_COMMENT = 'Comment';
    const ICON_KEY = 'Key';
    const ICON_HELP = 'Help';
    const ICON_NEW_PARAGRAPH = 'NewParagraph';
    const ICON_PARAGRAPH = 'Paragraph';
    const ICON_INSERT = 'Insert';
    const ICON_CHECK = 'Check';
    const ICON_CROSS = 'Cross';
    const ICON_CIRCLE = 'Circle';
    const ICON_STAR = 'Star';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIconAllowableValues()
    {
        return [
            self::ICON_NOTE,
            self::ICON_COMMENT,
            self::ICON_KEY,
            self::ICON_HELP,
            self::ICON_NEW_PARAGRAPH,
            self::ICON_PARAGRAPH,
            self::ICON_INSERT,
            self::ICON_CHECK,
            self::ICON_CROSS,
            self::ICON_CIRCLE,
            self::ICON_STAR,
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

        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['opened'] = isset($data['opened']) ? $data['opened'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['icon'] === null) {
            $invalidProperties[] = "'icon' can't be null";
        }
        $allowedValues = $this->getIconAllowableValues();
        if (!in_array($this->container['icon'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'icon', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['opened'] === null) {
            $invalidProperties[] = "'opened' can't be null";
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

        if ($this->container['icon'] === null) {
            return false;
        }
        $allowedValues = $this->getIconAllowableValues();
        if (!in_array($this->container['icon'], $allowedValues)) {
            return false;
        }
        if ($this->container['opened'] === null) {
            return false;
        }
        return true;
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
     * @param string $contents Gets or sets the contents of pop-up window.
     *
     * @return $this
     */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;

        return $this;
    }

    /*
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /*
     * Sets icon
     *
     * @param string $icon Gets or sets the icon of sticker.
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $allowedValues = $this->getIconAllowableValues();
        if ((!is_numeric($icon) && !in_array($icon, $allowedValues)) || (is_numeric($icon) && !in_array($allowedValues[$icon], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'icon', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['icon'] = $icon;

        return $this;
    }

    /*
     * Gets opened
     *
     * @return bool
     */
    public function getOpened()
    {
        return $this->container['opened'];
    }

    /*
     * Sets opened
     *
     * @param bool $opened Setup if sticker pop-up window will be opened by default.
     *
     * @return $this
     */
    public function setOpened($opened)
    {
        $this->container['opened'] = $opened;

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
     * @param string $subject Gets or sets subject.
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
     * @param string $title Gets or sets title of pop-up window.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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


