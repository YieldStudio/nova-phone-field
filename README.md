# A global Phone Number field for Laravel Nova

[![Latest Version](https://img.shields.io/github/release/yieldstudio/nova-phone-field?style=flat-square)](https://github.com/yieldstudio/nove-phone-field/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/yieldstudio/nova-phone-field?style=flat-square)](https://packagist.org/packages/yieldstudio/nove-phone-field)

Nova Phone Number field with a dynamic mask based on the country code inserted by the user.

Fork from [bissolli/nova-phone-field](https://github.com/bissolli/nova-phone-field) to maintain package.

![screenshot of the phone field](https://raw.githubusercontent.com/yieldstudio/nova-phone-field/main/screenshot.gif)

## Requirements

- PHP **8.0+**
- Laravel Nova **4.0+**
- Laravel Framework **8.0+**

**NOTE**: For Laravel version < 8.0 or Nova < 4 use [bissolli/nova-phone-field](https://github.com/bissolli/nova-phone-field).

## Installation

You can install this package into a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require yieldstudio/nova-phone-field
```

## Usage

Go straight to your Nova resource and use `YieldStudio\NovaPhoneField\PhoneNumber` field:

```php
namespace App\Nova;

use YieldStudio\NovaPhoneField\PhoneNumber;

class Member extends Resource
{
    // ...
    
    public function fields(Request $request)
    {
        return [
            // ...
            
            PhoneNumber::make('Phone Number'),

            // ...
        ];
    }
}
```

Now you can view and add tags on the blog posts screen in your Nova app. All tags will be saved in the `tags` table. 

### Filtering

By default, every country mask available inside `yieldstudio/nova-phone-field/resources/js/data/phone-masks.json` will be loaded and working. However, you can always select the desired countries calling the `onlyCountries()` method.

```php
PhoneNumber::make('Phone Number')
    ->onlyCountries('BR', 'US', 'IE'),
```

### Custom number format

You can also add custom phone formats with `withCustomFormats()`.

```php
PhoneNumber::make('Phone Number')
    ->withCustomFormats('+123 ## #.#', '+123 ## ####.####'),
```

Or else use only your own phone formats calling for `withCustomFormats()` among with `onlyCustomFormats()`.

```php
PhoneNumber::make('Phone Number')
    ->withCustomFormats('+123 ## #.#', '+123 ## ####.####')
    ->onlyCustomFormats(),
```



### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you've found a bug regarding security please mail [contact@yieldstudio.fr](mailto:contact@yieldstudio.fr) instead of using the issue tracker.

## Credits

- [Gustavo Bissolli](https://github.com/bissolli)
- Special thanks to [Robin Herbots](https://github.com/RobinHerbots) who built one of the best [InputMask](https://github.com/RobinHerbots/Inputmask) from the internet.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
