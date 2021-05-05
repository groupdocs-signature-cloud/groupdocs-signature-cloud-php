<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd">
*   Copyright (c) 2003-2021 Aspose Pty Ltd
* </copyright>
* <summary>
*  Permission is hereby granted, free of charge, to any person obtaining a copy
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
namespace GroupDocs\Signature\ApiTests\Sign;

use GroupDocs\Signature\ApiTests;
use GroupDocs\Signature\Model;
use GroupDocs\Signature\ApiTests\Internal;
use GroupDocs\Signature\Model\Requests;


require_once __DIR__."\..\BaseApiTest.php";
require_once __DIR__."\..\Internal\TestFiles.php";
require_once "VerifyOptions.php";

class VerifyCollectionTest extends  ApiTests\BaseApiTest
{
    public function testVerifyCollectionImage()
    {
        $file = Internal\TestFiles::getImageSigned();
        $settings = new Model\VerifySettings();
        $settings->setFileInfo($file->ToFileInfo());

        $options1 = new Model\VerifyBarcodeOptions();
        $options1->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE);
        VerifyOptions::populateBarcodeOptions($options1);

        $options2 = new Model\VerifyQRCodeOptions();
        $options2->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE);
        VerifyOptions::populateQRCodeOptions($options2);

        $settings->setOptions([$options1, $options2]);
        $response = self::$signApi->verifySignatures(new Requests\verifySignaturesRequest($settings));
        $this->_checkResponse($response, $file);
    } 

    public function testVerifyCollectionPdf()
    {
        $file = Internal\TestFiles::getFileSignedPdf();
        $settings = new Model\VerifySettings();
        $settings->setFileInfo($file->ToFileInfo());

        $options1 = new Model\VerifyBarcodeOptions();
        VerifyOptions::populateBarcodeOptions($options1);

        $options2 = new Model\VerifyQRCodeOptions();
        VerifyOptions::populateQRCodeOptions($options2);

        $options3 = new Model\VerifyDigitalOptions();
        VerifyOptions::populateDigitalOptions($options3);        

        $options4 = new Model\VerifyTextOptions();
        VerifyOptions::populateTextOptions($options4);        

        $settings->setOptions([$options1, $options2, $options3, $options4]);                
        $response = self::$signApi->verifySignatures(new Requests\verifySignaturesRequest($settings));
        $this->_checkResponse($response, $file);
    }    

    public function testVerifyCollectionPresentation()
    {
        $file = Internal\TestFiles::getFileSlidesSigned();
        $settings = new Model\VerifySettings();
        $settings->setFileInfo($file->ToFileInfo());

        $options1 = new Model\VerifyBarcodeOptions();
        VerifyOptions::populateBarcodeOptions($options1);

        $options2 = new Model\VerifyQRCodeOptions();
        VerifyOptions::populateQRCodeOptions($options2);

        $options4 = new Model\VerifyTextOptions();
        VerifyOptions::populateTextOptions($options4);        

        $settings->setOptions([$options1, $options2, $options4]);
        $response = self::$signApi->verifySignatures(new Requests\verifySignaturesRequest($settings));
        $this->_checkResponse($response, $file);
    }

    public function testVerifyCollectionSpreadsheet()
    {
        $file = Internal\TestFiles::getFileSignedCells();
        $settings = new Model\VerifySettings();
        $settings->setFileInfo($file->ToFileInfo());

        $options1 = new Model\VerifyBarcodeOptions();
        VerifyOptions::populateBarcodeOptions($options1);

        $options2 = new Model\VerifyQRCodeOptions();
        VerifyOptions::populateQRCodeOptions($options2);

        $options3 = new Model\VerifyDigitalOptions();
        VerifyOptions::populateDigitalOptions($options3);        

        $options4 = new Model\VerifyTextOptions();
        VerifyOptions::populateTextOptions($options4);        

        $settings->setOptions([$options1, $options2, $options3, $options4]);  
        $response = self::$signApi->verifySignatures(new Requests\verifySignaturesRequest($settings));
        $this->_checkResponse($response, $file);
    }

    public function testVerifyCollectionWordProcessing()
    {
        $file = Internal\TestFiles::getFileWordsSigned();
        $settings = new Model\VerifySettings();
        $settings->setFileInfo($file->ToFileInfo());

        $options1 = new Model\VerifyBarcodeOptions();
        VerifyOptions::populateBarcodeOptions($options1);

        $options2 = new Model\VerifyQRCodeOptions();
        VerifyOptions::populateQRCodeOptions($options2);

        $options3 = new Model\VerifyDigitalOptions();
        VerifyOptions::populateDigitalOptions($options3);        

        $options4 = new Model\VerifyTextOptions();
        VerifyOptions::populateTextOptions($options4);        

        $settings->setOptions([$options1, $options2, $options3, $options4]); 
        $response = self::$signApi->verifySignatures(new Requests\verifySignaturesRequest($settings));
        $this->_checkResponse($response, $file);
    }    

    private function _checkResponse($response, $file)
    {
        $this->assertFalse(empty($response));
        $this->assertEquals($file->size, $response->getSize());
        $this->assertEquals($file->ToFileInfo()->getFilePath(), $response->getFileInfo()->getFilePath());
    }    
}
