<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd">
*   Copyright (c) Aspose Pty Ltd
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


require_once __DIR__."\..\BaseApiTestCase.php";
require_once __DIR__."\..\Internal\TestFiles.php";
require_once "SignOptions.php";

class SignDigitalTest extends ApiTests\BaseApiTestCase
{
    // public function testSignDigitalImage()
    // {
    //     // Digital signatures are not supported for images
    // } 

    public function testSignDigitalPdf()
    {
        $file = Internal\TestFiles::getFile01PagesPdf();
        $signedFileName = "Output\PdfDigitalSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options = new Model\SignDigitalOptions();
        SignOptions::populateDigitalOptions($options);

        $settings->setOptions([$options]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }    

    // public function testSignDigitalPresentation()
    // {
    //     // Digital signatures are not supported for presentations
    // }

    public function testSignDigitalSpreadsheet()
    {
        $file = Internal\TestFiles::getFile01PagesCells();
        $signedFileName = "Output\SpreadsheetDigitalSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options = new Model\SignDigitalOptions();
        SignOptions::populateDigitalOptions($options);

        $settings->setOptions([$options]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }

    public function testSignDigitalWordProcessing()
    {
        $file = Internal\TestFiles::getFile01PagesWords();
        $signedFileName = "Output\WordDigitalSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options = new Model\SignDigitalOptions();
        SignOptions::populateDigitalOptions($options);

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
