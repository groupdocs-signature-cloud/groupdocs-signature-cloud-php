<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd">
*   Copyright (c) 2003-2019 Aspose Pty Ltd
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

class SignBarcodeTest extends  ApiTests\BaseApiTest
{
    public function testSignBarcodeImage()
    {
        $file = Internal\TestFiles::GetImage01PagesJpg();
        $signedFileName = "Output\ImageBarcodeSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options = new Model\SignBarcodeOptions();
        $options->setDocumentType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE);
        SignOptions::populateBarcodeOptions($options);

        $settings->setOptions([$options]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    } 

    public function testSignBarcodePdf()
    {
        $file = Internal\TestFiles::getFile01PagesPdf();
        $signedFileName = "Output\PdfBarcodeSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options = new Model\SignBarcodeOptions();
        $options->setDocumentType(Model\OptionsBase::DOCUMENT_TYPE_PDF);
        SignOptions::populateBarcodeOptions($options);

        $settings->setOptions([$options]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }    

    public function testSignBarcodePresentation()
    {
        $file = Internal\TestFiles::getFile01PagesSlides();
        $signedFileName = "Output\PresentationBarcodeSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options = new Model\SignBarcodeOptions();
        $options->setDocumentType(Model\OptionsBase::DOCUMENT_TYPE_PRESENTATION);
        SignOptions::populateBarcodeOptions($options);

        $settings->setOptions([$options]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }

    public function testSignBarcodeSpreadsheet()
    {
        $file = Internal\TestFiles::getFile01PagesCells();
        $signedFileName = "Output\SpreadsheetBarcodeSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options = new Model\SignBarcodeOptions();
        $options->setDocumentType(Model\OptionsBase::DOCUMENT_TYPE_SPREADSHEET);
        SignOptions::populateBarcodeOptions($options);

        $settings->setOptions([$options]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }

    public function testSignBarcodeWordProcessing()
    {
        $file = Internal\TestFiles::getFile01PagesWords();
        $signedFileName = "Output\WordBarcodeSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options = new Model\SignBarcodeOptions();
        $options->setDocumentType(Model\OptionsBase::DOCUMENT_TYPE_WORD_PROCESSING);
        SignOptions::populateBarcodeOptions($options);

        $settings->setOptions([$options]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }    

    private function _checkResponse($optionsList, $response, $file)
    {
        $this->assertFalse(empty($response));
        $this->assertFalse(empty($response->getFileInfo()));
        $this->assertFalse($file->ToFileInfo()->getFilePath() == $response->getFileInfo()->getFilePath());
    }    
}
