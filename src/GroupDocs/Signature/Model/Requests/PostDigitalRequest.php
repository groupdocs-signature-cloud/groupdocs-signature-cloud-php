<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PostDigitalRequest.php">
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
namespace GroupDocs\Signature\Model\Requests;

/*
 * Request model for postDigital" operation.
 */
class PostDigitalRequest
{
    /*
     * Initializes a new instance of the PostDigitalRequest class.
     *  
     * @param string $name The document name
     * @param \GroupDocs\Signature\Model\SignOptionsData $signOptionsData Digital Signature Options for corresponding Document Type
     * @param string $password Document password if required.
     * @param string $folder The folder name
     * @param string $certificateFile Digital certificate file name.
     * @param string $imageFile Image file.
     * @param string $storage The file storage which have to be used.
     */
    public function __construct($name, $signOptionsData = null, $password = null, $folder = null, $certificateFile = null, $imageFile = null, $storage = null)             
    {
        $this->name = $name;
        $this->signOptionsData = $signOptionsData;
        $this->password = $password;
        $this->folder = $folder;
        $this->certificateFile = $certificateFile;
        $this->imageFile = $imageFile;
        $this->storage = $storage;
    }

    /*
     * The document name
     */
    public $name;
	
    /*
     * Digital Signature Options for corresponding Document Type
     */
    public $signOptionsData;
	
    /*
     * Document password if required.
     */
    public $password;
	
    /*
     * The folder name
     */
    public $folder;
	
    /*
     * Digital certificate file name.
     */
    public $certificateFile;
	
    /*
     * Image file.
     */
    public $imageFile;
	
    /*
     * The file storage which have to be used.
     */
    public $storage;
}
