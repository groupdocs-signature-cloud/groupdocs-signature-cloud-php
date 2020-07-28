<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="StorageApiTest.php">
*   Copyright (c) 2003-2020 Aspose Pty Ltd
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

use GroupDocs\Signature\ApiTests;
use GroupDocs\Signature\Model;
use GroupDocs\Signature\ApiTests\Internal;
use GroupDocs\Signature\Model\Requests;

require_once __DIR__."\..\BaseApiTest.php";
require_once __DIR__."\..\Internal\TestFiles.php";

class StorageApiTest extends ApiTests\BaseApiTest
{
    public function testGetDiscUsage()
    {
        $request = new Requests\getDiscUsageRequest();
       
        $response = self::$storageApi->getDiscUsage($request);

        $this->assertGreaterThan(0, $response->getTotalSize());
        $this->assertGreaterThan(0, $response->getUsedSize());     
    }    

    public function testStorageExist()
    {
        $request = new Requests\storageExistsRequest("First Storage");
       
        $response = self::$storageApi->storageExists($request);

        $this->assertTrue($response->getExists());    
    } 

    public function testGetFileVersions()
    {
        $testFile = Internal\TestFiles::getFile01PagesPdf();

        $request = new Requests\getFileVersionsRequest($testFile->folder . $testFile->fileName);
       
        $response = self::$storageApi->getFileVersions($request);

        $this->assertGreaterThan(0, count($response->getValue()));     
    }     

    public function testObjectExists()
    {
        $testFile = Internal\TestFiles::getFile01PagesPdf();

        $request = new Requests\objectExistsRequest($testFile->folder . $testFile->fileName);
       
        $response = self::$storageApi->objectExists($request);

        $this->assertTrue($response->getExists());   
        $this->assertFalse($response->getIsFolder());   
    }  
}
