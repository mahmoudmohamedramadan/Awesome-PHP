<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use Jenssegers\Agent\Agent;

$agent = new Agent();

// `is` method used to check if the current device is windows or not,
// `isDesktop` method to check if the current device is desktop
if ($agent->is('Windows') or $agent->isDesktop()) {
    // `platform` method used to get the type of `Operating system`
    echo "The current device is PC, running {$agent->platform()}";
} elseif ($agent->isMobile()) {
    // You can use `is` magic method also to deteect the current device
    echo 'The current device is mobile phone';
}

// `browser` method used to get the browser name
$browser = $agent->browser();

// `version` method used to get the browser version
echo " and this device using {$browser} Browser with {$agent->version($browser)} version<br>";

// Gets the accepted browser languages
$languages = $agent->languages();

foreach ($languages as $value) {
    echo "$value<br>";
}
