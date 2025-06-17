<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="FileApiTest.php">
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
namespace GroupDocs\Signature\ApiTests;

use GroupDocs\Signature\ApiTests;
use GroupDocs\Signature\Model;
use GroupDocs\Signature\ApiTests\Internal;
use GroupDocs\Signature\Model\Requests;

require_once __DIR__."\..\BaseApiTestCase.php";
require_once __DIR__."\..\Internal\TestFiles.php";

class FileApiTest extends ApiTests\BaseApiTestCase
{
    public function testDeleteFile()
    {
        $testFile = Internal\TestFiles::getFile01PagesPdf();        
        $path = $testFile->folder . $testFile->fileName;

        // Delete file & check
        self::$fileApi->deleteFile(new Requests\deleteFileRequest($path));
        $response = self::$storageApi->objectExists(new Requests\objectExistsRequest($path));
        $this->assertFalse($response->getExists());
        
        // Upload file back & check
        $uploadRequest = new Requests\uploadFileRequest($path, $this->getTestFilePath($testFile));
        self::$fileApi->uploadFile($uploadRequest);

        $response = self::$storageApi->objectExists(new Requests\objectExistsRequest($path));
        $this->assertTrue($response->getExists());
        
    }    

    public function testDownloadFile()
    {               
        $testFile = Internal\TestFiles::getFile01PagesPdf();
        $path = $testFile->folder . $testFile->fileName;

        $response = self::$fileApi->downloadFile(new Requests\downloadFileRequest($path));
        $size = $response->getSize();
        $this->assertGreaterThan(0, $size);
    } 

    public function testCopyMoveFile()
    {               
        $testFile = Internal\TestFiles::getFile01PagesPdf();
        $path = $testFile->folder . $testFile->fileName;

        self::$folderApi->createFolder(new Requests\createFolderRequest("temp"));

        $destPath = "temp/" . $testFile->fileName;
        $response = self::$fileApi->copyFile(new Requests\copyFileRequest($path, $destPath));

        $response = self::$storageApi->objectExists(new Requests\objectExistsRequest($destPath));
        $this->assertTrue($response->getExists());    
        
        $destPath1 = str_replace(".", "_1.", $destPath);
        $response = self::$fileApi->moveFile(new Requests\moveFileRequest($destPath, $destPath1));

        $response = self::$storageApi->objectExists(new Requests\objectExistsRequest($destPath));
        $this->assertFalse($response->getExists());            

        $response = self::$storageApi->objectExists(new Requests\objectExistsRequest($destPath1));
        $this->assertTrue($response->getExists());

        self::$folderApi->deleteFolder(new Requests\deleteFolderRequest("temp", null, true));
    }    
}
