# splas-php

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A simple PHP wrapper for utilising the [Unsplash] api.

## Structure

```
src/
tests/
vendor/
```

## Install

Via Composer

``` bash
$ composer require pxgamer/splas-php
```

## Usage

```php
$splas = new Splas('APP_ID');
```

Functions             | Parameters | Returns
--------------------- | ---------- | -------
getPhotos()           | void       | array/null
getCuratedPhotos()    | void       | array/null
getRandom()           | void       | array/null
getPhoto($id)         | string     | array/null
getStats($id)         | string     | array/null
getLink($id)          | string     | array/null

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email owzie123@gmail.com instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[unsplash]: https://unsplash.com

[ico-version]: https://img.shields.io/packagist/v/pxgamer/splas-php.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/splas-php/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/83330775/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/splas-php.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/splas-php.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/splas-php
[link-travis]: https://travis-ci.org/pxgamer/splas-php
[link-styleci]: https://styleci.io/repos/76269961
[link-code-quality]: https://codecov.io/gh/pxgamer/splas-php
[link-downloads]: https://packagist.org/packages/pxgamer/splas-php
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors
``