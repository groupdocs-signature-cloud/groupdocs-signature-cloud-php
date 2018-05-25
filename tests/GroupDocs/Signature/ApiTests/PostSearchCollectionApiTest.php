<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="PostSearchCollectionApiTest.php">
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

class PostSearchCollectionApiTest extends BaseApiTest
{
    //=================Search Collection==============
    private function getOptionsCollectionData()
    {
        // set options properties
        $collection = new \GroupDocs\Signature\Model\SearchOptionsCollectionData(); 
        
        $optionsBarcode = new \GroupDocs\Signature\Model\PdfSearchBarcodeOptionsData();
        $this->composeBarcodeSearchOptionsData($optionsBarcode);

        $collection->add($optionsBarcode);

        $optionsQRCode = new \GroupDocs\Signature\Model\PdfSearchQRCodeOptionsData();
        $this->composeQRCodeSearchOptionsData($optionsQRCode);

        $collection->add($optionsQRCode);
        
        return $collection;
    } 
    
    public function testPostSearchCollection()
    {
        $file = Internal\TestFiles::getFileSignedPdf();        
        $collection = $this->getOptionsCollectionData();
        $this->postCollection($file, $collection);
    }

    public function testPostSearchCollectionUrl()
    {
        $file = Internal\TestFiles::getFileSignedPdfUrl();        
        $collection = $this->getOptionsCollectionData();
        $this->postCollectionUrl($file, $collection);       
    }

    private function composeBarcodeSearchOptionsData($options)
    {
        $options->setBarcodeTypeName("Code39Standard");
        $options->setMatchType("Contains");
        $options->setSearchAllPages(true);
        $options->setText("123456789012");
    }

    private function composeQRCodeSearchOptionsData($options)
    {
        $options->setQRCodeTypeName("Aztec");
        $options->setMatchType("Contains");
        $options->setSearchAllPages(true);
        $options->setText("John Smith");
    }

    private function postCollection($file, $collection)
    {              
        $request = new Requests\PostSearchCollectionRequest($file->fileName, $collection, $file->password, $file->folder);        
        $response = self::$signatureApi->postSearchCollection($request);
        $this->assertSearchCollectionResponse($file, $response);
    }

    private function postCollectionUrl($file, $collection)
    {      
        $request = new Requests\PostSearchCollectionFromUrlRequest($file->url, $collection, $file->password, $file->folder);        
        $response = self::$signatureApi->postSearchCollectionFromUrl($request);
        $this->assertSearchCollectionResponse($file, $response);
    }
}
