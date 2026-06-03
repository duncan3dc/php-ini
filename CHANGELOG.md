Changelog
=========

## 1.3.0 - 2026-06-03

### Changed

* [Support] Added support for PHP 8.1, 8.2, 8.3, 8.4, and 8.5.
* [Support] Dropped support for PHP 7.2, and 7.3.

--------

## 1.2.0 - 2020-01-10

### Changed

* [Support] Added support for PHP 8.0

--------

## 1.1.0 - 2019-10-05

### Added

* [Settings] Provide some common ini settings as class constants.

### Changed

* [Support] Added support for PHP 7.3
* [Support] Dropped support for PHP 7.1

--------

## 1.0.0 - 2018-05-04

### Added

* [ConfigInterface] A common interface that `Ini` and `State` implement.

### Changed

* [Ini] The `get()` method now returns `null` if a setting doesn't exist.
* [Support] Added support for PHP 7.2
* [Support] Dropped support for PHP 5.6
* [Support] Dropped support for PHP 7.0

--------

## 0.1.0 - 2017-07-07

### Added

* [Ini] A class to override ini directives, and then revert back what they were.
* [State] A class to execute code using specific ini directives.

--------
