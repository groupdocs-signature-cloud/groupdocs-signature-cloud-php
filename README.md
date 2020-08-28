# GroupDocs.Signature Cloud SDK for PHP
This repository contains GroupDocs.Signature Cloud SDK for PHP source code. This SDK allows you to work with GroupDocs.Signature Cloud REST APIs in your PHP applications.

## Dependencies
- PHP 5.5 or later

## Authorization
To use SDK you need AppSID and AppKey authorization keys. You can your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).  

## Installation & Usage
### Composer

The package is available at [Packagist](https://packagist.org/) and it can be installed via [Composer](http://getcomposer.org/) by executing following command:
```
composer require groupdocscloud/signature-sdk-php
``` 

Or you can install SDK via [Composer](http://getcomposer.org/) directly from this repository, add the following to `composer.json`:

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

Then run `composer install`

### Manual Installation

Clone or download this repository, then run `composer install` in the root directory to install dependencies and include `autoload.php` into your code file:

```php
require_once('/path/to/groupdocs-signature-cloud-php/vendor/autoload.php');
```

## Tests

To run the unit tests set your AppSID and AppKey in [json.config](tests/GroupDocs/Signature/config.json) and execute following commands:

```
composer install
./vendor/bin/phpunit
```

## Getting Started
Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Licensing
GroupDocs.Signature for Cloud SDK for PHP is licensed under [MIT License](LICENSE).

[Home](https://www.groupdocs.cloud/) | [Product Page](https://products.groupdocs.cloud/signature/php) | [Docs](https://docs.groupdocs.cloud/signature/) | [Demos](https://products.groupdocs.app/signature/family) | [API Reference](https://apireference.groupdocs.cloud/signature/) | [Examples](https://github.com/groupdocs-signature-cloud/groupdocs-signature-cloud-php) | [Blog](https://blog.groupdocs.cloud/category/signature/) | [Free Support](https://forum.groupdocs.cloud/c/signature) | [Free Trial](https://purchase.groupdocs.cloud/trial)
