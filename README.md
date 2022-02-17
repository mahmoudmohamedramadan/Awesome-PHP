# Awesome PHP Project

## Covered Topics
<ul>
    <li><a href="https://github.com/auraphp/Aura.Router">Aura Router</a></li>
    <li><a href="https://github.com/Imangazaliev/DiDOM">DiDOM Web Scraping</a></li>
    <li><a href="https://github.com/tijsverkoyen/CssToInlineStyles">CssToInlineStyles</a></li>
    <li><a href="https://github.com/amphp/mysql">Amp PHP MySQL</a></li>
    <li><a href="https://www.php.net/manual/en/book.reflection.php">Reflection PHP</a></li>
    <li><a href="https://github.com/KnpLabs/KnpMenu">KNP-Menu</a></li>
    <li><a href="https://github.com/squizlabs/PHP_CodeSniffer">PHP-CodeSniffer</a></li>
    <li><a href="https://github.com/briannesbitt/Carbon">Carbon</a></li>
    <li><a href="https://github.com/brick/money">Money</a></li>
    <li><a href="https://github.com/erusev/parsedown">Markup</a></li>
    <li><a href="https://github.com/jenssegers/agent">Agent</a></li>
    <li><a href="https://github.com/jenssegers/blade">Blade</a></li>
    <li><a href="https://github.com/beberlei/assert">Assertion</a></li>
    <li><a href="https://github.com/thephpleague/fractal">Fractal</a></li>
    <li><a href="https://github.com/jolicode/JoliNotif">Notification</a></li>
</ul>

# Getting Started 🚀
<p>Install the NEXT packages requires <a href="https://getcomposer.org/">Composer</a></p>

## Aura Router
**This package helps you to create routes like MVC framework like Laravel**
<p>To install the Aura package, run the NEXT command</p>

```
composer require aura/router
```

<p>To implement the PSR-7, run the NEXT command</p>

```
composer require zendframework/zend-diactoros
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Aura-Router/index.php">Aura-Router/index.php</a></p>

**After copy & past to get `/users/{id}` route, run the NEXT command**

```
php -S localhost:8000 -t app/Aura-Router
```

**`-t` argument refer to the PATH of `index.php`**

## DiDOM Web Scraping
**This package allows you to extract information from a specific page/link**
<p>To install the DiDOM package, run the NEXT command</p>

```
composer require imangazaliev/didom
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/DiDOM-Web-Scraping/index.php">DiDOM-Web-Scraping/index.php</a></p>

## CssToInlineStyles
**This package allows to merge separated HTML and CSS files into one file, and this will be very useful when you decide to send an email**
<p>To install the CssToInlineStyles package, run the NEXT command</p>

```
composer require tijsverkoyen/css-to-inline-styles
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/CssToInlineStyles/index.php">CssToInlineStyles/index.php</a></p>

## AmPHP MySQL
**We all know that PHP work synchronous execution, So if you send a query database then you should wait until the database server responds to you in a blocking manner, So instead of sitting do nothing you can send the NEXT query database or do an HTTP call to an API**
<p>To install the AmPHP MySQL package, run the NEXT command</p>

```
composer require amphp/mysql
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/AmPHP-MySQL/index.php">AmPHP-MySQL/index.php</a></p>

## Reflection PHP
**Reflection API allows you to know more information about Classes, Interfaces, Functions, and Extensions**
<p>There is no installation needed to use these functions; they are part of the PHP core</p>

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Reflection/index.php">Reflection/index.php</a></p>

## KNP-Menu
**This package allows you to create a list HTML tag WITHOUT writing any HTML code**
<p>To install the KNP-Menu package, run the NEXT command</p>

```
composer require knplabs/knp-menu
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/KNP-Menu/index.php">KNP-Menu/index.php</a></p>

## PHP-CodeSniffer
**This package allows you to detect violations of a defined coding standard in PHP, HTML, CSS files using two files, the first one is `phpcs` and the second one is `phpcbf` which used to automatically correct code standard violations**
<p>To install the PHP-CodeSniffer package, run the NEXT command</p>

```
composer require squizlabs/php_codesniffer
```

<p>To show the ERRORS and WARNING in your code like <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/assets/img/phpcs.png">phpcs.png image</a>, run the NEXT command</p>

```
./vendor/bin/phpcs folderPath/filePath.php
```

<p>To automatically correct code standard violations like <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/assets/img/phpcbf.png">phpcbf.png image</a>, run the NEXT command</p>

```
./vendor/bin/phpcbf folderPath/filePath.php
```

## Carbon
**This package allows you to deal WITH date and time in an easy manner**
<p>To install the Carbon package, run the NEXT command</p>

```
composer require nesbot/carbon
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Carbon/index.php">Carbon/index.php</a></p>

## Money
**This package allows you to deal WITH monetary calculations carefully**
<p>To install the Mony package, run the NEXT command</p>

```
composer require brick/money
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Money/index.php">Money/index.php</a></p>

## Markup
**This package allows you to deal WITH HTML in an easy and beautiful manner**
<p>To install the Markup package, run the NEXT command</p>

```
composer require rusev/parsedown
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Markup/index.php">Markup/index.php</a></p>

## Agent
**This package allows you to get more info about the device and the browser that running the application**
<p>To install the Agent package, run the NEXT command</p>

```
composer require jenssegers/agent
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Agent/index.php">Agent/index.php</a></p>

## Blade
**This package allows you to deal WITH `.blade.php` extension as if you in Laravel**
<p>To install the Blade package, run the NEXT command</p>

```
composer require jenssegers/blade
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Blade/index.php">Blade/index.php</a></p>

## Assertion
**This package allows you to validate your form inputs in an easy manner**
<p>To install the Assertion package, run the NEXT command</p>

```
composer require beberlei/assert
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Assertion/index.php">Assertion/index.php</a></p>

## Fractal
**This package provides a presentation and transformation layer for complex data output**
<p>To install the Fractal package, run the NEXT command</p>

```
composer require league/fractal
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Fractal/index.php">Fractal/index.php</a></p>

## Notification
**This package allows displaying desktop notifications**
<p>To install the Notification package, run the NEXT command</p>

```
composer require jolicode/jolinotif
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Notification/index.php">Notification/index.php</a></p>

### Finally, run `php -S localhost:8000` command...enjoy 😉🤙
