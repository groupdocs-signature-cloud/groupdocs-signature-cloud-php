<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="PostVerifyQRCodeApiTest.php">
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

class PostVerifyQRCodeApiTest extends BaseApiTest
{
    //=================Cells Verify QRCode==============
    private function getOptionsDataCellsVerifyQRCode()
    {
        $options = new \GroupDocs\Signature\Model\CellsVerifyQRCodeOptionsData();
        $this->composeQRCodeVerifyOptionsData($options);
        return $options;
    } 
    
    public function testPostVerifyQRCodeCells()
    {
        $file = Internal\TestFiles::getFileSignedCells();        
        $options = $this->getOptionsDataCellsVerifyQRCode();
        $this->postVerifyQRCode($file,$options);
    }
   
    public function testPostVerifyQRCodeCellsFromUrl()
    {
        $file = Internal\TestFiles::getFileSignedCellsUrl();        
        $options = $this->getOptionsDataCellsVerifyQRCode();
        $this->postVerifyQRCodeUrl($file, $options);
    }

    //=================PDF Verify QRCode==============
    private function getOptionsDataPdfVerifyQRCode()
    {
        $options = new \GroupDocs\Signature\Model\PdfVerifyQRCodeOptionsData();        
        $this->composeQRCodeVerifyOptionsData($options);
        return $options;
    } 
    
    public function testPostVerifyQRCodePdf()
    {
        $file = Internal\TestFiles::getFileSignedPdf();        
        $options = $this->getOptionsDataPdfVerifyQRCode();
        $this->postVerifyQRCode($file,$options);
    }

    public function testPostVerifyQRCodePdfFromUrl()
    {
        $file = Internal\TestFiles::getFileSignedPdfUrl();        
        $options = $this->getOptionsDataPdfVerifyQRCode();
        $this->postVerifyQRCodeUrl($file, $options);        
    }

    //=================Common methods==============

    private function composeQRCodeVerifyOptionsData($options)
    {
        $options->setQRCodeTypeName("Aztec");
        $options->setMatchType("Contains");
        $options->setVerifyAllPages(true);
        $options->setText("John Smith");
    }

    private function postVerifyQRCode($file,$options)
    {              
        $request = new Requests\PostVerificationQRCodeRequest($file->fileName, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postVerificationQRCode($request);
        $this->assertVerifiedDocumentResponse($file, $response);
    }

    private function postVerifyQRCodeUrl($file,$options)
    {      
        $request = new Requests\PostVerificationQRCodeFromUrlRequest($file->url, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postVerificationQRCodeFromUrl($request);        
        $this->assertVerifiedDocumentResponse($file, $response);
    }
}
