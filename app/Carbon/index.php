<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use Carbon\Carbon;

function printDateTime($prefixDateTime, $dateTime)
{
    printf("{$prefixDateTime}: %s", $dateTime);
    echo '<br>';
}

// Printing current date and time
printDateTime("Now", Carbon::now());

// Adding two days (or any number you want)to the current date and time
printDateTime("After Add Two Days", Carbon::now()->addDays(2));

// Subtracting two weeks (or any number you want) from the current date and time
printDateTime("After Subtract Two Weeks", Carbon::now()->subWeek(2));

// Printing how old are you by pass the date of birth of you
printDateTime("How Old Iam", Carbon::createFromDate(2000, 6, 27)->age);

if (Carbon::now()->isWeekend()) {   // weeked is monday
    echo 'Party! <br>';
} else {
    echo 'NOT weekend for sorry :( <br>';
}

// Subtracting two minutes (or any number you want) from current time as a human readable format
printDateTime("Active From", Carbon::now()->subMinutes(2)->diffForHumans());
