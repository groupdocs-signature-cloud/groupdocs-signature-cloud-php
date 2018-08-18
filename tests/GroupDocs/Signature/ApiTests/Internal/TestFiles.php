<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="TestFiles.php">
 *   Copyright (c) 2003-2018 Aspose Pty Ltd
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
 * Describes file for tests.
 */
class TestFiles
{
    /* Pdf Documents */
    public static function getFile01PagesPdf()
    {
        $file = new TestFile();
        $file->fileName = "01_pages.pdf";
        $file->folder = "storage";
        $file->password = "";
        $file->url = "";
        return $file;
    }

    public static function getFile02PagesPdf()
    {
        $file = new TestFile();
        $file->fileName = "02_pages.pdf";
        $file->folder = "storage";
        $file->password = "";
        $file->url = "";
        return $file;
    }

    public static function getFile01PagesPdfPwd()
    {
        $file = new TestFile();
        $file->fileName = "01_pages_pwd.pdf";
        $file->folder = "storage";
        $file->password = "1234567890";
        $file->url = "";
        return $file;
    }

    public static function getFilePdfUrl()
    {
        $file = new TestFile();
        $file->fileName = "test.pdf";
        $file->url = "https://www.dropbox.com/s/1ciqpmciqzdp9hu/test.pdf?dl=1";

        return $file;
    }

    public static function getFileSignedPdf()
    {
        $file = new TestFile();
        $file->fileName = "SignedForVerificationAll.pdf";
        $file->folder = "signed";
        $file->password = "";
        $file->url = "";
        return $file;
    }
    
    public static function getFileSignedPdfUrl()
    {
        $file = new TestFile();
        $file->fileName = "https://www.dropbox.com/s/7yi03ieximjrh1y/SignedForVerificationAll.pdf?dl=1";
        $file->url = "https://www.dropbox.com/s/7yi03ieximjrh1y/SignedForVerificationAll.pdf?dl=1";

        return $file;
    }

    /* Cells Documents */

    public static function getFile01PagesCells()
    {
        $file = new TestFile();
        $file->fileName = "01_pages.xlsx";
        $file->folder = "storage";
        return $file;
    }

    public static function getFile02PagesCells()
    {
        $file = new TestFile();
        $file->fileName = "02_pages.xlsx";
        $file->folder = "storage";
        return $file;
    }

    public static function getFile01PagesCellsPwd()
    {
        $file = new TestFile();
        $file->fileName = "01_sheet_pwd.xlsx";
        $file->folder = "storage";
        $file->password = "1234567890";
        $file->url = "";
        return $file;
    }

    public static function getFileCellsUrl()
    {
        $file = new TestFile();
        $file->fileName = "test.xlsx";
        $file->url = "https://www.dropbox.com/s/enuoff7umakf6es/test.xlsx?dl=1";

        return $file;
    }

    public static function getFileSignedCells()
    {
        $file = new TestFile();
        $file->fileName = "SignedForVerificationAll.xlsx";
        $file->folder = "signed";
        $file->password = "";
        $file->url = "";
        return $file;
    }
    
    public static function getFileSignedCellsUrl()
    {
        $file = new TestFile();
        $file->fileName = "https://www.dropbox.com/s/o9k7gweapq8k15l/SignedForVerificationAll.xlsx?dl=1";
        $file->url = "https://www.dropbox.com/s/o9k7gweapq8k15l/SignedForVerificationAll.xlsx?dl=1";

        return $file;
    }

    /* Words Documents */

    public static function getFile01PagesWords()
    {
        $file = new TestFile();
        $file->fileName = "01_pages.docx";
        $file->folder = "storage";
        return $file;
    }

    public static function getFile02PagesWords()
    {
        $file = new TestFile();
        $file->fileName = "02_pages.docx";
        $file->folder = "storage";
        return $file;
    }

    public static function getFile01PagesPwdWords()
    {
        $file = new TestFile();
        $file->fileName = "01_pages_pwd.docx";
        $file->folder = "storage";
        $file->password = "1234567890";
        return $file;
    }

    public static function getFile01PagesUrlWords()
    {
        $file = new TestFile();
        $file->fileName = "one-page.docx";
        $file->url = "https://www.dropbox.com/s/j260ve4f90h1p41/one-page.docx?dl=1";

        return $file;
    }

    /* Slides Documents */

    public static function getFile01PagesSlides()
    {
        $file = new TestFile();
        $file->fileName = "01_pages.pptx";
        $file->folder = "storage";
        return $file;
    }

    public static function getFile02PagesSlides()
    {
        $file = new TestFile();
        $file->fileName = "02_pages.pptx";
        $file->folder = "storage";
        return $file;
    }

    public static function getFile01PageUrlSlides()
    {
        $file = new TestFile();
        $file->fileName = "01_pages.pptx";
        $file->url = "https://www.dropbox.com/s/r2eioe2atushqcf/with-notes.pptx?dl=1";
        return $file;
    }

    /* Certificates */
    public static function GetCertificate()
    {
        $file = new TestFile();
        $file->fileName = "01_pages.pptx";
        $file->folder = "certificates";
        return $file;
    }
    
    /* Certificates */
    public static function GetDigitalPfx()
    {
        $file = new TestFile();
        $file->fileName = "test_rsa_sha1_1024.pfx";
        $file->folder = "certificates";
        return $file;
    }

    /* Certificates */
    public static function GetDigitalPfx02()
    {
        $file = new TestFile();
        $file->fileName = "SherlockHolmes.pfx";
        $file->folder = "certificates";
        return $file;
    }
    
    
    /* Image Documents */
    public static function GetImage00()
    {
        $file = new TestFile();
        $file->fileName = "JohnSmithSign.png";
        $file->folder = "images";
        return $file;
    }

    public static function GetImage01()
    {
        $file = new TestFile();
        $file->fileName = "signature_01.jpg";
        $file->folder = "images";
        return $file;
    }

    public static function GetImage02()
    {
        $file = new TestFile();
        $file->fileName = "signature_02.jpg";
        $file->folder = "images";
        return $file;
    }

    public static function GetImage03()
    {
        $file = new TestFile();
        $file->fileName = "signature_03.jpg";
        $file->folder = "images";
        return $file;
    }
}
