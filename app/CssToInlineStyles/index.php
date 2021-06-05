<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

$html = <<< HTML

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSSTOInlineStyles | PHP</title>
</head>
<body id="content">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                CSSTOInlineStyles
            </div>
            <div class="links">
                <a href="https://www.facebook.com/mahmoud.ramadan.10690203">Facebook</a>
                <a href="https://www.instagram.com/mahmoud.m.ramadan.5">Instagram</a>
                <a href="https://www.linkedin.com/in/mahmoud-mohamed-ramadan-268b93188">LinkedIn</a>
                <a href="https://github.com/mahmoudmohamedramadan">GitHub</a>
            </div>
        </div>
    </div>
</body>
</html>

HTML;

// create instance
$cssToInlineStyles = new CSSTOInlineStyles();

$css = file_get_contents(dirname(__FILE__, 2) . '/assets/css/app.css');

// output
echo $cssToInlineStyles->convert(
    $html,
    $css
);
