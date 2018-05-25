<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="PostSearchBarcodeApiTest.php">
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

class PostSearchBarcodeApiTest extends BaseApiTest
{
    //=================Cells Search Barcode==============
    private function getOptionsDataCellsSearchBarcode()
    {
        $options = new \GroupDocs\Signature\Model\CellsSearchBarcodeOptionsData();
        $this->composeBarcodeSearchOptionsData($options);
        return $options;
    } 
    
    public function testPostSearchBarcodeCells()
    {
        $file = Internal\TestFiles::getFileSignedCells();        
        $options = $this->getOptionsDataCellsSearchBarcode();
        $this->postSearchBarcode($file,$options);
    }
   
    public function testPostSearchBarcodeCellsFromUrl()
    {
        $file = Internal\TestFiles::getFileSignedCellsUrl();        
        $options = $this->getOptionsDataCellsSearchBarcode();
        $this->postSearchBarcodeUrl($file, $options);
    }

    //=================PDF Search Barcode==============
    private function getOptionsDataPdfSearchBarcode()
    {
        $options = new \GroupDocs\Signature\Model\PdfSearchBarcodeOptionsData();        
        $this->composeBarcodeSearchOptionsData($options);
        return $options;
    } 
    
    public function testPostSearchBarcodePdf()
    {
        $file = Internal\TestFiles::getFileSignedPdf();        
        $options = $this->getOptionsDataPdfSearchBarcode();
        $this->postSearchBarcode($file,$options);
    }

    public function testPostSearchBarcodePdfFromUrl()
    {
        $file = Internal\TestFiles::getFileSignedPdfUrl();        
        $options = $this->getOptionsDataPdfSearchBarcode();
        $this->postSearchBarcodeUrl($file, $options);        
    }

    //=================Common methods==============

    private function composeBarcodeSearchOptionsData($options)
    {
        $options->setBarcodeTypeName("Code39Standard");
        $options->setMatchType("Contains");
        $options->setSearchAllPages(true);
        $options->setText("123456789012");
    }

    private function postSearchBarcode($file,$options)
    {              
        $request = new Requests\PostSearchBarcodeRequest($file->fileName, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postSearchBarcode($request);
        $this->assertSearchDocumentResponse($file, $response);
    }

    private function postSearchBarcodeUrl($file,$options)
    {      
        $request = new Requests\PostSearchBarcodeFromUrlRequest($file->url, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postSearchBarcodeFromUrl($request);        
        $this->assertSearchDocumentResponse($file, $response);
    }
}
