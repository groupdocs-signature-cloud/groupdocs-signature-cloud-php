<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="BarcodesApiTest.php">
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

class BarcodesApiTest extends BaseApiTest
{
    /**
     * Test case for getSupportedBarcodes
     *
     * Retrieves list of supported barcodes.
     *
     */
    public function testGetSupportedBarcodes()
    {
        $request = new Requests\GetBarcodesRequest();

        $response = self::$signatureApi->getBarcodes($request);
       
        $barcodeTypes = $response->getBarcodeTypes();
        
        $this->assertFalse(empty($barcodeTypes));
        foreach ($barcodeTypes as $key => $barcodeType) {
            $this->assertNotEmpty($barcodeType->getName());
        }
    }
}
