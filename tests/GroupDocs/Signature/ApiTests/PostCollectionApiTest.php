<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="PostCollectionApiTest.php">
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

class PostSignatureCollectionApiTest extends BaseApiTest
{
    //=================Signature Collection==============
    private function getOptionsCollectionData()
    {
        // set options properties
        $collection = new \GroupDocs\Signature\Model\SignOptionsCollectionData(); 
        
        $optionsBarcode = new \GroupDocs\Signature\Model\PdfSignBarcodeOptionsData();
        $this->composeBarcodeSignOptionsData($optionsBarcode);

        $collection->add($optionsBarcode);

        $optionsQRCode = new \GroupDocs\Signature\Model\PdfSignQRCodeOptionsData();
        $this->composeQRCodeSignOptionsData($optionsQRCode);

        $collection->add($optionsQRCode);
        
        return $collection;
    } 
    
    public function testPostSignatureCollection()
    {
        $file = Internal\TestFiles::getFile01PagesPdf();        
        $collection = $this->getOptionsCollectionData();
        $this->postCollection($file, $collection);
    }

    public function testPostSignatureCollectionUrl()
    {
        $file = Internal\TestFiles::getFilePdfUrl();        
        $collection = $this->getOptionsCollectionData();
        $this->postCollectionUrl($file, $collection);       
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

    private function composeQRCodeSignOptionsData($options)
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

        // SignQRCodeOptionsData properties
        $options->setQRCodeTypeName("QR");
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

        return $options;
    }

    private function postCollection($file, $collection)
    {              
        $request = new Requests\PostCollectionRequest($file->fileName, $collection, $file->password, $file->folder);        
        $response = self::$signatureApi->postCollection($request);
        $this->assertSignedCollectionResponse($file, $response);
    }

    private function postCollectionUrl($file, $collection)
    {      
        $request = new Requests\PostCollectionFromUrlRequest($file->url, $collection, $file->password, $file->folder);        
        $response = self::$signatureApi->postCollectionFromUrl($request);
        $this->assertSignedCollectionResponse($file, $response);
    }
}
