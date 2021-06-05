<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use DiDom\Document;

$document = new Document('https://haraj.com.sa/', true);

$html = <<< HTML
<html>
    <head>
        <title>Web Scraping | PHP</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    </head>
</html>
HTML;

echo $html;

if ($document->has('.postlist')) {
    $postsInfo = $document->find('.postInfo');

    echo '<table class="table table-dark"><thead><tr><th scope="col">Title</th><th scope="col">Time</th></thead><tbody>';

    foreach ($postsInfo as $post) {
        echo '<tr>';
        if ($title = $post->find('.postTitle')[0]) {
            echo "<td>{$title->find('a::text')[0]}</td>";
        }
        if ($time = $post->find('.postExtraInfo')[0]) {
            echo "<td>{$time->find('.postExtraInfoPart')[1]->find('span::text')[0]}</td>";
        }
        // if ($location = $post->find('.postExtraInfo')[1]) {
        //     echo "<td>{$location->find('.postExtraInfoPart')[0]->find('a::text')[0]}</td>";
        // }
        // if ($owner = $post->find('.postExtraInfo')[1]) {
        //     echo "<td>{$owner->find('.postExtraInfoPart')[1]->find('a::text')[0]}</td>";
        // }
        echo '</tr>';
    }
    echo '</tbody></table>';
}
