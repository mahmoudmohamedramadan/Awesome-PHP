<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use Joli\JoliNotif\Notification;
use Joli\JoliNotif\NotifierFactory;

$notifier = NotifierFactory::create();

$iconPath =  dirname(__FILE__, 2) . '/assets/img/php_logo.png';

$notification =
    (new Notification())
    ->setTitle('Awesome PHP')
    ->setBody('Welcome to Awesome PHP Project, here you will find repositories of awesome packages')
    ->setIcon($iconPath);

$notifier->send($notification);

echo 'Notification triggered successfully';
