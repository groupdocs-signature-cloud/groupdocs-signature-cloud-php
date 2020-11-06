![](https://img.shields.io/badge/api-v2.0-lightgrey) ![Packagist Version](https://img.shields.io/packagist/v/groupdocscloud/groupdocs-signature-cloud) ![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/groupdocscloud/groupdocs-signature-cloud) [![GitHub license](https://img.shields.io/github/license/groupdocs-signature-cloud/groupdocs-signature-cloud-java)](https://github.com/groupdocs-signature-cloud/groupdocs-signature-cloud-java/blob/master/LICENSE) 

# PHP SDK to Document Signature REST API

[GroupDocs.Signature Cloud SDK for PHP](https://products.groupdocs.cloud/signature/php) wraps GroupDocs.Signature RESTful API so you may integrate Document Signing features in your own apps with zero initial cost.

GroupDocs.Signature Cloud API allows the developers to create, remove, verify and search different types of signature objects in a number of different formats including Word documents, Excel speradsheets, PowerPoint presentations, PDF, OpenDocument formats & images.

## Manage Digital Signatures in the Cloud

- [Support for 55+ document & image formats](https://docs.groupdocs.cloud/signature/supported-document-formats/).
- Add stamp, text, barcode, QR-code, image and digital signatures.
- Search & verify signatures.
- Update & delete signatures by ID.
- Extract document properties like size, creation & update dates, page count and so on.
- Get a list of supported document formats.
- Get a list of supported barcode & QR-Code encode types.

Check out the [Developer's Guide](https://docs.groupdocs.cloud/signature/developer-guide/) to know more about GroupDocs.Signature REST API.

## Supported Signature Types

- **Text Signature** 
- **Image Signature** 
- **Barcode Signature** 
- **QR-Code Signature**
- **Digital Signature** 
- **Stamp Signature**

## Microsoft Office Formats

**Microsoft Word:** DOC, DOCM, DOCX, DOT, DOTM, DOTX\
**Microsoft Excel:** XLS, XLSB, XLSM, XLSX\
**Microsoft PowerPoint:** POTM, POTX, PPS, PPSM, PPSX, PPT, PPTM, PPTX

## Other Document Formats

**Portable:** PDF\
**OpenDocument:** ODT, OTT, ODP, OTP\
**Images:** BMP, PNG, JPG, JPEG, TIFF, GIF, CDR, CGM, CMX, DCM, DJVU, DNG, EMF, WMF, EPS, ICO, JP2, ODG, PCL, PS, PSD, SVG, WEBP\
**Others:** TXT, RTF, CSV, TSV

## Get Started with GroupDocs.Signature Cloud SDK for PHP

First create an account at [GroupDocs for Cloud](https://dashboard.groupdocs.cloud/) and get your application information. Next, follow the installation steps as given below.

### Composer

The package is available at [Packagist](https://packagist.org/packages/groupdocscloud/groupdocs-signature-cloud) and it can be installed via [Composer](http://getcomposer.org/) by executing  the following command.

```
composer require groupdocscloud/signature-sdk-php
``` 

You can also install the SDK via Composer directly from this repository. Please add the following to `composer.json` to get the package from GitHub, then run `composer install`.

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/groupdocs-signature-cloud/groupdocs-signature-cloud-php.git"
    }
  ],
  "require": {
    "groupdocscloud/signature-sdk-php": "*"
  }
}
```

### Manual Installation

Clone or download this repository, then run `composer install` in the root directory to install dependencies and include `autoload.php` into your code file:

```php
require_once('/path/to/groupdocs-signature-cloud-php/vendor/autoload.php');
```

## Tests

Set your AppSID and AppKey in [json.config](tests/GroupDocs/Signature/config.json) and execute following commands to run the unit tests.

```
composer install
./vendor/bin/phpunit
```

## Get Supported Document Formats

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

//TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).
$configuration = new GroupDocs\Signature\Configuration();
$configuration->setAppSid("XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX");
$configuration->setAppKey("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");

$signatureApi = new GroupDocs\Signature\SignatureApi($configuration); 

try {
    $request = new GroupDocs\Signature\Model\Requests\GetSupportedFileFormatsRequest();
    $response = $signatureApi->getSupportedFileFormats($request);

    foreach ($response->getFormats() as $key => $format) {
        echo $format->getFileFormat() . " - " .  $format->getExtension(), "\n";
    }
} catch (Exception $e) {
    echo  "Something went wrong: ",  $e->getMessage(), "\n";
    PHP_EOL;
}

?>
```

## GroupDocs.Signature Cloud SDKs in Popular Languages

| .NET | Java | PHP | Python | Ruby | Node.js |
|---|---|---|---|---|---|
| [GitHub](https://github.com/groupdocs-signature-cloud/groupdocs-signature-cloud-dotnet) | [GitHub](https://github.com/groupdocs-signature-cloud/groupdocs-signature-cloud-java) | [GitHub](https://github.com/groupdocs-signature-cloud/groupdocs-signature-cloud-php) | [GitHub](https://github.com/groupdocs-signature-cloud/groupdocs-signature-cloud-python) | [GitHub](https://github.com/groupdocs-signature-cloud/groupdocs-signature-cloud-ruby)  | [GitHub](https://github.com/groupdocs-signature-cloud/groupdocs-signature-cloud-node) |
| [NuGet](https://www.nuget.org/packages/GroupDocs.Signature-Cloud/) | [Maven](https://repository.groupdocs.cloud/webapp/#/artifacts/browse/tree/General/repo/com/groupdocs/groupdocs-signature-cloud) | [Composer](https://packagist.org/packages/groupdocscloud/groupdocs-signature-cloud) | [PIP](https://pypi.org/project/groupdocs-signature-cloud/) | [GEM](https://rubygems.org/gems/groupdocs_signature_cloud)  | [NPM](https://www.npmjs.com/package/groupdocs-signature-cloud) | 

[Home](https://www.groupdocs.cloud/) | [Product Page](https://products.groupdocs.cloud/signature/php) | [Documentation](https://docs.groupdocs.cloud/signature/) | [Live Demo](https://products.groupdocs.app/signature/total) | [API Reference](https://apireference.groupdocs.cloud/signature/) | [Code Samples](https://github.com/groupdocs-signature-cloud/groupdocs-signature-cloud-dotnet-samples) | [Blog](https://blog.groupdocs.cloud/category/signature/) | [Free Support](https://forum.groupdocs.cloud/c/signature) | [Free Trial](https://dashboard.groupdocs.cloud)
