<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

$Parsedown = new Parsedown();

// Here you tell that you expect untrusted user input, so convert all HTML to normal text
// $Parsedown->setSafeMode(true);

// If you want to put the text between `em` tag, prefix and suffix it WITH underscore 
echo $Parsedown->text("Welcome, I'am <strong>_Mahmoud Mohamed Ramadan_</strong>");

// `line` method acts as div, or inline elements
echo Parsedown::instance()->line('<h3>How are you?</h3>');
echo $Parsedown->text("<div><strong>Which Programming Language you love?</strong></div>");
echo $Parsedown->text("
<div>
    <form action='' method='POST'>
        <ul>
            <li>
                <input type='checkbox' id='c-plus-plus' /> <label style='cursor:pointer' for='c-plus-plus'>C++</label>
            </li>
            <li>
                <input type='checkbox' id='c-sharp' /> <label style='cursor:pointer' for='c-sharp'>C#</label>
            </li>
            <li>
                <input type='checkbox' id='java' /> <label style='cursor:pointer' for='java'>Java</label>
            </li>
            <li>
                <input type='checkbox' id='python' /> <label style='cursor:pointer' for='python'>Python</label>
            </li>
        </ul>
        <div>
            <input type='submit' value='Submit' style='background-color:steelblue;color:white;cursor:pointer' />
        </div>
    </form>
</div>
");
