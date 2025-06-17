<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="FormatsApiTest.php">
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
namespace GroupDocs\Signature\ApiTests\GetInfo;

use GroupDocs\Signature\ApiTests;
use GroupDocs\Signature\ApiTests\Internal;

require_once __DIR__."\..\BaseApiTestCase.php";

class SignatureGetFormatsTest extends ApiTests\BaseApiTestCase
{
    public function testGetSupportedFileFormats()
    {        
        $response = self::$infoApi->getSupportedFileFormats();
       
        $formats = $response->getFormats();
        
        $this->assertFalse(empty($formats));
        foreach ($formats as $key => $format) {
            $this->assertNotEmpty($format->getExtension());
            $this->assertNotEmpty($format->getFileFormat());
        }
    }

    public function testGetSupportedBarcodes()
    {        
        $response = self::$infoApi->getSupportedBarcodes();
       
        $barcodes = $response->getBarcodeTypes();
        
        $this->assertFalse(empty($barcodes));
        foreach ($barcodes as $key => $barcode) {
            $this->assertNotEmpty($barcode->getName());            
        }
    }

    public function testGetSupportedQRCodes()
    {        
        $response = self::$infoApi->getSupportedQRCodes();
       
        $qrcodes = $response->getQRCodeTypes();
        
        $this->assertFalse(empty($qrcodes));
        foreach ($qrcodes as $key => $qrcode) {
            $this->assertNotEmpty($qrcode->getName());            
        }
    }    
}
