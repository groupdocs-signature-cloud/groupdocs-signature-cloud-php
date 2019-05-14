<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd">
*   Copyright (c) 2003-2019 Aspose Pty Ltd
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
namespace GroupDocs\Signature\ApiTests\Sign;

use GroupDocs\Signature\Model;

class SignOptions
{
    public static function populateTextOptions($options)
    {
        $options->setPage(1);
        $options->setAllPages(false);        
        $options->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_TEXT);        
        $options->setText("John Smith");

        $options->setLeft(100);
        $options->setTop(100);
        $options->setWidth(100);
        $options->setHeight(100);
        $options->setLocationMeasureType(Model\SignTextOptions::LOCATION_MEASURE_TYPE_PIXELS);
        $options->setSizeMeasureType(Model\SignTextOptions::SIZE_MEASURE_TYPE_PIXELS);
        $options->setStretch(Model\SignTextOptions::STRETCH_NONE);
        $options->setRotationAngle(0);
        $options->setHorizontalAlignment(Model\SignTextOptions::HORIZONTAL_ALIGNMENT_NONE);
        $options->setVerticalAlignment(Model\SignTextOptions::VERTICAL_ALIGNMENT_NONE);
        $padding = new Model\Padding();
        $padding->setAll(5);
        $options->setMargin($padding);
        $options->setMarginMeasureType(Model\SignTextOptions::MARGIN_MEASURE_TYPE_PIXELS);
        $color = new Model\Color();
        $color->setWeb("BlueViolet");
        $options->setForeColor($color);
        $color = new Model\Color();
        $color->setWeb("DarkOrange");
        $options->setBorderColor($color);        
        $options->setBackgroundColor($color);
        $options->setBorderVisiblity(true);
        $options->setBorderDashStyle(Model\SignTextOptions::BORDER_DASH_STYLE_DASH);

        $pagesSetup = new Model\PagesSetup();
        $pagesSetup->setEvenPages(false);
        $pagesSetup->setFirstPage(true);
        $pagesSetup->setLastPage(false);
        $pagesSetup->setOddPages(false);
        $pagesSetup->setPageNumbers([1]);
        $options->setPagesSetup($pagesSetup);
    }  

    public static function populateBarcodeOptions($options)
    {
        $options->setPage(1);
        $options->setAllPages(false);        
        $options->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_BARCODE);        
        $options->setBarcodeType("Code128");
        $options->setText("123456789012");
        $options->setCodeTextAlignment(Model\SignBarcodeOptions::CODE_TEXT_ALIGNMENT_NONE);

        $options->setLeft(100);
        $options->setTop(100);
        $options->setWidth(300);
        $options->setHeight(100);
        $options->setLocationMeasureType(Model\SignTextOptions::LOCATION_MEASURE_TYPE_PIXELS);
        $options->setSizeMeasureType(Model\SignTextOptions::SIZE_MEASURE_TYPE_PIXELS);
        $options->setStretch(Model\SignTextOptions::STRETCH_NONE);
        $options->setRotationAngle(0);
        $options->setHorizontalAlignment(Model\SignTextOptions::HORIZONTAL_ALIGNMENT_NONE);
        $options->setVerticalAlignment(Model\SignTextOptions::VERTICAL_ALIGNMENT_NONE);
        $padding = new Model\Padding();
        $padding->setAll(5);
        $options->setMargin($padding);
        $options->setMarginMeasureType(Model\SignTextOptions::MARGIN_MEASURE_TYPE_PIXELS);
        $color = new Model\Color();
        $color->setWeb("BlueViolet");
        $options->setForeColor($color);
        $color = new Model\Color();
        $color->setWeb("DarkOrange");
        $options->setBorderColor($color);        
        $options->setBackgroundColor($color);
        $options->setOpacity(0.8);
        $padding = new Model\Padding();
        $padding->setAll(2);        
        $options->setInnerMargins($padding);
        $options->setBorderVisiblity(true);
        $options->setBorderDashStyle(Model\SignTextOptions::BORDER_DASH_STYLE_DASH);
        $options->setBorderWeight(12);

        $pagesSetup = new Model\PagesSetup();
        $pagesSetup->setEvenPages(false);
        $pagesSetup->setFirstPage(true);
        $pagesSetup->setLastPage(false);
        $pagesSetup->setOddPages(false);
        $pagesSetup->setPageNumbers([1]);
        $options->setPagesSetup($pagesSetup);
    }    

    public static function populateDigitalOptions($options)
    {
        $options->setPage(1);
        $options->setAllPages(false);        
        $options->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_DIGITAL);        
        $options->setImageGuid("Additional\\signature_01.jpg");
        $options->setCertificateGuid("Additional\SherlockHolmes.pfx");
        $options->setPassword("1234567890");        

        $options->setLeft(100);
        $options->setTop(100);
        $options->setWidth(300);
        $options->setHeight(100);
        $options->setLocationMeasureType(Model\SignTextOptions::LOCATION_MEASURE_TYPE_PIXELS);
        $options->setSizeMeasureType(Model\SignTextOptions::SIZE_MEASURE_TYPE_PIXELS);
        $options->setRotationAngle(0);
        $options->setHorizontalAlignment(Model\SignTextOptions::HORIZONTAL_ALIGNMENT_NONE);
        $options->setVerticalAlignment(Model\SignTextOptions::VERTICAL_ALIGNMENT_NONE);
        $padding = new Model\Padding();
        $padding->setAll(5);
        $options->setMargin($padding);
        $options->setMarginMeasureType(Model\SignTextOptions::MARGIN_MEASURE_TYPE_PIXELS);
        $options->setOpacity(0.8);

        $pagesSetup = new Model\PagesSetup();
        $pagesSetup->setEvenPages(false);
        $pagesSetup->setFirstPage(true);
        $pagesSetup->setLastPage(false);
        $pagesSetup->setOddPages(false);
        $pagesSetup->setPageNumbers([1]);
        $options->setPagesSetup($pagesSetup);
    }

    public static function populateImageOptions($options)
    {
        $options->setPage(1);
        $options->setAllPages(false);        
        $options->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE);
        $options->setImageGuid("Additional\\JohnSmithSign.png");

        $options->setLeft(100);
        $options->setTop(100);
        $options->setWidth(300);
        $options->setHeight(100);
        $options->setLocationMeasureType(Model\SignTextOptions::LOCATION_MEASURE_TYPE_PIXELS);
        $options->setSizeMeasureType(Model\SignTextOptions::SIZE_MEASURE_TYPE_PIXELS);
        $options->setRotationAngle(0);
        $options->setHorizontalAlignment(Model\SignTextOptions::HORIZONTAL_ALIGNMENT_NONE);
        $options->setVerticalAlignment(Model\SignTextOptions::VERTICAL_ALIGNMENT_NONE);
        $padding = new Model\Padding();
        $padding->setAll(5);
        $options->setMargin($padding);
        $options->setMarginMeasureType(Model\SignTextOptions::MARGIN_MEASURE_TYPE_PIXELS);
        $options->setOpacity(0.8);

        $pagesSetup = new Model\PagesSetup();
        $pagesSetup->setEvenPages(false);
        $pagesSetup->setFirstPage(true);
        $pagesSetup->setLastPage(false);
        $pagesSetup->setOddPages(false);
        $pagesSetup->setPageNumbers([1]);
        $options->setPagesSetup($pagesSetup);
    }

    public static function populateQRCodeOptions($options)
    {
        $options->setPage(1);
        $options->setAllPages(false);        
        $options->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_QR_CODE);        
        $options->setQRCodeType("Aztec");
        $options->setText("John Smit");

        $options->setLeft(100);
        $options->setTop(100);
        $options->setWidth(300);
        $options->setHeight(100);
        $options->setLocationMeasureType(Model\SignTextOptions::LOCATION_MEASURE_TYPE_PIXELS);
        $options->setSizeMeasureType(Model\SignTextOptions::SIZE_MEASURE_TYPE_PIXELS);
        $options->setStretch(Model\SignTextOptions::STRETCH_NONE);
        $options->setRotationAngle(0);
        $options->setHorizontalAlignment(Model\SignTextOptions::HORIZONTAL_ALIGNMENT_NONE);
        $options->setVerticalAlignment(Model\SignTextOptions::VERTICAL_ALIGNMENT_NONE);
        $padding = new Model\Padding();
        $padding->setAll(5);
        $options->setMargin($padding);
        $options->setMarginMeasureType(Model\SignTextOptions::MARGIN_MEASURE_TYPE_PIXELS);
        $color = new Model\Color();
        $color->setWeb("BlueViolet");
        $options->setForeColor($color);
        $color = new Model\Color();
        $color->setWeb("DarkOrange");
        $options->setBorderColor($color);        
        $options->setBackgroundColor($color);
        $options->setOpacity(0.8);
        $padding = new Model\Padding();
        $padding->setAll(2);        
        $options->setInnerMargins($padding);
        $options->setBorderVisiblity(true);
        $options->setBorderDashStyle(Model\SignTextOptions::BORDER_DASH_STYLE_DASH);
        $options->setBorderWeight(12);

        $pagesSetup = new Model\PagesSetup();
        $pagesSetup->setEvenPages(false);
        $pagesSetup->setFirstPage(true);
        $pagesSetup->setLastPage(false);
        $pagesSetup->setOddPages(false);
        $pagesSetup->setPageNumbers([1]);
        $options->setPagesSetup($pagesSetup);
    }

    public static function populateStampOptions($options)
    {
        $options->setPage(1);
        $options->setAllPages(false);        
        $options->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_STAMP);
        $options->setImageGuid("Additional\\JohnSmithSign.png");

        $options->setLeft(100);
        $options->setTop(100);
        $options->setWidth(300);
        $options->setHeight(100);
        $options->setLocationMeasureType(Model\SignTextOptions::LOCATION_MEASURE_TYPE_PIXELS);
        $options->setSizeMeasureType(Model\SignTextOptions::SIZE_MEASURE_TYPE_PIXELS);
        $options->setRotationAngle(0);
        $options->setHorizontalAlignment(Model\SignTextOptions::HORIZONTAL_ALIGNMENT_NONE);
        $options->setVerticalAlignment(Model\SignTextOptions::VERTICAL_ALIGNMENT_NONE);
        $padding = new Model\Padding();
        $padding->setAll(5);
        $options->setMargin($padding);
        $options->setMarginMeasureType(Model\SignTextOptions::MARGIN_MEASURE_TYPE_PIXELS);
        $options->setOpacity(0.8);
        $color = new Model\Color();
        $color->setWeb("CornflowerBlue");
        $options->setBackgroundColor($color);
        $options->setBackgroundColorCropType(Model\SignStampOptions::BACKGROUND_COLOR_CROP_TYPE_INNER_AREA);
        $options->setBackgroundImageCropType(Model\SignStampOptions::BACKGROUND_IMAGE_CROP_TYPE_MIDDLE_AREA);

        $stampLine = new Model\StampLine();
        $stampLine->setText("John Smith");
        $stampLine->setTextBottomIntent(5);
        $stampLine->setTextRepeatType(Model\StampLine::TEXT_REPEAT_TYPE_FULL_TEXT_REPEAT);
        $color = new Model\Color();
        $color->setWeb("Gold");
        $stampLine->setTextColor($color);        
        $stampLine->setHeight(30);
        $stampLine->setVisible(true);
        $options->setOuterLines([$stampLine]);

        $stampLine = new Model\StampLine();
        $stampLine->setText("John Smith");
        $stampLine->setTextBottomIntent(3);
        $stampLine->setTextRepeatType(Model\StampLine::TEXT_REPEAT_TYPE_NONE);
        $color = new Model\Color();
        $color->setWeb("Gold");
        $stampLine->setTextColor($color);        
        $stampLine->setHeight(30);
        $stampLine->setVisible(true);
        $options->setInnerLines([$stampLine]);        

        $pagesSetup = new Model\PagesSetup();
        $pagesSetup->setEvenPages(false);
        $pagesSetup->setFirstPage(true);
        $pagesSetup->setLastPage(false);
        $pagesSetup->setOddPages(false);
        $pagesSetup->setPageNumbers([1]);
        $options->setPagesSetup($pagesSetup);
    }

}
