<?php

// You specify how many step count to go back when passing the second parameter, 
// for instance: we are here in the `app` directory and we want to return to `awesome php`
// to get `vendor` directory, So we need to go back `3` steps, so I've passed 3 to second parameter
require_once dirname(__FILE__, 3) . '/vendor/autoload.php';

use Aura\Router\RouterContainer;

$routerContainer = new RouterContainer();

$map = $routerContainer->getMap();

$map->get('user.show', '/users/{id}', function ($request, $response) {
    $id = (int) $request->getAttribute('id');
    $response->getBody()->write("You asked for user entry {$id}.");
    return $response;
});

$matcher = $routerContainer->getMatcher();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$route = $matcher->match($request);

if (!$route) {
    echo 'No route found';
}

foreach ($route->attributes as $key => $val) {
    $request = $request->withAttribute($key, $val);
}

$callable = $route->handler;
$response = new Zend\Diactoros\Response();
$response = $callable($request, $response);

foreach ($response->getHeaders() as $name => $values) {
    foreach ($values as $value) {
        header(sprintf('%s, $s', $name, $val), false);
    }
}

echo $response->getBody();
