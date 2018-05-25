<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="PostVerifyBarcodeApiTest.php">
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

class PostVerifyBarcodeApiTest extends BaseApiTest
{
    //=================Cells Verify Barcode==============
    private function getOptionsDataCellsVerifyBarcode()
    {
        $options = new \GroupDocs\Signature\Model\CellsVerifyBarcodeOptionsData();
        $this->composeBarcodeVerifyOptionsData($options);
        return $options;
    } 
    
    public function testPostVerifyBarcodeCells()
    {
        $file = Internal\TestFiles::getFileSignedCells();        
        $options = $this->getOptionsDataCellsVerifyBarcode();
        $this->postVerifyBarcode($file,$options);
    }
   
    public function testPostVerifyBarcodeCellsFromUrl()
    {
        $file = Internal\TestFiles::getFileSignedCellsUrl();        
        $options = $this->getOptionsDataCellsVerifyBarcode();
        $this->postVerifyBarcodeUrl($file, $options);
    }

    //=================PDF Verify Barcode==============
    private function getOptionsDataPdfVerifyBarcode()
    {
        $options = new \GroupDocs\Signature\Model\PdfVerifyBarcodeOptionsData();        
        $this->composeBarcodeVerifyOptionsData($options);
        return $options;
    } 
    
    public function testPostVerifyBarcodePdf()
    {
        $file = Internal\TestFiles::getFileSignedPdf();        
        $options = $this->getOptionsDataPdfVerifyBarcode();
        $this->postVerifyBarcode($file,$options);
    }

    public function testPostVerifyBarcodePdfFromUrl()
    {
        $file = Internal\TestFiles::getFileSignedPdfUrl();        
        $options = $this->getOptionsDataPdfVerifyBarcode();
        $this->postVerifyBarcodeUrl($file, $options);        
    }

    //=================Common methods==============

    private function composeBarcodeVerifyOptionsData($options)
    {
        $options->setBarcodeTypeName("Code39Standard");
        $options->setMatchType("Contains");
        $options->setVerifyAllPages(true);
        $options->setText("123456789012");
    }

    private function postVerifyBarcode($file,$options)
    {              
        $request = new Requests\PostVerificationBarcodeRequest($file->fileName, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postVerificationBarcode($request);
        $this->assertVerifiedDocumentResponse($file, $response);
    }

    private function postVerifyBarcodeUrl($file,$options)
    {      
        $request = new Requests\PostVerificationBarcodeFromUrlRequest($file->url, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postVerificationBarcodeFromUrl($request);        
        $this->assertVerifiedDocumentResponse($file, $response);
    }
}
