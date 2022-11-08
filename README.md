# Awesome PHP

## ✔ Covered Topics

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

Installation of the next packages requires [Composer](https://getcomposer.org/)

### Aura Router

> This package helps you to create routes as you're in Laravel.

Run the next command to install the `Aura` package

```SHELL
composer require aura/router
```

Run the next command to implement the `PSR-7`

```SHELL
composer require zendframework/zend-diactoros
```

Run the next command, then copy & past the code in [Aura-Router/index.php](/app/Aura-Router/index.php) to get `/users/{id}` route

```SHELL
php -S localhost:8000 -t app/Aura-Router
```

> `-t` argument refers to the PATH of `index.php`.

### DiDOM Web Scraping

> This package allows you to extract information from a specific `page/link`.

Run the next command to install the `DiDOM` package, then copy & past the code in [DiDOM-Web-Scraping/index.php](/app/DiDOM-Web-Scraping/index.php)

```SHELL
composer require imangazaliev/didom
```

### CssToInlineStyles

> This package allows to merge separated HTML and CSS files into one file, and this will be very useful when you decide to send an email.

Run the next command to install the `CssToInlineStyles` package, then copy & past the code in [CssToInlineStyles/index.php](/app/CssToInlineStyles/index.php)

```SHELL
composer require tijsverkoyen/css-to-inline-styles
```

### AmPHP MySQL

> We all know that PHP work synchronous execution, So if you send a query database then you should wait until the database server responds to you in a blocking manner, So instead of sitting do nothing you can send the next query database or do an HTTP call to an API.

Run the next command to install the `AmPHP MySQL` package, then copy & past the code in [AmPHP-MySQL/index.php](/app/AmPHP-MySQL/index.php)

```SHELL
composer require amphp/mysql
```

### Reflection PHP

> Reflection API allows you to know more information about Classes, Interfaces, Functions, and Extensions, there is no installation needed to use these functions; they are part of the PHP core.

Then copy & past the code in [Reflection/index.php](/app/Reflection/index.php)

### KNP-Menu

> This package allows you to create a list HTML tag without writing any HTML code.

 Run the next command to install the `KNP-Menu` package, then copy & past the code in [KNP-Menu/index.php](/app/KNP-Menu/index.php)

```SHELL
composer require knplabs/knp-menu
```

### PHP-CodeSniffer

> This package allows you to detect violations of a defined coding standard in PHP, HTML, CSS files using two files, the first one is `phpcs` and the second one is `phpcbf` which used to automatically correct code standard violations.

Run the next command to install the `PHP-CodeSniffer` package

```SHELL
composer require squizlabs/php_codesniffer
```

Run the next command, to show the `ERRORS` and `WARNING` in your code like [phpcs.png](/app/assets/img/phpcs.png)

```SHELL
./vendor/bin/phpcs folderPath/filePath.php
```

Run the next command to automatically correct code standard violations like [phpcbf.png](/app/assets/img/phpcbf.png)

```SHELL
./vendor/bin/phpcbf folderPath/filePath.php
```

### Carbon

> This package allows you to deal with date and time in an easy manner.

Run the next command to install the `Carbon` package, then copy & past the code in [Carbon/index.php](/app/Carbon/index.php)

```SHELL
composer require nesbot/carbon
```

### Money

> This package allows you to deal with monetary calculations carefully.

Run the next command to install the `Mony` package, then copy & past the code in [Money/index.php](/app/Money/index.php)

```SHELL
composer require brick/money
```

### Markup

> This package allows you to deal with HTML in cinch manner.

Run the next command to install the `Markup` package, then copy & past the code in [Markup/index.php](/app/Markup/index.php)

```SHELL
composer require rusev/parsedown
```

### Agent

> This package allows you to get more info about the device and the browser that runs the application.

Run the next command to install the `Agent` package, then copy & past the code in [Agent/index.php](/app/Agent/index.php)

```SHELL
composer require jenssegers/agent
```

### Blade

> This package allows you to deal with `.blade.php` extension as if you are in Laravel.

Run the next command to install the `Blade` package, then copy & past the code in [Blade/index.php](/app/Blade/index.php)

```SHELL
composer require jenssegers/blade
```

### Assertion

> This package allows you to validate the form inputs in an easy manner.

Run the next command to install the `Assertion` package, then copy & past the code in [Assertion/index.php](/app/Assertion/index.php)

```SHELL
composer require beberlei/assert
```

### Fractal

> This package provides a presentation and transformation layer for complex data output.

Run the next command to install the `Fractal` package, then copy & past the code in [Fractal/index.php](/app/Fractal/index.php)

```SHELL
composer require league/fractal
```

### Notification

> This package allows displaying desktop notifications.

Run the next command to install the `Notification` package, then copy & past the code in [Notification/index.php](/app/Notification/index.php)

```SHELL
composer require jolicode/jolinotif
```

FINALLY, run the next command and enjoy 😋

```SHELL
php -S localhost:8000
```
