<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SignDigitalOptions.php">
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
 * SignDigitalOptions
 *
 * @description Represents the Digital sign options
 */
class SignDigitalOptions extends SignImageOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SignDigitalOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'reason' => 'string',
        'contact' => 'string',
        'location' => 'string',
        'visible' => 'bool',
        'password' => 'string',
        'certificateFilePath' => 'string',
        'xAdESType' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'reason' => null,
        'contact' => null,
        'location' => null,
        'visible' => null,
        'password' => null,
        'certificateFilePath' => null,
        'xAdESType' => null
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
        'reason' => 'Reason',
        'contact' => 'Contact',
        'location' => 'Location',
        'visible' => 'Visible',
        'password' => 'Password',
        'certificateFilePath' => 'CertificateFilePath',
        'xAdESType' => 'XAdESType'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reason' => 'setReason',
        'contact' => 'setContact',
        'location' => 'setLocation',
        'visible' => 'setVisible',
        'password' => 'setPassword',
        'certificateFilePath' => 'setCertificateFilePath',
        'xAdESType' => 'setXAdESType'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reason' => 'getReason',
        'contact' => 'getContact',
        'location' => 'getLocation',
        'visible' => 'getVisible',
        'password' => 'getPassword',
        'certificateFilePath' => 'getCertificateFilePath',
        'xAdESType' => 'getXAdESType'
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

    const X_AD_ES_TYPE_NONE = 'None';
    const X_AD_ES_TYPE_X_AD_ES = 'XAdES';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getXAdESTypeAllowableValues()
    {
        return [
            self::X_AD_ES_TYPE_NONE,
            self::X_AD_ES_TYPE_X_AD_ES,
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

        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['certificateFilePath'] = isset($data['certificateFilePath']) ? $data['certificateFilePath'] : null;
        $this->container['xAdESType'] = isset($data['xAdESType']) ? $data['xAdESType'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['visible'] === null) {
            $invalidProperties[] = "'visible' can't be null";
        }
        if ($this->container['xAdESType'] === null) {
            $invalidProperties[] = "'xAdESType' can't be null";
        }
        $allowedValues = $this->getXAdESTypeAllowableValues();
        if (!in_array($this->container['xAdESType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'xAdESType', must be one of '%s'",
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

        if ($this->container['visible'] === null) {
            return false;
        }
        if ($this->container['xAdESType'] === null) {
            return false;
        }
        $allowedValues = $this->getXAdESTypeAllowableValues();
        if (!in_array($this->container['xAdESType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /*
     * Sets reason
     *
     * @param string $reason Gets or sets the reason of signature.
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /*
     * Gets contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /*
     * Sets contact
     *
     * @param string $contact Gets or sets the signature contact.
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /*
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /*
     * Sets location
     *
     * @param string $location Gets or sets the signature location.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /*
     * Gets visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /*
     * Sets visible
     *
     * @param bool $visible Gets or sets the visibility of signature.
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /*
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /*
     * Sets password
     *
     * @param string $password Gets or sets the password of digital certificate
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /*
     * Gets certificateFilePath
     *
     * @return string
     */
    public function getCertificateFilePath()
    {
        return $this->container['certificateFilePath'];
    }

    /*
     * Sets certificateFilePath
     *
     * @param string $certificateFilePath Gets or sets the digital certificate file GUID
     *
     * @return $this
     */
    public function setCertificateFilePath($certificateFilePath)
    {
        $this->container['certificateFilePath'] = $certificateFilePath;

        return $this;
    }

    /*
     * Gets xAdESType
     *
     * @return string
     */
    public function getXAdESType()
    {
        return $this->container['xAdESType'];
    }

    /*
     * Sets xAdESType
     *
     * @param string $xAdESType XAdES type GroupDocs.Signature.Options.DigitalSignOptions.XAdESType. Default value is None (XAdES is off). At this moment XAdES signature type is supported only for Spreadsheet documents.
     *
     * @return $this
     */
    public function setXAdESType($xAdESType)
    {
        $allowedValues = $this->getXAdESTypeAllowableValues();
        if ((!is_numeric($xAdESType) && !in_array($xAdESType, $allowedValues)) || (is_numeric($xAdESType) && !in_array($allowedValues[$xAdESType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'xAdESType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['xAdESType'] = $xAdESType;

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


