<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd">
*   Copyright (c) 2003-2022 Aspose Pty Ltd
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

class SignStampTest extends  ApiTests\BaseApiTest
{
    public function testSignStampImage()
    {
        $file = Internal\TestFiles::GetImage01PagesJpg();
        $signedFileName = "Output\ImageStampSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options = new Model\SignStampOptions();
        $options->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE);
        SignOptions::populateStampOptions($options);

        $settings->setOptions([$options]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    } 

    public function testSignStampPdf()
    {
        $file = Internal\TestFiles::getFile01PagesPdf();
        $signedFileName = "Output\PdfStampSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options = new Model\SignStampOptions();
        SignOptions::populateStampOptions($options);

        $settings->setOptions([$options]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }    

    public function testSignStampPresentation()
    {
        $file = Internal\TestFiles::getFile01PagesSlides();
        $signedFileName = "Output\PresentationStampSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options = new Model\SignStampOptions();
        SignOptions::populateStampOptions($options);

        $settings->setOptions([$options]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }

    public function testSignStampSpreadsheet()
    {
        $file = Internal\TestFiles::getFile01PagesCells();
        $signedFileName = "Output\SpreadsheetStampSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options = new Model\SignStampOptions();
        SignOptions::populateStampOptions($options);

        $settings->setOptions([$options]);
        $response = self::$signApi->createSignatures(new Requests\createSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }

    public function testSignStampWordProcessing()
    {
        $file = Internal\TestFiles::getFile01PagesWords();
        $signedFileName = "Output\WordStampSigned." . $file->getExt();
        $settings = new Model\SignSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $saveOptions =  new Model\SaveOptions();
        $saveOptions->setOutputFilePath($signedFileName);
        $settings->setSaveOptions($saveOptions);

        $options = new Model\SignStampOptions();
        SignOptions::populateStampOptions($options);

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
