<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="VerifyDigitalOptions.php">
 *   Copyright (c) 2003-2020 Aspose Pty Ltd
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
 * VerifyDigitalOptions
 *
 * @description Defines options to verify Digital signature within a document
 */
class VerifyDigitalOptions extends VerifyOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "VerifyDigitalOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'password' => 'string',
        'certificateFilePath' => 'string',
        'comments' => 'string',
        'signDateTimeFrom' => '\DateTime',
        'signDateTimeTo' => '\DateTime',
        'reason' => 'string',
        'contact' => 'string',
        'location' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'password' => null,
        'certificateFilePath' => null,
        'comments' => null,
        'signDateTimeFrom' => 'date-time',
        'signDateTimeTo' => 'date-time',
        'reason' => null,
        'contact' => null,
        'location' => null
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
        'password' => 'Password',
        'certificateFilePath' => 'CertificateFilePath',
        'comments' => 'Comments',
        'signDateTimeFrom' => 'SignDateTimeFrom',
        'signDateTimeTo' => 'SignDateTimeTo',
        'reason' => 'Reason',
        'contact' => 'Contact',
        'location' => 'Location'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'password' => 'setPassword',
        'certificateFilePath' => 'setCertificateFilePath',
        'comments' => 'setComments',
        'signDateTimeFrom' => 'setSignDateTimeFrom',
        'signDateTimeTo' => 'setSignDateTimeTo',
        'reason' => 'setReason',
        'contact' => 'setContact',
        'location' => 'setLocation'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'password' => 'getPassword',
        'certificateFilePath' => 'getCertificateFilePath',
        'comments' => 'getComments',
        'signDateTimeFrom' => 'getSignDateTimeFrom',
        'signDateTimeTo' => 'getSignDateTimeTo',
        'reason' => 'getReason',
        'contact' => 'getContact',
        'location' => 'getLocation'
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

        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['certificateFilePath'] = isset($data['certificateFilePath']) ? $data['certificateFilePath'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['signDateTimeFrom'] = isset($data['signDateTimeFrom']) ? $data['signDateTimeFrom'] : null;
        $this->container['signDateTimeTo'] = isset($data['signDateTimeTo']) ? $data['signDateTimeTo'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
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
     * @param string $password Password of Digital Certificate if required
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
     * @param string $certificateFilePath File Guid of Digital Certificate
     *
     * @return $this
     */
    public function setCertificateFilePath($certificateFilePath)
    {
        $this->container['certificateFilePath'] = $certificateFilePath;

        return $this;
    }

    /*
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /*
     * Sets comments
     *
     * @param string $comments Comments of Digital Signature to validate Suitable for Spreadsheet and Words Processing document types
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /*
     * Gets signDateTimeFrom
     *
     * @return \DateTime
     */
    public function getSignDateTimeFrom()
    {
        return $this->container['signDateTimeFrom'];
    }

    /*
     * Sets signDateTimeFrom
     *
     * @param \DateTime $signDateTimeFrom Date and time range of Digital Signature to validate. Null value will be ignored. Suitable for Spreadsheet and Words Processing document types
     *
     * @return $this
     */
    public function setSignDateTimeFrom($signDateTimeFrom)
    {
        $this->container['signDateTimeFrom'] = $signDateTimeFrom;

        return $this;
    }

    /*
     * Gets signDateTimeTo
     *
     * @return \DateTime
     */
    public function getSignDateTimeTo()
    {
        return $this->container['signDateTimeTo'];
    }

    /*
     * Sets signDateTimeTo
     *
     * @param \DateTime $signDateTimeTo Date and time range of Digital Signature to validate. Null value will be ignored Suitable for Spreadsheet and Words Processing document types
     *
     * @return $this
     */
    public function setSignDateTimeTo($signDateTimeTo)
    {
        $this->container['signDateTimeTo'] = $signDateTimeTo;

        return $this;
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
     * @param string $reason Reason of Digital Signature to validate Suitable for Pdf document type
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
     * @param string $contact Signature Contact to validate Suitable for Pdf document type
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
     * @param string $location Signature Location to validate Suitable for Pdf document type
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

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


