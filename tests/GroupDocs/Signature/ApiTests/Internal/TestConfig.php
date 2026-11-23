<?php

/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="TestConfig.php">
 *   Copyright (c) Aspose Pty Ltd
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
 * Provides credentials and API url for tests.
 *
 * Values are read from config.json and can be overridden with the
 * TEST_APP_SID, TEST_APP_KEY and TEST_API_BASE_URL environment variables
 * (used by CI so no credentials have to be stored in the repository).
 */
class TestConfig
{
    public static function get()
    {
        $path = __DIR__ . "/../../config.json";
        $contents = file_get_contents($path);
        if ($contents === false) {
            throw new \RuntimeException("Unable to read test configuration: " . $path);
        }

        $config = json_decode($contents, true, 512, JSON_THROW_ON_ERROR);

        return [
            "AppSID" => self::env("TEST_APP_SID", $config["AppSID"]),
            "AppKey" => self::env("TEST_APP_KEY", $config["AppKey"]),
            "ApiBaseUrl" => self::env("TEST_API_BASE_URL", $config["ApiBaseUrl"]),
        ];
    }

    private static function env($name, $default)
    {
        $value = getenv($name);

        return ($value === false || $value === "") ? $default : $value;
    }
}
