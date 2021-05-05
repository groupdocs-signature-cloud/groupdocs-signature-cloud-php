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
require_once "SignOptions.php";

class SignCollectionTest extends  ApiTests\BaseApiTest
{
    public function testSignCollectionImage()
    {
        $file = Internal\TestFiles::GetImage01PagesJpg();
        $signedFileName = "Output\ImageCollectionSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options1 = new Model\SignBarcodeOptions();
        $options1->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE);
        SignOptions::populateBarcodeOptions($options1);

        $options2 = new Model\SignQRCodeOptions();
        $options2->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE);
        SignOptions::populateQRCodeOptions($options2);  
        
        $options4 = new Model\SignTextOptions();
        $options4->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE);
        SignOptions::populateTextOptions($options4);

        $options5 = new Model\SignImageOptions();
        $options5->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE);
        SignOptions::populateImageOptions($options5);        

        $options6 = new Model\SignStampOptions();
        $options6->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE);
        SignOptions::populateStampOptions($options6);        

        $settings->setOptions([$options1, $options2, $options4, $options5, $options6]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options1], $response, $file);
    } 

    public function testSignCollectionPdf()
    {
        $file = Internal\TestFiles::getFile01PagesPdf();
        $signedFileName = "Output\PdfCollectionSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options1 = new Model\SignBarcodeOptions();
        SignOptions::populateBarcodeOptions($options1);

        $options2 = new Model\SignQRCodeOptions();
        SignOptions::populateQRCodeOptions($options2);  
        
        $options3 = new Model\SignDigitalOptions();
        SignOptions::populateDigitalOptions($options3);        

        $options4 = new Model\SignTextOptions();
        SignOptions::populateTextOptions($options4);

        $options5 = new Model\SignImageOptions();
        SignOptions::populateImageOptions($options5);        

        $options6 = new Model\SignStampOptions();
        SignOptions::populateStampOptions($options6);        

        $settings->setOptions([$options1, $options2, $options3, $options4, $options5, $options6]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options1], $response, $file);
    }    

    public function testSignCollectionPresentation()
    {
        $file = Internal\TestFiles::getFile01PagesSlides();
        $signedFileName = "Output\PresentationCollectionSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options1 = new Model\SignBarcodeOptions();
        SignOptions::populateBarcodeOptions($options1);

        $options2 = new Model\SignQRCodeOptions();
        SignOptions::populateQRCodeOptions($options2);  
        
        $options4 = new Model\SignTextOptions();
        SignOptions::populateTextOptions($options4);

        $options5 = new Model\SignImageOptions();
        SignOptions::populateImageOptions($options5);        

        $options6 = new Model\SignStampOptions();
        SignOptions::populateStampOptions($options6);        

        $settings->setOptions([$options1, $options2, $options4, $options5, $options6]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options1], $response, $file);
    }

    public function testSignCollectionSpreadsheet()
    {
        $file = Internal\TestFiles::getFile01PagesCells();
        $signedFileName = "Output\SpreadsheetCollectionSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options1 = new Model\SignBarcodeOptions();
        SignOptions::populateBarcodeOptions($options1);

        $options2 = new Model\SignQRCodeOptions();
        SignOptions::populateQRCodeOptions($options2);  
        
        $options3 = new Model\SignDigitalOptions();
        SignOptions::populateDigitalOptions($options3);        

        $options4 = new Model\SignTextOptions();
        SignOptions::populateTextOptions($options4);

        $options5 = new Model\SignImageOptions();
        SignOptions::populateImageOptions($options5);        

        $options6 = new Model\SignStampOptions();
        SignOptions::populateStampOptions($options6);        

        $settings->setOptions([$options1, $options2, $options3, $options4, $options5, $options6]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options1], $response, $file);
    }

    public function testSignCollectionWordProcessing()
    {
        $file = Internal\TestFiles::getFile01PagesWords();
        $signedFileName = "Output\WordCollectionSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options1 = new Model\SignBarcodeOptions();
        SignOptions::populateBarcodeOptions($options1);

        $options2 = new Model\SignQRCodeOptions();
        SignOptions::populateQRCodeOptions($options2);  
        
        $options3 = new Model\SignDigitalOptions();
        SignOptions::populateDigitalOptions($options3);        

        $options4 = new Model\SignTextOptions();
        SignOptions::populateTextOptions($options4);

        $options5 = new Model\SignImageOptions();
        SignOptions::populateImageOptions($options5);        

        $options6 = new Model\SignStampOptions();
        SignOptions::populateStampOptions($options6);        

        $settings->setOptions([$options1, $options2, $options3, $options4, $options5, $options6]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options1], $response, $file);
    }    

    private function _checkResponse($optionsList, $response, $file)
    {
        $this->assertFalse(empty($response));
        $this->assertFalse(empty($response->getFileInfo()));
        $this->assertFalse($file->ToFileInfo()->getFilePath() == $response->getFileInfo()->getFilePath());
    }    
}
