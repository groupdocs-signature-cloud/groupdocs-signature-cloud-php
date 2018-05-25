<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="PostBarcodeApiTest.php">
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

class PostBarcodeApiTest extends BaseApiTest
{
    //=================Cells Sign Barcode==============
    private function getOptionsDataCellsSignBarcode()
    {
        // set options properties
        $options = new \GroupDocs\Signature\Model\CellsSignBarcodeOptionsData();
        $options->setSheetNumber(1);
        $this->composeBarcodeSignOptionsData($options);
        return $options;
    } 
    
    public function testPostBarcodeCells()
    {
        $file = Internal\TestFiles::getFile02PagesCells();        
        $options = $this->getOptionsDataCellsSignBarcode();
        $this->postBarcode($file,$options);
    }
   
    public function testPostBarcodeCellsPassword()
    {
        $file = Internal\TestFiles::getFile01PagesCellsPwd();        
        $options = $this->getOptionsDataCellsSignBarcode();
        $this->postBarcode($file,$options);
    }

    public function testPostBarcodeCellsFromUrl()
    {
        $file = Internal\TestFiles::getFileCellsUrl();        
        $options = $this->getOptionsDataCellsSignBarcode();
        $this->postBarcodeUrl($file, $options);
    }

    //=================PDF Sign Barcode==============
    private function getOptionsDataPdfSignBarcode()
    {
        // set options properties
        $options = new \GroupDocs\Signature\Model\PdfSignBarcodeOptionsData();        
        $this->composeBarcodeSignOptionsData($options);
        return $options;
    } 
    
    public function testPostBarcodePdf()
    {
        $file = Internal\TestFiles::getFile02PagesPdf();        
        $options = $this->getOptionsDataPdfSignBarcode();
        $this->postBarcode($file,$options);
    }

    public function testPostBarcodePdfPassword()
    {
        $file = Internal\TestFiles::getFile01PagesPdfPwd();        
        $options = $this->getOptionsDataPdfSignBarcode();        
        $this->postBarcode($file,$options);
    }
   
    public function testPostBarcodePdfFromUrl()
    {
        $file = Internal\TestFiles::getFilePdfUrl();        
        $options = $this->getOptionsDataPdfSignBarcode();
        $this->postBarcodeUrl($file, $options);        
    }

    private function composeBarcodeSignOptionsData($options)
    {
        // get colors
        $clrFore = $this->getColor("#ff0000");
        $clrBord = $this->getColor("#121212");
        $clrBack = $this->getColor("#ffaaaa");
       
        // setup font properties
        $font = $this->getFont("Arial",12,true,false,false);
        
        // set margin
        $margin = new \GroupDocs\Signature\Model\PaddingData();
        $margin->setAll(10);

        // SignBarcodeOptionsData properties
        $options->setBarcodeTypeName("Code128");
        $options->setBorderDashStyle($options::BORDER_DASH_STYLE_DASH_LONG_DASH_DOT);
        $options->setBorderWeight(1);
        $options->setOpacity(0.6);
        $options->setBorderVisiblity(true);
        // SignTextOptionsData properties
        $options->setText("12345678");
        $options->setLeft(100);
        $options->setTop(100);
        $options->setWidth(160);
        $options->setHeight(160);
        $options->setLocationMeasureType($options::LOCATION_MEASURE_TYPE_PIXELS);
        $options->setSizeMeasureType($options::SIZE_MEASURE_TYPE_PIXELS);
        $options->setStretch($options::STRETCH_NONE);
        $options->setRotationAngle(45);
        $options->setHorizontalAlignment($options::HORIZONTAL_ALIGNMENT_RIGHT);
        $options->setVerticalAlignment($options::VERTICAL_ALIGNMENT_BOTTOM);
        $options->setMargin($margin);
        $options->setMarginMeasureType($options::MARGIN_MEASURE_TYPE_PIXELS);
        $options->setSignAllPages(true);
        $options->setFont($font);
        $options->setForeColor($clrFore);
        $options->setBorderColor($clrBord);
        $options->setBackgroundColor($clrBack);
        // SignOptionsData properties
        $pagesSetup = $this->getPagesSetup(true,false,false,true);
        $options->setDocumentPageNumber(1);
        $options->setPagesSetup($pagesSetup); 
    }

    private function postBarcode($file,$options)
    {              
        $request = new Requests\PostBarcodeRequest($file->fileName, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postBarcode($request);
        $this->assertSignedDocumentResponse($file, $response);
    }

    private function postBarcodeUrl($file,$options)
    {      
        $request = new Requests\PostBarcodeFromUrlRequest($file->url, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postBarcodeFromUrl($request);        
        $this->assertSignedDocumentResponse($file, $response);
    }
}
