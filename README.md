# Laravel OLX

This package is a wrapper of [OLX Feed Generator](http://github.com/zephia/olx)
PHP Class for Laravel Framework.

## Installation

Using [composer](http://getcomposer.org)

```bash
$ composer require zephia/laravel-olx
```

```php
// config/app.php
<?php

return [
    'providers' => [
        // ...
        Zephia\LaravelOLX\Provider\LaravelOLXServiceProvider::class
        // ...
    ]
];

```

## Usage

```php
<?php
$adBag = new \Zephia\OLXFeed\Entity\AdBag();
app('olx')->generate($adBag);
```