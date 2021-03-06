<p align="center">
<img src="https://app.codeship.com/projects/d612f5d0-3c9d-0138-8ecb-768429ea54f6/status?branch=master" alt="Build Status">
<img src='https://coveralls.io/repos/github/ChrGriffin/collection-macro-thanos/badge.svg?branch=master' alt='Coverage Status' />
</p>

# Laravel Collection Macro: Thanos

This macro for Laravel Collections will randomly delete half the items in a collection.

## Installation

Install in your Laravel project via composer:

```shell script
composer install chrgriffin/collection-macro-thanos
```

If your version of Laravel supports auto-discovery (versions 5.5 and up), that's it!

For older versions of Laravel, you will need to edit your `config/app.php` file to include the service provider in your providers array:

```php
return [
    // ...
    'providers' => [
        // ...
        CollectionMacroThanos\ServiceProvider::class
    ]
];
```

## Usage

You should now be able to chain `->thanos()` onto any collections to randomly delete half the items in the collection.

```php
$collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10])
    ->thanos(); // 1, 3, 4, 6, 8
```
