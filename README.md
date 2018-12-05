# php-hackernews

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

**Note:** Replace ```Sky Chin``` ```co0lsky``` ```http://www.skychin.me``` ```sky4just@gmail.com``` ```skychin``` ```php-hackernews``` ```A PHP wrapper for HackerNews API``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can run `$ php prefill.php` in the command line to make all replacements at once. Delete the file prefill.php as well.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require skychin/php-hackernews
```

## Usage

``` php
$skeleton = new SkyChin\HackerNews();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email sky4just@gmail.com instead of using the issue tracker.

## Credits

- [Sky Chin][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/skychin/php-hackernews.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/skychin/php-hackernews/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/skychin/php-hackernews.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/skychin/php-hackernews.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/skychin/php-hackernews.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/skychin/php-hackernews
[link-travis]: https://travis-ci.org/skychin/php-hackernews
[link-scrutinizer]: https://scrutinizer-ci.com/g/skychin/php-hackernews/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/skychin/php-hackernews
[link-downloads]: https://packagist.org/packages/skychin/php-hackernews
[link-author]: https://github.com/co0lsky
[link-contributors]: ../../contributors
