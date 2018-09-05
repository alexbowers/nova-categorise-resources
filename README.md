# Group and categorise your nova resources

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alexbowers/nova-categorise-resources.svg?style=flat-square)](https://packagist.org/packages/alexbowers/nova-categorise-resources)
![CircleCI branch](https://img.shields.io/circleci/project/github/alexbowers/nova-categorise-resources/master.svg?style=flat-square)
[![Build Status](https://img.shields.io/travis/alexbowers/nova-categorise-resources/master.svg?style=flat-square)](https://travis-ci.org/alexbowers/nova-categorise-resources)
[![Quality Score](https://img.shields.io/scrutinizer/g/alexbowers/nova-categorise-resources.svg?style=flat-square)](https://scrutinizer-ci.com/g/alexbowers/nova-categorise-resources)
[![Total Downloads](https://img.shields.io/packagist/dt/alexbowers/nova-categorise-resources.svg?style=flat-square)](https://packagist.org/packages/alexbowers/nova-categorise-resources)


This is where your description should go. Try and limit it to a paragraph or two.

Add a screenshot of the tool here.

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require alexbowers/nova-categorise-resources
```

Next up, you must register the tool with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function tools()
{
    return [
        // ...
        new \AlexBowers\NovaCategoriseResources\Tool(),
    ];
}
```

## Usage

Click on the "nova-categorise-resources" menu item in your Nova app to see the tool provided by this package.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email bowersbros@gmail.com instead of using the issue tracker.

## Postcardware

You're free to use this package, but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Samberstraat 69D, 2060 Antwerp, Belgium.

We publish all received postcards [on our company website](https://spatie.be/en/opensource/postcards).

## Credits

- [Alex Bowers](https://github.com/alexbowers)

## Support us

Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

Does your business depend on our contributions? Reach out and support us on [Patreon](https://www.patreon.com/spatie). 
All pledges will be dedicated to allocating workforce on maintenance and new awesome stuff.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
