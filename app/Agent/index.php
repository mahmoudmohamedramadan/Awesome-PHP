<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use Jenssegers\Agent\Agent;

$agent = new Agent();

/* is() method to check if the current device is windows or NOT, isDesktop() method to check if the current device is desktop */
if ($agent->is('Windows') or $agent->isDesktop()) {
    /* platform() method to get the type of `Operating system` */
    echo "The current device is PC, running {$agent->platform()}";
} else if ($agent->isMobile()) {
    /* you can also use `is` magic method to deteect the current device */
    echo 'The current device is mobile phone';
}
/* browser() method to get the browser name */
$browser = $agent->browser();
/* version() method to get the browser version */
echo " and this device using {$browser} Browser WITH {$agent->version($browser)} version<br>";

/* here to get the browser's accept languages */
$languages = $agent->languages();

foreach ($languages as $value) {
    echo "$value<br>";
}
