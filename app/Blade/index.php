<?php

require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use Jenssegers\Blade\Blade;

$viewFolderPath = dirname(__FILE__, 3) . '/app/Blade/views';

/* `Blade` class accepts two params, the first one is the `PATH` of views (or any name you want) folder and the second one is the cache folder to cache your views */
$blade = new Blade($viewFolderPath, 'cache');

// `make` method allow you to call your view, with some data
// echo $blade
//     ->make('home', ['user' => 'Mahmoud Mohamed Ramadan'])
//     ->render();

// You can use the shorthand also
echo $blade->render('home', ['user' => 'Mahmoud Mohamed Ramadan']);

// You can create your custom directive also
// $blade->directive('datetime', function ($expression) {
//     return "<?php echo with({$expression})->format('F d, Y g:i a'); ?>";
// });
