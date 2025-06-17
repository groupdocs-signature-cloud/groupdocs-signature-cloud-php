<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="Configuration.php">
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

namespace GroupDocs\Signature;

/*
 * Represents a set of configuration settings
 */
class Configuration
{
    private static $_defaultConfiguration;

    /*
     * AppKey for API
     *
     */
    protected $appKey = '';
    
    /*
     * AppSid for API
     * @var string
     */
    protected $appSid = '';

    /*
     * API base URL, default value is 'https://api.groupdocs.cloud'
     *
     * @var string
     */
    protected $apiBaseUrl = 'https://api.groupdocs.cloud';

     /*
     * API version, default value is '/v2.0' 
     *
     * @var string
     */
    protected $apiVersion = '/v2.0';

   

    /*
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /*
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /*
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;
    
    /*
     * Client name, default value is 'php sdk'
     *
     * @var string
     */
    protected $clientName = 'php sdk';

    /*
     * Version of client SDK
     *
     */
    protected $clientVersion = '25.5';

    /*
     * Constructor
     * @param string   $appSid Application identifier (App SID)
     * @param string   $appKey Application private key (App Key)
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    } 

    /*
     * Sets AppSid
     *
     * @param string $appSid
     *
     * @return $this
     */
    public function setAppSid($appSid)
    {
        $this->appSid = $appSid;
        return $this;
    }
    
    /*
     * Gets AppSid
     * @return $appSid
     */
    public function getAppSid()
    {
        return $this->appSid;
    }
    
    /*
     * Sets AppKey
     *
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
        return $this;
    }
    
    /*
     * Gets AppKey
     * @return $appKey
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /*
     * Sets API base URL
     *
     * @param string $apiBaseUrl
     *
     * @return $this
     */
    public function setApiBaseUrl($apiBaseUrl)
    {
        $this->apiBaseUrl = $apiBaseUrl;
        return $this;
    }

    /*
     * Gets API base URL
     *
     * @return string ApiBaseUrl
     */
    public function getApiBaseUrl()
    {
        return $this->apiBaseUrl;
    }

    /*
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /*
     * Gets debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /*
     * Sets debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /*
     * Gets debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /*
     * Sets temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /*
     * Gets temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /*
     * Gets server URL
     *
     * @return string Server URL e.g. 'https://api.groupdocs.cloud/v2.0'
     */
    public function getServerUrl()
    {
        return $this->apiBaseUrl . $this->apiVersion;
    }

    /*
     * Gets default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$_defaultConfiguration === null) {
            self::$_defaultConfiguration = new Configuration();
        }

        return self::$_defaultConfiguration;
    }

    /*
     * Sets detault configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$_defaultConfiguration = $config;
    }

    /*
     * Gets client name, default value is 'php sdk'
     *
     * @return string
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /*
     * Gets client version, default value is '25.5'
     *
     */
    public function getClientVersion()
    {
        return $this->clientVersion;
    }

    /*
     * Gets essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (GroupDocs\Signature) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    SDK Package Version: 25.5' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }
}
