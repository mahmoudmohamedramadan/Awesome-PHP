# Awesome PHP Project

## Coverd Topices 🤙⚡
<ul>
    <li><a href="https://github.com/auraphp/Aura.Router">Aura Router</a></li>
    <li><a href="https://github.com/Imangazaliev/DiDOM">DiDOM Web Scraping</a></li>
    <li><a href="https://github.com/tijsverkoyen/CssToInlineStyles">CssToInlineStyles</a></li>
    <li><a href="https://github.com/amphp/mysql">Amp PHP MySQL</a></li>
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