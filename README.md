# php-ini
Manage [php.ini](https://secure.php.net/manual/en/ini.list.php) directives on a temporary basis.

Full documentation is available at https://duncan3dc.github.io/php-ini/  
PHPDoc API documentation is also available at [https://duncan3dc.github.io/php-ini/api/](https://duncan3dc.github.io/php-ini/api/namespaces/duncan3dc.Laravel.html)  

[![release](https://poser.pugx.org/duncan3dc/php-ini/version.svg)](https://packagist.org/packages/duncan3dc/php-ini)
[![build](https://github.com/duncan3dc/php-ini/workflows/buildcheck/badge.svg?branch=master)](https://github.com/duncan3dc/php-ini/actions?query=branch%3Amaster+workflow%3Abuildcheck)
[![coverage](https://codecov.io/gh/duncan3dc/php-ini/graph/badge.svg)](https://codecov.io/gh/duncan3dc/php-ini)


## Installation

The recommended method of installing this library is via [Composer](https://getcomposer.org/).

Run the following command from your project root:

```bash
$ composer require duncan3dc/php-ini
```


## Getting Started

```php
use duncan3dc\PhpIni\Ini;
use duncan3dc\PhpIni\Settings;

require __DIR__ . "/vendor/autoload.php";

$ini = new Ini;

$ini->set(Settings::INCLUDE_PATH, "/tmp/cool-php-stuff");

require "my-cool-file.php";

$ini->restore(Settings::INCLUDE_PATH);
```

```php
use duncan3dc\PhpIni\Ini;
use duncan3dc\PhpIni\Settings;
use duncan3dc\PhpIni\State;

$ini = new State;

$ini->set(Settings::MEMORY_LIMIT, "1M");

$ini->call(function () {
    # This code can't use much memory
});

# This code can use as much memory as the default memory_limit allows
eatAllTheMemory();
```

_Read more at http://duncan3dc.github.io/php-ini/_


## Changelog
A [Changelog](CHANGELOG.md) has been available since the beginning of time


## Where to get help
Found a bug? Got a question? Just not sure how something works?  
Please [create an issue](//github.com/duncan3dc/php-ini/issues) and I'll do my best to help out.  
Alternatively you can catch me on [Twitter](https://twitter.com/duncan3dc)


## duncan3dc/php-ini for enterprise

Available as part of the Tidelift Subscription

The maintainers of duncan3dc/php-ini and thousands of other packages are working with Tidelift to deliver commercial support and maintenance for the open source dependencies you use to build your applications. Save time, reduce risk, and improve code health, while paying the maintainers of the exact dependencies you use. [Learn more.](https://tidelift.com/subscription/pkg/packagist-duncan3dc-php-ini?utm_source=packagist-duncan3dc-php-ini&utm_medium=referral&utm_campaign=readme)
