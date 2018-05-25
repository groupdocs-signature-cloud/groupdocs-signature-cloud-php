<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="PostSearchQRCodeApiTest.php">
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

class PostSearchQRCodeApiTest extends BaseApiTest
{
    //=================Cells Search QRCode==============
    private function getOptionsDataCellsSearchQRCode()
    {
        $options = new \GroupDocs\Signature\Model\CellsSearchQRCodeOptionsData();
        $this->composeQRCodeSearchOptionsData($options);
        return $options;
    } 
    
    public function testPostSearchQRCodeCells()
    {
        $file = Internal\TestFiles::getFileSignedCells();        
        $options = $this->getOptionsDataCellsSearchQRCode();
        $this->postSearchQRCode($file,$options);
    }
   
    public function testPostSearchQRCodeCellsFromUrl()
    {
        $file = Internal\TestFiles::getFileSignedCellsUrl();        
        $options = $this->getOptionsDataCellsSearchQRCode();
        $this->postSearchQRCodeUrl($file, $options);
    }

    //=================PDF Search QRCode==============
    private function getOptionsDataPdfSearchQRCode()
    {
        $options = new \GroupDocs\Signature\Model\PdfSearchQRCodeOptionsData();        
        $this->composeQRCodeSearchOptionsData($options);
        return $options;
    } 
    
    public function testPostSearchQRCodePdf()
    {
        $file = Internal\TestFiles::getFileSignedPdf();        
        $options = $this->getOptionsDataPdfSearchQRCode();
        $this->postSearchQRCode($file,$options);
    }

    public function testPostSearchQRCodePdfFromUrl()
    {
        $file = Internal\TestFiles::getFileSignedPdfUrl();        
        $options = $this->getOptionsDataPdfSearchQRCode();
        $this->postSearchQRCodeUrl($file, $options);        
    }

    //=================Common methods==============

    private function composeQRCodeSearchOptionsData($options)
    {
        $options->setQRCodeTypeName("Aztec");
        $options->setMatchType("Contains");
        $options->setSearchAllPages(true);
        $options->setText("John Smith");
    }

    private function postSearchQRCode($file,$options)
    {              
        $request = new Requests\PostSearchQRCodeRequest($file->fileName, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postSearchQRCode($request);
        $this->assertSearchDocumentResponse($file, $response);
    }

    private function postSearchQRCodeUrl($file,$options)
    {      
        $request = new Requests\PostSearchQRCodeFromUrlRequest($file->url, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postSearchQRCodeFromUrl($request);        
        $this->assertSearchDocumentResponse($file, $response);
    }
}
