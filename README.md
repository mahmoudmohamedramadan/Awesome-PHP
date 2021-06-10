# Awesome PHP Project

## Coverd Topices 🤙⚡
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
</ul>

## Getting Started
<p>Install NEXT packages requires <a href="https://getcomposer.org/">Composer</a></p>

### Aura Router
**This package helps you to create routes like MVC framework like Laravel**

<p>To install Aura package, run the NEXT command</p>

```
composer require aura/router
```

<p>To implement PSR-7, run the NEXT command</p>

```
composer require zendframework/zend-diactoros
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Aura-Router/index.php">Aura-Router/index.php</a></p>

**After copy & past to get `/users/{id}` route, run the NEXT command**

```
php -S localhost:8000 -t app/Aura-Router
```

**`-t` argument refer to the PATH of `index.php`**

### DiDOM Web Scraping
**This package allows you to extract information from specific page/link**
<p>To install DiDOM package, run the NEXT command</p>

```
composer require imangazaliev/didom
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/DiDOM-Web-Scraping/index.php">DiDOM-Web-Scraping/index.php</a></p>

### CssToInlineStyles
**This package allows to merge separated HTML and CSS files into one file, and this will be very useful when you decide to send email**
<p>To install CssToInlineStyles package, run the NEXT command</p>

```
composer require tijsverkoyen/css-to-inline-styles
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/CssToInlineStyles/index.php">CssToInlineStyles/index.php</a></p>

### AmPHP MySQL
**We all know that PHP work synchronous execution, So if you send a query database then you should wait until database server response you in a blocking manner, So instead of sitting do nothing you can send the NEXT query database or do an HTTP call to an API**
<p>To install AmPHP MySQL package, run the NEXT command</p>

```
composer require amphp/mysql
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/AmPHP-MySQL/index.php">AmPHP-MySQL/index.php</a></p>

### Reflection PHP
**Reflection API allows you to know more information about Classes, Interfaces, Functions and Extenstions**
<p>There is no installation needed to use these functions; they are part of the PHP core</p>

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Reflection/index.php">Reflection/index.php</a></p>

### KNP-Menu
**This package allows you to create list HTML tag WITHOUT writing any HTML code**
<p>To install KNP-Menu package, run the NEXT command</p>

```
composer require knplabs/knp-menu
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/KNP-Menu/index.php">KNP-Menu/index.php</a></p>

### PHP-CodeSniffer
**This package allows you to detect violations of a defined coding standard in PHP, HTML, CSS files using two files, the first one is `phpcs` and the second one is `phpcbf` which used to automatically correct code standard violations**
<p>To install PHP-CodeSniffer package, run the NEXT command</p>

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

### Carbon
**This package allows you deal WITH date and time in easy manner**
<p>To install Carbon package, run the NEXT command</p>

```
composer require nesbot/carbon
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Carbon/index.php">Carbon/index.php</a></p>

### Money
**This package allows you deal WITH monetary calculations carefully**
<p>To install Mony package, run the NEXT command</p>

```
composer require brick/money
```

<p>Then copy & past the code in <a href="https://github.com/mahmoudmohamedramadan/Awesome-PHP/blob/master/app/Money/index.php">Money/index.php</a></p>

### Finally run `php -S localhost:8000` command...enjoy 😉🤙