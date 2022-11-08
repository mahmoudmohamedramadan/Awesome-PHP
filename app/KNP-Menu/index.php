<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use Knp\Menu\MenuFactory;
use Knp\Menu\Renderer\ListRenderer;

$html = <<< HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KNP-Meun | PHP Awesome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
HTML;

echo $html;

$factory = new MenuFactory();
$menu = $factory->createItem('My menu');
$menu->setAttribute('class', 'col-md-8 list-group');

$menu->addChild(
    'GitHubMenu',
    [
        'uri' => 'https://github.com/mahmoudmohamedramadan',
        'label' => 'Github',
        'attributes' => ['class' => 'list-group-item']
    ]
);

$menu->addChild('LinkedIn', [
    'uri' => 'https://www.linkedin.com/in/mahmoudmohamedramadan/',
    'attributes' => ['class' => 'list-group-item']
]);

$menu->addChild(
    'Instagram',
    [
        'uri' => 'https://www.instagram.com/mahmoudmohamedramadan496/',
        'attributes' => ['class' => 'list-group-item']
    ]
);

// This line allows you to rename menu which has name `Home`
$menu["GitHubMenu"]->setLabel("GitHub");

$renderer = new ListRenderer(new \Knp\Menu\Matcher\Matcher());

echo '<main class="col-md-5 mt-5">';
echo $renderer->render($menu);
echo '</main>';
