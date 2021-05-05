<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="FolderApiTest.php">
*   Copyright (c) 2003-2021 Aspose Pty Ltd
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

class FolderApiTest extends ApiTests\BaseApiTest
{
    public function testGetFilesList()
    {
        $request = new Requests\getFilesListRequest("Images");
       
        $response = self::$folderApi->getFilesList($request);

        $this->assertGreaterThan(0, count($response->getValue()));    
    }    

    public function testCopyMoveDeleteFolder()
    {               
        self::$folderApi->createFolder(new Requests\createFolderRequest("temp"));
        self::$folderApi->copyFolder(new Requests\copyFolderRequest("temp", "temp1"));
        $response = self::$storageApi->objectExists(new Requests\objectExistsRequest("temp1"));
        $this->assertTrue($response->getExists());   
        $this->assertTrue($response->getIsFolder());  

        self::$folderApi->moveFolder(new Requests\moveFolderRequest("temp1", "temp2"));
        $response = self::$storageApi->objectExists(new Requests\objectExistsRequest("temp1"));
        $this->assertFalse($response->getExists());
        $response = self::$storageApi->objectExists(new Requests\objectExistsRequest("temp2"));
        $this->assertTrue($response->getExists());

        self::$folderApi->deleteFolder(new Requests\deleteFolderRequest("temp"));
        self::$folderApi->deleteFolder(new Requests\deleteFolderRequest("temp2"));
    }
}
