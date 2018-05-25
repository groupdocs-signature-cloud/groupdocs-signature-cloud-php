<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="PostVerifyDigitalApiTest.php">
*   Copyright (c) 2003-2018 Aspose Pty Ltd
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
namespace GroupDocs\Signature\ApiTests;

use GroupDocs\Signature\Model\Requests;
use GroupDocs\Signature\ApiTests\Internal;

require_once "BaseApiTest.php";
require_once "Internal\TestFiles.php";

class PostVerifyDigitalApiTest extends BaseApiTest
{
    //=================Cells Verify Digital==============
    private function getOptionsDataCellsVerifyDigital()
    {
        $options = new \GroupDocs\Signature\Model\CellsVerifyDigitalOptionsData();
        $this->composeDigitalVerifyOptionsData($options);
        return $options;
    } 
    
    public function testPostVerifyDigitalCells()
    {
        $file = Internal\TestFiles::getFileSignedCells();        
        $options = $this->getOptionsDataCellsVerifyDigital();
        $this->postVerifyDigital($file,$options);
    }
   
    public function testPostVerifyDigitalCellsFromUrl()
    {
        $file = Internal\TestFiles::getFileSignedCellsUrl();        
        $options = $this->getOptionsDataCellsVerifyDigital();
        $this->postVerifyDigitalUrl($file, $options);
    }

    //=================PDF Verify Digital==============
    private function getOptionsDataPdfVerifyDigital()
    {
        $options = new \GroupDocs\Signature\Model\PdfVerifyDigitalOptionsData();        
        $this->composeDigitalVerifyOptionsData($options);
        return $options;
    } 
    
    public function testPostVerifyDigitalPdf()
    {
        $file = Internal\TestFiles::getFileSignedPdf();        
        $options = $this->getOptionsDataPdfVerifyDigital();
        $this->postVerifyDigital($file,$options);
    }

    public function testPostVerifyDigitalPdfFromUrl()
    {
        $file = Internal\TestFiles::getFileSignedPdfUrl();        
        $options = $this->getOptionsDataPdfVerifyDigital();
        $this->postVerifyDigitalUrl($file, $options);        
    }

    //=================Common methods==============

    private function composeDigitalVerifyOptionsData($options)
    {
        $digitalFile = Internal\TestFiles::GetDigitalPfx02();
        $digitalGuid = $digitalFile->folder . "/" . $digitalFile->fileName;
        $options->setCertificateGuid($digitalGuid);

        $options->setPassword("1234567890");
    }

    private function postVerifyDigital($file,$options)
    {              
        $request = new Requests\PostVerificationDigitalRequest($file->fileName, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postVerificationDigital($request);
        $this->assertVerifiedDocumentResponse($file, $response);
    }

    private function postVerifyDigitalUrl($file,$options)
    {      
        $request = new Requests\PostVerificationDigitalFromUrlRequest($file->url, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postVerificationDigitalFromUrl($request);        
        $this->assertVerifiedDocumentResponse($file, $response);
    }
}
