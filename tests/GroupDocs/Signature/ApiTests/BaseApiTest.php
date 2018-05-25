<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BaseApiTest.php">
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
namespace GroupDocs\Signature\ApiTests;

use PHPUnit\Framework\TestCase;
use Aspose\Storage\StorageApi;
use GroupDocs\Signature\Configuration;
use GroupDocs\Signature\SignatureApi;

abstract class BaseApiTest extends \PHPUnit_Framework_TestCase
{
    protected static $config;
    protected static $signatureApi;
    protected static $storageApi;
    
    protected static $fontsFolder = "fonts";
    protected static $fromUrlFolder = "tests\\from_url";
    protected static $fromContentFolder = "tests\\from_content";

    protected static $testFilesUploaded;

    /**
     * Cleanup after each test case
     */
    public function tearDown()
    {
        self::_removeTempFiles();
    }

    private static function _removeTempFiles()
    {
        self::$storageApi->DeleteFolder("cache", null, "true");
        self::$storageApi->DeleteFolder("tests", null, "true");
    }

    /**
     * Setup before each test suite
     */
    public static function setUpBeforeClass()
    {
        self::_initTests();
    }

    private static function _initTests()
    {
        $config = self::_getConfig();

        //TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud 
        //      (free registration is required).
        $appSid = $config["AppSID"];
        $appKey = $config["AppKey"];
        $apiBaseUrl = $config["ApiBaseUrl"];

        self::$storageApi = new StorageApi();
        self::$storageApi->apiClient->appSid = $appSid;
        self::$storageApi->apiClient->apiKey = $appKey;
        self::$storageApi->apiClient->apiServer = $apiBaseUrl . "/v1";

        self::$config = new Configuration();
        self::$config->setAppSid($appSid);
        self::$config->setAppKey($appKey);
        self::$config->setHost($apiBaseUrl);
        self::$signatureApi = new SignatureApi(self::$config);

        //self::_uploadTestFiles();        
    }

    private static function _getConfig()
    {
        $contents = file_get_contents(realpath(__DIR__ . "/../config.json"));
        $config = \GuzzleHttp\json_decode($contents, true);

        return $config;
    }

    private static function _uploadTestFiles()
    {
        if (self::$testFilesUploaded) {
            return;
        }
        $color1 = \GroupDocs\Signature\Model\Color::$RED;
        $folder = self::_getTestDataPath();
        $dir_iterator = new \RecursiveDirectoryIterator($folder);
        $iterator = new \RecursiveIteratorIterator($dir_iterator, \RecursiveIteratorIterator::SELF_FIRST);

        foreach ($iterator as $file) {
            if (!$file->isDir()) {
                $filePath = $file->getPathName();

                $filePathInStorage = str_replace($folder . '\\', "", $filePath);
                $filePathInStorage = str_replace("\\", "/", $filePathInStorage);

                $response = self::$storageApi->GetIsExist($filePathInStorage);
                if (!$response->fileExist->isExist) {
                    self::$storageApi->PutCreate($filePathInStorage, null, null, $filePath);
                }
            }
        }

        self::$testFilesUploaded = true;
    }

    private static function _getTestDataPath()
    {
        return realpath(__DIR__ . '/../Resources/TestData/');
    }

    /**
     * Serializes object as JSON
     */
    protected static function serializeObject($obj)
    {
        $optionsFile = tmpfile();
        $optionsFilePath = stream_get_meta_data($optionsFile)['uri'];
        fwrite($optionsFile, $obj->__toString());

        return [$optionsFile, $optionsFilePath];
    }

    /**
     * Returns path to test file
     */
    protected static function getTestFilePath($file)
    {
        return realpath(self::_getTestDataPath() . DIRECTORY_SEPARATOR .  $file->folder . DIRECTORY_SEPARATOR . $file->fileName);
    }

    protected function getColor($web)
    {
        $color = new \GroupDocs\Signature\Model\Color();
        $color->setWeb($web);
        return $color;
    }

    protected function getFont($name,$size,$bold,$italic,$underline)
    {
        $font = new \GroupDocs\Signature\Model\SignatureFontData();
        
        $font->setFontFamily($name);
        $font->setFontSize($size);
        $font->setBold($bold);
        $font->setItalic($italic);
        $font->setUnderline($underline);
        
        return $font;
    }

    protected function getPagesSetup($first,$odd,$even,$last)
    {
        $pagesSetup = new \GroupDocs\Signature\Model\PagesSetupData();
        $pagesSetup->setFirstPage($first);
        $pagesSetup->setOddPages($odd);
        $pagesSetup->setEvenPages($even);
        $pagesSetup->setLastPage($last);
        return $pagesSetup;
    }

    protected function assertDocumentInfoResponse($file, $response, $format)
    {
        $this->assertEquals($file->fileName, $response->getName());
        $this->assertEquals($file->folder, $response->getFolder());
        $ext = pathinfo($file->fileName, PATHINFO_EXTENSION);
        $this->assertEquals($ext, $response->getExtension());
        $this->assertEquals($format, $response->getFileFormat());
    }

    protected function assertSignedDocumentResponse($file, $response)
    {
        $this->assertEquals($file->fileName, $response->getFileName());
        $this->assertEquals("Output", $response->getFolder());
        $this->assertEquals("2", $response->getCode());
        $this->assertEquals("OK", $response->getStatus());
    }

    protected function assertVerifiedDocumentResponse($file, $response)
    {
        $this->assertEquals($file->fileName, $response->getFileName());
        $this->assertEquals(true, $response->getResult());
        $this->assertEquals("OK", $response->getStatus());
    }

    protected function assertSearchDocumentResponse($file, $response)
    {
        $this->assertEquals($file->fileName, $response->getFileName());
        $this->assertTrue (count($response->getSignatures()) > 0);
    }

    protected function assertSignedCollectionResponse($file, $response)
    {
        $this->assertEquals($file->fileName, $response->getFileName());
        $this->assertEquals("Output", $response->getFolder());
        $this->assertEquals("2", $response->getCode());
        $this->assertEquals("OK", $response->getStatus());
    }

    protected function assertVerifiedCollectionResponse($file, $response)
    {
        $this->assertEquals($file->fileName, $response->getFileName());
        $this->assertEquals(true, $response->getResult());
        $this->assertEquals("OK", $response->getStatus());
    }

    protected function assertSearchCollectionResponse($file, $response)
    {
        $this->assertEquals($file->fileName, $response->getFileName());
        $this->assertTrue (count($response->getSignatures()) > 0);
    }
}

