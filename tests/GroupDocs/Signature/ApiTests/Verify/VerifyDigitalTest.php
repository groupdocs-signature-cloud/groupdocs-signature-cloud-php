<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd">
*   Copyright (c) 2003-2020 Aspose Pty Ltd
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

class VerifyDigitalTest extends  ApiTests\BaseApiTest
{
    public function testVerifyDigitalImage()
    {
        // Digital verification is not supported for images
    } 

    public function testVerifyDigitalPdf()
    {
        $file = Internal\TestFiles::getFileSignedPdf();
        $settings = new Model\VerifySettings();
        $settings->setFileInfo($file->ToFileInfo());

        $options = new Model\VerifyDigitalOptions();
        VerifyOptions::populateDigitalOptions($options);

        $settings->setOptions([$options]);
        $response = self::$signApi->verifySignatures(new Requests\verifySignaturesRequest($settings));
        $this->_checkResponse($response, $file);
    }    

    public function testVerifyDigitalPresentation()
    {
        // Digital verification is not supported for presentations
    }

    public function testVerifyDigitalSpreadsheet()
    {
        $file = Internal\TestFiles::getFileSignedCells();
        $settings = new Model\VerifySettings();
        $settings->setFileInfo($file->ToFileInfo());

        $options = new Model\VerifyDigitalOptions();
        VerifyOptions::populateDigitalOptions($options);

        $settings->setOptions([$options]);
        $response = self::$signApi->verifySignatures(new Requests\verifySignaturesRequest($settings));
        $this->_checkResponse($response, $file);
    }

    public function testVerifyDigitalWordProcessing()
    {
        $file = Internal\TestFiles::getFileWordsSigned();
        $settings = new Model\VerifySettings();
        $settings->setFileInfo($file->ToFileInfo());

        $options = new Model\VerifyDigitalOptions();
        VerifyOptions::populateDigitalOptions($options);

        $settings->setOptions([$options]);
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
