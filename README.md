# Laravel Artisan Command Alias

[![Latest Version on Packagist](https://img.shields.io/packagist/v/muath-ic/artisan-command-alias.svg?style=flat-square)](https://packagist.org/packages/muath-ic/artisan-command-alias)
[![Build Status](https://img.shields.io/travis/muath-ic/artisan-command-alias/master.svg?style=flat-square)](https://travis-ci.org/muath-ic/artisan-command-alias)
[![Total Downloads](https://img.shields.io/packagist/dt/muath-ic/artisan-command-alias.svg?style=flat-square)](https://packagist.org/packages/muath-ic/artisan-command-alias)
[![GitHub license](https://img.shields.io/github/license/muath-ic/artisan-command-alias.svg)](https://github.com/muath-ic/artisan-command-alias/blob/master/LICENSE)


This package allows you to create some aliases for Artisan purpose. It's like `bash`, but for Artisan.

## Installation

You can install the package via composer:

```bash
composer require muath-ic/artisan-command-alias
```

## Usage

First, you need to publish the configuration file which storing all your availabled aliases with

```bash
php artisan vendor:publish --provider="muath-ic\CommandAlias\ArtisanCommandAliasServiceProvider"
```

Now, edit `config/artisan-command-alias.php` and creates yours like

```php
<?php

/*
 * Configuration file for CommandAlias package
 */
return [
	/*
	 * Register all your alias in the next array. You can use string association
	 * if there's no argument.
	 *
	 * https://laravel.com/docs/5.6/artisan#programmatically-executing-commands
	 */
	'commands' => [
		'i' => 'inspire',
		'lsr' => ['route:list', ['--reverse' => true]],
	]
];
```

You may create a `bash` alias for Artisan like `alias a="php artisan"` and execute command like `a i` or `a lsr` as `git` (`alias g="git"` ; `g lga`).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
