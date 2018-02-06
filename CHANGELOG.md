# Changelog

All notable changes to `splas-php` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## v4.1.0 - 2018-02-06

### Added
- Change static private methods/properties to be non-static
- Refactored `MainTest` to `SplasTest`
- Update Travis to include PHP 7.2
- Add PhpDoc comments to the unit test class
- Update tests to use `setUp()` method on PHPUnit
- Update to use `assertInternalType()` for the tests

### Fixed
- Update PHP to use `^7.1` instead of `>=7.1`
- Change `$api_base` to be a constant `API_BASE_URI`

## v4.0.3 - 2017-12-06

### Added
- Update to use legal name in the LICENSE

## v4.0.2 - 2017-11-20

### Fixed
- Correct the LICENSE file to work with Licensee

## v4.0.1 - 2017-11-07

### Fixed
- Correct the Style CI ID

## v4.0.0 - 2017-11-07

### Added
- Add community markdown files
- Add LICENSE file

### Fixed
- Update the Travis config to the new format

## v3.0.3 - 2017-11-02

### Security
- Remove `CURLOPT_SSL_VERIFYHOST` and `CURLOPT_SSL_VERIFYPEER`

## v3.0.2 - 2017-08-11

### Added
- Add PhpDoc comments to the class

### Fixed
- Beautified to follow PSR-2

## v3.0.1 - 2017-08-11

### Added
- Add PHPUnit development dependency
- Changed tests to use `\PHPUnit\Framework\TestCase`

### Deprecated
- Removed support for PHP <7.1

## v3.0.0 - 2017-08-11

### Added
- Changed to use the `pxgamer\Splas` namespace
- Updated the references in the README

## v2.0.1 - 2017-01-24

### Added
- Changed functions to return assoc arrays instead of JSON
- Update to follow PSR-2

## v2.0.0 - 2016-12-15

### Fixed
- Corrected the example in the README

## v1.0.0 - 2016-12-12

### Added
- Initial release
