# Awesome PHP

## 📌 Covered Topics

- [Aura Router](https://github.com/auraphp/Aura.Router)
- [DiDOM Web Scraping](https://github.com/Imangazaliev/DiDOM)
- [CssToInlineStyles](https://github.com/tijsverkoyen/CssToInlineStyles)
- [Amp PHP MySQL](https://github.com/amphp/mysql)
- [Reflection PHP](https://www.php.net/manual/en/book.reflection.php)
- [KNP-Menu](https://github.com/KnpLabs/KnpMenu)
- [PHP-CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
- [Carbon](https://github.com/briannesbitt/Carbon)
- [Money](https://github.com/brick/money)
- [Markup](https://github.com/erusev/parsedown)
- [Agent](https://github.com/jenssegers/agent)
- [Blade](https://github.com/jenssegers/blade)
- [Assertion](https://github.com/beberlei/assert)
- [Fractal](https://github.com/thephpleague/fractal)
- [Notification](https://github.com/jolicode/JoliNotif)

## 🚀 Getting Started

Installation of the next packages requires [Composer](https://getcomposer.org/).

### Aura Router

> This package helps you to create routes as you're in [Laravel](https://laravel.com/) Framework.

Install the `Aura` package:

```SHELL
composer require aura/router
```

In addition, implement the `PSR-7`:

```SHELL
composer require zendframework/zend-diactoros
```

Finally, copy & paste the code in the [Aura-Router/index.php](/app/Aura-Router/index.php) to get the `/users/{id}` route:

```SHELL
php -S localhost:8000 -t app/Aura-Router
```

> [!NOTE]
> `-t` argument refers to the `index.php` path.

### DiDOM Web Scraping

> This package lets you extract information from a specific `page/link`.

Install the `DiDOM` package, then copy & paste the code in the [DiDOM-Web-Scraping/index.php](/app/DiDOM-Web-Scraping/index.php)

```SHELL
composer require imangazaliev/didom
```

### CssToInlineStyles

> This package allows you to merge separate `HTML` and `CSS` files into one file (This is useful when you decide to send an email).

Install the `CssToInlineStyles` package, then copy & paste the code in [CssToInlineStyles/index.php](/app/CssToInlineStyles/index.php):

```SHELL
composer require tijsverkoyen/css-to-inline-styles
```

### AmPHP MySQL

> We all know that PHP works synchronous execution so, if you send a query database then you should wait until the database server responds to you in a blocking manner, instead of sitting do nothing you can send the next query database or do an HTTP call to an API.

Install the `AmPHP MySQL` package, then copy & paste the code in the [AmPHP-MySQL/index.php](/app/AmPHP-MySQL/index.php):

```SHELL
composer require amphp/mysql
```

### Reflection PHP

> Reflection API allows you to know more information about `Classes`, `Interfaces`, `Functions`, and `Extensions` (**There is no installation needed to use these functions, they are part of the PHP core**).

Copy & paste the code in the [Reflection/index.php](/app/Reflection/index.php)

### KNP-Menu

> This package allows you to create a list HTML tag without writing any HTML code.

Install the `KNP-Menu` package, then copy & paste the code in the [KNP-Menu/index.php](/app/KNP-Menu/index.php):

```SHELL
composer require knplabs/knp-menu
```

### PHP-CodeSniffer

> This package allows you to detect violations of a defined coding standard in the `PHP`, `HTML`, and `CSS` files by two files which are `phpcs` and `phpcbf`.

Install the `PHP-CodeSniffer` package:

```SHELL
composer require squizlabs/php_codesniffer
```

Run the next command to show the `ERRORS` and `WARNING` in your code ([phpcs.png](/app/assets/img/phpcs.png)):

```SHELL
./vendor/bin/phpcs folderPath/filePath.php
```

Run the next command to automatically correct code standard violations ([phpcbf.png](/app/assets/img/phpcbf.png)):

```SHELL
./vendor/bin/phpcbf folderPath/filePath.php
```

### Carbon

> This package allows you to deal with dates and times easily.

Install the `Carbon` package, then copy & paste the code in the [Carbon/index.php](/app/Carbon/index.php):

```SHELL
composer require nesbot/carbon
```

### Money

> This package allows you to deal with monetary calculations carefully.

Install the `Mony` package, then copy & paste the code in the [Money/index.php](/app/Money/index.php):

```SHELL
composer require brick/money
```

### Markup

> This package allows you to deal with HTML in a cinch manner.

Install the `Markup` package, then copy & paste the code in the [Markup/index.php](/app/Markup/index.php):

```SHELL
composer require rusev/parsedown
```

### Agent

> This package gives you more information about the device and the browser that runs the application.

Install the `Agent` package, then copy & paste the code in the [Agent/index.php](/app/Agent/index.php):

```SHELL
composer require jenssegers/agent
```

### Blade

> This package lets you deal with the `.blade.php` extension as if in [Laravel](https://laravel.com/) Framework.

Install the `Blade` package, then copy & paste the code in the [Blade/index.php](/app/Blade/index.php):

```SHELL
composer require jenssegers/blade
```

### Assertion

> This package allows you to validate the form inputs easily.

Install the `Assertion` package, then copy & paste the code in the [Assertion/index.php](/app/Assertion/index.php):

```SHELL
composer require beberlei/assert
```

### Fractal

> This package provides a presentation and transformation layer for complex data output.

Install the `Fractal` package, then copy & paste the code in the [Fractal/index.php](/app/Fractal/index.php):

```SHELL
composer require league/fractal
```

### Notification

> This package allows displaying desktop notifications.

Install the `Notification` package, then copy & paste the code in the [Notification/index.php](/app/Notification/index.php):

```SHELL
composer require jolicode/jolinotif
```

## Support me

- [PayPal](https://www.paypal.com/paypalme/mmramadan496)
