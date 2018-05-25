<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="PostVerifyTextApiTest.php">
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

class PostVerifyTextApiTest extends BaseApiTest
{
    //=================Cells Verify Text==============
    private function getOptionsDataCellsVerifyText()
    {
        $options = new \GroupDocs\Signature\Model\CellsVerifyTextOptionsData();
        $this->composeTextVerifyOptionsData($options);
        return $options;
    } 
    
    public function testPostVerifyTextCells()
    {
        $file = Internal\TestFiles::getFileSignedCells();        
        $options = $this->getOptionsDataCellsVerifyText();
        $this->postVerifyText($file,$options);
    }
   
    public function testPostVerifyTextCellsFromUrl()
    {
        $file = Internal\TestFiles::getFileSignedCellsUrl();        
        $options = $this->getOptionsDataCellsVerifyText();
        $this->postVerifyTextUrl($file, $options);
    }

    //=================Common methods==============

    private function composeTextVerifyOptionsData($options)
    {
        $options->setDocumentPageNumber(1);
        $options->setVerifyAllPages(true);
        $options->setText("John Smith");
    }

    private function postVerifyText($file,$options)
    {              
        $request = new Requests\PostVerificationTextRequest($file->fileName, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postVerificationText($request);
        $this->assertVerifiedDocumentResponse($file, $response);
    }

    private function postVerifyTextUrl($file,$options)
    {      
        $request = new Requests\PostVerificationTextFromUrlRequest($file->url, $options, $file->password, $file->folder);        
        $response = self::$signatureApi->postVerificationTextFromUrl($request);        
        $this->assertVerifiedDocumentResponse($file, $response);
    }
}
