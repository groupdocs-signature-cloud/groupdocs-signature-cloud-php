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
namespace GroupDocs\Signature\ApiTests\Search;

use GroupDocs\Signature\ApiTests;
use GroupDocs\Signature\Model;
use GroupDocs\Signature\ApiTests\Internal;
use GroupDocs\Signature\Model\Requests;


require_once __DIR__."\..\BaseApiTest.php";
require_once __DIR__."\..\Internal\TestFiles.php";

class SearchBarcodeTest extends  ApiTests\BaseApiTest
{
    public function testSearchBarcodeImage()
    {
        $file = Internal\TestFiles::getImageSigned();
        $settings = new Model\SearchSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $options = new Model\SearchBarcodeOptions();
        $options->setDocumentType(Model\OptionsBase::SIGNATURE_TYPE_IMAGE);
        $this->_populateOptions($options);
        $settings->setOptions([$options]);
        $response = self::$signApi->searchSignatures(new Requests\searchSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    } 

    public function testSearchBarcodePdf()
    {
        $file = Internal\TestFiles::getFileSignedPdf();
        $settings = new Model\SearchSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $options = new Model\SearchBarcodeOptions();
        $options->setDocumentType(Model\OptionsBase::DOCUMENT_TYPE_PDF);
        $this->_populateOptions($options);
        $settings->setOptions([$options]);
        $response = self::$signApi->searchSignatures(new Requests\searchSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }    

    public function testSearchBarcodePresentation()
    {
        $file = Internal\TestFiles::getFileSlidesSigned();
        $settings = new Model\SearchSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $options = new Model\SearchBarcodeOptions();
        $options->setDocumentType(Model\OptionsBase::DOCUMENT_TYPE_PRESENTATION);
        $this->_populateOptions($options);
        $settings->setOptions([$options]);
        $response = self::$signApi->searchSignatures(new Requests\searchSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }     

    public function testSearchBarcodeSpreadSheet()
    {
        $file = Internal\TestFiles::getFileSignedCells();
        $settings = new Model\SearchSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $options = new Model\SearchBarcodeOptions();
        $options->setDocumentType(Model\OptionsBase::DOCUMENT_TYPE_SPREADSHEET);
        $this->_populateOptions($options);
        $settings->setOptions([$options]);
        $response = self::$signApi->searchSignatures(new Requests\searchSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }    

    public function testSearchBarcodeWords()
    {
        $file = Internal\TestFiles::getFileWordsSigned();
        $settings = new Model\SearchSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $options = new Model\SearchBarcodeOptions();
        $options->setDocumentType(Model\OptionsBase::DOCUMENT_TYPE_WORD_PROCESSING);
        $this->_populateOptions($options);
        $settings->setOptions([$options]);
        $response = self::$signApi->searchSignatures(new Requests\searchSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    } 

    private function _populateOptions($options)
    {
        $options->setPage(1);
        $options->setAllPages(true);        
        $options->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_BARCODE);
        $options->setBarcodeType("Code39Standard");
        $options->setText("123456789012");
        $pagesSetup = new Model\PagesSetup();
        $pagesSetup->setEvenPages(false);
        $pagesSetup->setFirstPage(true);
        $pagesSetup->setLastPage(false);
        $pagesSetup->setOddPages(false);
        $pagesSetup->setPageNumbers([1]);
        $options->setPagesSetup($pagesSetup);
    }

    private function _checkResponse($optionsList, $response, $file)
    {
        $this->assertFalse(empty($response));
        $this->assertEquals($file->size, $response->getSize());
        $this->assertEquals($file->ToFileInfo()->getFilePath(), $response->getFileInfo()->getFilePath());
        $this->assertGreaterThan(0, count($response->getSignatures()));
        foreach ($optionsList as $options) {
            $exists = false;
            foreach ($response->getSignatures() as $signature) {
                if($signature->getSignatureType() === $options->getSignatureType() &&
                    $signature->getBarcodeType() === $options->getBarcodeType() &&
                    $signature->getText() === $options->getText() )
                {
                    $exists = true;
                }
            }
            $this->assertTrue($exists);
        }
    }    
}
