Changelog
=========

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
