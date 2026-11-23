<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ImageDigitalOptionsTest.php">
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
namespace GroupDocs\Signature\ModelTests;

use GroupDocs\Signature\Model;
use GroupDocs\Signature\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/*
 * Offline tests (no cloud connection needed) for ImageDigital signature models.
 */
class ImageDigitalOptionsTest extends TestCase
{
    public function testSignOptionsSerialization()
    {
        $options = new Model\SignImageDigitalOptions();
        $options->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE_DIGITAL);
        $options->setPassword("embed-password");

        $json = json_decode((string)$options, true);

        $this->assertSame("embed-password", $json["Password"]);
        $this->assertSame("ImageDigital", $json["SignatureType"]);
        $this->assertInstanceOf(Model\SignOptions::class, $options);
    }

    public function testVerifyOptionsSerialization()
    {
        $options = new Model\VerifyImageDigitalOptions();
        $options->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE_DIGITAL);
        $options->setPassword("embed-password");
        $options->setDetectionThresholdPercent(75);
        $options->setUseFullDataExtraction(true);

        $json = json_decode((string)$options, true);

        $this->assertSame("embed-password", $json["Password"]);
        $this->assertSame(75, $json["DetectionThresholdPercent"]);
        $this->assertTrue($json["UseFullDataExtraction"]);
        $this->assertInstanceOf(Model\VerifyOptions::class, $options);
    }

    public function testVerifyOptionsDeserialization()
    {
        $data = json_decode(
            '{"password":"p","detectionThresholdPercent":50,"useFullDataExtraction":false}'
        );

        $options = ObjectSerializer::deserialize($data, Model\VerifyImageDigitalOptions::class);

        $this->assertSame("p", $options->getPassword());
        $this->assertSame(50, $options->getDetectionThresholdPercent());
        $this->assertFalse($options->getUseFullDataExtraction());
    }

    public function testVerifyOptionsRequireUseFullDataExtraction()
    {
        $options = new Model\VerifyImageDigitalOptions();
        $options->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE_DIGITAL);
        $options->setAllPages(true);
        $this->assertFalse($options->valid());

        $options->setUseFullDataExtraction(false);
        $this->assertTrue($options->valid());
    }

    public function testImageDigitalSignatureTypeIsSupported()
    {
        $this->assertSame("ImageDigital", Model\OptionsBase::SIGNATURE_TYPE_IMAGE_DIGITAL);
        $this->assertSame("ImageDigital", Model\DeleteOptions::SIGNATURE_TYPE_IMAGE_DIGITAL);
        $this->assertSame("ImageDigital", Model\UpdateOptions::SIGNATURE_TYPE_IMAGE_DIGITAL);
        $this->assertSame("ImageDigital", Model\Signature::SIGNATURE_TYPE_IMAGE_DIGITAL);

        foreach ([new Model\OptionsBase(), new Model\DeleteOptions(), new Model\UpdateOptions(), new Model\Signature()] as $model) {
            $this->assertContains("ImageDigital", $model->getSignatureTypeAllowableValues());
        }
    }

    public function testPdfDigitalAppearanceForegroundImage()
    {
        $appearance = new Model\PdfDigitalSignatureAppearance();
        $appearance->setIsForegroundImage(true);

        $json = json_decode((string)$appearance, true);

        $this->assertTrue($json["IsForegroundImage"]);
        $this->assertTrue($appearance->getIsForegroundImage());
    }

    public function testSdkVersion()
    {
        $this->assertSame("26.11", (new \GroupDocs\Signature\Configuration())->getClientVersion());
    }
}
