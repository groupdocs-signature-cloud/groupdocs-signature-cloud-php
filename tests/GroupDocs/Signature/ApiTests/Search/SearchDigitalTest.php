<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd">
*   Copyright (c) Aspose Pty Ltd
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


require_once __DIR__."\..\BaseApiTestCase.php";
require_once __DIR__."\..\Internal\TestFiles.php";

class SearchDigitalTest extends ApiTests\BaseApiTestCase
{
    public function testSearchDigitalPdf()
    {
        $file = Internal\TestFiles::getFileSignedPdf();
        $settings = new Model\SearchSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $options = new Model\SearchDigitalOptions();
        $this->_populateOptions($options);
        $settings->setOptions([$options]);
        $response = self::$signApi->searchSignatures(new Requests\searchSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }    

    public function testSearchDigitalSpreadSheet()
    {
        $file = Internal\TestFiles::getFileSignedCells();
        $settings = new Model\SearchSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $options = new Model\SearchDigitalOptions();
        $this->_populateOptions($options);
        $settings->setOptions([$options]);
        $response = self::$signApi->searchSignatures(new Requests\searchSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    }    

    public function testSearchDigitalWords()
    {
        $file = Internal\TestFiles::getFileWordsSigned();
        $settings = new Model\SearchSettings();
        $settings->setFileInfo($file->ToFileInfo());
        $options = new Model\SearchDigitalOptions();
        $this->_populateOptions($options);
        $settings->setOptions([$options]);
        $response = self::$signApi->searchSignatures(new Requests\searchSignaturesRequest($settings));
        $this->_checkResponse([$options], $response, $file);
    } 

    private function _populateOptions($options)
    {
        $options->setSignatureType(Model\OptionsBase::SIGNATURE_TYPE_DIGITAL);
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
                if($signature->getSignatureType() === $options->getSignatureType())
                {
                    $exists = true;
                }
            }
            $this->assertTrue($exists);
        }
    }    
}
