<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="PostSearchDigitalApiTest.php">
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

class PostSearchDigitalApiTest extends BaseApiTest
{
    //=================Cells Search Digital==============
    private function getOptionsDataCellsSearchDigital()
    {
        $options = new \GroupDocs\Signature\Model\CellsSearchDigitalOptionsData();
        $this->composeDigitalSearchOptionsData($options);
        return $options;
    } 
    
    public function testPostSearchDigitalCells()
    {
        $file = Internal\TestFiles::getFileSignedCells();        
        $options = $this->getOptionsDataCellsSearchDigital();
        $this->postSearchDigital($file,$options);
    }
   
    public function testPostSearchDigitalCellsFromUrl()
    {
        $file = Internal\TestFiles::getFileSignedCellsUrl();        
        $options = $this->getOptionsDataCellsSearchDigital();
        $this->postSearchDigitalUrl($file, $options);
    }

    //=================PDF Search Digital==============
    private function getOptionsDataPdfSearchDigital()
    {
        $options = new \GroupDocs\Signature\Model\PdfSearchDigitalOptionsData();        
        $this->composeDigitalSearchOptionsData($options);
        return $options;
    } 
    
    public function testPostSearchDigitalPdf()
    {
        $file = Internal\TestFiles::getFileSignedPdf();        
        $options = $this->getOptionsDataPdfSearchDigital();
        $this->postSearchDigital($file,$options);
    }

    public function testPostSearchDigitalPdfFromUrl()
    {
        $file = Internal\TestFiles::getFileSignedPdfUrl();        
        $options = $this->getOptionsDataPdfSearchDigital();
        $this->postSearchDigitalUrl($file, $options);        
    }

    //=================Common methods==============

    private function composeDigitalSearchOptionsData($options)
    {
        $options->setSearchAllPages(true);
    }

    private function postSearchDigital($file,$options)
    {              
        $request = new Requests\PostSearchDigitalRequest($file->fileName, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postSearchDigital($request);
        $this->assertSearchDocumentResponse($file, $response);
    }

    private function postSearchDigitalUrl($file,$options)
    {      
        $request = new Requests\PostSearchDigitalFromUrlRequest($file->url, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postSearchDigitalFromUrl($request);        
        $this->assertSearchDocumentResponse($file, $response);
    }
}
