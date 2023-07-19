# Changelog

All notable changes to `nova-phone-field` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## 2.0.0 - 2023-07-19

### What's Changed

- PhoneNumber field can now be `copyable` by @JamesHemery and @ch-hamzzyy in https://github.com/YieldStudio/nova-phone-field/pull/8 and https://github.com/YieldStudio/nova-phone-field/pull/4
- PhoneNumber field can now show `helper` text by @JamesHemery in https://github.com/YieldStudio/nova-phone-field/pull/8
- Upgrade to inputmask 5 (fixes copy/paste and indicator change problems) by @JamesHemery in https://github.com/YieldStudio/nova-phone-field/pull/8
- Replaced PHPCS by Laravel Pint by @JamesHemery in https://github.com/YieldStudio/nova-phone-field/pull/8

### Breaking change

Values are now stored in [E.164 format](https://en.wikipedia.org/wiki/E.164). Previously, the formatted value was stored, which later caused problems for usage.

Now with the E.164 format, you can use the phone number directly. We use [libphonenumber-js](https://www.npmjs.com/package/libphonenumber-js) to format it on the Index and Detail of your resources.

To replace previously saved values you can use this query :

```sql
UPDATE _table_ SET _field_=CONCAT('+', REGEXP_REPLACE(_field_, '\\D', ''))

```
### New Contributors

- @ch-hamzzyy made their first contribution in https://github.com/YieldStudio/nova-phone-field/pull/5

**Full Changelog**: https://github.com/YieldStudio/nova-phone-field/compare/1.0.1...2.0.0

## 1.0.1 - 2022-06-02

**Full Changelog**: https://github.com/YieldStudio/nova-phone-field/compare/1.0.0...1.0.1

- Fix +33 (French number) mask

## 1.0.0 - 2022-06-01

- Initial release following the fork of [bissolli/nova-phone-field](https://github.com/bissolli/nova-phone-field)
- Laravel Nova 4 compatibility
