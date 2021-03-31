# Laravel Css Inliner

Laravel package that is based on Pelago/Emogrifier(link below) php package with purpose to automatically applies formating of email css from template to css.

## Installation

For installing laravel css inliner, either add qed/laravel-css-inliner to the require section in your project's composer.json, or you can use composer as below:

```
composer require qed/laravel-css-inliner
```

Version 1.0.0 should work with Laravel 6

```
composer require qed/laravel-css-inliner "1.0"
```

Publish config

```
php artisan vendor:publish --provider="Qed\LaravelCssInliner\LaravelCssInlinerServiceProvider"
```

## Usage

After installation if in config css format is set tu true, inline format will apply to all the emails going trough laravel mailer.

## Example

```
<html>
    <head>
        <style>
            p {
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <p>Formated text</p>
    </body>
</html>
```

Version 1.0.0 should work with Laravel 6

```
<html>
    <head>
    </head>
    <body>
        <p style="font-size: 12px;">Formated text</p>
    </body>
</html>
```

## References

Core package: pelago/emogrifier - https://github.com/MyIntervals/emogrifier
