<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BaseApiTest.php">
*   Copyright (c) 2003-2021 Aspose Pty Ltd
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
use GroupDocs\Signature\Configuration;
use GroupDocs\Signature\SignApi;
use GroupDocs\Signature\InfoApi;
use GroupDocs\Signature\StorageApi;
use GroupDocs\Signature\FileApi;
use GroupDocs\Signature\FolderApi;
use GroupDocs\Signature\Model\Requests;

abstract class BaseApiTest extends \PHPUnit_Framework_TestCase
{
    protected static $config;
    protected static $signApi;
    protected static $infoApi;
    protected static $storageApi;
    protected static $fileApi;
    protected static $folderApi;

    protected static $fontsFolder = "fonts";
    protected static $fromUrlFolder = "tests\\from_url";
    protected static $fromContentFolder = "tests\\from_content";

    protected static $testFilesUploaded = false;

    /**
     * Cleanup after each test case
     */
    public function tearDown()
    {
        self::_deleteFolder("Output");
    }

    private static function _deleteFolder($folder)
    {
        $request = new Requests\deleteFolderRequest($folder, null, true);

        self::$folderApi->DeleteFolder($request);
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

        self::$config = new Configuration();
        self::$config->setAppSid($appSid);
        self::$config->setAppKey($appKey);
        self::$config->setApiBaseUrl($apiBaseUrl);
        #self::$config->setDebug(true);

        self::$signApi = new SignApi(self::$config);
        self::$infoApi = new InfoApi(self::$config);
        self::$storageApi = new StorageApi(self::$config);
        self::$fileApi = new FileApi(self::$config);
        self::$folderApi = new FolderApi(self::$config);
        self::_uploadTestFiles();        
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
        
        $folder = self::_getTestDataPath();
        $dir_iterator = new \RecursiveDirectoryIterator($folder);
        $iterator = new \RecursiveIteratorIterator($dir_iterator, \RecursiveIteratorIterator::SELF_FIRST);

        foreach ($iterator as $file) {
            if (!$file->isDir()) {
                $filePath = $file->getPathName();

                $filePathInStorage = str_replace($folder . '\\', "", $filePath);
                $filePathInStorage = str_replace("\\", "/", $filePathInStorage);

                $isExistRequest = new \GroupDocs\Signature\Model\Requests\objectExistsRequest($filePathInStorage);
                $isExistResponse = self::$storageApi->objectExists($isExistRequest);
                if (!$isExistResponse->getExists()) {
                    $uploadRequest = new \GroupDocs\Signature\Model\Requests\uploadFileRequest($filePathInStorage, $filePath);
                    $response = self::$fileApi->uploadFile($uploadRequest);
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

}

