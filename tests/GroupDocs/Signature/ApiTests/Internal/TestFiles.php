<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="TestFiles.php">
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

require_once "TestFile.php";

 /*
 * Describes collection of files for tests.
 */
class TestFiles
{

    /* Cells Documents */

    public static function getFile01PagesCells()
    {
        $file = new TestFile();
        $file->fileName = "01_pages.xlsx";
        $file->folder = "SpreadSheets";
        $file->fileFormat = "Xlsx";
        $file->maxPageHeight = 637;
        $file->maxPageWidth = 765;
        $file->pagesCount = 1;
        $file->size = 12260;
        return $file;
    }

    public static function getFile02PagesCells()
    {
        $file = new TestFile();
        $file->fileName = "02_pages.xlsx";
        $file->folder = "SpreadSheets";
        $file->fileFormat = "Xlsx";
        $file->maxPageHeight = 846;
        $file->maxPageWidth = 867;
        $file->pagesCount = 2;
        $file->size = 22396;
        return $file;
    }

    public static function getFile01PagesCellsPwd()
    {
        $file = new TestFile();
        $file->fileName = "01_sheet_pwd.xlsx";
        $file->folder = "SpreadSheets";
        $file->fileFormat = "Xlsx";
        $file->maxPageHeight = 1424;
        $file->maxPageWidth = 1165;
        $file->pagesCount = 1;
        $file->size = 1001472;
        $file->password = "1234567890";        
        return $file;
    }

    public static function getFileSignedCells()
    {
        $file = new TestFile();
        $file->fileName = "SignedForVerificationAll.xlsx";
        $file->folder = "Signed";
        $file->fileFormat = "Xlsx";
        $file->size = 318157;
        return $file;
    }

    
    /* Image Documents */
    public static function GetImage01PagesJpg()
    {
        $file = new TestFile();
        $file->fileName = "01_pages.jpg";
        $file->folder = "Images";
        $file->fileFormat = "Jpg";
        $file->maxPageHeight = 1000;
        $file->maxPageWidth = 1000;
        $file->pagesCount = 1;
        $file->size = 90269;        
        return $file;
    }

    public static function GetImage00()
    {
        $file = new TestFile();
        $file->fileName = "JohnSmithSign.png";
        $file->folder = "Additional";
        return $file;
    }

    public static function GetImage01()
    {
        $file = new TestFile();
        $file->fileName = "signature_01.jpg";
        $file->folder = "Additional";
        return $file;
    }

    public static function GetImage02()
    {
        $file = new TestFile();
        $file->fileName = "signature_02.jpg";
        $file->folder = "Additional";
        return $file;
    }

    public static function GetImage03()
    {
        $file = new TestFile();
        $file->fileName = "signature_03.jpg";
        $file->folder = "Additional";
        return $file;
    }

    public static function getImagesWithoutAnySignature()
    {
        $file = new TestFile();
        $file->fileName = "ImagesWithoutAnySignature.png";
        $file->folder = "docimages";
        return $file;
    }    

    public static function getImageSigned()
    {
        $file = new TestFile();
        $file->fileName = "SignedForVerificationAll.png";
        $file->folder = "Signed";
        $file->fileFormat = "Png";
        $file->size = 27533;
        return $file;
    }   

    /* Pdf Documents */
    public static function getFile01PagesPdf()
    {
        $file = new TestFile();
        $file->fileName = "01_pages.pdf";
        $file->folder = "Pdf";
        $file->fileFormat = "Portable Document Format File";
        $file->maxPageHeight = 792;
        $file->maxPageWidth = 612;
        $file->pagesCount = 1;
        $file->size = 55321;
        return $file;
    }

    public static function getFile02PagesPdf()
    {
        $file = new TestFile();
        $file->fileName = "02_pages.pdf";
        $file->folder = "Pdf";
        $file->password = "";
        $file->url = "";
        return $file;
    }

    public static function getFile01PagesPdfPwd()
    {
        $file = new TestFile();
        $file->fileName = "01_pages_pwd.pdf";
        $file->folder = "Pdf";
        $file->password = "1234567890";
        $file->url = "";
        return $file;
    }

    public static function getFileSignedPdf()
    {
        $file = new TestFile();
        $file->fileName = "SignedForVerificationAll.pdf";
        $file->folder = "Signed";
        $file->fileFormat = "Portable Document Format File";
        $file->size = 164060;
        return $file;
    }

    /* Words Documents */

    public static function getFile01PagesWords()
    {
        $file = new TestFile();
        $file->fileName = "01_pages.docx";
        $file->folder = "WordProcessing";
        $file->size = 1359584;
        return $file;
    }

    public static function getFile02PagesWords()
    {
        $file = new TestFile();
        $file->fileName = "02_pages.docx";
        $file->folder = "WordProcessing";
        return $file;
    }

    public static function getFile01PagesPwdWords()
    {
        $file = new TestFile();
        $file->fileName = "01_pages_pwd.docx";
        $file->folder = "WordProcessing";
        $file->password = "1234567890";
        return $file;
    }

    public static function getFileWordsSigned()
    {
        $file = new TestFile();
        $file->fileName = "SignedForVerificationAll.docx";
        $file->folder = "Signed";
        $file->fileFormat = "Docx";
        $file->size = 1358290;        
        return $file;
    }   

    /* Slides Documents */

    public static function getFile01PagesSlides()
    {
        $file = new TestFile();
        $file->fileName = "01_pages.pptx";
        $file->folder = "Presentations";
        $file->size = 42146;
        return $file;
    }

    public static function getFile02PagesSlides()
    {
        $file = new TestFile();
        $file->fileName = "02_pages.pptx";
        $file->folder = "Presentations";
        return $file;
    }

    public static function getFileSlidesSigned()
    {
        $file = new TestFile();
        $file->fileName = "SignedForVerificationAll.pptx";
        $file->folder = "Signed";
        $file->fileFormat = "Pptx";
        $file->size = 43205;        
        return $file;
    }    
    
    public static function getFileNotExist()
    {
        $file = new TestFile();
        $file->fileName = "NotExist.docx";
        $file->folder = "some-folder\\";
        $file->fileFormat = "docx";           
        return $file;
    }       
}
