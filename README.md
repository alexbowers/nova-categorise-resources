# Group and categorise your nova resources

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alexbowers/nova-categorise-resources.svg?style=flat-square)](https://packagist.org/packages/alexbowers/nova-categorise-resources)
[![Quality Score](https://img.shields.io/scrutinizer/g/alexbowers/nova-categorise-resources.svg?style=flat-square)](https://scrutinizer-ci.com/g/alexbowers/nova-categorise-resources)
[![Total Downloads](https://img.shields.io/packagist/dt/alexbowers/nova-categorise-resources.svg?style=flat-square)](https://packagist.org/packages/alexbowers/nova-categorise-resources)



A nova resource can be given a category name.

If a category name is provided, then that will act as a label.

The label will be standardised, so any changes in capitalisation will be removed
and it will be converted into Title case.

For example:

"Customers Information", "customers information" and "cUStoMERs INFORMATION"

all become "Customers Information"

If the category is left empty, then all empty resources will get grouped together.

If there is only one category, it will not be collapsable, but will instead have a label above it all

if there is only one category, and it is empty, then it will act as Nova does by default.
     
![Categorise Resources Example](https://github.com/alexbowers/nova-categorise-resources/blob/master/screenshots/example.gif?raw=true)

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require alexbowers/nova-categorise-resources
```

## Usage

In any / all of your resources add

```php
public static $category = "Your Category label";
```

### Security

If you discover any security related issues, please email bowersbros@gmail.com instead of using the issue tracker.

## Credits

- [Alex Bowers](https://github.com/alexbowers)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
