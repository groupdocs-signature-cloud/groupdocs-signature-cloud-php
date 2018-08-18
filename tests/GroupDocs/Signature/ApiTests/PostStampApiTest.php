<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="PostStampApiTest.php">
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

class PostStampApiTest extends BaseApiTest
{
    //=================Cells Sign Stamp==============
    private function getOptionsDataCellsSignStamp()
    {
        // set options properties
        $options = new \GroupDocs\Signature\Model\CellsSignStampOptionsData();
        $options->setSheetNumber(1);
        $this->composeStampSignOptionsData($options);
        return $options;
    } 
    
    public function testPostStampCells()
    {
        $file = Internal\TestFiles::getFile02PagesCells();        
        $options = $this->getOptionsDataCellsSignStamp();
        $this->postStamp($file,$options);
    }
   
    public function testPostStampCellsPassword()
    {
        $file = Internal\TestFiles::getFile01PagesCellsPwd();        
        $options = $this->getOptionsDataCellsSignStamp();
        $this->postStamp($file,$options);
    }

    public function testPostStampCellsFromUrl()
    {
        $file = Internal\TestFiles::getFileCellsUrl();        
        $options = $this->getOptionsDataCellsSignStamp();
        $this->postStampUrl($file, $options);
    }

    //=================PDF Sign Stamp==============
    private function getOptionsDataPdfSignStamp()
    {
        // set options properties
        $options = new \GroupDocs\Signature\Model\PdfSignStampOptionsData();        
        $this->composeStampSignOptionsData($options);
        return $options;
    } 
    
    public function testPostStampPdf()
    {
        $file = Internal\TestFiles::getFile02PagesPdf();        
        $options = $this->getOptionsDataPdfSignStamp();
        $this->postStamp($file,$options);
    }

    public function testPostStampPdfPassword()
    {
        $file = Internal\TestFiles::getFile01PagesPdfPwd();        
        $options = $this->getOptionsDataPdfSignStamp();        
        $this->postStamp($file,$options);
    }
   
    public function testPostStampPdfFromUrl()
    {
        $file = Internal\TestFiles::getFilePdfUrl();        
        $options = $this->getOptionsDataPdfSignStamp();
        $this->postStampUrl($file, $options);        
    }

    private function composeStampSignOptionsData($options)
    {
        // create color objects
        $clrCornflowerBlue = $this->getColor("#6495ed");
        $clrGold = $this->getColor("#ffd700");
        $clrBlueViolet = $this->getColor("#6495ed");
        $clrDarkOrange = $this->getColor("#ff8c00");
        $clrOliveDrab = $this->getColor("#6b8e23");
        $clrGhostWhite = $this->getColor("#f8f8ff");
       
        
        // set background image
        $imageFile = Internal\TestFiles::GetImage00();
        $imageGuid = $imageFile->folder . "/" . $imageFile->fileName;
        $options->setImageGuid($imageGuid);
        // set background color
        $options->setBackgroundColor($clrCornflowerBlue);
        // set pages properties
        $options->setSignAllPages(false);
        // set size properties
        $options->setWidth(200);
        $options->setHeight(150);
        $options->setSizeMeasureType($options::SIZE_MEASURE_TYPE_PIXELS);
        // set location properties
        $options->setLocationMeasureType($options::LOCATION_MEASURE_TYPE_PIXELS);
        // set alignment properties
        $options->setHorizontalAlignment($options::HORIZONTAL_ALIGNMENT_NONE);
        $options->setVerticalAlignment($options::VERTICAL_ALIGNMENT_NONE);
        // set margin
        $margin = new \GroupDocs\Signature\Model\PaddingData();
        $margin->setAll(10);
        $options->setMargin($margin);
        $options->setMarginMeasureType($options::MARGIN_MEASURE_TYPE_PIXELS);
        // set additional options
        $options->setRotationAngle(45);
        $options->setOpacity(0.9);
        $options->setBackgroundColorCropType($options::BACKGROUND_COLOR_CROP_TYPE_INNER_AREA);
        $options->setBackgroundImageCropType($options::BACKGROUND_IMAGE_CROP_TYPE_MIDDLE_AREA);

        // add outer line
        $outerLine = new \GroupDocs\Signature\Model\StampLineData();
        $outerLine->setText("John Smith");
        $fontOuterLine = $this->getFont("Arial",12,true,true,true);
        $outerLine->setFont($fontOuterLine);
        $outerLine->setTextBottomIntent(5);
        $outerLine->setTextColor($clrGold);
        $outerLine->setTextRepeatType($outerLine::TEXT_REPEAT_TYPE_FULL_TEXT_REPEAT);
        $outerLine->setBackgroundColor($clrBlueViolet);
        $outerLine->setHeight(20);
        $outerLine->setVisible(true);
        // set outer line inner border
        $outerLineInnerBorder = new \GroupDocs\Signature\Model\BorderLineData();
        $outerLineInnerBorder->setColor($clrDarkOrange);
        $outerLineInnerBorder->setStyle($outerLineInnerBorder::STYLE_LONG_DASH);
        $outerLineInnerBorder->setTransparency(0.5);
        $outerLineInnerBorder->setWeight(1.2);
        $outerLine->setInnerBorder($outerLineInnerBorder);
        // set outer line outer border
        $outerLineOuterBorder = new \GroupDocs\Signature\Model\BorderLineData();
        $outerLineOuterBorder->setColor($clrDarkOrange);
        $outerLineOuterBorder->setStyle($outerLineOuterBorder::STYLE_LONG_DASH_DOT);
        $outerLineOuterBorder->setTransparency(0.7);
        $outerLineOuterBorder->setWeight(1.4);
        $outerLine->setOuterBorder($outerLineOuterBorder);
        $options->setOuterLines(array($outerLine));

        // add inner line
        $innerLine = new \GroupDocs\Signature\Model\StampLineData();
        $innerLine->setText("John Smith");
        $fontInnerLine = $this->getFont("Arial",20,true,true,true);
        $innerLine->setFont($fontInnerLine);
        $innerLine->setTextBottomIntent(3);
        $innerLine->setTextColor($clrGold);
        $innerLine->setTextRepeatType($innerLine::TEXT_REPEAT_TYPE_NONE);
        $innerLine->setBackgroundColor($clrCornflowerBlue);
        $innerLine->setHeight(30);
        $innerLine->setVisible(true);
        // set inner line inner border
        $innerLineInnerBorder = new \GroupDocs\Signature\Model\BorderLineData();
        $innerLineInnerBorder->setColor($clrOliveDrab);
        $innerLineInnerBorder->setStyle($innerLineInnerBorder::STYLE_LONG_DASH);
        $innerLineInnerBorder->setTransparency(0.5);
        $innerLineInnerBorder->setWeight(1.2);
        $innerLine->setInnerBorder($innerLineInnerBorder);
        // set inner line outer border
        $innerLineOuterBorder = new \GroupDocs\Signature\Model\BorderLineData();
        $innerLineOuterBorder->setColor($clrGhostWhite);
        $innerLineOuterBorder->setStyle($innerLineOuterBorder::STYLE_DOT);
        $innerLineOuterBorder->setTransparency(0.4);
        $innerLineOuterBorder->setWeight(1.4);
        $innerLine->setOuterBorder($innerLineOuterBorder);
        $options->setInnerLines(array($innerLine));

    }

    private function postStamp($file,$options)
    {              
        $request = new Requests\PostStampRequest($file->fileName, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postStamp($request);
        $this->assertSignedDocumentResponse($file, $response);
    }

    private function postStampUrl($file,$options)
    {      
        $request = new Requests\PostStampFromUrlRequest($file->url, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postStampFromUrl($request);        
        $this->assertSignedDocumentResponse($file, $response);
    }
}
