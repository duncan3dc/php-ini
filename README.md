# php-ini
Manage [php.ini](https://secure.php.net/manual/en/ini.list.php) directives on a temporary basis.

Full documentation is available at https://duncan3dc.github.io/php-ini/  
PHPDoc API documentation is also available at [https://duncan3dc.github.io/php-ini/api/](https://duncan3dc.github.io/php-ini/api/namespaces/duncan3dc.Laravel.html)  

[![release](https://poser.pugx.org/duncan3dc/php-ini/version.svg)](https://packagist.org/packages/duncan3dc/php-ini)
[![build](https://travis-ci.org/duncan3dc/php-ini.svg?branch=master)](https://travis-ci.org/duncan3dc/php-ini)
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
