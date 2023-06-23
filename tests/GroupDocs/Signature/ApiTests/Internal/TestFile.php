<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="TestFile.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
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
namespace GroupDocs\Signature\ApiTests\Internal;

/*
 * Describes file for tests.
 */
class TestFile
{
    public function __construct()
    {
    }

    public $fileName;
    
    public $folder;
    
    public $password;
    
    public $fileFormat;

    public $maxPageHeight;

    public $maxPageWidth;

    public $pagesCount;

    public $size;
    
    public function ToFileInfo()
    {
        $fileInfo = new \GroupDocs\Signature\Model\FileInfo();
        $fileInfo->setFilePath($this->folder . DIRECTORY_SEPARATOR . $this->fileName);
        $fileInfo->setPassword($this->password);
        return $fileInfo;
    } 
    
    public function getExt()
    {
        return pathinfo($this->fileName, PATHINFO_EXTENSION);
    }     
}
