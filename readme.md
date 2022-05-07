# Laravel Livewire Alert

This package allows you to dynamically show your Laravel Livewire Alert.

## Documentation

- [Installation](#installation)
- [Usage](#usage)


## Installation

Require the package:

```console
composer require luanardev/livewire-alert
```
Publish Javascripts
```console
php artisan vendor:publish --tag=livewire-alert:scripts
```

Add the `livewire alert assets` to your app layout view:

```html
@livewireAlertStyles
@livewireAlertScripts

<script src="{{ asset('js/app.js') }}"></script>
```

## Usage

Show an alert by calling either `toastr` or `alert` method in any livewire component:

```php
toastr($message, $type)
alert($message, $type)
```
